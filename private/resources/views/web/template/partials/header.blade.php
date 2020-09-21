
<div class="container"></div>
<div class="wrapper-both"><div></div></div>
<div class="wrapper-both-2x"><div></div></div>
<div class="wrapper-both-3x"><div></div></div>
<header class="header-wrapper">
    <div class="container">
        <div class="header {{ $headerClass ?? '' }}">
            <div class="pt-20 header__top wrapper-both d-none d-lg-flex align-items-end justify-content-end mt-md--30 mb-30 mr--20 ">
                <a href="http://healthcareplatform.livewell.com.tr/LiveWell/Account/Prelogin?returnUrl=/LiveWell" target="_blank" style="margin-top: 0px !important;" class="d-block-shrink mb-10 button hidden  button-fixed button-fixed-mobile button-main--fill  font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-sm-155 min-height-sm-51 py-2 px-10  py-sm-0 px-sm-0  mt--30 ">
                    {!! theSentence('health-platform', false) !!}
                </a>
                @if (count(config('app.locales')) > 1)
                    @foreach(config('app.locales') as $key => $locale)
                        <div class="header__top__lang-switcher relavtive mr-5 ">
                            <a href="{{ $localizationURLs[$key] }}" class="lang-style relative font-size-12 font-weight-900" style="top: 40px !important;">{{ textUppercase($key) }}</a>
                        </div>
                    @endforeach
                @endif
            </div>
            <a href="http://healthcareplatform.livewell.com.tr/LiveWell/Account/Prelogin?returnUrl=/LiveWell" target="_blank" class="mr--15 button-opacity d-none-shrink button hidden  button-fixed button-fixed-mobile button-main--fill  font-weight-600 font-size-14 font-size-sm-16 rounded-sm min-width-sm-155 min-height-sm-51 py-2 px-10  py-sm-0 px-sm-0 mt--30 ">
                {!! theSentence('health-platform', false) !!}
            </a>
            <div class="header__bottom wrapper-both d-flex align-items-center mt--60">
                <div class="w-100 row no-gutters align-items-center align-items-lg-end">
                    <div class="col-38 col-lg-10">
                        <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="header__bottom__logo" title="LiveWell Giyilebilir Sağlık Ürünleri">
                            <div class="logo-container"></div>
                        </a>
                    </div>
                    <div class="col-10 col-lg-38 text-center">
                        <div class="header__bottom__menu font-size-12 font-size-xl-18 font-weight-600 d-none d-lg-block mr-0 pr-0">
                            @if (getPageByTemplate('Home'))
                                <a href="{{ getPageByTemplate('Home')['viewLink'] }}" class="header__bottom__menu__item mr-30">
                                {{ (getPageByTemplate('Home')['title']) }}
                                </a>
                            @endif
                            @if (getPageByTemplate('Products'))
                                <a href="{{ getPageByTemplate('Products')['viewLink'] }}" class="header__bottom__menu__item mr-30">
                                    {{ (getPageByTemplate('Products')['title']) }}
                                </a>
                            @endif
                            @if (getPageByTemplate('Corporate'))
                                <a href="{{ getPageByTemplate('Corporate')['viewLink'] }}" class="header__bottom__menu__item mr-30">
                                    {{ (getPageByTemplate('Corporate')['title']) }}
                                </a>
                            @endif  
                            @if (getPageByTemplate('Contact'))
                                <a href="{{ getPageByTemplate('Contact')['viewLink'] }}" class="header__bottom__menu__item ">
                                    {{ (getPageByTemplate('Contact')['title']) }}
                                </a>
                            @endif
                          
                           
                        </div>
                       
                        <div class="hamburger-menu-button-wrapper d-lg-none">
                            <a href="http://healthcareplatform.livewell.com.tr/LiveWell/Account/Prelogin?returnUrl=/LiveWell" target="_blank" class="  d-lg-none button    button-main--fill  font-weight-600 font-size-12 font-size-sm-16 rounded-sm min-width-sm-70 min-height-sm-31 py-2 px-2 mr-10 py-sm-0 px-sm-5 mt-70 ">
                                {!! theSentence('health-platform', false) !!}
                            </a>
                            <button class="js-hamburger-menu-trigger hamburger hamburger--spin" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
