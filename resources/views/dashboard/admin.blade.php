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
                    </div>
                </div>
            </div>
        </div>

        <div  class="card-body">
            <div class="table-responsive">
                <table class="table display table-bordered table-striped table-hover dom-jQuery-events" id = "customer_table">
                    <thead class="text-center">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Company</th>
                            <th>Budget</th>
                            <th>Title</th>                            
                            <th style="width: 75px;">Email Marketing</th>
                            <th style="width: 75px;">Callcenter Action</th>
                            <th style="width: 75px;">Postal Addresses</th>
                            <th style="width: 75px;">Email verified</th>
                            <th style="width: 75px;">Created</th>
                            <th style="width: 75px;"></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    
                        @forelse($customer as $item)
                            <tr>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->phone}}</td>
                                <td>{{ $item->company}}</td>
                                <td>{{ $item->budget}} <i class="fas fa-euro-sign"></i> </td>
                                <td> {{ $item->title}}  </td>
                                <td style="width: 75px;"> @if($item->email_marketing)
                                        <span class="badge badge-success">YES</span>
                                    @else
                                        <span class="badge badge-danger">NO</span>
                                    @endif
                                </td>
                                <td style="width: 75px;"> @if($item->callcenter)
                                        <span class="badge badge-success">YES</span>
                                    @else
                                        <span class="badge badge-danger">NO</span>
                                    @endif
                                </td>
                                <td style="width: 75px;"> @if($item->postal_Address)
                                        <span class="badge badge-success">YES</span>
                                    @else
                                        <span class="badge badge-danger">NO</span>
                                    @endif
                                </td>
                                <td style="width: 75px;">                                    
                                   
                                    @if($item->email_verified)
                                        <span class="badge badge-success">YES</span>
                                    @else
                                        <span class="badge badge-danger">NO</span>
                                    @endif
                                </td>
                                <td style="width: 75px;">{{ $item->created_at}}</td>
                                <td style="width: 75px;">
                                    <a href="#" class="btn btn-success md-trigger mb-2 mr-1 modal-btn1" data-id="{{$item->id}}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add More" data-modal="modal-1">Read More</a>                                                                               
                                </td>   
                                <td>
                                    <a href="{{route('customer.delete', $item->id)}}" onclick="return window.confirm('Are you sure?')" class="btn btn-danger btn-sm btn-delete" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete"><i class="fa fa-trash"></i> Delete</a>
                                </td>

                            </tr>                     
                        @empty       
                    
                        @endforelse
                        
                    </tbody>
                   
                </table>
            </div>
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
