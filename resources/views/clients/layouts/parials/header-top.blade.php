<div class="order-2 order-lg-3 d-flex align-items-center">
    <select class="m-2 border-0 bg-transparent" id="select-language">
      <option id="en" value="" selected>Tiếng Anh</option>
      <option id="fr" value="">Tiếng Việt</option>
    </select>

    <!-- search -->
    <form class="search-bar" action="{{ route('search') }} "  method="POST">
         @csrf
      <input id="search-query" name="keyword" type="search" placeholder="Tìm kiếm &amp; Yêu thích...">
    </form>

    <button class="navbar-toggler border-0 order-1" type="submit" data-toggle="collapse"
      data-target="#navigation">
      <i class="ti-menu"></i>

    </button>
  </div>
