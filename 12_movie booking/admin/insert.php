<?php
include('conn.php');
if(isset($_POST['done']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $q= "insert into st_master(`username`,`password`)values('$username','$password')";

    $query = mysqli_query($con,$q);
}


?>
<html>
    
    <head><link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="javascript.js"></script>
         <center>                      
                <style>
                    .login-container{
                    margin-top: 5%;
                    margin-bottom: 5%;
                }
                .login-form-1{
                    padding: 5%;
                    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
                }
                .login-form-1 h3{
                    text-align: center;
                    color:  rgb(148, 146, 146);
                }
                .login-form-2{
                    padding: 5%;
                    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
                }
                .login-form-2 h3{
                    text-align: center;
                    color:  rgb(148, 146, 146);
                }
                .login-container form{
                    padding: 10%;
                }
                .btnSubmit
                {
                    width: 50%;
                    border-radius: 1rem;
                    padding: 1.5%;
                    border: none;
                    cursor: pointer;
                }
                .login-form-1 .btnSubmit{
                    font-weight: 600;
                    color: #fff;
                    background-color: rgb(148, 146, 146);
                }
                .login-form-2 .btnSubmit{
                    font-weight: 600;
                    color: #fff;
                    background-color: rgb(148, 146, 146);
                }
                .login-form-2 .ForgetPwd{
                    color: #fff;
                    font-weight: 600;
                    text-decoration: none;
                }
                .login-form-1 .ForgetPwd{
                    color: rgb(148, 146, 146);
                    font-weight: 600;
                    text-decoration: none;
                }

                </style>

    </head>

<body>        <div class="col-md-6 login-form-2">
                <h3>innser  Worker</h3>
                <br>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="username" name="username" style="width: 400px; height: 28px;" />

                    </div>
                    <br>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="password" name="password" style="width: 400px; height: 28px;" />

                    </div>
                    
                    <div class="form-group">
                    <input type="submit" name="done"/>
                    </div>
                 
                </form>
               
            </div>
            </center>  
</body>
</html>

