@extends('Admin.admin_dashboard')

@section('content')
    <style>
        .menuSidebar {
            background-color: #FA9C14;
        }

        .form-control {
            border-radius: 20px;
        }

        .btn {
            color: white;
        }

        .recentMenuCard {
            background-color: #F2D55F;
            max-width: 100%;
            border-start-start-radius: 30px;
        }

        .recentMenuRow {
            color: black;
        }

        img {
            border-radius: 0%;
        }
    </style>

    <main class="p-3">
        <div class="container-fluid p-4 pt-0" id="mainContent">
            <!-- Tambah Menu -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card container-fluid rounded" style="background-color: #F2D55F">
                        <div class="row m-3">
                            <h2>Tambah dan Kelola Menu</h2>
                        </div>
                        <div class="row">
                            <div class="container-fluid d-flex flex-column justify-content-center p-0">
                                <form class="container-fluid p-0">
                                    <div class="ms-5">
                                        <p class="m-0" style="padding-left:1vw;"><strong>Nama Menu</strong></p>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="namaMenu" placeholder="Nama Menu" style="width:60%;" required>
                                            <label for="namaMenu" style="padding-left:2vw;">Nama Menu</label>
                                        </div>

                                        <p style="padding-left:1vw;margin:0;margin-top:2vh;"><strong>Harga</strong></p>
                                        <div class="form-floating mb-2">
                                            <input type="text" class="form-control" id="harga" placeholder="Harga" style="width:60%;" required>
                                            <label for="harga" style="padding-left:2vw;">Harga</label>
                                        </div>

                                        <p style="padding-left:1vw;margin:0;margin-top:2vh;">Gambar</p>
                                        <div class="form-floating-fluid">
                                            <input type="file" class="form-control" id="gambar" placeholder="Gambar" style="width:80%;" required>
                                        </div>
                                    </div>

                                    <div class="container-fluid mt-3 d-flex justify-content-end align-items-center"
                                        style="background-color: #ED7804; height: 7vh;">
                                        <button class="btn btn-danger mx-2 rounded-pill fw-bold" type="reset">
                                            CANCEL
                                        </button>
                                        <button class="btn btn-success mx-2 rounded-pill fw-bold" type="submit">
                                            ADD
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Recently Added Menu --}}
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card container-fluid p-3" style="background-color: #ffffff">
                        <div class="row m-3">
                            <h5>Recently Added Menu</h5>
                        </div>
                        @for ($i = 0; $i < 3; $i++)
                            <div class="card recentMenuCard my-2 p-0 mx-5">
                                <div class="row recentMenuRow">
                                    <div class="col d-flex justify-content-start">
                                        <img src="{{ asset('image/japchae.png') }}" class="img-fluid">
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <h3 class="fw-bold my-4">Japchae</h3>
                                        </div>
                                        <div class="row my-3">
                                            <h4>Category: <Strong>Noodles</Strong></h4>
                                        </div>
                                        <div class="row">
                                            <h4>Price: <Strong>Rp 85.000</Strong></h4>
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-end align-items-end me-4 mb-2">
                                        <a href="{{ url('admin_editMenu') }}">
                                            <button class="btn btn-success rounded-pill" style="color: rgb(255, 255, 255);">
                                                EDIT
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
