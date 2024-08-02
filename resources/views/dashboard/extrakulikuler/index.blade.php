@extends('dashboard.layouts.index')

@section('title', 'Extrakulikuler')

@section('content')
    <main id="main" class="main">
        <x-datatable.title title="Extrakulikuler" pretitle="Daftar extrakulikuler anda berada disini." />

        <x-alert />

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">

                            <div class="text-end">
                                <a href="{{ route('extrakulikuler.create') }}" class="btn btn-primary my-3">
                                    Tambah Extrakulikuler
                                </a>
                            </div>

                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Nama Kulikuler</th>
                                        <th>Deskripsi Kulikuler</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rows as $row)
                                        <tr>
                                            <td>
                                                <div class="d-flex gap-3">
                                                    <img class="rounded-2"
                                                        style="width: 80px; height: 80px; object-fit: cover;"
                                                        src="{{ asset('storage/' . $row->image) }}"
                                                        alt="gambar-berita-{{ $row->name }}">

                                                    <div>
                                                        {{ $row->name }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $row->description }}</td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <form action="{{ route('extrakulikuler.delete', $row->id) }}"
                                                        method="POST" class="delete-form">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                    <a href="{{ route('extrakulikuler.edit', $row->id) }}"
                                                        class="btn btn-primary">Sunting</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteForms = document.querySelectorAll('.delete-form');
            deleteForms.forEach(form => {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    if (confirm('Apakah Anda yakin ingin menghapus berita ini?')) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
