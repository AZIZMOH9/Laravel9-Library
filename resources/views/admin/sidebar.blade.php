<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{asset('assets')}}/assets/admin/img/find_user.png" class="user-image img-responsive"/>
            </li>
            <li>
                <a  href="/admin"><i class="fa fa-film fa-3x"></i> Dashpad</a>
            </li>
            <li>
                <a  href="/admin/category"><i class="fa fa-dashboard fa-3x"></i> Catagories</a>
            </li>
            <li>
                <a  href="/admin/product"><i class="fa fa-dashcube fa-3x"></i> Products</a>
            </li>
            <li>
                <a  href="/admin/comment"><i class="fa fa-comment fa-3x"></i> Comments</a>
            </li>
            <li>
                <a  href="{{route('admin.faq.index')}}"><i class="fa fa-question fa-3x"></i> FAQ</a>
            </li>
            <li>
                <a  href="{{route('admin.message.index')}}"><i class="fa fa-mail-forward fa-3x"></i> Messages</a>
            </li>
            <li>
                <a  href="/admin/user"><i class="fa fa-user fa-3x"></i> Users</a>
            </li>
            <li>
                <a  href="/admin/social"><i class="fa fa-user fa-3x"></i> Social</a>
            </li>
            <li>
                <a  href="/admin/setting"><i class="fa fa-edit fa-3x"></i> settings</a>
            </li>

            <li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Orders<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">New orders</a>
                    </li>
                    <li>
                        <a href="#">accepted orders</a>
                    </li>
                    <li>
                        <a href="#">shipping order</a>
                    </li>
                    <li>
                        <a href="#">completed orders</a>
                    </li>
                    <li>
                        <a href="#">donate requests<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">requests</a>
                            </li>
                            <li>
                                <a href="#">accepted requests</a>
                            </li>
                            <li>
                                <a href="#">completed requests</a>
                            </li>

                        </ul>

                    </li>
                </ul>
            </li>


        </ul>

    </div>

</nav>
