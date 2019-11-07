@extends('layouts.customer')

@section('content')
    <header style=" background-color: #ffffff; border-bottom: solid 1px #30303050;"><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
        <div class="top-header container">

            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand"  href="{{route('/')}}">
                    <img src="{{ asset('view/img/logo.png')}}" alt="">
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                       
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="progress">
            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar" role="progressbar" style="width:95%">
            </div>
        </div>
    </header>

    <section class="container">
        <div class="row">
            <div class="splash">
                <div class="splash1">
                    <div class="splash_icon">
                        <i class="fas fa-search"></i>
                    </div>                  
                    
                    <div class="splash_text">
                        Wir ermitteln passende Dienstleister...
                    </div>
                </div>

                <div class="splash2">
                    <div class="splash_icon">
                        <i class="far fa-envelope"></i>
                    </div>                  
                    
                    <div class="splash_text">
                       16 passende Dienstleister werden aktuell kontaktiert und um die Abgabe eines Angebots gebeten.
                    </div>
                </div>

                <div class="splash3">
                    <div class="splash_icon ">
                        <i class="far fa-thumbs-up"></i>
                    </div>                  
                    
                    <div class="splash_text">
                       Abgeschlossen! Sie werden durchschnittlich vom 5 Unternehmen ein Angebot innerhalb der nächsten 72 Stunden erhalten!
                    </div>
                </div>

                <div class="verify_btn1">
                    <a href="{{route('customer.customerVerify')}}">   <button class="btn btn-primary">E-Mail bestätigen</button> </a> 
                </div>

            </div>
        </div>
    </section>


@endsection

@section('script')
    <script>
       
        $(document).ready(function(){        
        
            $('.splash1').fadeIn(3000).removeClass('hidden');
            $('.splash1').fadeOut(3000).addClass('hidden');
            
            $('.splash2').delay(6000).fadeIn(5000).removeClass('hidden');
            $('.splash2').fadeOut(5000).addClass('hidden');

            $('.splash3').delay(16000).fadeIn(5000).removeClass('hidden');
            $('.splash3').fadeOut(5000).addClass('hidden');

            $('.verify_btn1').delay(26000).fadeIn(500).removeClass('hidden');
           
            
        })
    </script>
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-965795558"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'AW-965795558');
    </script>
@endsection