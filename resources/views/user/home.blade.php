@extends('layouts.user')
@section('title', 'Home')
@section('content')

<div class="container-fluid" data-aos="fade" data-aos-delay="100">
  <div class="swiper-container images-carousel">
    <div class="swiper-wrapper">
      @foreach ($albums as $album)
      <div class="swiper-slide">
        <div class="image-wrap">
          <div class="image-info">
            <h2 class="mb-3">{{$album->name}}</h2>
            <a href="{{$album->link}}" target="_blank" class="btn btn-outline-white py-2 px-4">More Photos</a>
          </div>
          <img src="../{{$album->thumbnail}}" alt="Image">
        </div>
      </div>
      @endforeach
    </div>

    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-scrollbar"></div>
  </div>
</div>

@endsection