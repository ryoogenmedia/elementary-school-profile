@extends('dashboard.layouts.index')

@section('title', 'Sunting Slider')

@section('content')
    <main id="main" class="main">
        <x-datatable.title title="Sunting Slider" pretitle="Menyunting slider." />

        <x-alert />

        <section class="section">
            <form action="{{ route('carousel.update', $carousel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header py-0">
                                <div class="text-end">
                                    <a href="{{ route('carousel.index') }}" class="btn btn-secondary my-3">
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
                                    <x-form.input id="title" type="text" name="title" label="Judul"
                                        value="{{ $carousel->title }}" />
                                </div>

                                <div class="row mb-3">
                                    <x-form.input id="pretitle" type="text" name="pretitle" label="Sub Judul"
                                        value="{{ $carousel->pretitle }}" />
                                </div>

                                <div class="row mb-3">
                                    <x-form.textarea id="description" type="text" name="description" label="Deskripsi"
                                        value="{{ $carousel->description }}" />
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
