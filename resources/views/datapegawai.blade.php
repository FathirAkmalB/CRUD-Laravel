<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Laravel-1</title>

    <style>

    </style>
</head>

<body>

    <div class="container">
        <h1 class="text-center mt-4">Data Pegawai</h1>
        <h5 class="text-center mb-4 ">Video #3</h5>
        <a href="/tambahdata" class="btn btn-dark">+Tambah Data</a>
        <div class="row">
            @if ($message = Session::get('succsess'))
                <div class="alert alert-secondary" role="alert">
                   {{ $message }}
                </div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @php
                     $no = 1;   
                    @endphp

                    @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ $no++}}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->jeniskelamin }}</td>
                            <td>{{ $row->notelpon }}</td>
                            <td>{{ $row->created_at}}
                                {{-- //->format('D M Y')->diffForHumans() }} --}}
                            </td>
                            <td>
                                <a href="/hapus/{{ $row->id }}" class="btn btn-danger">Hilangkan</a>
                                <a href="/tampildata/{{ $row->id }}" class="btn btn-primary">Ubah Takdir</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
