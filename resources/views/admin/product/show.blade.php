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
                                        <h1 class="m-0">Chi tiết Bài Viết</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">


                                <table>
                                    <thead>
                                        <tr>
                                            <th>Fild Name</th>
                                            <th>Name</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($model->toArray() as $field => $value)
                                            <tr>
                                                <td>{{ $field }}:</td>
                                                <td>
                                                    @php
                                                        if ($field == 'img_thumb') {
                                                            $url = \Storage::url($value);
                                                            echo "<img src=\"$url\" alt=\"\" width=\"100px\">";
                                                        } elseif ($field == 'category_id') {
                                                            echo $model->category->name;
                                                        } else {
                                                            echo $value;
                                                        }
                                                    @endphp
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
