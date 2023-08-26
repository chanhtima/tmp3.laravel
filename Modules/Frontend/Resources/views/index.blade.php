@extends('frontend::layouts.master')
@section('title')

@section('style')


@endsection

@section('content')
            <div class=" flex-col-reverse lg:flex-row relative home-silde" >
                <div class="section-header">
                    <a href="{{ url('#about') }}" >
                        <svg width="60" height="51" viewBox="0 0 60 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.1999 34.1616C30.7695 34.1616 30.3519 34.0935 29.9472 33.9572C29.5426 33.8209 29.2068 33.6392 28.9399 33.4121L14.0878 20.8739C13.4959 20.3742 13.2 19.7382 13.2 18.9659C13.2 18.1936 13.4959 17.5576 14.0878 17.0579C14.6798 16.5582 15.4331 16.3083 16.3479 16.3083C17.2627 16.3083 18.0161 16.5582 18.608 17.0579L31.1999 27.6881L43.7919 17.0579C44.3838 16.5582 45.1372 16.3083 46.052 16.3083C46.9668 16.3083 47.7201 16.5582 48.3121 17.0579C48.904 17.5576 49.2 18.1936 49.2 18.9659C49.2 19.7382 48.904 20.3742 48.3121 20.8739L33.46 33.4121C33.1372 33.6846 32.7874 33.8782 32.4107 33.9926C32.034 34.1071 31.6304 34.1634 31.1999 34.1616Z" fill="white"/>
                            </svg>
                    </a>
                    
                </div>
                <div class="w-full ">
                    <div class="splide splide-banner-slide">
                        <div class="splide__track">
                            <div class="splide__list">
                                <div class="splide__slide">
                                    <div class="img-wrapper h-full">
                                        <img class="full-img img-cover" src="{{ Module::asset('frontend:img/home/Sectio_1.png') }}" />

                                    </div>
                                </div>
                                <div class="splide__slide">
                                    <div class="img-wrapper h-full">
                                        <img class="full-img img-cover" src="{{ Module::asset('frontend:img/home/Sectio_1.png') }}" />
                                    </div>
                                </div>
                                <div class="splide__slide">
                                    <div class="img-wrapper h-full">
                                        <img class="full-img img-cover" src="{{ Module::asset('frontend:img/home/Sectio_1.png') }}" />
                                    </div>
                                </div>
                                <div class="splide__slide">
                                    <div class="img-wrapper h-full">
                                        <img class="full-img img-cover" src="{{ Module::asset('frontend:img/home/Sectio_1.png') }}" />
                                    </div>
                                </div>
                                <div class="splide__slide">
                                    <div class="img-wrapper h-full">
                                        <img class="full-img img-cover" src="{{ Module::asset('frontend:img/home/Sectio_1.png') }}" />
                                    </div>
                                </div>
                                <div class="splide__slide" data-splide-youtube="https://www.youtube.com/watch?v=lmCREKo5i8M" data-splide-interval="10000">
                                    <div class="img-wrapper h-full">
                                        <img class="full-img img-cover" src="{{ Module::asset('frontend:img/home/Sectio_1.png') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <main>
       
           <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="th-tile-about">
                    <h2>Dr. Tanai Charinsarn</h2>
                    
                </div>
            <div class="row position-relative row-about">
    
                <div class="col-lg-6 about-img"> 
                    <img src="{{ Module::asset('frontend:img/home/tni_profile_pic 1.png') }}" class="about-img">
                </div>
    
                <div class="col-lg-6">
                    <div class="our-story">
                        <h3>ABOUT</h3>
                        <p>TNI And Associates is a boutique strategy consulting firm based in Bangkok. The company was founded by Dr. Tanai Charinsarn, a certified Strategic Management Professional (SMP) with solid theoretical background, well-rounded knowledge of industries, and practicality in working with clients. He has supported organizations in Strategy Formulation, Strategy Execution, and Strategic Leadership Development for more than 20 years.</p>
                        <div class="watch-video d-flex align-items-center position-relative">
                        
                        
                        <a href="{{ url('about') }}" class="btn-READ">READ MORE</a>
                        </div>
                    </div>
                </div>
    
            </div>
    
            </div>
        </section>

        <!-- ======= Wone With ======= -->
        <section  id="WoneWith">
            <div class="container">
                <div class="w-full flex flex-col items-center justify-center th-title-wone">
                <div class="text-wone th-6">
                    Wone With 
                </div>
                </div>
                <div class="row-wone">
                    <div class=" img-th-wone">
                        
                        <div class="row th-c">
                            <div class="col-xl-7"><img src="{{ Module::asset('frontend:img/Group_48096187.png') }}"  class="img-woenWith">
                                <div class="space-y-4 lg th-wone">
                                    <p class="fs-24 uppercase"><span>“FAILURE</span> IS PART OF <span> WITHOUT</span> FAILURE, WE WILL NOT LEARN AND IMPROVE.”</p>
                                </div></div>
                            <div class="col-xl-5 d-n"></div>
                        </div>
                    </div>
                    
                    <div class=" slide-wone">
                        <a href="{{ url('/wonewith') }}" class="btn-wone" >
                            SEE MORE 
                                
                        </a>
                        <div class="splide splide-card-sect0 -mx-[.5rem] mt-12">
                            <div class="splide__track">
                                <div class="splide__list">
                                    <div class="splide__slide">
                                        <div class="px-[.5rem] ">
                                            <div class="wone-box-wrapper">
                                                    <div class="wone-box-img">
                                                        <img src="{{ Module::asset('frontend:img/Mask_group121.png') }}" >
                                                        <a href="{{ url('/wonewith-detail') }}"> 
                                                        </a>
                                                    </div>
                                                    <div class="wone-box-detail">
                                                      <div class="wone-box-th">
                                                        <h3 class="wone-main-title">Lorem ipsum dolor</h3>
                                                        <div class="wone-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                                        <a href="{{ url('wonewith-detail') }}" class="btn-READ">READ MORE</a>
                                                     </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide">
                                        <div class="px-[.5rem] ">
                                            <div class="wone-box-wrapper">
                                                    <div class="wone-box-img">
                                                        <img src="{{ Module::asset('frontend:img/Mask_group111.png') }}" >
                                                        <a href="{{ url('/wonewith-detail') }}"> 
                                                        </a>
                                                    </div>
                                                    <div class="wone-box-detail">
                                                      <div class="wone-box-th">
                                                        <h3 class="wone-main-title">Lorem ipsum dolor</h3>
                                                        <div class="wone-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                                        <a href="{{ url('wonewith-detail') }}" class="btn-READ">READ MORE</a>
                                                     </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide">
                                        <div class="px-[.5rem] ">
                                            <div class="wone-box-wrapper">
                                                    <div class="wone-box-img">
                                                        <img src="{{ Module::asset('frontend:img/Rectangle112.png') }}" >
                                                        <a href="{{ url('/wonewith-detail') }}"> 
                                                        </a>
                                                    </div>
                                                    <div class="wone-box-detail">
                                                      <div class="wone-box-th">
                                                        <h3 class="wone-main-title">Lorem ipsum dolor</h3>
                                                        <div class="wone-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                                        <a href="{{ url('wonewith-detail') }}" class="btn-READ">READ MORE</a>
                                                     </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide">
                                        <div class="px-[.5rem] ">
                                            <div class="wone-box-wrapper">
                                                    <div class="wone-box-img">
                                                        <img src="{{ Module::asset('frontend:img/Mask_group121.png') }}" >
                                                        <a href="{{ url('/wonewith-detail') }}"> 
                                                        </a>
                                                    </div>
                                                    <div class="wone-box-detail">
                                                      <div class="wone-box-th">
                                                        <h3 class="wone-main-title">Lorem ipsum dolor</h3>
                                                        <div class="wone-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                                        <a href="{{ url('wonewith-detail') }}" class="btn-READ">READ MORE</a>
                                                     </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide">
                                        <div class="px-[.5rem] ">
                                            <div class="wone-box-wrapper">
                                                    <div class="wone-box-img">
                                                        <img src="{{ Module::asset('frontend:img/Mask_group111.png') }}" >
                                                        <a href="{{ url('/wonewith-detail') }}"> 
                                                        </a>
                                                    </div>
                                                    <div class="wone-box-detail">
                                                      <div class="wone-box-th">
                                                        <h3 class="wone-main-title">Lorem ipsum dolor</h3>
                                                        <div class="wone-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                                        <a href="{{ url('wonewith-detail') }}" class="btn-READ">READ MORE</a>
                                                     </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="splide__slide">
                                        <div class="px-[.5rem] ">
                                            <div class="wone-box-wrapper">
                                                    <div class="wone-box-img">
                                                        <img src="{{ Module::asset('frontend:img/Rectangle112.png') }}" >
                                                        <a href="{{ url('/wonewith-detail') }}"> 
                                                        </a>
                                                    </div>
                                                    <div class="wone-box-detail">
                                                      <div class="wone-box-th">
                                                        <h3 class="wone-main-title">Lorem ipsum dolor</h3>
                                                        <div class="wone-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                                        <a href="{{ url('wonewith-detail') }}" class="btn-READ">READ MORE</a>
                                                     </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                 
                                 
                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">
 
            <div class="splide splide-card-sect2 -mx-[.5rem] ">
                <div class="splide__track">
                    <div class="splide__list">
                        <div class="splide__slide">
                            <div class="row items-center justify-center row-testimonials">
                                <div class="col-md-6 bg-th">
                                    <h3 >“ VICTORIOUS WARRIORS WIN FIRST AND THEN GO TO WAR, WHILE DEFEATED WARRIORS GO TO WAR FIRST AND THEN SEEK TO WIN ”</h3>
                                </div>
                                <div class="col-md-6 bg-img-th">  
                                    <img src="{{ Module::asset('frontend:img/Group_48096158.png') }}" >
                                    <p>
                                        DR. SUN TZU <br>
                                        CEO at SuSu Company
                                    </p></div>
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="row items-center justify-center row-testimonials">
                                <div class="col-md-6 bg-th">
                                    <h3 >“ VICTORIOUS WARRIORS WIN FIRST AND THEN GO TO WAR, WHILE DEFEATED WARRIORS GO TO WAR FIRST AND THEN SEEK TO WIN ”</h3>
                                </div>
                                <div class="col-md-6 bg-img-th">  
                                    <img src="{{ Module::asset('frontend:img/Group_48096158.png') }}" >
                                    <p>
                                        DR. SUN TZU <br>
                                        CEO at SuSu Company
                                    </p></div>
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="row items-center justify-center row-testimonials">
                                <div class="col-md-6 bg-th">
                                    <h3 >“ VICTORIOUS WARRIORS WIN FIRST AND THEN GO TO WAR, WHILE DEFEATED WARRIORS GO TO WAR FIRST AND THEN SEEK TO WIN ”</h3>
                                </div>
                                <div class="col-md-6 bg-img-th">  
                                    <img src="{{ Module::asset('frontend:img/Group_48096158.png') }}" >
                                    <p>
                                        DR. SUN TZU <br>
                                        CEO at SuSu Company
                                    </p></div>
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="row items-center justify-center row-testimonials">
                                <div class="col-md-6 bg-th">
                                    <h3 >“ VICTORIOUS WARRIORS WIN FIRST AND THEN GO TO WAR, WHILE DEFEATED WARRIORS GO TO WAR FIRST AND THEN SEEK TO WIN ”</h3>
                                </div>
                                <div class="col-md-6 bg-img-th">  
                                    <img src="{{ Module::asset('frontend:img/Group_48096158.png') }}" >
                                    <p>
                                        DR. SUN TZU <br>
                                        CEO at SuSu Company
                                    </p></div>
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="row items-center justify-center row-testimonials">
                                <div class="col-md-6 bg-th">
                                    <h3 >“ VICTORIOUS WARRIORS WIN FIRST AND THEN GO TO WAR, WHILE DEFEATED WARRIORS GO TO WAR FIRST AND THEN SEEK TO WIN ”</h3>
                                </div>
                                <div class="col-md-6 bg-img-th">  
                                    <img src="{{ Module::asset('frontend:img/Group_48096158.png') }}" >
                                    <p>
                                        DR. SUN TZU <br>
                                        CEO at SuSu Company
                                    </p></div>
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="row items-center justify-center row-testimonials">
                                <div class="col-md-6 bg-th">
                                    <h3 >“ VICTORIOUS WARRIORS WIN FIRST AND THEN GO TO WAR, WHILE DEFEATED WARRIORS GO TO WAR FIRST AND THEN SEEK TO WIN ”</h3>
                                </div>
                                <div class="col-md-6 bg-img-th">  
                                    <img src="{{ Module::asset('frontend:img/Group_48096158.png') }}" >
                                    <p>
                                        DR. SUN TZU <br>
                                        CEO at SuSu Company
                                    </p></div>
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="row items-center justify-center row-testimonials">
                                <div class="col-md-6 bg-th">
                                    <h3 >“ VICTORIOUS WARRIORS WIN FIRST AND THEN GO TO WAR, WHILE DEFEATED WARRIORS GO TO WAR FIRST AND THEN SEEK TO WIN ”</h3>
                                </div>
                                <div class="col-md-6 bg-img-th">  
                                    <img src="{{ Module::asset('frontend:img/Group_48096158.png') }}" >
                                    <p>
                                        DR. SUN TZU <br>
                                        CEO at SuSu Company
                                    </p></div>
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="row items-center justify-center row-testimonials">
                                <div class="col-md-6 bg-th">
                                    <h3 >“ VICTORIOUS WARRIORS WIN FIRST AND THEN GO TO WAR, WHILE DEFEATED WARRIORS GO TO WAR FIRST AND THEN SEEK TO WIN ”</h3>
                                </div>
                                <div class="col-md-6 bg-img-th">  
                                    <img src="{{ Module::asset('frontend:img/Group_48096158.png') }}" >
                                    <p>
                                        DR. SUN TZU <br>
                                        CEO at SuSu Company
                                    </p></div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
    
            </div>
        </section><!-- End Testimonials Section -->
        
        <!-- ====== Events section ===== --->
        <section class="flex flex-wrap events">
            <div class="container">
                <div class="section-title" style="text-align:initial;">
                    <div class="row justify-center row-event" >
                      <div class="col-6 title-head"> 
                        <h3 class="title-head evevnts" > Current Events </h3>
                        <div class="line2 "></div>
                        
                      </div>
                      <div class="col-6 " style="text-align: end;">
                        <a href="{{ url('event') }}" class="btn-wone">
                          ALL EVENTS <span  style="padding-left: 0.5rem"> > </span>
                        </a>
                      </div>
                    </div>
                    <div class="row justify-center  row-event">
                        <div class="col-md-6">
                            <div class="event-box-wrapper">
                                <div class="event-box-img">
                                    <img src="{{ Module::asset('frontend:img/statistics-chart-team-office-finance-workplace.png') }}" >

                                    </a>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="event-box-wrapper">
                                <div class="event-box">
                                    <h3>“START LESS, FINISH MORE” BUILDING AGILITY AND ENGAGEMENT WITH OKR เวิร์คช็อป โดย DAN MONTGOMERY</h3>
                                    <p>วันที่ 8 ตุลาคม 2560 Thai Institute of Director ร่วมกับ ดร.ธนัย ชรินทร์สาร ได้เรียนเชิญคุณ Dan Montgomery จัดสัมนาให้แก่ผู้บริหาร ในหัวข้อ “Start Less, Finish More” Building Agility and Engagement with OKR ณ Grand Hyatt Erawan </p>
                                    <a href="{{ url('/event-detail') }}"class="btn-READ">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-center  row-event ">
                        <div class="col-md-4">
                            <div class="event-box-wrapper">
                                <div class="event-box-img">
                                    <img src="{{ Module::asset('frontend:img/home/19453012_10211972090930449_639388794289554431_o-d9839b3961efd77ca3300b84237d40d2-294x250-100-crop.jpg') }}" >
                                    
                                </div>
                                <div class="event-box-detail">
                                    <h3 class="event-main-title">Lorem ipsum dolor</h3>
                                    <div class="event-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                    <a href="{{ url('/event-detail') }}" class="btn-READ">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="event-box-wrapper">
                                <div class="event-box-img">
                                    <img src="{{ Module::asset('frontend:img/home/19453012_10211972090930449_639388794289554431_o-d9839b3961efd77ca3300b84237d40d2-294x250-100-crop.jpg') }}" >
                                    
                                </div>
                                <div class="event-box-detail">
                                    <h3 class="event-main-title">Lorem ipsum dolor</h3>
                                    <div class="event-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                    <a href="{{ url('/event-detail') }}" class="btn-READ">READ MORE</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="event-box-wrapper">
                                <div class="event-box-img">
                                    <img src="{{ Module::asset('frontend:img/home/19453012_10211972090930449_639388794289554431_o-d9839b3961efd77ca3300b84237d40d2-294x250-100-crop.jpg') }}" >
                                    
                                </div>
                                <div class="event-box-detail">
                                    <h3 class="event-main-title">Lorem ipsum dolor</h3>
                                    <div class="event-sub-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ipsam dicta maiores animi dolorem odio nam vero odit beatae voluptatem ipsum, assumenda delectus quaerat, hic sunt deleniti fugiat quasi blanditiis?</div>
                                    <a href="{{ url('/event-detail') }}" class="btn-READ">READ MORE</a>

                                </div>
                            </div>
                        </div>
                       
                    </div>
                    
                </div>
            </div>
        </section>
    

        <!-- ======= Our clients ======= -->
        <section class="flex items-center flex-wrap" style="background: #fff">
            <div class="w-full xl:w-4/4">
                <div class="th-title-logo-clients">
                    <h2>CLIENTS</h2>
                </div>
            </div>
            <div class="w-full xl:w-4/4">
                <div class="splide splide-logo -mx-[1.5rem] mt-12">
                    <div class="splide__track">
                        <div class="splide__list">
                            <div class="splide__slide">
                                <div class="px-[.5rem] pb-8">
                                    <img class="client-logo" src="{{ Module::asset('frontend:img/cli1.jpg') }}" />
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="px-[.5rem] pb-8">
                                    <img class="client-logo" src="{{ Module::asset('frontend:img/cli2.jpg') }}" />
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="px-[.5rem] pb-8">
                                    <img class="client-logo" src="{{ Module::asset('frontend:img/cli3.jpg') }}" />
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="px-[.5rem] pb-8">
                                    <img class="client-logo" src="{{ Module::asset('frontend:img/cli4.jpg') }}" />
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="px-[.5rem] pb-8">
                                    <img class="client-logo" src="{{ Module::asset('frontend:img/cli5.jpg') }}" />
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="px-[.5rem] pb-8">
                                    <img class="client-logo" src="{{ Module::asset('frontend:img/cli6.jpg') }}" />
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="px-[.5rem] pb-8">
                                    <img class="client-logo" src="{{ Module::asset('frontend:img/Logo_cp.png') }}" />
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="px-[.5rem] pb-8">
                                    <img class="client-logo" src="{{ Module::asset('frontend:img/IRPC.jpg') }}" />
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="px-[.5rem] pb-8">
                                    <img class="client-logo" src="{{ Module::asset('frontend:img/cli1.jpg') }}" />
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="px-[.5rem] pb-8">
                                    <img class="client-logo" src="{{ Module::asset('frontend:img/cli2.jpg') }}" />
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="px-[.5rem] pb-8">
                                    <img class="client-logo" src="{{ Module::asset('frontend:img/cli3.jpg') }}" />
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="px-[.5rem] pb-8">
                                    <img class="client-logo" src="{{ Module::asset('frontend:img/cli4.jpg') }}" />
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="px-[.5rem] pb-8">
                                    <img class="client-logo" src="{{ Module::asset('frontend:img/cli5.jpg') }}" />
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="px-[.5rem] pb-8">
                                    <img class="client-logo" src="{{ Module::asset('frontend:img/cli6.jpg') }}" />
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="px-[.5rem] pb-8">
                                    <img class="client-logo" src="{{ Module::asset('frontend:img/Logo_cp.png') }}" />
                                </div>
                            </div>
                            <div class="splide__slide">
                                <div class="px-[.5rem] pb-8">
                                    <img class="client-logo" src="{{ Module::asset('frontend:img/IRPC.jpg') }}" />
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
