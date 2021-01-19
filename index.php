<?php
session_start();
error_reporting(0);
        $user = array(
                        "user"=>"satyawirapermana",
                        "pass"=>"admin",
                        "user2"=>"user",
                        "pass2"=>"user"            
                );
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $user['user'] && $_POST['password'] == $user['pass']){
        //Membuat Session
        $_SESSION["username"] = $_POST['username']; 
        header("Location: admin.php"); //Pindahkan Kehalaman Admin
    } else if ($_POST['username'] == $user['user2'] && $_POST['password'] == $user['pass2']){
        //Membuat Session
        $_SESSION["username"] = $_POST['username']; 
        header("Location: user_1.php"); //Pindahkan Kehalaman Admin
    } else {
        // Tampilkan Pesan Error
        display_login_form();
        echo '<center><p><b>Username Atau Password Salah!!</b></p></center>';
    }
}    
else { 
    display_login_form();
}
function display_login_form(){ ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Halaman Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style type="text/css">
            body{
                font-family: sans-serif;
                background-image: radial-gradient(lightblue, white); 
                height: 100%
                background-repeat: no-repeat;
                background-size: cover;
            }
     
            .tulisan_login{
                text-align: center;
                text-transform: uppercase;
            }
             
            .kotak_login{
                width: 350px;
                background: white;
                margin: 80px auto;
                padding: 30px 20px;
                box-shadow: 0px 0px 100px 4px #d6d6d6;
            }
             
            label{
                font-size: 11pt;
            }
             
            .form_login{
                box-sizing : border-box;
                width: 100%;
                padding: 10px;
                font-size: 11pt;
                margin-bottom: 20px;
            }
             
            .tombol_login{
                background: #2aa7e2;
                color: white;
                font-size: 11pt;
                width: 100%;
                border: none;
                border-radius: 3px;
                padding: 10px 20px;
            }
             
            .link{
                color: red;
                text-decoration: none;
                font-size: 10pt;
            }
             
            .alert{
                background: #e44e4e;
                color: white;
                padding: 10px;
                text-align: center;
                border:1px solid #b32929;
            }

            @media screen and (max-height: 600px) {
                body{
                width: 100%;
                    background-size: cover;
                }
                .kotak_login {
                    margin-top: 0;
                    top: 10px;
                }
            }
            @media screen and (max-width: 600px) {
                body{
                width: 100%;
                    background-size: cover;
                }
                .kotak_login {
                    left: 5px;
                    margin-left: 5px;
                    min-width: 292px;
                    margin-right: 13px;
                    right: 10px;
                    margin-bottom: 10px;
                    width: auto;
                }
            }
            @media screen and (max-width: 500px) {
                body{
                width: 100%;
                    background-size: cover;
                }
                .kotak_login {
                    left: 5px;
                    margin-left: 5px;
                    min-width: 290px;
                    margin-right: 13px;
                    right: 10px;
                    margin-bottom: 10px;
                    width: auto;
                }
            }
            @media screen and (max-width: 400px) {
                body{
                width: 100%;
                    background-size: cover;
                }
                .kotak_login {
                    left: 5px;
                    margin-left: 5px;
                    min-width: 283px;
                    margin-right: 12px;
                    right: 10px;
                    margin-bottom: 10px;
                    width: auto;
                }
            }
            @media screen and (max-width: 350px) {
                body{
                width: 100%;
                    background-size: cover;
                }
                .kotak_login {
                    left: 5px;
                    margin-left: 5px;
                    min-width: 220px;
                    margin-right: 13px;
                    right: 10px;
                    margin-bottom: 10px;
                    width: auto;
                }
            }
            @media screen and (max-width: 290px) {
                body{
                width: 100%;
                    background-size: cover;
                }
                .kotak_login {
                    left: 5px;
                    margin-left: 5px;
                    min-width: 193px;
                    margin-right: 13px;
                    right: 10px;
                    margin-bottom: 10px;
                    width: auto;
                }
            }

        </style>
    </head>
    <body>
    <div class="kotak_login">
        <h1 class="tulisan_login">SIACA</h1>
        <h5 class="tulisan_login"><i>Sistem Akademik Informatika Sederhana dengan DBMS NoSQL Cassandra</i></h5>
        <p class="tulisan_login"><b>Silahkan Login Disini</b></p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form_login" placeholder="Masukkan Username .." required="required">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form_login" placeholder="Masukkan Password .." required="required">
            <input type="submit" class="tombol_login" name="submit" value="Login">
        </form>
    </div>
</body>
</html>    
<?php } ?>