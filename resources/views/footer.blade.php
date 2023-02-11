 {{-- ----------------------------Navbar--------------------------------- --}}
 <div class="add" id="contact">
    <div class="message">
        <div class="message1">
            <h2><span>Get Instant Your Requirement</span></h2>
            <form action="add" method="post">
                @csrf
                <label>Name</label>
                <input name="name" type="name" placeholder="Name"><br><br>
                <label>Email</label>
                <input name="email" type="email" placeholder="Email"><br><br>
                <label>Number</label>
                <input name="number" type="number" placeholder="Number"><br><br>
                <label>text (optional)</label>
                <textarea name="text" type="text" placeholder="text"></textarea><br><br><br>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <div class="add1">
        <h2><span>Get In Touch</span></h2>
        <h3><span>Contact Us We'll Give You a Solution</span></h3>
        <div class="cont">
            <h5>Contact No</h5>
            <p>+91 9874563210</p>
            <p>+91 9630215487</p>
        </div>
        <div class="cont1">
            <h5>Email Id</h5>
            <p>kampritechdigi@gmail.com</a></p>
        </div>
        <div class="cont">
            <h5>Address</h5>
            <p>A-1108, GD Colony, Mayur Vihar Phase 3, New Delhi-110096
            </p>

        </div>
        <div class="cont1">
            <h5>Skype Id</h5>
            <p>kampritechdigital963.skype</p>

        </div>
    </div>
</div>


<div class="footer">
    <p>&copy;copyright:2023</p>
</div>

<style>
    .footer{
        background-color: #bbbbbb; color: black;
        width: 100w; height: 4vh; text-align: center;
    }

    .add {
        background-color: #5f539d;
        color: black;
        width: 98.9vw;
        height: 55vh;
        text-align: center;
        display: inline-flex
    }

    .message {
        background-color: #3d3c3d;
        color: rgb(255, 255, 255);
        width: 40vw;
        height: 55vh;
    }

    .message1 {
        background-color: transparent;
        color: rgb(255, 255, 255);
        width: 30vw;
        height: 45vh;
        margin-top: 5vh;
        margin-left: 5vw;
    }

    .message1 label {
        float: left;
        margin-left: 5vw;
    }

    .message1 input {
        float: right;
        margin-right: 5vw;
    }

    .message1 textarea {
        float: right;
        margin-right: 6vw;
    }

    .add1 {
        background-color: transparent;
        color: black;
        width: 58.9vw;
        height: 55vh;
    }

    .cont {
        background-color: transparent;
        color: rgb(0, 0, 0);
        width: 20vw;
        height: 15vh;
        float: left;
        margin-left: 8vw;
        margin-top: 3vh;
    }

    .add h5 {
        color: #ffffff;
    }

    .add1 span {
        color: #ffffff;
    }

    .cont1 {
        background-color: transparent;
        color: rgb(0, 0, 0);
        width: 20vw;
        height: 15vh;
        float: right;
        margin-right: 8vw;
        margin-top: 3vh;
    }




     /* ---------For Mobile--------- */
     @media (max-width:650px){

        .footer{
        width: 100vw;
    }

    .add {
            width: 100vw;
            height: 89vh;
            text-align: center;
            display: inline-block;
        }

        .message {
            width: 98.9vw;
            height: 39vh;
        }

        .message1 {
            width: 80vw;
            height: 33vh;
            margin-left: 10vw;
        }

        .add1 {
            width: 100vw;
            height: 47vh;
        }

        .cont {
            width: 35vw;
            height: 15vh;
        }

        .cont1 {
            width: 45vw;
            height: 15vh;
        }

}

</style>
