@extends('layouts.master')

@section('title','KKOO')

@section('content')
 <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-0">
                <div class="dropdown">
                    <button class="categoriesbtn"><strong>Categories</strong></button>
                        <div class="dropdown-content">
                            @if($categories->count()>0)
                                @foreach($categories as $category)
                                    <a href="{{url('categories/'.$category->id)}}">{{$category->name}}</a><br>
                                @endforeach
                            @endif
                        </div>
                </div>
            </div>

            <div class="col-md-7 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p><marquee scrollamount="2" direction="left" behavior="scroll" style="background:colorname">
                           <font color="blue">
                            <strong>
                               Welcome to Kkootz, you can easily shop the products you like!
                            </strong>
                           </font>
                        </marquee></p>
                    </div>
                    <center>
                        <img src="{{asset('product/image/trouser1.png')}}" style="width:50%">
                    </center>
                </div>
             </div>
        

            <div class="col-md-3 col-md-offset-0">
                <div class="panel panel-info">
                    <div class="panel-heading"><strong>more</h3></strong></div>
                    <div class="panel-body">
                                
                    </div>
                </div>
            </div>

        </div>

        @if($categories->count()>0)
            @foreach($categories as $category)
                <div class="row">
                   <div class="col-md-12 col-md-offset-0">
                        <div class="panel panel-info">
                            <div class="panel-heading"><h4>{{$category->name}}</h4></div>
                            <div class="panel-body">

                            </div>
                        </div>
                    </div> 
                </div>
            @endforeach
        @endif
        
    </div>
@endsection
