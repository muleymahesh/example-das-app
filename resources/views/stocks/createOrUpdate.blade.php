@extends('stocks.layout')

  

@section('content')
<head>

    <title>DAS Group Of Company</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <style type="text/css">

        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

  

        body{

            margin: 0;

            font-size: .9rem;

            font-weight: 400;

            line-height: 1.6;

            color: #212529;

            text-align: left;

            background-color: #f5f8fa;

        }

        .navbar-laravel

        {

            box-shadow: 0 2px 4px rgba(0,0,0,.04);

        }

        .navbar-brand , .nav-link, .my-form, .login-form

        {

            font-family: Raleway, sans-serif;

        }

        .my-form

        {

            padding-top: 1.5rem;

            padding-bottom: 1.5rem;

        }

        .my-form .row

        {

            margin-left: 0;

            margin-right: 0;

        }

        .login-form

        {

            padding-top: 1.5rem;

            padding-bottom: 1.5rem;

        }

        .login-form .row

        {

            margin-left: 0;

            margin-right: 0;

        }

    </style>

</head>

<body>

    

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">

    <div class="container">

        <a class="navbar-brand" href="#">DAS Group Of Company</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

   

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">

         
                    
                <ul class="navbar-nav ml-auto">

                    @foreach ($navbars as $navbarItem)

                        <li class="nav-item">

                            <a class="nav-link" href="{{ route($navbarItem->route) }}">{{ $navbarItem->name }}</a>

                        </li>

                    @endforeach

                    <li class="nav-item">

                    <a class="nav-link" href="{{route('logout')}}">Logout</a>
                    </li>

                </ul>
                

            </ul>

  

        </div>

    </div>

</nav>


<div class="col-md-12">

<span class="border">

<div class="row text-center">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>@if (isset($product)) Edit @else Add @endif Product</h2>

        </div>

        <div>

            <a class="btn btn-success mb-4 " href="{{ route('products.index') }}"> Back</a>

        </div>

    </div>

</div>

     
<div class="container">
    @if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>
        </div>

</div>

</nav>


    </div>

@endif

     

    @if (isset($product))

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">

    @method('PUT')

@else

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">

@endif

    @csrf

    
    <div class="col-md-10">
    <div="container">
             <div class="row">
     
        <div class="col-xs-8 col-sm-8 col-md-8">

            <div class="form-group">

                <strong>Name:</strong>

                <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" class="form-control" placeholder="Name">

            </div>

        </div>

        <div class="col-xs-8 col-sm-8 col-md-8">

            <div class="form-group">

                <strong>SKU:</strong>

                <input type="text" name="SKU" value="{{ old('SKU', $product->SKU ?? '') }}" class="form-control" placeholder="SKU">

            </div>

        </div>

        <div class="col-xs-8 col-sm-8 col-md-8">

        <div class="form-group">

            <strong>Price:</strong>

            <input type="text" name="Price" value="{{ old('Price', $product->Price ?? '') }}" class="form-control" placeholder="Price">

        </div>

        </div>

        <div class="col-xs-8 col-sm-8 col-md-8">

        <div class="form-group">

            <strong>Description:</strong>

            <textarea class="form-control" style="height:150px" name="Description" placeholder="Description">{{ old('Description', $product->Description ?? '') }}</textarea>

        </div>

        </div>

        <!-- <div class="col-xs-12 col-sm-12 col-md-12"> -->

        <!-- <div class="form-group">

            <strong>Created_At:</strong>

            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ old('detail', $product->detail ?? '') }}</textarea>

        </div> -->

        <!-- </div> -->

        <div class="col-12 text-center">

            <button type="submit" class="btn btn-primary ">Submit</button>

        </div>

    </div>

     
    </div>
</form>
</div>
</span>
</div>


@endsection