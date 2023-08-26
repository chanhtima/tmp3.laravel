@extends('frontend::layouts.master')
@section('title')

@section('style')

@endsection

@section('content')

    <main >
        <div class="the-container">
            <div class="member-grid-controller">
                <div class="member-navigator relative flex flex-col-reverse lg:flex-col">
                    <div class="form-wrapper service-navi mb-[1.5rem] lg:mb-0 lg:hidden">
                        <select class="form-style" id="menu-news" name="selectName" onchange="location = this.value;">
                            <option value="#"> Events Category 1</option>
                            <option value="#"> Events Category 2</option>
                            <option value="#"> Events Category 3</option>
                            <option value="#"> Events Category 4</option>
                            <option value="#"> Events Category 5</option>
                        </select>
                    </div>
                    <div class="sticky lg:top-[85px] mb-[.5rem] lg:mb-0 menu-d">
                        <p class="th-5 fs-24 lg:mb-[1rem] title-article ">Events</p>
                        <div class="hidden lg:block">
                            <ul class="mmenu ">
                                <li class="full-url mb-2 il-article active">
                                    <p class="th-3 fs-18">Events Category 1</p>
                                    <a href="{{ url('#') }}"></a>
                                </li>
                                <li class="full-url mb-2 il-article">
                                    <p class="th-3 fs-18">Events Category 2</p>
                                    <a href="{{ url('#') }}"></a>
                                </li>
                                <li class="full-url mb-2 il-article">
                                    <p class="th-3 fs-18">Events Category 3</p>
                                    <a href="{{ url('#') }}"></a>
                                </li>
                                <li class="full-url mb-2 il-article">
                                    <p class="th-3 fs-18">Events Category 4</p>
                                    <a href="{{ url('#') }}"></a>
                                </li>
                                <li class="full-url mb-2 il-article">
                                    <p class="th-3 fs-18">Events Category 5</p>
                                    <a href="{{ url('#') }}"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="member-information">
                    <div class="layout">
                        <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                            <div class="blog-box-wrapper">
                                <div class="blog-box-img">
                                    <img src="{{ Module::asset('frontend:img/statistics-chart-team-office-finance-workplace.png') }}" >

                                    <a href="{{ url('event-detail') }}"></a>
                                </div>
                                <div class="blog-box-detail">
                                    <div class="blog-main-title ">Lorem ipsum dolor</div>
                                    <div class="blog-sub-title ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </div>
                                    <div class="blog-details-title">05-01-2566</div>
                                    <a href="{{ url('event-detail') }}"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                            <div class="blog-box-wrapper">
                                <div class="blog-box-img">
                                    <img src="{{ Module::asset('frontend:img/statistics-chart-team-office-finance-workplace.png') }}" >

                                    <a href="{{ url('event-detail') }}"></a>
                                </div>
                                <div class="blog-box-detail">
                                    <div class="blog-main-title ">Lorem ipsum dolor</div>
                                    <div class="blog-sub-title ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </div>
                                    <div class="blog-details-title">05-01-2566</div>
                                    <a href="{{ url('event-detail') }}"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                            <div class="blog-box-wrapper">
                                <div class="blog-box-img">
                                    <img src="{{ Module::asset('frontend:img/statistics-chart-team-office-finance-workplace.png') }}" >

                                    <a href="{{ url('event-detail') }}"></a>
                                </div>
                                <div class="blog-box-detail">
                                    <div class="blog-main-title ">Lorem ipsum dolor</div>
                                    <div class="blog-sub-title ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </div>
                                    <div class="blog-details-title">05-01-2566</div>
                                    <a href="{{ url('event-detail') }}"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                            <div class="blog-box-wrapper">
                                <div class="blog-box-img">
                                    <img src="{{ Module::asset('frontend:img/statistics-chart-team-office-finance-workplace.png') }}" >

                                    <a href="{{ url('event-detail') }}"></a>
                                </div>
                                <div class="blog-box-detail">
                                    <div class="blog-main-title ">Lorem ipsum dolor</div>
                                    <div class="blog-sub-title ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </div>
                                    <div class="blog-details-title">05-01-2566</div>
                                    <a href="{{ url('event-detail') }}"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                            <div class="blog-box-wrapper">
                                <div class="blog-box-img">
                                    <img src="{{ Module::asset('frontend:img/statistics-chart-team-office-finance-workplace.png') }}" >

                                    <a href="{{ url('event-detail') }}"></a>
                                </div>
                                <div class="blog-box-detail">
                                    <div class="blog-main-title ">Lorem ipsum dolor</div>
                                    <div class="blog-sub-title ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </div>
                                    <div class="blog-details-title">05-01-2566</div>
                                    <a href="{{ url('event-detail') }}"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                            <div class="blog-box-wrapper">
                                <div class="blog-box-img">
                                    <img src="{{ Module::asset('frontend:img/statistics-chart-team-office-finance-workplace.png') }}" >

                                    <a href="{{ url('event-detail') }}"></a>
                                </div>
                                <div class="blog-box-detail">
                                    <div class="blog-main-title ">Lorem ipsum dolor</div>
                                    <div class="blog-sub-title ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </div>
                                    <div class="blog-details-title">05-01-2566</div>
                                    <a href="{{ url('event-detail') }}"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                            <div class="blog-box-wrapper">
                                <div class="blog-box-img">
                                    <img src="{{ Module::asset('frontend:img/statistics-chart-team-office-finance-workplace.png') }}" >

                                    <a href="{{ url('event-detail') }}"></a>
                                </div>
                                <div class="blog-box-detail">
                                    <div class="blog-main-title ">Lorem ipsum dolor</div>
                                    <div class="blog-sub-title ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </div>
                                    <div class="blog-details-title">05-01-2566</div>
                                    <a href="{{ url('event-detail') }}"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                            <div class="blog-box-wrapper">
                                <div class="blog-box-img">
                                    <img src="{{ Module::asset('frontend:img/statistics-chart-team-office-finance-workplace.png') }}" >

                                    <a href="{{ url('event-detail') }}"></a>
                                </div>
                                <div class="blog-box-detail">
                                    <div class="blog-main-title ">Lorem ipsum dolor</div>
                                    <div class="blog-sub-title ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </div>
                                    <div class="blog-details-title">05-01-2566</div>
                                    <a href="{{ url('event-detail') }}"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                            <div class="blog-box-wrapper">
                                <div class="blog-box-img">
                                    <img src="{{ Module::asset('frontend:img/statistics-chart-team-office-finance-workplace.png') }}" >

                                    <a href="{{ url('event-detail') }}"></a>
                                </div>
                                <div class="blog-box-detail">
                                    <div class="blog-main-title ">Lorem ipsum dolor</div>
                                    <div class="blog-sub-title ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </div>
                                    <div class="blog-details-title">05-01-2566</div>
                                    <a href="{{ url('event-detail') }}"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                            <div class="blog-box-wrapper">
                                <div class="blog-box-img">
                                    <img src="{{ Module::asset('frontend:img/statistics-chart-team-office-finance-workplace.png') }}" >

                                    <a href="{{ url('event-detail') }}"></a>
                                </div>
                                <div class="blog-box-detail">
                                    <div class="blog-main-title ">Lorem ipsum dolor</div>
                                    <div class="blog-sub-title ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </div>
                                    <div class="blog-details-title">05-01-2566</div>
                                    <a href="{{ url('event-detail') }}"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                            <div class="blog-box-wrapper">
                                <div class="blog-box-img">
                                    <img src="{{ Module::asset('frontend:img/statistics-chart-team-office-finance-workplace.png') }}" >

                                    <a href="{{ url('event-detail') }}"></a>
                                </div>
                                <div class="blog-box-detail">
                                    <div class="blog-main-title ">Lorem ipsum dolor</div>
                                    <div class="blog-sub-title ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </div>
                                    <div class="blog-details-title">05-01-2566</div>
                                    <a href="{{ url('event-detail') }}"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                            <div class="blog-box-wrapper">
                                <div class="blog-box-img">
                                    <img src="{{ Module::asset('frontend:img/statistics-chart-team-office-finance-workplace.png') }}" >

                                    <a href="{{ url('event-detail') }}"></a>
                                </div>
                                <div class="blog-box-detail">
                                    <div class="blog-main-title ">Lorem ipsum dolor</div>
                                    <div class="blog-sub-title ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </div>
                                    <div class="blog-details-title">05-01-2566</div>
                                    <a href="{{ url('event-detail') }}"> </a>
                                </div>
                            </div>
                        </div>
                        
                   
                    </div>
                    <div class="mt-6">
                        <ul class="pgntn rounded" role="menubar" aria-label="Pagination">
                            <li><a href=""><span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg></span></a></li>
                            <li class="current"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href=""><span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')


@endsection
