@extends('Admin.admin_dashboard')

@section('content')
    <style>
        .menuSidebar {
            background-color: #FA9C14;
        }
    </style>

    <main class="p-3">
        <div class="container-fluid p-4" id="mainContent">
            <!-- User Chart -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">
                                <i class="fa-solid fa-chart-line fs-3"></i>
                                <span class="fs-4">Earning</span>
                            </p>
                            <canvas id="userChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
