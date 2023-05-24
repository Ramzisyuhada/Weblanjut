@extends('admin.template.head')

@section('head')
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        @if(session('success'))
        <div class='alert alert-success'>{{session('success')}}</div>
        @else ($errors->any())
            @foreach($errors -> all() as $items)
            <div class='alert alert-danger'>{{$items}}</div>
            @endforeach
        @endif
        <div class="panel">
            <div class="panel-heading">
                <h4>Ganti Profile</h4>
            </div>
            <div class="panel-body">
                
                <form action="{{ route('aksiedit')}}" method="post">
                @csrf    
                    @method('patch') 
                    <div class="form-group">
                        <label>Nama Baru</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Baru Anda .." value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label>Masukkan Nomertelepon Baru</label>
                        <input type="text" class="form-control" name="nomertelepon" placeholder="Masukkan nomertelepon Anda .." value="{{ $user->nomertelepon}}">
                    </div>
                    <div class="form-group">
                        <label>Masukkan Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat Anda .." value="{{ $user->alamat}}">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan alamat Anda ..">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Ganti Password">
                </form>          
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>