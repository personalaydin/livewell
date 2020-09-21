@extends('web.template.layout')
@section('content')
     <div class="position-relative ">
        <div class="js-slick main-slider slick-carousel--full-height position-relative" >        
             <div class="main-slider__item main-slider__item--3 background-cover text-white d-flex align-items-center" style="height:630px !important">
                <div class="container">
                    <div class="">
                        <div class="">
                            <div class="animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="100">
                                <div class="font-size-40 font-size-lg-50 text-color-light-blue font-weight-300 font-size-sm-60 font-size-xs-40 font-size-xxs-40  line-height-1-5 line-height-xs-1 mb-xs-20 center-div text-center">
                                    {!! theSentence('corporate-1', false) !!}
                                </div>
                                <div class="row">

                                    <div class="col-48 col-lg-48">
                                        <div class="mt-sm-3 mt-xxxl-8">
                                            <div class="for-width font-size-15 font-size-xs-15 font-size-sm-15 font-size-md-15 font-size-lg-20 font-weight-200 mb-5  center-div text-center ">
                                                {!! theSentence('corporate-2', false) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class='mt-100 container-pulse'>
                            <a href="#scroll" class="scroll">
                                <span class='pulse-button'></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <section id="scroll" class="mb-50"></section>
        <div class="row align-items-center py-10 px-0 px-md-20 px-lg-50">
            <div class="col-lg-24 ml-0 ml-sm-0 ml-md-50 ml-lg-0">
                <div class="position-relative ">
                    <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                        <div class=" background-cover text-white d-flex align-items-center mb-50 mt-10">
                            <div class="container">
                                <div class="pl-0 pl-sm-0 pl-md-0 pl-lg-30 ">
                                    <div class="animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="100">
                                        <div class="mt-10 font-weight-200 font-size-26 font-size-sm-24 font-size-xs-32 font-size-md-30 font-size-lg-36 font-size-xl-38 font-size-xxxl-46 line-height-1-5 text-color-light-blue pl-10 ">
                                            {!! theSentence('corporate-3', false) !!}
                                        </div>
                                        <div class="pl-md-5 mt-sm-3 mt-xxxl-8">
                                            <div class="for-width font-size-12 font-size-sm-15 font-size-lg-20 font-weight-500  text-color-gray pl-10">
                                            </div>
                                        </div>
                                        <div class="pl-md-5 mt-sm-3 mt-xxxl-8 pt-3 pt-sm-20 pt-md-30">
                                            <div class="for-width font-size-12 font-size-sm-15 font-size-lg-20 font-weight-500  pl-10 text-color-dark-blue">
                                                {!! theSentence('corporate-4', false) !!} 
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ml-10 mr-10 ml-sm-20 ml-md-50 ml-lg-50" data-aos="zoom-in">
                    <img src="{{ asset('assets/img/corporate-content-image.png') }}" alt="">
                </div>
                <div class="max-width-lg-500  font-weight-500 font-size-13 font-size-sm-14 font-size-lg-17 line-height-1-6 text-color-gray mb-lg-0 pt-50 mt-0 mt-md-30 mt-lg-40 ml-md-10 ml-lg-50 ml pl-20 pr-20 pl-md-10 pr-md-10 pl-lg-0 pr-lg-0">
                    <p>{!! theSentence('corporate-5', false) !!} </p> <br>    
                </div>
            </div>
            <div class="col-lg-24 ">
                <div class="max-width-lg-500 font-weight-500 font-size-13 font-size-sm-14 font-size-lg-17 line-height-1-6 text-color-gray mb-7 mb-lg-0 pt-md-10 pt-lg-50 pt-10 mt-0 mt-md-10 mt-lg-100 mt-lg-40 pl-20 pr-20 pl-md-30 pr-md-50 pl-lg-0 pr-lg-30 pr-lg-10">
                    <p>{!! theSentence('corporate-6', false) !!} </p> <br>    
                    <p>{!! theSentence('corporate-7', false) !!}</p> <br>
                    <p>{!! theSentence('corporate-8', false) !!}</p> <br>
                    <p>{!! theSentence('corporate-9', false) !!}</p> <br>
                    <p>{!! theSentence('corporate-10', false) !!}</p>
                </div>
            </div>
        </div>
@endsection
