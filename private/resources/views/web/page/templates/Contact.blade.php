@extends('web.template.layout', [
    'headerClass' => 'header--shrink'
])
@section('content')

<style>
    #name-error{
        display: none !important;
    }
    .invalid-feedback{
      color: white;
      margin-left: 20px;
    }

    #information_text-error{
      margin-top: -10px;
      padding-bottom: 20px;
      display: flex;
      margin-left: 55px;
    }

    #information_text_1-error{
      margin-top: -20px;
      padding-bottom: 20px;
      display: flex;
      margin-left: 55px;
    }
</style>


<div class="bg-color-4 hero-contact">
    <div class="pt-200">
        <div class="container">
            <div class="wrapper-both-md-x">
                <div class="row">
                    <div class="ml-md--20 ml-lg-0 ml-xs-10 ml-30 col-xxl-28 col-xs-48  pl-md-100">
                        <div class="mb-10 mb-md-14 mb-lg-14 font-size-sm-50 font-size-30 text-color-light-blue font-weight-200">
                            {!! theSentence('contact-title', false) !!}
                        </div>
                        <div class="text-color-gray pr-100 mr-lg-100 mr-md-30 font-size-18">
                            <p>
                                {!! theSentence('contact-content', false) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center  ">
            <div class="col-xs-48 ml-xs-20 col-xxl-16 mt-10 mt-md-0 zindex-2 ">
                <div class="js-set-container-offset-left" data-breakpoint-down="xxl">
                    <div class="ml-xs-0 ml-30 wrapper-left-md-2x wrapper-right-md-3x pr-xxl-0 pt-lg-50 pt-md-50 pt-10">
                        <div class="font-size-sm-20 font-size-30 text-color-light-blue font-weight-400">
                            {!! theSentence('contact-email', false) !!}
                        </div>
                        <div class="text-color-gray font-size-22">
                            info@livewell.com.tr
                        </div>
                    </div>
                    <div class="ml-xs-0 ml-30 wrapper-left-md-2x wrapper-right-md-3x pr-xxl-0 pt-50 pt-xs-30">
                        <div class="font-size-sm-20 font-size-30 text-color-light-blue font-weight-400">
                            {!! theSentence('contact-telephone', false) !!}
                        </div>
                        <div class="text-color-dark-blue font-size-30">
                            +90 216 504 52 40
                        </div>
                    </div>
                    <div class="ml-xs-0 ml-30 wrapper-left-md-2x wrapper-right-md-3x pr-xxl-0 pt-50 pt-xs-30">
                        <div class="font-size-sm-20 font-size-30 text-color-light-blue font-weight-400">
                            {!! theSentence('contact-fax', false) !!}
                        </div>
                        <div class="text-color-dark-blue font-size-30">
                            +90 216 504 52 41
                        </div>
                    </div>
                    <div class="ml-xs-0 ml-30 wrapper-left-md-2x wrapper-right-md-3x pr-xxl-0 pt-50">
                        <div class="font-size-sm-20 font-size-30 text-color-light-blue font-weight-400 mt-xs--20">
                            {!! theSentence('contact-address', false) !!}
                        </div>
                        <div class="text-color-dark-blue font-size-16 min-width-sm-400 ">
                            {!! theSentence('contact-company', false) !!}
                        </div>
                        <div class="text-color-gray ">
                            {!! theSentence('contact-adress-content', false) !!}
                        </div>      
                    </div>
                </div>
            </div>
            <div class="col-48 col-sm-46 col-md-35 col-lg-42  col-xxl-18 mt-10 mt-md-0  zindex-2  ">
                <div class="">
                    <div class="js-set-container-offset-right" data-breakpoint-down="xxl">
                        <div class="wrapper-left-md-3x wrapper-right-md-x pr-xxl-0">
                            <div class=" px-8 py-6 px-xxl-11 py-xxl-8  zindex-2 ">
                                <div class="font-size-sm-19 line-height-1-4 text-blue-900 font-weight-700 mb-8">
                                </div>
                                <form action="{{ route('web.'.app()->getLocale().'.ajax.contact') }}" class="contact-form js-form-validation-handle font-size-14 ml-md--100" method="post">
                                    @honeypot
                                    @csrf
                                    <div class="alert alert-success d-none"></div>
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control border rounded bg-color-5 " id="name" placeholder="{!! theSentence('contact-name-surname', false) !!}" data-rule-required="true">
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control border rounded bg-color-5" id="email" placeholder="{!! theSentence('contact-email', false) !!}" data-rule-required="true" data-rule-email="true">
                                    </div>
                                    <div class="form-group">
                                        <input name="phone" type="phone" class="form-control border rounded bg-color-5" id="phone" placeholder="{!! theSentence('contact-telephone', false) !!}" data-rule-required="true" data-rule-phone="true">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control border rounded bg-color-5" id="message" rows="5"  placeholder="{!! theSentence('contact-message', false) !!}" data-rule-required="true" data-gramm_editor="false"></textarea>
                                    </div>
                                    @if (getPageByTemplate('InformationText'))
                                    <div class="form-group mb-0">
                                        <div class="custom-control custom-checkbox">
                                            <input name="information_text" type="checkbox" class="custom-control-input" id="information_text" data-rule-required="true">
                                            <label class="pt-3  custom-control-label font-size-xs-13 text-color-light-blue font-size-15 mb-5 mb-lg-0 mb-20 mt-10 font-weight-400 js-popup-ajax" for="information_text">
                                                {!! theSentence('contact-information-text-read', false, [
                                                    'link' => getPageByTemplate('InformationText')['viewLink']
                                                ]) !!}
                                            </label>
                                        </div>
                                    </div>
                                @endif
                                    

                                    @if (getPageByTemplate('InformationTextTwo'))
                                        <div class="form-group mb-0">
                                            <div class="custom-control custom-checkbox">
                                                {{-- <input name="information_text" type="checkbox" class="custom-control-input" id="information_text" data-rule-required="true">  --}}
                                                <input name="information_text_1" type="checkbox" class="custom-control-input" id="information_text_1" data-rule-required="true">
                                                <label class="pt-3 custom-control-label font-size-xs-14 text-color-light-blue font-size-18 mb-20 mt-10 font-weight-400 js-popup-ajax" for="information_text_1">
                                                    {!! theSentence('contact-information-text-agree', false, [
                                                        'link' => getPageByTemplate('InformationTextTwo')['viewLink']
                                                    ]) !!}
                                                </label>
                                            </div>
                                        </div>
                                    @endif
                                    <button type="submit" id="submit_contact_form_button" disabled class="mt-30 button button-main--disabled font-weight-600 font-size-13 font-size-sm-16 rounded-sm min-width-sm-155 min-height-sm-51 py-2 px-10  py-sm-0 px-sm-0 mt-sm-5 mt-xxxl-30 ">{!! textUppercase(theSentence('contact-send')) !!}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-42 offset-md-3 mt-50 h-px-154  bg-issue-5 zindex-2">
                <div class="js-slick main-slider slick-carousel--full-height position-relative" >
                    <div class="row">
                        <div class="col-md-42 offset-md-3 ">
                            <div class="animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="100">
                                <div class="row">
                                    <div class="col-md-28">
                                        {{-- <div class="p-xs-30 p-sm-20 mt-10 ml-md--15 font-weight-400  line-height-1-5 text-color-light-blue" style="font-size:2em;"> --}}
                                            <div class="ml-xs-20 mb-xs-50 mt-80 font-weight-400  line-height-1-5 text-color-light-blue" style="font-size: 1.6em;">
                                                {!! theSentence('contact-subsribe-title', false) !!}
                                        </div>
                                        <div class="pl-md-5 mt-xxxl-8 pl-sm-20 pl-xs-30 mt-sm--10 mt-xs--30">
                                            <div class="mb-30 for-width font-size-12 font-size-15 font-size-sm-15 font-size-lg-20 font-weight-500 mb-5 text-color-gray">
                                                {!! theSentence('contact-subsribe-content', false) !!}                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-48 col-lg-14 col-md-14 offset-md-6 mt-md-20">    
                                        
                                        <form action="{{ route('web.'.app()->getLocale().'.ajax.subscriber') }}" class="contact-form js-form-validation-handle font-size-14 ml-md--100" method="post">
                                            @honeypot
                                            @csrf                  
                                            <div class="form-group pt-md-25">
                                                <div class="alert d-none alert-custom"></div>
                                                    <input name="name" type="name" class="subcription-form-input form-control bg-color-5" id="name" placeholder="{!! theSentence('subs-contact-name', false) !!}" data-rule-required="true" data-rule-name="true">
                                                <div class="alert d-none alert-custom"></div>
                                                    <input name="email" type="email" class="subcription-form-input form-control bg-color-5 mt-10" id="email" placeholder="{!! theSentence('contact-email', false) !!}" data-rule-required="true" data-rule-email="true">
                                                <button type="submit" class="subscription-name-button mt-md-30 button button-main--fill scale-6 font-weight-600 font-size-13 font-size-sm-16 rounded-sm min-width-sm-155 min-height-sm-51 py-2 px-10  py-sm-0 px-sm-0 mt-sm-5 mt-xxxl-30 animate animate--fadeIn will-be-animate animated fadeInLeft">{!! textUppercase(theSentence('contact-send')) !!}</button>
                                            </div>

                                            @if (getPageByTemplate('InformationText'))
                                                <div class="form-group mb-0">
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="information_text" type="checkbox" class="custom-control-input" id="information_text-footer" data-rule-required="true">
                                                        <label class="mt-0 ml-30 pt-2 custom-control-label font-size-xs-13 font-size-15 mb-20 font-weight-600 js-popup-ajax" style="color: white !important;" for="information_text-footer">
                                                            {!! theSentence('contact-information-text-read', false, [
                                                                'link' => getPageByTemplate('InformationText')['viewLink']
                                                            ]) !!}
                                                        </label>  
                                                    </div>
                                                </div>
                                            @endif
                                            @if (getPageByTemplate('InformationTextTwo'))
                                        <div class="form-group mb-0">
                                            <div class="custom-control custom-checkbox">
                                                <input name="information_text_1" type="checkbox" class="custom-control-input" id="information_text_footer_1" data-rule-required="true">
                                                <label class="mt-0 ml-30 pt-2 custom-control-label font-size-xs-13 font-size-15 mb-15 pb-15 font-weight-600 js-popup-ajax" style="color: white !important;" for="information_text_footer_1">
                                                    {!! theSentence('contact-information-text-agree', false, [
                                                        'link' => getPageByTemplate('InformationTextTwo')['viewLink']
                                                    ]) !!}
                                                </label>
                                            </div>
                                        </div>
                                    @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-relative bg-color-5 h-px-200 mt--90">
        </div>
    </div>
</div>

@endsection

