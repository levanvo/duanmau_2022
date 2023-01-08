<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Foods - Cung cấp thực phẩm sạch</title>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRenuVUJMsGK7iNcvoXHjbjsn9xGGK8rTvwCw&usqp=CAU">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!--animation-->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* the lamp */
        .all,#power{
            transition: all 1s;
        }
        /* special others */
        .me >a,.me2, .me3{
            width: 160px;
            border-radius: 5px;
            color: black;
            font-size: 18px;
            height: fit-content;
            border: 1px solid #0099FF;
            margin: auto;
            transition: all 0.2s;
        }
        .me >a:hover,.me2:hover,.me3:hover{
            color: orange;
            transition: all 0.1s;
            transform: scaleX(1.1);
        }
        .me2:hover .con2{   
            z-index: 1;
            transition: all 0.1s;
            transform: translateY(0);
            opacity: 1;
        }
        .con2{
            padding-top: 23px;
            z-index: -1;
            width: 600px;
            margin-left: -200px;
            position: absolute;
            transition: all 0.4s;
            transform: translateY(10px);
            opacity: 0;
            color: green;
            border: none;
        }
        .con2 a:hover{
            color: orangered;
            text-decoration: underline;
        }
        /* feedback */
        .me3,.me2{
            position: relative;
            border: #0099FF 1px solid;
            height: 30px;
            width: 160px;
            font-size: 18px;
            border-radius: 5px;
            margin: auto;
        }
        .me3:hover .con3{
            display: block;
        }
        .con3{
            position: absolute;
            display: none;
            color: black;
            padding-top: 15px;
        }
        .con3 li{
            font-size: 15px;
            background-color: #CCCCCC;
            width: 210px;
            margin-top: 5px;
            transition: all 0.4s;
        }
        .con3 li:hover{
            color: white;
            width: 240px;
            transition: all 0.2s;
        }
        .s1{
            background-color: white;
            font-size: 15px;
        }
        .footer{
            background-image: url(https://img.lovepik.com//back_pic/05/67/29/225b7f9ad2f28e6.jpg_wh860.jpg);
            background-size: 100% 100%;
        }
    </style>
</head>
<body>
    <div class=" flex justify-between mt-1 h-10 bg-orange-400">
        <div class="flex">
            <p class="text-white leading-10 mr-5"><span class="ml-5 font-bold"><span class="text-lg text-sky-200">Contact site owner:</span> vole543215@gmail.com</span></p>
            <marquee class="my-auto text-white font-light w-[400px]">Super shocking promotion for customers who buy products for the first time 🔥🔥🔥</marquee>
        </div>
        <div class="flex space-x-5">
            <p class="leading-10 text-gray-600">Share to orther apps: </p>
            <a class="my-auto" title="Facebook" href="#"><img class="w-7 h-7 hover:-translate-y-[2px] duration-200" src="./img/img_icon/facebook.png" alt=""></a>
            <a class="my-auto" title="Tiktok" href="#"><img class="w-7 h-7 hover:-translate-y-[2px] duration-200" src="./img/img_icon/tiktok.png" alt=""></a>
            <a class="my-auto" title="Tinder" href="#"><img class="w-7 h-7 hover:-translate-y-[2px] duration-200" src="./img/img_icon/tinder.png" alt=""></a>
            <a class="my-auto" title="Twitter" href="#"><img class="w-7 h-7 hover:-translate-y-[2px] duration-200" src="./img/img_icon/twitter.png" alt=""></a>
            <a class="my-auto" title="Zalo" href="#"><img class="w-7 h-7 hover:-translate-y-[2px] duration-200" src="./img/img_icon/zalo.png" alt=""></a>
            <div class="w-10"></div>
            <div class="lamp w-20 my-auto flex space-x-2">
                <a href="#"><img class="w-7 h-7 hover:scale-110 duration-200" src="./img/img_icon/lamp.png" alt="" id="lamp"></a><span class="mr-20 my-auto text-white font-bold" id="power">On</span>
            </div>
        </div>
    </div>
    <div class="all w-[1300px] mx-auto">
        <div class="menu flex">
            <a href="index.php?act=web"><img class="w-52 h-20 hover:scale-110 duration-200" src="./img/img_icon/logo1.png" alt=""></a>
            <ul class="me flex justify-center space-x-5 font-bold text-center">
                <a href="index.php?act=web"><li>Home</li></a>
                <li class="me2">Special others *
                    <div class="con2 flex justify-center">
                        <div class="s1 w-[200px] border-r border-gray-200">
                            <h2 class="text-center text-xl text-gray-700">Phần 1</h2>
                            <hr>
                            <a href="#"><p>Lê Văn Võ</p></a>
                            <a href="#"><p>Lê Văn Võ</p></a>
                            <a href="#"><p>Lê Văn Võ</p></a>
                            <a href="#"><p>Lê Văn Võ</p></a>
                            <a href="#"><p>Lê Văn Võ</p></a>
                            <a href="#"><p>Lê Văn Võ</p></a>
                        </div>
                        <div class="s1 w-[200px]">
                            <h2 class="text-center text-xl text-gray-700">Phần 2</h2>
                            <hr>
                            <a href="#"><p>Lê Văn Võ</p></a>
                            <a href="#"><p>Lê Văn Võ</p></a>
                            <a href="#"><p>Lê Văn Võ</p></a>
                            <a href="#"><p>Lê Văn Võ</p></a>
                            <a href="#"><p>Lê Văn Võ</p></a>
                            <a href="#"><p>Lê Văn Võ</p></a>
                        </div>
                        <div class="s1 w-[200px] relative">
                            <img class="w-56 h-56" src="https://img.pikbest.com/backgrounds/20190415/food-beauty-guest-cartoon-food-festival-poster-background-image_1809663.jpg!bwr800" alt="">
                            <p class="absolute top-44 left-6 -rotate-12 text-sm text-red-500">Chance get up to 50% discount</p>
                        </div>
                    </div>
                </li>
                <li class="me3">Feedback *
                    <ul class="con3">
                        <a href="tel:0961556217"><li>Call phone</li></a>
                        <a href="http://zalo.me/0961556217"><li>Zalo</li></a>
                        <a href="mailto:vole543215@gmail.com"><li>Email</li></a>
                    </ul>
                </li>
                <a href="#"><li>Blog</li></a>
                <a href="#"><li>Contact</li></a>
            </ul>
            <div class="w-[220px]">
                <div class="user mb-1 flex justify-center">
                    <?php
                        if(isset($_SESSION["vole"]) && $_SESSION["vole"]!=""){
                            extract($_SESSION["vole"]);
                            echo'<div class="flex space-x-1 mt-[3px]">';
                                if($role == 1){
                                    echo'<a href="view/repositories_admin/index.php" class="flex mx-auto">
                                        <img class="w-6 h-6" src="./img/img_icon/admin.png" alt="">
                                        <p class="text-md text-orange-500 font-bold my-auto mr-1 hover:text-red-500">Admin</p>
                                    </a>';
                                }else{
                                    echo'<a href="view/repositories_client/index.php" class="flex mx-auto">
                                        <img class="w-7 h-7" src="./img/img_icon/client.png" alt="">
                                        <p class="text-md text-violet-500 font-bold my-auto mr-1 hover:text-red-500">Your Manager</p>
                                    </a>';
                                }
                                echo'
                                <span class="text-red-500">/</span>
                                <a onclick=\'return confirm("Are you sure exit account: -> '.$email_account.'");\' href="index.php?act=logout" class="flex mx-auto text-orange-500 hover:text-red-500"><p class="text-md font-bold my-auto">Sign out</p></a>
                            </div>';
                        }else{
                            echo'<a href="index.php?act=login" class="flex mx-auto text-red-500 hover:text-green-500"><img class="w-5 h-5 mt-1" src="./img/img_icon/user.png" alt=""><p class="text-md font-bold my-auto mt-1">Register and login</p></a>';
                        }
                    ?>
                </div>
                <hr>
                <div class="shop flex space-x-5 justify-center text-xs">
                    <?php
                        if(isset($_SESSION["vole"]) && $_SESSION["vole"]!=""){
                            if($role==1){
                                echo'
                                    <a href="#" class="hover:scale-95 hover:text-red-500 duration-100 hover:bg-gray-100 w-44 h-12 rounded-md font-bold">
                                        <img class="w-8 h-8 mx-auto" src="./img/img_icon/people.png" alt="">
                                        <p class="text-center">Event organization</p>
                                    </a>
                                ';
                            }else{
                                echo'
                                    <a href="view/repositories_client/index.php?client=cart" class="hover:scale-95 hover:text-red-500 duration-100 hover:bg-gray-100 w-44 h-12 rounded-md font-bold">
                                        <img class="w-8 h-8 mx-auto" src="./img/img_icon/shopping.png" alt="">
                                            <p class="text-center">Shopping cart</p>
                                    </a>
                                ';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        <hr>
    </div>
</body>

</html>