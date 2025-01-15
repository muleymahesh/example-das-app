@extends('../layout')

       

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">

<span class="border">
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="text-center ">

                <h2>DAS Group Of Company Stock request List</h2>

            </div>

            <div class="margin-bottom-20">

                <a class="btn btn-success mb-4" href="{{ route('stocks.create') }}"> Create New Product</a>

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

        @foreach ($products as $product)

        <tr>

            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->SKU }}</td>
            <td>{{ $product->Price }}</td>
            <td>{{ $product->Description }}</td>
            <td>

                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

            </td>

        </tr>

        @endforeach

    </table>
    </div>
</span>
        
    </div>
</div>

    {!! $products->links() !!}

            

@endsection