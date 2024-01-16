@extends('front.layouts.app')
@section('title')
{{__('front.title-show-products')}}
@endsection
@section('titlePage' , 'Products')
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}"></a></li>
<li class="breadcrumb-item active">{{__('front.Products')}}</li>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="slider-for">
            @foreach ($product->images as $image)
            <div class="slider-item">
                <div class="cs-slider_thumb_lg"><img src="{{asset($image->image_lg)}}" alt=""></div>
            </div>
            @endforeach

        </div>
        <div class="cs-height_25 cs-height_lg_25"></div>
        <div class="slider-nav">
            @foreach ($product->images as $image)
            <div class="slider-item">
                <div class="cs-slider_thumb_sm"><img src="{{asset($image->image_sm)}}" alt=""></div>
            </div>
          @endforeach

        </div>
      </div>
      <div class="col-lg-6">
        <div class="cs-height_0 cs-height_lg_40"></div>
        <div class="cs-single_product_head">
            @php $count=0 @endphp
            @foreach ($product->categories as $category)
            @php $count++ @endphp
            <b class="cs-primary_color">
            {{ $category->name }}
            {{ $count <= count($product->categories) - 1 ? ' & ' : ''  }}
            </b>
            @endforeach
            <p>
                <b class="cs-primary_color">
                {{ $product->product_type->name}}
            </b>

            </p>
        </div>
        <div class="cs-height_25 cs-height_lg_25"></div>

        <div class="cs-tabs cs-fade_tabs cs-style1">
          <div class="cs-medium">
            <ul class="cs-tab_links cs-style1 cs-medium cs-primary_color cs-mp0 cs-primary_font">
              <li class="active"><a href="#Indication">Indication (Use)</a></li>
              <li><a href="#Does">Does (How To Use)</a></li>
            </ul>
          </div>
          <div class="cs-height_20 cs-height_lg_20"></div>
          <div class="cs-tab_content">
            <div id="Indication" class="cs-tab active">
              <div class="cs-white_bg cs-box_shadow cs-general_box_5">
                {!! $product->use !!}
            </div>
            </div><!-- .cs-tab -->
            <div id="Does" class="cs-tab">
              <div class="cs-white_bg cs-box_shadow cs-general_box_5">
                {!! $product->how_to_use !!}

            </div>
            </div><!-- .cs-tab -->
          </div>
        </div>
        <div class="cs-height_30 cs-height_lg_30"></div>

        <div class="row">

          <div class="col-6">
            <a href="{{asset($product->file)}}" download="{{$product->file_name}}" class="cs-btn cs-style1 cs-btn_lg w-100 text-center"><span>{{__('front.Download Product file')}}</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cs-height_95 cs-height_lg_70"></div>
  <div class="container">
    <h2 class="cs-section_heading cs-style1">Other Products</h2>
    <div class="cs-height_45 cs-height_lg_45"></div>
    <div class="cs-grid_5 cs-gap_30">
        @foreach ($products as $product)
      <div class="cs-card cs-style4 cs-box_shadow cs-white_bg">

        <a href="{{ route('products.show' ,  $product->id ) }}" class="cs-card_thumb cs-zoom_effect">
          <img src="{{ asset($product->image) }}" alt="Image" class="cs-zoom_item w-100">
        </a>
        <div class="cs-card_info">
          <h3 class="cs-card_title mt-4"><a href="{{ route('products.show' , $product->id ) }}">{{$product->name}}</a></h3>
          <div class="cs-card_price">{{__('front.Categories')}}:
            @php $count=0 @endphp
            @foreach ($product->categories as $category)
            @php $count++ @endphp
            <b class="cs-primary_color">
            {{ $category->name }}
            {{ $count <= count($product->categories) - 1 ? ' & ' : ''  }}
            </b>
            @endforeach
        </div>
          <hr>
          <div class="cs-card_footer">

            <a href="{{ route('products.show' , $product->id) }}" class="cs-card_btn_2 w-100 text-center"><span>Details</span></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

@endsection
