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
            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar" role="progressbar" style="width:100%">
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
                </div>
            </div>
        </div>
    </section>

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
                            <div class="seventh_item" id="seventh_item4">
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
                            <div class="seventh_item" id="seventh_item5">
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
                            <div class="seventh_item" id="seventh_item6">
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
                </div>
            </div>
        </div>
    </section>

    <section class="sixth_body">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="seventh_box">
                        <div class="third_title1">
                            <span>Schritt 3</span> von 6
                        </div>
                        <div class="target_group">
                            <div class="second_option_title">
                                Welche Zielgruppe wollen Sie erreichen ?
                            </div>
                            <div class="seventh_text">
                                An wen richtet sich Ihre Kampagne ? Wir informieren nur Anbieter über Ihre Anfrage - wenn diese, Dienstleistungen  auch an Ihre Zielgruppe anbieten. Diese Selektion unterstützt Sie als Kunde - aber auch die Dienstleister.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="seventh_item" id="seventh_item7">
                                <div class="checkbox1">

                                    <label>
                                        <input type="checkbox" value="">
                                        <span class="cr"><i class="fas fa-check"></i></span>                                        
                                    </label>

                                    <div class="text-center">
                                        <img src="{{ asset('view/img/company.jpg')}}" alt="" class="country_flag">
                                    </div>

                                    <div class="seven_item_text text-center">
                                        Unternehmen
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="seventh_item" id="seventh_item8">
                                <div class="checkbox1">

                                    <label>
                                        <input type="checkbox" value="">
                                        <span class="cr"><i class="fas fa-check"></i></span>                                        
                                    </label>

                                    <div class="text-center">
                                        <img src="{{ asset('view/img/persion.jpg')}}" alt="" class="country_flag">
                                    </div>

                                    <div class="seven_item_text text-center">
                                        Privatpersonen
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="second_box1 mt-5">
                        <div class="third_title1">
                            <span>Schritt 4</span> von 6
                        </div>
                        <form action="" method="post" class="register_form1">
                            @csrf   

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
                                <textarea name="target_group_desc" rows="15" class="form-control target_group_desc" placeholder="" required></textarea>
                                <span class="invalid-feedback target_group_desc_error"> Sie mussen den Beschreibung eingeben.  <strong></strong></span>
                            </div>
                       
                            <div class="third_title1 mt-5">
                                <span>Schritt 5 </span> von 6
                            </div>

                            <div class="seventh_text py-2">
                                Wir sind im vorletzten Schritt angekommen. Damit Sie die Angebote erhalten, benötigen wir noch ein paar Daten von Ihnen. Die Ausschreibung ist 100% kostenlos und ohne einer Verpflichtung. Bitte geben Sie auch das Budget an - das Budget wird nicht an die Dienstleister weiter kommuniziert. Wir eliminieren Angebote automatisch für Sie die Ihr Budget übersteigen. 
                            </div>
                                           

                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input class="form-control Name" type="text" name="Name" placeholder="Name">
                                <span class="invalid-feedback Name_error"><strong> Der Name ist notwendig.</strong></span>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input class="form-control email" type="text" name="email" placeholder="Email">
                                <span class="invalid-feedback email_error"><strong>Die E-Mail ist notwendig.</strong></span>
                            </div>                                     
            
                            <div class="form-group">
                                <label class="control-label">Telefonnummer</label>
                                <input class="form-control Telefonnummer" type="tel" name="Telefonnummer" placeholder="Telefonnummer">
                                <span class="invalid-feedback Telefonnummer_error"><strong> Die Telefonnummer ist notwendig.</strong></span>
                            </div>
            
                            <div class="form-group">
                                <label class="control-label">Unternehmen</label>
                                <input class="form-control company" type="text" name="company" placeholder="Unternehmen">
                                <span class="invalid-feedback company_error"><strong>Das Unternehmen ist notwendig.</strong></span>
                            </div>
            
                            <div class="form-group">
                                <label class="control-label">Budget</label>
                                <input class="form-control budget" type="number" name="budget" placeholder="Budget (wird nicht an die Dienstleister kommuniziert)">
                                <span class="invalid-feedback budget_error"><strong></strong></span>
                            </div>                                                         
                        
                    </form>
                    <div class="third_buttons">
                        <a href="{{route('/')}}"> <button class="btn prev_btn"> <i class="fas fa-arrow-left"></i>Zurück</button></a>
                        <button class="btn regist-btn btn-primary"> Jetzt kostenlos ausschreiben </button>
                    </div>                    
                    </div>
                </div>
                <div class="col-md-2"></div>
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
                postal_Address : 0,
                germany: 0,
                austria: 0,
                switzerland: 0,
                supplier_company: 0,
                supplier_personal: 0
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

                if(formdata.germany == '1'){    
                    $('#seventh_item3 .checkbox1 label input[type="checkbox"]').prop('checked', 'true');          
                    $('#seventh_item3').css('border-color', '#0289ff');
                    $('#seventh_item3 .checkbox1 label .cr').css('border-color', '#0289ff');
                }


                if(formdata.austria == '1'){    
                    $('#seventh_item3 .checkbox1 label input[type="checkbox"]').prop('checked', 'true');          
                    $('#seventh_item3').css('border-color', '#0289ff');
                    $('#seventh_item3 .checkbox1 label .cr').css('border-color', '#0289ff');
                }


                if(formdata.switzerland == '1'){    
                    $('#seventh_item3 .checkbox1 label input[type="checkbox"]').prop('checked', 'true');          
                    $('#seventh_item3').css('border-color', '#0289ff');
                    $('#seventh_item3 .checkbox1 label .cr').css('border-color', '#0289ff');
                }

                if(formdata.supplier_company == '1'){    
                    $('#seventh_item3 .checkbox1 label input[type="checkbox"]').prop('checked', 'true');          
                    $('#seventh_item3').css('border-color', '#0289ff');
                    $('#seventh_item3 .checkbox1 label .cr').css('border-color', '#0289ff');
                }

                if(formdata.supplier_personal == '1'){    
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
            $('#seventh_item4').click(function(){
                if (($('#seventh_item4 .checkbox1 label input[type="checkbox"]').prop('checked'))) {                    
                    $('#seventh_item4').css('border-color', '#30303050');
                    $('#seventh_item4 .checkbox1 label .cr').css('border-color', '#30303050');                             
                    formdata.germany = 0;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item4 .checkbox1 label input[type="checkbox"]').prop("checked", false);
                    $('#seventh_item4 .checkbox1 label .cr .fas').css('opacity', '0');                      
                }   
                else{                                              
                    $('#seventh_item4').css('border-color', '#0289ff');
                    $('#seventh_item4 .checkbox1 label .cr').css('border-color', '#0289ff');                   
                    formdata.germany = 1;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item4 .checkbox1 label input[type="checkbox"]').prop("checked", true);
                    $('#seventh_item4 .checkbox1 label .cr .fas').css('opacity', '1');
                }
            })
            $('#seventh_item5').click(function(){
                if (($('#seventh_item5 .checkbox1 label input[type="checkbox"]').prop('checked'))) {                    
                    $('#seventh_item5').css('border-color', '#30303050');
                    $('#seventh_item5 .checkbox1 label .cr').css('border-color', '#30303050');                             
                    formdata.austria = 0;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item5 .checkbox1 label input[type="checkbox"]').prop("checked", false);
                    $('#seventh_item5 .checkbox1 label .cr .fas').css('opacity', '0');                      
                }   
                else{                                              
                    $('#seventh_item5').css('border-color', '#0289ff');
                    $('#seventh_item5 .checkbox1 label .cr').css('border-color', '#0289ff');                   
                    formdata.austria = 1;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item5 .checkbox1 label input[type="checkbox"]').prop("checked", true);
                    $('#seventh_item5 .checkbox1 label .cr .fas').css('opacity', '1');
                }
            })
            $('#seventh_item6').click(function(){
                if (($('#seventh_item6 .checkbox1 label input[type="checkbox"]').prop('checked'))) {                    
                    $('#seventh_item6').css('border-color', '#30303050');
                    $('#seventh_item6 .checkbox1 label .cr').css('border-color', '#30303050');                             
                    formdata.switzerland = 0;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item6 .checkbox1 label input[type="checkbox"]').prop("checked", false);
                    $('#seventh_item6 .checkbox1 label .cr .fas').css('opacity', '0');                      
                }   
                else{                                              
                    $('#seventh_item6').css('border-color', '#0289ff');
                    $('#seventh_item6 .checkbox1 label .cr').css('border-color', '#0289ff');                   
                    formdata.switzerland = 1;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item6 .checkbox1 label input[type="checkbox"]').prop("checked", true);
                    $('#seventh_item6 .checkbox1 label .cr .fas').css('opacity', '1');
                }
            })
            $('#seventh_item7').click(function(){
                if (($('#seventh_item7 .checkbox1 label input[type="checkbox"]').prop('checked'))) {                    
                    $('#seventh_item7').css('border-color', '#30303050');
                    $('#seventh_item7 .checkbox1 label .cr').css('border-color', '#30303050');                             
                    formdata.supplier_company = 0;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item7 .checkbox1 label input[type="checkbox"]').prop("checked", false);
                    $('#seventh_item7 .checkbox1 label .cr .fas').css('opacity', '0');                      
                }   
                else{                                              
                    $('#seventh_item7').css('border-color', '#0289ff');
                    $('#seventh_item7 .checkbox1 label .cr').css('border-color', '#0289ff');                   
                    formdata.supplier_company = 1;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item7 .checkbox1 label input[type="checkbox"]').prop("checked", true);
                    $('#seventh_item7 .checkbox1 label .cr .fas').css('opacity', '1');
                }
            })
            $('#seventh_item8').click(function(){
                if (($('#seventh_item8 .checkbox1 label input[type="checkbox"]').prop('checked'))) {                    
                    $('#seventh_item8').css('border-color', '#30303050');
                    $('#seventh_item8 .checkbox1 label .cr').css('border-color', '#30303050');                             
                    formdata.supplier_personal = 0;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item8 .checkbox1 label input[type="checkbox"]').prop("checked", false);
                    $('#seventh_item8 .checkbox1 label .cr .fas').css('opacity', '0');                      
                }   
                else{                                              
                    $('#seventh_item8').css('border-color', '#0289ff');
                    $('#seventh_item8 .checkbox1 label .cr').css('border-color', '#0289ff');                   
                    formdata.supplier_personal = 1;
                    localStorage.setItem('formdata', JSON.stringify(formdata));
                    $('#seventh_item8 .checkbox1 label input[type="checkbox"]').prop("checked", true);
                    $('#seventh_item8 .checkbox1 label .cr .fas').css('opacity', '1');
                }
            })         

            localStorage.setItem('formdata', JSON.stringify(formdata));

            $('.regist-btn').click(function(e){
                e.preventDefault();
                let formdata = JSON.parse(localStorage.getItem('formdata'));
                let budget = 0;
                if( $('.budget').val() == '')
                {
                    budget = 0;
                }
                else{
                    budget = $('.budget').val();
                }

                console.log(budget);
                formdata.title = $('.title').val();
                formdata.target_group_desc = $('.target_group_desc').val();
                formdata.Name = $('.Name').val();
                formdata.email = $('.email').val();
                formdata.Telefonnummer = $('.Telefonnummer').val();
                formdata.company = $('.company').val();
                formdata.budget = budget;
                localStorage.setItem('formdata', JSON.stringify(formdata));

                $("#ajax-loading").fadeIn(); 

                $.ajax({
                    url:"{{route('customer.create')}}",
                    type: 'post',
                    dataType: 'json',
                    data: formdata,
                    success : function(response) {
                        $("#ajax-loading").fadeOut();
                        if(response == 'success') {                           
                            window.location.href='/splash';
                        } else {
                            let messages = response.data;
                            if(messages.title) {                              
                                $('.register_form1 .title_error').show();
                                $('.register_form1 .title').focus();
                            }

                            if(messages.target_group_desc) {                                
                                $('.register_form1 .target_group_desc_error').show();
                                $('.register_form1 .target_group_desc').focus();
                            }

                            if(messages.Name) {                              
                                $('.register_form1 .Name_error').show();
                                $('.register_form1 .name').focus();
                            }
                            if(messages.email) {                             
                                $('.register_form1 .email_error').show();
                                $('.register_form1 .email_error').focus();
                            }
                            if(messages.company){                               
                                $('.register_form1 .company_error').show();
                                $('.register_form1 .company_error').focus();
                            }
                            if(messages.Telefonnummer){                             
                                $('.register_form1 .Telefonnummer_error').show();
                                $('.register_form1 .Telefonnummer_error').focus();
                            }
                                           
                        }
                    },
                    error: function(response) {
                        console.log(response.responseJSON);
                        $("#ajax-loading").fadeOut();
                        if(response.responseJSON.message == 'The given data was invalid.'){

                            let messages = response.responseJSON.errors;

                            if(messages.title) {                              
                                $('.register_form1 .title_error').show();
                                $('.register_form1 .title').focus();
                            }

                            if(messages.target_group_desc) {                                
                                $('.register_form1 .target_group_desc_error').show();
                                $('.register_form1 .target_group_desc').focus();
                            }
                        
                            if(messages.Name) {                                
                                $('.register_form1 .Name_error').show();
                                $('.register_form1 .Name').focus();
                            }
                            if(messages.email) {                               
                                $('.register_form1 .email_error').show();
                                $('.register_form1 .email_error').focus();
                            }
                            if(messages.company){                                
                                $('.register_form1 .company_error').show();
                                $('.register_form1 .company_error').focus();
                            }
                            if(messages.Telefonnummer){                               
                                $('.register_form1 .Telefonnummer_error').show();
                                $('.register_form1 .Telefonnummer_error').focus();
                            }                                                   
                        } else {
                            alert("Etwas ist schief gelaufen");
                        }
                    }
                });
            })            
        })
    </script>
@endsection
