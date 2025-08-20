@extends('layouts.master')

@section('title', 'Register')

@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="mb-4">Form Register</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password">
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>
</section>
@endsection
