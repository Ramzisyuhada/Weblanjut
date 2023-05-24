@extends('admin.template.head')

@section('head')
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
    @if(session('success'))
        <div class='alert alert-success'>{{session('success')}}</div>
        @endif
        <div class="panel">
            <div class="panel-heading">
                <h4>Pengaturan Harga Laundry</h4>
            </div>
            <div class="panel-body">
            
                    <form method="post" action="/admin/{{$harga -> id}}/editharga/">
                    @csrf       
                        <div class="form-group">
                            <label>Harga per kilo</label>
                            <input type="number" class="form-control" name="harga" value="{{$harga -> harga}}">
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" value="Ubah Harga">
                    </form>
                 
    
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
