<style>
    /* control add */
    .form_add_new1{
        transform: translateY(-300px);
        z-index: -1;
        opacity: 0;
        transition: all 0.3s;
        background-image: url(https://png.pngtree.com/thumb_back/fw800/back_our/20190619/ourmid/pngtree-nut-gourmet-top-view-wood-grain-black-banner-image_140375.jpg);
        background-size: 100% 100%;
        box-shadow: 0 0 10px 1px black;
    }
    #form_add_new:checked ~ .form_add_new1{
        transform: translateY(-110px);
        background-color: red;
        z-index: 2;
        opacity: 1;
        transition: all 0.3s;
    }
    .form_add_new2{
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        position: absolute;
        z-index: -1;
        transition: all 0.5s;
    }
    #form_add_new:checked ~ .form_add_new2{
        z-index: 1;
        background-color: #EEEEEE;
        opacity: 0.3;
    }
    /* control add */
</style>
<?php
    $sanpham_all=products_all();
    $all_kinds=kinds_all();
?>
<!-- Relationship -->
        <div class="levanvo bg-sky-500">
            <h1 class="ml-10 font-bold text-4xl mt-7 text-center mb-5 shadow_control">Manager of Products</h1>
            <!-- control add -->
            <div class="float-right w-44 h-8 bg-white text-black mr-10 mb-5">
                <input class="absolute opacity-0 h-8 w-44 left-[1070px] top-[88px] bg-red-500" type="checkbox" id="form_add_new">
                <p class="text-center leading-8 font-bold">New products</p>
                <form action="index.php?admin=products"  class="form_add_new1 absolute left-[270px] w-[750px] h-[390px] text-white" method="post" enctype="multipart/form-data">
                    <h2 class="text-center text-2xl font-bold text-orange-500 mt-2 mb-2">Add Products</h2>
                    <hr>
                    <div class="w-[600px] mx-auto text-center">
                        <p class="text-green-300 font-bold">Name:</p>
                        <input class="w-[310px] rounded-sm outline-0 text-center text-gray-700" type="text" name="name_pd" placeholder="..the name ...!" required>
                        <p class="text-green-300 font-bold">Image:</p>
                        <input type="file" name="img_pd">
                        <p class="text-green-300 font-bold">Price:</p>
                        <input class="w-[310px] rounded-sm outline-0 text-center text-gray-700" type="text" name="price_pd" placeholder="..the price ...!" required><!-- pattern="[0-9]{1,20}" -->
                        <p class="text-green-300 font-bold">Describe:</p>
                        <textarea class="w-[400px] h-auto rounded-sm outline-0 text-gray-700 text-center" name="detail_pd" placeholder="..the content ...!" required></textarea>
                        <p class="text-green-300 font-bold">Categories:</p>
                        <select class="w-[310px] rounded-sm text-gray-700 text-center" name="categories_pd" required>
                            <?php
                                foreach($all_kinds as $value){
                                    extract($value);
                                    echo"<option class='' value='".$id_k."'>".$name_k."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="flex justify-center mt-5">
                        <button class="bg-black w-40 h-8 hover:w-44 duration-200 hover:font-bold" name="btn_products">Add new</button>
                    </div>
                </form>
                <label for="form_add_new" class="form_add_new2"></label>
            </div>
            <!-- control add -->
            <table class='text-center font-bold w-[900px] mx-auto text-gray-300 mb-10'>
                <tr class="text-2xl border-b-2 border-white">
                    <th>PLU</th>
                    <th>Name of products</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Views</th>
                    <th>Discount(%)</th>
                    <th>Yours choose</th>
                </tr>
                <?php
                // for($i=0;$i<3;$i++){
                    foreach($sanpham_all as $value){
                        extract($value);
                        echo"
                            <tr class='border-b border-gray-500 text-sm'>
                                <td class='h-10'>".$id_pd."</td>
                                <td class='h-10'>".$name_pd."</td>
                                <td class='h-10'><img class='w-20 h-14 rounded-xl border border-white' src='../../img/".$img_pd."' alt='error img'></td>
                                <td class='h-10'>$".$price_pd."</td>
                                <td class='h-10'>".$view_pd."</td>
                                <td class='h-10'>".$discount_pd."</td>
                                <td class='h-10'>
                                    <a href='index.php?admin=delete_pd&id_pd=".$id_pd."' onclick=\"return confirm('Do u sure to delete ->".$name_pd."<- yet ??');\" class='w-44 h-8 mr-5 hover:text-red-500 '>Delete</a>
                                    <a class='w-44 h-8 hover:text-sky-500 ' href='index.php?admin=update_pd&id_pd=$id_pd'>Update</a>
                                </td>
                            </tr>
                        ";
                    }
                // }
                ?>
            </table>
        </div>
    </div>
</body>
</html>