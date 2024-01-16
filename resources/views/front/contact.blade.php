@extends('front.layouts.app')
@section('title')
{{__('front.title-contact')}}
@endsection
@section('titlePage')
{{ __('front.Contact Us') }}
@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{ __('front.home') }}</a></li>
<li class="breadcrumb-item active">{{ __('front.Contact Us') }}</li>
@endsection

@section('content')

  <div class="container-lg">
    <div class="row justify-content-center">
        @foreach ($branches as $branch)
        <div class="col-md-4">
            <div class="card h-100 rounded-lg border-0 cs-box_shadow mb-3">
              <img src="{{asset($branch->image)}}" class="card-img-top rounded-lg" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title"><span class="cs-accent_color">{{ $branch->title_color }}</span> {{$branch->title}}</h5>
                <p class="card-text mb-2">{{ $branch->address }}</p>
                <a href="tel:+970 (2) 281-03-74" class="phone-number mb-2"><i class="fa-solid fa-phone ms-1"></i>{{ $branch->phone}}</a>
              </div>
            </div>
          </div>
        @endforeach

      <div class="row justify-content-center">
        <div class="col-12">
          <div class="card rounded-lg my-5">
            <iframe loading="lazy" src="https://maps.google.com/maps?q=Birzeit%20Pharmaceutical%20Company&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" height="250px" class="rounded-lg" title="Birzeit Pharmaceutical Company" aria-label="Birzeit Pharmaceutical Company"></iframe>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="cs-contact_box rounded-lg">
          <div class="cs-section_heading cs-style4">
            <h2 class="cs-section_title">{{ __('front.GET IN TOUCH') }}</h2>
            <p class="cs-section_subtitle">{{ __('front.Don’t Hesitate to contact with us for any information or inquiries') }}</p>
          </div>
          <div class="cs-height_45 cs-height_lg_45"></div>
          <form id='data_form' class="cs-contact_form" action="{{route('contact.store')}}">
            <div class="row">
              <div class="col-lg-6">
                <div class="cs-form_field_wrap">
                  <input type="text" name="name" class="cs-form_field" placeholder="{{ __('front.Your Name') }}">
                </div>
                <div class="cs-height_20 cs-height_lg_20"></div>
              </div>
              <div class="col-lg-6">
                <div class="cs-form_field_wrap">
                  <input type="text"  name="email" class="cs-form_field" placeholder="{{ __('front.Your Email') }}">
                </div>
                <div class="cs-height_20 cs-height_lg_20"></div>
              </div>
              <div class="col-lg-12">
                <div class="cs-form_field_wrap">
                  <input type="text"  name="subject" class="cs-form_field" placeholder="{{ __('front.Subject') }}">
                </div>
                <div class="cs-height_20 cs-height_lg_20"></div>
              </div>
              <div class="col-lg-12">
                <div class="cs-form_field_wrap">
                  <textarea cols="30" rows="5" name="message" placeholder="{{ __('front.Message...') }}" class="cs-form_field"></textarea>
                </div>
                <div class="cs-height_20 cs-height_lg_20"></div>
              </div>
              <div class="col-lg-12" >
                <button type="submit" class="cs-btn cs-style1 cs-btn_lg">
                    <span class="text">{{ __('front.Send') }}</span>
                    <span class="btn-loader d-none"><i class="fas fa-circle-notch fa-spin p-0"></i> {{__('dash.please wait')}}</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="cs-contact_card_wrap rounded-lg">
          <div class="cs-contact_card">
            <div class="cs-contact_info text-center">
              <div class="cs-contact_icon">
                <i class="fa-solid fa-building-flag cs-accent_color fa-2x"></i>
              </div>
              <h3 class="cs-contact_title">{{getLocale() === 'ar' ? $Headquarters_one->title_ar : $Headquarters_one->title_en  }}</h3>
              <p class="cs-contact_text"><a href="tel:{{$Headquarters_one->setting_value}}" class="phone-number"><i class="fa-solid fa-phone ms-1"></i>{{$Headquarters_one->setting_value}}</a></p>
              <p class="cs-contact_text"><a href="tel:{{$Headquarters_two->setting_value}}" class="phone-number"><i class="fa-solid fa-fax ms-1"></i>{{$Headquarters_two->setting_value}}</a></p>
            </div>
            <div class="cs-contact_info text-center">
              <div class="cs-contact_icon">
                <i class="fa-solid fa-code-branch cs-accent_color fa-2x"></i>
              </div>
              <h3 class="cs-contact_title">{{getLocale() === 'ar' ? $branch_one->title_ar : $branch_one->title_en  }} </h3>
              <p class="cs-contact_text"><a href="{{$branch_one->setting_value}}" class="phone-number"><i class="fa-solid fa-phone ms-1"></i>{{$branch_one->setting_value}}</a></p>
              <p class="cs-contact_text"><a href="{{$branch_two->setting_value}}" class="phone-number"><i class="fa-solid fa-fax ms-1"></i>{{$branch_two->setting_value}}</a></p>
            </div>

          </div>
        </div>
        <div class="cs-contact_card_wrap rounded-lg mt-3">
          <div class="cs-contact_card">
            <div class="cs-contact_info text-center">
              <div class="cs-contact_icon">
                <i class="fa-solid fa-envelope cs-accent_color fa-2x"></i>
              </div>
              <h3 class="cs-contact_title">{{getLocale() === 'ar' ? $email->title_ar : $email->title_en  }}</h3>
              <p class="cs-contact_text"><a href="mailto:info@bpc.com">{{$email->setting_value}}</a></p>
            </div>
            <div class="cs-contact_info text-center">
              <div class="cs-contact_icon">
                <i class="fa-solid fa-envelopes-bulk cs-accent_color fa-2x"></i>
              </div>
              <h3 class="cs-contact_title">{{getLocale() === 'ar' ? $address_ar->title_ar : $address_ar->title_en  }}</h3>
              <p class="cs-contact_text">{{getLocale() === 'ar' ? $address_ar->setting_value : $address_en->setting_value  }}</p>
            </div>

          </div>
        </div>
        <div class="cs-height_50 cs-height_lg_50"></div>
      </div>


    </div>

  </div>

@endsection
@push('script')
    <x-js.form />
    <script>
        $(document).on('submit', '#data_form', function(e){
            e.preventDefault();
            let form = $(this);
            loaderStart(form.find('button[type="submit"]'));
            HideValidationError(form);
            let action = $(this).attr('action');
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: action,
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (response) {
                    if(response.status){
                        SwalModal(response.msg, 'success');
                    }else{
                        SwalModal(response.msg, 'errors');
                    }
                    form.trigger('reset');
                    form.find('select').val(null).trigger('change');
                    loaderEnd(form.find('button[type="submit"]'));
                },
                error: function (response) {
                    $.each(response.responseJSON.errors, function (i, value) {
                        let index = i.split('.')[0];
                        showValidationError(form, index, value);
                    });
                    loaderEnd(form.find('button[type="submit"]'));
                }
            });
        })
    </script>
@endpush
