<!DOCTYPE html>
<html>

<head>
    <title>
        REGISTRATION
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
    #btn{
        background-color: #d3ceced9;
    }
#btn:hover{
background-color: #3c3838;
color:white;


}
</style>

</head>

<body>
    
    <div class="row" style="margin-top:100px "> 
       <div class="col-md-3"></div>
       <div class="col-md-2" style="background-color: #84123de3;height: 475px;color:white;border: 1px solid #84123de3">
           <h3>REGISTRATION FORM</h3>
           
       </div>
       <div class="container col-md-4" style="border: 1px solid #84123de3">
       
        <form action="selInsert.php" method="post">
            <div class="form-group" style="margin-top: 20px">
                <label for="name">NAME:</label>
                <input type="text" class="form-control"  placeholder="Enter name" name="selName">
            </div>

            <div class="form-group">
                <label for="userName">USER NAME:</label>
                <input type="text" class="form-control"  placeholder="Enter user name" name="selUserName">
            </div>

            <div class="form-group">
                <label for="password">PASSWORD:</label>
                <input type="password" class="form-control"  placeholder="Enter password" name="selPassword">
            </div>
            <div class="form-group">
                    <label for="phone">PHONE NUMBER:</label>
                    <input type="text" class="form-control"  placeholder="Enter phone number" name="selPhoneNo">
                </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control"  placeholder="Enter email" name="selEmailAddress">
            </div>
            
            <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
            </div>
            <button id="btn" type="submit" class="btn btn-default" style="width:150px">Submit</button>
            <br>
            <br>
        </form>
    </div>
<div class="col-md-3"></div>
   </div>
</body>



</html>