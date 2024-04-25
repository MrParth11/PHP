<!DOCTYPE html>
<html>
<head>
<title> Login Page</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="site.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style>
    .demo {
		width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        border: 1px solid black;
    }
    .loginholder {
        width: 50%;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
		display: flex;
		justify-content: space-evenly;
		
    }
    .inputbox {
		height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;

    }
	.table-condensed{
		width: 100%;
		font-size: 20px;
		align-items: center;
	}
	
    .btn-normal {
        width: 100%;
        padding: 10px;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .btn-normal:hover {
		background: linear-gradient(-135deg, #71b7e6, #9b59b6);
    }
    .forgetpassword a {
        text-decoration: none;
        color: blue;
    }
	form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   /* background: linear-gradient(135deg, #71b7e6, #9b59b6); */
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
  center{
	width: 100%;
  }
  #login{
	background: linear-gradient(135deg, #71b7e6, #9b59b6);
  }
</style>
</head>
<body>
<div class="demo">
    <div class="loginholder">
      <center>
	  <table style="background-color:white;" class="table-condensed">
            <tr>
                <td><a href="./index.html"><img src="img/logo.png" alt="" width="180px"></a></td>
            </tr>
            <tr>
                <td><b>User Id:</b></td>
            </tr>
            <tr>
                <td><input type="text" class="inputbox" id="username"/>
                    <br><p id="nameerror"></p></td>
            </tr>
            <tr>
                <td><b>Password:</b></td>
            </tr>
            <tr>
                <td><input type="password" class="inputbox" id="password" />
                    <br><p id="passerror"></p><div id="msg"></div> </td>
            </tr>
            <tr>
                <td align="center"><br />
                    <button class="btn-normal" id="login">LOGIN</button>
                </td>
            </tr>
            <tr>
                <td align="left"><br />
                    <span class="forgetpassword"><a href="forget_password.php"> Forget your Password ?</a></span></td>
            </tr>
            <tr>
                <td><a href="register_form.php"> register now</a></td>

            </tr>
            <tr>
                <td><hr style="background-color:blue;height:1px;margin:0px;"/></td>
            </tr>
            <tr>
                <td align="center"></td>
            </tr>
        </table>
	  </center>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#login").click(function(){
            var username = $("#username").val().trim();
            var password = $("#password").val().trim();
            if( username == "" ) {
                error = " <font color='red'>!Require Name.</font> ";
                document.getElementById( "nameerror" ).innerHTML = error;
                return false;
            }
            if( password == "") {
                error = " <font color='red'>!Require Password.</font> ";
                document.getElementById( "passerror" ).innerHTML = error;
                return false;
            }
            $.ajax({
                url:'login.php',
                type:'post',
                data:{username:username,password:password},
                success:function(response){
                    if(response == 1){
                        window.location = "index.php";
                    }else{
                        error = " <font color='red'>!Invalid UserId.</font> ";
                        document.getElementById( "msg" ).innerHTML = error;
                        return false;
                    }
                    $("#message").html(response);
                }
            });
        });
    });
</script>
</body>
</html>
