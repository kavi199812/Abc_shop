@extends('layouts.app')
@section('content')

    <div class="container px-4">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <br><br>
                <div class="pull-left md" >
                    <h2>Add New Product</h2>
                </div>

            </div>
        </div>


        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="product_name" class="form-control" placeholder="Name" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Price:</strong>
                        <input type="number" name="product_price" class="form-control" placeholder="Price" required>
                    </div>
                </div>
                <br>

                <div class="form-group col-sm-4">
                    <label for="room_type_id">
                        <strong>category:</strong>
                    </label>
                    <select name="cat_id" id="cat_id"
                            class="form-control" required>
                        <option value=''>Please select</option>

                        @foreach($products as $product)
                            <option value="{{ $product->id }}"
                                {{(request()->old('cat_id') == $product->id) ? 'selected' : ''}}
                            >
                                {{ $product->cat_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>


        </form>

@endsection
