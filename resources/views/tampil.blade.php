<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Laravel-1 #5</title>

    <style>
        
    </style>
  </head>
  <body>
      
      <div class="container">
          <h1 class="text-center mt-4">Edit Data Pegawai</h1>
          <h5 class="text-center mb-4 ">Video #5</h5>
            <div class="row justify-content-center">
                <div class="col-8 ">

                    <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama</label>
                          <input auto type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Gender</label>
                          <select class="form-select form-select-ms mb-3" name="jeniskelamin" aria-label=".form-select-lg example">
                            <option selected>{{ $data->jeniskelamin }}</option>
                            <option value="cowo">cowo</option>
                            <option value="cewe">cewe</option>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Notelpon</label>
                          <input type="number" name="notelpon" class="form-control" id="exampleInputPassword1" value="{{ $data->notelpon }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                      </form>
                </div>
            </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>