@extends('auth.layouts.master')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="modal-content cs_modal">
        <div class="modal-header justify-content-center theme_bg_1">
            <h5 class="modal-title text_white">Log in</h5>
        </div>
        <div class="modal-body">
            <form action="{{ route('login') }}" method="post">
                @csrf

                <label for="email" class="mt-4">Email</label>
                <input class="form-control" type="email" name="email" id="email">

                <label for="password" class="mt-4">Password</label>
                <input class="form-control" type="password" name="password" id="password">

                <button type="submit" class="btn btn-primary mt-4 btn_1 full_width text-center"> Đăng nhập</button>

                <p>Need an account? <a data-bs-toggle="modal" data-bs-target="#sing_up" data-bs-dismiss="modal"
                        href="#"> Sign Up</a></p>
                <div class="text-center">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#forgot_password" data-bs-dismiss="modal"
                        class="pass_forget_btn">Forget Password?</a>
                </div>
            </form>
        </div>
    </div>
@endsection
