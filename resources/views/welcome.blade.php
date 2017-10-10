@extends('layouts.master')

@section('title','Kkootz')

@section('content')
 <div class="container">
        <div class="row">
                <div class="col-md-2 col-md-offset-0"> 
                    <a href="/"><img src="{{asset('logo/image/kkootz.png')}}" height="50" width="150">
                    </a> 
                </div>
                <div class="col-md-7 col-md-offset-0">
                     @include('searchproducts._search_form')
                </div>
                <div class="col-md-3 col-md-offset-0">
                    <div class="panel panel-info">
                        <div class="panel-heading"><strong>N</strong></div>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-0">   
                <div class="panel panel-info">
                    <div class="panel-heading"><strong>Categories</strong></div>
                    <div class="panel-body">
                        @if($categories->count()>0)
                            @foreach($categories as $category) 
                                <div class="dropdown dropdown-right" role="dropdown" aria-labelledby="dropdown"> 
                                    <strong><a href="{{url('/categories/'.$category->id)}}">{{$category->name}}</a></strong>     
                                    <div class="dropdown-content">
                                         @if($category->subcategories->count()) 
                                            @foreach ($category->subcategories as $subcategory)
                                               <ul> <strong><a href="{{url('/categories/'.$subcategory->category_id.'/subcategories/'.$subcategory->id)}}">
                                                    {{$subcategory->name}}</a></strong></ul>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>       
                            @endforeach
                        @endif 
                    </div>
                </div>    
            </div>

            <div class="col-md-7 col-md-offset-0">
                 <p><marquee scrollamount="2" direction="left" behavior="scroll" style="background:colorname">
                   <font color="Darker">
                    <strong>
                       Karibu Kkootz, jukwaa linalokuletea bidhaa toka ndani na nje ya nchi, huduma zetu ni hadi Mlangoni!
                    </strong>
                   </font>
                </marquee></p>
                <form>
                    <!-- Carousel container -->
                    <div id="product-pics" class="carousel slide" data-ride="carousel" >
                    <div id="product-pics" class="carousel slide" data-ride="carousel" >

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                        <li data-target="#product-pics" data-slide-to="1" class="active"></li>
                        <li data-target="#product-pics" data-slide-to="2"></li>
                        </ol>
                        <center>
                            <!-- Content -->
                            <div class="carousel-inner" role="listbox">
                                @if($products->count()>0)
                                    @foreach($products as $product)
                                        @if($product->id==1)
                                            <div class="item active">
                                               <p style="float:center; font-size: 8pt; text-align: center;">
                                                 <a href="{{url('/products/'.$product->id)}}"><img src="{{ asset('images/catalog/'.$product->id.'.jpg')}}" height="400" width="500"><br> 
                                                    </a><br>
                                               </p>
                                            </div>
                                        @else
                                            <div class="item">
                                                <p style="float:center; font-size: 8pt; text-align: center; ">
                                                 <a href="{{url('/products/'.$product->id)}}"><img src="{{ asset('images/catalog/'.$product->id.'.jpg')}}" height="400" width="500"><br>                          
                                               </p>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif

                            </div>
                        </center>

                        <!-- Previous/Next controls -->
                        <a class="left carousel-control" href="#product-pics" role="button" data-slide="prev">
                            <span class="icon-prev" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#product-pics" role="button" data-slide="next">
                            <span class="icon-next" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </form>
             </div>

            <div class="col-md-2 col-md-offset-0">
                
            </div>          

        </div>

        @if($categories->count()>0)
         @foreach($categories as $category)
            <div class="row">
                <div class="col-md-12 col-md-offset-0">    
                <div class="panel panel-info">
                    <div class="panel-heading">     
                        <a href="{{url('categories/'.$category->id)}}">{{$category->name}}</a><br>
                    </div>
                    <div class="panel-body"></div>
                </div>            
                   
                </div>
            </div>
            @endforeach
         @endif
    </div>

@endsection
