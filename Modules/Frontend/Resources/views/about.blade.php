@extends('frontend::layouts.master')
@section('title')

@section('style')

@endsection

@section('content')

</div>
    <main >
            <!-- ======= About Section ======= -->
            <section class="section-page">
                <div class="container" data-aos="fade-up">
                    <div class="text-editor">
                        <p class="th-5 fs-36 uppercase text-center ">ABOUT<br>
                            THE FOUNDER</p>
                        <p><span class="fs-20">Dr.</span> Tanai is the first certified Strategic Management Professional (SMP) in Thailand with solid theoretical background, well-rounded knowledge of the industries, and practicality in working with clients.  Internationally recognized as a strategic professional. He has supported many organizations in Strategy Formulation, Strategy Execution, and Strategic Leadership Development for more than 20 years.</p>

                        
                    </div>
                <div class="row position-relative align-items-center justify-content-center">

                    <div class="col-lg-6"> 
                        <img src="{{ Module::asset('frontend:img/home/Group_48096168.png') }}" class="img-w-100 pt-6">
                    </div>

                    <div class="col-lg-6">
                    
                        <div class="text-editor ">
                            <p class="th-5 fs-28 pt-6">AT A GLANCE</p>
                            <p><span class="fs-20">Dr.</span> Tanai is the first certified Strategic Management Professional (SMP) in Thailand with solid theoretical background, well-rounded knowledge of the industries, and practicality in working with clients.  Internationally recognized as a strategic professional. He has supported many organizations in Strategy Formulation, Strategy Execution, and Strategic Leadership Development for more than 20 years.</p>
                            <p><span class="th-5 fs-20">As a consultant,</span> Dr. Tanai has provided Strategy Consulting, Strategic Planning Facilitation, Strategy Coaching services for large and small organizations in Asia across a diverse range of industries such as banks, insurance, asset management, and healthcare, consulting, and manufacturing.</p>
                            <p><span class="th-5 fs-20">As a consultant,</span> Dr. Tanai has provided Strategy Consulting, Strategic Planning Facilitation, Strategy Coaching services for large and small organizations in Asia across a diverse range of industries such as banks, insurance, asset management, and healthcare, consulting, and manufacturing.</p>
                            <p><span class="th-5 fs-20 pb-1">As a consultant,</span> Dr. Tanai has provided Strategy Consulting, Strategic Planning Facilitation, Strategy Coaching services for large and small organizations in Asia across a diverse range of industries such as banks, insurance, asset management, and healthcare, consulting, and manufacturing.</p>
                            
                        </div>
                    </div>

                </div>

                </div>
            </section>


        <section class=" pt-6  " id="WoneWith">
            <div class="container" data-aos="fade-up">
                {{-- award --}}
                <div class="splide splide-award-card -mx-[.5rem] mt-12">
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="splide__slide">
                                    <div class="about-box-wrapper">
                                        <div class="about-boximg">
                                            <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
                                            <a href="{{ url('/') }}"> 
                                            </a>
                                        </div>
                                        <div class="about-detail">
                                            <h3 class="about-main-title">Lorem ipsum dolor</h3>
                                            <div class="about-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                            <a href="{{ url('/') }}" class="btn-wone-view"> See View </a>
                                        </div>
                                    </div>
                                    <div class="about-box-wrapper">
                                        <div class="about-boximg">
                                            <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
                                            <a href="{{ url('/') }}"> 
                                            </a>
                                        </div>
                                        <div class="about-detail">
                                            <h3 class="about-main-title">Lorem ipsum dolor</h3>
                                            <div class="about-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                            <a href="{{ url('/') }}" class="btn-wone-view"> See View </a>
                                        </div>
                                    </div>


                            </div>
                            <div class="splide__slide">
                                    <div class="about-box-wrapper">
                                        <div class="about-boximg">
                                            <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
                                            <a href="{{ url('/') }}"> 
                                            </a>
                                        </div>
                                        <div class="about-detail">
                                            <h3 class="about-main-title">Lorem ipsum dolor</h3>
                                            <div class="about-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                            <a href="{{ url('/') }}" class="btn-wone-view"> See View </a>
                                        </div>
                                    </div>
                                    <div class="about-box-wrapper">
                                        <div class="about-boximg">
                                            <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
                                            <a href="{{ url('/') }}"> 
                                            </a>
                                        </div>
                                        <div class="about-detail">
                                            <h3 class="about-main-title">Lorem ipsum dolor</h3>
                                            <div class="about-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                            <a href="{{ url('/') }}" class="btn-wone-view"> See View </a>
                                        </div>
                                    </div>


                            </div>
                            <div class="splide__slide">
                                <div class="about-box-wrapper">
                                    <div class="about-boximg">
                                        <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
                                        <a href="{{ url('/') }}"> 
                                        </a>
                                    </div>
                                    <div class="about-detail">
                                        <h3 class="about-main-title">Lorem ipsum dolor</h3>
                                        <div class="about-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                        <a href="{{ url('/') }}" class="btn-wone-view"> See View </a>
                                    </div>
                                </div>
                                <div class="about-box-wrapper">
                                    <div class="about-boximg">
                                        <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
                                        <a href="{{ url('/') }}"> 
                                        </a>
                                    </div>
                                    <div class="about-detail">
                                        <h3 class="about-main-title">Lorem ipsum dolor</h3>
                                        <div class="about-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                        <a href="{{ url('/') }}" class="btn-wone-view"> See View </a>
                                    </div>
                                </div>


                            </div>
                            <div class="splide__slide">
                                    <div class="about-box-wrapper">
                                        <div class="about-boximg">
                                            <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
                                            <a href="{{ url('/') }}"> 
                                            </a>
                                        </div>
                                        <div class="about-detail">
                                            <h3 class="about-main-title">Lorem ipsum dolor</h3>
                                            <div class="about-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                            <a href="{{ url('/') }}" class="btn-wone-view"> See View </a>
                                        </div>
                                    </div>
                                    <div class="about-box-wrapper">
                                        <div class="about-boximg">
                                            <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
                                            <a href="{{ url('/') }}"> 
                                            </a>
                                        </div>
                                        <div class="about-detail">
                                            <h3 class="about-main-title">Lorem ipsum dolor</h3>
                                            <div class="about-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                            <a href="{{ url('/') }}" class="btn-wone-view"> See View </a>
                                        </div>
                                    </div>


                            </div>
                            <div class="splide__slide">
                                <div class="about-box-wrapper">
                                    <div class="about-boximg">
                                        <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
                                        <a href="{{ url('/') }}"> 
                                        </a>
                                    </div>
                                    <div class="about-detail">
                                        <h3 class="about-main-title">Lorem ipsum dolor</h3>
                                        <div class="about-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                        <a href="{{ url('/') }}" class="btn-wone-view"> See View </a>
                                    </div>
                                </div>
                                <div class="about-box-wrapper">
                                    <div class="about-boximg">
                                        <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
                                        <a href="{{ url('/') }}"> 
                                        </a>
                                    </div>
                                    <div class="about-detail">
                                        <h3 class="about-main-title">Lorem ipsum dolor</h3>
                                        <div class="about-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                        <a href="{{ url('/') }}" class="btn-wone-view"> See View </a>
                                    </div>
                                </div>


                        </div>
                        <div class="splide__slide">
                                <div class="about-box-wrapper">
                                    <div class="about-boximg">
                                        <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
                                        <a href="{{ url('/') }}"> 
                                        </a>
                                    </div>
                                    <div class="about-detail">
                                        <h3 class="about-main-title">Lorem ipsum dolor</h3>
                                        <div class="about-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                        <a href="{{ url('/') }}" class="btn-wone-view"> See View </a>
                                    </div>
                                </div>
                                <div class="about-box-wrapper">
                                    <div class="about-boximg">
                                        <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
                                        <a href="{{ url('/') }}"> 
                                        </a>
                                    </div>
                                    <div class="about-detail">
                                        <h3 class="about-main-title">Lorem ipsum dolor</h3>
                                        <div class="about-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                        <a href="{{ url('/') }}" class="btn-wone-view"> See View </a>
                                    </div>
                                </div>


                        </div>
                        <div class="splide__slide">
                            <div class="about-box-wrapper">
                                <div class="about-boximg">
                                    <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
                                    <a href="{{ url('/') }}"> 
                                    </a>
                                </div>
                                <div class="about-detail">
                                    <h3 class="about-main-title">Lorem ipsum dolor</h3>
                                    <div class="about-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                    <a href="{{ url('/') }}" class="btn-wone-view"> See View </a>
                                </div>
                            </div>
                            <div class="about-box-wrapper">
                                <div class="about-boximg">
                                    <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
                                    <a href="{{ url('/') }}"> 
                                    </a>
                                </div>
                                <div class="about-detail">
                                    <h3 class="about-main-title">Lorem ipsum dolor</h3>
                                    <div class="about-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                    <a href="{{ url('/') }}" class="btn-wone-view"> See View </a>
                                </div>
                            </div>


                        </div>
                        <div class="splide__slide">
                                <div class="about-box-wrapper">
                                    <div class="about-boximg">
                                        <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
                                        <a href="{{ url('/') }}"> 
                                        </a>
                                    </div>
                                    <div class="about-detail">
                                        <h3 class="about-main-title">Lorem ipsum dolor</h3>
                                        <div class="about-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                        <a href="{{ url('/') }}" class="btn-wone-view"> See View </a>
                                    </div>
                                </div>
                                <div class="about-box-wrapper">
                                    <div class="about-boximg">
                                        <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
                                        <a href="{{ url('/') }}"> 
                                        </a>
                                    </div>
                                    <div class="about-detail">
                                        <h3 class="about-main-title">Lorem ipsum dolor</h3>
                                        <div class="about-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                        <a href="{{ url('/') }}" class="btn-wone-view"> See View </a>
                                    </div>
                                </div>


                        </div>
                        
                    
                        
                        
                        
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="tabs-about">
            <div class="container">
                 {{-- Tabs --}}
                 <ul class="nav nav-tabs about-tabs about-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Experience</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Educaction</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="row justify-center items-center ">
                            <div class="col-md-6">
                                <div >
                                    <div class="event-box-img">
                                        <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
    
                                        </a>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-md-6 pt-6">
                                <div >
                                    <div>
                                        <h3>“START LESS, FINISH MORE” BUILDING AGILITY AND ENGAGEMENT WITH OKR เวิร์คช็อป โดย DAN MONTGOMERY</h3>
                                        <p>วันที่ 8 ตุลาคม 2560 Thai Institute of Director ร่วมกับ ดร.ธนัย ชรินทร์สาร ได้เรียนเชิญคุณ Dan Montgomery จัดสัมนาให้แก่ผู้บริหาร ในหัวข้อ “Start Less, Finish More” Building Agility and Engagement with OKR ณ Grand Hyatt Erawan </p>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"> 
                        <div class="row justify-center items-center ">
                            <div class="col-md-6 pb-6 ">
                                <div class="event-box-wrapper">
                                    <div >
                                        <h3>“START LESS, FINISH MORE” BUILDING AGILITY AND ENGAGEMENT WITH OKR เวิร์คช็อป โดย DAN MONTGOMERY</h3>
                                        <p>วันที่ 8 ตุลาคม 2560 Thai Institute of Director ร่วมกับ ดร.ธนัย ชรินทร์สาร ได้เรียนเชิญคุณ Dan Montgomery จัดสัมนาให้แก่ผู้บริหาร ในหัวข้อ “Start Less, Finish More” Building Agility and Engagement with OKR ณ Grand Hyatt Erawan </p>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="event-box-wrapper">
                                    <div class="event-box-img">
                                        <img src="{{ Module::asset('frontend:img/home/cert_asp_smp.png') }}" >
    
                                        </a>
                                    </div>
                                   
                                </div>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                 
                </div>
            </div>

               
        </section>
    </main>
@endsection

@section('script')


@endsection
