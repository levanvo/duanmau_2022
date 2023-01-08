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
    $taikhoan_all=account_all();
?>
<!-- Relationship -->
        <div class="levanvo bg-sky-500">
                <h1 class="ml-10 font-bold text-4xl mt-7 text-center mb-10 shadow_control">Manager of Users</h1>
                <!-- control add -->
                <div class="float-right w-44 h-8 bg-white text-black mr-10 mb-5">
                    <input class="absolute opacity-0 h-8 w-44 left-[1070px] top-[108px] bg-red-500" type="checkbox" id="form_add_new">
                    <p class="text-center leading-8 font-bold">New users</p>
                    <form action="index.php?admin=users" class="form_add_new1 absolute left-[270px] w-[750px] h-[410px] bg-green-500 text-white" method="post" enctype="multipart/form-data">
                        <h2 class="text-center text-2xl font-bold text-orange-500 mt-2 mb-2">Add Users more</h2>
                        <hr>
                        <div class="w-[600px] mx-auto text-center">
                            <p class="text-green-300 font-bold">Middle name:</p>
                            <input class="w-[310px] rounded-sm outline-0 text-center text-gray-700" type="text" name="name_account" placeholder="..the nickname ...!" required>
                            <p class="text-green-300 font-bold">Avatar:</p>
                            <input type="file" name="img_account" required>
                            <p class="text-green-300 font-bold">TK:</p>
                            <input class="w-[310px] rounded-sm outline-0 text-center text-gray-700" type="text" name="tk_account" placeholder="..the name of account ...!" required><!-- pattern="[0-9]{1,20}" -->
                            <p class="text-green-300 font-bold">MK:</p>
                            <input class="w-[310px] rounded-sm outline-0 text-center text-gray-700" type="text" name="mk_account" placeholder="..the pass of account ...!" required>
                            <p class="text-green-300 font-bold">Email:</p>
                            <input class="w-[310px] rounded-sm outline-0 text-center text-gray-700" type="text" name="email_account" placeholder="..your email ...!" required pattern="[0-9a-z]+@gmail.+[a-z]{2,4}">
                            <p class="text-green-300 font-bold">Mastership:</p>
                            <select name="role" class="text-gray-700 w-[310px] text-center" required>
                                <option value="1">Admin</option>
                                <option value="0">Client</option>
                            </select>
                        </div>
                        <div class="flex justify-center mt-5">
                            <button class="bg-black w-40 h-8 hover:w-44 duration-200 hover:font-bold" name="btn_users">Add new</button>
                        </div>
                    </form>
                    <label for="form_add_new" class="form_add_new2"></label>
                </div>
                <!-- control add -->
                <table class='text-center font-bold w-[910px] mx-auto text-gray-300 mb-10'>
                    <tr class="text-xl border-b-2 border-white">
                        <th>Code</th>
                        <th>Image</th>
                        <th>Name account</th>
                        <th>TK</th>
                        <th>MK</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Yours choose</th>
                    </tr>
                    <?php
                        foreach($taikhoan_all as $value){
                            extract($value);
                            echo"
                                <tr class='border-b border-gray-500 text-sm'>
                                    <td class='h-10'>".$id_account."</td>
                                    <td class='h-10'><img class='w-20 h-16 rounded-xl' src='../../img/".$img_account."' alt='error img'></td>
                                    <td class='h-10'>".$name_account."</td>
                                    <td class='h-10'>".$tk_account."</td>
                                    <td class='h-10'><input class='w-28' type='password' value='".$mk_account."' disabled></td>
                                    <td class='h-10'>".$email_account."</td>";
                                    if($role==1){
                                        echo "<td class='h-10 text-gray-100'>Admin<span class='text-red-500 '>*</span></td>";
                                    }else{
                                        echo "<td class='h-10'>Client</td>";
                                    }
                                    echo"<td class='h-10'>
                                        <a href='index.php?admin=delete_account&id_account=$id_account' onclick=\"return confirm('Do u sure to delete ->".$name_account."<- yet ??');\" class='w-44 h-8 mr-2 hover:text-red-500 '>Delete</a>-
                                        <a class='w-44 h-8 hover:text-sky-500 ml-2' href='index.php?admin=update_account&id_account=$id_account'>Update</a>
                                    </td>
                                </tr>
                            ";
                        }
                    ?>
                    <!-- <input type="text" disabled> -->
                </table>
            </div>
        </div>
    </div>
</body>
</html>