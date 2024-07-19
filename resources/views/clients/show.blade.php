@extends('clients.layouts.master')

@section('content')
    <div class="py-4"></div>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" col-lg-9   mb-5 mb-lg-0">
                    <article>
                        <div class="post-slider mb-4">
                            <img src="{{ $data->img_thumbnail }}" class="card-img" alt="post-thumb">
                        </div>

                        <h1 class="h2">{{ $data->name }}</h1>
                        <ul class="card-meta my-3 list-inline">
                            <li class="list-inline-item">
                                <a href="author-single.html" class="card-meta-author">
                                    <img src="/reader/images/john-doe.jpg">
                                    <span>Charls Xaviar</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-timer"></i>2 Min To Read
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-calendar"></i>{{ $data->created_at->format('d M, Y') }}
                            </li>
                            <li class="list-inline-item">
                                <ul class="card-meta-tag list-inline">
                                    <li class="list-inline-item"><a href="tags.html">Color</a></li>
                                    <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
                                    <li class="list-inline-item"><a href="tags.html">Fish</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="content">
                            <p>{{ $data->content }}</p>


                        </div>
                    </article>

                </div>

                <div class="col-lg-9 col-md-12">
                    <div class="mb-5 border-top mt-4 pt-5">
                        <h3 class="mb-4">Bài Viết liên quan</h3>
                        @foreach ($relatedNews  as $item)
                            <div class="media d-block d-sm-flex mb-4 pb-4">
                                <div class="media-body">
                                    <div class="">
                                        <img src="{{ $item->img_thumbnail }}" class="" alt="post-thumb" width="200px">
                                    </div>
                                    <a href="{{route('clients.show', $item->id)}}" class="h4 d-inline-block mb-3 mt-2"> <li>{{ $item->name }}</li></a>

                                    <p>{{ $item->overview }}</p>

                                    <span class="text-black-800 mr-3 font-weight-600">{{ date('j M, Y', strtotime($item->created_at)) }}</span>
                                    <a class="text-primary font-weight-600" href="#!">Reply</a>
                                </div>
                            </div>
                        @endforeach

                    </div>


                </div>

            </div>
        </div>
    </section>
@endsection
