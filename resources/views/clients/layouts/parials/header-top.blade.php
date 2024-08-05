<div class="order-2 order-lg-3 d-flex align-items-center">
    <!-- search -->
    <form class="search-bar" action="{{ route('search') }} " method="POST">
        @csrf
        <input id="search-query" name="keyword" type="search" placeholder="Tìm kiếm &amp; Yêu thích...">
    </form>

    <button class="navbar-toggler border-0 order-1" type="submit" data-toggle="collapse" data-target="#navigation">
        <i class="ti-menu"></i>

    </button>

    <form action="{{ route('logout') }}" method="post" class="m-4">
        @csrf
        <button type="submit" class="btn">Logout</button>
    </form>
</div>
