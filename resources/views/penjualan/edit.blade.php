<!doctype html>
<html data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Penjualan | Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background-color: rgba(0, 12, 27, 1)">

    <header>
        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg text-light navbar-dark" style="background-color: rgba(0, 46, 107, 0.60);">
            <div class="container-fluid ps-lg-5">
                <a class="navbar-brand fw-bold" href="/dashboard"><i class="bi bi-speedometer"> Dashboard</i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/produk"><i class="bi bi-box-seam"></i>
                                Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pelanggan"><i
                                    class="bi bi-person-heart"></i> Pelanggan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/penjualan"><i class="bi bi-cash-stack"></i> Penjualan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/detailpenjualan"><i class="bi bi-receipt"></i> Detail
                                Penjualan</a>
                        </li>
                    </ul>
                    <br>
                    <li class="nav-item dropdown d-flex pe-5 me-5">

                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="true">
                            <i class="bi bi-person-circle pe-1"></i>
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item disabled text-light" href="#"><i
                                        class="bi bi-person-vcard"></i> Role: {{ auth()->user()->role }}</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> My Profile</a></li>
                            <li><a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                    <br>
                </div>
            </div>
        </nav>
    </header>
    <main class="mb-5">
        {{-- Form Edit --}}
        <div class="container pt-4">
            <div class="container">
                <div class="container d-flex justify-content-center pt-5">
                    <div class="container border border-primary rounded-4 d-flex table-responsive" style="width: 23rem; height: 39.4rem;">
                        <div class="pt-4 ps-3" style="position: absolute;">
                        <a class="btn btn-close" href="/penjualan"></a>
                    </div>
                        <div class="container my-5" style="width: 20rem; margin-top: 3rem; padding-top: 1rem">
                            <center><h3>Edit Data Penjualan <span><u>{{ $penjualan->PenjualanID }}</u></span></h3></center>
                            <center><h4><span><i><u>{{ $penjualan->TanggalPenjualan }}</u></span></i></h4></center>
                            <form action="/penjualan/{{ $penjualan->PenjualanID }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="mb-3 pt-3">
                                    <label for="PenjualanID" class="form-label">PenjualanID</label>
                                    <input type="number" style="background-color: rgba(0, 46, 107, 0.60)"
                                        class="form-control" value="{{ $penjualan->PenjualanID }}" placeholder="Masukkan ID Penjualan" name="PenjualanID" required autofocus
                                        id="PenjualanID">
                                </div>
                                <div class="mb-3">
                                    <label for="TanggalPenjualan" class="form-label">TanggalPenjualan</label>
                                    <input type="date" style="background-color: rgba(0, 46, 107, 0.60)"
                                        class="form-control" value="{{ $penjualan->TanggalPenjualan }}" placeholder="Masukkan Tanggal Penjualan" name="TanggalPenjualan"
                                        required id="TanggalPenjualan">
                                </div>
                                <div class="mb-3">
                                    <label for="TotalHarga" class="form-label">TotalHarga</label>
                                    <input type="number" style="background-color: rgba(0, 46, 107, 0.60)"
                                        class="form-control" value="{{ $penjualan->TotalHarga }}" placeholder="Masukkan Total Harga" name="TotalHarga"
                                        required id="TotalHarga">
                                </div>
                                <div class="mb-3">
                                    <label for="PelangganID" class="form-label">PelangganID</label>
                                    <input type="number" style="background-color: rgba(0, 46, 107, 0.60)"
                                        class="form-control" value="{{ $penjualan->PelangganID }}" placeholder="Masukkan ID Pelanggan" name="PelangganID"
                                        required id="PelangganID">
                                </div>
                                <center><button type="submit" class="mt-4 pt-2 mb-4 btn btn-primary" style="width: 17rem">Save</button></center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Form Edit --}}
    </main>
    <footer class="fixed-bottom py-1 d-block small text-center" style="background-color: rgba(0, 12, 27, 1)">
        <!-- Grid container -->
        <div class="container"></div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center">
            © 2024 Copyright:
            <a class="text-body text-decoration-none link-danger" href="https://kasir-zakaria.test/"><i>kasir-zakaria.test</i></a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
