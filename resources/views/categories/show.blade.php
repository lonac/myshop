@extends('layouts.master')

@section('title', $cat->name)

@section('content')

<div class="container">
    <div class="row">
            <div class="col-md-10 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>
                        {{ $cat->name }}
                            @can('Edit Category')
                                    <a href="{{ route('categories.edit', $cat->id) }}" class="btn btn-info" role="button">Edit</a>
                             @endcan
                        </strong>
                        
                            @if(!$subcat->isEmpty())
                                @foreach($subcat as $subcatee)
                                <a href="{{ url('categories/'.$cat->id.'/subcategories/'.$subcatee->id) }}">{{$subcatee->name}}</a>
                                @endforeach
                            @endif

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
                            <h2>Here is {{$cat->name}} Products</h2>
                                @if($products->count()>0)
                                   @foreach ($products as $product)
                                        <div class="panel-body">
                                            <li style="list-style-type:disc">
                                                <a href="{{ route('products.show', $product->id ) }}"><b>{{ $product->name }}</b><br>
                                                    <p class="teaser">
                                                       {{  str_limit($product->body, 100) }} {{-- Limit teaser to 100 characters --}}
                                                    </p>
                                                </a>
                                            </li>
                                        </div>
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