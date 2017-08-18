@extends('layouts.master')

@section('title', '| Add new Product')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h2>Add New Product on 
            <font color="blue">{{$subcategory->name}}</font> for {{$category->name}}</h2>
        <hr>
            {{-- Using the Laravel HTML Form Collective to create our form --}}
            <form method="POST" route="{{url('categories/'.$category->id.'/subcategories/'.$subcategory->sub_id.'/products/create')}}">
                 {{ csrf_field() }}
                <div class="form-group">
                    {{ Form::label('name', 'Product Name') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}
                    <br>

                    {{ Form::label('manufacturer', 'Manufacturer Name') }}
                    {{ Form::text('manufacturer', null, array('class' => 'form-control')) }}
          
                    <br>

                    {{ Form::label('cost', 'Product Cost') }}
                    {{ Form::number('cost', null, array('class' => 'form-control')) }}
                    <br>


                     {{ Form::label('body', 'More Specifications') }}
                    {{ Form::textarea('body', null, array('class' => 'form-control')) }}
                    <br>

                    {{ Form::submit('Add Product', array('class' => 'btn btn-success btn-lg btn-block')) }}
                </div>
             </form>
        </div>
    </div>

@endsection