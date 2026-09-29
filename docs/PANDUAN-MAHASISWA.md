# Panduan Mahasiswa

## Aturan utama

Anda hanya diperbolehkan mengubah **satu file milik Anda sendiri** di folder `students/`.

Contoh username `bagas`:

```text
students/bagas.php
```

Jangan mengubah `api/index.php`, `vercel.json`, `index.html`, file mahasiswa lain, workflow GitHub, atau konfigurasi repository.

## 1. Clone repository

```bash
git clone https://github.com/USERNAME-DOSEN/rpl-interface-kelas-2026.git
cd rpl-interface-kelas-2026
```

## 2. Buat branch sesuai username kelas

```bash
git checkout -b bagas
```

Ganti `bagas` dengan username Anda.

## 3. Edit file milik sendiri

```text
students/bagas.php
```

Seluruh HTML, CSS, JavaScript, dan PHP tugas harus tetap berada di dalam satu file tersebut.

## 4. Jalankan lokal

Jika PHP sudah terpasang:

```bash
php -S localhost:8000 scripts/dev-router.php
```

Kemudian buka:

```text
http://localhost:8000/student/bagas
```

## 5. Verifikasi sebelum push

```bash
bash scripts/verify-submission.sh bagas
```

## 6. Commit

```bash
git add students/bagas.php
git commit -m "Tugas interface Bagas"
```

## 7. Push

```bash
git push -u origin bagas
```

## 8. Buat Pull Request

Di GitHub buat Pull Request:

```text
bagas → main
```

Dosen akan melakukan review dan merge.

## 9. URL setelah merge dan deploy

```text
https://NAMA-PROJECT.vercel.app/student/bagas
```

## Jika branch `main` sudah berubah

```bash
git checkout main
git pull origin main
git checkout bagas
git merge main
```

Jika terjadi conflict, selesaikan lalu push kembali branch Anda.
