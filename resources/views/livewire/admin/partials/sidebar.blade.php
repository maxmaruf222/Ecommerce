<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-1 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('ad-assets') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('admin.profile') }}" class="d-block">Maruf Hassan</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
          <li class="nav-item  {{ (request()->routeIs('admin/dashboard')) ? 'menu-open' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="nav-link ">
              <i class="fa-sharp fa-solid fa-gauge-high"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item {{ (request()->routeIs('category*')) ? 'menu-open' : '' }}">
            <a href="{{ route('category.view') }}" class="nav-link">
              <i class="fa fa-th-large" aria-hidden="true"></i>
              <p>
                Category
              </p>
            </a>
          </li>
          <li class="nav-item {{ (request()->routeIs('products*')) ? 'menu-open' : '' }}">
            <a href="{{ route('products.view') }}" class="nav-link">
              <i class="fa-brands fa-product-hunt"></i>
              <p>
                Products
              </p>
            </a>
          </li>
          <li class="nav-item {{ (request()->routeIs('order*')) ? 'menu-open' : '' }}">
            <a href="{{ route('order.view') }}" class="nav-link">
              <i class="fa-brands fa-first-order-alt"></i>
              <p>
                Order
              </p>
            </a>
          </li>
          <li class="nav-item {{ (request()->routeIs('wishlist*')) ? 'menu-open' : '' }}">
            <a href="{{ route('wishlist.view') }}" class="nav-link">
              <i class="fa fa-heart" aria-hidden="true"></i>
                <p>
                wishlist
              </p>
            </a>
          </li>
          <li class="nav-item {{ (request()->routeIs('cart*')) ? 'menu-open' : '' }}">
            <a href="{{ route('cart.view') }}" class="nav-link">
              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
              <p>
                cart
              </p>
            </a>
          </li>
          <li class="nav-item {{ (request()->routeIs('blog*')) ? 'menu-open' : '' }}">
            <a href="{{ route('blog.view') }}" class="nav-link">
              <i class="fa fa-rss" aria-hidden="true"></i>
              <p>
                Blog
              </p>
            </a>
          </li>
          <li class="nav-item {{ (request()->routeIs('setting*')) ? 'menu-open' : '' }}">
            <a href="{{ route('setting.view') }}" class="nav-link">
              <i class="fa fa-cog" aria-hidden="true"></i>
              <p>
                Setting
              </p>
            </a>
          </li>
          <li class="nav-item">
            <form action="{{ route('admin.logout') }}" method="POST">
              @csrf
              <button class="nav-link" style="background: none; border:none; margin-left:-30%; color:rgb(202, 210, 217)"  type="submit">
                <i class="fa-solid fa-arrow-right"></i> Logout
              </button>
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>