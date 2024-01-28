@extends('admin.layouts.auth')

@section('content')
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" >
            <div class="foggy-overlay"></div>
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <img alt="Logo" src="{{asset(asset(\App\Models\Setting::where('setting_key', 'second_logo')->first()->setting_value))}}" class=" mb-10" style="max-height:60px;" />
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <form class="form w-100" method="POST" action="{{route('home.login.form')}}">
                        @csrf
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">{{__('front.Sign In')}}</h1>
                        </div>
                        @if ($errors->any())
                            <!--begin::Alert-->
                            <div class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row p-5 mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column pe-0 pe-sm-10">
                                    <h4 class="fw-bold">{{ __('Whoops! Something went wrong.') }}</h4>
                                    <!--begin::Content-->
                                    @foreach ($errors->all() as $error)
                                        <span>{{ $error }}</span>
                                    @endforeach
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Close-->
                                <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                    <span class="svg-icon svg-icon-2x svg-icon-danger">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"/>
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"/>
                                        </svg>
                                    </span>
                                </button>
                                <!--end::Close-->
                            </div>
                            <!--end::Alert-->
                        @endif

                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark">{{__('dash.name')}}</label>
                            <input class="form-control form-control-lg form-control-solid" type="text" name="name" />
                        </div>
                        <div class="fv-row mb-10">
                            <label class="form-label fs-6 fw-bolder text-dark">{{__('dash.password')}}</label>
                            <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="text">{{__('dash.login')}}</span>
                                <span class="btn-loader d-none"><i class="fas fa-circle-notch fa-spin p-0"></i> {{__('dash.please wait')}}</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{asset('dashboard_assets/js/custom/authentication/sign-in/general.js')}}"></script>
@endpush

@push('style')
<style>
    .foggy-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('{{asset('front_assets/images/background.png')}}');
    background-size: cover;
    filter: blur(3px);
    z-index: -1;
}
</style>
@endpush
