@extends('dashboard.layouts.index')

@section('title', 'Profil')

@section('content')
    <main id="main" class="main">
        <x-datatable.title title="Profil" pretitle="Profil akun anda berada disini." />

        <x-alert />

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <img style="width: 150px; height: 120px; object-fit: cover; overflow: hidden"
                                src="{{ auth()->user()->avatarUrl() }}" alt="Profile" class="rounded-circle">
                            <h2>{{ auth()->user()->username }}</h2>
                            <h3>admin</h3>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <div class="tab-content pt-2">
                                <div class="tab-pane fade show active profile-overview">
                                    <h5 class="card-title">Sunting Profil</h5>

                                    <form action="{{ route('profile.update', auth()->user()->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf

                                        <div class="row mb-3">
                                            <x-form.input id="avatar" type="file" name="avatar" label="Avatar" />
                                        </div>

                                        <div class="row mb-3">
                                            <x-form.input id="username" type="text" name="username"
                                                label="Username (Nama Pengguna)" value="{{ $data->username }}" />
                                        </div>

                                        <div class="row mb-3">
                                            <x-form.input id="email" type="text" name="email"
                                                label="Alamat Surel (Email)" value="{{ $data->email }}"
                                                optional="Abaikan jika tidak ingin mengubah." />
                                        </div>

                                        <div class="row mb-3">
                                            <x-form.input id="password" type="text" name="password"
                                                label="Kata Sandi (Password)"
                                                optional="Kosongkan jika tidak ingin mengubah." />
                                        </div>

                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Sunting</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
