<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation Form</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
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
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
