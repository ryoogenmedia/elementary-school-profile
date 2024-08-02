@extends('dashboard.layouts.index')

@section('title', 'Tambah Extrakulikuler')

@section('content')
    <main id="main" class="main">
        <x-datatable.title title="Tambah Extrakulikuler" pretitle="Menambah extrakulikuler." />

        <x-alert />

        <section class="section">
            <form action="{{ route('extrakulikuler.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header py-0">
                                <div class="text-end">
                                    <a href="{{ route('extrakulikuler.index') }}" class="btn btn-secondary my-3">
                                        Kembali
                                    </a>
                                </div>
                            </div>

                            <div class="card-body py-3">

                                <div class="row mb-3">
                                    <x-form.input id="image" type="file" name="image" label="Gambar" />
                                </div>

                                <div class="row mb-3">
                                    <x-form.input id="name" type="text" name="name" label="Judul Berita" />
                                </div>

                                <div class="row mb-3">
                                    <x-form.textarea id="description" type="text" name="description"
                                        label="Deskripsi Berita" />
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="text-end">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection
