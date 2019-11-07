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
            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar" role="progressbar" style="width:60%">
            </div>
        </div>
    </header>

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="second_box">
                        <div class="third_title1">
                            <span>Schritt 4</span> von 6
                        </div>
                        <div class="target_group">
                            <div class="second_option_title">
                                Wie lautet Ihr Projekt?
                            </div>
                            <div class="seventh_text py-2">
                                Geben Sie Ihrem Projekt einen schlagkräftigen Namen. Dies erhöht die Anzahl der Angebote, die Sie von den Dienstleistern erhalten.
                            </div>
                            <input class="form-control title" type="text" name="title" placeholder=" " required>
                            <span class="invalid-feedback title_error"> Sie mussen den Titel eingeben.<strong></strong></span>
                        </div>
                        <div class="target_group">
                            <div class="second_option_title">
                                Beschreiben Sie Ihre Projekt und Ihre Zielgruppe
                            </div>
                             <div class="seventh_text py-2">
                                Je detaillierter Sie Ihre Anfrage beschreiben, desto günstiger sind in der Regel die Angebote. Beschreiben Sie Ihre Zielgruppe - bei Privatpersonen in der Regel Region, Alter, Geschlecht und Kaufkraft oder andere soziodemographische Informationen. Bei Unternehmen wird die Zielgruppe in der Regel durch Branche, Region, Umsatzgrösse oder Mitarbeiterzahl beschrieben. 
                            </div>
                            <textarea name="" rows="15" class="form-control target_group_desc" placeholder="" required></textarea>
                            <span class="invalid-feedback description_error"> Sie mussen den Beschreibung eingeben.  <strong></strong></span>
                        </div>
                        <div class="third_buttons">
                            <a href="{{route('customer.supplier')}}"> <button class="btn prev_btn"> <i class="fas fa-arrow-left"></i>Zurück</button></a>
                            <a href=""> <button class="btn next_btn1 btn-primary"> Weiter <i class="fas fa-arrow-right"></i></button></a>
                        </div>
{{-- {{route('customer.register')}} --}}
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function(){

            let formdata = JSON.parse(localStorage.getItem('formdata'));

            if(typeof(formdata.target_group_desc) != "undefined"){
                $('.target_group_desc').val(formdata.target_group_desc);
            } else {
                formdata.target_group_desc = '';
            } 

            if(typeof(formdata.title) != "undefined"){
                $('.title').val(formdata.title);
            } else {
                formdata.title = '';
            }        

            $('.next_btn1').click(function(e){
                e.preventDefault();
                if($('.title').val() ==''){                   

                   $('.title_error').css('display', 'block');
                }
                
                else if($('.target_group_desc').val() == ''){
                   
                    $('.description_error').css('display', 'block');
                }
                else{                
                    formdata.title = $('.title').val();               
                    formdata.target_group_desc = $('.target_group_desc').val();
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    window.location.href = "/customer_register";
                }                           
            })
            localStorage.setItem('formdata', JSON.stringify(formdata));
        })
    </script>
@endsection