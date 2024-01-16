<td>
    @can('admin.newsletter.delete')
        <a class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm delete-btn" data-url="{{route('dashboard.newsletter.destroy', $record)}}"
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
