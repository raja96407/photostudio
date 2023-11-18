!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: poppins;
        }

        body {
            background-color:black ;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        #about-section {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 80px 12%;
        }

        .about-left img {
            width: 420px;
            height: auto;
            transform: translateY(50px);
        }

        .about-right {
            color: gold;
            width: 54%;
        }

        .about-right ul li {
            display: flex;
            align-items: center;
        }

        .about-right h1 {
            color: gold;
            font-size: 37px;
            margin-bottom: 5px;
        }

        .about-right p {
            color: #fff;
            line-height: 26px;
            font-size: 15px;
        }

        .about-right .address {
            margin: 25px 0;
        }

        .about-right .address ul li {
            margin-bottom: 5px;
        }

        .address .address-logo {
            margin-right: 15px;
            color: gold;
        }

        .address .saprater {
            margin: 0 35px;
        }

        .about-right .expertise ul {
            width: 80%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .expertise h3 {
            color: gold;
            margin-bottom: 10px;
        }

        .expertise .expertise-logo {
            font-size: 19px;
            margin-right: 10px;
            color: gold;
        }

       
.about-left img {
    width: 500px; /* Adjust the width to your desired size */
    height: 300px;
    transform: translateY(50px);
}

    </style>
</head>

<body>
    <section id="about-section">
        <!-- about left  -->
        <div class="about-left">
            <img src="contimg.jpeg" alt="About Img" />
        </div>

        <!-- about right  -->
        <div class="about-right">
            
            <h1>Contact Us</h1>

            <div class="address">
                <ul>
                    <li>
                        <span class="address-logo">
                            <i class="fas fa-paper-plane"></i>
                        </span>
                        <p>Address</p>
                        <span class="saprater">:</span>
                        <p>Ramachandrapuram, India</p>
                    </li>
                    <li>
                        <span class="address-logo">
                            <i class="fas fa-phone-alt"></i>
                        </span>
                        <p>Phone No</p>
                        <span class="saprater">:</span>
                        <p>+91 630-312-0524</p>
                    </li>
                    <li>
                        <span class="address-logo">
                            <i class="far fa-envelope"></i>
                        </span>
                        <p>Email ID</p>
                        <span class="saprater">:</span>
                        <p>PNRstudio@gmail.com</p>
                    </li>
                </ul>
            </div>
<h2>All About Us</h2>
            <p>At Your Photo Studio, we're passionate about capturing moments that last a lifetime. Our team of experienced photographers and creative professionals are dedicated to delivering stunning photography services tailored to your unique needs
            </p>

            <div class="expertise">
                <h2>Available On</h2>
                <ul>
                    <li>
                        <span class="expertise-logo">
                            <i class="fab fa-google"></i>
                        </span>
                        <p>Google</p>
                    </li>
                    <li>
                        <span class="expertise-logo">
                            <i class="fab fa-instagram"></i>
                        </span>
                        <p>Instagram</p>
                    </li>
                    <li>
                        <span class="expertise-logo">
                            <i class="fab fa-chrome"></i>
                        </span>
                        <p>Chrome</p>
                    </li>
                    <li>
                        <span class="expertise-logo">
                            <i class="fab fa-microsoft"></i>
                        </span>
                        <p>Microsoft Edge</p>
                    </li>
                </ul>
            </div>
        </div>
        
    </section>
</body>

</html>
