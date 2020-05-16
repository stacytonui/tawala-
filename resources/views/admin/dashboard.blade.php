@extends('layouts.dashboard')

@section('admin_content')
            <!-- / .main-navbar -->
            <div class="main-content-container container-fluid px-4">
                <!-- Page Header -->
                <div class="page-header row no-gutters py-4">
                    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                        <span class="text-uppercase page-subtitle">Dashboard</span>

                    </div>
                </div>
                <!-- End Page Header -->
                <!-- Small Stats Blocks -->
                <div class="row">
                    <div class="col-lg col-md-6 col-sm-6 mb-4">
                        <div class="stats-small stats-small--1 card card-small">
                            <div class="card-body p-0 d-flex">
                                <div class="d-flex flex-column m-auto">
                                    <div class="stats-small__data text-center">
                                        <span class="stats-small__label text-uppercase">Users</span>
                                        <h6 class="stats-small__value count my-3">{{ $userCount }}</h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-6 col-sm-6 mb-4">
                        <div class="stats-small stats-small--1 card card-small">
                            <div class="card-body p-0 d-flex">
                                <div class="d-flex flex-column m-auto">
                                    <div class="stats-small__data text-center">
                                        <span class="stats-small__label text-uppercase">Orders</span>
                                        <h6 class="stats-small__value count my-3">{{ $ordersCount }}</h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-4 col-sm-6 mb-4">
                        <div class="stats-small stats-small--1 card card-small">
                            <div class="card-body p-0 d-flex">
                                <div class="d-flex flex-column m-auto">
                                    <div class="stats-small__data text-center">
                                        <span class="stats-small__label text-uppercase">Sales</span>
                                        <h6 class="stats-small__value count my-3">{{ $salesCount }}</h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-4 col-sm-6 mb-4">
                        <div class="stats-small stats-small--1 card card-small">
                            <div class="card-body p-0 d-flex">
                                <div class="d-flex flex-column m-auto">
                                    <div class="stats-small__data text-center">
                                        <span class="stats-small__label text-uppercase">Pending Orders</span>
                                        <h6 class="stats-small__value count my-3">{{ $pendingCount }}</h6>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-md-4 col-sm-12 mb-4">
                        <div class="stats-small stats-small--1 card card-small">
                            <div class="card-body p-0 d-flex">
                                <div class="d-flex flex-column m-auto">
                                    <div class="stats-small__data text-center">
                                        <span class="stats-small__label text-uppercase">Completed Orders</span>
                                        <h6 class="stats-small__value count my-3">{{ $completedCount }}</h6>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Small Stats Blocks -->
                <div class="row">
                    <!-- Users Stats -->
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <div class="card card-small">
                            <div class="card-header border-bottom">
                                <h6 class="m-0">Users</h6>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row border-bottom py-2 bg-light">
                                    <div class="col-12 col-sm-6">
                                        <div id="blog-overview-date-range" class="input-daterange input-group input-group-sm my-auto ml-auto mr-auto ml-sm-auto mr-sm-0" style="max-width: 350px;">
                                            <input type="text" class="input-sm form-control" name="start" placeholder="Start Date" id="blog-overview-date-range-1">
                                            <input type="text" class="input-sm form-control" name="end" placeholder="End Date" id="blog-overview-date-range-2">
                                            <span class="input-group-append">
                            <span class="input-group-text">
                              <i class="material-icons"></i>
                            </span>
                          </span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 d-flex mb-2 mb-sm-0">

                                    </div>
                                </div>
                                <canvas height="130" style="max-width: 100% !important;" class="blog-overview-users"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- End Top Referrals Component -->
                </div>
            </div>
@endsection
