<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Toko Bunga</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet"/>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <style>
        </style>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-black">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3  mt-2 fs-5" href="#" >Toko Bunga</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                </li>
            </ul>
            <a href="/logout" class="btn btn-success mb-3">logout</a>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark " id="sidenavAccordion">
                    <div class="sb-sidenav-menu bg-black">
                        <div class="nav mt-5">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                                Dashboard
                            </a>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mt-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Toko Bunga</li>
                        </ol>
                        <a href="/tambahbunga" class="btn btn-success mb-3">Tambah</a>
                        @if ($massage = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                            Berhasil
                            </div>
                        @endif
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Bunga</th>
                                <th scope="col">Foto Bunga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php
                                  $no = 1    
                                @endphp
                                  @foreach ($data as $row)
                                  <tr>
                                      <th scope="row">{{ $no++ }}</th>
                                      <td>{{$row->Nama}}</td>
                                      <td>
                                        <img src="{{ asset('fotobunga/' . $row->Foto) }}" alt="" style="width: 40px;">
                                      </td>
                                      <td>{{$row->Stok}}</td>
                                      <td>{{$row->Harga}}</td>
                                      <td>
                                        <form action="/delete/{{ $row->id }}" method="POST">
                                          <a href="/tampilbunga/{{ $row->id }}" type="button" class="btn btn-info">Edit</a>
                                          @method('DELETE')
                                          @csrf
                                          <button type="submit" class="btn btn-danger">Delete</button>
                                      </form>
                                      </td>
                                    </tr>
                                  @endforeach
                              </tbody>            
                        </table>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>