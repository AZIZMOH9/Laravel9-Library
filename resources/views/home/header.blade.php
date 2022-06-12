<!-- Navbar Start -->
<div class="container-fluid nav-bar p-0">
    <div class="container-lg p-0">

        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
            <a href="/home" class="navbar-brand">
                <h1 class="m-0 text-white display-4"><span class="text-primary">K</span>arabuk<span class="text-primary">U</span>niversity</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <li class="nav-item">
                        @auth()
                            <a href="{{route('userpanel.index')}}" class="btn btn-primary ml-lg-3"> {{Auth::user()->name}}</a>
                            <a  class="btn btn-primary ml-lg-3" href= "/logoutuser">  Log out</a>
                        @endauth

                    </li>
                    @guest()
                        <li class="nav-item">
                            <a href="/registeruser" class="btn btn-primary ml-lg-3">Register</a> <a href="/loginuser" class="btn btn-primary ml-lg-3">Login</a>
                        </li>
                        @endguest
                        </ul>
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <div class="btn-outline-primary">
                    </div>
                    <a href="pricing.html" class="nav-item nav-link">Pricing</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>  <nav>
                <ul>
                    <li><a href="#menu" class="active-menu">Menu</a></li>
                </ul>
            </nav>
        </nav>
    </div>
</div>




    </body>



        <!-- Nav -->


    </div>
</header>
