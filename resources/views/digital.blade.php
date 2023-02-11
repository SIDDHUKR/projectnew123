<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Marketing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="image/favicon.ico" type="image/x-icon">
</head>

<body>
    {{ View::make('header') }}

    <div class="box">

        {{-- -------------------------Digital Marketing----------------------------- --}}

        <div class="digital" id="digital">
            <h1><span>Digital Marketing</span></h1>
            <div class="digital1">
                <p>
                    Kampritech Team Holds The Key Competencies In Trafficking And Conversion For Their Client’s
                    Business. They Research Intensively To Improve The Digital Marketing Services And Meet Their
                    Clients’ Needs.
                    Every Business Needs A Strategic Platform To Get Shifted To The Next Level Of Achievements. The
                    Retention Of Growth Can Be Managed With The Appropriate Services Required To Hold Presence Through
                    The Internet-Based Source. Our Result-Oriented Digital Marketing Services Include The Following:-
                </p>
            </div>
            <div class="web">
                <div class="web1">
                    <img src="image/seo.png" alt="error!">
                    <h2><span>SEARCH ENGINE OPTIMIZATION</span></h2>
                    <p>
                        We Offer The Standard Search Engine Optimization Services To Improve The Visibility Of Our
                        Client’s Websites To Let Them Reach Out To The Targeted Audiences Easily. We Optimize The
                        Website Using The SEO Rules To Increase Trafficking And To Enhance The Accessibility To The
                        People When They Search For Your Products And Services.
                    </p>
                    <button class="btn btn-primary"><a href="#contact">Get Started</a></button>
                </div>
                <div class="web1">
                    <img src="image/graph.jfif" alt="error!">
                    <h2><span>PAY PER CLICK MARKETING</span></h2>
                    <p>
                        We At Kampritech Believe In Adopting An Online Advertising Strategy Through Google Ads To
                        Provide You With A Systematic Strategy For Online Businesses. Work Through Pay-Per-Click
                        Services To Increase The Trafficking On Your Website Within A Short Span.
                    </p>
                    <button class="btn btn-primary"><a href="#contact">Get Started</a></button>
                </div>
                <div class="web2">
                    <img src="image/smm.png" alt="error!">
                    <h2><span>SOCIAL MEDIA MARKETING</span></h2>
                    <p>
                        The Promotion Of Services And Products Through Social Media Platforms Is Quite Prevalent In
                        Recent Days. Thus We Value The Importance Of Facebook, LinkedIn, Instagram, And Other Social
                        Media Sites Through Which Our Client’s Business Can Be Promoted. We Have Developed A
                        Well-Defined Stray To Optimize Social Media To Offer The Best Result To Our Clients.
                    </p>
                    <button class="btn btn-primary"><a href="#contact">Get Started</a></button>
                </div>
                <div class="web3">
                    <img src="image/dmswd.png" alt="error!">
                    <h2><span>SECURE WEB DEVELOPMENT</span></h2>
                    <p>
                        Our Website Development Services Are Based On Complete Security And We Enter Your Data Along
                        With Applying Authentication. Kampritech Takes Care Of The Strategic Design To Develop An
                        Effective Website With Complete Security.
                    </p>
                    <button class="btn btn-primary"><a href="#contact">Get Started</a></button>
                </div>
            </div>

        </div>

        {{-- ----------------------------infkuence marketing-------------------- --}}
        <div class="influ">
            <div class="influ1">
                <img src="image/infm.jfif" alt="error!">
                <h2><span>Influence Marketing</span></h2>
                <p>
                    The overall increase in influencer marketing, and the growing importance of Instagram as a highly
                    visible social media channel, has led to a significant increase in brands spending money on
                    influencers operating there. 55% of marketers intended to use Instagram for influencer marketing in
                    2021, second only to YouTube.
                </p>
                <button class="btn btn-primary"><a href="#contact">Get Started</a></button>
            </div>
            <div class="influ2">
                <img src="image/content.jfif" alt="error!">
                <h2><span>Content Marketing</span></h2>
                <p>
                    Content marketing is a form of marketing focused on creating, publishing, and distributing content
                    for a targeted audience online attract attention and generate leads, expand their customer base,
                    generate or increase online sales, increase brand awareness or credibility, and engage an online
                    community of users.
                </p>
                <button class="btn btn-primary"><a href="#contact">Get Started</a></button>
            </div>

        </div>

        {{-- ----------------------------Navbar--------------------------------- --}}

        {{ View::make('footer') }}
    </div>
