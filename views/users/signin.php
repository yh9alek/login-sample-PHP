<form method="POST" class="w-[300px] h-[447.141px] relative 870:w-[60%] 870:mx-auto 710:mx-auto">
    <h1 class="font-poppins font-black text-[36px] mb-[33px]">Sign in</h1>
    <div class="relative">
        <i class="bi bi-person-fill absolute top-[2px]"></i>
        <input placeholder="Username" class="input-form" type="text" name="username">
    </div>
    <div class="relative">
        <i class="bi bi-key absolute top-[4px]"></i>
        <input placeholder="Password" class="input-form" type="password" name="password">
    </div>
    <div class="mb-[30px]">
        <input type="checkbox" name="remember" class="mr-[10px] relative top-[2px]">
        <label for="remember" class="font-poppins text-[13px] text-[#222]">Remember me</label>
    </div>
    <input type="submit" value="Log in" class="bg-[#6DABE4] text-white font-poppins text-[14px] py-[15px] px-[39px] mt-[16px] rounded-[5px] hover:cursor-pointer hover:bg-[#4292DC] transition 500:block 500:w-full">
    
    <div class="signin-b 870:flex 870:justify-between items-end 770:flex-col 770:justify-center 770:items-start 770:gap-[10px] 500:items-center">
        <div class="logwith font-poppins mt-[80px] flex justify-start items-center gap-[20px] 770:mt-[50px]">
            <p class="logwith-p text-[14px] text-[#222]">Or login with</p>
            <div class="space-x-[5px]">
                <a href="#" class="inline-block text-[12px] text-white aspect-square w-[30px] leading-[30px] text-center bg-[#3B5998] rounded-[5px] transition hover:scale-110"><i class="bi bi-facebook"></i></a>
                <a href="#" class="inline-block text-[12px] text-white aspect-square w-[30px] leading-[30px] text-center bg-[#222222] rounded-[5px] transition hover:scale-110"><i class="bi bi-twitter-x"></i></a>
                <a href="#" class="inline-block text-[12px] text-white aspect-square w-[30px] leading-[30px] text-center bg-[#E72734] rounded-[5px] transition hover:scale-110"><i class="bi bi-google"></i></a>
            </div>
        </div>

        <a href="/signup" class="text-[14px] text-[#222] underline font-poppins absolute top-[411px] -left-[325px] 990:-left-[260px] 870:block 870:static">Create an account</a>
    </div>
</form>