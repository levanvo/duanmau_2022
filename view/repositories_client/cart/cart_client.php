<style>

</style>
<?php
    $cart_all=cart_all($id_account);
?>
<!-- Relationship -->
        <div class="levanvo bg-sky-500">
            <h1 class="ml-10 font-bold text-4xl mt-7 text-center mb-5 shadow_control">Your cart</h1>
            <table class='text-center font-bold w-[900px] mx-auto text-gray-300 mt-10 mb-10'>
                <tr class="text-xl border-b-2 border-white">
                    <th>PLU</th>
                    <th>Name of products</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Discount(%)</th>
                    <th>Yours choose</th>
                </tr>
                <?php
                // for($i=0;$i<3;$i++){
                    foreach($cart_all as $value){
                        extract($value);
                        echo"
                            <tr class='border-b border-gray-500 text-sm'>
                                <td class='h-10'>".$id_c."</td>
                                <td class='h-10'>".$name_pd_c."</td>
                                <td class='h-10'><img class='w-20 h-14 rounded-xl border border-white' src='../../img/".$img_pd_c."' alt='error img'></td>
                                <td class='h-10'>$".$price_pd_c."</td>
                                <td class='h-10'>".$discount_pd_c."</td>
                                <td class='h-10'>
                                    <a href='index.php?client=delete_cart&id_cart=$id_c' class='w-44 h-8 mr-5 hover:text-red-500 '>Delete</a>
                                    <a href='index.php?client=buy_cart&id_pd=$connect_to_pd&id_account=$connect_to_account' class='w-44 h-8 mr-5 hover:text-sky-500 '>Buy now</a>
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