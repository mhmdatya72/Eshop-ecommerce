<!-- Topbar -->
<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">

                <!-- Top Left -->
                <div class="top-left">
                    <ul class="list-main">
                        <li><i class="ti-headphone-alt"></i> +060 (800) 801-582</li>
                        <li><i class="ti-email"></i> support@shophub.com</li>
                    </ul>
                </div>
                <!--/ End Top Left -->
            </div>
            <div class="col-lg-8 col-md-12 col-12">
                <!-- Top Right -->
                <div class="right-content">
                    <ul class="list-main">
                        <li><i class="ti-location-pin"></i> {{ __('Store location') }}</li>
                        <li><i class="ti-alarm-clock"></i> <a href="#">{{ __('Daily deal') }}</a></li>
                        <li><i class="ti-user"></i> <a href="#">{{ __('My account') }}</a></li>
                        <li><i class="ti-power-off"></i><a href="login.html#">{{ __('Login') }}</a></li>
                        <li><i class="ti-comments"></i> <a href="#">{{ __("Contact Us") }}</a></li>
                        <li><i class="ti-world"></i>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Language
                            </a>
                            <div class="dropdown-menu" aria-labelledby="languageDropdown">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Top Right -->
            </div>
        </div>
    </div>
</div>
<!-- End Topbar -->
