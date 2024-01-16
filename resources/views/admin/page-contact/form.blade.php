@extends('admin.layouts.main')

@section('title')
    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{$model->{'title_'.app()->getLocale()} }}</h1>
    <span class="h-20px border-gray-300 border-start mx-4"></span>
    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
        <li class="breadcrumb-item text-muted">
            <a href="{{route('dashboard.home')}}" class="text-muted text-hover-primary">{{__('dash.home')}}</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-300 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-dark">{{$model->{'title_'.app()->getLocale()} }}</li>
    </ul>
@endsection

@section('content')
    <form id="form-data" class="form"  action="{{route('dashboard.page-contact.update')}}" >
        <div class="card setting-card">
            <div class="card-header card-header-stretch overflow-auto">
                <!--begin::Tabs-->
                <ul class="nav nav-stretch nav-line-tabs fw-bold border-transparent flex-nowrap" role="tablist" id="kt_layout_builder_tabs">
                    <li class="nav-item">
                        <a class="nav-link"  href="#contact" role="tab">{{__('dash.Contact Information')}}</a>
                    </li>
                </ul>
                <!--end::Tabs-->
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="tab-content pt-3">
                    @foreach($setting->where('category', 2) as $data)
                        @if($data->type_id == 1)
                            <div class="row mb-10">
                                <label class="col-lg-3 col-form-label text-lg-end">{{$data->{'title_'.app()->getLocale()} }} @if(last(explode('_', $data->setting_key))=='ar') "AR" @elseif(last(explode('_', $data->setting_key))=='en') "EN" @else @endif</label>
                                <div class="col-lg-9 col-xl-4">
                                    <input type="text" class="form-control form-control-solid ltr" name="{{$data->setting_key}}"
                                            id="{{$data->setting_key}}" value="{{$data->setting_value}}" autocomplete="off">
                                </div>
                            </div>
                        @elseif($data->type_id == 3)
                            <div class="row mb-10">
                                <label class="col-lg-3 col-form-label text-lg-end">{{$data->{'title_'.app()->getLocale()} }} @if(last(explode('_', $data->setting_key))=='ar') "AR" @elseif(last(explode('_', $data->setting_key))=='en') "EN" @else @endif</label>
                                <div class="col-lg-9 col-xl-4">
                                    <textarea class="form-control form-control-solid" name="{{$data->setting_key}}" rows="5"
                                                id="{{$data->setting_key}}" data-kt-autosize="true">{{$data->setting_value}}</textarea>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="card-footer py-8">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-9">
                        <button type="submit" id="kt_layout_builder_preview" class="btn btn-primary me-2">
                            <span class="indicator-label">{{__('dash.save')}}</span>
                        </button>
                        <a href="{{route('dashboard.page-contact.index')}}" class="btn btn-active-light btn-color-muted">
                            <span class="indicator-label">{{__('dash.cancel')}}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection


@push('script')
    <x-js.form />

    <script>
        $(document).on('submit', '#form-data', function(e){
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
                        SwalModal(response.msg, 'success', response.url);
                    }else{
                        SwalModal(response.msg, 'error');
                    }
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
