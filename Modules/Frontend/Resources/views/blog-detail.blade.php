@extends('frontend::layouts.master')
@section('title')

@section('style')

@endsection

@section('content')
    <main>
        <div class="the-container py-8">
            <div class="flex items-center space-x-2 justify-center">
                <div class="full-url">
                    <img class="w-5" src="{{ Module::asset('frontend:img/icon/home.svg') }}" />
                    <a href="{{ url('') }}"></a>
                </div>
                <div>/ </div>
                <div class="full-url">
                    {{ !empty($data['news_url']['name']) ? $data['news_url']['name'] : "" }}
                    <a href="{{ !empty($page_init['news_url']) ? $page_init['news_url'] : "" }}"></a>
                </div>
            </div>
            <div class="text-center">
                <h2 class="uppercase th-6 fs-32">{{ !empty($data['detail']['name']) ? $data['detail']['name'] : "" }}</h2>
                <sup class="fs-14">{{ !empty($data['detail']['start_at']) ? $data['detail']['start_at'] : "" }}</sup>
            </div>
            <div class="text-editor">
                <article class="prose pt-8">
                    @if (!empty($data['detail']['image']))
                        <figure>
                            <img src="{{$data['detail']['image']}}" alt="">
                        </figure>
                    @endif
                   
                    {!! !empty($data['detail']['detail']) ? $data['detail']['detail'] : ""  !!}
                </article>
            </div>
        </div>
    </main>
@endsection

@section('script')


@endsection
