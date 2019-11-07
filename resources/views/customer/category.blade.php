@extends('layouts.customer')

@section('content')
    <header style=" background-color: #ffffff; border-bottom: solid 1px #30303050;"><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
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
            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar" role="progressbar" style="width:15%">
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
                            <span> Schritt 1 </span> von 6
                        </div>
                        <div class="target_group">
                            <div class="second_option_title">
                                Was für ein Projekt planen Sie ?
                            </div>
                            <div class="seventh_text">
                                Bitte wählen Sie aus, welche Art von Projekt Sie ausschreiben wollen:
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
                                        <img src="{{ asset('view/img/seven_icon1.png')}}" alt="">
                                    </div>

                                    <div class="seven_item_text text-center">
                                        E-Mail Marketing
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
                                        <img src="{{ asset('view/img/seven_icon2.png')}}" alt="">
                                    </div>

                                    <div class="seven_item_text text-center">
                                        Callcenter Aktion
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
                                        <img src="{{ asset('view/img/seven_icon3.png')}}" alt="">
                                    </div>

                                    <div class="seven_item_text text-center">
                                        Postalische Adressen
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="seven_btns">
                        <a href="{{route('/')}}"> <button class="btn prev_btn"> <i class="fas fa-arrow-left"></i>Zurück</button></a>
                        <a href="{{route('customer.country')}}"> <button class="btn next_btn btn-primary"> Weiter <i class="fas fa-arrow-right"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
<script>
        $(document).ready(function() {    

            let formdata = {
                email_marketing : 0,
                callcenter : 0,
                postal_Address : 0
            }

            if(localStorage.getItem('formdata')){
                formdata = JSON.parse(localStorage.getItem('formdata'));

                if(formdata.email_marketing == '1'){    
                    $('#seventh_item1 .checkbox1 label input[type="checkbox"]').prop('checked', 'true');          
                    $('#seventh_item1').css('border-color', '#0289ff');
                    $('#seventh_item1 .checkbox1 label .cr').css('border-color', '#0289ff');
                }

                if(formdata.callcenter == '1'){    
                    $('#seventh_item2 .checkbox1 label input[type="checkbox"]').prop('checked', 'true');          
                    $('#seventh_item2').css('border-color', '#0289ff');
                    $('#seventh_item2 .checkbox1 label .cr').css('border-color', '#0289ff');
                }

                if(formdata.postal_Address == '1'){    
                    $('#seventh_item3 .checkbox1 label input[type="checkbox"]').prop('checked', 'true');          
                    $('#seventh_item3').css('border-color', '#0289ff');
                    $('#seventh_item3 .checkbox1 label .cr').css('border-color', '#0289ff');
                }
            }           


            $('#seventh_item1 .checkbox1 label input[type="checkbox"]').click(function()            
            {
                if (($('#seventh_item1 .checkbox1 label input[type="checkbox"]').prop('checked'))) {
                    $('#seventh_item1').css('border-color', '#0289ff');
                    $('#seventh_item1 .checkbox1 label .cr').css('border-color', '#0289ff');
                    formdata.email_marketing = 1;
                    localStorage.setItem('formdata', JSON.stringify(formdata));

                }                
                else {
                    $('#seventh_item1').css('border-color', '#30303050');
                    $('#seventh_item1 .checkbox1 label .cr').css('border-color', '#30303050');
                             
                    formdata.email_marketing = 0;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                }          
            })            

            $('#seventh_item2 .checkbox1 label input[type="checkbox"]').click(function() {
                if (($('#seventh_item2 .checkbox1 label input[type="checkbox"]').prop('checked'))) {
                    $('#seventh_item2').css('border-color', '#0289ff');
                    $('#seventh_item2 .checkbox1 label .cr').css('border-color', '#0289ff');
                    formdata.callcenter = 1;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                } else {
                    $('#seventh_item2').css('border-color', '#30303050');
                    $('#seventh_item2 .checkbox1 label .cr').css('border-color', '#30303050');
                    formdata.callcenter = 0;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                }
            })

            $('#seventh_item3 .checkbox1 label input[type="checkbox"]').click(function() {
                if (($('#seventh_item3 .checkbox1 label input[type="checkbox"]').prop('checked'))) {
                    $('#seventh_item3').css('border-color', '#0289ff');
                    $('#seventh_item3 .checkbox1 label .cr').css('border-color', '#0289ff');
                    formdata.postal_Address = 1;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                } else {
                    $('#seventh_item3').css('border-color', '#30303050');
                    $('#seventh_item3 .checkbox1 label .cr').css('border-color', '#30303050');
                    formdata.postal_Address = 0;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                }
            })

            $('#seventh_item1').click(function(){
                if (($('#seventh_item1 .checkbox1 label input[type="checkbox"]').prop('checked'))) {                    
                    $('#seventh_item1').css('border-color', '#30303050');
                    $('#seventh_item1 .checkbox1 label .cr').css('border-color', '#30303050');                             
                    formdata.email_marketing = 0;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item1 .checkbox1 label input[type="checkbox"]').prop("checked", false);
                    $('#seventh_item1 .checkbox1 label .cr .fas').css('opacity', '0');                      
                }   
                else{                                              
                    $('#seventh_item1').css('border-color', '#0289ff');
                    $('#seventh_item1 .checkbox1 label .cr').css('border-color', '#0289ff');                   
                    formdata.email_marketing = 1;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item1 .checkbox1 label input[type="checkbox"]').prop("checked", true);
                    $('#seventh_item1 .checkbox1 label .cr .fas').css('opacity', '1');
                }
            })

            $('#seventh_item2').click(function(){
                if (($('#seventh_item2 .checkbox1 label input[type="checkbox"]').prop('checked'))) {                    
                    $('#seventh_item2').css('border-color', '#30303050');
                    $('#seventh_item2 .checkbox1 label .cr').css('border-color', '#30303050');                             
                    formdata.callcenter = 0;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item2 .checkbox1 label input[type="checkbox"]').prop("checked", false);
                    $('#seventh_item2 .checkbox1 label .cr .fas').css('opacity', '0');                      
                }   
                else{                                              
                    $('#seventh_item2').css('border-color', '#0289ff');
                    $('#seventh_item2 .checkbox1 label .cr').css('border-color', '#0289ff');                   
                    formdata.callcenter = 1;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item2 .checkbox1 label input[type="checkbox"]').prop("checked", true);
                    $('#seventh_item2 .checkbox1 label .cr .fas').css('opacity', '1');
                }
            })

            $('#seventh_item3').click(function(){
                if (($('#seventh_item3 .checkbox1 label input[type="checkbox"]').prop('checked'))) {                    
                    $('#seventh_item3').css('border-color', '#30303050');
                    $('#seventh_item3 .checkbox1 label .cr').css('border-color', '#30303050');                             
                    formdata.postal_Address = 0;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item3 .checkbox1 label input[type="checkbox"]').prop("checked", false);
                    $('#seventh_item3 .checkbox1 label .cr .fas').css('opacity', '0');                      
                }   
                else{                                              
                    $('#seventh_item3').css('border-color', '#0289ff');
                    $('#seventh_item3 .checkbox1 label .cr').css('border-color', '#0289ff');                   
                    formdata.postal_Address = 1;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item3 .checkbox1 label input[type="checkbox"]').prop("checked", true);
                    $('#seventh_item3 .checkbox1 label .cr .fas').css('opacity', '1');
                }
            })

          

            localStorage.setItem('formdata', JSON.stringify(formdata));
            
        })
    </script>
@endsection
