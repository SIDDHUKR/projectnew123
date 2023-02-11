<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web & App Development</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>

<body>
    {{ View::make('header') }}
    <div class="box">

        {{-- -------------------------WEBSITE & APP----------------------------- --}}

        <div class="website" id="website">
            <h1><span>WEB DEVELOPMENT</span></h1>
            <div class="website1">
                <p>
                    We At Kampritech Use Cutting-Edge Technology To Our Client’s Website. We Have Chosen The Most Secure
                    Platform Like WordPress, Core PHP Language For The Development Of Efficient And Dynamic Website
                    Comprehensive Categorization Of Your Every Product And Service. As The Emerging Eminent Website
                    Development Organization, We Are Focused On Offering The Most Relevant Website Development Solution
                    From Crafting UX/UI To Entire Marketing Concepts.
                </p>
            </div>
            <div class="web">
                <div class="web1">
                    <img src="image/mrw.jfif" alt="error!">
                    <h2><span>MOBILE RESPONSE WEBSITE</span></h2>
                    <p>
                        We Apply Our Dynamic Approach To Create A Mobile-Friendly Website To Drive More Traffic For Your
                        Brands. Our Key Focus Is On Offering Services That May Help You To Access Your Targeted Audience
                        Easily And In A Hassle-Free Manner.
                    </p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
                <div class="web1">
                    <img src="image/ufw.png" alt="error!">
                    <h2><span>USER FRIENDLY WEBSITE</span></h2>
                    <p>
                        Kampritech Considers All Basic Aspects That Are Required To Make Your Website Easily Accessible
                        To Your Audiences. Therefore, We Emphasize Creating A User-Friendly Website Through Your
                        Customer Can Purchase Your Services.
                    </p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
                <div class="web2">
                    <img src="image/sfw.jfif" alt="error!">
                    <h2><span>SEO FRIENDLY WEBSITE</span></h2>
                    <p>
                        Our Website Development Process Is Based On SEO-Friendly Factors. We Understand The Value Of The
                        SEO Guidelines To Boost Your Website Visibility And Attract Visitors As Much As Possible.
                    </p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
                <div class="web3">
                    <img src="image/swd.png" alt="error!">
                    <h2><span>SECURE WEB DEVELOPMENT</span></h2>
                    <p>
                        The Security Of Your Website Is Our Top Priority. Thus, The Web Development Team At Kampritech
                        Follows The Security Policies To Create A Secure Website To Help You Grow Your Business Safely.
                    </p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
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
    }

    .website {
        background-color: #a98cdd;
        color: rgb(255, 255, 255);
        width: 98.9vw;
        height: 101vh;
        text-align: center;
        font-size: 1.5vw;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .website1 {
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
        height: 62vh;
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
        height: 6vh;
        margin-top: 1vh;
        /* border-radius: 100%; */
        /* border:1px solid red; */
    }



    @media (max-width:750px) {

        .box {
            width: 100vw;
            height: 100vh;
        }

        .website {
            width: 100vw;
            height: 154vh;
            font-size: 3.5vw;
        }

        .website1 {
        width: 90vw;
        margin-left: 5vw;
    }

    .web {
        width: 98.9vw;
        height: 122vh;
    }

    .web1 {
        width: 40vw;
        height: 60vh;
        margin-left: 6.5vw;
        font-size: 3.5vw;
    }

    .web2 {
        width: 40vw;
        height: 63vh;
        margin-left: -86vw;
        font-size: 3.5vw;
        margin-top: 64vh;
    }

    .web3 {
        width: 43vw;
        height: 58vh;
        /* margin-left: -30vw; */
        font-size: 3.5vw;
        margin-top: 64vh;
    }

    .website img {
        width: 10vw;
        height: 10vh;
    }


       }
</style>

</html>
