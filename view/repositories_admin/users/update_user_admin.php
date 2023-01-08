<style>

</style>
<?php
    $id_account=$_GET["id_account"];
    $code=account_one($id_account);
    if(array($code)){
        $_SESSION["account"]=$code;
        extract($_SESSION["account"]);
        // echo $name_pd;die;
    }
    $all_kinds=kinds_all();
?>
<!-- Relationship -->
    <div class="levanvo bg-sky-500">
            <h1 class="ml-10 font-bold text-3xl mt-7 text-center shadow_update">Update Account</h1>
            <hr>
            <!-- control update -->
            <form action="index.php?admin=update_account"  class=" h-[390px] text-white" method="post" enctype="multipart/form-data">
                <h2 class="text-2xl font-bold text-gray-300 mt-2 mb-1 ml-14">Name of user: <?php echo $name_account?></h2>
                <h2 class="text-lg font-bold text-gray-300 mt-1 ml-14">Code Id: <?php echo $id_account?></h2>
                <div class="w-[600px] mx-auto text-center">
                    <p class="text-green-300 font-bold">Middle name:</p>
                    <input class="w-[310px] rounded-sm outline-0 text-center text-gray-700" type="text" value="<?php echo $name_account?>" name="name_account" placeholder="..the nickname ...!" required>
                    <p class="text-green-300 font-bold">Avatar:</p>
                    <input type="file" name="img_account1">
                    <input type="text" value="<?php echo $img_account?>" name="img_account2" class="text-black" hidden>
                    <p class="text-green-300 font-bold">TK:</p>
                    <input class="w-[310px] rounded-sm outline-0 text-center text-gray-700" type="text" value="<?php echo $tk_account?>" name="tk_account" placeholder="..the name of account ...!" required><!-- pattern="[0-9]{1,20}" -->
                    <p class="text-green-300 font-bold">MK:</p>
                    <input class="w-[310px] rounded-sm outline-0 text-center text-gray-700" type="password" value="<?php echo $mk_account?>" name="mk_account1" placeholder="..the pass of account ...!" required>
                    <p class="text-green-300 font-bold">Retype - MK:</p>
                    <input class="w-[310px] rounded-sm outline-0 text-center text-gray-700" type="password" value="<?php echo $mk_account?>" name="mk_account2" placeholder="..Retype your password ...!" required>
                    <p class="text-green-300 font-bold">Email:</p>
                    <input class="w-[310px] rounded-sm outline-0 text-center text-gray-700" type="text" value="<?php echo $email_account?>" name="email_account" placeholder="..your email ...!" required pattern="[0-9a-z]+@gmail.+[a-z]{2,4}">
                    <p class="text-green-300 font-bold">Mastership:</p>
                    <select name="role" class="text-gray-700 w-[310px] text-center" required>
                        <option value="1">Admin</option>
                        <option value="0">Client</option>
                    </select>
                    <input type="text" value="<?php echo $id_account?>" name="id_account" class="text-black" hidden>
                </div>
                <div class="flex justify-center mt-5">
                    <button class="bg-black w-40 h-8 hover:w-44 duration-200 hover:font-bold border-2 border-white" name="btn_user_update">Accept</button>
                </div>
            </form>
            <!-- control update -->
        </div>
    </div>
</body>
</html>