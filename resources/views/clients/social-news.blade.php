@extends('clients.layouts.master')

@section('content')
    <div class="py-3"></div>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 mb-4">
                    <h1 class="h2 mb-4">TRANG TIN TỨC XÃ HỘI

                    </h1>
                </div>
                <div class="col-lg-10">
                    @foreach ($data as $item)
                        <article class="card mb-4">
                            <div class="row card-body">
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <div class="post-slider slider-sm">
                                        <img src="{{ $item->img_thumbnail }}" class="card-img" alt="post-thumb"
                                            style="height:200px; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3 class="h4 mb-3"><a class="post-title"
                                            href="{{ route('clients.show', $item->id) }}">{{ $item->name }}</a></h3>
                                    <ul class="card-meta list-inline">
                                        <li class="list-inline-item">
                                            <a href="author-single.html" class="card-meta-author">
                                                <img src="images/john-doe.jpg">
                                                <span>Mark Dinn</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="ti-timer"></i>2 Min To Read
                                        </li>
                                        <li class="list-inline-item">
                                            <i class="ti-calendar"></i>14 jan,
                                            2020{{ date('j M, Y', strtotime($item->created_at)) }}
                                        </li>
                                        <li class="list-inline-item">
                                            <ul class="card-meta-tag list-inline">
                                                <li class="list-inline-item"><a href="tags.html">Decorate</a></li>
                                                <li class="list-inline-item"><a href="tags.html">Creative</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <p>{{ $item->overview }}</p>
                                    <a href="post-details.html" class="btn btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </article>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
