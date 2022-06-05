@extends('layouts.authLayout')
@section('container')
<form class="login100-form validate-form" style="background-color: #0c0c0c;">
    <span class="login100-form-title p-b-43">
        Masuk untuk Melanjutkan
    </span>


    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="email">
        <span class="focus-input100"></span>
        <span class="label-input100">Email</span>
    </div>


    <div class="wrap-input100 validate-input" data-validate="Password is required">
        <input class="input100" type="password" name="pass">
        <span class="focus-input100"></span>
        <span class="label-input100">Password</span>
    </div>

    <div class="flex-sb-m w-full p-t-3 p-b-32">
        <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
                Ingat saya
            </label>
        </div>

        <div>
            <a href="#" class="txt1">
                Lupa Password?
            </a>
        </div>
    </div>


    <div class="container-login100-form-btn">
        <button class="login100-form-btn btn-1">
            Masuk
        </button>
    </div>

    <div class="text-center p-t-46 p-b-20">
        <span class="txt2">
            Belum punya akun?
        </span>
        <span>
            <a href="/register" class="txt1">Daftar Sekarang</a>
        </span>
    </div>
</form>
@endsection
