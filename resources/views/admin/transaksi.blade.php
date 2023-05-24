@extends('admin.template.head')

@section('head')

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Transaksi Laundry</h4>
        </div>
        <div class="panel-body">
            <a href="/admin/tambahtransaksi" class="btn btn-sm btn-info pull-right">Transaksi Baru</a>
            <br/>
            <br/>
            @if(session('hapus'))
            <div class='alert alert-info'>{{session('hapus')}}!</div>
                 @endif
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Invoice</th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
                    <th>Berat (Kg)</th>
                    <th>Tgl. Selesai</th>
                    <th>Harga</th>
                    <th>Bahan</th>
                    <th>Jenis</th>
                    <th>Status</th>
                    <th width="20%">OPSI</th>
                </tr>
                @php 
                $no = 1; 
                $total = 0;
                @endphp
                @foreach($transaksi as $s)
                @php 
                $total = ($s->class1['harga']*$s['Berat'])
                @endphp
                    <tr>
                 
                        <td>{{$no++}}</td>
                        <td>INVOICE {{$s -> id}}</td>
                        <td>{{$s -> created_at}}</td>
                        <td>{{$s -> class['name']}}</td>
                        <td>{{$s -> Berat}}</td>
                        <td>{{$s -> selesai}}</td>
                        <td>{{$total}}</td>
                        <td>{{$s -> class3['name']}}</td>
                        <td>{{$s -> class4['name']}}</td>
                        <td>  @if($s -> user_status == 1)
                            <div class='label label-warning'>Dicuci</div>
                            @elseif($s -> user_status == 2)
                            <div class='label label-info'>Proses</div></td>
                            @elseif($s -> user_status == 3)
                            <div class='label label-success'>SELESAI</div>
                            @endif</td>
                        
                        
                        
                        </td>
                        <td>
                        <a href="" target="_blank" class="btn btn-sm btn-warning">Invoice</a>
                        <a href="/admin/{{$s -> id}}/edttransaksi" class="btn btn-sm btn-info">Edit</a>
                        <a href="/destroy/{{$s->id}}" class="btn btn-sm btn-danger">Batalkan</a>
                        </td>
                        @endforeach
                    </tr>
                    
              
             
            </table>
        </div>
    </div>
</div>


@endsection

 </body>
 </html>