@extends('layouts.app')
@section('content')

    <div class="container px-4">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <br><br>
                <div class="pull-left md" >
                    <h2> Update Product</h2>
                </div>

            </div>
        </div>


        <form action="{{route('product.update',$product->id)}}" method="post">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}" placeholder="Name" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Price:</strong>
                        <input type="number" name="product_price"  value="{{$product->product_price}}" class="form-control" placeholder="Price" required>
                    </div>
                </div>
                <br>

                <div class="form-group col-sm-4">
                    <label for="room_type_id">
                        <strong>category:</strong>
                    </label>
                    <select name="cat_id" id="cat_id"
                            class="form-control" required>
                        <option value=''>{{$product->category?->cat_name}}</option>

                        @foreach($items as $product)
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
