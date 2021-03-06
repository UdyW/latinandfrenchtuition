<header>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand mr-auto" href="./">
                <img class="logo img-fluid" src="../assets/images/Crest_NG42.png">
                {{--<span class="text-orange">Latin &amp; French Tuition--}}
                {{--</span>--}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav border-none ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../resources">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<div class="orange-bar">
    <div class="container-fluid">
        <span>Online and London-based</span>
    </div>
</div>
<div class="orange-bar">
    <div class="container-fluid">
        <span></span>
    </div>
</div>
<section class="banner">
    @if(\App\Banners::where('page',$activePage)->first()->image != '')
    <img class="img-fluid w-100" style="max-height: 100%;max-width:100%;  position: relative; top: 0; left: 0;" src="{{Storage::url(\App\Banners::where('page',$activePage)->first()->image)}}">
        @if($activePage != 'services')
            <div class="trust-pilot-banner">
                <a href="https://www.trustpilot.com/review/latinandfrenchtuition.com" target="_blank" class="trustpilot">
                    <img class="image1" src="assets/images/Trustpilot.png">
                    <img class="image2" src="assets/images/Trustpilot_4halfstar.png">
                </a>
                {{--<div class="banner-caption">Committed to acadamic excellence.</div>--}}
                {{--<div class="banner-text">Latin and French tuition for school entrance, GCSE and A-Level exams by a professional tutor and qualified teacher.</div>--}}
                <img class="banner-caption" src="assets/images/bannerwebsite.png">
            </div>
        @endif
    @endif
    {{--<div>--}}
        {{--<div style="width: 260px; padding: 3px; margin-top: 20px;">--}}
            {{--<div style="float: left">--}}
                {{--<a target="_blank" href="" class="logo-trustpilot"></a>--}}
            {{--</div>--}}
            {{--<div style="float: right">--}}
                {{--<a target="_blank" href="" class="logo-trustpilot-stars"></a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</section>
