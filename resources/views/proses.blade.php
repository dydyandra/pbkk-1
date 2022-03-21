@extends('layouts.template')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-6">
        {{-- untuk flash message sukses  --}}
        <div class="alert alert-success">
            <button type="button" class="close close-alert" data-dismiss="alert">x</button>
            {{ session()->get('success') }}
        </div>
        <div class="card mt-5">
            <div class="card-body">
                <h3>Isian Form</h3>
                <h3 class="my-4">Data Yang Di Input: </h3>

                <table class="table table-bordered table-striped">
                    {{-- menampilkan isian form --}}
                    <tr>
                        <td style="width:150px"><strong>Nama Lengkap</td>
                        <td>{{ $data->nama }}</td>
                    </tr>
                    <tr>
                        <td><strong>NRP</td>
                        <td>{{ $data->nrp }}</td>
                    </tr>
                    <tr>
                        <td><strong>Departemen</td>
                        <td>{{ $data->departemen }}</td>
                    </tr>
                    <tr>
                        <td><strong>Kota Asal</td>
                        <td>{{ $data->kota }}</td>
                    </tr>
                    <tr>
                        <td><strong>IPK</td>
                        <td>{{ $data->ipk }}</td>
                    </tr>
                    <tr>
                        <td><strong>Pas Foto</td>
                        <td>
                            {{-- untuk menampilkan gambar pada halaman --}}
                            <img src="{{ asset('images/' . $data->gambar) }}" class="img-thumbnail"
                                alt="Pas Foto">

                                {{-- <img src="{{ asset('images/'.$data->gambar) }}" alt="tes" title="" /> --}}
                        </td>
                    </tr>
                </table>

                <a href="/input" class="btn btn-primary" style="background-color:blue; width:100%">Kembali ke Form</a>

            </div>
        </div>
    </div>
</div>
@endsection

