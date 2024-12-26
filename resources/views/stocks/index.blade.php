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

<span class="border">
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="text-center ">

                <h2>DAS Group Of Company Stock List</h2>

            </div>

            <div class="margin-bottom-20">

                <a class="btn btn-success mb-4" href="{{ route('stocks.create') }}"> Create New Stock</a>

            </div>

        </div>

    </div>

      

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

       
    <div class="margin-top-20">
    <table class="table table-bordered">

        <tr>

            <th>ID</th>
            <th>Name</th>
            <th>SKU</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>

        </tr>

        @foreach ($stocks as $stock)

        <tr>

            <td>{{ ++$i }}</td>
            <td>{{ $stock->name }}</td>
            <td>{{ $stock->SKU }}</td>
            <td>{{ $stock->Price }}</td>
            <td>{{ $stock->Description }}</td>
            <td>

                <a class="btn btn-primary" href="{{ route('stocks.edit',$stock->id) }}">Edit</a>

            </td>

        </tr>

        @endforeach

    </table>
    </div>
</span>
        

    {!! $stocks->links() !!}

            

@endsection