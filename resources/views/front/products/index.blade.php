@extends('front.layouts.app')
@section('title')
{{__('front.Products')}}
@endsection
@section('titlePage')
{{__('front.Products')}}
@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{__('front.home')}}</a></li>
<li class="breadcrumb-item active">{{__('front.Products')}}</li>
@endsection

@section('content')
<div class="container">
    <div class="cs-sidebar_frame cs-style1">
      <div class="cs-sidebar_frame_left">
        <div class="cs-filter_sidebar">
          <div class="cs-search_widget">
            <div  class="cs-search">
              <input type="text" class="cs-search_input" id="input-search" value="{{$search??''}}" placeholder="{{__('front.Search')}}">
              <button class="cs-search_btn" id="btn-search">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.16667 16.3333C12.8486 16.3333 15.8333 13.3486 15.8333 9.66667C15.8333 5.98477 12.8486 3 9.16667 3C5.48477 3 2.5 5.98477 2.5 9.66667C2.5 13.3486 5.48477 16.3333 9.16667 16.3333Z" stroke="currentColor" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M17.5 18L13.875 14.375" stroke="currentColor" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>

          </div>
          <input type="hidden" >
          <input type="hidden" name="type" id="input-type" value='{{$type}}'>

          @if($type == 'all' ||  $type == 'otc')
          <div class="cs-filter_widget">
            <h2 class="cs-filter_toggle_btn">
                {{$product_types->where('title' , 'otc')->first()->name}}
              <span class="cs-arrow_icon">
                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.679688 0.96582L4.67969 4.96582L8.67969 0.96582" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </h2>
            <div class="cs-filter_toggle_body">
                <ul>
                    @php $count_one = 0   @endphp
                    @foreach ($product_types->where('title' , 'otc')->first()->categories as $category)
                    <li>
                        <div class="form-check">
                          <input class="form-check-input input-check" type="checkbox" id="flexCheckChecked-{{ ++$count_one}}-otc" value="{{$category->id}}" >
                          <label class="form-check-label" for="flexCheckChecked-{{$count_one}}-otc">{{ $category->name }}</label>
                        </div>
                      </li>
                    @endforeach
                </ul>
                {{-- @endif --}}
            </div>
          </div> <!-- .cs-filter_widget -->
          @endif
          @if($type == 'all' ||  $type == 'therapeutic')
          <div class="cs-filter_widget">
            <h2 class="cs-filter_toggle_btn">
                {{$product_types->where('title' , 'therapeutic')->first()->name}}
              <span class="cs-arrow_icon">
                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.679688 0.96582L4.67969 4.96582L8.67969 0.96582" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </h2>
            <div class="cs-filter_toggle_body">
              <ul>
                @php $count_two = 0   @endphp
                @foreach ($product_types->where('title' , 'therapeutic')->first()->categories as $category)
                <li>
                    <div class="form-check">
                      <input class="form-check-input input-check" type="checkbox" id="flexCheckChecked-{{ ++$count_two }}-therapeutic" value="{{$category->id}}" >
                      <label class="form-check-label" for="flexCheckChecked-{{ $count_two }}-therapeutic">{{ $category->name}}</label>
                    </div>
                  </li>
                @endforeach

              </ul>
            </div>
          </div> <!-- .cs-filter_widget -->
          @endif
          @if($type == 'all' ||  $type == 'brand')
          <div class="cs-filter_widget">
            <h2 class="cs-filter_toggle_btn">
                {{$product_types[2]->name}}
              <span class="cs-arrow_icon">
                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.679688 0.96582L4.67969 4.96582L8.67969 0.96582" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </h2>
            <div class="cs-filter_toggle_body">
              <ul>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.a')}}" id="a" >
                    <label class="form-check-label" for="a">{{__('front.a')}}</label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="{{__('front.b')}}" name="collection" id="b">
                    <label class="form-check-label" for="b">
                        {{__('front.b')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio"  name="collection"  value="{{__('front.c')}}"  id="c">
                    <label class="form-check-label" for="c">
                        {{__('front.c')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.d')}}"  id="d">
                    <label class="form-check-label" for="d">
                        {{__('front.d')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.e')}}"  id="e">
                    <label class="form-check-label" for="e">
                        {{__('front.e')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.f')}}"  id="f">
                    <label class="form-check-label" for="f">
                        {{__('front.f')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.g')}}"  id="g">
                    <label class="form-check-label" for="g">
                        {{__('front.g')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.h')}}"  id="h">
                    <label class="form-check-label" for="h">
                        {{__('front.h')}}

                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.i')}}"  id="i">
                    <label class="form-check-label" for="i">
                        {{__('front.i')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.j')}}"  id="j">
                    <label class="form-check-label" for="j">
                        {{__('front.j')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.k')}}"  id="k">
                    <label class="form-check-label" for="k">
                        {{__('front.k')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.l')}}"  id="l">
                    <label class="form-check-label" for="l">
                        {{__('front.l')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.m')}}"  id="m">
                    <label class="form-check-label" for="m">
                        {{__('front.m')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.n')}}"  id="n">
                    <label class="form-check-label" for="n">
                        {{__('front.n')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.o')}}"  id="o">
                    <label class="form-check-label" for="o">
                        {{__('front.o')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.p')}}"  id="p">
                    <label class="form-check-label" for="p">
                        {{__('front.p')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.q')}}"  id="q">
                    <label class="form-check-label" for="q">
                        {{__('front.q')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.r')}}"  id="r">
                    <label class="form-check-label" for="r">
                        {{__('front.r')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.s')}}"  id="s">
                    <label class="form-check-label" for="s">
                        {{__('front.s')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.t')}}"  id="t">
                    <label class="form-check-label" for="t">
                        {{__('front.t')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.u')}}"  id="u">
                    <label class="form-check-label" for="u">
                        {{__('front.u')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.v')}}"  id="v">
                    <label class="form-check-label" for="v">
                        {{__('front.v')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.w')}}"  id="w">
                    <label class="form-check-label" for="w">
                        {{__('front.w')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.x')}}"  id="x">
                    <label class="form-check-label" for="x">
                        {{__('front.x')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.y')}}"  id="y">
                    <label class="form-check-label" for="y">
                        {{__('front.y')}}
                    </label>
                  </div>
                </li>
                <li>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="collection"  value="{{__('front.z')}}"  id="z">
                    <label class="form-check-label" for="z">
                        {{__('front.z')}}
                    </label>
                  </div>
                </li>
              </ul>
            </div>
          </div> <!-- .cs-filter_widget -->
          @endif

        </div>
      </div>
      <div class="cs-sidebar_frame_right">
        <div class="cs-filter_head">
          <div class="cs-filter_head_left">
            <span class="cs-search_result cs-medium cs-ternary_color"><span id="result"></span> {{ __('front.Results') }}</span>
            <a id="btn-clear" class="cs-clear_btn" style="cursor: pointer;">{{ __('front.Clear All') }}</a>
          </div>
          <form name="sortProducts"  id="sortProducts" action="">
            <input type="hidden" name="url" id="url" value='{{url()->current()}}'>
          <div class="cs-filter_head_right">
            <div class="cs-form_field_wrap cs-select_arrow">
              <select class="cs-form_field cs-field_sm" id="sort" name="sort">
                <option value="">{{ __('front.Sort By') }}</option>
                <option value="product_asc">{{ __('front.By Asc') }}</option>
                <option value="product_desc">{{ __('front.By Desc') }}</option>
              </select>
            </div>
        </form>
          </div>
        </div>
        <div class="cs-height_30 cs-height_lg_30"></div>
        <div class="row product_filter">
            @include('front.products.product_items')
        </div>
        <div class="cs-height_10 cs-height_lg_10"></div>
        <div class="text-center">
            <button class="cs-btn cs-style1 cs-btn_lg" id="load-more"><span>{{__('front.load more')}}</span></button>
        </div>
      </div>
    </div>
</div>

@endsection
{{--

@push('script')
    <script>
    </script>
@endpush --}}