</body>
<style>
    .box {
        background-color: #ffffff;
        color: rgb(132, 130, 130);
        width: 100vw;
        height: 81vh;
        overflow: scroll;
        text-align: center;
    }

    .digital {
        background-color: #a98cdd;
        color: rgb(255, 255, 255);
        width: 98.9vw;
        height: 101vh;
        text-align: center;
        font-size: 1.5vw;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .digital1 {
        background-color: transparent;
        width: 80vw;
        height: 20vh;
        margin-left: 10vw;
    }

    .web {
        background-color: transparent;
        color: rgb(255, 255, 255);
        width: 98.9vw;
        height: 72vh;
        display: inline-flex;
    }

    .web1 {
        background-color: #ffffff;
        color: rgb(0, 0, 0);
        width: 18vw;
        height: 62vh;
        margin-left: 5.6vw;
        margin-top: 2vh;
        font-size: 1vw;
    }

    .web2 {
        background-color: #ffffff;
        color: rgb(0, 0, 0);
        width: 18vw;
        height: 65vh;
        margin-left: 5.6vw;
        margin-top: 2vh;
        font-size: 1vw;
    }

    .web3 {
        background-color: #ffffff;
        color: rgb(0, 0, 0);
        width: 18vw;
        height: 62vh;
        margin-left: 5.6vw;
        margin-top: 2vh;
        font-size: 1vw;
    }

    .web p {
        padding: 1vw;
        text-align: left;
    }

    .web img {
        width: 3vw;
        height: 5vh;
        border-radius: 100%;
        /* border:1px solid red; */
    }

    .web button a {
        text-decoration: none;
        color: #ffffff;
    }

    .influ {
        background-color: #a98cdd;
        color: black;
        width: 98.9vw;
        height: 65vh;
        display: inline-flex;
    }

    .influ1 {
        background-color: #ffffff;
        color: black;
        width: 18vw;
        height: 62vh;
        margin-left: 30vw;
    }

    .influ button a {
        text-decoration: none;
        color: white;
    }

    .influ img {
        width: 3vw;
        height: 5vh;
        border-radius: 100%;
    }

    .influ2 {
        background-color: #ffffff;
        color: black;
        width: 18vw;
        height: 59vh;
        margin-left: 5.6vw;
    }



    @media (max-width:750px) {

        .box {
            width: 100vw;
            height: 100vh;
        }

        .digital {
            width: 100vw;
            height: 165vh;
            font-size: 3.5vw;
        }

        .digital1 {
            width: 90vw;
            margin-left: 5vw;
        }

        .web {
            width: 98.9vw;
            height: 122vh;
        }

        .web1 {
            width: 40vw;
            height: 65vh;
            margin-left: 6.5vw;
            font-size: 3.5vw;
        }

        .web2 {
            width: 40vw;
            height: 68vh;
            margin-left: -86vw;
            font-size: 3.5vw;
            margin-top: 69vh;
        }

        .web3 {
            width: 43vw;
            height: 58vh;
            /* margin-left: -30vw; */
            font-size: 3.5vw;
            margin-top: 69vh;
        }

        .web img {
            width: 10vw;
            height: 10vh;
        }

        .influ{
            width: 100vw;
            height: 70vh;
        }

        .influ1{
            width: 41vw;
            margin-left: 6.5vw;
            height: 68vh;
        }

        .influ2{
            width: 41vw;
            height: 68vh;
        }

    }
</style>

</html>
