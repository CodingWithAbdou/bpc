<td>
    <button data-bs-toggle="modal" data-bs-target="#message-modal-{{$record->id}}"
            class="btn btn-icon btn-bg-light btn-active-color-info btn-sm me-1 my-1">
        <div class="w-100 h-100 d-flex justify-content-center align-items-center"
             data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__('dash.details')}}">
            <span class="svg-icon svg-icon-3">
                <i class="fas fa-eye"></i>
            </span>
        </div>
    </button>
    <div class="modal fade" tabindex="-1" id="message-modal-{{$record->id}}">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('dash.message')}}</h5>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-2x">
                            <i class="fas fa-times"></i>
                        </span>
                    </div>
                    <!--end::Close-->
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4"><p>{{__('dash.join_type_id')}}</p></div>
                        <div class="col-md-8"><p>{{__('front.Join the company team')}}</p></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><p>{{__('dash.name')}}</p></div>
                        <div class="col-md-8"><p>{{$record->name}}</p></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><p>{{__('dash.mobile')}}</p></div>
                        <div class="col-md-8"><p>{{$record->mobile}}</p></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><p>{{__('dash.email')}}</p></div>
                        <div class="col-md-8"><p>{{$record->email}}</p></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><p>{{__('dash.governorate_id')}}</p></div>
                        <div class="col-md-8"><p>{{$record->governorate_id?$record->Governorate->title:''}}</p></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><p>{{__('dash.speciality')}}</p></div>
                        <div class="col-md-8"><p>{{$record->speciality}}</p></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><p>{{__('dash.job_title_id')}}</p></div>
                        <div class="col-md-8"><p>{{$record->job_title_id?$record->JobTitle->title:''}}</p></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><p>{{__('dash.cv_file')}}</p></div>
                        <div class="col-md-8"><a href="{{asset($record->cv_file)}}" download><i class="fas fa-cloud-download-alt"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @can('admin.company-team.delete')
        <a class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm delete-btn" data-url="{{route('dashboard.company-team.destroy', $record)}}"
            data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__('dash.delete')}}">
            <span class="text">
                <span class="svg-icon svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                </svg>
            </span>
            </span>
            <span class="btn-loader d-none"><i class="fas fa-circle-notch fa-spin p-0"></i></span>
        </a>
    @endcan
</td>
