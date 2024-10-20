@extends('Admin.admin_dashboard')

@section('content')
    <style>
        .dashboardSidebar {
            background-color: #FA9C14;
        }
    </style>

    <main class="p-3">
        <div class="container-fluid p-4" id="mainContent">
            <div class="row">
                <!-- Stats Cards -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Order</h5>
                            <p class="card-text">+150 <br> Since last month</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Reservation</h5>
                            <p class="card-text">+500 <br> Since last month</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Earning</h5>
                            <p class="card-text">$12,800,000 <br> Since last month</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User</h5>
                            <p class="card-text">+210 <br> Since last month</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings Chart -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">
                                <i class="fa-solid fa-chart-line fs-3"></i>
                                <span class="fs-4">Earning</span>
                            </p>
                            <canvas id="earningsChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
