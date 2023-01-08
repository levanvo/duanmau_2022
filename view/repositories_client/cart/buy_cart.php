<style>
    .info_product{
        background-image: url(https://img6.thuthuatphanmem.vn/uploads/2022/03/03/background-giay-cu-dep_090819739.jpg);
        background-size: 100% 100%;
        height: 500px;
        box-shadow: -5px -4px 2px white;
    }
    .info_account{
        background-image: url(https://img2.thuthuat123.com/uploads/2020/07/10/hinh-nen-background-powerpoint-con-thuyen_034828426.jpg);
        background-size: 100% 100%;
        height: 500px;
        box-shadow: -5px -4px 2px white;
    }
    .vook:hover{
        box-shadow: 0 0 7px 1px white;
    }
</style>
<?php
    $account_one=account_one($id_account);
    $product_one=products_one($id_pd);
    // echo $name_pd;
?>
<!-- Relationship levanvo-1000px -->
        <div class="levanvo bg-sky-500">
            <h1 class="ml-10 font-bold text-4xl mt-7 text-center mb-5 shadow_control">Transaction information</h1>
            <form action="index.php?client=buy_cart_bill" class="" method="post" enctype="multipart/form-data">
                <div class="flex space-x-5">
                    <div class="info_product hover:translate-y-[-5px] duration-200 w-[400px] ml-2">
                        <h1 class="ml-10 text-2xl text-orange-500 mt-5 text-center mb-5 shadow_control mr-4 underline">Info product</h1>
                        <?php
                            echo"<img class='w-[300px] h-[300px] rounded-lg mx-auto' src='../../img/$img_pd' alt='error img'>";
                            echo"<input type='text' value='".$img_pd."' name='img_pd' hidden>";
                            echo"<input type='text' value='".$id_pd."' name='id_pd' hidden>";
                            echo"<input type='text' value='".$price_pd."' name='price_pd' hidden>";
                            echo"<input type='text' value='".$name_pd."' name='name_pd' hidden>";
                            echo"<div class='w-[300px] mx-auto mt-2'>
                                <input class='w-[300px] text-gray-900 text-center mb-1 font-bold' type='text ' value='".$name_pd."' disabled>
                                <input class='w-[300px] text-gray-900 text-center' type='text' value='$".$price_pd."' disabled>
                                <p class='text-center text-white'>Let choose quantity (it's required)</p>
                                <input class='w-[300px] text-gray-900 text-center' type='number' min='1' name='quanlity_pd' placeholder='quantity' required>
                            </div>";
                        ?>
                    </div>
                    <div class="info_account hover:translate-y-[-5px] duration-200 w-[572px]">
                        <h1 class="ml-10 text-2xl text-orange-500 mt-5 text-center mb-5 shadow_control mr-4 underline">Info account</h1>
                        <?php
                            echo"<img class='w-[150px] ml-5 h-[150px] rounded-lg ' src='../../img/$img_account' alt='error img'>";
                            echo"<input type='text' value='".$img_account."' name='img_account' hidden>";
                            echo"<input type='text' value='".$id_account."' name='id_account' hidden>";
                            echo"<input type='text' value='".$name_account."' name='name_account' hidden>";
                            echo"<input type='text' value='".$email_account."' name='email_account' hidden>";
                            echo"<input type='text' value='".date("j/m/Y h:i:s A")."' name='time' hidden>";
                            echo"<div class='mt-2 ml-5 text-gray-900'>
                                <p>Name: <span>".$name_account."</span></p>
                                <p>Email: <span>".$email_account."</span></p>
                                <p class='text-center text-red-500'> enter your information more (it's required)</p>
                                <p>Your phone: <input type='text' name='phone_account' placeholder='...your phone' pattern='0[0-9]{9,10}' required></p>
                                <br>
                                <p>Your address:</p>
                                <textarea cols='70' rows='5' name='address_account' placeholder='...your address !' required></textarea>
                            </div>";
                        ?>
                    </div>
                </div>
                <div class="flex justify-center mt-9">
                    <button class="w-[700px] h-10 leading-10 bg-white text-black hover:scale-110 duration-100 vook font-bold" name="btn_buy_cart">Payment</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>