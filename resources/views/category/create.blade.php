@extends('layouts.app')

@section('content')

    <div class="container px-4">
        <div class="row gx-5">
            <div class="col">


                <form action="{{ route('category.store') }}" method="post">
                    @csrf
                    <br>
                    <input type="text" name="cat_name" id="name" class="form-control" placeholder="Category name" required/></br>
                    <spam class="text-danger">@error('cat_name'){{$message}} @enderror</spam><br>
                    <input type="submit" value="Submit Your category" class="btn btn-success"></br>

                </form>
            </div>

        </div>
    </div>


@endsection
