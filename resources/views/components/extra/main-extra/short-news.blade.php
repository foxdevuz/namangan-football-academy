@props(['shortNews'])
<div class="container-fluid about py-5">
    <div class="container">
    <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px">
        <h2 class="text-primary font-secondary">{{ @trans('main.sub_news_title') }}</h2>
        <h1 class="display-4 text-uppercase">{{ @trans('main.news') }}</h1>
    </div>
    <div class="tab-class text-center">
        <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase border-inner p-4 mb-5">
            <li class="nav-item">
                <a class="nav-link text-white active" data-bs-toggle="pill" href="#tab-1">{{ @trans('main.first_news') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-2">{{ @trans('main.academy_news') }}</a>
            </li>
        </ul>
        <div class="tab-content">
        <div id="tab-1" class="tab-pane fade show p-0 active">
            <div class="row g-3">
                @foreach ($shortNews as $news)
                    @if ($loop->iteration <= 6)
                        <x-extra.news-extra.main-news-card :news="$news"/>
                    @else
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        <div id="tab-2" class="tab-pane fade show p-0">
            <div class="row g-3">
                @foreach ($shortNews->skip(6) as $news)
                    @if ($loop->iteration <= 6)
                        <x-extra.news-extra.main-news-card :news="$news"/>
                    @else
                        @break
                    @endif
                @endforeach
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
