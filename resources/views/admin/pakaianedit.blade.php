@extends('admin.template.head')

@section('head')
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Tambah Pakaian Baru</h4>
            </div>
            <div class="panel-body">
                <form method="Post" action="{{route('tambahpakaian1')}}">
                    @csrf
                  
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukkan nama ..">
                    </div>
                    <br/>
                    <input type="submit" class="btn btn-primary" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>