<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="image/favicon.ico" type="image/x-icon">
    <title>Career</title>
</head>
<body>
    {{ View::make('header') }}

    <div class="box">
         <div class="box1"></div>
        <div class="newbox">
            <div class="newbox1">
                <h2><span>Join us as a intern</span></h2>
                <div class="new">
                <div class="new1">
                <h5>-Web Development</h5>
                <li>Responsive website Certificate</li>
                <li>Java Certificate</li>
                <li>PHP Certificate</li>
                <li>Frameswork</li>
            </div>
            <div class="new1">
                <h5>-Digital Marketing</h5>
                <li>Search Engine Optimization</li>
                <li>Social Media Marketing</li>
                <li>Digital Advertizment</li>
                <li>Content Marketing</li>
                <li>Email Marketing</li>
                <li>Infeulancer Marketing</li>
            </div>
        </div>
            </div>
            <div class="newbox2">
                <h2><span>Vacencies</span></h2>
                <li>Full Stack Java Developer, Angular, Web</li>
            </div>
        </div>

    {{ View::make('footer') }}
</div>
</body>

<style>

.box{
    background-color: #b09ce3;
    color: rgb(0, 0, 0);
    width: 100vw;
    height: 81vh;
    overflow: scroll;
}

.box1{
    background-image: url("image/Cimg6.jfif");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    color: rgb(145, 192, 238);
    width: 98.9vw;
    height: 45vh;
}

.newbox{
    background-color: transparent;
    color: black;
    width: 98.9vw;
    height: 54vh;
    display: inline-flex;
    text-align: center;
}

.newbox1 li{
    text-align: left;
    margin-left: 3vw;
}

.newbox1 h5{
    color: rgb(0, 0, 0);
    text-align: left;
    margin-left: 3vw;
}

.newbox1{
    background-color: transparent;
    color: rgb(255, 255, 255);
    width: 70vw;
    height: 54vh;
}

.new{
    display: inline-flex;
}

.new1{
    background-color: transparent;
    color: rgb(255, 255, 255);
    width: 40vw;
    height: 44vh;
    margin-right: 5vw;
}

.newbox2{
    background-color: transparent;
    color: rgb(255, 255, 255);
    width: 30vw;
    height: 54vh;
    border-left: 1px solid red;
}


@media (max-width:750px){
    .box{
        height: 100vh;
    }

    .newbox{
        height: 45vh;
        display: inline-block;
    }

    .newbox1{
        width: 100vw;
        height: 30vh;
    }

    .newbox2{
        width: 100vw;
        height: 15vh;
    }

    .new{
        width: 100vw;
        height: 30vh;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 3.5vw;
    }

    .new1{
        margin-left: 5vw;
    }

}


</style>


</html>
