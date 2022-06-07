<!-- Menu -->
@php
$mainCategories=\App\Http\Controllers\HomeController::maincategorylist()
@endphp
<nav id="menu">
    <h2>Menu</h2>
    <ul>
        <li><a href="/home" class="active">Home</a></li>
        <a href="#" class="dropdown-toggle">Category</a>

        @foreach($mainCategories as $rs)
        <ul>
             <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{$rs->title}}</a>
            <div class="custom-menu">
                @if(count($rs->children))
                    @include('home/categorytree',['children'=>$rs->children])
                    @endif
            </div>
        </ul>
        @endforeach
        <li><a href="/about">About us</a></li>
        <li><a href="/products">Products</a></li>

        <li><a href="checkout.html">Checkout</a></li>


        <li><a href="/referance">Referances</a></li>
        <li><a href="/contact">Contact Us</a></li>
        <li><a href="/faq">FAQ</a></li>
    </ul>
</nav>
