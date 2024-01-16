@foreach ($annual as $file)
<li class=" wow  animate__animated animate__fadeInUp">
    <a href="{{$file->file}}" download="{{$file->file_name}}" class="cs-activity cs-gray_bg">
        <div class="cs-activity_avatar cs-center">
            <i class="fa-solid fa-chart-bar fa-2x cs-accent_color"></i>
        </div>
        <div class="cs-activity_right">
        {{-- <p class="cs-activity_text">{{__('front.Annual Report')}} {{\Carbon\Carbon::parse($file->created_at)->translatedFormat('Y')}}</p> --}}
        <p class="cs-activity_text">{{$file->file_name}}</p>
        <p class="cs-activity_posted_by text-dark">{{\Carbon\Carbon::parse($file->created_at)->translatedFormat('d F Y h:i a')}}</p>
        </div>
        <div class="cs-activity_icon cs-center cs-white_bg cs-accent_color">
            <i class="fa-solid fa-file-arrow-down fa-2x cs-accent_color"></i>
        </div>
    </a>
</li>
@endforeach
