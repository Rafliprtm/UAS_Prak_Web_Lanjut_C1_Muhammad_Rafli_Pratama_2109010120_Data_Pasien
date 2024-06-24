@extends('layout.master')

@section('title', 'jadwal hadir')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pasien</h1>
            </div>

            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        {{-- <h4>Jadwal Hadir</h4> --}}
                        <form action="/kehadiran" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6" style="text-align: right">
                                    <a href="kehadiran/create" class="btn btn-warning btn-sm">Tambah Pasien</a>
                                </div>

                            </div>

                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-stripeed">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID PASIEN</th>
                                <th>NAMA PASIEN</th>
                                <th>TANGGAL LAHIR</th>
                                <th>JENIS KELAMIN</th>
                                <th>ALAMAT</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>121212</td>
                                <td>DIMAS</td>
                                <td>10-05-2001</td>
                                <td>PRIA</td>
                                <td>MEDAN</td>
                                <td>
                                    <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-sm btn-warning"><i class="fa fa-trash"></i></button>

                                </td>
                                </form>

                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>
    </div>
    </div>
    </section>

@endsection
