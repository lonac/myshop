@extends('layouts.master')

@section('title', '| Add Photos')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h1>Upload New Product</h1>
        <hr>
        <form method="POST" action="{{url('photos')}}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
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

                {{ Form::label('photo', 'Choose File') }}
                {{ Form::file('photo[]', null, array('class' => 'form-control')) }}
                <br>

                {{ Form::submit('Upload File', array('class' => 'btn btn-success btn-lg btn-block')) }}
            </div>
        </form>
        
        </div>
    </div>

@endsection