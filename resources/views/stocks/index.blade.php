@extends('../layout')



@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">


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
                            <th>Raised by</th>
                            <th>Assigned to</th>
                            <th>timestamp</th>
                            <th>status</th>
                            <th>Action</th>

                        </tr>

                        @foreach ($stocks as $stock)
                            <tr>
                            <td>{{ $stock->id }}</td>
                            <td>{{ $stock->raised_by }}</td>
                            <td>{{ $stock->assigned_to }}</td>
                            <td>{{ $stock->timestamp }}</td>
                            <td>{{ $stock->status }}</td>
                                <td>

                                    <a class="btn btn-primary" href="{{ route('stocks.edit', $stock->id) }}">Edit</a>

                                </td>

                            </tr>
                        @endforeach

                    </table>
                </div>
            </span>
        </div>
    </div>

    {!! $stocks->links() !!}
@endsection
