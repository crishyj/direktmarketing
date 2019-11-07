@extends('layouts.dash')

@section('content')
<div class="content-wrapper">
    <div class="content-header row align-items-center m-0">
            <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
                <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>                   
                    <li class="breadcrumb-item active">Google Adwords</li>
                </ol>
            </nav>
            <div class="col-sm-8 header-title p-0">
                <div class="media">
                    <div class="header-icon text-success mr-3"><i class="typcn typcn-social-google-plus-circular"></i></div>
                    <div class="media-body">
                        <h1 class="font-weight-bold">Google Adwords</h1>
                       
                    </div>
                </div>
            </div>
        </div>
    <div class="body-content">
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('dashboard.adwords.edit') }}" method="post">
                    @csrf
                
                    <div class="form-group">
                        <label for="title" class="font-weight-600"> Title:</label>
                        <input type="text" name="title" class="form-control" value="{{ $adword->title }}">
                    </div>
                    <div class="form-group">
                        <label for="desc" class="font-weight-600"> Description:</label>
                        <input type="text" name="desc" class="form-control" value="{{ $adword->desc }}">
                    </div>
                    <div class="form-group">
                        <label for="list1" class="font-weight-600"> List1:</label>
                        <input type="text" name="list1" class="form-control" value="{{ $adword->list1 }}">
                    </div>
                    <div class="form-group">
                        <label for="list2" class="font-weight-600"> List2:</label>
                        <input type="text" name="list2" class="form-control" value="{{ $adword->list2 }}">
                    </div>
                    <div class="form-group">
                        <label for="list3" class="font-weight-600"> List3:</label>
                        <input type="text" name="list3" class="form-control" value="{{ $adword->list3 }}">
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection