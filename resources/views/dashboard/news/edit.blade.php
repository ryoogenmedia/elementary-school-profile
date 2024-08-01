@extends('dashboard.layouts.index')

@section('title', 'Sunting Berita')

@section('content')
    <main id="main" class="main">
        <x-datatable.title title="Sunting Berita" pretitle="Menyunting berita." />

        <x-alert />

        <section class="section">
            <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header py-0">
                                <div class="text-end">
                                    <a href="{{ route('news.index') }}" class="btn btn-secondary my-3">
                                        Kembali
                                    </a>
                                </div>
                            </div>

                            <div class="card-body py-3">

                                <div class="row mb-3">
                                    <x-form.input id="image" type="file" name="image" label="Gambar"
                                        optional="Abaikan jika tidak ingin mengubah." />
                                </div>

                                <div class="row mb-3">
                                    <x-form.input id="title" type="text" name="title" label="Judul Berita"
                                        value="{{ $news->title }}" />
                                </div>

                                <div class="row mb-3">
                                    <x-form.textarea id="description" type="text" name="description"
                                        label="Deskripsi Berita" value="{{ $news->description }}" />
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
