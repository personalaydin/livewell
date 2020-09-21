<footer class="footer mt-50">

    <div id="cookieConsent">
        <div id="closeCookieConsent">X</div>

        <span class="">{!! theSentence('cookies-text', false) !!}</span>
        
        
        <a class="cookieConsentOK animate animate--fadeIn button button-white--fill font-weight-600 font-size-13 font-size-sm-16 rounded-sm min-width-sm-155 min-height-sm-51 py-2 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10 ">
            {!! theSentence('cookies-button-text', false) !!}
        </a>
          
      
    </div>
    {{-- <div class="modal fade" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog fixed-bottom" role="document">
          <div class="modal-content bg-color-6">
            <div class="modal-body pr-lg-50 pl-lg-50 cookies-centering">
              <div class="notice d-flex justify-content-between align-items-center">
                <div class="cookie-text text-color-white font-size-15">{!! theSentence('cookies-content-text', false) !!}</div>
                <div class="buttons d-flex flex-column flex-lg-row">
                  
                    <a href="#a" class="btn btn-success btn-sm animate animate--fadeIn will-be-animate animated fadeInUp mt-30 button button-white--fill font-weight-600 font-size-13 font-size-sm-16 rounded-sm min-width-sm-155 min-height-sm-51 py-2 px-10 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10  mr-10" data-dismiss="modal">{!! theSentence('cookies-button-text', false) !!}</a>
         
                    <a href="#a" id="closeButton"  aria-label="Close" class="close font-size-42" data-dismiss="modal"><span aria-hidden="true">&times;</span></a>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div> --}}
     

    <div class="container">
        <div class="row " style="place-content: center; margin-bottom: 30px;">
            <div class="col-10 offset-1 mr-15 footer-logo-center-mobile">
                <img src="{{asset('assets/img/logo-gray.png')}}" alt="" class="w-px-244 footer-logo-center-mobile">
            </div> 
            <div class="col-4 offset-20 text-right pt-30 text-color-gray hide ">
            @if (getPageByTemplate('Home'))
                <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="header__bottom__menu__item  font-weight-600">
                {{ (getPageByTemplate('Home')['title']) }}
                </a>
            @endif       
            </div>
            <div class="col-4 text-right pt-30 text-color-gray hide ">
            @if (getPageByTemplate('Products'))
                <a href="{{ getPageByTemplate('Products')['viewLink'] }}" class="header__bottom__menu__item font-weight-600">
                    {{ (getPageByTemplate('Products')['title']) }}
                </a>
            @endif       
            </div>
            <div class="col-4 text-right pt-30 text-color-gray hide ">
            @if (getPageByTemplate('Corporate'))
                <a href="{{ getPageByTemplate('Corporate')['viewLink'] }}" class="header__bottom__menu__item font-weight-600">
                    {{ (getPageByTemplate('Corporate')['title']) }}
                </a>
            @endif        
            </div>
            <div class="col-4 text-right pt-30 text-color-gray hide ">
            @if (getPageByTemplate('Contact'))
                <a href="{{ getPageByTemplate('Contact')['viewLink'] }}" class="header__bottom__menu__item font-weight-600">
                    {{ (getPageByTemplate('Contact')['title']) }}
                </a>
            @endif    
            </div>
        </div> 
        <div class="row social-footer">
            <div class="d-none d-xs-none d-xxs-none d-md-none d-lg-block font-size-13 text-color-dark-blue font-weight-800 text-center copyright-footer ml-30">
                {!! theSentence('copyright', false) !!}
                <input name="information_text"  class="custom-control-input " id="information_text" data-rule-required="true">
                <label class="pl-md-10 pt-md-0 pt-lg-0 font-size-xs-12 text-color-gray font-size-14 mb-5 mb-lg-0 font-weight-400 " >
                    
                @if (App::getLocale() == 'tr')
                    
                    <a href="{{ asset('assets/downloads/tr-erdem-livewell-kvk-politikasi.pdf') }}">
                        {!! theSentence('kvkk-text', false) !!}
                    </a>
                
                    @elseif (App::getLocale() == 'en')
                    
                <a href="{{ asset('/assets/downloads/en-erdem-livewell-kvk-politikasi.pdf') }}">
                    {!! theSentence('kvkk-text', false) !!}
                </a>
                
                @endif
                    
                </label>
            </div> 
            <div class="row zoom7">
                <div>
                    @if (setting('social_facebook'))
                        <div class="card">
                            <a href="{{ setting('social_facebook') }}" target="_blank" rel="nofollow">
                                <span class="img-bottom" alt="Card Back">{{ svg_image('assets/img/icons/social/fb-b') }}</span>
                                <span class="img-top" alt="Card Front">{{ svg_image('assets/img/icons/social/fb-f') }}</span>
                            </a>
                        </div>
                    @endif
                </div>
                <div class="">
                    @if (setting('social_instagram'))
                        <div class="card">
                            <a href="{{ setting('social_instagram') }}" target="_blank" rel="nofollow">
                                <span class="img-bottom" alt="Card Back">{{ svg_image('assets/img/icons/social/ins-b') }}</span>
                                <span class="img-top" alt="Card Front">{{ svg_image('assets/img/icons/social/ins-f') }}</span>
                            </a>
                        </div>
                    @endif
                </div>
                <div class="">
                    @if (setting('social_youtube'))
                        <div class="card">
                            <a href="{{ setting('social_youtube') }}" target="_blank" rel="nofollow">
                                <span class="img-bottom" alt="Card Back">{{ svg_image('assets/img/icons/social/yb-b') }}</span>
                                <span class="img-top" alt="Card Front">{{ svg_image('assets/img/icons/social/yb-f') }}</span>
                            </a>
                        </div>
                    @endif
                </div>
                <div class="">
                    @if (setting('social_linkedin'))
                        <div class="card">
                            <a href="{{ setting('social_linkedin') }}" target="_blank" rel="nofollow">
                                <span class="img-bottom" alt="Card Back">{{ svg_image('assets/img/icons/social/ln-f') }}</span>
                                <span class="img-top" alt="Card Front">{{ svg_image('assets/img/icons/social/ln-b') }}</span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
            <div class=" d-md-block d-lg-none font-size-12 text-color-dark-blue font-weight-600 text-center copyright-footer ml-lg-20 ml-xl-30 mt-xs-10">
                {!! theSentence('copyright', false) !!}
            </div> 
        </div>       
    </div>
</footer>
