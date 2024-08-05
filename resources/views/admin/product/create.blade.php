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
                                        <h1 class="m-0">Thêm mới Bài viết</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">


                                <div class="border p-5 rounded bg-light bg-gradient">
                                    <form action="{{ route('product.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3 mt-3">
                                            <label for="category_id" class="form-label">Category:</label>
                                            <select class="form-select" id="category_id" name="category_id">
                                                @foreach ($categories as $id => $name)
                                                    <option value="{{ $id }}">{{ $name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3 mt-3">
                                            <label for="name" class="form-label">name:</label>
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Enter name" name="name">
                                        </div>
                                        <div class="mb-3 mt-3">
                                            <label for="img_thumbnail" class="form-label">img_thumbnail:</label>
                                            <input type="file" class="form-control" id="img_thumbnail"
                                                placeholder="Enter img_thumbnail" name="img_thumbnail">
                                        </div>

                                        <div class="mb-3 mt-3">
                                            <label for="overview" class="form-label">overview:</label>
                                            <input type="text" class="form-control" id="overview"
                                                placeholder="Enter overview" name="overview">
                                        </div>

                                        <div class="mb-3 mt-3">
                                            <label for="content" class="form-label">Content:</label>
                                            <textarea class="form-control" id="content" placeholder="Enter content" name="content" rows="10"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary ">Submit</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
