<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha-Electronics</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home | FassFood</title>
</head>

<body class="container">
<div class="header">
        <nav>
            <div class="logo">
                <a href="index.html">FassFood</a>
            </div>
            <div class="nav-1">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="food.html">Food</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
        
    <main>
        <?php
        include 'connect.php';
        ?>
        <div class="container">
            <div class="boundary">
                <div class="forms">
                    <form action="contact.php" method="post" onsubmit="validate()" name="forms">
                        <label for="Name">Full Name</label>
                        <div>
                            <input type="text" name="Name" id="Name" placeholder="Enter your Name" required>
                        </div>
                        <label for="Email">Email</label>
                        <div>
                            <input type="email" name="Email" id="Email" placeholder="Enter your Email Id" required>
                        </div>
                        <label for="Message">Message</label>
                        <div class="textarea">
                            <textarea required name="Message" id="Message" placeholder="Write here..."></textarea>
                        </div>
                        <div class="submit">
                            <button class="submit-btn" type="submit" name="submit" onclick="submitted()">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="row">
            <div class="footer-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Our Services</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Get Help</h4>
                <ul>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Shipping</a></li>
                    <li><a href="">Returns</a></li>
                    <li><a href="">Order Status</a></li>
                    <li><a href="">Payment Options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Online Orders</h4>
                <ul>
                    <li><a href="">Beverages</a></li>
                    <li><a href="">Fast Foods</a></li>
                    <li><a href="">Combos</a></li>
                    <li><a href="">Shakes</a></li>
                </ul>
            </div>
            <div class="footer-col width">

                <h4>Follow Us</h4>
                <div class="social-links">
                    <a href="https://twitter.com/amit_sahu_726?t=vxvj7_WqUk-1IIPhOEeOHA&s=08" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://instagram.com/amit_sahu_13?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/amit-sahu-08ab62220" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>

            </div>
        </div>
    </footer>
    
</body>

</html>