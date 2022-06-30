@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-5">
            <div class="card">
                <h5 class="card-header">Manage Categories
                    <a href="{{ url('category') }}" class="btn btn-success btn-sm" title="Add New Contact" style="margin-left: 25px">
                        <i class="fa fa-plus" aria-hidden="true"></i> Manage Category >
                    </a></h5>
                <div class="card-body">
                    <table class="table" style="padding: 10px;">
                        <thead>
                        <tr>
                            <th>Category Name</th>
                        </tr>
                        </thead>

                        @foreach($category as $data)

                            <tr>
                                <td>{{$data->cat_name}}</td>
                            </tr>
                        @endforeach


                    </table>
                </div>
            </div>
        </div>


        <div class="col-7">
            <div class="card">
                <h5 class="card-header">Manage Products
                    <a href="{{ url('product') }}" class="btn btn-success btn-sm" title="Add New Contact" style="margin-left: 25px">
                        <i class="fa fa-plus" aria-hidden="true"></i> Manage Products >
                    </a></h5>
                <table class="table table-bordered">
                    <tr>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Category</th>

                    </tr>

                    @foreach($product as $data)

                        <tr>
                            <td>{{$data->product_name}}</td>
                            <td>{{$data->product_price}}</td>
                            <td>{{$data->category?->cat_name}}</td>

                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
