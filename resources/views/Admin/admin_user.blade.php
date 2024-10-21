@extends('Admin.admin_dashboard')

@section('content')
    <style>
        .userSidebar {
            background-color: #FA9C14;
        }

        .recentUserCard {
            background-color: #F2D55F;
            max-width: 100%;
        }

        .recentUserRow {
            color: black;
        }
    </style>

    <main class="p-3">
        <div class="container-fluid p-4 pt-0" id="mainContent">
            <!-- Recent User -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card container-fluid">
                        <div class="row">
                            <h2>Recent User</h2>
                        </div>
                        <div class="row">
                            <div class="container-fluid d-flex flex-column justify-content-center">
                                @for ($i = 0; $i < 3; $i++)
                                    <div class="card recentUserCard my-2 py-3">
                                        <div class="row recentUserRow">
                                            <div class="col d-flex justify-content-start align-items-center">
                                                <i class="fa-solid fa-user mx-3" style="color: black;"></i>
                                                <span class="fw-bold">Janice</span>
                                            </div>
                                            <div class="col d-flex justify-content-center align-items-center">
                                                <p class="mb-0" style="color: black;">October 18 2024, 10:30 PM</p>
                                            </div>
                                            <div class="col d-flex justify-content-end align-items-center">
                                                <button class="btn btn-success rounded-pill" style="color: rgb(255, 255, 255);">
                                                    VIEW
                                                </button>
                                                <button class="btn btn-danger rounded-pill mx-3" style="color: rgb(255, 255, 255);">
                                                    DELETE
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User Chart -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">
                                <i class="fa-solid fa-chart-line fs-3"></i>
                                <span class="fs-4">User Activity</span>
                            </p>
                            <canvas id="userChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
