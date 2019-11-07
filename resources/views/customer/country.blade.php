@extends('layouts.customer')

@section('content')
    <header style=" background-color: #ffffff; border-bottom: solid 1px #30303050;">
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
            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar" role="progressbar" style="width:30%">
            </div>
        </div>
    </header>
    <section class="sixth_body">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="seventh_box">
                        <div class="third_title1">
                            <span>Schritt 2</span> von 6
                        </div>
                        <div class="target_group">
                            <div class="second_option_title">
                                In welchem Land möchten Sie Ihre Kampagne starten?
                            </div>
                            <div class="seventh_text">
                                Bitte wählen Sie Ihr Zielland. Wir informieren nur Anbieter über Ihre Anfrage - wenn diese, Dienstleistungen im jeweiligen Land anbieten.Diese Selektion unterstützt Sie als Kunde - aber auch die Dienstleister.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="seventh_item" id="seventh_item1">
                                <div class="checkbox1">

                                    <label>
                                        <input type="checkbox" value="">
                                        <span class="cr"><i class="fas fa-check"></i></span>                                        
                                    </label>

                                    <div class="text-center">
                                        <img src="{{ asset('view/img/Germany.png')}}" alt="" class="country_flag">
                                    </div>

                                    <div class="seven_item_text text-center">
                                        Deutschland
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="seventh_item" id="seventh_item2">
                                <div class="checkbox1">

                                    <label>
                                        <input type="checkbox" value="">
                                        <span class="cr"><i class="fas fa-check"></i></span>                                        
                                    </label>

                                    <div class="text-center">
                                        <img src="{{ asset('view/img/Austria.png')}}" alt="" class="country_flag">
                                    </div>

                                    <div class="seven_item_text text-center">
                                        Österreich
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="seventh_item" id="seventh_item3">
                                <div class="checkbox1">

                                    <label>
                                        <input type="checkbox" value="">
                                        <span class="cr"><i class="fas fa-check"></i></span>                                        
                                    </label>

                                    <div class="text-center">
                                        <img src="{{ asset('view/img/Switzerland.png')}}" alt="" class="country_flag">
                                    </div>

                                    <div class="seven_item_text text-center">
                                        Switzerland
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="seven_btns">
                        <a href="{{route('customer.category')}}"> <button class="btn prev_btn"> <i class="fas fa-arrow-left"></i>Zurück</button></a>
                        <a href="{{route('customer.supplier')}}"> <button class="btn next_btn btn-primary"> Weiter <i class="fas fa-arrow-right"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function() {

            let formdata = JSON.parse(localStorage.getItem('formdata'));

            if(typeof(formdata.germany) != "undefined"){
                if(formdata.germany == '1'){    
                    $('#seventh_item1 .checkbox1 label input[type="checkbox"]').prop('checked', 'true');          
                    $('#seventh_item1').css('border-color', '#0289ff');
                    $('#seventh_item1 .checkbox1 label .cr').css('border-color', '#0289ff');
                }

                if(formdata.austria == '1'){    
                    $('#seventh_item2 .checkbox1 label input[type="checkbox"]').prop('checked', 'true');          
                    $('#seventh_item2').css('border-color', '#0289ff');
                    $('#seventh_item2 .checkbox1 label .cr').css('border-color', '#0289ff');
                }

                if(formdata.switzerland == '1'){    
                    $('#seventh_item3 .checkbox1 label input[type="checkbox"]').prop('checked', 'true');          
                    $('#seventh_item3').css('border-color', '#0289ff');
                    $('#seventh_item3 .checkbox1 label .cr').css('border-color', '#0289ff');
                }    
            } else {
                formdata.germany = 0;
                formdata.austria = 0;
                formdata.switzerland = 0;
            }

            
   
            $('#seventh_item1 .checkbox1 label input[type="checkbox"]').click(function() {
                if (($('#seventh_item1 .checkbox1 label input[type="checkbox"]').prop('checked'))) {

                    $('#seventh_item1').css('border-color', '#0289ff');
                    $('#seventh_item1 .checkbox1 label .cr').css('border-color', '#0289ff');

                    formdata.germany = 1;
                    localStorage.setItem('formdata', JSON.stringify(formdata));

                } else {

                    $('#seventh_item1').css('border-color', '#30303050');
                    $('#seventh_item1 .checkbox1 label .cr').css('border-color', '#30303050');

                    formdata.germany = 0;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                }

            })

            $('#seventh_item2 .checkbox1 label input[type="checkbox"]').click(function() {
                if (($('#seventh_item2 .checkbox1 label input[type="checkbox"]').prop('checked'))) {

                    $('#seventh_item2').css('border-color', '#0289ff');
                    $('#seventh_item2 .checkbox1 label .cr').css('border-color', '#0289ff');

                    formdata.austria = 1;
                    localStorage.setItem('formdata', JSON.stringify(formdata));

                } else {

                    $('#seventh_item2').css('border-color', '#30303050');
                    $('#seventh_item2 .checkbox1 label .cr').css('border-color', '#30303050');

                    formdata.austria = 0;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                }

            })

            $('#seventh_item3 .checkbox1 label input[type="checkbox"]').click(function() {
                if (($('#seventh_item3 .checkbox1 label input[type="checkbox"]').prop('checked'))) {

                    $('#seventh_item3').css('border-color', '#0289ff');
                    $('#seventh_item3 .checkbox1 label .cr').css('border-color', '#0289ff');

                    formdata.switzerland = 1;
                    localStorage.setItem('formdata', JSON.stringify(formdata));

                } else {

                    $('#seventh_item3').css('border-color', '#30303050');
                    $('#seventh_item3 .checkbox1 label .cr').css('border-color', '#30303050');

                    formdata.switzerland = 0;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                }
            })

            $('#seventh_item1').click(function(){
                if (($('#seventh_item1 .checkbox1 label input[type="checkbox"]').prop('checked'))) {                    
                    $('#seventh_item1').css('border-color', '#30303050');
                    $('#seventh_item1 .checkbox1 label .cr').css('border-color', '#30303050');                             
                    formdata.germany = 0;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item1 .checkbox1 label input[type="checkbox"]').prop("checked", false);
                    $('#seventh_item1 .checkbox1 label .cr .fas').css('opacity', '0');                      
                }   
                else{                                              
                    $('#seventh_item1').css('border-color', '#0289ff');
                    $('#seventh_item1 .checkbox1 label .cr').css('border-color', '#0289ff');                   
                    formdata.germany = 1;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item1 .checkbox1 label input[type="checkbox"]').prop("checked", true);
                    $('#seventh_item1 .checkbox1 label .cr .fas').css('opacity', '1');
                }
            })

            $('#seventh_item2').click(function(){
                if (($('#seventh_item2 .checkbox1 label input[type="checkbox"]').prop('checked'))) {                    
                    $('#seventh_item2').css('border-color', '#30303050');
                    $('#seventh_item2 .checkbox1 label .cr').css('border-color', '#30303050');                             
                    formdata.austria = 0;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item2 .checkbox1 label input[type="checkbox"]').prop("checked", false);
                    $('#seventh_item2 .checkbox1 label .cr .fas').css('opacity', '0');                      
                }   
                else{                                              
                    $('#seventh_item2').css('border-color', '#0289ff');
                    $('#seventh_item2 .checkbox1 label .cr').css('border-color', '#0289ff');                   
                    formdata.austria = 1;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item2 .checkbox1 label input[type="checkbox"]').prop("checked", true);
                    $('#seventh_item2 .checkbox1 label .cr .fas').css('opacity', '1');
                }
            })

            $('#seventh_item3').click(function(){
                if (($('#seventh_item3 .checkbox1 label input[type="checkbox"]').prop('checked'))) {                    
                    $('#seventh_item3').css('border-color', '#30303050');
                    $('#seventh_item3 .checkbox1 label .cr').css('border-color', '#30303050');                             
                    formdata.switzerland = 0;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item3 .checkbox1 label input[type="checkbox"]').prop("checked", false);
                    $('#seventh_item3 .checkbox1 label .cr .fas').css('opacity', '0');                      
                }   
                else{                                              
                    $('#seventh_item3').css('border-color', '#0289ff');
                    $('#seventh_item3 .checkbox1 label .cr').css('border-color', '#0289ff');                   
                    formdata.switzerland = 1;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item3 .checkbox1 label input[type="checkbox"]').prop("checked", true);
                    $('#seventh_item3 .checkbox1 label .cr .fas').css('opacity', '1');
                }
            })
            
            localStorage.setItem('formdata', JSON.stringify(formdata));
            
        })
    </script>
@endsection
