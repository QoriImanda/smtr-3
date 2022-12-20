    <div>
        <form action="{{route('update', $mhs->id)}}" method="post" enctype="multipart/form-data">
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