@extends('layouts.authLayout')
@section('container')
<form class="regist100-form validate-form" style="background-color: #0c0c0c;">
    <span class="login100-form-title p-b-43">
        Daftar
    </span>

    <div class="wrap-regist100 validate-input" data-validate="Anda harus memasukkan nama Anda">
        <input class="input100" type="text" name="neme">
        <span class="focus-input100"></span>
        <span class="label-regist100">Masukkan Nama</span>
    </div>

    <div class="wrap-regist100 validate-input" data-validate="Diperlukan alamat wmail yang valid: ex@abc.xyz">
        <input class="input100" type="text" name="email">
        <span class="focus-input100"></span>
        <span class="label-regist100">Masukkan Email</span>
    </div>


    <div class="wrap-regist100 validate-input" data-validate="Password tidak boleh kosong">
        <input class="input100" type="password" name="pass">
        <span class="focus-input100"></span>
        <span class="label-regist100">Masukkan Password</span>
    </div>

    <div class="wrap-regist100 validate-input" data-validate="Masukkan konfirmasi password">
        <input class="input100" type="password" name="pass">
        <span class="focus-input100"></span>
        <span class="label-regist100">Masukkan Konfirmasi Password</span>
    </div>

    <div class="flex-sb-m w-full p-t-3 p-b-32">
    </div>


    <div class="container-login100-form-btn">
        <button class="login100-form-btn btn-1">
            Daftar
        </button>
    </div>

    <div class="text-center p-t-46 p-b-20">
        <span class="txt2">
            Sudah punya akun?
        </span>
        <span>
            <a href="/login" class="txt1">Login Sekarang</a>
        </span>
    </div>
</form>
@endsection