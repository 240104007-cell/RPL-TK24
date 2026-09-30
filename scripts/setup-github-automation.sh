#!/usr/bin/env bash
set -euo pipefail

if ! command -v gh >/dev/null 2>&1; then
  echo "ERROR: GitHub CLI (gh) belum terpasang."
  echo "Install: https://cli.github.com/"
  exit 1
fi

if ! gh auth status >/dev/null 2>&1; then
  echo "ERROR: GitHub CLI belum login. Jalankan: gh auth login"
  exit 1
fi

REPO="${1:-}"
REVIEWER="${2:-}"

if [[ -z "$REPO" ]]; then
  REPO=$(gh repo view --json nameWithOwner -q .nameWithOwner 2>/dev/null || true)
fi

if [[ -z "$REPO" ]]; then
  echo "Usage: bash scripts/setup-github-automation.sh OWNER/REPO [USERNAME_DOSEN]"
  exit 1
fi

if [[ -z "$REVIEWER" ]]; then
  OWNER="${REPO%%/*}"
  REVIEWER="$OWNER"
fi

echo "Repository : $REPO"
echo "Reviewer   : $REVIEWER"

# Store reviewer as a repository Actions variable.
gh variable set DOSEN_GITHUB_USERNAME --repo "$REPO" --body "$REVIEWER"

# Create labels used by automation.
gh label create "tugas-mahasiswa" --repo "$REPO" --description "Pull Request tugas mahasiswa" --color "1D76DB" --force
gh label create "approved" --repo "$REPO" --description "Disetujui reviewer" --color "0E8A16" --force
gh label create "perlu-revisi" --repo "$REPO" --description "Perlu revisi mahasiswa" --color "D93F0B" --force

# Enable GitHub auto-merge and automatic branch deletion after merge.
# Keep all existing merge methods; the automation itself uses squash.
gh api --method PATCH "repos/$REPO" \
  -f allow_auto_merge=true \
  -f delete_branch_on_merge=true \
  -f allow_squash_merge=true >/dev/null

cat <<MSG

Automation dasar berhasil dikonfigurasi.

Langkah manual yang MASIH wajib:
1. Settings -> Rules -> Rulesets -> buat ruleset untuk branch main.
2. Require pull request before merging.
3. Required approvals = 1.
4. Require status checks: "Validate Student Submission".
5. Disarankan: Dismiss stale approvals dan Require conversation resolution.
6. Hubungkan repository ke Vercel dan set Production Branch = main.

Lihat docs/AUTOMATION-APPROVE-DEPLOY.md untuk detail.
MSG
