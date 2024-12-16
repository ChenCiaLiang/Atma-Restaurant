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

        .editMenu{
            background-color: #E2D8AD;
            max-width: 90%;
            border-radius: 20px;
            padding: 0%;
        }

        img {
            border-radius: 0%;
        }
    </style>

    <main class="p-3">
        <div class="container-fluid p-4 pt-0" id="mainContent">
            <!-- Tambah Menu -->
            <div class="row mt-4 d-flex justify-content-center">
                <div class="col-8">
                    <div class="card container-fluid" style="background-color: #F2D55F">
                        <div class="row">
                            <div class="col-4 m-4">
                                <img src="{{asset($menu->gambar_makanan)}}" class="img-fluid">
                            </div>
                            <div class="col mt-4">
                                <h5>Nama Menu:</h5>
                                <h4 class="fw-bold">{{$menu->nama}}</h4>
                                <h5>Harga:</h5>
                                <h4 class="fw-bold">{{$menu->harga}}</h4>
                                <h5>Jenis:</h5>
                                <h4 class="fw-bold">{{$menu->jenis}}</h4>
                            </div>
                        </div>
                        <div class="row">
                            <h5 class="fw-bold ms-4">Edit Menu</h5>
                            <div class="container-fluid d-flex flex-column justify-content-center editMenu mb-4" style="background-color: #E2D8AD; max-width: 90%; border-radius: 20px;">
                                <form class="container-fluid p-0" action="{{route('menu.update', $menu->id_menu) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mx-3">
                                        <p class="m-0" style="padding-left:1vw;">Nama Menu</p>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="namaMenu" name="nama" style="padding-left:2.2rem;"
                                                placeholder="Nama Menu" required>
                                            <label for="namaMenu" style="padding-left:2vw;">Nama Menu</label>
                                        </div>

                                        <p style="padding-left:1vw;margin:0;margin-top:2vh;">Harga</p>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="harga" placeholder="Harga" name="harga" style="padding-left:2.2rem;"required>
                                            <label for="harga" style="padding-left:2vw;">Harga</label>
                                        </div>
                                        
                                        <p style="padding-left:1vw;margin:0;margin-top:2vh;">Jenis</p>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="jenis" placeholder="Jenis Menu" name="jenis" style="padding-left:2.2rem;"required>
                                            <label for="jenis" style="padding-left:2vw;">Jenis Menu</label>
                                        </div>
                                        
                                        <p style="padding-left:1vw;margin:0;margin-top:2vh;">Gambar</p>
                                        <div class="form-floating-fluid">
                                            <input type="file" class="form-control" id="gambar" placeholder="Gambar" name="gambar_makanan">
                                        </div>
                                    </div>

                                    <div class="container-fluid mt-3 d-flex justify-content-end align-items-center">
                                        
                                        <button class="btn btn-danger mx-2 mb-2 rounded-pill fw-bold" type="reset">
                                            CANCEL
                                        </button>
                                        
                                        
                                        <button class="btn btn-success mx-2 mb-2 rounded-pill fw-bold" type="submit">
                                            SAVE
                                        </button>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
