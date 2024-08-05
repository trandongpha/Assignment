@extends('admin.layouts.master')

@section('content')
    <div class="main_content_iner ">
        <div class="container-fluid p-0 ">
            <div class="row ">
                <div class="col-12">
                    <div class="dashboard_header mb_50">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_header_title">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="dashboard_breadcam text-end">
                                    <p><a href="index-2.html">Dashboard</a> <i class="fas fa-caret-right"></i>
                                        Editor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h1 class="m-0">Danh sách User</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <a class="btn btn-primary" href="">Thêm mới</a>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>NAME</th>
                                                <th>EMAIL</th>
                                                <th>TYPE</th>
                                                <th>CREATED AT</th>
                                                <th>UPDATED AT</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td>
                                                        {{ $item->id }}
                                                    </td>
                                                    <td>
                                                        {{ $item->name }}
                                                    </td>
                                                    <td>
                                                        {{ $item->email }}
                                                    </td>
                                                    <td>{{ $item->type }}</td>
                                                    <td>
                                                        {{ $item->created_at }}
                                                    </td>

                                                    <td>
                                                        {{ $item->updated_at }}
                                                    </td>

                                                    <td>
                                                        <a class="btn btn-info" href="{{ route('user.show', $item->id) }}">Xem</a>
                                                        <a class="btn btn-warning" href="">Sửa</a>
                                                        <form action="" method="POST">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button class="btn btn-danger "
                                                                onclick="return confirm('co chắc chắn muốn xóa ko')"
                                                                type="submit">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $data->Links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
