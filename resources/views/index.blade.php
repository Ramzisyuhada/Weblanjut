<!DOCTYPE html>
<html>
<head>
    <title>SISTEM INFORMASI FAMILY LAUNDRY</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body style="background: #f0f0f0">
    <br/>
    <br/>
    <center>
        <h2>SISTEM INFORMASI FAMILY LAUNDRY Login</h2>
    </center>
    <br/>
    <br/>
    
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
        @if(session('logout'))
        <div class='alert alert-info'>{{session('logout')}}!</div>
        @elseif(session('Gagal'))
        <div class='alert alert-danger'>{{session('Gagal')}}!</div>
        @elseif(session('Succees'))
        <div class='alert alert-info'>{{session('Succees')}}</div>
        @endif
            
            <form action="{{ route('aksilogin')}}" method="post">
            @csrf
                <div class="panel">
                    <br/>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>  

                        <input type="submit" class="btn btn-primary" value="Log In"> 
                       <center> <a href="register" >Register</a>    </center>           
                    </div>
                    <br/>
                </div>
            </form>

        </div>
    </div>
</body>
</html>
