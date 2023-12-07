













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- styling the body and form -->
    
    <style>
        body {background: grey; margin: 0; scroll-behavior: smooth;}

        .card { background: whitesmoke;
             margin: auto;
             width: 450px;
             height: 400px;
             box-shadow: rgb(229, 252, 227);
             border-radius: 2px; }

             .banner3_div_p {
            font-weight: bold;
            font-size: 2em;
            color: tomato;
            text-align: center;
            margin-top: 50px;
            padding: 10px 20px;
            font-family: 'Times New Roman', Times, serif; }

        input[type=text] {
            width: 80%;
            padding: 10px 15px;
            margin: 10px 20px;
            /* box-sizing: border-box; */
            border: 1px solid tomato;
            border-radius: 4px }

            textarea {
            /* name="message"  style="width: 100%;" */
            width: 80%;
            border: 0.5px solid tomato;
            padding: 10px 15px;
            border-radius: 4px;
            margin: 10px 20px;
            resize: none;
            box-sizing: border-box; }

            .banner3_btn {
            padding: 10px 15px;
            border: 2px;
            background: tomato;
            color: aliceblue;
            text-decoration: none; }

            .btn {
                margin: auto;
                text-align: center;
            }


    </style>
</head>
<body>
    <div class= "card">
        <p class = "banner3_div_p" > Contact Form</p>
    <form action="">
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Email">

        <textarea placeholder="Message" rows="5" >  
        </textarea><br><br>

        <div class="btn">
        <a href="#" class="banner3_btn" > Send</a>
        </div>
    </form> 
    </div>
</body>
</html>



