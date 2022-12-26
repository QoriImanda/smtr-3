@extends('layouts.main')
@section('content')
 
 <div>
        <form action="{{route('update', $mhs->id)}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div>
                <div style="padding: 10px">
                    <input type="text" class="form-control" name="nama" 
                    placeholder="Nama" value="{{$mhs->nama}}">
                </div>
                <div style="padding: 10px">
                    <input type="text" class="form-control" name="nim" 
                    placeholder="NIM" value="{{$mhs->nim}}">
                </div>
                <div style="padding: 10px">
                    <input type="text" class="form-control" name="prodi" 
                    placeholder="Prodi" value="{{$mhs->prodi}}">
                </div>
                <div style="padding: 10px">
                    <input type="text" class="form-control" name="alamat" 
                    placeholder="Alamat" value="{{$mhs->alamat}}">
                </div>
                <div style="padding: 10px">
                    <input type="file" class="form-control" name="foto" 
                    placeholder="Foto" value="{{$mhs->foto}}">
                </div>
            </div>
            <div style="padding: 10px">
                <button type="submit"> Simpan</button>
            </div>
        </form>
    </div>

@endsection