@extends('admin.template.head')

@section('head')


 @if(session('tambah'))
            <div class='alert alert-success'><center>{{session('tambah')}}</center></div>
            @endif

            <div class="container">
    <div class="alert alert-info text-center">
        <h4 style="margin-bottom: 0px">SELAMAT DATANG DI <b>FAMILY LAUNDRY</b></h4>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h4>Dashboard</h4>
        </div>
        <div class="panel-body">

            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-user"></i>
                                <span class="pull-right">
                                   {{$jumlahuser}}
                                </span>
                            </h1>
                            Jumlah Pelanggan
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-retweet"></i>
                                <span class="pull-right">
                              
                                {{$cuciansiap1}}
                                </span>
                            </h1>
                            Jumlah Cucian Di Proses
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-info-sign"></i>
                                <span class="pull-right">
                                {{$cuciansiap2}}   
                                </span>
                            </h1>
                            Jumlah Cucian Siap Ambil
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h1>
                                <i class="glyphicon glyphicon-ok-circle"></i>
                                <span class="pull-right">
                                {{$cuciansiap3}}   
                                   
                                </span>
                            </h1>
                            Jumlah Cucian Selesai
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h4>Riwayat Transaksi Terakhir</h4>
        </div>
        <div class="panel-body">
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
                 
                </tr>
                @php 
                $no = 1; 
                $total = 0;
                @endphp
                @foreach($transaksi as $s)
                @php 
                $total = ($s['Berat']*$s->class1['harga'])
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
                        <td>
                            @if($s -> user_status == 1)
                            <div class='label label-warning'>PROSES</div>
                            @elseif($s -> user_status == 2)
                            <div class='label label-info'> Dicuci</div></td>
                            @elseif($s -> user_status == 3)
                            <div class='label label-success'>SELESAI</div>
                            @endif
    
                        @endforeach
                    </tr>
                    
            </table>
        </div>
    </div>
</div>

 @endsection

 </body>
 </html>