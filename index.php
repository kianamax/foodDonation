    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width= device-width, initial-scale=1.0">
        <title>Max kiana</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <style type="text/css">
        /* Reset CSS */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        scroll-behavior: smooth;
        font-family: 'Times New Roman', Times, serif;
    }

    /* Header Styles */
    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: 20px 100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 10000;
        backdrop-filter: blur(20px);
    }

    header .logo {
        position: relative;
        color: #fff;
        text-decoration: none;
        font-weight: 700;
        font-size: 2em;
    }

    header .logo img {
        width: 80px;
        height: auto;
        border-radius: 10px;
    }

    header ul {
        position: relative;
        display: flex;
        gap: 40px;
    }

    header ul li {
        list-style: none;
    }

    header ul li a {
        text-decoration: none;
        color: #fff;
        font-weight: 500;
        font-size: 1.25em;
    }

    header ul li.active a,
    header ul li:hover a {
        color: #30fe6c;
    }

    /* Home Section Styles */
    #Home {
        position: relative;
        width: 100%;
        min-height: 100vh;
        background: #222;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 100px;
    }

    #Home .content {
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 10px;
        max-width: 650px;
        z-index: 10;
    }

    #Home .content h2 {
        position: relative;
        font-size: 5em;
        color: #30fe6c;
    }

    #Home .content p {
        position: relative;
        font-size: 1.25em;
        color: #fff;
        line-height: 1.6em;
    }

    .btn {
        position: relative;
        display: inline-block;
        max-width: 200px;
        background: #30fe6c;
        color: #222;
        text-align: center;
        padding: 18px 30px;
        font-weight: 500;
        letter-spacing: 0.05em;
        text-decoration: none;
        margin-top: 10px;
    }

    #Home .men {
        position: absolute;
        bottom: 10px;
        right: 50px;
        max-height: 70vh;
    }

    /* Section Text Styles */
    .sectext {
        position: relative;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .sectext h2 {
        font-size: 3em;
        color: #fff;
    }

    .sectext p {
        max-width: 700px;
        text-align: center;
        color: #aaa;
        font-size: 1.1em;
        line-height: 1.5em;
    }

    /* About Section Styles */
    #About,
    #Donations,
    #Contact,
    #Portfolio,
    #Offers {
        position: relative;
        background: #34353a;
        min-height: 100vh;
        padding: 120px 100px;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    #About .content {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 20px;
        margin: 40px 0;
    }

    #About .content .service-box {
        background: #2e2f34;
        padding: 50px 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 20px;
        border: 2px solid #2e2f34;
    }

    #About .content .service-box:hover {
        border: 2px solid #30fe6c;
    }

    #About .content .service-box img {
        max-width: 100px;
        filter: invert(1);
        opacity: 0.5;
        transition: 0.5s;
    }

    #About .content .service-box:hover {
        opacity: 1;
    }

    #About .content .service-box h3 {
        color: #fff;
        font-weight: 500;
        color: #30fe6c;
    }

    .center {
        width: 100%;
        text-align: center;
    }

    /* Blog Section Styles */
#Donations .content {
    display: flex;
    gap: 20px; /* Adjust the gap between cards */
}

#Donations .card {
    flex: 1;
    background-color: #f4f4f4;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

#Donations .card:hover {
    transform: scale(1.05);
    box-shadow: 0 12px 20px rgba(0, 0, 0, 0.3);
}

#Donations .card-body {
    padding: 20px;
}

#Donations .card-body h2.domain {
    font-size: 1.8em;
    color: #333;
    margin-bottom: 10px;
}

#Donations .card-body p {
    font-size: 1.2em;
    color: #555;
    margin-bottom: 15px;
}

#Donations .card-body button {
    background-color: #30fe6c;
    color: #222;
    border: none;
    padding: 15px 30px;
    cursor: pointer;
    font-size: 1em;
    text-decoration: none;
    display: inline-block;
    border-radius: 5px;
    transition: background-color 0.3s ease-in-out;
}

