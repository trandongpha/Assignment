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
        <div class="modal-header theme_bg_1 justify-content-center">
            <h5 class="modal-title text_white">Resister</h5>
        </div>
        <div class="modal-body">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <label for="name" class="mt-4">Name</label>
                <input class="form-control" type="text" name="name" id="name">

                <label for="email" class="mt-4">Email</label>
                <input class="form-control" type="email" name="email" id="email">

                <label for="password" class="mt-4">Password</label>
                <input class="form-control" type="password" name="password" id="password">

                <label for="password_confirmation" class="mt-4">Confirmation Password</label>
                <input class="form-control" type="password" name="password_confirmation"" id="password">

                <button type="submit" class="btn btn-primary mt-4 btn_1 full_width text-center"> Đăng ký</button>

                <p>Need an account? <a data-bs-toggle="modal" data-bs-target="#sing_up" data-bs-dismiss="modal"
                        href="#">Log in</a></p>
                <div class="text-center">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#forgot_password" data-bs-dismiss="modal"
                        class="pass_forget_btn">Forget Password?</a>
                </div>
            </form>
        </div>
    </div>
@endsection
