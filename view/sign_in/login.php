<style>
    .login {
        background-image: url(https://i0.wp.com/thatnhucuocsong.com.vn/wp-content/uploads/2022/02/anh-thien-nhien.jpg?ssl=1);
        background-size: 100% 100%;
    }
    input{
        outline: 0;
        border: 1px solid #00FFFF;
        width: 280px;
    }
    input:focus{
        border: 1px solid orange;
    }
</style>
<div class="w-[1300px] h-[550px] mx-auto login">
    <div class="h-7 mt-5"></div>
    <h1 class="text-4xl mb-16 text-white font-bold text-center">Welcome to the login and registration area</h1>
    <div class=" flex justify-center space-x-10">
        <form action="index.php?act=login" method="post" class="w-[510px] h-[350px] hover:rounded-md duration-300 bg-white opacity-50 hover:scale-105 hover:opacity-80">
            <h2 class="text-center text-2xl text font-bold underline mb-5">entry to Account</h2>
            <hr>
            <div class="text-center mb-8">
                <p>G-mail:</p>
                <input type="email" name="gm1" placeholder=".....?" required>
                <p>Account:</p>
                <input type="text" name="tk1" placeholder=".....?" required>
                <p>Pass:</p>
                <input type="text" name="mk1" placeholder=".....?" required>
            </div>
            <div class="flex justify-center mb-6">
                <input class="bg-black text-white w-36 h-8 hover:rounded-md duration-300 border-none" type="submit" name="info1" value="Sign in">
            </div>
            <a href="#"><p class="text-center text-red-500 font-bold hover:underline">Forgot password !</p></a>
        </form>
        <form action="index.php?act=logup" method="post" class="w-[510px] h-[350px] hover:rounded-md duration-300 bg-white opacity-50 hover:scale-105 hover:opacity-80">
            <h2 class="text-center text-2xl text font-bold underline mb-5">register Account</h2>
            <hr>
            <div class="text-center mb-8">
                <p>G-mail:</p>
                <input type="email" name="gm2" placeholder=".....?" required>
                <p>cre-Account:</p>
                <input type="text" name="tk2" placeholder=".....?" required>
                <p>cre-Pass:</p>
                <input type="text" name="mk2" placeholder=".....?" required>
                <p>retype-Pass:</p>
                <input type="text" name="mk22" placeholder=".....?" required>
            </div>
            <div class="flex justify-center mb-6">
            <input class="bg-black text-white w-36 h-8 hover:rounded-md duration-300 border-none" type="submit" name="info2" value="Sign up">
            </div>
        </form>
    </div>
    
</div>