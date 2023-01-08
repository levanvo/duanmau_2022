<style>

</style>
<?php
    $id_ppd=$_GET["id_pd"];
    $code=products_one($id_ppd);
    if(array($code)){
        $_SESSION["products"]=$code;
        extract($_SESSION["products"]);
        // echo $name_pd;die;
    }
    $all_kinds=kinds_all();
?>
<!-- Relationship -->
        <div class="levanvo bg-sky-500">
            <h1 class="ml-10 font-bold text-3xl mt-7 text-center shadow_update">Update Products</h1>
            <hr>
            <!-- control update -->
            <form action="index.php?admin=update_pd"  class=" h-[390px] text-white" method="post" enctype="multipart/form-data">
                <h2 class="text-2xl font-bold text-gray-300 mt-2 mb-1 ml-14">Product: <?php echo $name_pd?></h2>
                <h2 class="text-lg font-bold text-gray-300 mt-1 ml-14">PLU: <?php echo $id_pd?></h2>
                <div class="w-[600px] mx-auto text-center">
                    <p class="text-green-300 font-bold">Name:</p>
                    <input class="w-[310px] rounded-sm outline-0 text-center text-gray-700" type="text" value="<?php echo $name_pd?>" name="name_pd" placeholder="..the name ...!" required>
                    <p class="text-green-300 font-bold">Image:</p>
                    <input type="text" value="<?php echo $img_pd?>" name="img_pd2" hidden>
                    <input type="file" name="img_pd1">
                    <p class="text-green-300 font-bold">Price:</p>
                    <input class="w-[310px] rounded-sm outline-0 text-center text-gray-700" type="text" value="<?php echo $price_pd?>" name="price_pd" placeholder="..the price ...!" required><!-- pattern="[0-9]{1,20}" -->
                    <p class="text-green-300 font-bold">Describe:</p>
                    <textarea class="w-[400px] h-auto rounded-sm outline-0 text-gray-700 text-center" name="detail_pd" placeholder="..the content ...!" required><?php echo $detail_pd?></textarea>
                    <p class="text-green-300 font-bold">Categories:</p>
                    <select class="w-[310px] rounded-sm text-gray-700 text-center outline-0" name="categories_pd" required>
                        <?php
                            foreach($all_kinds as $value){
                                extract($value);
                                echo"<option class='' value='".$id_k."'>".$name_k."</option>";
                            }
                        ?>
                    </select>
                    <div class="flex justify-center">
                        <p class="text-green-300 font-bold">Discount(%):</p>
                        <a href="#"><img class="h-6 w-6 hover:w-7" src="../../img/img_icon/search.png" alt="" title="value = 0(keep the same price) ,value < 0(price down), value > 0(increase) AND value need < 101 or <-101"></a>
                    </div>
                    <input class="w-[210px] rounded-sm outline-0 text-center text-gray-700" value="0" type="text" name="discount_pd" placeholder=". number...?" pattern="[0-9.-]{1,5}" required>
                    <input value="<?php echo $id_pd?>" name="id_pppd" class="text-black" hidden>
                </div>
                <div class="flex justify-center mt-5">
                    <button class="bg-black w-40 h-8 hover:w-44 duration-200 hover:font-bold border-2 border-white" name="btn_products_update">Agree update</button>
                </div>
            </form>
            <!-- control update -->
        </div>
    </div>
</body>
</html>