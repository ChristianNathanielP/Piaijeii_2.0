

<dialog id="my_modal_1" class="modal">
    <div class="modal-box bg-light">
        <h3 class="text-base font-medium text-dark mb-2">Netflix 1U 1P, <span class="font-semibold">1 Bulan</span></h3>
        <img src="img/Qris_payment.jpg" class="rounded-lg mx-auto shadow-xl border w-96" alt="">
        <p class="pt-2 text-dark text-sm">Lakukan pembayaran sebesar <span class="font-bold">Rp200.000</span> melalui Qris diatas dan uploud bukti pembayaran kamu</p>
        <div class="modal-action">
            <form method="dialog" id="myForm">
                <input type="file" class="file-input file-input-bordered w-full bg-secondary mb-3" id="fileInput">
                <button type="button" class="btn w-full bg-secondary border-none text-dark hover:text-slate-400 text-xs lg:text-base" id="submitButtonModal1">Submit</button>
                <button class="btn btn-sm btn-circle btn-neutral absolute right-2 top-2">✕</button>
            </form>
        </div>
    </div>
    <x-alert>Harap memasukkan bukti Pembayaran</x-alert>
</dialog>

<dialog id="my_modal_2" class="modal bg-black bg-opacity-50">
    <div class="modal-box bg-light overflow-hidden">
        <div class="modal-action">
            <form method="dialog" class="w-full">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-2" placeholder="name@company.com" required>
                <button type="submit" class="btn w-full bg-secondary border-none text-dark hover:text-slate-400 text-xs lg:text-base" id="submitButtonModal2">Submit</button>
            </form>
            <button class="btn btn-sm btn-circle btn-neutral absolute right-2 top-2">✕</button>
        </div>
        <p class="pt-4 text-dark text-sm text-left"><sup class="text-red-600">*</sup>Hasil akan dikirimkan ke emailmu</p>
    </div>
    <x-alert>Harap memasukkan email kamu</x-alert>
</dialog>

<script>
    document.getElementById('submitButtonModal1').addEventListener('click', function() {
        const fileInput = document.getElementById('fileInput');
        const my_modal_1 = document.getElementById('my_modal_1');
        const my_modal_2 = document.getElementById('my_modal_2');
        const alert = document.getElementById('Alert');

        if (fileInput.files.length > 0) {
            my_modal_1.close();
            my_modal_2.showModal();
        } else {
            alert.classList.add("flex");
            alert.classList.remove("hidden");
            setTimeout(() => {
                alert.classList.remove("flex");
                alert.classList.add("hidden");
            }, 3000);
        }

        
    });

    document.getElementById('submitButtonModal2').addEventListener('click', function() {
        const emailInput = document.getElementById('email');
        const my_modal_2 = document.getElementById('my_modal_2');

        if (emailInput.value.trim() !== '') {
            my_modal_2.close();
        } else {
            alert.classList.add("flex");
            alert.classList.remove("hidden");
            setTimeout(() => {
                alert.classList.remove("flex");
                alert.classList.add("hidden");
            }, 3000);
        }
    });

    // const Toast = Swal.mixin({
    //     toast: true,
    //     position: 'top-end',
    //     showConfirmButton: true,
    //     timer: 500000000000000,
    // });
</script>

{{-- form validation --}}

<dialog id="my_modal_3" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box bg-light text-dark">
        <h3 class="text-lg font-bold">About Us</h3>
        <p class="py-4">Piaijeii adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad molestiae iste, optio nam exercitationem nihil!</p>
        <div class="modal-action">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-neutral absolute right-2 top-2">✕</button>
        </form>
        </div>
    </div>
</dialog>

<dialog id="my_modal_4" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box bg-light text-dark">
        <h3 class="text-lg font-bold">Terms and condition</h3>
        <ul>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet.</li>
        </ul>
        <div class="modal-action">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-neutral absolute right-2 top-2">✕</button>
        </form>
        </div>
    </div>
</dialog>

<dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box bg-light text-dark">
        <h3 class="text-lg font-bold border-b-2 border-primary pb-2 text-center mb-5">Your Profile</h3>
        <div class="flex flex-col items-center justify-center">
            <div class="group relative">
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" class="rounded-full shadow-sm shadow-dark w-24 h-24" alt="">
                <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 rounded-full">
                    <label for="file-input" class="cursor-pointer">
                        <svg class="w-11 h-1w-11 text-secondary" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.4998 5.50067L18.3282 8.3291M13 21H21M3 21.0004L3.04745 20.6683C3.21536 19.4929 3.29932 18.9052 3.49029 18.3565C3.65975 17.8697 3.89124 17.4067 4.17906 16.979C4.50341 16.497 4.92319 16.0772 5.76274 15.2377L17.4107 3.58969C18.1918 2.80865 19.4581 2.80864 20.2392 3.58969C21.0202 4.37074 21.0202 5.63707 20.2392 6.41812L8.37744 18.2798C7.61579 19.0415 7.23497 19.4223 6.8012 19.7252C6.41618 19.994 6.00093 20.2167 5.56398 20.3887C5.07171 20.5824 4.54375 20.6889 3.48793 20.902L3 21.0004Z" stroke="#E68369" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        <input id="file-input" type="file" class="hidden" />
                    </label>
                </div>
            </div>
            <p class="mt-3 text-base text-gray-600">piaijeii_0304</p>
            <p class="mt-5 text-lg">piaijeii@example.com</p>
            <p class="mt-2 text-base font-semibold text-primary">Member</p>
        </div>
        <div class="modal-action">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-neutral absolute right-2 top-2">✕</button>
        </form>
        </div>
    </div>
</dialog>




