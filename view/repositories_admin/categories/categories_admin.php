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
        transform: translateY(-90px);
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
    /* control update */
    
    /* control update */
</style>
<?php
    $loai_all=kinds_all();
?>
<!-- Relationship -->
        <div class="levanvo bg-sky-500">
            <h1 class="ml-10 font-bold text-4xl mt-7 text-center mb-10 shadow_control">Manager of Categories</h1>
            <!-- control add -->
            <div class="float-right w-44 h-8 bg-white text-black mr-10 mb-5">
                <input class="absolute opacity-0 h-8 w-44 left-[1070px] top-[108px] bg-red-500" type="checkbox" id="form_add_new">
                <p class="text-center leading-8 font-bold">New kinds</p>
                <form action="index.php?admin=categories"  class="form_add_new1 absolute left-[270px] w-[750px] h-[290px] bg-green-500 text-white" method="post">
                    <h2 class="text-center text-2xl font-bold text-orange-500 mt-2 mb-5">Add Kinds for Products</h2>
                    <hr>
                    <div class="w-[600px] mx-auto text-center">
                        <p class="text-green-300 font-bold">Id code kinds:</p>
                        <input class=" outline-0 text-center text-red-500" type="text" value="auto Filled" readonly>
                        <p class="text-green-300 font-bold">Name:</p>
                        <input class="w-[310px] rounded-sm outline-0 text-center text-gray-700" type="text" name="name_k" placeholder="..the name ...!" required>
                    </div>
                    <div class="flex justify-center mt-5">
                        <button class="bg-black w-40 h-8 hover:w-44 duration-200 hover:font-bold" name="btn_kinds">Add new</button>
                    </div>
                </form>
                <label for="form_add_new" class="form_add_new2"></label>
            </div>
            <!-- control add -->
            <table class='text-center font-bold w-[800px] mx-auto text-gray-300 mb-10'>
                <tr class="text-2xl border-b-2 border-white">
                    <th>PLU</th>
                    <th>The name of kinds</th>
                    <th>Yours choose</th>
                </tr>
                <?php
                    foreach($loai_all as $value){
                        extract($value);
                        echo"
                            <tr class='border-b border-gray-500'>
                                <td class='h-10'>".$id_k."</td>
                                <td class='h-10'>".$name_k."</td>
                                <td class='h-10'>
                                    <a href='index.php?admin=delete_k&id_k=$id_k' onclick=\"return confirm('Do u sure to delete ->".$name_k."<- yet ??');\" class='w-44 h-8 mr-5 hover:text-red-500 '>Delete</a>
                                    <a href='index.php?admin=update_k&id_k=$id_k' class='w-44 h-8 hover:text-sky-500'>Update</a>
                                </td>
                            </tr>
                        ";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>