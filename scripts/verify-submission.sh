#!/usr/bin/env bash
set -euo pipefail

USERNAME="${1:-}"
if [[ -z "$USERNAME" ]]; then
  echo "Usage: bash scripts/verify-submission.sh <username>"
  exit 1
fi

FILE="students/${USERNAME}.php"
if [[ ! -f "$FILE" ]]; then
  echo "ERROR: $FILE tidak ditemukan."
  exit 1
fi

CURRENT_BRANCH="$(git branch --show-current)"
if [[ "$CURRENT_BRANCH" != "$USERNAME" ]]; then
  echo "WARNING: branch saat ini '$CURRENT_BRANCH', sedangkan username '$USERNAME'."
  echo "Disarankan menggunakan branch: $USERNAME"
fi

if command -v php >/dev/null 2>&1; then
  php -l "$FILE"
else
  echo "WARNING: PHP CLI tidak terpasang; lint lokal dilewati."
fi

echo
echo "File submission: $FILE"
echo "Status sintaks : OK (jika lint PHP dijalankan)"
echo
echo "Sebelum commit, cek agar hanya file ini yang Anda ubah:"
git status --short
