<?php
// Single entrypoint for all student pages.
// Vercel Hobby sees this as ONE Serverless Function.

declare(strict_types=1);

$username = isset($_GET['username']) ? strtolower(trim((string) $_GET['username'])) : '';

if ($username === '' || !preg_match('/^[a-z0-9-]+$/', $username)) {
    http_response_code(400);
    header('Content-Type: text/html; charset=UTF-8');
    echo '<!doctype html><html lang="id"><meta charset="utf-8"><title>400</title><body style="font-family:system-ui;padding:40px"><h1>400</h1><p>Username mahasiswa tidak valid.</p><p><a href="/">Kembali ke daftar mahasiswa</a></p></body></html>';
    exit;
}

$studentsDir = realpath(__DIR__ . '/../students');
$studentFile = realpath(__DIR__ . '/../students/' . $username . '.php');

if ($studentsDir === false || $studentFile === false || !str_starts_with($studentFile, $studentsDir . DIRECTORY_SEPARATOR)) {
    http_response_code(404);
    header('Content-Type: text/html; charset=UTF-8');
    echo '<!doctype html><html lang="id"><meta charset="utf-8"><title>404</title><body style="font-family:system-ui;padding:40px"><h1>404</h1><p>Halaman mahasiswa tidak ditemukan.</p><p><a href="/">Kembali ke daftar mahasiswa</a></p></body></html>';
    exit;
}

require $studentFile;
