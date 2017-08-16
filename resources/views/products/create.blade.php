@extends('layouts.master')

@section('title', '| Add new Product')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h1>Add New Product</h1>
        <hr>

    {{-- Using the Laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'products.store')) }}

        <div class="form-group">
            {{ Form::label('title', 'Product Name') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('manufacturer', 'Manufacturer Name') }}
            {{ Form::text('manufacturer', null, array('class' => 'form-control')) }}
            <br>

            @if(!$category->isEmpty()) 
            <label for="categories">Choose Category</label><br>
                @foreach ($category as $catee) 
                    {{ Form::radio('category[]',  $catee->id ) }}
                    {{ Form::label($catee->name, ucfirst($catee->name)) }}
                @endforeach
            @endif  
            <br>

            @if(!$subcategory->isEmpty()) 
            <label for="subcategories">On:</label><br>
                @foreach ($subcategory as $subcatee) 
                    {{ Form::radio('subcategory[]',  $subcatee->id ) }}
                    {{ Form::label($subcatee->name, ucfirst($subcatee->name)) }}
                @endforeach
            @endif
            <br>

            @if(!$dimensions->isEmpty()) 
            <label for="Dimension">Available Dimension</label><br>
                @foreach ($dimensions as $dimee) 
                    {{ Form::checkbox('size[]',  $dimee->id ) }}
                    {{ Form::label($dimee->size, ucfirst($dimee->size)) }}
                @endforeach
            @endif
            <br>

            {{ Form::label('cost', 'Product Cost') }}
            {{ Form::text('cost', null, array('class' => 'form-control')) }}
            <br>


             {{ Form::label('body', 'More Specifications') }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::submit('Add Product', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {{ Form::close() }}
        </div>
        </div>
    </div>

@endsection