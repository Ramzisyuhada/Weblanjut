@extends('admin.template.head')

@section('head')

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Harga</h4>
        </div>
        <div class="panel-body">
            <a href="/admin/tambahpelanggan" class="btn btn-sm btn-info pull-right">Tambah</a>
            <br/>
            <br/>
            @if(session('msg'))
                <div class='alert alert-info'>{{session('msg')}}s</div>
                 @endif
            @foreach($harga as $aw)
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                    <th width="">OPSI</th>
                </tr>
   
                    <tr>
                   
                        <td>{{$aw -> id}}</td>
                        <td>Harga Perkilo</td>
                        <td>{{$aw -> harga}}</td>
                   
                    
                        <td>
                            <a href="/admin/{{$aw -> id}}/editharga" class="btn btn-sm btn-info">Edit</a>
    @endforeach
                        </td>
                     
                    </tr>
              
                
            </table>
        </div>
    </div>
</div>


@endsection
</body>
</html>