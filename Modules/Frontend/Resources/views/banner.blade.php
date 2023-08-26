@if (!empty($data['banner']))
<div class="splide splide-banner-slide">
    <div class="splide__track">
        <div class="splide__list">
            @foreach ($data['banner'] as $banner)
                @if ($banner['type'] == 1)
                    <div class="splide__slide">
                        <div class="img-wrapper asp-21b9">
                            @if (!empty($banner['image']))
                            <a target="_blank" href="{{ !empty($banner['link']) ? $banner['link'] : "" }}">
                                <img class="full-img img-cover" src="{{ asset($banner['image']) }}" />
                            </a>
                            @endif
                        </div>
                    </div>
                @else
                    @if (!empty($banner['url_video']))
                        <div class="splide__slide asp-slide" data-splide-youtube="{{ $banner['url_video'] }}" data-splide-interval="18000"></div>
                    @endif
                    {{-- <div class="splide__slide asp-slide" data-splide-html-video="assets/img/example.mp4"></div> --}}
                @endif
            @endforeach
        </div>
    </div>
</div>
@endif