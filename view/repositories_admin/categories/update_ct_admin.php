<style>

</style>
<?php
    $id_k=$_GET["id_k"];
    $code=kinds_one($id_k);
    if(array($code)){
        $_SESSION["kinds"]=$code;
        extract($_SESSION["kinds"]);
        // echo $name_k;die;
    }
    $all_kinds=kinds_all();
?>
<!-- Relationship -->
        <div class="levanvo bg-sky-500">
            <h1 class="ml-10 font-bold text-3xl mt-7 text-center shadow_update">Update Categories</h1>
            <hr>
            <!-- control update -->
            <form action="index.php?admin=update_k"  class=" h-[390px] text-white" method="post" enctype="multipart/form-data">
                <h2 class="text-2xl font-bold text-gray-300 mt-2 mb-1 ml-14">The kinds: <?php echo $name_k?></h2>
                <h2 class="text-lg font-bold text-gray-300 mt-1 ml-14">PLU: <?php echo $id_k?></h2>
                <div class="w-[600px] mx-auto text-center">
                    <p class="text-green-300 font-bold">Id category:</p>
                    <input class="w-[310px] rounded-sm outline-0 text-center text-white" type="text" value="<?php echo $id_k?>" name="id_kk" disabled>
                    <input type="text" value="<?php echo $id_k?>" name="id_k" hidden>
                    <p class="text-green-300 font-bold">The name:</p>
                    <input class="w-[310px] rounded-sm outline-0 text-center text-gray-700" type="text" value="<?php echo $name_k?>" name="name_k" placeholder="..the price ...!" required><!-- pattern="[0-9]{1,20}" -->
                </div>
                <div class="flex justify-center mt-5">
                    <button class="bg-black w-40 h-8 hover:w-44 duration-200 hover:font-bold border-2 border-white" name="btn_kinds_update">Yes, done it</button>
                </div>
            </form>
            <!-- control update -->
        </div>
    </div>
</body>
</html>