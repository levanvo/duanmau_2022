<style>
    
</style>
<?php
    $comments_all=comments_all();
?>
<!-- Relationship -->
        <div class="levanvo bg-sky-500">
            <h1 class="ml-10 font-bold text-4xl mt-7 text-center mb-10 shadow_control">Manager of Categories</h1>
            
            <table class='text-center font-bold w-[800px] mx-auto text-gray-300 mb-10'>
                <tr class="text-xl border-b-2 border-white">
                    <th>PLU</th>
                    <th>Commenter</th>
                    <th>Image</th>
                    <th>Content</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                <?php
                    foreach($comments_all as $value){
                        extract($value);
                        $get_account=account_one($key_to_account);
                        extract($get_account);
                        echo"
                            <tr class='border-b text-xs border-gray-500 h-28'>
                                <td class='h-10'>".$id_cm."</td>
                                <td class='h-10'>".$name_account_cm."</td>
                                <td class='h-10'><img title='".$email_account."' class='w-20 h-16 hover:scale-95 duration-200 rounded-xl border border-white' src='../../img/".$img_account_cm."' alt='error img'></td>
                                <td class='h-10 w-[200px]'>".$content_cm."</td>
                                <td class='h-10'>".$time_cm."</td>
                                <td class='h-10 text-sm'>
                                    <a href='index.php?admin=delete_cm&id_cm=$id_cm' title='Only delete !!' onclick=\"return confirm('Delete only comment of->".$name_account_cm."<- yet ??');\" class='w-44 h-8 mr-5 hover:text-red-500 '>Delete</a>
                                    <a href='index.php?admin=delete_all_cm' title='Delete anythings related to ".$name_account_cm."' onclick=\"return confirm('Delete allthings of->".$name_account_cm."<- yet ??');\" class='w-44 h-8 hover:text-sky-500'>Delete all !!</a>
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