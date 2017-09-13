@extends('layouts.master')

@section('title','Kkootz')

@section('content')
 <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-0">
                <div class="panel panel-info">
                    <div class="panel-heading"><strong>Categories</strong></div>
                    <div class="panel-body">
                        @if($subcategories->count()>0)
                            @foreach($subcategories as $subcategory)
                                <strong><a href="">{{$subcategory->categories->name}}</a> </strong>  <br>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-md-offset-0">
                <p>
                        @include('searchproducts._search_form')
                </p> 
                 <p><marquee scrollamount="2" direction="left" behavior="scroll" style="background:colorname">
                   <font color="Darker">
                    <strong>
                       Karibu Kkootz, jukwaa linalokuletea bidhaa toka ndani na nje ya nchi, huduma zetu ni hadi Mlangoni!
                    </strong>
                   </font>
                </marquee></p>
                <form>
                    <!-- Carousel container -->
                    <div id="product-pics" class="carousel slide" data-ride="carousel" height="500" width="400">

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                        <li data-target="#product-pics" data-slide-to="0" class="active"></li>
                        <li data-target="#product-pics" data-slide-to="1"></li>
                        <li data-target="#product-pics" data-slide-to="2"></li>
                        <li data-target="#product-pics" data-slide-to="3"></li>
                        </ol>
                        <center>

                            <!-- Content -->
                            <div class="carousel-inner" role="listbox">

                            <!-- Slide 1 -->
                            <div class="item active">
                            <img src="{{asset('product/image/jeans.jpg')}}" height="500" width="400" class="kkooProducts">
                            </div>

                            <!-- Slide 2 -->
                            <div class="item">
                            <img src="{{asset('product/image/handbag.jpg')}}" height="500" width="400" class="kkooProducts">
                            </div>

                            <!-- Slide 3 -->
                            <div class="item">
                            <img src="{{asset('product/image/trouser.jpg')}}" height="500" width="400" class="kkooProducts">
                            </div>

                            <!-- Slide 3 -->
                            <div class="item">
                            <img src="{{asset('product/image/singebtn.jpg')}}" height="500" width="400" class="kkooProducts">
                            </div>

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
        
            <div class="col-md-3 col-md-offset-0">
                <div class="panel panel-info">
                    <div class="panel-heading"><strong>N</strong></div>
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
