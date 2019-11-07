@extends('layouts.customer')

@section('content')
    <header style="background-color: #cde7fe;">
        <div class="top-header container">

            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand"  href="{{route('/')}}">
                    <img src="{{asset('view/img/logo.png')}}" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link"  href="{{route('/')}}">Home</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Über</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="mailto: kontakt@direktmarketing-boerse.de">Kontakt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('supplier.contactRequest')}}"> Jetzt als Lieferant bewerben </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('customer.category')}}">
                                <span class="nav_btn"> Ausschreibung starten <i class="fas fa-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="main">

        <section class="home_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 home_top1">

                        <p class="home_top1_text1">
                            DEUTSCHLANDS GRÖSSTES DIREKTMARKETING AUSSCHREIBUNGSPORTAL
                        </p>
                        <p class="home_top1_text2">
                            {{ $adword->title }}
                        </p>

                        <p class="home_top1_text3">
                                {{ $adword->desc }}                      
                        </p>
                        <ul class="home_ul">
                            <li>
                                {{ $adword->list1 }}      
                            </li>
                            <li>
                                {{ $adword->list2 }}
                            </li>
                            <li>                                   
                                {{ $adword->list3 }}
                            </li>
                        </ul>

                        <div class="home_top_buttons">
                            <a href="{{route('customer.category')}}"> <button class="btn btn-primary home_start">Ausschreibung starten <i class="fas fa-arrow-right"></i> </button> </a>

                            <a href=""> <button class="btn home_viewJobs"> Aktuelle Ausschreibungen anschauen </button></a>
                        </div>


                    </div>

                </div>
            </div>
        </section>
        <section class="home_top_bottom"></section>
        <section class="home_step">
            <div class="container text-center">


                <p class="home_step_title1">  WIE FUNKTIONIERT ES ?</p>
                <p class="home_step_title2"> In 4 Schritten zu Ihrem besten Angebot </p>

                <div class="row">
                    <div class="col-md-3">
                        <div class="home_step_body">
                            <img src="{{ asset('view/img/home_i1.jpg')}}" alt="">
                            <p class="home_step_title3">
                                    Beschreiben Sie kostenlos Ihr Projekt
                            </p>
                            <p class="home_step_title4">
                                    Beschreiben Sie Ihr Projekt oder Ihren Adressbedarf kostenlos
                            </p>
                        </div>
                        <div class="home_step_arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="home_step_body">
                            <img src="{{ asset('view/img/home_i2.jpg')}}" alt="">
                            <p class="home_step_title3">
                                Dienstleister werden benachrichtigt
                            </p>
                            <p class="home_step_title4">
                                Die Dienstleister erhalten den Inhalt Ihrer Ausschreibung (ohne Budget) und erstellen ein Angebot.
                            </p>
                        </div>
                        <div class="home_step_arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="home_step_body">
                            <img src="{{ asset('view/img/home_i3.jpg')}}" alt="">
                            <p class="home_step_title3">
                                    Sie erhalten durchschnittlich 5 Angebote
                            </p>
                            <p class="home_step_title4">
                                Im Schnitt erhalten Sie innerhalb von 72 Stunden  3 Angebote - insgesamt durchschnittlich 6 Angebote
                            </p>
                        </div>
                        <div class="home_step_arrow">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="home_step_body">
                            <img src="{{ asset('view/img/home_i4.jpg')}}" alt="">
                            <p class="home_step_title3">
                                    Wählen Sie Ihren Dienstleister
                            </p>
                            <p class="home_step_title4">
                                    Wählen Sie den Dienstleister Ihres Vertrauens - im Schnitt sind die Angebote 24% günstiger als am freien Markt.
                            </p>
                        </div>
                        <div class="home_step_arrow"></div>
                    </div>
                </div>

            </div>
        </section>

        <section class="home_tab">
            <div class="container">
                <div class="home_tab_img">
                    <img src="{{ asset('view/img/home_i5.jpg')}}" alt="">

                </div>
                <p class="home_step_title1">  WIE FUNKTIONIERT ES ?</p>
                <p class="home_tab_title">
                        Unsere aktuellen Ausschreibungen
                </p>

                <ul class="nav nav-tabs nav-justified nav-tabs-dropdown" role="tablist">
                    <li class="active" role="presentation"><a data-toggle="tab" role="tab" href="#home" class="active">Alle Kategorien</a></li>
                    <li role="presentation"><a data-toggle="tab" role="tab" href="#menu1">E-Mail Marketing</a></li>
                    <li role="presentation"><a data-toggle="tab" role="tab" href="#menu2">Callcenter-Aktion</a></li>
                    <li role="presentation"> <a data-toggle="tab" role="tab" href="#menu3"> Postalische Adressen</a></li>
                   
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade  in active show">
                        <div class="row">
                            @forelse($customer as $item)       
                                <div class="col-lg-6">
                                    <div class="tab_body">
                                                                                                
                                        <div class="pro_content">
                                            <div class="pro_title">
                                                {{ $item->title}}
                                            </div>
                                            <div class="pro_mail">
                                                {{-- {{ $item->email}} --}}
                                            </div>
                                            <div class="pro_timeline">
                                                {{ $item->target_group_desc}}
                                            </div>
                                        </div>
                                        <div class="pro_budget text-center">
                                            <div class="pro_budget1">
                                                   {{ $item->budget}} <i class="fas fa-euro-sign"></i>
                                            </div>
                                            <div class="pro_budget2">
                                                Budget
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty       
                    
                            @endforelse
                        </div>
                        
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="row">
                            @forelse($customer as $item) 
                                @if ($item->email_marketing)
                                    <div class="col-lg-6">
                                        <div class="tab_body">
                                                                                                    
                                            <div class="pro_content">
                                                <div class="pro_title">
                                                    {{ $item->title}}
                                                </div>
                                               
                                                <div class="pro_timeline">
                                                    {{ $item->target_group_desc}}
                                                </div>
                                            </div>
                                            <div class="pro_budget text-center">
                                                <div class="pro_budget1">
                                                       {{ $item->budget}} <i class="fas fa-euro-sign"></i>
                                                </div>
                                                <div class="pro_budget2">
                                                    Budget
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif      
                            @empty       
                    
                            @endforelse
                        </div>
                        

                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="row">
                            @forelse($customer as $item) 
                                @if ($item->callcenter)
                                    <div class="col-lg-6">
                                        <div class="tab_body">
                                                                                                    
                                            <div class="pro_content">
                                                <div class="pro_title">
                                                    {{ $item->title}}
                                                </div>
                                               
                                                <div class="pro_timeline">
                                                    {{ $item->target_group_desc}}
                                                </div>
                                            </div>
                                            <div class="pro_budget text-center">
                                                <div class="pro_budget1">
                                                        {{ $item->budget}} <i class="fas fa-euro-sign"></i>
                                                </div>
                                                <div class="pro_budget2">
                                                    Budget
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif      
                            @empty       
                    
                            @endforelse
                        </div>
                     
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <div class="row">
                            @forelse($customer as $item) 
                                @if ($item->postal_Address)
                                    <div class="col-lg-6">
                                        <div class="tab_body">
                                                                                                    
                                            <div class="pro_content">
                                                <div class="pro_title">
                                                    {{ $item->title}}
                                                </div>                                                
                                                <div class="pro_timeline">
                                                    {{ $item->target_group_desc}}
                                                </div>
                                            </div>
                                            <div class="pro_budget text-center">
                                                <div class="pro_budget1">
                                                       {{ $item->budget}} <i class="fas fa-euro-sign"></i>
                                                </div>
                                                <div class="pro_budget2">
                                                    Budget
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif      
                            @empty       
                    
                            @endforelse
                        </div>
                   
                    </div>
                   
                </div>
            </div>
        </section>
        <section class="home_join">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="home_join_body">
                            <div class="home_join_title">
                                    Treten Sie Deutschlands grösstem <br> Direktmarketing Ausschreibungsportal bei
                            </div>
                            <div class="home_join_text">
                                    Beschreiben Sie Ihr Projekt kostenlos und holen Sie sich <br> Angebote von Deutschlands Direktmarketing Unternehmen
                            </div>
                            <a href = "{{route('supplier.contactRequest')}}"> 
                                <button class="btn home_join_btn">
                                        Jetzt als Lieferant bewerben <i class="fas fa-arrow-right"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="home_footer">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{ asset('view/img/logo_footer.png')}}" alt="" class="footer_logo_img">
                    </div>
                    <div class="col-md-4"></div>
                    {{-- <div class="col-md-2">
                        <div class="footer_title">
                            Über das Unternehmen
                        </div>
                        <div class="footer_text">
                            Meditationszeit
                        </div>
                        <div class="footer_text">
                            QM-Beschwerdesoftware
                        </div>
                        <div class="footer_text">
                            Android 10 Funktionen
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-2">
                        <div class="footer_title">
                            Entwickler News
                        </div>
                        <div class="footer_text">
                            Markt-Trends
                        </div>
                        <div class="footer_text">
                            iPhone, Apple, iOS
                        </div>
                        <div class="footer_text">
                            Google & Android
                        </div>
                        <div class="footer_text">
                            HTML5 & Web App
                        </div>
                    </div>--}}
                    <div class="col-md-3">
                        <div class="footer_title">
                          <a href = "{{route('impressum')}}">  Impressum </a>
                        </div>
                        <div class="footer_text">
                         <a href="tel:+12421421551"><i class="fas fa-phone-alt"></i> +12421421551 </a> 
                        </div>
                        <div class="footer_text">
                                <a href="mailto:direktmarketing@gmail.com">     <i class="fas fa-envelope"></i> direktmarketing@gmail.com </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        
                        <div class="footer_title">
                            Kontakt
                        </div>

                        <div class="footer_text">
                                <a href="mailto:kontakt@direktmarketing-boerse.de">  <i class="fas fa-envelope"></i> kontakt@direktmarketing-boerse.de  </a>     
                        </div>                   
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="home_bottom">
                <div class="bottom_copyright">
                    <i class="far fa-copyright"></i>2019 App Entwickler Verzeichnis
                </div>
                <div class="bottom_terms">
                    <a href="">
                            Terms of Use
                    </a>
                    <a href="">
                            Privacy Policy
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection


@section('script')
    <script>
        $('document').ready(function() {       

            localStorage.clear(); 
            
            $('.nav-tabs-dropdown').on("click", "li:not('.active') a", function(event) {
                $(this).closest('ul').removeClass("open");
                $('.nav-tabs-dropdown li.active').removeClass('active');
                $(this).parent().addClass('active');

            });

            $('.nav-tabs-dropdown').on("click", "li.active a", function(event) {
                $(this).closest('ul').toggleClass("open");;
            });
            if($(window).width()< 768){
              $('html, body').animate({
                scrollTop: $(".home_top1_text3").offset().top
              }, 7000);
            }
            

        })
    </script>

    <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '37227e36-a5bb-4465-803b-6665f8b1cb8a', f: true }); done = true; } }; })();</script>
@endsection
   
