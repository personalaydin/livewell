<div class="hamburger-menu background-cover text-black d-flex d-lg-none align-items-center">
    <div class="h-100 w-100 d-flex flex-column justify-content-between">
        <div class="container py-5 py-xs-10 h-100 d-flex flex-column justify-content-between">
            <div class="px-4 w-100 font-size-14 font-size-sm-16 font-weight-600 text-white mb-4">
                <div class="mb-6 mb-sm-10 mt-50">
                    @if (count(config('app.locales')) > 1)
                     @foreach(config('app.locales') as $key => $locale)
                        <a href="{{ $localizationURLs[$key] }}" class="hamburger-menu__lang-switcher d-inline-flex align-items-center justify-content-center animate animate--fadeIn" data-animate="fadeInDown" data-animate-delay="100">{{ textUppercase($key) }}</a>
                     @endforeach
                    @endif
                </div>
                @if (getPageByTemplate('Home'))
                <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="hamburger-menu__link animate animate--fadeIn mt-70" data-animate="fadeInLeft" data-animate-delay="700" >
                    {{ textUppercase(getPageByTemplate('Home')['title']) }}
                </a>
                @endif
                @if (getPageByTemplate('Products'))
                    <a href="{{ getPageByTemplate('Products')['viewLink'] }}" class="hamburger-menu__link animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="700">
                        {{ textUppercase(getPageByTemplate('Products')['title']) }}
                    </a>
                @endif
                @if (getPageByTemplate('Corporate'))
                    <a href="{{ getPageByTemplate('Corporate')['viewLink'] }}" class="hamburger-menu__link animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="700">
                        {{ textUppercase(getPageByTemplate('Corporate')['title']) }}
                    </a>
                @endif
                @if (getPageByTemplate('Contact'))
                    <a href="{{ getPageByTemplate('Contact')['viewLink'] }}" class="hamburger-menu__link animate animate--fadeIn" data-animate="fadeInLeft" data-animate-delay="700">
                        {{ textUppercase(getPageByTemplate('Contact')['title']) }}
                    </a>
                @endif
            </div>
            {{-- <a href="http://healthcareplatform.livewell.com.tr/LiveWell/Account/Prelogin?returnUrl=/LiveWell" target="_blank" class="d-lg-none ml-10 mb-20 py-2 px-0 py-sm-0 px-sm-0 mt-3 mt-sm-5 mt-xxxl-10  mt-30 zoom-sm-8 zoom-1 button button-main--fill font-weight-600 font-size-13 font-size-sm-14 rounded-sm min-width-sm-155 min-height-sm-51  font-weight-900">
                {!! theSentence('health-platform-product-button', false) !!}
            </a> --}}
            <div class="px-4 w-100 text-white animate animate--fadeIn mb-160 text-color-main" data-animate="fadeInDown" data-animate-delay="1000">
                <div class="text-line mb-4 mb-sm-7 font-size-16 connect-to-social-media">
                    {!! theSentence('social-medya', false) !!}
                </div>
                <div class="d-flex align-items-center m-n3 text-blue-400">
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
            </div>
        </div>
    </div>
</div>