<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday Pat!</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-color: #f7f7f7;
            overflow-x: hidden;
        }
        .full-screen {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f7f7f7;
            flex-direction: column;
            padding: 20px;
            box-sizing: border-box;
        }
        .bubble-message {
            background-color: #ff4081;
            color: white;
            padding: 40px;
            border-radius: 25px;
            font-size: 28px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 90%;
            text-align: center;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        .scroll-down {
            font-size: 18px;
            color: #333;
            text-align: center;
            margin-top: 10px;
        }
        .scroll-down .arrow {
            font-size: 24px;
            margin-top: 5px;
            animation: bounce 2s infinite;
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(5px);
            }
            60% {
                transform: translateY(3px);
            }
        }
        .main-container {
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #ff4081;
        }
        p.emoji {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 0 20px;
        }

        /* Flip card styles */
        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 400px;
            perspective: 1000px;
            margin-bottom: 20px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
            cursor: pointer;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .flip-card-front {
            background-color: #fff;
            color: black;
            display: flex;
            flex-direction: column;
        }

        .flip-card-back {
            background-color: #ff4081;
            color: white;
            transform: rotateY(180deg);
            overflow-y: auto;
            padding: 20px;
            display: block;
        }

        .flip-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .flip-card-info {
            font-size: 14px;
            font-weight: 300;
            color: #555;
            margin-top: auto;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.05);
            border-radius: 0 0 10px 10px;
        }

        .container h2 {
            font-size: 24px;
            color: #333;
            margin: 10px 0;
        }

        .message-container {
            height: 100%;
            overflow-y: auto;
            padding-right: 10px;
        }

        .message-container::-webkit-scrollbar {
            width: 8px;
        }

        .message-container::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
        }

        .message-container::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.5);
            border-radius: 4px;
        }

        .message {
            font-size: 16px;
            line-height: 1.5;
            margin: 0;
            padding: 10px 0;
        }

        .footer {
            background-color: #ff4081;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 40px;
        }
        
        .footer p {
            margin: 0;
            font-size: 14px;
        }

        /* Media Queries for Responsive Design */
        @media (max-width: 768px) {
            h1 {
                font-size: 28px;
            }
            p.emoji {
                font-size: 28px;
            }
            .bubble-message {
                font-size: 24px;
                padding: 30px;
            }
        }
        @media (max-width: 480px) {
            h1 {
                font-size: 24px;
            }
            p.emoji {
                font-size: 24px;
            }
            .bubble-message {
                font-size: 20px;
                padding: 20px;
            }
            .flip-card {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
    <!-- Initial full-screen bubble message -->
    <div class="full-screen">
        <div class="bubble-message">
            Guess what day it is? It's your birthday!! 🎉
        </div>
        <div class="scroll-down">
            Scroll below <br>
            <span class="arrow">⬇️</span>
        </div>
    </div>

    <div class="main-container">
        <h1>Happy 21st Birthday, Pat!</h1>
        <p class="emoji">🎉🎂🎈</p>
        
        <div class="row">
            <!-- First Card: Message from Lia -->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('images/ray.jpg') }}" alt="Lia's Photo">
                        <h2>Message from Lia</h2>
                        <div class="flip-card-info">Click to see message</div>
                    </div>
                    <div class="flip-card-back">
                        <div class="message-container">
                            <p class="message">
                                HAPPY 21st BIRTHDAY PAT!!! 🥳🎉<br><br>
                                Yayyyy, you're in the 21 club now!! 🎊🍻<br><br>
                                I'm seriously so grateful to have you as my best friend! 🤗💕<br><br>
                                Wishing you all the absolute best - hope this year brings you tons of joy, awesome adventures, and everything you've been dreaming of! 🌟✨<br><br>
                                Love youuu! 🤗❤️
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Card: Message from Tasya -->
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="{{ asset('images/tasya.jpeg') }}" alt="Tasya's Photo">
                        <h2>Message from Tasya</h2>
                        <div class="flip-card-info">Click to see message</div>
                    </div>
                    <div class="flip-card-back">
                        <div class="message-container">
                            <p class="message">
                                Pataa happy birthday 🥳🎉 <br><br>
                                Semoga di umur yang baru kamu selalu diberikan kebahagiaan juga kesehatann, kuliahnyaa lancar, rejekinya juga lancar wkwk. Semoga yang terbaik selalu hadir dalam kehidupan pataa ❤️ <br><br>
                                Wish u all the best pat. God bless u. <br><br>
                                yuuk cepetan ke Bogor kita mainn hehe 🥺🤗
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>© Copyright 2024 for Pat's 21st Birthday</p>
    </footer>
</body>
</html>