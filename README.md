# RPL Interface Kelas 2026 — Vercel Hobby Friendly

Starter repository tugas **Rekayasa Perangkat Lunak** dengan satu repository GitHub milik dosen, satu file PHP per mahasiswa, Pull Request, GitHub Actions, dan deployment Vercel.

Versi ini dirancang khusus agar **tidak terkena batas 12 Vercel Functions pada Hobby**. Semua halaman mahasiswa dirutekan melalui **satu** entrypoint PHP: `api/index.php`.

## Arsitektur

```text
rpl-interface-kelas-2026/
├── api/
│   └── index.php                 # SATU-SATUNYA Vercel Function / router
├── students/                     # file tugas mahasiswa (bukan function terpisah)
│   ├── bagas.php
│   ├── aldrin.php
│   ├── auriel.php
│   └── ...
├── templates/
│   └── mahasiswa.php
├── docs/
│   ├── SETUP-DOSEN.md
│   ├── PANDUAN-MAHASISWA.md
│   └── mahasiswa.csv
├── scripts/
│   ├── dev-router.php            # router lokal
│   └── verify-submission.sh
├── .github/
│   ├── pull_request_template.md
│   └── workflows/submission-check.yml
├── index.html                    # galeri/daftar mahasiswa
├── vercel.json
├── .vercelignore
└── .gitignore
```

## Mengapa hanya 1 Function?

`vercel.json` hanya mendaftarkan:

```json
{
  "functions": {
    "api/index.php": {
      "runtime": "vercel-php@0.9.0"
    }
  }
}
```

URL seperti `/student/bagas` direwrite ke `api/index.php`. Router membaca username lalu memuat `students/bagas.php`.

Jadi:

```text
/student/bagas  ─┐
/student/aldrin ─┼─> api/index.php ─> students/<username>.php
/student/auriel ─┘
```

Jumlah mahasiswa tidak menambah jumlah Vercel Functions selama file mahasiswa tetap berada di `students/` dan hanya `api/index.php` yang didaftarkan sebagai runtime.

## Konsep pengumpulan

- Satu mahasiswa = satu branch, misalnya `bagas`.
- Satu mahasiswa = hanya mengubah satu file, misalnya `students/bagas.php`.
- Mahasiswa push branch lalu membuat Pull Request ke `main`.
- GitHub Actions mengecek file yang diubah dan sintaks PHP.
- Dosen review lalu merge.
- Vercel redeploy production dari branch `main`.

## URL hasil

```text
https://NAMA-PROJECT.vercel.app/
https://NAMA-PROJECT.vercel.app/student/bagas
https://NAMA-PROJECT.vercel.app/student/aldrin
```

## Test lokal

Dari root repository:

```bash
php -S localhost:8000 scripts/dev-router.php
```

Kemudian buka:

```text
http://localhost:8000/
http://localhost:8000/student/bagas
```

## Dokumentasi

- Dosen: [`docs/SETUP-DOSEN.md`](docs/SETUP-DOSEN.md)
- Mahasiswa: [`docs/PANDUAN-MAHASISWA.md`](docs/PANDUAN-MAHASISWA.md)

## Catatan runtime PHP

Project menggunakan community runtime `vercel-php@0.9.0`. Cocok untuk latihan/kelas dan microproject. Arsitektur aplikasi PHP production yang lebih besar sebaiknya memakai runtime/hosting PHP yang memang ditujukan untuk aplikasi PHP penuh.
