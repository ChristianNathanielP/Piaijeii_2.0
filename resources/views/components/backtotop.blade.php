<a href="#top" data-tip="hello">
    <button id="toTop" class="fixed opacity-0 bottom-2 right-5 z-50 bg-dark rounded-full shadow-md shadow-gray-500 transition duration-300 ease-in-out">
        <svg width="45" height="45" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 6V18M12 6L7 11M12 6L17 11" stroke="#ffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>    
</a>

<script>
const toTop = document.querySelector('#toTop');

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
        toTop.classList.remove("opacity-0")
        toTop.classList.add("opacity-100")
    }else{
        toTop.classList.add("opacity-0")
        toTop.classList.remove("opacity-100")
    }
});
</script>