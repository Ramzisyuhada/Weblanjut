@extends('admin.template.head')

@section('head')

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Pakaian</h4>
        </div>
        
        <div class="panel-body">
            <a href="/admin/pakaianedit" class="btn btn-sm btn-info pull-right">Tambah</a>
            <br/>
            <br/>
            @if(session('msg'))
            <div class='alert alert-success'>{{session('msg')}}</div>
            @elseif(session('hapus'))
        <div class='alert alert-danger'>{{session('hapus')}}!</div>
            @endif
            <table class="table table-bordered table-striped">
             @php
                $no = 1;
               
             @endphp
                <tr>
                    <th width="1%">No</th>
                    <th>nama</th>
                    <th width="1%">OPSI</th>
                </tr>
    @foreach($pakaian as $w)        
                    <tr>
                        
                        <td>{{ $no++}}</td>
                        <td>{{$w -> name}}</td>
                        <td>
                            <a href="/admin/{{$w -> id}}/pakaianedit" class="btn btn-sm btn-danger">Hapus</a>
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