@extends('dashboard.layouts.index')

@section('title', 'Kontak')

@section('content')
    <main id="main" class="main">
        <x-datatable.title title="Kontak" pretitle="Kontak anda berada disini." />

        <x-alert />

        <section class="section">
            <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body py-3">

                                <div class="row mb-3">
                                    <x-form.input id="name_school" type="text" name="name_school" label="Nama Sekolah"
                                        value="{{ $contact->name_school ?? '' }}" />
                                </div>

                                <div class="row mb-3">
                                    <x-form.input id="operational" type="text" name="operational" label="Operasional"
                                        value="{{ $contact->operational ?? '' }}" />
                                </div>

                                <div class="row mb-3">
                                    <x-form.input id="phone" type="text" name="phone" label="Nomor Ponsel Sekolah"
                                        value="{{ $contact->phone ?? '' }}" />
                                </div>

                                <div class="row mb-3">
                                    <x-form.input id="email" type="text" name="email_school"
                                        label="Email Ponsel Sekolah" value="{{ $contact->email_school ?? '' }}" />
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <x-form.input id="total_teacher" type="number" name="total_teacher"
                                            label="Total Pengajar" value="{{ $contact->total_teacher ?? '' }}" />
                                    </div>

                                    <div class="col-lg-3">
                                        <x-form.input id="total_staff" type="number" name="total_staff" label="Total Staff"
                                            value="{{ $contact->total_staff ?? '' }}" />
                                    </div>

                                    <div class="col-lg-3">
                                        <x-form.input id="total_student" type="number" name="total_student"
                                            label="Total Murid" value="{{ $contact->total_student ?? '' }}" />
                                    </div>

                                    <div class="col-lg-3">
                                        <x-form.input id="total_alumni" type="number" name="total_alumni"
                                            label="Total Alumni" value="{{ $contact->total_alumni ?? '' }}" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <x-form.textarea id="address" type="text" name="address" label="Alamat Sekolah"
                                        value="{{ $contact->address ?? '' }}" />
                                </div>

                                <div class="row mb-3">
                                    <x-form.textarea id="slogan" type="text" name="slogan" label="Slogan Sekolah"
                                        value="{{ $contact->slogan ?? '' }}" />
                                </div>

                                <div class="row mb-3">
                                    <x-form.textarea id="about" type="text" name="about" label="Tentang Sekolah"
                                        value="{{ $contact->about ?? '' }}" />
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
