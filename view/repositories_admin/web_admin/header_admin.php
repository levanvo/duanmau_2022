<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .levanvo{
            background-image: url(https://png.pngtree.com/background/20210711/original/pngtree-delicious-nutritious-meal-background-material-picture-image_1072228.jpg);
            background-size: 100% 100%;
            width: 1000px;
            height: 700px;
            color: white;
            /* border: 2px solid #555555; */
            overflow-y: scroll;
            box-shadow: inset 0 0 30px 2px white;
        }
        .levanvo::-webkit-scrollbar{
            width: 15px;
        }
        .levanvo::-webkit-scrollbar-thumb{
            background-color: #FFFFFF;
            border-radius: 10px;
            border: 2px solid #333333;
            /* box-shadow: 0 0 10px 1px white; */
        }
        .shadow_control{
            /* text-shadow: 0px 0px 0px white; */
            text-shadow: 1px 2px 1px white;
            /* animation: su 5s infinite ; */
        }
        .shadow_update{
            text-shadow: 1px 2px 1px orange;
        }
        /* @keyframes su{
            50%{
                text-shadow: 3px 3px 200px white;
            }
        } */
        .footer_admin{
            background-image: url(https://png.pngtree.com/thumb_back/fw800/back_our/20190620/ourmid/pngtree-catering-western-beef-cuisine-image_170055.jpg);
            background-size: 100% 100%;
        }
        .header_admin{
            box-shadow:inset 0px 3px 10px 0px white;
            margin-bottom: 2px;
        }
        .select_admin{
            background-image: url(https://i.pinimg.com/564x/8f/c0/8f/8fc08fd48cd8eda6dfca9ef25047c865.jpg);
            background-size: 110% 110%;
        }
        .vovan .img_icon{
            transform: rotate(0deg);
            transition: all 0.5s;
        }
        .vovan:hover .img_icon{
            transform: rotate(360deg);
            transition: all 0.5s;
        }
        .vovan:hover .text1{
            font-weight: bold;
            /* transition: all 0.5s; */
        }
        .img_profile:hover{
            box-shadow:  0 0 5px 1px white;
        }
    </style>
</head>
<?php
    if(isset($_SESSION["vole"])){
        extract($_SESSION["vole"]);
    }
?>
<body>
    <div class="header_admin w-[1300px] flex justify-between mx-auto bg-orange-300">
        <div class="img_logo ml-10">
            <a href="../../index.php?act=web"><img class="h-20 hover:scale-105 duration-200" src="../../img/img_icon/logo2.png" alt=""></a>
        </div>
        <div class="feature flex space-x-5 mr-10">
            <a class="my-auto" href="#"><img class="w-8 h-8 hover:scale-110 duration-200" src="../../img/img_icon/message.png" alt=""></a>
            <a class="my-auto" href="#"><img class="w-9 h-8 hover:scale-110 duration-200" src="../../img/img_icon/snooze.png" alt=""></a>
        </div>
    </div>
    
    <div class="w-[1300px] flex justify-center space-x-1 mx-auto relative">
        <div class="w-[296px] header_admin h-[700px] text-gray-200 select_admin">
            <h1 class="font-bold text-2xl text-center underline mb-1 text-white ml-2 mt-2">------- Profile -------</h1>
            <div class="profile text-center mb-5">
                <div class="w-20 h-20 mb-5 mx-auto rounded-2xl">
                    <a href="#"><img class="w-20 h-24 img_profile duration-200 rounded-2xl" src="../../img/<?php echo $img_account ?>" alt="error img"></a>
                </div>
                <p><?php echo $name_account ?></p>
                <p class="text-sm"><?php echo $email_account ?></p>
            </div>
            <h1 class="font-bold text-2xl text-center underline mb-10 text-white ml-2 mt-2">------- Control -------</h1>
            <div class=" mb-5 vovan w-48 mx-auto">
                <div><a href="index.php?admin=dashboard" class="flex justify-center space-x-2 w-48 mx-auto bg-white text-black"><img class="mt-[2px] w-4 h-4 my-auto img_icon" src="../../img/img_icon/dashboard.png" alt=""></div>
                <p class="text1">Dash board</p></a>
            </div>

            <div class=" mb-5 vovan w-48 mx-auto">
                <div><a href="index.php?admin=comments" class="flex justify-center space-x-2 w-48 mx-auto bg-white text-black"><img class="mt-[2px] w-5 h-5 my-auto img_icon" src="../../img/img_icon/comments.png" alt=""></div>
                <p class="text1">Manager comments</p></a>
            </div>

            <div class=" mb-5 vovan w-48 mx-auto">
                <div><a href="index.php?admin=products" class="flex justify-center space-x-2 w-48 mx-auto bg-white text-black"><img class="mt-[2px] w-5 h-5 my-auto img_icon" src="../../img/img_icon/products.png" alt=""></div>
                <p class="text1">Manager products</p></a>
            </div>

            <div class=" mb-5 vovan w-48 mx-auto">
                <div><a href="index.php?admin=categories" class="flex justify-center space-x-2 w-48 mx-auto bg-white text-black"><img class="mt-[2px] w-5 h-5 my-auto img_icon" src="../../img/img_icon/categories.png" alt=""></div>
                <p class="text1">Manager categories</p></a>
            </div>

            <div class=" mb-5 vovan w-48 mx-auto">
                <div><a href="index.php?admin=users" class="flex justify-center space-x-2 w-48 mx-auto bg-white text-black"><img class="mt-[2px] w-5 h-5 my-auto img_icon" src="../../img/img_icon/users.png" alt=""></div>
                <p class="text1">Manager users</p></a>
            </div>

            <div class=" mb-5 vovan w-48 mx-auto">
                <div><a href="index.php?admin=bills" class="flex justify-center space-x-2 w-48 mx-auto bg-white text-black"><img class="mt-[2px] w-5 h-5 my-auto img_icon" src="../../img/img_icon/bills.png" alt=""></div>
                <p class="text1">Manager bills</p></a>
            </div>
        </div>
    <!-- Relationship -->
        