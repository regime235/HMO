@extends('doctorfiles.layout')

@section('content2')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New File</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('doctorfiles.index') }}"> Back</a>
        </div>
        <br>
    </div>
</div>

   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

   

<form action="{{ route('doctorfiles.store') }}" method="POST">

    @csrf
     <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Doctors Code:</strong>
                <input type="text" name="doctors_code" class="form-control" placeholder="Enter Code">
            </div>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Last Name:</strong>
                <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name">
            </div>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>First Name:</strong>
                <input type="text" name="first_name" class="form-control" placeholder="Enter First Name">
            </div>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Middle Initial:</strong>
                <input type="text" name="middle_initial" class="form-control" placeholder="Enter Middle Initial">
            </div>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8">
            <div class="form-group">
                <strong>Specialty:</strong>
                <input type="text" name="specialty" class="form-control" placeholder="Enter Specialty">
            </div>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@endsection