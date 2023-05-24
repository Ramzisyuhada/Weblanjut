@extends('user.template.head')

@section('head')

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Transaksi Laundry</h4>
        </div>
        <div class="panel-body">
            
            <br/>
            <br/>
            <table class="table table-bordered table-striped">
                @foreach($transaksi as $us)
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
                   
                </tr>
               @php
               $total = 0;
                $no=1;
               @endphp
               @php
               $total = ($us['Berat']*$us->class1['harga'])
               @endphp
                    <tr>
                 
                        <td>{{$no++}}</td>
                        <td>INVOICE {{$us -> id}}</td>
                        <td>{{$us -> created_at}}</td>
                        <td>{{$us -> class['name']}}</td>
                        <td>{{$us -> Berat}}</td>
                        <td>{{$us -> selesai}}</td>
                        <td>{{$total}}</td>
                        <td>{{$us -> class3['name']}}</td>
                        <td>{{$us -> class4['name']}}</td>
                        <td>@if($us -> user_status == 1)
                            <div class='label label-warning'>Dicuci</div>
                            @elseif($us -> user_status == 2)
                            <div class='label label-info'>Proses</div></td>
                            @elseif($us -> user_status == 3)
                            <div class='label label-success'>SELESAI</div>
                            @endif</td>
                        
           @endforeach             
                        
                      
            
                       
                    </tr>
                    
              
             
            </table>
        </div>
    </div>
</div>


@endsection

 </body>
 </html>