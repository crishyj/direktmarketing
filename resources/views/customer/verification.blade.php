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
            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar" role="progressbar" style="width:90%">
            </div>
        </div>
    </header>

    <section class="container mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                 <div class="third_title1 ">
                        <span>Schritt 6</span> von 6
                    </div>
                <h3 class="text-center">
                    Verifiziere deine E-Mail
                </h3>
                    <form action="" method="post" class="verify_form mt-4">
                        @csrf                      
                        
                        <div class="form-group">
                            <label class="control-label">Gib deinen Verifizierungscode ein</label>
                            <input class="form-control verify" type="text" name="verify" placeholder="Verifizierungscode">
                            <span class="invalid-feedback verify_error"><strong></strong></span>
                        </div>     
                        <div class="text-center">
                                <button class="btn btn-primary verify_btn">Jetzt bestätigen</button>                                                        
                        </div>                     
                    </form>
                  
            </div>

            <div class="col-md-3"></div>
        </div>
    </section>


@endsection

@section('script')
    <script>      

        $(document).ready(function(){

            // $('.verify_btn').click(function(e){
            $('.verify_form').submit(function(e){
                e.preventDefault();
        
                let formdata = JSON.parse(localStorage.getItem('formdata'));
                formdata.verify = $('.verify').val();
                localStorage.setItem('formdata', JSON.stringify(formdata));

                $.ajax({
                    url:"{{route('customer.verification')}}",
                    type: 'post',
                    dataType: 'json',
                    data: formdata,
                    success : function(response) {
                        $("#ajax-loading").fadeOut();
                        if(response == 'success') {
                            alert("EMail Bestätigung erfolgreich!");
                            localStorage.clear();  
                            window.location.href='/';
                        } else {
                           
                            let messages = response.data;
                            if(messages.verify) {
                                $('.register_form .verify strong').text(messages.verify[0]);
                                $('.register_form .verify').show();
                                $('.register_form .verify').focus();
                            }
                                  
                        }
                    },
                    error: function(response) {
                        alert("EMail Bestätigung fehlgeschlagen! Überprüfen Sie bitte Ihre EMail.");
                        console.log(response);
                        
                    }
                });
            })

            $('.skip_btn').click(function(e){
                e.preventDefault();
                localStorage.clear();  
                window.location.href='/';
            });
        })
    </script>
   
@endsection