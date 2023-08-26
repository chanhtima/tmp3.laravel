@extends('frontend::layouts.master')
@section('title')

@section('style')

@endsection

@section('content')

    <main>
        
        <div class="blog-highlight-banner">
            @includeIf('frontend::banner')
        </div>

        {{--  Section : New Arrivals  --}}
         @if (!empty($data['blog']['res']))
            <div class="the-container py-8" >
                <div class="content-brand"></div>
                <div class="px-0 tn:columns-2 md:columns-3" id='loadmore'>
                    <input type="hidden" name="page" id="page"
                        value="{{ !empty($data['blog']['page']->lastPage()) ? $data['blog']['page']->lastPage() : 1 }}">
                    @foreach ($data['blog']['res'] as $blog)
                        <div class="relative py-3 px-1">
                            <div class="anim-slide-in-bck">
                                <div class="hover:shadow-drop-2-center bg-whiten blg-crd full-url pb-3 rounded overflow-hidden">
                                    @if (!empty($blog['image']))
                                        <div class="img-wrapper">
                                            <img src="{{ asset($blog['image']) }}" />
                                        </div>
                                    @endif
                                    <div class="space-y-2  p-[.5rem] md:px-6">
                                        <p class="th-5 fs-20 leading-7 line-lim lim-2">{{ !empty($blog['name']) ? $blog['name'] : "" }}</p>
                                        <p class="th-3 line-lim lim-3">{{ !empty($blog['desc']) ? $blog['desc'] : "" }} </p>
                                    </div>
                                    <p class="fln th-3 mt-3 ml-2">{{!empty($blog['start_at']) ? $blog['start_at'] : "" }}</p>
                                    <a href="{{!empty($blog['url']) ? $blog['url'] : "" }}"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="py-6 d-none" >
                @if ($data['blog']['page']->lastPage() > 1)
                    
                        <button id="btn-more-data" class="butn-loadm butn-w-2h mx-auto" onclick="load_more();">@lang("frontend::lang.index_msg_6")</button>
                   
                @endif
            </div>
            </div>
         @endif
       
    </main>
@endsection

@section('script')
<script type="text/javascript">
 var page = 2;
var pages_total = 1;
load_more = function() {
   
    $(".icon-reload").addClass('active');
    var _token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: "{{ mwz_route('frontend.load_more') }}",
        type: 'POST',
        data: {
            page: page,
            type: 'news',
            _token: _token
        },
        success: function success(resp) {
            console.log(resp.pages.current_page >= $("#page").val());
            pages_total = resp.pages_total;
            page += 1;
            $("#loadmore").append(resp.res)
            if (resp.pages.current_page >= $("#page").val()) {
                $('#btn-more-data').css("display" ,"none")
            }
        }
    });
}
</script>
@endsection
