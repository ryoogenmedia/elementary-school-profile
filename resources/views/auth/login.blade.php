@extends('auth.layouts.index')

@section('content')
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="d-flex justify-content-center py-4">
                                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                                        <img src="assets/img/logo.png" alt="">
                                        <span class="d-none d-lg-block">Ryoogen Media</span>
                                    </a>
                                </div>

                                <div class="card mb-3">

                                    <div class="card-body">

                                        <div class="pt-4 pb-2">
                                            <h5 class="card-title text-center pb-0 fs-4">Masuk Ke Aplikasi</h5>
                                            <p class="text-center small">Masukkan email dan password untuk masuk.</p>
                                        </div>

                                        <form class="row g-3 needs-validation" novalidate>

                                            <div class="col-12">
                                                <label for="email" class="form-label">Email</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    <input type="text" name="email" class="form-control" id="email"
                                                        required>
                                                    <div class="invalid-feedback">Email wajib diisi.</div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control" id="password"
                                                    required>
                                                <div class="invalid-feedback">Password wajib diisi.</div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        value="true" id="rememberMe">
                                                    <label class="form-check-label" for="rememberMe">Kenali akun
                                                        saya.</label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button class="btn btn-primary w-100" type="submit">Masuk</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                                <div class="credits">
                                    Powered by <a href="https://github.com/ryoogenmedia">ryoogen media</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
