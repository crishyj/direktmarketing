@extends('layouts.customer')

@section('content')
    <header style=" background-color: #ffffff; border-bottom: solid 1px #30303050;"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar" role="progressbar" style="width:75%">
            </div>
        </div>
    </header>

    <section class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                
                
                    <form action="" method="post" class="register_form">
                         <div class="third_title1 ">
                            <span>Schritt 5 </span> von 6
                        </div>
                        <div class="seventh_text py-2">
                            Wir sind im vorletzten Schritt angekommen. Damit Sie die Angebote erhalten, benötigen wir noch ein paar Daten von Ihnen. Die Ausschreibung ist 100% kostenlos und ohne einer Verpflichtung. Bitte geben Sie auch das Budget an - das Budget wird nicht an die Dienstleister weiter kommuniziert. Wir eliminieren Angebote automatisch für Sie die Ihr Budget übersteigen. 
                        </div>
                        @csrf                       

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
                            <a href="{{route('customer.description')}}"> <button class="btn prev_btn"> <i class="fas fa-arrow-left"></i>Zurück</button></a>
                            <button class="btn regist-btn btn-primary"> Jetzt kostenlos ausschreiben </button>
                    </div>  
            </div>

            <div class="col-md-3"></div>
        </div>
    </section>


@endsection

@section('script')
<script>
       
        $(document).ready(function(){          
        
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
                            // alert('Ihre Ausschreibung wurde erfolgreich erstellt.');
                            // window.location.href='/customerVerify';
                            window.location.href='/splash';
                        } else {
                            let messages = response.data;
                            if(messages.Name) {
                                // $('.register_form .Name_error strong').text(messages.Name[0]);
                                $('.register_form .Name_error').show();
                                $('.register_form .name').focus();
                            }
                            if(messages.email) {
                                // $('.register_form .email_error strong').text(messages.email[0]);
                                $('.register_form .email_error').show();
                                $('.register_form .email_error').focus();
                            }
                            if(messages.company){
                                // $('.register_form .company_error strong').text(messages.company[0]);
                                $('.register_form .company_error').show();
                                $('.register_form .company_error').focus();
                            }
                            if(messages.Telefonnummer){
                                // $('.register_form .Telefonnummer_error strong').text(messages.phone[0]);
                                $('.register_form .Telefonnummer_error').show();
                                $('.register_form .Telefonnummer_error').focus();
                            }
                            if(messages.budget){
                                $('.register_form .budget_error strong').text(messages.budget[0]);
                                $('.register_form .budget_error').show();
                                $('.register_form .budget_error').focus();
                            }               
                        }
                    },
                    error: function(response) {
                        console.log(response.responseJSON);
                        $("#ajax-loading").fadeOut();
                        if(response.responseJSON.message == 'The given data was invalid.'){

                            let messages = response.responseJSON.errors;
                           
                            if(messages.Name) {
                                // $('.register_form .Name_error strong').text(messages.Name[0]);
                                $('.register_form .Name_error').show();
                                $('.register_form .Name').focus();
                            }
                            if(messages.email) {
                                // $('.register_form .email_error strong').text(messages.email[0]);
                                $('.register_form .email_error').show();
                                $('.register_form .email_error').focus();
                            }
                            if(messages.company){
                                // $('.register_form .company_error strong').text(messages.company[0]);
                                $('.register_form .company_error').show();
                                $('.register_form .company_error').focus();
                            }
                            if(messages.Telefonnummer){
                                // $('.register_form .Telefonnummer_error strong').text(messages.Telefonnummer[0]);
                                $('.register_form .Telefonnummer_error').show();
                                $('.register_form .Telefonnummer_error').focus();
                            }
                            if(messages.budget){
                                $('.register_form .budget_error strong').text(messages.budget[0]);
                                $('.register_form .budget_error').show();
                                $('.register_form .budget_error').focus();
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