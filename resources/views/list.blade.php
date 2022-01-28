<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <title>List Data Siswa</title>
  </head>
  <body>
      @include('includes.navbar')
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <table id="table_siswa" class="display">
                      <thead>
                          <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Lahir</th>
                              <th scope="col">Hoby</th>
                              <th scope="col">Gender</th>
                              <th scope="col">Agama</th>
                              <th scope="col">Alamat</th>
                              <th scope="col">Telp</th>
                              <th scope="col">Email</th>
                              <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($siswas as $siswa)
                        <tr>
                            <td>{{$siswa->id}}</td>
                            <td>{{$siswa->nama}}</td>
                            <td>{{$siswa->lahir}}</td>
                            <td>{{$siswa->hobi}}</td>
                            <td>{{$siswa->jk}}</td>
                            <td>{{$siswa->agama}}</td>
                            <td>{{$siswa->alamat}}</td>
                            <td>{{$siswa->telp}}</td>
                            <td>{{$siswa->email}}</td>
                            <td>
                                <button type="button" class="btn btn-warning">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-primary">Read</button>

                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
              <a href="/tambah_siswa"><button type="button" class="btn btn-primary">Tambah Siswa</button></a>
          </div>
      </div>

      	<script>
        $(document).ready( function () {
            $('#table_siswa').DataTable();
        } );
        </script>
</body>
    <!-- Datatables -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
</html>
