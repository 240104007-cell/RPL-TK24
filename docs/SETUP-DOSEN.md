# Setup Dosen — Vercel Hobby Friendly

## 1. Buat repository GitHub

Buat repository kosong, misalnya `rpl-interface-kelas-2026`, lalu jalankan dari folder project:

```bash
git init
git add .
git commit -m "Initial RPL interface repository"
git branch -M main
git remote add origin https://github.com/USERNAME-DOSEN/rpl-interface-kelas-2026.git
git push -u origin main
```

## 2. Tambahkan mahasiswa sebagai collaborator

Tambahkan akun GitHub mahasiswa dengan akses yang memungkinkan mereka membuat/push branch. Mahasiswa tidak perlu push langsung ke `main`.

## 3. Lindungi branch `main`

Buat GitHub Ruleset / Branch Protection untuk `main` dan aktifkan minimal:

- perubahan masuk melalui Pull Request;
- status check harus berhasil sebelum merge;
- blok force push;
- bila diperlukan, approval dosen sebelum merge.

Workflow repository menyediakan pemeriksaan **Validate student submission**.

## 4. Arsitektur Vercel

Versi ini hanya memakai **1 Vercel Function**:

```text
api/index.php
```

Sedangkan file mahasiswa berada di:

```text
students/bagas.php
students/aldrin.php
students/auriel.php
...
```

`vercel.json` merewrite URL:

```text
/student/bagas
```

ke router:

```text
/api/index.php?username=bagas
```

Vercel melakukan parameter forwarding dari dynamic rewrite ke function.

## 5. Hubungkan ke Vercel

1. Login Vercel.
2. Pilih **Add New → Project**.
3. Import repository GitHub kelas.
4. Root Directory: root repository.
5. Deploy.

Tidak perlu menambahkan 16 PHP file ke konfigurasi `functions`. Hanya `api/index.php` yang harus didaftarkan sebagai runtime.

## 6. Pengujian

Halaman kelas:

```text
https://NAMA-PROJECT.vercel.app/
```

Contoh halaman mahasiswa:

```text
https://NAMA-PROJECT.vercel.app/student/bagas
https://NAMA-PROJECT.vercel.app/student/aldrin
```

## 7. Alur penilaian

1. Mahasiswa clone repository.
2. Mahasiswa membuat branch sesuai username.
3. Mahasiswa hanya mengedit `students/<username>.php`.
4. Mahasiswa commit dan push branch.
5. Mahasiswa membuat Pull Request ke `main`.
6. GitHub Actions memvalidasi submission.
7. Dosen review tampilan/kode.
8. Dosen merge Pull Request.
9. Vercel redeploy otomatis.

## 8. Menambah mahasiswa

Misalnya mahasiswa baru username `nanda`:

```bash
cp templates/mahasiswa.php students/nanda.php
```

Ubah identitas pada bagian awal file tersebut, lalu tambahkan satu kartu/link `/student/nanda` pada `index.html`.

Tidak perlu mengubah daftar Vercel Functions.

## 9. Test lokal

```bash
php -S localhost:8000 scripts/dev-router.php
```

Buka:

```text
http://localhost:8000/
http://localhost:8000/student/bagas
```
