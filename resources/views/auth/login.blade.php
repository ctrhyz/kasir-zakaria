<!doctype html>
<html data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kasir | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background-color: rgba(0, 12, 27, 1)">
    <main class="mb-5 d-flex justify-content-center">
        {{-- Form Login --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible d-flex align-items-center fade show mt-4" role="alert"
                style="position: absolute; width: 28rem">
                <div><i class="bi bi-emoji-sunglasses me-2"></i>{{ session('success') }}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('wrong'))
            <div class="alert alert-danger alert-dismissible d-flex align-items-center fade show mt-4" role="alert"
                style="position: absolute; width: 28rem">
                <div><i class="bi bi-emoji-astonished me-2"></i>{{ session('wrong') }}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="container pt-5 d-flex justify-content-center">
            <div class="container pt-3 d-flex justify-content-center">
                <div class="container d-flex justify-content-center pt-5">
                    <div class="container border border-primary rounded-4 d-flex table-responsive"
                        style="width: 23rem; height: 37rem;">
                        <div class="container my-5" style="width: 20rem; margin-top: 3rem;">
                            <center>
                                <h1 class="pt-4">Login</h1>
                            </center>
                            <form action="/login" method="POST">
                                @csrf
                                <div class="mb-3 pt-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" style="background-color: rgba(0, 46, 107, 0.60)"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="youremail@example.com" name="email" autofocus required id="email"
                                        value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                <small>{{ $message }}</small>
                                            </div>
                                        @enderror
                                </div>
                                <div class="mb-4 pt-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" style="background-color: rgba(0, 46, 107, 0.60)"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Your Password" name="password" required id="password">
                                        @error('password')
                                            <div class="invalid-feedback">
                                                <small>{{ $message }}</small>
                                            </div>
                                        @enderror
                                </div>
                                <center><button type="submit" class="mt-4 pt-2 mb-4 btn btn-primary"
                                        style="width: 17rem">Login</button></center>
                                <center><small>Don't have a account? <a href="/register">Register!</a></small></center>
                                <center><p class="pt-3"><small><i>If you forgot your email or password, Please contact <a target="_blank" href="http://wa.me/6285748440529?text=Aku+Lupa+Email+Dan+Passwordku!">Admin!</a></i></small></p></center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Form Login --}}
    </main>
    <footer class="fixed-bottom py-1 d-block small text-center" style="background-color: rgba(0, 12, 27, 1)">
        <!-- Grid container -->
        <div class="container"></div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center">
            © 2024 Copyright:
            <a class="text-body text-decoration-none link-danger"
                href="https://kasir-zakaria.test/"><i>kasir-zakaria.test</i></a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
