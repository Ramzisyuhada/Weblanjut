<!DOCTYPE html>
<html>
<head>
    <title>SISTEM INFORMASI FAMILY LAUNDRY</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body style="background: #f0f0f0">
    <br/>
    <br/>
    <center>
        <h2>Login Admin</h2>
    </center>
    <br/>
    <br/>
    
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
          
            <form action="{{ route('actionregister')}}" method="post">
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
                        <div class="form-group">
                            <label>Role</label>
                            <input type="number" class="form-control" name="role" value="1" readonly>
                        </div>  
                        <input type="submit" class="btn btn-primary" value="Register">                
                    </div>
                    <br/>
                </div>
            </form>

        </div>
    </div>
</body>
</html>
