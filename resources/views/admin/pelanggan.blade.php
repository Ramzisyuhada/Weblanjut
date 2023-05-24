@extends('admin.template.head')

@section('head')

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Pelanggan</h4>
        </div>
        
        <div class="panel-body">
            <a href="/admin/tambahpelanggan" class="btn btn-sm btn-info pull-right">Tambah</a>
            <br/>
            <br/>
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>nama</th>
                    <th>role</th>
                    <th>HP</th>
                    <th>Alamat</th>
                    <th width="15%">OPSI</th>
                </tr>
    @foreach($users as $w)
                    <tr>
                        
                        <td>{{$w -> id}}</td>
                        <td>{{$w -> name}}</td>
                        <td>{{$w -> role}}</td>
                        <td>{{$w -> nomertelepon}}</td>
                        <td>{{$w -> alamat}}</td>
                        <td>
                            <a href="/admin/{{$w -> id}}/editpelanggan" class="btn btn-sm btn-info">Edit</a>
                            <a href="/destroy/{{$w->id}}/editpelanggan" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                        
                    </tr>
              
                    @endforeach  
            </table>
        </div>
    </div>
</div>


@endsection
</body>
</html>