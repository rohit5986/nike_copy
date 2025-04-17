<!DOCTYPE html>
<html>
    <head>
        <title>Join us</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script>
            function another(){
                window.location.href="nk.html";
            }
        </script>
        <style>
            * {
                font-family: "Helvetica Now Text", Helvetica, Arial, sans-serif;
                
            }
            .container{
                justify-content: center;
            }
            .c1{
                width:750px;
                padding-left: 300px;
                padding-top: 25px;
            }
            

            .form-control{
                border-radius: 10px;
                height:55px;
                border-color: black;
            }

            .ht{
                font-size: 30px;
            }
            
            .f1{
                display: flex;
            }
            button{
                border-radius: 25px;
                color: white;
                background-color: rgb(32, 32, 32);
                border: none;
                height: 50px;
                width:170px;
                font-weight: bold;
                
            }
            #btn{
                padding-left: 280px;
                padding-top: 10px;
            }

            

        </style>
    </head>
    <body>
    
        <div class="container">
            <div class="c1">
        
        <div class="hdr">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/3/37/Jumpman_logo.svg/1200px-Jumpman_logo.svg.png" alt="" height="40px" width="50px">
            <a href="nk.html"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Logo_NIKE.svg/1200px-Logo_NIKE.svg.png" alt="" height="30px" width="70px"></a>
        </div>
        <br>
        <div class="ht">
            <p>Now let's make you a Nike Member.</p>
            
        </div>
        <div class="frm" method="post" action="dbjoin.php">
            <form>
                <div class="f1">
                <input id="fname" class="form-control" type="text" placeholder="First Name" required>
                <input id="lname" class="form-control" type="text" placeholder="Last Name" required>
                </div><br>
                <input id="pass" class="form-control" type="password" placeholder="Password" required><br>
                <p>Minimum of 8 Character</p>
                <p>Uppercase, lowercase letters, and one number</p><br>
                <input id="date" class="form-control" type="date" placeholder="Date" required><br>
                <label>
                    <input type="checkbox" class="checkbox2">
                    Sign up for emails to get updates from Nike on products, offers and your Member benefits.
                </label>
                <label>
                    <input type="checkbox" class="checkbox2">
                    I agree to Nike's <u>Privacy Policy</u> And <u>Term Of Use.</u>
                </label><br>
                <div id="btn">
                <button id="submit">Create Account</button></div>
            </form>
        </div>
    </div>
    </div>
    </body>
</html>