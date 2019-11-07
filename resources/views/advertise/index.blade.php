@extends('layouts.dash')

@section('content')
<div class="content-wrapper">
    <div class="content-header row align-items-center m-0">
            <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
                <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>                   
                    <li class="breadcrumb-item active">Advertise</li>
                </ol>
            </nav>
            <div class="col-sm-8 header-title p-0">
                <div class="media">
                    <div class="header-icon text-success mr-3"><i class="typcn typcn-social-google-plus-circular"></i></div>
                    <div class="media-body">
                        <h1 class="font-weight-bold">Advertise</h1>                       
                    </div>
                </div>
            </div>
        </div>
    <div class="body-content">
        <div class="card mb-4">
            <div class="card-body">
                <a href="{{ route('advertise.create')}}"><button class="btn btn-success">Create New</button></a>
            </div>
            <div class="table-responsive px-4 py-4">
                    <table class="table display table-bordered table-striped table-hover dom-jQuery-events" id = "customer_table">
                        <thead class="text-center">
                            <tr> 
                                <td style="width: 40px;">ID</td>                            
                                <th>Advertise Title</th>                                
                                <th style="width: 40px;"></th>
                                <th style="width: 70px;"></th>
                            </tr>
                        </thead>
                        <tbody class="text-center">                        
                            @forelse($options as $option)
                                <tr>
                                    <input type="hidden" name="option" class="option" value="{{$option->option}}" />   
                                    <td>{{ $option->id}}</td>                              
                                    <td>{{ $option->option}}</td>
                                    <td>
                                        <a href="#" class="btn btn-success md-trigger mb-2 mr-1 modal-btn2" data-id="{{$option->id}}" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add More" data-modal="modal-1">Edit</a>                                                                               
                                    </td>
                                    <td>
                                        <a href="{{route('advertise.delete', $option->id)}}" onclick="return window.confirm('Are you sure?')" class="btn btn-danger btn-sm btn-delete" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete"><i class="fa fa-trash"></i> Delete</a>
                                    </td>                              
                                </tr>                     
                            @empty       
                        
                            @endforelse                            
                        </tbody>                       
                    </table>
                </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="" method="post" id="edit_form">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Advertise</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" class="id" />
                        <div class="form-group">
                            <label for="option" class="font-weight-600"> Advertise:</label>
                            <input type="text" name="option" class="form-control option" >
                        </div>             
                    </div>              
                    
                    <div class="modal-footer">    
                        <button type="button" class="btn btn-primary btn-submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>&nbsp;Save</button>                       
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>&nbsp;Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



@section('after_script')
<script src="{{ asset('dash_asset/plugins/datatables/data-advanced.active.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.modal-btn2').click(function(){
            let id = $(this).data('id');
            let option = $(this).parents('tr').find('.option').val().trim();
            console.log(id);
            $("#edit_form .id").val(id);
            $("#edit_form .option").val(option);
            $("#editModal").modal();
        })

        $("#edit_form .btn-submit").click(function(){
            $("#ajax-loading").fadeIn();
            $.ajax({
                url: "{{route('advertise.update')}}",
                type: 'POST',
                dataType: 'json',
                data: $('#edit_form').serialize(),
                success : function(response) {
                    $("#ajax-loading").fadeOut();
                    if(response == 'success') {  
                        alert('Updated Successfully.');
                        window.location.reload();                          
                    } else {
                        let messages = response.data;
                        if(messages.option) {
                            $('#edit_form .option_error strong').text(messages.option[0]);
                            $('#edit_form .option_error').show();
                            $('#edit_form .option').focus();
                        }
                    }
                },
                error: function(response) {
                    $("#ajax-loading").fadeOut();
                    if(response.responseJSON.message == 'The given data was invalid.'){                            
                        let messages = response.responseJSON.errors;
                        if(messages.option) {
                            $('#edit_form .option_error strong').text(messages.option[0]);
                            $('#edit_form .option_error').show();
                            $('#edit_form .option').focus();
                        }
                       
                    } else {
                        alert("Something went wrong");
                    }
                }
            });
        });

    })
</script>

@endsection