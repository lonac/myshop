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
                        <a href="{{url('/cart')}}" class="btn btn-info btn-sm">
                              <span class="glyphicon glyphicon-shopping-cart"></span> Cart
                        </a>
                     </li>
                        
            </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Links --> 
                        <li><a href="/">Home</a></li>
                        <li><a href="/news">News</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contacts">Contact Us</a></li>
                        <li><a href="/help">Help</a></li>
                    
                                <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Sign In</a></li>
                            <li><a href="{{ url('/register') }}">Join</a></li>
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