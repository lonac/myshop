@extends('layouts.master')

@section('title', $cat->name)

@section('content')

<div class="container">
    <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3>
                        {{ $cat->name }} >>
                            @can('Edit Category')
                                    <a href="{{ route('categories.edit', $cat->id) }}" class="btn btn-info" role="button">Edit</a>
                             @endcan
                            @if(!$subcat->isEmpty())
                                @foreach($subcat as $subcatee)
                                <a href="{{ url('categories/'.$cat->id.'/subcategories/'.$subcatee->id) }}"> {{$subcatee->name}}  </a> 
                                @endforeach
                            @endif
                        </h3>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['categories.destroy', $cat->id] ]) !!}
                            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                            
                            @can('Create Subcategory')
                                <a href="{{ url('categories/'.$cat->id.'/subcategories/create') }}" class="btn btn-info" role="button">Add Subcategory</a>
                            @endcan

                            @can('Delete Category')
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            @endcan
                            {!! Form::close() !!}
                        </div>

                         <div class="panel-body"> 
                                @if($products->count()>0)
                                   @foreach ($products as $product)
                                        <p style="float:left; font-size: 9pt; text-align: center; width:30%; margin-right: 2%; margin-bottom: 1.5em;">
                                             <a href="{{url('/products/'.$product->id)}}"><img src="{{ asset('images/catalog/' .$product->name) }}" height="100" width="100"><br> 
                                                <strong>{{  str_limit($product->name,10) }}</strong></a><br>
                                                Tsh.<strong>{{$product->cost}}</strong>  
                                           </p>
                                    @endforeach
                                @else
                                    <p>No products in Here</p>
                                @endif
                        </div>
                 </div>
             </div>
    </div>
</div>

@endsection