<form method="POST" class="w-[300px] h-[447.141px] ml-[50px] relative">
    <h1 class="font-poppins font-black text-[36px] mb-[33px]">Sign in</h1>
    <div class="relative">
        <i class="bi bi-person-fill absolute top-[2px]"></i>
        <input placeholder="Your Name" class="input-form" type="text" name="name">
    </div>
    <div class="relative">
        <i class="bi bi-envelope-fill absolute top-[6px] left-[2px] text-[12px]"></i>
        <input placeholder="Your Email" class="input-form" type="email" name="email">
    </div>
    <div class="relative">
        <i class="bi bi-key-fill absolute top-[4px]"></i>
        <input placeholder="Password" class="input-form" type="password" name="password">
    </div>
    <div class="relative">
        <i class="bi bi-key absolute top-[4px]"></i>
        <input placeholder="Confirm Password" class="input-form" type="password" name="cpassword">
    </div>
    <div class="mb-[30px]">
        <input type="checkbox" name="remember" class="mr-[10px] relative top-[2px]">
        <label for="remember" class="font-poppins text-[13px] text-[#222]">Remember me</label>
    </div>
    <input type="submit" value="Register" class="bg-[#6DABE4] text-white font-poppins text-[14px] py-[15px] px-[39px] mt-[16px] rounded-[5px] hover:cursor-pointer hover:bg-[#4292DC] transition">

    <a href="/signin" class="text-[14px] text-[#222] underline font-poppins absolute top-[411px] -left-[325px]">I am already member</a>
</form>