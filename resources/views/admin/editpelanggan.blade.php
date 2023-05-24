@extends('admin.template.head')

@section('head')
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah Pelanggan Baru</h4>
            </div>
            <div class="panel-body">
            @if(session('success'))
            <div class='alert alert-success'>{{session('success')}}</div>
            @endif
                <form method="Post" action="/admin/{{ $users->id}}/editpelanggan/">
                    @csrf
                  
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name" value ="{{$users->name}}"placeholder="Masukkan nama ..">
                    </div>
                    <div class="form-group">
                        <label>HP</label>
                        <input type="number" class="form-control" name="nomertelepon" value ="{{$users->nomertelepon}}"placeholder="Masukkan no.hp ..">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" value ="{{$users->alamat}}" placeholder="Masukkan alamat ..">
                    </div>
                    <br/>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>