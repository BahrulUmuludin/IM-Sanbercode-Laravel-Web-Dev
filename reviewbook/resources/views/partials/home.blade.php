@extends('layouts.master')

@section('title', 'Home')

@section('content')
<section class="py-5 text-center">
    <div class="container">
        <h1 class="display-4">Selamat Datang di Home</h1>
        <p class="lead">Ini halaman utama menggunakan template Business. Anda bisa menambahkan konten lain di sini.</p>
        <a href="/register" class="btn btn-primary btn-lg mt-3">Daftar Sekarang</a>
    </div>
</section>
@endsection
