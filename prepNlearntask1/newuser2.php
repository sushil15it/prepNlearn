<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/idi circle-LOGO.png">
    <title>log in</title>
    <link rel="stylesheet" href="p1sign_up.css">
    <script src="sign.js">
    </script>
</head>

<body onresize="location.reload()">
    <div id="buller" onclick="menuBr(0)"></div>
    <nav>


        <div class="menu" id="s2">
            <ul>
                <li id="menubar" onclick="menuBr(0)" style="padding-left:5px ;">X


                </li>
                <li>
                    <a href="home/index.php">home</a>
                </li>

                <li class="active" >
                    <a href="newuser2.php">sign up as coaching</a>
                </li>
                <li  >
                    <a href="newuser.php">sign up as student</a>
                </li>



            </ul>
        </div>
        <div class="navbar">

            <button id="s1" onclick="menuBr(1)">
                <span id="s11" class="icon-bar"></span>
                <span id="s12" class="icon-bar"></span>
                <span id="s13" class="icon-bar"></span>
            </button>
        </div>

        <div class="login">
           
            <a class="active" href="login.html">LOG-IN</a>
        </div>


    </nav>
    <main>
        <script>alert('email is not exist .register yourself fist');</script>
        <div class="wrappeer">
            <div class="box">
                <h1 class="header">sign - up as coaching</h1>
                <a style="color: green;" href="https://prepnlearn.com">continue  as guest</a>
                <div>
                <form action="/projectidl/login/loginphp/studentreg.php" method="POST" onsubmit=" return FormVal()" enctype="multipart/form-data">
                       


                        <div style="display: flex;">
                            <div class="field input_box"><label>First Name<span style="color: rgb(138, 0, 0);">*</span></label>
                                <input type="text" name="fname" placeholder="ak">
                            </div>
                            <div class="field input_box">
                                <label>Lirst Name(teacher)<span style="color: rgb(138, 0, 0);">*</span></label>
                                <input type="text" name="lname" placeholder="singh">
                            </div>
                        </div>
                        <div class="field input_box">
                            <label>Email Id<span style="color: rgb(138, 0, 0);">*</span></label>
                            <input type="email" name="email" placeholder="ak@gmail.com" required>
                        </div>
                        <div class="field input_box">
                            <label>password<span style="color: rgb(138, 0, 0);">*</span> </label>
                            <input type="password" name="password" id="password" onchange="ValPassword()" required>
                        </div>
                        <input type="checkbox" id="cheakbox1" onclick="showpassword('password')"><label>show password</label>
                        <div class="field input_box">
                            <label>confirm password<span style="color: rgb(138, 0, 0);">*</span></label>
                            <input type="password" name="cpassword" id="c_password" onchange="ValPassword()" required>
                        </div>
                        <input type="checkbox" id="cheakbox2" onclick="showpassword('c_password')"><label>show password</label><span id="PMtch" style="color: chartreuse;font-size: 11px;"> </span>
                        <div class="field input_box"><label>Mobile no<span style="color: rgb(138, 0, 0);">*</span></label>
                            <input type="tel" name="mobile_no" id="mobile_no">
                        </div>
                        <div class="field input_box"><label>coaching Name</label>
                            <input type="text" name="libname">
                        </div>
                       
                        <div class="field input_box"><label>coaching address</label>
                            <input type="text" name="organization">
                        </div>
                       
                        <div><button id="submit">sign - up as coaching</button></div>
                    </form>  
                    <div class="link">are you a student?
                     
                        <div> <a href="newuser.php">sign-up as student</a></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>


</html>