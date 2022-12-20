<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
.table {
    border: 1px solid;
}
/* th {
    border-right: 1px solid;
} */

</style>
<body>

    <h1>Hello Word</h1>
    <div>
        <form action="{{route('mhs_store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div>
                <div style="padding: 10px">
                    <input type="text" class="form-control" name="nama" 
                    placeholder="Nama" >
                </div>
                <div style="padding: 10px">
                    <input type="text" class="form-control" name="nim" 
                    placeholder="NIM" >
                </div>
                <div style="padding: 10px">
                    <input type="text" class="form-control" name="prodi" 
                    placeholder="Prodi" >
                </div>
                <div style="padding: 10px">
                    <input type="text" class="form-control" name="alamat" 
                    placeholder="Alamat" >
                </div>
                <div style="padding: 10px">
                    <input type="file" class="form-control" name="foto" 
                    placeholder="Foto" >
                </div>
            </div>
            <div style="padding: 10px">
                <button type="submit"> Simpan</button>
            </div>
        </form>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Prodi</th>
                    <th>Alamat</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
                @foreach ( $mahasiswa as $item )
            <tbody>
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->nim}}</td>
                    <td>{{$item->prodi}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->foto}}</td>
                    <td>
                        <a href="{{route('edit', $item->id)}}">
                             Edit</a>
                        <a href="{{route('delete', $item->id)}}">
                             Hapus</a>
                    </td>
                </tr>
            </tbody>
                @endforeach
        </table>
    </div>
        
</body>
</html>