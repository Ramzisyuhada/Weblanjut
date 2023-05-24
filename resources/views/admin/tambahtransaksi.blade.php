@extends('admin.template.head')

@section('head')

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Transaksi Laundry Baru</h4>
        </div>
        <div class="panel-body">
            <div class="col-md-8 col-md-offset-2">
                <a href="transaksi.php" class="btn btn-sm btn-info pull-right">Kembali</a>
                <br/>
                <br/>
                <form method="post" action="{{ route('create')}}">
                @csrf
                @if(session('success'))
                <div class='alert alert-info'>{{session('success')}}!</div>
          @endif
                
                 
                    <div class="form-group">
                        <label>Pelanggan</label>
                        <select class="form-control" name="user_id" required="required">
                            <option value="">- Pilih Pelanggan</option>
                            @foreach($user1 as $item)
                            <option value="{{$item -> id}}">{{$item -> name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Layanan</label>
                        <select class="form-control" name="user_layanan" required="required">
                            <option value="">- Pilih Layanan</option>
                            @foreach($layanan as $item1)
                            <option value="{{$item1 -> id}}">{{$item1 -> name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="user_kategori" required="required">
                            <option value="">- Pilih Kategori bahan</option>
                            @foreach($kategori as $item2)
                            <option value="{{$item2 -> id}}">{{$item2 -> name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis Pakaian</label>
                        <select class="form-control" name="user_item" required="required">
                            <option value="">- Pilih Kategori bahan</option>
                            @foreach($jenis as $item3)
                            <option value="{{$item3 -> id}}">{{$item3 -> name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <select class="form-control" name="harga_id" required="required">
                            @foreach($harga as $item5)
                            <option value="{{$item5 -> id}}">{{$item5 -> harga}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Berat</label>
                        <input type="number" class="form-control" name="Berat" placeholder="Masukkan berat cucian .." required="required">
                    </div>
                    <div class="form-group">
                        <label>Tgl  Selesai</label>
                        <input type="date" class="form-control" name="selesai" required="required">
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