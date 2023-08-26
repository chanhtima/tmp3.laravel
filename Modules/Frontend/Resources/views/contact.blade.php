@extends('frontend::layouts.master')
@section('title')

@section('style')

@endsection

@section('content')

    <main>
        <section class="the-container">
            <div class="container d-contact">
                <p class=" th-5 fs-36 uppercase text-center mb-3r">Contact Us</p>
                
                <div class="layout layouy-contact">
                    <div class="lg:w-2/3">
                        <div class="map-wrapper"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.3261135910216!2d100.56324906524183!3d13.75919694034272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29d4918d39f69%3A0x7c82b5cfabbf1f4a!2sFortune%20Town!5e0!3m2!1sen!2sth!4v1679977584185!5m2!1sen!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>
                    <div class="lg:w-1/3 box-contact">
                        <div class="w-full lg:pt-6 space-y-2">
                            <h2 class="th-2"> <span class="th-5">Address: </span>
                                <br>
                                <a href="{{ url('#') }}"> </a>LARDPLAKAO ROAD, JORAKAEBUA, LARDPRAO, BANGKOK 10230
                            </h2>
                            <h2 class="th-2"> <span class="th-5">Email: </span>
                                <br>
                                <a href="{{ url('#') }}"> </a>tanai@charinsarn.com
                            </h2>
                            <h2 class="th-2"> <span class="th-5">Phone: </span>
                                <br>
                                <a href="{{ url('#') }}"> </a>+669 2653 6914
                            </h2>
                            <h2 class="th-2"> <span class="th-5">LINE Official Account: </span>
                                <br>
                                <a href="{{ url('#') }}"> </a>@TNIANDASSOCIATES
                            </h2>
                        
                        </div>
                    </div>
                </div>
                <div class="px-6 w-full" >
                    <div class="form-wrapper rounded-md line-form ">
                        <div class="flex flex-wrap">
                            <div class="w-full md:px-6 py-[.85rem] 2xl:pr-20 overflow-x-hidden">
                                <h1 class="th-5 fs-22 lg:fs-32 xl:leading-12">ส่งข้อความหาเรา</h1>
                                <div class="flex items-center space-x-4">
                                    <p class="th-3 fs-16">คุณสามารถส่งข้อความ หรือข้อเสนอแนะ ทางเราจะติดต่อกลับไปโดยเร็วที่สุด</p>
                                </div>
                            </div>
                            <div class="w-full md:px-8">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row mb-3 mx-0">
                                            <label class="th-3">ชื่อ-นามสกุล</label><input type="text" class="form-style font-weight-semibold px-1 py-3" name="name" placeholder="* Full Name" data-msg-required="This field is required." id="name" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row mx-0 mb-3">
                                            <label class="th-3">Email</label><input type="email" class="form-style font-weight-semibold px-1 py-3" name="email" placeholder="* Email Address" data-msg-required="This field is required." id="email" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mx-0 mb-3">
                                            <div class="form-group col">
                                                <label class="form-label th-3 pl-2">Telephone</label>
                                                <input type="text" class="form-style font-weight-semibold px-1 py-3" name="tel" placeholder="* Title" data-msg-required="This field is required." id="tel" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mx-0 mb-3">
                                            <div class="form-group col">

                                                <label class="form-label th-3 pl-2" for="cars">เรื่องที่ต้องการติดต่อ
                                                </label>
                                                <select id="cars" class="cars">
    
                                                <option  label="ระบุเรื่องที่ต้องการติดต่อ">ระบุเรื่องที่ต้องการติดต่อ(ระบุเรื่องที่ต้องการติดต่อ)</option>
                                                <option   label="Saab">Saab (Swedish Aeroplane AB)</option>
                                                <option   label="Mercedes">Mercedes (Mercedes-Benz)</option>
                                                <option   label="Audi">Audi (Auto Union Deutschland Ingolstadt)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row mx-0 mb-3">
                                            <label class="th-3">รายละเอียด</label>
                                            <textarea name="message" id="message" rows="4" class="form-style form-style font-weight-semibold text-color-light px-1" placeholder="* Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 py-6 flex">
                                        <input type="checkbox" class="mr-2" id="accept" name="accept" value="accept">
                                        <label for="accept" of="policy">ฉันได้อ่านและยอมรับข้อกำหนดและเงื่อนไขที่ระบุไว้ใน
                                            <a class="text-1st" href="{{ url('/policy') }}">
                                                <u>นโยบายความเป็นส่วนตัว</u></a>
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <img src="{{ Module::asset('frontend:img/home/PDPA.png') }}" >
                                        <div class="pt-6">
                                            <button class="bg-dark rounded-md  py-2 text-whiten mx-auto btn-dark btn-contact" type="submit" data-bs-toggle="modal" data-bs-target="#notic">SEND MESSAGE</button>
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
