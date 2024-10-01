<div class="flex w-full h-screen justify-center items-center font-poppins px-4">

    <form action="/" class="py-4 px-10 lg:py-8 lg:px-20 bg-white text-dark shadow-md shadow-primary rounded-lg">
        <img src="img/Piaijeii_logo.png" alt="" class="w-9">
        <h1 class="font-semibold text-xl">Hello...</h1>
        <p class="text-xs">create your account here</p>
        <div class="mt-4 lg:mt-6">
            <label for="username" class="text-sm lg:text-base">Username <span class="text-red-500">*</span></label>
            <input type="text" name="username" class="w-full mt-1 lg:mt-2 bg-light px-3 py-1 lg:py-2 text-dark ring-1 ring-secondary hover:ring-2 focus:outline-none transition duration-1000 ease-in-out hover:ring-secondary rounded-lg bg-transparent focus:ring-2 focus:ring-secondary focus:shadow-md">
        </div>
        <div class="mt-2 lg:mt-4">
            <label for="email" class="text-sm lg:text-base">Email <span class="text-red-500">*</span></label>
            <input type="text" name="email" class="w-full mt-1 lg:mt-2 bg-light px-3 py-1 lg:py-2 text-dark ring-1 ring-secondary hover:ring-2 focus:outline-none transition duration-1000 ease-in-out hover:ring-secondary rounded-lg bg-transparent focus:ring-2 focus:ring-secondary focus:shadow-md">
        </div>
        <div class="mt-2 lg:mt-4">
            <label for="password" class="text-sm lg:text-base">Password <span class="text-red-500">*</span></label>
            <input type="password" name="password" class="w-full mt-1 lg:mt-2 bg-light px-3 py-1 lg:py-2 text-dark ring-1 ring-secondary hover:ring-2 focus:outline-none transition duration-1000 ease-in-out hover:ring-secondary rounded-lg bg-transparent focus:ring-2 focus:ring-secondary focus:shadow-md" >
        </div>
        <div class="mt-2 lg:mt-4">
            <label for="conpassword" class="text-sm lg:text-base">Confirm Your Password <span class="text-red-500">*</span></label>
            <input type="password" name="conpassword" class="w-full mt-1 lg:mt-2 bg-light px-3 py-1 lg:py-2 mb-2 text-dark ring-1 ring-secondary hover:ring-2 focus:outline-none transition duration-1000 ease-in-out hover:ring-secondary rounded-lg bg-transparent focus:ring-2 focus:ring-secondary focus:shadow-md" >
        </div>

        <div class="mt-4 lg:mt-6">
            <a href="">
                <button class="w-full py-2 lg:py-3 text-light bg-primary rounded-lg hover:bg-dark hover:text-light transition duration-300 active:translate-y-1 text-center shadow-lg uppercase text-base">Sign Up</button>
            </a>
        </div>
        <div class="mt-4">
            <h2 class="text-center text-xs lg:text-sm">Already have an account? <a href="/signin" class="text-primary underline underline-offset-2">Login Here</a></h2>
        </div>
    </form>
</div>