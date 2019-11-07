@extends('layouts.dash')

@section('content')
    <div class="container-fluid">
        <div class="content-header row align-items-center m-0">
            <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
                <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
            <div class="col-sm-8 header-title p-0">
                <div class="media">
                    <div class="header-icon text-success mr-3"><i class="typcn typcn-spiral"></i></div>
                    <div class="media-body">
                        <h1 class="font-weight-bold">Dashboard</h1>
                        <small>From now on you will start your activities.</small>
                    </div>
                </div>
            </div>
        </div>

        <div  class="card-body">
          
        </div> 
       
        <div class="md-modal md-effect-1" id="modal-1">
            <div class="md-content">
                    
                <h4 class="font-weight-600 mb-0">Project Detail</h4>
               
                <div class="n-modal-body">
                 

                    
                </div>
                <div class="modal-footer">
                        <button class="btn btn-success md-close">Close</button>
                </div>
            </div>
        </div>   
       
                    
    </div>
    
@endsection


@section('after_script')
<script src="{{ asset('dash_asset/plugins/datatables/data-advanced.active.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.modal-btn1').click(function(){
            var customId = $(this).data('id');
            
            $('.customer_id').val(customId);   

            $.get("/customer/" + customId, function( data ) {               
                $(".n-modal-body").html(data);
            });         
        })
    })
</script>

@endsection
