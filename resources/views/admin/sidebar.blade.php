<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{asset('assets')}}/assets/admin/img/yuksel.jpg" class="user-image img-responsive"/>
            </li>
            <li>
                <a  href="/admin"><i class="fa fa-film fa-3x"></i> Dashpad</a>
            </li>
            <li>
                <a  href="/admin/category"><i class="fa fa-dashboard fa-3x"></i> Catagories</a>
            </li>
            <li>
                <a  href="/admin/product"><i class="fa fa-book fa-3x"></i> Book</a>
            </li>
            <li>
                <a  href="{{route('admin.comment.index')}}"><i class="fa fa-comment fa-3x"></i> Comments</a>
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
                <a  href="/admin/setting"><i class="fa fa-edit fa-3x"></i> settings</a>
            </li>
            <li>
                <a  href="{{route('admin.borrow.index')}}"><i class="fa fa-sitemap fa-3x"></i> Borrow</a>
            </li>



        </ul>

    </div>

</nav>
