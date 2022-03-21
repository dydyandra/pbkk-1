@extends('layouts.template')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card mt-4">
            <div class="card-body">
                <h3 class="text-center">Form Validasi PBKK</h3>
                <h5 class="text-center">Dyandra Paramitha</h5>
                <h5 class="text-center">05111940000119</h5>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <br />
                <!-- form validasi -->
                <form action="/proses" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                    </div>
                    <div class="form-group">
                        <label for="nrp">NRP Mahasiswa</label>
                        <input class="form-control" type="text" name="nrp" value="{{ old('nrp') }}">
                    </div>
                    <div class="form-group">
                        <label for="departemen">Departemen</label><br>
                        {{-- <input class="form-control" type="text" name="departemen"
                            value="{{ old('departemen') }}">  --}}
                        <select name="departemen" id="departemen" value="{{ old('departemen') }}"">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknik Biomedik">Teknik Biomedik</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <input class="form-control" type="text" name="kota" value="{{ old('kota') }}">
                    </div>
                    <div class="form-group">
                        <label for="ipk">IPK</label>
                        <input class="form-control" type="text" name="ipk" value="{{ old('ipk') }}">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Pas Foto</label>
                        <input type="file" class="form-control-file" id="gambar" name="gambar">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Submit"
                            style="background-color:blue; width:100%">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

