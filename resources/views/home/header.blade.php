<!-- Header -->
<header id="header">
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            div.scrollmenu {
                background-color: #333;
                overflow: auto;
                white-space: nowrap;

            }

            div.scrollmenu a {
                display: inline-block;
                color: white;
                text-align: left;
                float: right;
                padding: 15px 50px 5px 50px;


                text-decoration: none;
            }

            div.scrollmenu a:hover {
                background-color: #777;
            }
            div.sdf {
                padding: 15px;
                color: silver;
                height: 90px;
                float: left;
                font-size: 30px;

            }
        </style>
    </head>
    <body>

    <div class="scrollmenu">
        <div class="sdf">
        <a href="/home" class="logo">
            <span class="fa fa-book" ></span> <span class="alert-heading" >karabuk</span>
        </a>

        </div>
        <nav>
            <ul>
                <li><a href="#menu">Menu</a></li>
            </ul>
        </nav>
        @guest()
        <a href="/loginuser">login</a>
        <a href="/registeruser">regestir</a>

        @endguest

        @auth
            <div>
                <Strong class="text-uppercase">{{Auth::user()->name}}<i class="fa fa-create-down"</Strong>
            </div>
            <a href="/logoutuser">logut</a>
        @endauth


    </div>




        <!-- Nav -->


    </div>
</header>
