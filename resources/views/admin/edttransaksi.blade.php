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
                <form method="post" action="/admin/{{$transaksi -> id}}/edttransaksi">
                @csrf
                    <div class="form-group">
                        <label>Pelanggan</label>
                        <select class="form-control" name="user_status" required="required" >
                            <option value="{{$transaksi -> user_status}}">- Pilih Pelanggan</option>
                            @foreach($status as $item)
                            <option value="{{$item -> id}}">{{$item -> name}}</option>
                            @endforeach
                        </select>
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