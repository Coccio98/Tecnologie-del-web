<div class="sidebar" data-color="orange" data-background-color="white"
     data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a class="simple-text logo-normal">
            {{ __('Admin Dashboard') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="material-icons-outlined"> person </i>
                    <span class="sidebar-normal"> {{ __('User Management') }} </span>
                </a>
            </li>
            <li class="nav-item {{ ($activePage == 'product-management' || $activePage == 'stock-management' || $activePage == 'stock-management') ? ' active' : '' }}">
            <a class="nav-link collapsed" data-toggle="collapse" href="#product" aria-expanded="false">
                <i class="material-icons-outlined">store</i>
                <p> Product
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="product">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'product-management' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('product.index') }}">
                            <i class="material-icons-outlined"> store </i>
                            <span class="sidebar-normal"> Product Management </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'stock-management' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('stock.index') }}">
                            <i class="material-icons-outlined"> list_alt </i>
                            <span class="sidebar-normal"> Stock Management </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'image-management' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('image.index') }}">
                            <i class="material-icons-outlined"> photo_library </i>
                            <span class="sidebar-normal"> Image Management </span>
                        </a>
                    </li>
                </ul>
            </div>
            </li>
            <li class="nav-item{{ $activePage == 'brand-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('brand.index') }}">
                    <i class="material-icons-outlined">branding_watermark</i>
                    <span class="sidebar-normal"> Brand Management </span>
                </a>
            </li>
            <li class="nav-item {{ ($activePage == 'category' || $activePage == 'subcategory') ? ' active' : '' }}">
                <a class="nav-link collapsed" data-toggle="collapse" href="#category" aria-expanded="false">
                    <i class="material-icons-outlined">category</i>
                    <p> Category
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="category">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'category-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('category.index') }}">
                                <i class="material-icons-outlined">category</i>
                                <span class="sidebar-normal"> Category Management </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'subcategory-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('subcategory.index') }}">
                                <i class="material-icons-outlined">subdirectory_arrow_right</i>
                                <span class="sidebar-normal"> Subcategory Management </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item{{ $activePage == 'coupon-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('coupon.index') }}">
                    <i class="material-icons-outlined"> redeem </i>
                    <span class="sidebar-normal"> Coupon Management </span>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'showcase-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('showcase.index') }}">
                    <i class="material-icons-outlined"> storefront </i>
                    <span class="sidebar-normal"> Showcase Management </span>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'courier-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('courier.index') }}">
                    <i class="material-icons-outlined"> local_shipping </i>
                    <span class="sidebar-normal"> Courier Management </span>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'order-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('order.index') }}">
                    <i class="material-icons-outlined"> shopping_bag </i>
                    <span class="sidebar-normal"> Order Management </span>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'box-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('box.index') }}">
                    <i class="material-icons-outlined"> crop_5_4 </i>
                    <span class="sidebar-normal"> Box Management </span>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'information-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('information.index') }}">
                    <i class="material-icons-outlined"> info </i>
                    <span class="sidebar-normal"> Information Management </span>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'media-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('media.index') }}">
                    <i class="material-icons-outlined"> perm_media </i>
                    <span class="sidebar-normal"> Media Management </span>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('table') }}">
                    <i class="material-icons">content_paste</i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('typography') }}">
                    <i class="material-icons">library_books</i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('icons') }}">
                    <i class="material-icons">bubble_chart</i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('map') }}">
                    <i class="material-icons">location_ons</i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('notifications') }}">
                    <i class="material-icons">notifications</i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
