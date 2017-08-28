@extends('layouts.master')

@section('title','KKOO')

@section('content')
 <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Categories</h3></strong></div>
                    <div class="panel-body">
                        @if($category->count()>0)
                            @foreach($category as $catee)
                                <a href="{{url('categories/'.$catee->id)}}">{{$catee->name}}</a><br>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Products!</h3></strong></div>
                       <div id="slider">
                    <figure>
                         @if($products->count()>0)
                            @foreach($products as  $product)
                                <div class="panel-body">
                                    <a href="{{'products/'.$product->id}}">
                                        <img src="{{ asset('images/catalog/' .$product->name) }}" style="width:304px;height:228px;">
                                    </a>     
                                </div>
                            @endforeach
                       @else
                       <p><h2>No Products So Far!</h2></p>
                       @endif
                    </figure>
                    </div>
                </div>
             </div>
        

            <div class="col-md-3 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>more</h3></strong></div>
                    <div class="panel-body">
                                <form>
                                      <div class="form-group newsletter">
                                        <p>Subscribe to receive e-mails about KKOO. No spam ever.</p>
                                        <input class="form-control" placeholder="Your e-mail address" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" style="width: 100%; margin-bottom: 2px;">
                                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-success">
                                    </div>

                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_f441f1bb5368236838a069f04_2d6c711382" tabindex="-1" value=""></div>
                                </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
