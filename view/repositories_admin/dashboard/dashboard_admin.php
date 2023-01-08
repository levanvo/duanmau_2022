<style>

</style>
<?php
    $bill_one_all=to_most_product_buy();//part 1
    $maximum=to_maximum();//part 2
    $average=to_average_fake();//part 2
    $minimum=to_minimum();//part 2
?>
<!-- Relationship -->
        <div class="levanvo bg-sky-500">
            <!-- ========================================part 1===================================== -->
            <h1 class="ml-10 font-bold text-3xl mt-7 text-center mb-5 shadow_control text-orange-500">The Products to be buy a lot</h1>
            <table class='text-center mb-10 font-bold w-[900px] mx-auto text-gray-300 mb-10'>
                <tr class="text-xl border-b-2 border-white">
                    <th>Name of products</th>
                    <th>Image</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                <?php
                // for($i=0;$i<3;$i++){
                    foreach($bill_one_all as $value){
                        extract($value);
                        echo"
                            <tr class='border-b border-gray-500 text-sm'>
                                <td class='h-10'>".$name_pd_bill."</td>
                                <td class='h-10'><img class='w-20 h-16 rounded-xl border border-white' src='../../img/".$img_pd_bill."' alt='error img'></td>
                                <td class='h-10'>".$quantity_pd_bill."</td>
                                <td class='h-10'>$".$price_pd_bill."</td>
                            </tr>
                        ";
                    }
                // }
                ?>
            </table>
            <!-- ========================================part 2===================================== -->
            <h1 class="ml-10 font-bold text-3xl mt-7 text-center mb-5 shadow_control text-orange-500">statistical analysis</h1>
            <table class='text-center mb-10 font-bold w-[900px] mx-auto text-gray-300 mb-10'>
                <tr class="text-xl border-b-2 border-white">
                    <th>Maximum price</th>
                    <th>Average price</th>
                    <th>Minimum price</th>
                </tr>
                <?php
                    echo"<tr class='border-b border-gray-500 text-sm'>";
                        foreach($maximum as $value){
                            extract($value);
                            echo"<td class='h-10'>$".$price_pd."</td>";
                        }
                        // =====
                        $average_one=0;
                        foreach($average as $value){
                            $average_one++;                            
                        }
                        $average_ok=$average_one/2;
                        $average_real=to_average_real($average_ok);
                        foreach($average_real as $value){
                            extract($value);
                            echo"<td class='h-10'>$".$price_pd."</td>";
                        }
                        // =====
                        foreach($minimum as $value){
                            extract($value);
                            echo"<td class='h-10'>$".$price_pd."</td>";
                        }
                    echo "</tr>";
                ?>
            </table>
            <!-- ========================================part 3===================================== -->
            <!-- waiting... -->
        </div>
    </div>
</body>
</html>