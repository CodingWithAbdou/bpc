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
        <li class="breadcrumb-item text-muted">
            <a href="{{route('dashboard.'.$model->route_key.'.index')}}" class="text-muted text-hover-primary">{{$model->{'title_'.app()->getLocale()} }}</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-300 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-dark">{{isset($data)?__('dash.edit'):__('dash.add')}}</li>
    </ul>
@endsection

@section('content')
    <form id="form-data" action="{{isset($data)?route('dashboard.'.$model->route_key.'.update', $data):route('dashboard.'.$model->route_key.'.store')}}" class="form d-flex flex-column flex-lg-row">
        <input type="text" id="id" value="{{isset($data)?$data->id:0}}" hidden>

        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px min-w-lg-300px mb-7 me-lg-10">
            <x-inputs.image label="{{__('dash.image of face')}}" name="image" required="" class="bg-dark" data="{{isset($data)?$data->image:''}}"/>
            <x-html.language_select />
        </div>

        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <div class="card card-flush py-4">
                <div class="card-header">
                    <div class="card-title">
                        <h2>{{__('dash.main_data')}}</h2>
                    </div>
                </div>
                <div class="card-body py-0">
                    <x-html.div_loader />
                    <div class="row">
                        <x-inputs.text label="{{__('dash.name of production')}}" name="name" required="" data="{{isset($data)?$data->name:''}}"/>
                        <x-inputs.select label="{{__('dash.product_type')}}" name="product_type_id" required="" data="{{isset($data)?$data->product_type_id:''}}"
                            :list="\App\Models\ProductType::take(2)->get()" optionValue="id" optionName="name" />

                        @php $Categories = \App\Models\Category::all() @endphp
                        @php $count_categ = 1 @endphp
                        <div class="row category-rows">
                            @if(isset($data))
                            @foreach ($data->categories as $category)
                            <x-inputs.select label="{{__('dash.category')}}" name="category_ids[]" required="" data="{{$category->id??''}}"
                                :list="$Categories" optionValue="id" optionName="name" />
                            @endforeach
                            @else
                            <x-inputs.select label="{{__('dash.category')}}" name="category_ids[]" required="" data="{{isset($data)?$data->categories->first(): ''}}"
                                :list="$Categories" optionValue="id" optionName="name" />
                            @endif

                        </div>

                        <div id="btn-add" class="col-md-6 ">
                            <a  class="btn btn-primary"  onclick="add_category(this);">
                                {{-- <span class="text">{{isset($data)? __('dash.save changes') : __('dash.save') }}</span> --}}
                                <span class="text">اضف تصنيف</span>
                                <span class="btn-loader d-none"><i class="fas fa-circle-notch fa-spin p-0"></i> {{__('dash.please wait')}}</span>
                            </a>
                        </div>
                        <x-inputs.editor label="{{__('dash.use')}}" name="use" required="" data="{{isset($data)?$data->use:''}}"/>
                        <x-inputs.editor label="{{__('dash.how to use')}}" name="how_to_use" required="" data="{{isset($data)?$data->how_to_use:''}}"/>
                        <div class="col-md-4">
                            <x-inputs.image label="{{__('dash.image with min size')}}" name="image_sm[0]" required="" class="bg-dark" data="{{$data->images[0]->image_sm??''}}"/>
                        </div>
                        <div class="col-md-4">
                            <x-inputs.image label="{{__('dash.image with min size')}}" name="image_sm[1]" required="" class="bg-dark" data="{{$data->images[1]->image_sm??''}}"/>
                        </div>
                        <div class="col-md-4">
                            <x-inputs.image label="{{__('dash.image with min size')}}" name="image_sm[2]" required="" class="bg-dark" data="{{$data->images[2]->image_sm??''}}"/>
                        </div>
                        <div class="col-md-4">
                            <x-inputs.image label="{{__('dash.image with large size')}}" name="image_lg[0]" required="" class="bg-dark" data="{{$data->images[0]->image_lg??''}}"/>
                        </div>
                        <div class="col-md-4">
                            <x-inputs.image label="{{__('dash.image with large size')}}" name="image_lg[1]" required="" class="bg-dark" data="{{$data->images[1]->image_lg??''}}"/>
                        </div>
                        <div class="col-md-4">
                            <x-inputs.image label="{{__('dash.image with large size')}}" name="image_lg[2]" required="" class="bg-dark" data="{{$data->images[2]->image_lg??''}}"/>
                        </div>
                        <x-inputs.file label="{{__('dash.file of product')}}" name="file" file="{{isset($data)?$data->file:''}}" fileName="{{isset($data)?$data->file_name:''}}" key="{{isset($data)?$data->id:''}}" accept="{{acceptFileType()}}"/>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{route('dashboard.'.$model->route_key.'.index')}}" class="btn btn-light me-5">{{__('dash.cancel')}}</a>
                <button type="submit" class="btn btn-primary">
                    <span class="text">{{isset($data)? __('dash.save changes') : __('dash.save') }}</span>
                    <span class="btn-loader d-none"><i class="fas fa-circle-notch fa-spin p-0"></i> {{__('dash.please wait')}}</span>
                </button>
            </div>

        </div>

    </form>
@endsection


@push('script')
    <x-js.editor />
    <x-js.form />
    <x-js.file />
    @if($model->multi_language)
        <x-js.multi_language />
    @endif
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
        function add_category(e) {
            var html_row = '<div class="col-md-6 mb-10"><label class="form-label" required >{{__("dash.category")}}</label><select name="category_ids[]" class="form-select form-select-solid" data-control="select2" data-hide-search="true"data-placeholder="{{__("dash.choose")}} {{__("dash.category")}}"><option></option>@foreach($Categories as $item) <option value="{{ $item->id }}"{{-- @isset($data->category_ids){{$item->id==$data->category_ids?"selected":"" }}@endisset --}} >{{ $item->name }}  </option>  @endforeach  </select>  {{-- @isset($hint)<div class="text-muted fs-7 mt-1 ms-1">{{$hint}}</div>@endif --}} </div>';
             $('.category-rows').append(html_row);
        }

    </script>

@endpush
