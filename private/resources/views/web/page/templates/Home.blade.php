@extends('web.template.layout')
@section('content')
    <div class="position-relative bg-color-4">
        <div class="js-slick main-slider slick-carousel--full-height position-relative" >
             <div class="main-slider__item main-slider__item--2 background-cover text-white d-flex align-items-center" style="height: 96vh !important;">
                <div class="container mt-100 ">
                    <div class="pl-md-80  pl-sm-50 pl-xs-0">
                        <div class="">
                            <div class="animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="100">
                                <div data-aos="zoom-out" class=" pb-20 font-weight-300 font-size-30 font-size-sm-60 font-size-xs-60 font-size-xxs-15 font-size-42 font-size-md-30 font-size-lg-70  line-height-1 line-height-xs-1 mb-xs-10">
                                  {!! theSentence('slider-title', false) !!}
                                </div>
                                <div class="row">
                                    <div class="col-40 col-lg-44">
                                        <div class="pl-md-50 pl-sm-30 pl-xs-15  mt-sm-3 mt-xxxl-8">
                                            <div data-aos="fade-left" class="for-width font-size-16 font-size-xs-16 font-size-sm-16 font-size-md-16 font-size-lg-18 font-weight-200 mb-5 pr-md-70 pr-sm-0">
                                              {!! theSentence('slider-content', false) !!}
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
    <div class='container-pulse mt--150 mb-60'>
        <a href="#scroll" class="scroll">
            <span class='pulse-button'></span>
        </a>
    </div>
    <section id="scroll" ></section>
    <div class="position-relative h-px-md-400 h-px-xs-350 bg-color-4 bg-color-4 pt-md-60 pt-xs-10">
        <div class="js-slick main-slider slick-carousel--full-height position-relative" >
            <div class=" background-cover text-white d-flex align-items-center mb-50 mt-10">
                <div class="container">
                    <div class="pl-md-15">
                        <div class="animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="100" >
                            <div data-aos="fade-right" class="mt-50 font-weight-200 font-size-35 font-size-sm-24 font-size-xs-38 font-size-md-40 font-size-lg-36 font-size-xl-50 font-size-xxxl-50 line-height-1-5 text-color-light-blue">
                                {!! theSentence('home-box-title', false) !!}
                            </div>
                            <div class="pl-md-5 mt-sm-3 mt-xxxl-8">
                                <div data-aos="fade-left" class="mt-lg-0 mt-10  for-width font-size-16 ml-5 ml-lg-0 font-size-sm-16 font-size-md-18 font-size-lg-20 font-weight-500 mb-5 text-color-gray">
                                    {!! theSentence('home-box-content', false) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        
    <div class="parallax bg-color-3 bg-color-4 h-px-xs-250 h-px-md-400 pt-md-60" id="noparallax">
    <div class="position-relative ">
        <div class="js-slick main-slider slick-carousel--full-height position-relative" >
            <div class="  text-white d-flex align-items-center mb-50 mt-10 ">
                <div class="container max-width-610">
                    <div class="">
                        <div class="animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="100">
                            <div class="mt-60 mt-md-50 text-center font-weight-200 font-size-35 font-size-sm-24 font-size-xs-32 font-size-md-30 font-size-lg-36 font-size-xl-50 font-size-xxxl-50 line-height-1-5 text-color-more-light-blue">
                                {!! theSentence('home-vision-title', false) !!}
                            </div>
                            <div class=" text-center font-size-18 font-size-sm-15 font-size-lg-20 font-weight-200 mb-5 text-color-white">
                                {!! theSentence('home-vision-content', false) !!}
                            </div>
                            <div class="vertical_seperator center-div mt-20"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



<div class="position-relative bg-color-4">
    <div class="three-product-box pt-95 row" style="place-content: center;">
            <div class=" text-sm-center  pl-30 pr-30" style="width:610px;">
                <div class="ml-20 d-xs-none d-md-block mt-md-100 mb-50 text-left font-weight-200 font-size-sm-24 font-size-50 font-size-md-30 font-size-lg-36 font-size-xl-50 font-size-xxxl-50 line-height-1-5 text-color-dark-blue">
                    {!! theSentence('products', false) !!}
                </div>
                
                    {{-- <a href="{{ getPageByTemplate('Products')['viewLink'] }}" data-aos="zoom-out">
                        <div style="margin-right: 30px;margin-left: -30px;">
                            <div class="image-container-product" class=" mb-50 ml-70" style="margin-left:70px">
                                <img src="{{ asset('assets/img/product/product_thumb_1_'.app()->getLocale().'.png') }}" alt="" >
                            </div>
                        </div>
                    </a> --}}
                    {{-- <a href="{{ getPageByTemplate('Products')['viewLink'] }}" data-aos="zoom-out" class="product-image">
                        <img src="{{ asset('assets/img/product/product_thumb_1_'.app()->getLocale().'.png') }}" alt="" class="mb-50">
                        <span class=”green-overlay”></span>
                    </a> --}}

                    <a href="{{ getPageByTemplate('Products')['viewLink'] }}">
                    <div class="container-product-image product-first" >
                        <img src="{{ asset('assets/img/product/product_thumb_1_'.app()->getLocale().'.png') }}"  class="image-product-image mb-50" >
                        <div class="middle-product-image">
                          <div class="text-product-image">
                            <a href="{{ getPageByTemplate('Products')['viewLink'] }}" class="animate animate--fadeIn will-be-animate animated fadeInUp mt-30 button button-main--fill font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-sm-155 min-height-sm-51 py-2 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10  mr-15">
                                {!! theSentence('detail', false) !!}
                            </a>
                          </div>
                        </div>
                    </div>
                    </a>


            </div> 
            <div class="text-sm-center  pl-30 pr-30"  style="width:610px;">
                <a href="{{ getPageByTemplate('Products')['viewLink'] }}">
                <div class="container-product-image">
                    <img src="{{ asset('assets/img/product/product_thumb_2_'.app()->getLocale().'.png') }}"  class="image-product-image mb-50" >
                    <div class="middle-product-image">
                      <div class="text-product-image">
                        <a href="{{ getPageByTemplate('Products')['viewLink'] }}" class="animate animate--fadeIn will-be-animate animated fadeInUp mt-30 button button-main--fill font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-sm-155 min-height-sm-51 py-2 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10  mr-15">
                            {!! theSentence('detail', false) !!}
                        </a>
                      </div>
                    </div>
                </div>
                </a>
                <a href="{{ getPageByTemplate('Products')['viewLink'] }}">
                <div class="container-product-image">
                    <img src="{{ asset('assets/img/product/product_thumb_3_'.app()->getLocale().'.png') }}"  class="image-product-image mb-50" >
                    <div class="middle-product-image">
                      <div class="text-product-image">
                        <a href="{{ getPageByTemplate('Products')['viewLink'] }}" class="animate animate--fadeIn will-be-animate animated fadeInUp mt-30 button button-main--fill font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-sm-155 min-height-sm-51 py-2 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10  mr-15">
                            {!! theSentence('detail', false) !!}
                        </a>
                      </div>
                    </div>
                </div>
                </a>
            </div> 
    </div>
</div>


    <div class="position-relative bg-color-4">
        <div class="row">
            <div class="col-md-42 offset-md-3 mt-50 h-px-300 pt-md-20 bg-issue-1 zindex-2">
                <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                    <div class="row">
                        <div class="col-md-42 offset-md-3 ">
                            <div class="animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="100">
                                <div class="ml-xs-25 pl-30 py-10 p-sm-20 ml-md--15 font-weight-200 font-size-32 font-size-sm-34 font-size-xs-32 font-size-md-30 font-size-lg-36 font-size-xl-50 font-size-xxxl-46 line-height-1-5 text-color-light-blue">
                                    {!! theSentence('corporate-title', false) !!}
                                </div>
                                <div class="pl-md-5 mt-xxxl-8 pl-sm-20 pl-xs-30 mt-sm--10 mt-xs--30">
                                    <div class="for-width pl-30 pl-md-5 pl-lg-5 pr-10  font-size-14 font-size-sm-15 font-size-lg-20 font-weight-200 mb-5 text-color-white mt--20">
                                        {!! theSentence('corporate-content', false) !!}
                                    </div>
                                    <a href="{{ getPageByTemplate('Corporate')['viewLink'] }}" class="mt-30 ml-25 button button-main--fill font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-sm-155 min-height-sm-51 py-2 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10  mr-15">
                                        {!! theSentence('corporate-button', false) !!}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    
      
    
    
        <div class="position-relative bg-color-5 h-px-200 mt--200">    
    </div>
</div>
  
@endsection