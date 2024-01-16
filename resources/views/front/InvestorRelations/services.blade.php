@extends('front.layouts.app')
@section('title')
{{__('front.title-investor-services')}}
@endsection
@section('titlePage')
{!! __('front.Investor <span class="cs-accent_color">services</span>') !!}
@endsection
@section('titleLinks')
<li class="breadcrumb-item"><a href="{{ route('home.index') }}">{{__('front.home')}}</a></li>
<li class="breadcrumb-item">{{__('front.Investor Relations')}}</li>
<li class="breadcrumb-item active">{{__('front.Investor services')}}</li>
@endsection

@section('content')

  <section>
    <div class="container-lg">
        <div class="row justify-content-center">
          <div class="col-lg-4">

            <div class="cs-contact_card_wrap  rounded-lg">
              <div class="cs-contact_card">

                <div class="cs-contact_info text-center">
                  <div class="cs-contact_icon">
                    <i class="fa-brands fa-whatsapp cs-accent_color fa-2x"></i>
                  </div>
                  <h3 class="cs-contact_title">{{ __('front.WhatsApp') }}</h3>
                  <p class="cs-contact_text"><a href="https://wa.me/97222967206" target="_blank" class="phone-number"><i class="fa-solid fa-phone ms-1"></i>{{ $data->whatsapp }}</a></p>

                </div>
                <div class="cs-contact_info text-center">
                  <div class="cs-contact_icon">
                    <i class="fa-solid fa-at cs-accent_color fa-2x"></i>
                  </div>
                  <h3 class="cs-contact_title">{{ __('front.Email') }}</h3>
                  <p class="cs-contact_text"><a href="mailto:shareholders@bpc.ps">{{ $data->email }}</a></p>
                </div>

              </div>
            </div>
            <div class="card cs-box_shadow rounded-lg border-0 my-3 p-5 text-dark">
                    {!!  getLocale() == 'ar' ?  $data->description_ar :  $data->description_en !!}

            </div>
          </div>
          <div class="col-lg-8">
            <div class="cs-contact_box bg-light rounded-lg">
              <div class="cs-section_heading cs-style4">
                <h2 class="cs-section_title cs-accent_color">{{ __('front.Cash Dividend Transfer Request Form') }}</h2>
                <p class="cs-section_subtitle text-dark fw-bold"{{ __('front.for Birzeit Pharmaceutical Company Shareholders') }}></p>

              </div>
              <div class="cs-height_45 cs-height_lg_45"></div>
              <form class="cs-contact_form" id="data_form" action="{{route('investor-services.store')}}  ">
                <div class="row">
                  <div class="col-12">
                    <h5><i class="fa-solid fa-circle-info cs-accent_color"></i>{{__('front.Personal Information') }}</h5>
                  </div>
                  <div class="col-lg-6">
                    <div class="cs-form_field_wrap">
                      <input name="name" type="text" class="cs-form_field" placeholder="{{__('front.Your Full Name') }}">
                    </div>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                  </div>
                  <div class="col-lg-6">
                    <div class="cs-form_field_wrap">
                      <input  name="card_id" type="text" class="cs-form_field" placeholder="{{__('front.Card Number ID/Passport/Personal')}}">
                    </div>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                  </div>
                  <div class="col-12">
                    <h5><i class="fa-solid fa-address-book cs-accent_color"></i>{{ __('front.Contact Information') }}</h5>
                  </div>

                  <div class="col-lg-6">
                    <div class="cs-form_field_wrap">
                      <input name="mobile" type="text" class="cs-form_field" placeholder="{{__('front.Mobile/Tel Number')}}">
                    </div>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                  </div>
                  <div class="col-lg-6">
                    <div class="cs-form_field_wrap">
                      <input name="email" type="text" class="cs-form_field" placeholder="{{__('front.Email Address')}}">
                    </div>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                  </div>
                  <div class="col-lg-12">
                    <div class="cs-form_field_wrap">
                      <input name="address" type="text" class="cs-form_field" placeholder="{{__('front.Residence Address - P.O. Box')}}">
                    </div>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                  </div>
                  <div class="col-12">
                    <h5><i class="fa-solid fa-id-card cs-accent_color"></i>{{__('front. Documents Required to be Attached with this Form')}}</h5>
                  </div>
                  <div class="col-lg-12">
                    <div class="cs-form_field_wrap">
                      <label class="text-dark fw-bold mb-2">{{__('front.Copy of Passport or Personal ID') }}</label>
                      <div class="cs-file_wrap">
                        <div class="cs-file_in">
                          <svg width="46" height="47" viewBox="0 0 46 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M44.125 36.5H39.25V31.625C39.25 31.194 39.0788 30.7807 38.774 30.476C38.4693 30.1712 38.056 30 37.625 30C37.194 30 36.7807 30.1712 36.476 30.476C36.1712 30.7807 36 31.194 36 31.625V36.5H31.125C30.694 36.5 30.2807 36.6712 29.976 36.976C29.6712 37.2807 29.5 37.694 29.5 38.125C29.5 38.556 29.6712 38.9693 29.976 39.274C30.2807 39.5788 30.694 39.75 31.125 39.75H36V44.625C36 45.056 36.1712 45.4693 36.476 45.774C36.7807 46.0788 37.194 46.25 37.625 46.25C38.056 46.25 38.4693 46.0788 38.774 45.774C39.0788 45.4693 39.25 45.056 39.25 44.625V39.75H44.125C44.556 39.75 44.9693 39.5788 45.274 39.274C45.5788 38.9693 45.75 38.556 45.75 38.125C45.75 37.694 45.5788 37.2807 45.274 36.976C44.9693 36.6712 44.556 36.5 44.125 36.5Z" fill="#737A99"/>
                            <path d="M24.625 36.5H5.125C4.69402 36.5 4.2807 36.3288 3.97595 36.024C3.67121 35.7193 3.5 35.306 3.5 34.875V5.625C3.5 5.19402 3.67121 4.7807 3.97595 4.47595C4.2807 4.17121 4.69402 4 5.125 4H34.375C34.806 4 35.2193 4.17121 35.524 4.47595C35.8288 4.7807 36 5.19402 36 5.625V25.125C36 25.556 36.1712 25.9693 36.476 26.274C36.7807 26.5788 37.194 26.75 37.625 26.75C38.056 26.75 38.4693 26.5788 38.774 26.274C39.0788 25.9693 39.25 25.556 39.25 25.125V5.625C39.25 4.33207 38.7364 3.09209 37.8221 2.17785C36.9079 1.26361 35.6679 0.75 34.375 0.75H5.125C3.83207 0.75 2.59209 1.26361 1.67785 2.17785C0.763615 3.09209 0.25 4.33207 0.25 5.625V34.875C0.25 36.1679 0.763615 37.4079 1.67785 38.3221C2.59209 39.2364 3.83207 39.75 5.125 39.75H24.625C25.056 39.75 25.4693 39.5788 25.774 39.274C26.0788 38.9693 26.25 38.556 26.25 38.125C26.25 37.694 26.0788 37.2807 25.774 36.976C25.4693 36.6712 25.056 36.5 24.625 36.5Z" fill="#737A99"/>
                            <path d="M14.875 15.375C17.1187 15.375 18.9375 13.5562 18.9375 11.3125C18.9375 9.06884 17.1187 7.25 14.875 7.25C12.6313 7.25 10.8125 9.06884 10.8125 11.3125C10.8125 13.5562 12.6313 15.375 14.875 15.375Z" fill="#737A99"/>
                            <path d="M8.84625 20.7209L6.75 22.8334V33.2497H32.75V22.8334L25.7787 15.8459C25.6277 15.6936 25.448 15.5727 25.2499 15.4902C25.0519 15.4077 24.8395 15.3652 24.625 15.3652C24.4105 15.3652 24.1981 15.4077 24.0001 15.4902C23.802 15.5727 23.6223 15.6936 23.4713 15.8459L14.875 24.4584L11.1537 20.7209C11.0027 20.5686 10.823 20.4477 10.6249 20.3652C10.4269 20.2827 10.2145 20.2402 10 20.2402C9.78548 20.2402 9.57308 20.2827 9.37506 20.3652C9.17704 20.4477 8.99731 20.5686 8.84625 20.7209Z" fill="#737A99"/>
                          </svg>
                          <h3>{!! __('front.Drag and drop an image or <span>Upload</span>') !!}</h3>
                          <p>{{ __('front.high resulation image (jpeg, png, svg)')}}</p>
                        </div>
                        <div class="cs-close_file" title="Close">
                          <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.421875" y="0.163086" width="32" height="32" rx="16" fill="url(#paint0_linear_1353_4256)"/>
                            <path d="M22.129 11.8702C22.5195 11.4797 22.5195 10.8465 22.129 10.456C21.7385 10.0655 21.1053 10.0655 20.7148 10.456L22.129 11.8702ZM10.7148 20.456C10.3242 20.8465 10.3242 21.4797 10.7148 21.8702C11.1053 22.2607 11.7385 22.2607 12.129 21.8702L10.7148 20.456ZM12.129 10.456C11.7385 10.0655 11.1053 10.0655 10.7148 10.456C10.3242 10.8465 10.3242 11.4797 10.7148 11.8702L12.129 10.456ZM20.7148 21.8702C21.1053 22.2607 21.7385 22.2607 22.129 21.8702C22.5195 21.4797 22.5195 20.8465 22.129 20.456L20.7148 21.8702ZM20.7148 10.456L10.7148 20.456L12.129 21.8702L22.129 11.8702L20.7148 10.456ZM10.7148 11.8702L20.7148 21.8702L22.129 20.456L12.129 10.456L10.7148 11.8702Z" fill="white"/>
                            <defs>
                            <linearGradient id="paint0_linear_1353_4256" x1="0.421875" y1="0.163086" x2="38.7886" y2="19.5877" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#01acab"/>
                            <stop offset="1" stop-color="#095d5c"/>
                            </linearGradient>
                            </defs>
                          </svg>
                        </div>
                        <input name="image" type="file" class="cs-file" accept="image/*">
                        <img src="/" class="cs-preview" alt="Image">
                      </div>
                      <div class="cs-height_25 cs-height_lg_25"></div>
                    </div>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                  </div>
                  <div class="col-12">
                    <h5><i class="fa-solid fa-building-columns cs-accent_color"></i> {{__('front.Banking Information')}}</h5>
                  </div>
                  <div class="col-lg-6">
                    <div class="cs-form_field_wrap">
                      <input name="bank_name" type="text" class="cs-form_field" placeholder="{{__('front.Bank/Branch Name')}}">
                    </div>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                  </div>
                  <div class="col-lg-6">
                    <div class="cs-form_field_wrap">
                      <input name="iban" type="text" class="cs-form_field" placeholder="{{__('front.Your Active Account IBAN Number')}}">
                    </div>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                  </div>
                  <div class="col-lg-12">
                    <button type="submit" class="cs-btn cs-style1 cs-btn_lg">
                        <span class="text">{{ __('front.Send') }}</span>
                        <span class="btn-loader d-none"><i class="fas fa-circle-notch fa-spin p-0"></i> {{__('dash.please wait')}}</span>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

    </div>
  </section>
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
