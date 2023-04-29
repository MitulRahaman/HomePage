<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin</title>
</head>
<body>
    
    <section class="banner">
        <p> Use this banner to inform your users of something important.</p>
    </section>
    
    <section class="header">
        <div class="grid-container">
            <div class="grid-item">
                <nav>  
                    <div class="nav-links">
                        <ul>
                            <li><a href="index.html">HOME</a> </li>
                            <li><a href="index.html">SHOP</a> </li>
                            <li><a href="index.html">ABOUT US</a> </li>
                            <li><a href="index.html">CONTACT US</a> </li>
                        </ul>
                    </div>
                </nav>     
            </div>
            <div class="grid-item">
                <a href="index.html">
                    <img class="img" src="img/Frame.png"; width="7%">
                </a>
            </div>
            <div class="grid-item">
                <img class="logo"src="img/logo2.png">
                <img class="logo"src="img/logo3.png">
                <img class="logo"src="img/logo4.png">
            </div>  
        </div>
    </section>

    
    <section style="margin: 50px;">
        <div>
            <h1>Users List</h1>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn = new mysqli("localhost","root","","login_reg");
                    if($conn->connect_error){
                        echo "$conn->connect_error";
                        die("Connection Failed : ". $conn->connect_error);
                    }
                    $sql = "select * from create_account";  
                    $result = $conn->query($sql); 

                    if(!$result){
                        die("Invalid : ". $conn->error);
                    }
                    while($row = $result->fetch_assoc())
                    {
                        echo "<tr>
                            <td>" . $row["firstname"] . "</td>
                            <td>" . $row["lastname"]."</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["password"] . "</td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    
    <section class="about">
    <div class="row">
            <div class="col">
                <div class="logo">
                    <img class="img" src="img/Frame.png"; width="23%">
                    <p>By completing this form you're signing up to receive our emails and can unsubscribe at any time</p>
                </div>
                <div class="logo2">
                    <img src="img/f.png"  style="width:4%">
                    <img class="img1" src="img/t.png"  style="width:6%">
                    <img src="img/i.png"  style="width:6%">
            </div>
                
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                    <p><b>MENU</b></p>
                    <p>Home</p>
                    <p>Gift Card</p>
                    <p>Seasonal</p>
                    <p>Kid & Nursery</p>
                    <p>Pet</p>
                    <p>Gift Registry</p>
                </div>
                <div class="col">
                    <p><b>CUSTOMER CARE</b></p>
                    <p>Contact Us</p>
                    <p>Shiping Policy</p>
                    <p>Return Policy</p>
                    <p>Privacy Policy</p>
                </div>
                <div class="col">
                    <p><b>ABOUT US</b></p>
                    <p>Our Story</p>
                    <p>Terms Of Services</p>
                    <p>Articles</p>
                </div> 
                </div>
            </div>
            <div class="col">
                <div class="col2">
                    <p><b>SUBSCRIBE TO OUR NEWSLETTER</b></p>
                    <p>Signup for our newsletter to stay up to date on sales and events.</p>
                </div> 
                <div class="txt_field">
                    <form>                     
                      <input class="input" type="text" value="Email">
                      <input class="join" type="submit" value="Join">
                    </form>  
                </div>
                <div class="form" >
                    <form>
                      <select class="select"><option value="volvo">United States(USD $)</option></select>
                    </form>
                </div>
                <div class="logo3">
                    <img src="img/visa.png"  style="width:8%">
                    <img src="img/amex.png"  style="width:8%">
                    <img src="img/pay.png"  style="width:8%">
                    <img src="img/amex2.png"  style="width:6%">
                </div>
            </div>
        </div>
        <p class="footer">© Copyright 2022 by Cole & Son. All rights reserved.</p>
    </section>
    
</body>
</html>