#Donations .card-body button:hover {
    background-color: #222;
}


    /* Contact Section Styles */
    #Contact .content {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 20px;
        margin: 40px 0;
    }

    #Contact .content a {
        background: #2e2f34;
        height: 120px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        font-size: 1.2em;
        color: #fff;
        transition: 0.5s;
    }

    #Contact .content a:hover {
        background: #30fe6c;
    }

    #Contact .content a ion-icon {
        color: #30fe6c;
        font-size: 1.5em;
        margin-right: 10px;
        transition: 0.5s;
    }

    #Contact .content a:hover,
    #Contact .content a:hover ion-icon {
        color: #222;
    }

    /* Offers Section Styles */
    #Offers .content {
        display: flex;
        justify-content: space-between;
    }

    #Offers .service-box {
        background: #2e2f34;
        flex: 0 0 auto;
        width: 25%;
        text-align: center;
    }

    #Offers .content .service-box {
        background: #2e2f34;
        padding: 50px 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 20px;
        border: 2px solid #2e2f34;
    }

    #Offers .content .service-box:hover {
        border: 2px solid #30fe6c;
    }

    #Offers .content .service-box img {
        max-width: 100%;
    }

    #Offers .content .service-box h3 {
        color: #fff;
        font-weight: 500;
        color: #30fe6c;
    }

    /* Media Queries */
    @media (max-width: 900px) {
        header {
            padding: 20px 50px;
        }

        #Home {
            padding: 150px 50px;
            flex-direction: column;
            padding-bottom: 0;
        }

        #Home .content h2 {
            font-size: 4em;
        }

        .btn {
            max-width: 160px;
            padding: 10px 20px;
        }

        #Home .men {
            position: absolute;
            height: 50vh;
            right: 0;
        }

        .sectext h2 {
            font-size: 2em;
            text-align: center;
        }

        #Services,
        #Contact {
            padding: 100px 50px;
        }

        #Services .content,
        #Contact .content {
            grid-template-columns: repeat(2, 1fr);
        }

        .menu {
            position: relative;
            width: 30px;
            height: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            background: #f00;
        }

        .menu::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background: #fff;
            transform: translateY(-10px);
            transition: 0.5s;
            box-shadow: 0 10px #fff;
        }

        .menu::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background: #fff;
            transform: translateY(10px);
            transition: 0.5s;
        }

        header.active .menu::before {
            transform: translateY(0px)rotate(45deg);
        }

        header ul {
            display: none;
        }
    }

    @media (max-width: 700px) {
        #Home .content h2 {
            font-size: 3em;
        }

        #Home::before {
            width: 80vw;
            height: 40vw;
            border-top-right-radius: 80vw;
            border-top-left-radius: 80vw;
        }

        #Home .men {
            height: 40vh;
        }

        #About .content,
        #Contact .content {
            grid-template-columns: repeat(1, 1fr);
        }

        #Contact .content a {
            height: 80px;
        }
    }

    </style>
    <body>
        <header>
            <a href="#" class="logo"><img src="logo.png" alt="Logo"></a>
            <div class="menu"></div>
            <ul class="nav">
        <li class="active"><a href="#Home">Home</a></li>
        <li><a href="#About">About Us</a></li>
        <li><a href="#Donations">Donations</a></li>
        <li><a href="#Contact">Contact Us</a></li>
    </ul>

        </header>
        <section id="Home">
            <div class="content">
                <h2>FoodSavers</h2>
                <p>"When we give, we open the way for receiving. Giving is not just a duty; it is a joy. It's not just an act; it's a lifestyle. The most meaningful gifts are the ones given without expecting anything in return." ¬ Winston Churchill</p>
                <a href="login.php" class="btn">Login</a>
            </div>
            <img src="kk.png" alt="" class="men">
        </section>
        <section id="About">
            <div class="sectext">
                <h2>What we offer</h2>
                <p>FoodSavers is committed to bridging the gap between those who want to contribute and those in need. Our services include:</p>
            </div>
            <div class="content">
                <div class="service-box">
                    <img src="donation.png" alt="">
                    <h3>Donation opportunities</h3>
                </div>
                <div class="service-box">
                    <img src="dist.png" alt="">
                    <h3>Distribution services</h3>
                </div>
                <div class="service-box">
                    <img src="support.png" alt="">
                    <h3>Community Support</h3>
                </div>
                <div class="service-box">
                    <img src="edu.png" alt="">
                    <h3>Food education program</h3>
                </div>
                </div>
            </div>
            <div class="center">
                <a href="login.php" class="btn">Get Involved</a>
            </div>
        </section>
       
      <section id="Donations">
    <div class="sectext">
        <h2 class="today">Today's wastage is tomorrow's shortage</h2>
        <p>Start Today</p>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-body">
                <h2 class="domain">How to Donate</h2>
                <p>Add items to FoodSavers</p>
                <p>Accept the Request</p>
                <p>Happy Sharing😇</p>
                <button type="button" class="btn btn-dark btn-lg download-button"><a href="login.php">Get started</a></button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2 class="domain">How to Request</h2>
                <p>Browse listings</p>
                <p>Send a Request</p>
                <p>Happy Sharing😇</p>
                <button type="button" class="btn btn-dark btn-lg download-button"><a href="login.php">Get started</a></button>
            </div>
        </div>
    </div>
</section>


        <section id="Contact">
            <div class="sectext">
                <h2>Ways to Contact Me</h2>
                <p>We are a company that helps distribute food to food shelters</p>
            </div>
            <div class="content">
                <a href="#">
                    <ion-icon name="mail-open-outline"></ion-icon> foodsavers@gmail.com
                </a>
                <a href="#">
                    <ion-icon name="call-outline"></ion-icon> +254 797684879
                </a>
                <a href="#">
                    <ion-icon name="logo-twitter"></ion-icon> @foodsavers
                </a>
                <a href="#">
                    <ion-icon name="logo-instagram"></ion-icon> @foodsavers
                </a>
            </div>
        </section>
        <section id="Offers">
            <div class="sectext">
                <h2>Offers available</h2>
                <p>These are some of the offers we have available</p>
            </div>
            <div class="content">
                <div class="service-box">
                    <img src="six.jpg" alt="">
                    <h3>Maasai Mara</h3>
                </div>
                <div class="service-box">
                    <img src="lodge (2).jpg" alt="">
                    <h3>Nakuru</h3>
                </div>
                <div class="service-box">
                    <img src="zanzibar (2).jpg" alt="">
                    <h3>Zanzibar</h3>
                </div>
                <div class="service-box">
                    <img src="diani.jpg" alt="">
                    <h3>Diani</h3>
                </div>
                
            </div>
            <div class="center">
                <a href="safari.php" class="btn">Book Now</a>
            </div>
            
        </section>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script>
            let list = document.querySelectorAll('.nav li');

            function active() {
                list.forEach((i) =>
                    i.classList.remove('active'));
                this.classList.add('active');
            }
            list.forEach((i) =>
                i.addEventListener('click', active));

            let menu = document.querySelector('.menu');
            let header = document.querySelector('.header');
            menu.onClick = function() {
                header.classList.toggle('active');
            }
        </script>
    </body>

    </html>