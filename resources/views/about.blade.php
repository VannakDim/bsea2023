@extends('layouts.app')
@section('title','About page')
@section('heading')
<div class="container-fluit bg-primary hero-header">
    <div class="row g-3 align-items-center">
        <div class="col-lg-12 text-center">
                <h1 class="text-white mb-4 animated zoomIn kh">អំពីសមាគមន៍</h1>
        </div>
    </div>
</div>
@stop

@section('content')

    <!-- About Start -->
    <div class="container-xxl py-3 mt-3">
        <div class="container">
            <div class="row g-5 align-items-center">

                {{-- Display About Image --}}
                @foreach ($abouts as $about)
                @if ($about->title == 'image')
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="/storage/app/img/{{ $about->description }}">
                </div>
                @endif
                @endforeach

                @foreach ($abouts as $about)
                @if ($about->class == 'about')
                <div class="col-lg-6">
                    <h2 class="mb-4 h-about">{{ $about->title }}</h2>
                    <p align="justify" class="mb-4">{!! html_entity_decode($about->description) !!}</p>
                </div>
                @endif
                @endforeach
            </div>
            
            <div class="row g-5 align-items-center">
            @foreach ($abouts as $about)
            @if ($about->class == 'h6')
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 d-flex">
                        <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                            <i class="{{ $about->icon }}"></i>
                        </div>
                        <div class="ms-4">
                            <h6>{{ $about->title }}</h6>
                            <p align="justify">{!! $about->description !!}</p>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6>បច្ចុប្បន្នភាព</h6>
                    <hr>
                    <p>បច្ចុប្បន្ននេះ BSEA មានក្រុមប្រឹក្សាប្រតិបត្តិដែលជាថ្នាក់ដឹកនាំកំពូលចំនួន ១៧រូប ដែលអញ្ជើញមក និងតំណាងពីវិស័យសំខាន់ដូច ដែលបានជម្រាបជូនខាងលើ។</p>
                    <p>ដើម្បីឲ្យការងារសម្រេចបានទៅតាមផែនការ និងការឆ្លើយតបតាមតម្រូវការរបស់សមាជិក, ស.ក.ស.អ បានបង្កើតផ្នែកចំនួន៥ដូចខាងក្រោម៖</p>
                    <!-- <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a> -->
                    </br>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    @foreach ($abouts as $about)
                    @if ($about->class == 'section')

                        <div class="row g-5">
                            <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="{{  $about->icon }}"></i>
                                    </div>
                                    <h6 class="mb-0">{{ $about->title }}</h6>
                                </div>
                                <p align="justify">{!! $about->description !!}</p>
                            </div>
                        </div>

                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
<!-- Features End -->

@stop