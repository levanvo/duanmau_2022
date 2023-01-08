<style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
    .anhvo{
        background-image: url(https://hanoispiritofplace.com/wp-content/uploads/2017/06/hinh-nen-powerpoint-dep-67.jpg);
        background-size: 100% 100%;
        color: white;
        /* #6c371a */
    }
    .text_style1 {
        font-family: 'Dancing Script';
        font-size: 26px;
        text-align: center;
        font-weight: bold;
    }
    .text_style2 {
        font-family: 'Dancing Script';
        font-size: 30px;
        text-align: center;
        font-family: cursive;
    }
    .border_x{
        border-right: 2px solid white;
        border-left: 2px solid white;
        box-shadow: 0 0 5px 1px white;
    }
    .all_k{
        overflow-y: scroll;
    }
    .all_k::-webkit-scrollbar{
        width: 15px;
    }
    .all_k::-webkit-scrollbar-thumb{
        background-color: white;
        border-radius: 5px;
        border: 1px solid pink;
    }
    .anh{
        border: 1px solid gray;
        height: 207px;
        border-radius: 3px;
        overflow-y: scroll;
    }
    .anh::-webkit-scrollbar{
        width: 10px;
    }
    .anh::-webkit-scrollbar-thumb{
        background-color: white;
    }
    .anhvanvo{
        overflow-y: scroll;
    }
    .anhvanvo::-webkit-scrollbar{
        width: 12px;
    }
    .anhvanvo::-webkit-scrollbar-thumb{
        background-color: white;
        border-radius: 4px;
        border: 1px dashed black;
    }
    .buy_pd,.buy_pd1{
        background: #6c371a;
        box-shadow: inset 0 0 2px 1px white;
    }
    .buy_pd:hover{
        box-shadow: inset 0 0 6px 1px white;
        background-color: #6c371a;
    }
</style>
<?php
    // $get_all_pd_k=products_all_kinds_diffirent($id_k,$id_pd);//all products of kind
    // $dem_k=0;
    // foreach($get_all_pd_k as $value){
    //     $dem_k++;
    // }
    // $get_pd_to_k=products_one_kinds($id_pd,$id_k);//one product
    // extract($get_pd_to_k);
?>
<!-- info products -->
<div class="w-[1300px] flex mx-auto anhvo mb-[410px]">
    <div class="w-[950px] flex h-[440px]"><!-- h to decide all -->
        <div class="w-[750px]">
            <h2 class="text_style2 ">Product's name: <?php echo $name_pd?></h2>
            <div class="one_pd flex space-x-5 mt-2">
                <div class="img_pd">
                    <img class="w-80 h-80 mt-5 ml-5 p-2 hover:p-0 duration-300 border border-white rounded-lg" src="img/<?php echo $img_pd?>" alt="">
                    <div class="flex justify-center space-x-3 mt-2 ml-4">
                        <?php
                            if(isset($_SESSION["vole"])){
                                extract($_SESSION["vole"]);
                                if($role==1){
                                    // echo $id_pd;
                                    echo"<a href='view/repositories_admin/index.php?admin=products&(window.location.href=index.php?admin=update_pd&id_pd=$id_pd)'><p class='text-center p-1 w-36 buy_pd'>Fix or change it</p></a>";//try to fix now but ...haizz
                                }else{
                                    echo'
                                        <a href="view/repositories_client/index.php?client=buy_cart&id_pd='.$id_pd.'&id_account='.$id_account.'"><p class="text-center p-1 w-36 hover:translate-y-[-2px] duration-100 buy_pd1">Buy now</p></a>
                                        <a href="view/repositories_client/index.php?client=cart&id_pd='.$id_pd.'&id_account='.$id_account.'"><p class="text-center p-1 w-36 hover:translate-y-[-2px] duration-100 buy_pd1">Add to cart</p></a>
                                    ';
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="side_r mt-5 w-[360px] h-[360px]">
                    <p class="text-lg text-gray-100">The name:<span class="text-xl ml-2"><?php echo $name_pd?></span></p>
                    <p class="text-md text-gray-100">Price:<span class="text-lg ml-2">$<?php echo $price_pd?></span></p>
                    <p class="text-md text-gray-100 flex">View:<span class="text-md ml-2"><?php echo $view_pd?></span>(<img class="w-5 h-5 my-auto" src="img/img_icon/view.png">)</p>
                    <?php if($discount_pd<=0){
                            echo'<p class="text-md text-gray-100">Discount:<span class="text-lg ml-2">'.$discount_pd.'</span>%</p>';
                        }else{
                            echo'<p class="text-md text-gray-100">Discount:<span class="text-lg ml-2">+'.$discount_pd.'</span>%</p>';
                        }
                    ?>
                    <fieldset class="anh">
                        <legend>Details:</legend>
                        <p class="text-xs ml-2 text-gray-300"><?php echo $detail_pd?></p>
                    </fieldset>
                </div>
            </div>
        </div>
        <!-- mirror change your minds-->
        <div class="w-[1300px] mx-auto mt-4 anhvo h-96 absolute top-[570px]">
            <fieldset class="w-[1200px] h-[320px] anhvanvo mx-auto border border-white">
                <legend class="text-2xl ml-6">Comments:</legend>
                <?php
                    if(isset($_SESSION["vole"])){
                        if($role!=""){
                            $get_all_comments=comments_all_kind_account($id_pd);
                            foreach($get_all_comments as $value){
                                extract($value);
                                $get_account=account_one_in_all($key_to_account);
                                extract($get_account);
                                echo"<div class='ml-5 flex space-x-2'>";
                                // attention fixx owner and client !!!!=============================================================<span class="text-orange-500 text-xs leading-10">(Store owner)</span>
                                    if($role==1){
                                        // $one_ac=account_one($id_account);
                                        // extract($one_ac);
                                        // if($role==1){
                                        echo"<a href='#'><div class='flex space-x-1 mb-1'>";
                                            echo "<img title='".$email_account."' class='w-10 h-10 hover:scale-90 duration-200 rounded-xl my-auto' src='img/$img_account_cm' alt='?'>";
                                            echo'<h3 class="my-auto">'.$name_account_cm.':</h3>';
                                        echo"</div></a>";
                                        // }
                                    }else{
                                        echo"<a href='#'><div class='flex space-x-1 mb-1'>";
                                            echo "<img title='".$email_account."' class='w-10 h-10 hover:scale-90 duration-200 rounded-xl my-auto' src='img/$img_account_cm' alt='?'>";
                                            echo'<h3 class="my-auto">'.$name_account_cm.':</h3>';
                                        echo"</div></a>";
                                    }
                                    echo"<p class='mt-2'>".$content_cm."</p>";
                                    echo "<p class='text-xs text-gray-300 mt-1'>(".$time_cm.")</p>";
                                echo"</div>";
                                
                            }
                        }
                    }else{
                        echo"<div class='text-center text-xl mt-10'>Not account to show comments, <a href='index.php?act=login' class='text-red-500 hover:text-orange-500'>register or login now !</a></div>";
                    }
                ?>
            </fieldset>
            <?php
                if(isset($_SESSION["vole"])){
                    // echo $certified_buy_account;die;
                    if($role==1 || $role==0 && $certified_buy_account>0){
                        echo"<form action='index.php?act=comment&id_account=$id_account&id_pd=$id_pd' method='post' class='w-[1200px] mx-auto flex mt-5'>
                            <input class='w-[1000px] text-center outline-0 text-gray-900' type='text' name='text_comment' placeholder='...... Your minds......!'>
                            <input type='text' value='".date("j/m/Y h:i:s A")."' name='date_cm' hidden>
                            <button name='btn_comments' class='w-[200px] buy_pd h-8'>Send to</button>
                        </form>";
                    }else{
                        echo"<p class='text-center mt-3 text-xl'>You need to buy any item can comment! <span class='text-xs text-orange-500'>(Note that after purchase, you need to log in again)</span></p>";
                    }
                }else{
                    echo"<p class='text-center mt-3 text-xl'>Please login or register an account to view and comment, <a href='index.php?act=login' class='text-red-500 hover:text-orange-500'>register or login now ! .</p>";
                }
            ?>
        </div>
        <!-- mirror change your minds-->
        <div class="w-[200px] border_x">
            <h2 class="text-center text-2xl underline">The Same (<?php echo "<span class='text-md text-yellow-300'>".$dem_k."</span>";?>)</h2>
            <div class="all_k h-96 mt-5">
                <?php
                    $get_all_pd_k=products_all_kinds_diffirent($id_k,$id_pd);//all products of kind
                    foreach($get_all_pd_k as $value){
                        extract($value);
                        echo "<a href='index.php?act=detail_product&id_pd=$id_pd&id_k=$connect_to_kinds' title='".$name_pd."'><img class='w-40 h-40 hover:w-44 hover:h-44 rounded-lg mx-auto duration-200' src='img/".$img_pd."' alt=''></a>";
                        echo "<p class='h-2'></p>";
                    }
                ?>
            </div>
        </div>
    </div>
    <div class=" w-[350px]">
        <h2 class="text_style1">Rate us and send us your private feedback</h2>
        <div class="feedback mt-2">
            <?php

            ?>
        </div>
    </div>
</div>
<!-- Comments product -->
