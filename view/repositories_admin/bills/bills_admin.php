<style>
    .levanvo_special{
        background-image: url(https://png.pngtree.com/background/20210711/original/pngtree-delicious-nutritious-meal-background-material-picture-image_1072228.jpg);
        background-size: 100% 100%;
        width: 1000px;
        height: 700px;
        color: white;
        /* border: 2px solid #555555; */
        overflow: scroll;
        box-shadow: inset 0 0 30px 2px white;
    }
    .levanvo_special::-webkit-scrollbar{
        width: 30px;
    }
    .levanvo_special::-webkit-scrollbar-thumb{
        background-color: #FFFFFF;
        border-radius: 10px;
        border: 2px solid orangered;
        /* box-shadow: 0 0 10px 1px white; */
    }
</style>
<?php
    $bill_all=bill_all_all();
?>
<!-- Relationship -->
        <div class="levanvo_special bg-sky-500">
            <h1 class="ml-10 font-bold text-4xl mt-7 text-center mb-10 shadow_control">Manager of Categories</h1>
            
            <table class='text-center font-bold w-[1300px] mx-auto text-gray-300 mb-10'>
                <tr class="text-xl text-lime-500 border-b-2 border-white">
                    <th>Code bills</th>
                    <th>Infor buyer</th>
                    <th>Delivery place</th>
                    <th>Infor products</th>
                    <th>A product</th>
                    <th>Quantity</th>
                    <th>Total pay</th>
                    <th>Time of purchase</th>
                </tr>
                <?php
                    foreach($bill_all as $value){
                        extract($value);
                        $get_account=account_one($connect_to_account_bill);
                        extract($get_account);
                        echo"
                            <tr class='border-b text-xs border-gray-500 h-28'>
                                <td class='h-10'>".$id_bill."</td>
                                <td class='h-10 w-40 border border-gray-400'>
                                    <img title='".$email_account."' class='w-20 h-16 mx-auto hover:scale-95 duration-200 rounded-xl border border-white' src='../../img/".$img_account_bill."' alt='error img'>
                                    <p>".$name_account_bill."</p>
                                    <p>sđt: 0".$phone_account_bill."</p>
                                    <p>".$email_account."</p>
                                </td>
                                <td class='h-10 w-72'>".$address_account_bill."</td>
                                <td class='h-10 w-[200px] border border-gray-400'>
                                    <img class='w-20 h-16 mx-auto hover:scale-95 duration-200 rounded-xl border border-white' src='../../img/".$img_pd_bill."' alt='error img'>
                                    <p class='text-sm'>".$name_pd_bill."</p>
                                </td>
                                <td class='h-10'>$".$price_pd_bill."</td>
                                <td class='h-10 text-sm border border-gray-400'>".$quantity_pd_bill."</td>
                                <td class='h-10 text-sm'>$".$price_pd_all_bill."</td>
                                <td class='h-10 border-l border-gray-400'>".$time_account_bill."</td>
                            </tr>
                        ";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>