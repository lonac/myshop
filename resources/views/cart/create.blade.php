@extends('layouts.master')

@section('title','Cart')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <form method="POST" action="{{ url('products/'.$product->id.'/cart/create') }}">
                {{ csrf_field() }}
                <div class="panel panel-info">
                    <div class="panel-heading"><h4>Product added to Cart</h4></div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>  
                                    <th>Product</th>
                                    <th>Name</th>             
                                    <th>Cost</th>           
                                    @if($dimension!==null)<th>Size</th>@endif      
                                    <th>Quantity</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/catalog/' .$product->name) }}" width="30" height="30">
                                    </td>
                                    <td>{{$product->name}}</td>                                   
                                    <td>{{$product->cost}}</td>  
                                    @if($dimension!==null)                    
                                    <td>
                                    @if($dimension->category=="clothes")
                                        <div class="form-group">
                                           <select name="size">
                                                <option value="small">S</option><option value="medium">M</option><option value="large">L</option>
                                                <option value="XL">XL</option><option value="XXL">XXL</option><option value="XXL">XXL</option>
                                           </select> 
                                        </div>
                                    
                                    @elseif($dimension->category=="shoes")
                                        <div class="form-group">
                                            <select name="size" class="form-control">
                                                <option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                                                <option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option>
                                                <option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option>
                                                <option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option>
                                                <option value="47">47</option>
                                            </select>
                                        </div>
                                    @endif
                                    
                                    </td>
                                    @endif
                                    <td>
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <input type="number" class="form-control" name="quantity" value="1">
                                            </div>
                                        </div>
                                    </td>  
                                   
                                 </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                          <button type="submit" class="btn btn-success">Place Order</button>     
                        </div>  
                    </div>

                </div>
                       
            </form>

        </div>
    </div>

@endsection