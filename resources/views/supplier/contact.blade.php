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
                     
                    </ul>
                </div>
            </nav>
        </div>       
    </header>

    
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h3 class="text-center">
                    Angebote anfragen
                </h3>
                <form action="" method="post" class="contact_form">
                    @csrf                      
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <input class="form-control name" type="text" name="name" placeholder="Name">
                        <span class="invalid-feedback name_error"><strong></strong></span>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input class="form-control email" type="text" name="email" placeholder="Email">
                        <span class="invalid-feedback email_error"><strong></strong></span>
                    </div>                                     
    
                    <div class="form-group">
                        <label class="control-label">Telefonnummer</label>
                        <input class="form-control phone" type="tel" name="phone" placeholder="Telefonnummer">
                        <span class="invalid-feedback phone_error"><strong></strong></span>
                    </div>

                    <div class="form-group">
                        <label for="proposal" class="control-label">Vorschlag</label>
                        <textarea name="proposal" rows="10" class="form-control proposal" placeholder="Geben Sie hier eine Vorschlag ein" required></textarea>
                        <span class="invalid-feedback proposal_error"><strong></strong></span>
                    </div>                                                                                
                </form>

                <div class="text-center">                      
                        <button class="btn submit-btn btn-primary"> einreichen </button>
                </div>  
            </div>
            <div class="col-md-3"></div>
        </div>
    </section>

@endsection


@section('script')
    <script>      

        $(document).ready(function(){

            $('.submit-btn').click(function(e){
                e.preventDefault();     
                $("#ajax-loading").fadeIn();            
                $.ajax({
                    url:"{{route('supplier.contactSend')}}",
                    type: 'post',
                    dataType: 'json',
                    data: $('.contact_form').serialize(),
                    success : function(response) {
                        $("#ajax-loading").fadeOut();
                        if(response == 'success') {
                            $("#ajax-loading").fadeOut();
                            alert("EMail Bestätigung erfolgreich!");                             
                            window.location.href='/';
                        } else {                           
                             let messages = response.data;
                             if(messages.name) {
                                $('.contact_form .name_error strong').text(messages.name[0]);
                                $('.contact_form .name_error').show();
                                $('.contact_form .name_error').focus();
                            }

                            if(messages.email) {
                                $('.contact_form .email_error strong').text(messages.email[0]);
                                $('.contact_form .email_error').show();
                                $('.contact_form .email_error').focus();
                            }

                            if(messages.phone) {
                                $('.contact_form .phone_error strong').text(messages.phone[0]);
                                $('.contact_form .phone_error').show();
                                $('.contact_form .phone_error').focus();
                            }

                            if(messages.proposal) {
                                $('.contact_form .proposal_error strong').text(messages.proposal[0]);
                                $('.contact_form .proposal_error').show();
                                $('.contact_form .proposal_error').focus();
                            }            
                                  
                        }
                    },
                    error: function(response) {
                        $("#ajax-loading").fadeOut();
                        console.log(response.responseJSON);
                        if(response.responseJSON.message == 'The given data was invalid.'){                            
                            let messages = response.responseJSON.errors;
                            if(messages.name) {
                                $('.contact_form .name_error strong').text(messages.name[0]);
                                $('.contact_form .name_error').show();
                                $('.contact_form .name_error').focus();
                            }

                            if(messages.email) {
                                $('.contact_form .email_error strong').text(messages.email[0]);
                                $('.contact_form .email_error').show();
                                $('.contact_form .email_error').focus();
                            }

                            if(messages.phone) {
                                $('.contact_form .phone_error strong').text(messages.phone[0]);
                                $('.contact_form .phone_error').show();
                                $('.contact_form .phone_error').focus();
                            }

                            if(messages.proposal) {
                                $('.contact_form .proposal_error strong').text(messages.proposal[0]);
                                $('.contact_form .proposal_error').show();
                                $('.contact_form .proposal_error').focus();
                            }                           
                            
                        } else {
                            alert("EMail Bestätigung fehlgeschlagen! Überprüfen Sie bitte Ihre EMail.");
                        }                   
                    }
                });
            })

        })

    </script>
@endsection