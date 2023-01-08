<style>

</style>
<?php
    $bill_all=bill_all($id_account);
?>
<!-- Relationship -->
        <div class="levanvo bg-sky-500">
            <h1 class="ml-10 font-bold text-4xl mt-7 text-center mb-5 shadow_control">Your cart</h1>
            <table class='text-center font-bold w-[900px] mx-auto text-gray-300 mt-10 mb-10'>
                <tr class="text-lg border-b-2 border-white">
                    <th>Code bill</th>
                    <th>Buyer</th>
                    <th>Image buyer</th>
                    <th>Name Product</th>
                    <th>Image Product</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Time to buy</th>
                </tr>
                <?php
                // for($i=0;$i<3;$i++){
                    foreach($bill_all as $value){
                        extract($value);
                        echo"
                            <tr class='border-b border-gray-500 text-sm'>
                                <td class='h-10'>".$id_bill."</td>
                                <td class='h-10'>".$name_account_bill."</td>
                                <td class='h-10'><img class='w-20 h-[70px] rounded-xl border border-white' src='../../img/".$img_account_bill."' alt='error img'></td>
                                <td class='h-10'>".$name_pd_bill."</td>
                                <td class='h-10'><img class='w-20 h-[70px] rounded-xl border border-white' src='../../img/".$img_pd_bill."' alt='error img'></td>
                                <td class='h-10 text-2xl'>".$quantity_pd_bill."<span class='text-xs text-gray-500'>(1 = $".$price_pd_bill."</span>)</td>
                                <td class='h-10'>".$price_pd_all_bill."</td>
                                <td class='h-10'>".$time_account_bill."</td>
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