@foreach ($products as $product)
@if($paginate++ == 12)  @break @endif
<div class="col-xl-3 col-lg-4 col-sm-6 prodcut_items">
    <div class="cs-card cs-style4 cs-box_shadow cs-white_bg">
      <a href="{{ route('products.show' , $product->id ) }}" class="cs-card_thumb cs-zoom_effect">
        <img src="{{ asset($product->image) }}" alt="Image" class="cs-zoom_item w-100">
      </a>
      <div class="cs-card_info">
        <h3 class="cs-card_title mt-4"><a href="{{ route('products.show' , $product->id ) }}">{{ $product->name }}</a></h3>

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
          <a href="{{ route('products.show' , $product->id  ) }}" class="cs-card_btn_2 w-100 text-center"><span>{{__('front.details')}}</span></a>
        </div>
      </div>
    </div>
    <div class="cs-height_30 cs-height_lg_30"></div>
  </div>
@endforeach
