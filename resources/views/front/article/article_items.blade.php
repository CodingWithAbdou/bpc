@foreach($articles as $article)
    <div class="cs-isotop_item corporate col-md-4">
        <div class="cs-card cs-style4 cs-box_shadow cs-white_bg">
        <a href="{{ route('article.show' , $article) }}" class="cs-card_thumb cs-zoom_effect">
            <img src="{{ asset($article->image) }}" alt="Image" class="cs-zoom_item w-100">
        </a>
        <div class="cs-card_info">
            <h3 class="cs-card_title mt-4"><a href="{{ route('article.show' , $article) }}">{{ $article->title }}</a></h3>
            <div class="cs-catd_meta">
                <small class="cs-catd_meta_item">
                    <i class="fa-solid fa-user  cs-accent_color fa-fw"></i>
                    <span>{{ $article->owner->name }}</span>
                </small>
                <small class="cs-catd_meta_item">
                    <i class="fa-solid fa-clock  cs-accent_color fa-fw"></i>
                    <span>{{\Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y')}}</span>
                </small>

            </div>

            <div class="cs-card_subtitle">
            <span>{{  Str::limit( strip_tags($article->description)?? '', 30, '...')  }} </span>
            </div>

        </div>
        </div>
    </div>
    @endforeach

