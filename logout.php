<?php
session_start();  
session_destroy();
// header("LOCATION:index.php");
?>
<!DOCTYPE html>
<html>
        <head>
                <title>LOGOUT</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        </head>
        <style>
            *{
                padding:0;
                margin:0
             }
            .wrapper
            {
                height:30vh;
                display:flex;
                justify-content:center;
                align-items:center;
                background-color:rgb(255, 255, 255)
            }
            .checkmark__circle
            {
                stroke-dasharray: 166;
                stroke-dashoffset: 166;
                stroke-width: 5;
                stroke-miterlimit: 10;
                stroke: crimson;
                fill: none;
                animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards
            }
            .checkmark
            {
                width: 70px;
                height: 70px;
                border-radius: 50%;
                display: block;
                stroke-width: 2;
                stroke: #fff;
                stroke-miterlimit: 10;
                margin: 10% auto;
                box-shadow: inset 0px 0px 0px crimson;
                animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both
            }
            .checkmark__check
            {
                transform-origin: 50% 50%;
                stroke-dasharray: 48;
                stroke-dashoffset: 48;
                animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards
            }
            @keyframes stroke
            {
                100%
                {
                    stroke-dashoffset: 0
                }
            }
            @keyframes scale
            {
                0%, 100%
                {
                    transform: none
                }
                    50%
                    {
                        transform: scale3d(1.1, 1.1, 1)
                    }
                }
                @keyframes fill
                {
                    100%
                    {
                        box-shadow: inset 0px 0px 0px 30px crimson
                    }
                }
                .title-word {
                            animation: color-animation 4s linear infinite;
                          }
                          
                          .title-word-1 {
                            --color-1: #DF8453;
                            --color-2: #3D8DAE;
                            --color-3: #E4A9A8;
                          }
                          
                          .title-word-2 {
                            --color-1:  #99e09a;
                            --color-2: #ACCFCB;
                            --color-3: #55e5f0;
                          }
                          
                          .title-word-3 {
                            --color-1:#E4A9A8;
                            --color-2: #ea6765;
                            --color-3:  #ACCFCB;
                          }
                          
                          .title-word-4 {
                            --color-1: #3D8DAE;
                            --color-2: #DF8453;
                            --color-3: #ea6765;
                          }
                          
                          @keyframes color-animation {
                            0%    {color: var(--color-1)}
                            32%   {color: var(--color-1)}
                            33%   {color: var(--color-2)}
                            65%   {color: var(--color-2)}
                            66%   {color: var(--color-3)}
                            99%   {color: var(--color-3)}
                            100%  {color: var(--color-1)}
                          }
                          
                          /* Here are just some visual styles. 🖌 */
                          
                          .container {
                            display: grid;
                            place-items: center;  
                            text-align: center;
                            height: 30vh
                          }
                          
                          .title {
                            
                            font-weight: 600;
                            font-size: 30px;
                            text-transform: uppercase;
                          }
        </style>
        <body>
                <center>
                        <img src="logo.png" width="200px" height="100px">

                        <div class="wrapper">
                             <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"> 
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                 <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                             </svg>
                        </div>
                        <div class="container">
                            <h2 class="title">
                              <span class="title-word title-word-1">YOU HAVE </span>
                              <span class="title-word title-word-2">BEEN </span>
                              <span class="title-word title-word-3">LOGGED OUT</span>
                              <span class="title-word title-word-4">SUCCESSFULLY!</span>
                            </h2>
                          </div>
                </center>
               
        </body>
</html>