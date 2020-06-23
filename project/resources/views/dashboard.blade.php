@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">person</i>
                            </div>
                            <p class="card-category">Users</p>
                            <h3 class="card-title">{{$nUsers}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">link</i>
                                <a href="{{ route('user.index') }}">User Management</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Products</p>
                            <h3 class="card-title">{{$nProducts}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">link</i>
                                <a href="{{ route('product.index') }}"> Product Management</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">list_alt</i>
                            </div>
                            <p class="card-category">Stock</p>
                            <h3 class="card-title">{{$nStocks}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">link</i>
                                <a href="{{ route('stock.index') }}">Stock Management </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons"> photo_library</i>
                            </div>
                            <p class="card-category">Images</p>
                            <h3 class="card-title">{{$nImages}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">link</i>
                                <a href="{{ route('image.index') }}">Image Management</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons"> branding_watermark </i>
                            </div>
                            <p class="card-category">Brands</p>
                            <h3 class="card-title">{{$nBrands}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">link</i>
                                <a href="{{ route('brand.index') }}">Brand Management</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons"> category </i>
                            </div>
                            <p class="card-category">Categories</p>
                            <h3 class="card-title">{{$nCategories}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">link</i>
                                <a href="{{ route('category.index') }}">Category Management</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons"> subdirectory_arrow_right </i>
                            </div>
                            <p class="card-category">Subcategories</p>
                            <h3 class="card-title">{{$nSubcategories}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">link</i>
                                <a href="{{ route('subcategory.index') }}">Subcategory Management</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons"> redeem </i>
                            </div>
                            <p class="card-category">Coupons</p>
                            <h3 class="card-title">{{$nCoupons}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">link</i>
                                <a href="{{ route('coupon.index') }}">Coupon Management</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons"> storefront </i>
                            </div>
                            <p class="card-category">Showcases</p>
                            <h3 class="card-title">{{$nShowcases}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">link</i>
                                <a href="{{ route('showcase.index') }}">Showcase Management</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons"> local_shipping </i>
                            </div>
                            <p class="card-category">Couriers</p>
                            <h3 class="card-title">{{$nCouriers}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">link</i>
                                <a href="{{ route('courier.index') }}">Courier Management</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons"> shopping_bag </i>
                            </div>
                            <p class="card-category">Orders</p>
                            <h3 class="card-title">{{$nOrders}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">link</i>
                                <a href="{{ route('order.index') }}">Order Management</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons"> info </i>
                            </div>
                            <p class="card-category">Information</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">link</i>
                                <a href="{{ route('information.index') }}">Information Management</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons"> crop_5_4  </i>
                            </div>
                            <p class="card-category">Boxes</p>
                            @foreach($boxes as $box)
                                <h5 class="card-title">{{$box -> name}}</h5>
                            @endforeach
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">link</i>
                                <a href="{{ route('box.index') }}">Box Management</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons"> perm_media </i>
                            </div>
                            <p class="card-category">Media</p>
                            <h3 class="card-title">{{$nMedia}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">link</i>
                                <a href="{{ route('media.index') }}">Media Management</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
@endpush
