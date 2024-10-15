<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Me</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #fae1dd;
        }

        .container {
            position: relative;
        }

        .valentines {
            position: relative;
            top: 50px;
            cursor: pointer;
            animation: up 3s linear infinite;
        }

        .envelope {
            position: relative;
            width: 300px;
            height: 200px;
            background-color: #f08080;
        }

        .envelope:before {
            background-color: #f08080;
            content: "";
            position: absolute;
            width: 212px;
            height: 212px;
            transform: rotate(45deg);
            top: -105px;
            left: 44px;
            border-radius: 30px 0 0 0;
        }

        .card {
            position: absolute;
            background-color: #eae2b7;
            width: 270px;
            height: 170px;
            top: 5px;
            left: 15px;
            box-shadow: -5px -5px 100px rgba(0,0,0,0.4);
            z-index: 5; /* Z-index untuk kartu */
            
        }

        .card:before {
            content: "";
            position: absolute;
            border: 3px solid #003049;
            border-style: dotted;
            width: 240px;
            height: 140px;
            left: 12px;
            top: 12px;
            z-index: 5; /* Z-index untuk kartu */
        }

        .text {
            position: absolute;
            font-family: 'Brush Script MT', cursive;
            font-size: 28px;
            text-align: center;
            line-height: 25px;
            top: 19px;
            left: 85px;
            color: #003049;
        }

        .heart {
            background-color: #d62828;
            display: inline-block;
            height: 30px;
            margin: 0 10px;
            position: relative;
            top: 110px;
            left: 105px;
            transform: rotate(-45deg);
            width: 30px;
        }

        .heart:before,
        .heart:after {
            content: "";
            background-color: #d62828;
            border-radius: 50%;
            height: 30px;
            position: absolute;
            width: 30px;
        }

        .heart:before {
            top: -15px;
            left: 0;
        }

        .heart:after {
            left: 15px;
            top: 0;
        }

        .front {
            position: absolute;
            border-right: 180px solid #f4978e;
            border-top: 95px solid transparent;
            border-bottom: 100px solid transparent;
            left: 120px;
            top: 5px;
            width: 0;
            height: 0;
            z-index: 10;
        }

        .front:before {
            position: absolute;
            content: "";
            border-left: 300px solid #f8ad9d;
            border-top: 195px solid transparent;
            left: -120px;
            top: -95px;
            width: 0;
            height: 0;
        }

        .shadow {
            position: absolute;
            width: 330px;
            height: 25px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.3);
            top: 280px; /* Adjusted the shadow position */
            left: -15px;
            animation: scale 3s linear infinite;
            z-index: -1;
        }

        @keyframes up {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-30px);
            }
        }

        @keyframes scale {
            0%, 100% {
                transform: scaleX(1);
            }
            50% {
                transform: scaleX(0.85);
            }
        }

        .hearts {
            position: absolute;
    z-index: 15; /* Z-index lebih tinggi dari kartu */
    top: -100px; /* Sesuaikan agar muncul di atas kartu */
    left: 60px;
    display: none; /* Mulai dari keadaan tersembunyi */
        }

        .one, .two, .three, .four, .five {
            background-color: red;
            display: inline-block;
            height: 10px;
            margin: 0 10px;
            position: relative;
            transform: rotate(-45deg);
            width: 10px;
            top: 50px;
        }

        .one:before,
        .one:after, .two:before, .two:after, .three:before, .three:after, .four:before, .four:after, .five:before, .five:after {
            content: "";
            background-color: red;
            border-radius: 50%;
            height: 10px;
            position: absolute;
            width: 10px;
        }

        .one:before, .two:before, .three:before, .four:before, .five:before {
            top: -5px;
            left: 0;
        }

        .one:after, .two:after, .three:after, .four:after, .five:after {
            left: 5px;
            top: 0;
        }

        .one {
            left: 10px;
            animation: heart 1s ease-out infinite;
        }

        .two {
            left: 30px;
            animation: heart 2s ease-out infinite;
        }

        .three {
            left: 50px;
            animation: heart 1.5s ease-out infinite;
        }

        .four {
            left: 70px;
            animation: heart 2.3s ease-out infinite;
        }

        .five {
            left: 90px;
            animation: heart 1.7s ease-out infinite;
        }

        @keyframes heart {
            0% {
                transform: translateY(0) rotate(-45deg) scale(0.3);
                opacity: 1;
            }
            100% {
                transform: translateY(-150px) rotate(-45deg) scale(1.3);
                opacity: 0.5;
            }
        }
    </style>
</head>
<body>

    <div class="container">  
        <div class="valentines">
          <div class="envelope"></div>
          <div class="front"></div>
          <div class="card">
            <div class="text">Semangat</br> Zahra</br>Rahmanita !!!</div>
            <div class="heart"> </div>
          </div>
          <div class="hearts">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
            <div class="four"></div>
            <div class="five"></div>
          </div>
        </div>
        <div class="shadow"></div>
    </div>

    <script>
        document.querySelector('.valentines').addEventListener('click', function () {
            document.querySelector('.card').style.top = '-90px'; // Open envelope
            document.querySelector('.hearts').style.display = 'block'; // Show hearts
        });
    </script>
</body>
</html>
