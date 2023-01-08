<!-- footer -->
<footer>
    <div class="w-full footer h-96 flex justify-center space-x-8 text-white text-center font-bold mt-10">
        <div class="w-[300px] border-r border-gray-300">
            <a href="index.php?act=web"><img class="mt-20 hover:scale-95 duration-200" src="img/img_icon/logo1.png" alt=""></a>
            <p>Address: 60-49 Road 11378 New York</p>
            <p>Phone: +65 11.188.888</p>
            <p>Email: vole543215@gmail.com</p>
            <a class="text-xs text-red-500" href="#">Copyright © 2022 All rights reserved | This template is made with  by Colorlib</a>
        </div>
        <div class="w-[300px] border-r border-gray-300">
            <h1 class="mb-14 mt-8 underline text-2xl">Useful Links</h1>
            <a href="#"><p class="mb-2 hover:text-orange-500">About Us</p></a>
            <a href="#"><p class="mb-2 hover:text-orange-500">About Our Shop</p></a>
            <a href="#"><p class="mb-2 hover:text-orange-500">Secure Shopping</p></a>
            <a href="#"><p class="mb-2 hover:text-orange-500">Delivery infomation</p></a>
            <a href="#"><p class="mb-2 hover:text-orange-500">Privacy Policy</p></a>
            <a href="#"><p class="mb-2 hover:text-orange-500">Our Sitemap</p></a>
        </div>
        <div class="w-[300px] border-r border-gray-300">
            <h1 class="mb-14 mt-8 underline text-2xl">More Info</h1>
            <a href="#"><p class="mb-2 hover:text-red-600">Who We Are</p></a>
            <a href="#"><p class="mb-2 hover:text-red-600">Our Services</p></a>
            <a href="#"><p class="mb-2 hover:text-red-600">Projects</p></a>
            <a href="#"><p class="mb-2 hover:text-red-600">Contact</p></a>
            <a href="#"><p class="mb-2 hover:text-red-600">Innovation</p></a>
            <a href="#"><p class="mb-2 hover:text-red-600">Testimonials</p></a>
        </div>
        <div class="w-[300px]">
            <h1 class="mb-10 mt-8 underline text-2xl">Payment Services</h1>
                <div class="flex mb-2">
                    <img class="w-20 h-20" src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Youtube_QR_Code_Generator.png" alt=""><span class="my-auto ml-10 text-lg">Youtube</span>
                </div>
                <div class="flex mb-2 justify-end">
                    <span class="my-auto mr-10 text-lg">Momo</span><img class="w-20 h-20" src="https://static.mservice.io/img/momo-upload-api-220418155002-637858938029609599.png" alt="">
                </div>
                <div class="flex mb-2">
                    <img class="w-20 h-20" src="https://nguyenhung.net/wp-content/uploads/2021/10/vietqr-ngan-hang-vietinbank.png" alt=""><span class="my-auto ml-10 text-md">Viet-QR</span>
                </div>
        </div>
    </div>
</footer>
<!-- lamp -->
<script>
    var lamp_count = 0;
    document.getElementById("lamp").onclick = function() {
        var all = document.querySelector(".all");
        lamp_count += 1;
        if (lamp_count % 2 != 0) {
            all.style.background = "black";
            all.style.color = "white";
            document.querySelector("#power").innerHTML = "Off";
            document.querySelector("#power").style.color = "gray";

        } else {
            all.style.background = "";
            all.style.color = "";
            document.querySelector("#power").innerHTML = "On";
            document.querySelector("#power").style.color = "white";
        }
    }
    $(document).ready(function (){
        $("all").color("blue");
    });
</script>