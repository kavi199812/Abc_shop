@extends('layouts.app')

@section('content')

    <div class="container px-4">
        <div class="row gx-5">
            <div class="col">
                <div class="p-3 border bg-light">
                    <div class="table-responsive">

                        <table class="table" style="padding: 10px;">
                            <thead>
                            <tr>
                                <th>Id </th>
                                <th>Category Name</th>
                            </tr>
                            </thead>

                            @foreach($data as $data)

                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->cat_name}}</td>
                                </tr>
                            @endforeach


                        </table>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="p-3 border bg-light">
                    <a href="{{route('category.create') }}" class="btn btn-success btn-sm" title="Add New Contact" style="margin-left: 25px">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Category
                    </a>
                    <a href="{{ url('/') }}" class="btn btn-info btn-sm" title="Add New Contact" style="margin-left: 25px">
                        <i class="fa fa-plus" aria-hidden="true"></i> < Back
                    </a>
                </div>
            </div>
        </div>
    </div>


@endsection
