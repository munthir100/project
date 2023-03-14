@extends('admin::Layouts.adminlayout')
@section('title','My store | Settings')

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Statistics Cards</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Cards</a>
                                </li>
                                <li class="breadcrumb-item active">Statistics Cards
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="content-body">
            <div class="demo-spacing-0 mb-2">
                <div class="alert alert-primary" role="alert">
                    <div class="alert-body d-flex align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info me-50">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="16" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        </svg>
                        <span> This feature is available in the advanced package and the professional package,<strong> click here </strong></span>
                    </div>
                </div>
            </div>

            <section id="sections">

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Customize Store Sections</h4>

                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#addItems">
                                    <i data-feather="plus"></i>
                                    <span>
                                        Add item
                                    </span>
                                </button>
                            </div>
                            <div class="col-6" style="text-align: end;">
                                <button type="button" class="btn btn-primary">
                                    <i data-feather="eye"></i>
                                    <span>View Store</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end " tabindex="-1" id="addItems" aria-labelledby="addItemsLabel" style="overflow-y: scroll;">
    <div class="offcanvas-header">
        <h5 id="addItemsLabel" class="offcanvas-title">Items</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="col-12 bg-light">
        <!-- post 1 -->
        <div class="card mt-2" style="width:90%; margin-right: 15px;">
            <div class="card-body">
                <div class="d-flex justify-content-start align-items-center mb-1">
                    <!-- avatar -->

                    <!--/ avatar -->
                    <div class="col-12">
                        <h6 class="mb-0">Dynamic Banner</h6>
                        <hr>
                    </div>
                </div>
                <!-- post img -->
                <img class="img-fluid rounded mb-75" src="https://cdn.mapp.sa/cPanel/images/movingBanner.svg" alt="">
                <!--/ post img -->

            </div>
        </div>

        <div class="card" style="width:90%; margin-right: 15px;">
            <div class="card-body">
                <div class="d-flex justify-content-start align-items-center mb-1">
                    <!-- avatar -->

                    <!--/ avatar -->
                    <div class="col-12">
                        <h6 class="mb-0">Store Features</h6>
                        <hr>
                    </div>
                </div>
                <!-- post img -->
                <img class="img-fluid rounded mb-75" src="https://cdn.mapp.sa/cPanel/images/features.svg" alt="">
                <!--/ post img -->

            </div>
        </div>

        <div class="card" style="width:90%; margin-right: 15px;">
            <div class="card-body">
                <div class="d-flex justify-content-start align-items-center mb-1">
                    <!-- avatar -->

                    <!--/ avatar -->
                    <div class="col-12">
                        <h6 class="mb-0">Dynamic Products</h6>
                        <hr>
                    </div>
                </div>
                <!-- post img -->
                <img class="img-fluid rounded mb-75" src="https://cdn.mapp.sa/cPanel/images/home-products.svg" alt="">
                <!--/ post img -->

            </div>
        </div>

        <div class="card" style="width:90%; margin-right: 15px;">
            <div class="card-body">
                <div class="d-flex justify-content-start align-items-center mb-1">
                    <!-- avatar -->

                    <!--/ avatar -->
                    <div class="col-12">
                        <h6 class="mb-0">Large Banner</h6>
                        <hr>
                    </div>
                </div>
                <!-- post img -->
                <img class="img-fluid rounded mb-75" src="https://cdn.mapp.sa/cPanel/images/bnner.svg" alt="">
                <!--/ post img -->

            </div>
        </div>

        <div class="card" style="width:90%; margin-right: 15px;">
            <div class="card-body">
                <div class="d-flex justify-content-start align-items-center mb-1">
                    <!-- avatar -->

                    <!--/ avatar -->
                    <div class="col-12">
                        <h6 class="mb-0">Single Banner</h6>
                        <hr>
                    </div>
                </div>
                <!-- post img -->
                <img class="img-fluid rounded mb-75" src="https://cdn.mapp.sa/cPanel/images/banner02.svg" alt="">
                <!--/ post img -->

            </div>
        </div>

        <div class="card" style="width:90%; margin-right: 15px;">
            <div class="card-body">
                <div class="d-flex justify-content-start align-items-center mb-1">
                    <!-- avatar -->

                    <!--/ avatar -->
                    <div class="col-12">
                        <h6 class="mb-0">Images</h6>
                        <hr>
                    </div>
                </div>
                <!-- post img -->
                <img class="img-fluid rounded mb-75" src="https://cdn.mapp.sa/cPanel/images/square.svg" alt="">
                <!--/ post img -->

            </div>
        </div>

        <div class="card" style="width:90%; margin-right: 15px;">
            <div class="card-body">
                <div class="d-flex justify-content-start align-items-center mb-1">
                    <!-- avatar -->

                    <!--/ avatar -->
                    <div class="col-12">
                        <h6 class="mb-0">Youtube Vedio</h6>
                        <hr>
                    </div>
                </div>
                <!-- post img -->
                <img class="img-fluid rounded mb-75" src="https://cdn.mapp.sa/cPanel/images/youtube.svg" alt="">
                <!--/ post img -->

            </div>
        </div>

        <div class="card" style="width:90%; margin-right: 15px;">
            <div class="card-body">
                <div class="d-flex justify-content-start align-items-center mb-1">
                    <!-- avatar -->

                    <!--/ avatar -->
                    <div class="col-12">
                        <h6 class="mb-0">Customers Comments</h6>
                        <hr>
                    </div>
                </div>
                <!-- post img -->
                <img class="img-fluid rounded mb-75" src="https://cdn.mapp.sa/cPanel/images/testimonials.svg" alt="">
                <!--/ post img -->

            </div>
        </div>
        <!--/ post 1 -->

    </div>
</div>
@endsection


@section('styles')
<link rel="stylesheet" href="{{asset('frontend/assets/fonts/fontawesome/css/all.min.css')}}" />

@endsection

@section('scripts')
@endsection