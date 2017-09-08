@extends('layouts.master')

@section('title','KKOO')

@section('content')
 <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-0">
                <div class="dropdown">
                    <button class="categoriesbtn btn-lg btn-block"><strong>Categories</strong></button>
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
                <p>
                        @include('searchproducts._search_form')
                </p> 
                    
                <form>       
                         <div class="products-content products-section" style="width:100%;height:60%;">
                        <center>
                             <img src="{{asset('product/image/jeans.jpg')}}" style="width:50%" class="kkooProducts">
                            <img src="{{asset('product/image/handbag.jpg')}}" style="width:50%" class="kkooProducts">
                            <img src="{{asset('product/image/trouser.jpg')}}" style="width:50%" class="kkooProducts">
                             <img src="{{asset('product/image/singebtn.jpg')}}" style="width:50%" class="kkooProducts">
                             <img src="{{asset('product/image/suits.jpg')}}" style="width:50%" class="kkooProducts">
                        </center>
                    </div>
                    <p><marquee scrollamount="2" direction="left" behavior="scroll" style="background:colorname">
                           <font color="Darker">
                            <strong>
                               Karibu Kkootz, jukwaa linalokuletea bidhaa toka ndani na nje ya nchi, huduma zetu ni hadi Mlangoni!
                            </strong>
                           </font>
                        </marquee></p>
                </form>
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

    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("kkooProducts");
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 5000); // Change image every 2 seconds
        }
        </script>

@endsection
