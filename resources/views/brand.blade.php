<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Branding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>

<body>
    {{ View::make('header') }}
    <div class="box">
        <div class="brand" id="brand">
            <h2><span>BRANDING</span></h2>
            <div class="brand1">
                <p>
                    Once your brand's been built, we'll help you leverage it by designing a logo or visual identity
                    system that
                    represents its values and personality. We'll also work with you on developing other marketing
                    materials like
                    product packaging design (if applicable) or social media graphics that reflect your brand's look and
                    feel.
                    <br>
                    Branding is a form of communication where an organization makes its identity clear by establishing a
                    strong emotional connection between
                    its audience members and itself through its products or services as well as how is represents itself
                    externally.
                </p>
            </div>
            <div class="brand2">
                <h4><span>Our digital marketing services include :</span></h4>
                <p>
                    -Search Engine Optimization (SEO)<br>
                    -PPC Management<br>
                    -Email Marketing<br>
                    -Social Media Management
                </p>
                <img src="image/img7.jfif" alt="error!">
            </div>
        </div>


        {{ View::make('footer') }}
    </div>
</body>

<style>
    .box {
        background-color: #ac9fdd;
        color: rgb(0, 0, 0);
        width: 100vw;
        height: 81vh;
        overflow: scroll;
        text-align: center;
    }

    .brand{
        background-color: transparent;
            width: 98.9vw;
            height: 90vh;
        }

        .brand1 {
            background-color: transparent;
        width: 90vw;
        height: 20vh;
        margin-left: 5vw;
    }
    .brand2{
        background-color: transparent;
        width: 90vw;
        height: 50vh;
        margin-left: 5vw;
        text-align: left;
    }

    .brand2 img{
        width: 35vw;
        height: 35vh;
        margin-left: 25vw;
    }


    @media (max-width:750px){
        .box {
            width: 100vw;
            height: 100vh;
            font-size: 3.5vw;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .brand{
            width: 100vw;
            height: 83vh;
        }

        .brand1 {
        width: 90vw;
        height: 30vh;
        margin-left: 5vw;
    }
    .brand2{
        width: 90vw;
        height: 50vh;
        margin-left: 5vw;
    }

    .brand2 img{
        height: 30vh;
    }

    }
</style>

</html>
