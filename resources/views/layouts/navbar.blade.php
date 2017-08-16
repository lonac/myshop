<nav class="navbar navbar-inverse bg-inverse">
    <div class="container-default">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <strong> <a class="navbar-brand" href="/">KKOO</a></strong>          
            </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" background-color="blue">
            <ul class="nav navbar-nav navbar-left">
                 <form class="navbar-form navbar-right form-horizontal" role="search">
                      <div class="input-group">
                         <input type="text" class="form-control" placeholder="Search"> 
                      </div>
                </form>
                <li>
                        <a href="#" class="btn btn-info btn-sm">
                              <span class="glyphicon glyphicon-shopping-cart"></span> Cart
                        </a>
                     </li>
                        
            </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Links -->
                    
                        <li><a href="/">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            Men
                            <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('/men/Trousers')}}">Trousers</a></li>
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Underwear</a></li>
                                <li><a href="#">Jacket</a></li>
                                <li><a href="#">Sweater</a></li>
                            <li class="divider"></li>
                                <li><a href="#">Watch</a></li>
                                <li><a href="#">Culture</a></li>
                            <li class="divider"></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Rabber</a></li>
                                <li><a href="#">Sandals</a></li>
                            </ul>
                         </li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Women
                            <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Trousers</a></li>
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Underwear</a></li>
                                <li><a href="#">Jacket</a></li>
                                <li><a href="#">Sweater</a></li>
                            <li class="divider"></li>
                                <li><a href="#">Watch</a></li>
                                <li><a href="#">Culture</a></li>
                                <li><a href="#">Earings</a></li>
                            <li class="divider"></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Rabber</a></li>
                                <li><a href="#">Sandals</a></li>
                            </ul>
                         </li>
                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Computers
                                <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">HP</a></li>
                                    <li><a href="#">Samsung</a></li>
                                    <li><a href="#">Dell</a></li>
                                </ul>
                             </li>
                             <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Phones
                                    <b class="caret"></b>
                                    </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Iphone</a></li>
                                    <li><a href="#">Samsung</a></li>
                                    <li><a href="#">Huawei</a></li>
                                    <li><a href="#">Techno</a></li>
                                    <li><a href="#">Nokia</a></li>
                                <li class="divider"></li>
                                    <li><a href="#">Other supports</a></li>
                                </ul>
                             </li>  
                             <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    House
                                    <b class="caret"></b>
                                    </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Windows Cartens</a></li>
                                    <li><a href="#">yarn</a></li>
                                <li class="divider"></li>
                                    <li><a href="#">Bed pillor</a></li>
                                </ul>
                             </li>    
                                <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <a href="{{url('/home')}}">My Account</a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>