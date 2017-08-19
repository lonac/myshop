@extends('layouts.master')

@section('title', '| Edit Prdduct')

@section('content')
<div class="row">

    <div class="col-md-8 col-md-offset-2">

        <h1>Edit Product</h1>
        <hr>
            {{ Form::model($product, array('route' => array('products.update', $product->id), 'method' => 'PUT')) }}
            
                @if($categories->count()>0)
                    <div class="form-group">
                        <label for="categoryname">Choose Category</label>
                        <select class="form-control" name="categoryname">
                            @foreach ($categories as $catee)
                                <option value="{{$catee->name}}">{{$catee->name}}</option>
                            @endforeach
                        </select>
                    </div>
                @else
                 <strong><a href="categories/create">Add Category first</a></strong>
                @endif

                @if($subcategories->count()>0)
                    <div class="form-group">
                        <label for="subcategoryname">Choose Subcategory</label>
                        <select class="form-control" name="subcategoryname">
                            @foreach ($subcategories as $subcatee)
                                <option value="{{$subcatee->name}}">{{$subcatee->name}}</option>
                            @endforeach
                        </select>
                    </div>
                @else
                 <strong><a href="subcategories/create">Add Subcategory first</a></strong>
                @endif
            <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}<br>

            {{ Form::label('manufacturer', 'Manufacturer Name') }}
            {{ Form::text('manufacturer', null, array('class' => 'form-control')) }}<br>

            {{ Form::label('cost', 'Product Cost') }}
            {{ Form::number('cost', null, array('class' => 'form-control')) }}<br>

            {{ Form::label('body', 'Post Body') }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}<br>

            {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
          </div>
    </div>
</div>

@endsection