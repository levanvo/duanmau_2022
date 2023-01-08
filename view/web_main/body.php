<!-- body -->
<style>
    .bg_kinds1{
        background-image: url(https://png.pngtree.com/thumb_back/fw800/back_our/20190620/ourmid/pngtree-fresh-green-fruit-print-ad-image_158370.jpg);
        background-size: 100% 100%;
        width: 365px;
        height: 450px;
    }
    .bg_kinds2{
        background-image: url(https://i.pinimg.com/736x/d0/99/a2/d099a2f1963a0da12262ec0793ce2dad.jpg);
        background-size: 100% 100%;
        width: 365px;
        height: 594px;
    }
    .inp1 ,.inp2{
        outline: 0 !important;
        border: 1px solid orange;
        box-shadow: 0 0 1px 1px orange;
    }
    .inp1::placeholder{
        padding-left: 20px;
    }
    .board_kinds::-webkit-scrollbar{
        width: 11px;
        height: 9px;
    }
    .board_kinds::-webkit-scrollbar-thumb{
        background-color: #FFFFFF;
        border-radius: 5px;
        border: 1px solid white;
        box-shadow:inset 0 0 5px 1px green;
    }
    .show_buy{
        position: absolute;
        top: 250px;
        left: 0px;
        z-index: -1;
        transition: all 0.5s;
    }
    .hide_buy{
        position: relative;
    }
    .hide_buy:hover .show_buy{
        z-index: 0;
        top: 180px;
        left: 39px;
        transition: all 0.3s;
    }
    /* .shell{
        border: #FF0067 solid 1px;
        animation: 3s infinite siu;
    }
    @keyframes siu{
        50%{
            border: #00FFFF solid 1px;
        }
    }
    .frames:hover{
        box-shadow: inset 0 0 5px 1px white;
    } */
</style>
<!-- part_1 -->
<div class="flex justify-center space-x-[5px] vgh">
    <div class="bg_kinds1">
        <h2 class="text-center text-2xl text-gray-600 font-bold underline mb-5 mt-2">Tens Special Products</h2>
        <div class="w-[350px] h-[280px] mx-auto text-center board_kinds overflow-y-scroll">
            <?php
                $take_kinds=products_view_tens();
                foreach($take_kinds as $value){
                    extract($value);
                    echo"
                        <a href='index.php?act=detail_product&id_pd=$id_pd&id_k=$connect_to_kinds' class='flex space-x-2 justify-between text-white text-xl hover:bg-lime-400 duration-300 rounded-lg'>
                            <p class='my-auto'>".$name_pd."</p>
                            <img class='w-14 h-14 rounded-lg' src='img/$img_pd' alt='image'>
                        </a>
                        <hr>
                    ";
                }
            ?>
        </div>
    </div>
    <div class="w-[930px] h-[450px]">
        <div class="w-[930px] h-[40px] mt-[10px]">
            <form class="font-bold flex justify-center space-x-3" action="#">
                <input class="w-[750px] text-center inp1" type="text" name="search_everythings" placeholder="What are you needing ...? Find it in here .">
                <div class="flex justify-center">
                    <input class="w-40 h-8 bg-orange-500 text-white inp2 hover:bg-orange-600 hover:border-white" type="submit" name="see_search_everythings" value="Search">
                </div>
            </form>
        </div>
        <img class="w-[930px] h-[400px]" src="./img/background/bg1.gif" alt="">
    </div>
</div>
<img class="mx-auto w-80 h-28 hover:scale-x-105 duration-200" src="img/img_icon/logo2.png" alt="">
<!-- part_2 -->
<div class="w-[1300px] flex space-x-5 mx-auto">
    <div class="bg_kinds2">
        <h2 class="text-center text-2xl text-gray-600 font-bold underline mb-5 mt-2">All Categories</h2>
        <div class="w-[350px] h-[280px] mx-auto text-center board_kinds overflow-y-scroll">
        <a href='?id_kindss=khongbietkhinaolayvo'><p class='text-xl hover:scale-y-105 mb-1 duration-100 text-orange-500 hover:text-green-500'>All</p></a>
        <hr>
            <?php
                $take_kinds=kinds_all();
                foreach($take_kinds as $value){
                    extract($value);
                    echo"
                        <a href='?id_kindss=$id_k'><p class='text-xl hover:scale-y-105 mb-1 duration-100 text-orange-500 hover:text-green-500'>".$name_k."</p></a>
                        <hr>
                    ";
                }
            ?>
        </div>
    </div>
    <div class="w-[930px] grid grid-cols-4 shell">
        <?php
            $your_select=!empty($_GET["id_kindss"])?$_GET["id_kindss"]:"khongbietkhinaolayvo";
            if($your_select=="khongbietkhinaolayvo"){
                $get_all_pd=products_all();
                $all_pd=0;
                foreach($get_all_pd as $value){
                    $all_pd++;
                }
                // $id_page=$_GET["id_page"]; ----->valuable lessons
                $id_page=!empty($_GET["id_page"])?$_GET["id_page"]:1;
                $get_pd_page=!empty($_GET["get_pd"])?$_GET["get_pd"]:12;//products'll get
                $id_pd_page=($id_page-1)*$get_pd_page;//page'll get
                $take_products=products_all_limit($id_pd_page,$get_pd_page);//fighting
                $total_page=$all_pd/12;
                foreach($take_products as $value){
                    extract($value);
                    echo"
                        <div class='col-span-1 w-[222px] h-[280px] m-1 bg-gray-100 rounded-md relative' id='".$connect_to_kinds."'>
                            <div class='img w-[200px] h-[230px] rouded-md mx-auto mt-2 overflow-hidden'>
                                <div class='hide_buy'>
                                    <a href='index.php?act=detail_product&id_pd=$id_pd&id_k=$connect_to_kinds' class=''><img class='w-[200px] h-[230px] hover:scale-125 duration-300 rounded-md' src='img/$img_pd' alt='img error'></a>";
                                    if(isset($_SESSION["vole"])){
                                        extract($_SESSION["vole"]);
                                        if($role!=1 ){
                                            echo"<div class='show_buy flex space-x-10 justify-center'>
                                                <a href='view/repositories_client/index.php?client=cart&id_pd=$id_pd&id_account=$id_account' class=''><img class='w-10 h-10 hover:translate-y-[-5px] duration-200' src='img/img_icon/buy_after.png'></a>
                                                <a href='view/repositories_client/index.php?client=buy_cart&id_pd=$id_pd&id_account=$id_account' class=''><img class='w-10 h-10 hover:translate-y-[-5px] duration-200' src='img/img_icon/buy_now.png'></a>
                                            </div>";
                                        }
                                    }else{
                                        echo"<div class='show_buy flex space-x-10 justify-center'>
                                            <a href='index.php?act=login' class=''><img class='w-10 h-10 hover:translate-y-[-5px] duration-200' src='img/img_icon/buy_after.png'></a>
                                            <a href='index.php?act=login' class=''><img class='w-10 h-10 hover:translate-y-[-5px] duration-200' src='img/img_icon/buy_now.png'></a>
                                        </div>";
                                    }
                                echo"</div>";
                            echo"</div>
                            <div class='text-center'>
                                <p>".$name_pd."</p>";
                                if($discount_pd == 0){
                                    echo"<p class='text-sm text-sky-500 font-bold'>$".$price_pd."</p>";
                                }else{
                                    if($discount_pd>0){
                                        $price_root=((($discount_pd/100)*$price_pd)-$price_pd)*(-1);
                                        echo"<div class='flex justify-center space-x-5'>
                                            <p class='text-sm text-red-500'><del>$".$price_root."</del></p>
                                            <p class='text-sm text-sky-500 font-bold'>$".$price_pd."</p>
                                            <img class='w-10 h-10 absolute top-5 left-[100px]' src='img/img_icon/sell.png' alt='error image_sell'>
                                            <p class='bg-black rounded-2xl w-[52px] opacity-60 text-white absolute top-3 left-[136px] lamp_sell'>+".$discount_pd."%</p>
                                        </div>";
                                    }else{
                                        $price_root=((($discount_pd/100)*$price_pd)-$price_pd)*(-1);
                                        echo"<div class='flex justify-center space-x-5'>
                                            <p class='text-sm text-red-500'><del>$".$price_root."</del></p>
                                            <p class='text-sm text-sky-500 font-bold'>$".$price_pd."</p>
                                            <img class='w-10 h-10 absolute top-5 left-[100px]' src='img/img_icon/sell.png' alt='error image_sell'>
                                            <p class='bg-black rounded-2xl w-[52px] opacity-60 text-white absolute top-3 left-[136px] lamp_sell'>".$discount_pd."%</p>
                                        </div>";
                                    }
                                }
                                echo"
                            </div>
                        </div>
                    ";
                }
            }else{
                $name_k=kinds_one($your_select);
                $get_all_pd=products_all_kinds_private($your_select);
                echo"<marquee class='absolute w-[550px] top-[660px] left-[32%] text-red-500 font-bold text-xl animate__animated animate__rubberBand animate__infinite'>".$name_k["name_k"]."</marquee>";
                $all_pd=0;
                foreach($get_all_pd as $value){
                    $all_pd++;
                }
                // echo $your_select;die;
                // $id_page=!empty($_GET["id_page_k"])?$_GET["id_page_k"]:1;
                // $get_pd_page=!empty($_GET["get_pd_k"])?$_GET["get_pd_k"]:8;//products'll get
                // $id_pd_page=($id_page-1)*$get_pd_page;//page'll get
                // $take_products=products_all_kinds_limit($id_pd_page,$get_pd_page,$your_select);//fighting
                // $total_page=$all_pd/8;
                foreach($get_all_pd as $value){
                    extract($value);
                    echo"
                        <div class='col-span-1 w-[222px] h-[280px] m-1 bg-gray-100 rounded-md relative' id='".$connect_to_kinds."'>
                            <div class='img w-[200px] h-[230px] rouded-md mx-auto mt-2 overflow-hidden'>
                                <div class='hide_buy'>
                                    <a href='index.php?act=detail_product&id_pd=$id_pd&id_k=$connect_to_kinds' class=''><img class='w-[200px] h-[230px] hover:scale-125 duration-300 rounded-md' src='img/$img_pd' alt='img error'></a>";
                                    if(isset($_SESSION["vole"])){
                                        extract($_SESSION["vole"]);
                                        if($role!=1){
                                            echo"<div class='show_buy flex space-x-10 justify-center'>
                                                <a href='view/repositories_client/index.php?client=cart&id_pd=$id_pd&id_account=$id_account' class=''><img class='w-10 h-10 hover:translate-y-[-5px] duration-200' src='img/img_icon/buy_after.png'></a>
                                                <a href='view/repositories_client/index.php?client=buy_cart&id_pd=$id_pd&id_account=$id_account' class=''><img class='w-10 h-10 hover:translate-y-[-5px] duration-200' src='img/img_icon/buy_now.png'></a>
                                            </div>";
                                        }
                                    }
                                echo"</div>";
                            echo"</div>
                            <div class='text-center'>
                                <p>".$name_pd."</p>";
                                if($discount_pd == 0){
                                    echo"<p class='text-sm text-sky-500 font-bold'>$".$price_pd."</p>";
                                }else{
                                    if($discount_pd>0){
                                        $price_root=((($discount_pd/100)*$price_pd)-$price_pd)*(-1);
                                        echo"<div class='flex justify-center space-x-5'>
                                            <p class='text-sm text-red-500'><del>$".$price_root."</del></p>
                                            <p class='text-sm text-sky-500 font-bold'>$".$price_pd."</p>
                                            <img class='w-10 h-10 absolute top-5 left-[100px]' src='img/img_icon/sell.png' alt='error image_sell'>
                                            <p class='bg-black rounded-2xl w-[52px] opacity-60 text-white absolute top-3 left-[136px] lamp_sell'>+".$discount_pd."%</p>
                                        </div>";
                                    }else{
                                        $price_root=((($discount_pd/100)*$price_pd)-$price_pd)*(-1);
                                        echo"<div class='flex justify-center space-x-5'>
                                            <p class='text-sm text-red-500'><del>$".$price_root."</del></p>
                                            <p class='text-sm text-sky-500 font-bold'>$".$price_pd."</p>
                                            <img class='w-10 h-10 absolute top-5 left-[100px]' src='img/img_icon/sell.png' alt='error image_sell'>
                                            <p class='bg-black rounded-2xl w-[52px] opacity-60 text-white absolute top-3 left-[136px] lamp_sell'>".$discount_pd."%</p>
                                        </div>";
                                    }
                                }
                                echo"
                            </div>
                        </div>
                    ";
                }
            }
        ?>
    </div>
</div>
<div class="w-[1300px] mx-auto mt-5 text-center">
    <?php
        if($your_select=="khongbietkhinaolayvo"){
            echo"<div class='flex justify-center space-x-4'>";
                for($dem=1;$dem<=$total_page+1;$dem++){
                    if($all_pd>12){
                        echo"
                            <a href='?id_page=$dem&get_pd=12'><p class='w-24 h-7 hover:w-28 duration-200 frames leading-7 bg-gray-600 text-white hover:bg-black'>$dem</p></a>
                        ";
                    }
                }
            echo"</div>";
        }
        // else{
        //     echo"<div class='flex justify-center space-x-4'>";
        //         for($dem=1;$dem<=$total_page+1;$dem++){
        //             if($all_pd>8){
        //                 echo"
        //                     <a href='?id_page_k=$dem&get_pd_k=8'><p class='w-24 h-7 hover:w-28 duration-200 frames leading-7 bg-gray-600 text-white hover:bg-black'>$dem</p></a>
        //                 ";
        //             }
        //         }
        //     echo"</div>";
        // }
    ?>
</div>
<!-- <a href="javascript:void(0)">Lê Văn Võ</a> -->
<script>
    // alert("hiha");
</script>