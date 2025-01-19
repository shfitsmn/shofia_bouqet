@extends('layouts.dashboard.login-register')

@section('title', 'Login')

@section('form')
<form method="POST" action="/login">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Masukkan Email" id="exampleInputEmail1"
            aria-describedby="emailHelp">
    </div>
    <div class="mb-4">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Masukkan Password"
            id="exampleInputPassword1">
    </div>
    <div class="d-flex align-items-center justify-content-between mb-4">
        <div class="form-check">
            <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label text-dark" for="flexCheckChecked">
                Remeber this Device
            </label>
        </div>
        <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
    </div>
    <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
    <div class="d-flex align-items-center justify-content-center">
        <a class="text-primary fw-bold ms-2" href="/register">Create an account</a>
    </div>
</form>
@endsection