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
        <li class="breadcrumb-item text-dark">{{__('dash.permissions')}}</li>
    </ul>
@endsection

@section('content')
    <form class="form d-flex flex-column flex-lg-row" action="{{route('dashboard.roles.permissions.store', $role)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--begin::General options-->
            <div class="card card-flush">
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-rounded table-striped border gy-7 gs-7 mb-0">
                            <tbody>
                            @foreach($pages as $page)
                                <tr>
                                    <td>{{ $page->{'title_'.app()->getLocale()} }}</td>

                                    @foreach($page->Permission->where('is_hidden', 0) as $index=>$item)
                                        <td>
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" name="permissions[]"
                                                       value="{{ $item->id }}" id="{{ $item->name }}"
                                                    {{ in_array($item->id, $role_has_permission)? 'checked' : '' }}/>
                                                <label class="form-check-label" for="{{ $item->name }}">
                                                    {{ __('dash.'.last(explode('.', $item->name))) }}
                                                </label>
                                            </div>
                                        </td>
                                    @endforeach
                                    @if(count($page->Permission->where('is_hidden', 0)) < 5)
                                        <?php $max = 5 - count($page->Permission->where('is_hidden', 0))  ?>
                                        @while ($max != 0)
                                            <td></td>
                                            <?php $max-- ?>
                                        @endwhile
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{route('dashboard.'.$model->route_key.'.index')}}" class="btn btn-light me-5">{{__('dash.cancel')}}</a>
                <button type="submit" class="btn btn-primary">
                    <span class="indicator-label">{{__('dash.save changes')}}</span>
                </button>
            </div>
        </div>
    </form>
@endsection

@push('script')

@endpush
