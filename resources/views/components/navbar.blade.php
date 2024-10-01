<div id="top" class="navbar bg-white px-4 sm:px-14 flex flex-wrap justify-between shadow-md top-1 absolute py-4 rounded-lg">
    <div class="">
        <a href="#" class="drop-shadow-sm">
            <h1 class="font-semibold font-sansita text-2xl sm:text-3xl text-dark">Piaijeii</h1>
            <p class="text-[8px] sm:text-[10px] text-center -mt-1">app prem</p>
        </a>
    </div>

    <div class="mr-4 sm:mr-8 hidden md:flex">
        <ul class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-10 text-sm md:text-base text-dark font-medium">
            <li class="hover:text-primary hover:underline hover:underline-offset-4 cursor-pointer transition duration-400">
                <a href="#home">Home</a>
            </li>
            <li class="hover:text-primary hover:underline hover:underline-offset-4 cursor-pointer transition duration-400">
                <a href="#productCategory">Category</a>
            </li>
            <li class="hover:text-primary hover:underline hover:underline-offset-4 cursor-pointer transition duration-400">
                <a href="#product">Product</a>
            </li>
            <li class="hover:text-primary hover:underline hover:underline-offset-4 cursor-pointer transition duration-400">
                <a href="#contact">Contact</a>
            </li>
            <li class="hover:text-primary hover:underline hover:underline-offset-4 cursor-pointer transition duration-400">
                <a href="https://drive.google.com/drive/folders/1uMJxFqytQ1OlBrxIefL2bx8FOad7kXWn" target="_blank">Testimony</a>
            </li>
        </ul>
    </div>

    <div class="flex space-x-2 items-center">
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-8 sm:w-10 rounded-full">
                    <img alt="Profile Pict" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" />
                </div>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-secondary rounded-box z-[1] mt-3 w-40 sm:w-52 p-2 text-slate-700 font-medium">
                <li class="hover:bg-light active:bg-light rounded-box"><button onclick="my_modal_5.showModal()">Profile</button></li>
                <li class="hover:bg-light active:bg-light rounded-box"><a href="/signin">Sign In</a></li>
                <li class="hover:bg-light active:bg-light rounded-box"><a>Log Out</a></li>
            </ul>
        </div>
        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
            <button id="mobile-menu-button" class="text-dark focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
</div>

<!-- Mobile menu -->
<div id="mobile-menu" class="hidden md:hidden">
    <ul class="flex flex-col space-y-2 text-sm pb-3 pt-24 text-white font-medium px-4 transition ease-in-out">
        <li class="hover:text-primary hover:underline hover:underline-offset-4 cursor-pointer transition duration-400">
            <a href="#home">Home</a>
        </li>
        <li class="hover:text-primary hover:underline hover:underline-offset-4 cursor-pointer transition duration-400">
            <a href="#productCategory">Category</a>
        </li>
        <li class="hover:text-primary hover:underline hover:underline-offset-4 cursor-pointer transition duration-400">
            <a href="#product">Product</a>
        </li>
        <li class="hover:text-primary hover:underline hover:underline-offset-4 cursor-pointer transition duration-400">
            <a href="#contact">Contact</a>
        </li>
        <li class="hover:text-primary hover:underline hover:underline-offset-4 cursor-pointer transition duration-400">
            <a href="https://drive.google.com/drive/folders/1uMJxFqytQ1OlBrxIefL2bx8FOad7kXWn" target="_blank">Testimony</a>
        </li>
    </ul>
</div>


<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        var menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    }); 
</script>
