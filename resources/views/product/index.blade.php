@extends('layouts.app')

@section('content')

    <div class="container px-4">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <br><br>
                    <div class="pull-center">
                        <a class="btn btn-success" href="{{route('product.create')}}"> Add New Product</a>
                        <a class="btn btn-info" href="{{ url('/') }}">< Back</a>
                    </div>
                </div>

            </div>
            <br>

            <table class="table table-bordered">
                <tr>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Category</th>

                </tr>

                @foreach($data as $data)

                    <tr>
                        <td>{{$data->product_name}}</td>
                        <td>{{$data->product_price}}</td>
                        <td>{{$data->category?->cat_name}}</td>

                        <td>
                            <form action="{{route('product.destroy',$data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a class="btn btn-primary" href="{{route('product.edit',$data->id) }}">Edit</a>

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>


                        </td>

                    </tr>
                @endforeach

            </table>
    </div>

@endsection
