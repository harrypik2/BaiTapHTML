<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
    <style>
        #khung{
            height: 280px;
            width: 300;
            border: 1px solid black;
            margin: auto;
        }
        form{
            text-align: center;
        }
        h4{
            color: royalblue;
            text-align: center;
        }
        
    </style>
</head>
<body>
    <div id="khung">
        <h4>WEBSITE</h4>
    <form onsubmit="return validateForm()" action="Br1.php" method="POST">
        <label>User</label> 
        <input id="user" name="user" type="text" placeholder="phone or email"> <br>
        <p id="errUser"></p>

        <label>Pass</label>
        <input id="pass" name="pass" type="password" placeholder="password"> <br>
        <p id="errPass"></p>

        <button type="submit">login</button>  
    </div>

    <script>

        function validateForm(){

            // true: form được gửi lên, false -> ko gửi
    
            let user = document.getElementById('user').value;
            let pass = document.getElementById('pass').value;
        
            let dem = 0;
            let regexEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            let resultEmail = regexEmail.test(user);
            let regexSdt = /^(0|\+84)[0-9]{9,11}$/
            let resulSdt = regexSdt.test(user);
            if (user.length == 0){
                dem++;
                document.getElementById('errUser').innerHTML = "Không được để trống";
            }else if(resultEmail == false && resulSdt == false){
                dem++;
                document.getElementById('errUser').innerHTML = "Không đúng định dạng";
            }else {
                document.getElementById('errUser').innerHTML = "";
            }

            if (pass.length == 0){
                dem++;
                document.getElementById('errPass').innerHTML = "Không được để trống";
            }else if(pass.length < 8){
                dem++;
                document.getElementById('errPass').innerHTML = "Tối thiểu 8 ký tự";
            }else {
                document.getElementById('errPass').innerHTML = "";
            }

            if(dem != 0){
                return false;
            }
            return true;
        }
    </script>
</body>
</html>