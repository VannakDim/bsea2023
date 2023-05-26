@extends('layouts.app')

@section('title','BSEA Cambodia')

@section('heading')
<div class="container-fluit bg-primary hero-header">
        <div class="row g-3 align-items-center">
                <div class="col-lg-12 text-center">
                        <h1 class="text-white mb-4 animated zoomIn kh">សមាគមន៍កាបូប ស្បែកជើង និងអេឡិចត្រូនិចកម្ពុជា</h1>
                        <h1 class="text-white mb-4 animated zoomIn ch">柬 埔 寨 箱 包 、鞋 业 和 电 子 商 会</h1>
                        <h1 class="text-white mb-4 animated zoomIn en">Cambodia’s Bag, Shoe and Electronic Association</h1>
                </div>
        </div>
</div>
@include('layouts.carousel')

@stop

@section('content')
<!-- About Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                <img class="img-fluid" src="img/about.png">
            </div> -->
            @foreach ($abouts as $about)
                @if ($about->class == 'about')
                <div class="col-lg-6">
                    <h2 class="mb-4 h-about">{{ $about->title }}</h2>
                    <p align="justify" class="mb-4">{!! html_entity_decode($about->description) !!}</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="{{ route('about',app()->getLocale()) }}">Read More</a>
                </div>
                @endif
            @endforeach
            
            <div class="col-lg-6 wow fadeInUp">
                <div class="row g-3 mb-4">

                    @foreach ($abouts as $about)
                    @if ($about->class == 'section')
                    
                    <div class="col-sm-12 wow fadeIn">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                <i class="{{ $about->icon }}"></i>
                            </div>
                            <h6 class="mb-0">{{ $about->title }}</h6>
                        </div>
                    </div>

                    @endif
                    @endforeach

                </div>
            </div>

<!-- About End -->

{{-- Post Section --}}
        <div class="wrapper">
            <i id="left" class="fa-solid fa-angle-left"></i>
            <ul class="carousel-card">
                @foreach($posts as $post)
                    <li class="card">
                    <div class="img"><img src="/storage/app/img/{{ $post->photo }}" alt="{{ $post->photo }}" draggable="false"></div>
                    <h2>{{ $post->title }}</h2>
                    <span>{{ $post->content }}</span>
                    </li>
                @endforeach
            </ul>
            <i id="right" class="fa-solid fa-angle-right"></i>
            </div>
        </div>
    </div>
</div>
@stop
