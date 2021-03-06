@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="float-start">
            <h2>Edit Product</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update',$product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!--PUT because we are editing/updating a product -->

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price</strong>
                <input type="number" class="form-control" name="price" value={{$product->price}} />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center p-3">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
    
@endsection