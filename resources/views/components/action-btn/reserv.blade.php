<td>
    <button data-bs-toggle="modal" data-bs-target="#message-modal-{{$record->id}}"
            class="btn btn-icon btn-bg-light btn-active-color-info btn-sm me-1 my-1">
        <div class="w-100 h-100 d-flex justify-content-center align-items-center"
             data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{__('dash.message')}}">
            <span class="svg-icon svg-icon-3">
                <i class="fas fa-eye"></i>
            </span>
        </div>
    </button>
    <div class="modal fade" tabindex="-1" id="message-modal-{{$record->id}}">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{__('front.Job Application')}}</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-2x">
                            <i class="fas fa-times"></i>
                        </span>
                    </div>
                    <!--end::Close-->
                </div>
                <div class="modal-body">
                    <table class="table table-striped" >
                        <thead class="thead-dark">
                        <tr class="text-start text-dark fw-bolder fs-7 text-uppercase gs-0">
                            <th class="min-w-100px">{{__('dash.input')}}</th>
                            <th class="min-w-100px">{{__('dash.value')}}</th>
                        </tr>
                        </thead>
                        <tbody class="fw-bold text-gray-800">
                            <tr class="p-4">
                                <td class="ps-3">{{__('front.Choose Location')}}</td>
                                <td>{{$record->location}}</td>
                            </tr>
                            <tr class="p-4">
                                <td class="ps-3">{{__('front.Choose Hotel')}}</td>
                                <td>{{$record->hotel}}</td>
                            </tr>
                            <tr class="p-4">
                                <td class="ps-3">{{__('front.check in')}}</td>
                                <td>{{$record->checkin}}</td>
                            </tr>
                            <tr class="p-4">
                                <td class="ps-3">{{__('front.check out')}}</td>
                                <td>{{$record->checkout}}</td>
                            </tr>
                            <tr class="p-4">
                                <td class="ps-3">{{__('dash.phone')}}</td>
                                <td>{{$record->phone}}</td>
                            </tr>
                            <tr class="p-4">
                                <td class="ps-3">{{__('dash.email')}}</td>
                                <td>{{$record->email}}</td>
                            </tr>
                            <tr class="p-4">
                                <td class="ps-3">{{__('front.Room')}}</td>
                                <td>{{$record->room}}</td>
                            </tr>
                            <tr class="p-4">
                                <td class="ps-3">{{__('front.They need a transfer from the airport?')}}</td>
                                <td>{{$record->delivery == "1" ? __('front.Yes') : __('front.No') }} </td>
                            </tr>
                            <tr class="p-4">
                                <td class="ps-3">{{__('front.Flight No')}}</td>
                                <td>{{$record->flight_no}}</td>
                            </tr>
                            <tr class="p-4">
                                <td class="ps-3">{{__('front.Arrival Time')}}</td>
                                <td>{{$record->arrival_time}}</td>
                            </tr>
                            <tr class="p-4">
                                <td class="ps-3">{{__('dash.number_people')}}</td>
                                <td>{{$record->number_people}}</td>
                            </tr>
                            <tr class="p-4">
                                <td class="ps-3">{{__('dash.number_people')}}</td>
                                <td>
                                    @foreach($record->peoples as $people)
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <hr>
                                        </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">{{ __('front.name and username') }}</th>
                                            <td>{{ $people->fullname }}</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">{{ __('front.age') }}</th>
                                            <td>{{ $people->age }}</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">{{ __('front.N.passport') }}</th>
                                            <td>{{ $people->number_passport }}</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">{{ __('front.nationality') }}</th>
                                            <td>{{ $people->nationality }}</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    @endforeach
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        <a class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm delete-btn" data-url="{{route('dashboard.reservations.destroy', $record)}}"
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
</td>
