@extends('front.layouts.app')
@section('title')
{{__('front.title-financial-reports')}}
@endsection
@section('titlePage')
{!!__('front.Financial  <span class="cs-accent_color">Reports</span>') !!}
@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{__('front.home')}}</a></li>
<li class="breadcrumb-item">{{__('front.Investor Relations')}}</li>
<li class="breadcrumb-item"><a href="#">{{__('front.Financial Information')}}</a></li>
<li class="breadcrumb-item active">{{__('front.Financial Reports')}}</li>
@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="cs-activity_wrap cs-box_shadow cs-white_bg">
          <div class="cs-tabs cs-fade_tabs cs-style1">
            <div class="cs-medium">
              <ul class="cs-tab_links cs-style1 cs-medium cs-primary_color cs-mp0 cs-primary_font">
                <li id="report-annual" class="content-report active"><a href="#Annual">{{__('front.Annual Report')}}</a></li>
                <li id="report-quarter" class="content-report" ><a href="#Quarter">{{__('front.Quarter Report')}}</a></li>
              </ul>
            </div>
            <div class="cs-height_20 cs-height_lg_20"></div>
            <div class="cs-tab_content">
              <div id="Annual" class="cs-tab  active">
                <div class="cs-white_bg cs-general_box_5">
                  <ul class="cs-activity_list cs-mp0 content-annual">
                    @include('front.InvestorRelations.items-annual')
                  </ul>
                </div>
              </div><!-- .cs-tab -->
              <div id="Quarter" class=" cs-tab">
                <div class="cs-white_bg cs-general_box_5">
                  <ul class="cs-activity_list cs-mp0 content-quarter">
                    @include('front.InvestorRelations.items-quarter')
                  </ul>
              </div>
              </div><!-- .cs-tab -->
            </div>
          </div>


        </div>
        <div class="cs-height_50 cs-height_lg_40"></div>
        <div class="text-center">
          <a id="load-more-report"  class="cs-btn cs-style1 cs-btn_lg"><span>{{__('front.Load More')}}</span></a>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="card rounded-lg cs-box_shadow  wow  animate__animated animate__fadeInLeft">
            <img class=" rounded-lg" width="auto" height="300px" src="{{$data->image_one}}">
          </div>
      </div>


    </div>
  </div>


@endsection
@push('script')
<script>
    let page_annual =1
    let page_quarter =1
      $('#load-more-report').on('click', function () {
        let type = document.querySelector('.content-report.active').id
        if(type == 'report-annual') {
            page_annual++
        }else {
            page_quarter++
        }
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: '/financial-report',
            data:{type:type,page_annual:page_annual,page_quarter:page_quarter},
            type: 'POST',
            success: function (data) {
                if(type == 'report-annual') {
                    $('.content-annual').append(data)
                }else {
                    $('.content-quarter').append(data)
                }
            },error:function(){
                console.log('error')
            }
        });
    });
</script>
@endpush
