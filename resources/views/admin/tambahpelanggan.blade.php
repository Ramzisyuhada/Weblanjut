<!DOCTYPE html>
<html>
<head>
    <title>SISTEM INFORMASI FAMILY LAUNDRY</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <script type="text/javascript" src="{{asset ('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset ('js/bootstrap.js')}}"></script>
</head>
<body style="background: #f0f0f0">
    <br/>
    <br/>
    <center>
        <h2>Tambah Pelanggan</h2>
    </center>
    <br/>
    <br/>
    
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
        @if ($errors->any())
            @foreach($errors -> all() as $items)
            <div class='alert alert-danger'>{{$items}}</div>
            @endforeach
        @endif
            <form action="{{ route('aksitambah')}}" method="POST">  
            @csrf
                <div class="panel">
                    <br/>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <label>nama</label>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" >
                        </div>  
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{old('alamat')}}">
                        </div>  
                        <div class="form-group">
                            <label>Nomertelepon</label>
                            <input type="number" class="form-control" name="nomertelepon" value="{{old('nomertelepon')}}">
                        </div>  
                        
                        <input type="submit" class="btn btn-primary" value="Tambah">                
                    </div>
                    <br/>
                </div>
            </form>

        </div>
    </div>
</body>
</html>
