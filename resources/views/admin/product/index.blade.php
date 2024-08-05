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
                                        <h1 class="m-0">Danh sách Bài viết</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <a class="btn btn-primary" href="{{ route('product.create') }}">Thêm mới</a>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>category_id </th>
                                                <th>name</th>
                                                <th>img_thumbnail</th>
                                                <th>created_at</th>
                                                <th>updated_at</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($data as $item)
                                                <tr>
                                                    <td> {{ $item->id }} </td>
                                                    <td> {{ $item->category->name }}</td>
                                                    <td> {{ $item->name }} </td>
                                                    <td>
                                                        @php
                                                            $url = $item->img_thumbnail;
                                                            if (!Str::contains($url, 'http')) {
                                                                $url = Storage::url($url);
                                                            }
                                                        @endphp
                                                        <img src="{{ $url }}" alt="" width="100px">
                                                    </td>
                                                    <td> {{ $item->created_at }} </td>
                                                    <td> {{ $item->updated_at }} </td>
                                                    <td>
                                                        <a class="btn btn-info"
                                                            href="{{ route('product.show', $item->id) }}">Xem</a>

                                                        <a class="btn btn-warning"
                                                            href="{{ route('product.edit', $item->id) }}">Sửa</a>

                                                        <form action="{{ route('product.destroy', $item) }}" method="POST">
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
