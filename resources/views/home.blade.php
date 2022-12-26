@extends('layouts.main')
@section('content')

    <h1>Hello Word</h1>
    <div>
        <form action="{{route('mhs_store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div>
                <div style="padding: 10px">
                    <input type="text" class="form-control" name="nama" 
                    placeholder="Nama" required>
                </div>
                <div style="padding: 10px">
                    <input type="text" class="form-control" name="nim" 
                    placeholder="NIM" required>
                </div>
                <div style="padding: 10px">
                    <input type="text" class="form-control" name="prodi" 
                    placeholder="Prodi" required>
                </div>
                <div style="padding: 10px">
                    <input type="text" class="form-control" name="alamat" 
                    placeholder="Alamat" required>
                </div>
                <div style="padding: 10px">
                    <input type="file" class="form-control" name="foto" 
                    placeholder="Foto" required>
                </div>
            </div>
            <div style="padding: 10px">
                <button type="submit"> Simpan</button>
            </div>
        </form>
    </div>
    

   <!-- DataTales Example -->
   <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->nim}}</td>
                        <td>{{$item->prodi}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->foto}}</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="{{route('edit', $item->id)}}">
                                Edit</a>
                            <a class="btn btn-danger btn-sm" href="{{route('delete', $item->id)}}">
                                Hapus</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div> 

@endsection
