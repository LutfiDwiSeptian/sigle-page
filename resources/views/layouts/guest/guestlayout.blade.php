<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CDN Tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!---------->
    <title>Home Page</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
</head>

<body class="antialiased bg-gray-50">
    <div class="w-full">
        <div class="bg-blue-600 text-white">

            <div class="max-w-7xl mx-auto flex justify-end space-x-4 px-4 py-2">
                <a href="https://facebook.com" target="_blank" class="hover:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22 12a10 10 0 1 0-11.6 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1 .9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2V12h2.2l-.3 3h-1.9v7A10 10 0 0 0 22 12z" />
                    </svg>
                </a>
                <a href="https://twitter.com" target="_blank" class="hover:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22.46 6c-.77.35-1.6.58-2.46.69a4.2 4.2 0 0 0 1.84-2.32c-.82.5-1.72.87-2.67 1.07a4.16 4.16 0 0 0-7.08 3.8A11.8 11.8 0 0 1 3.15 4.6a4.15 4.15 0 0 0 1.29 5.55 4.1 4.1 0 0 1-1.88-.52v.05a4.16 4.16 0 0 0 3.34 4.07 4.2 4.2 0 0 1-1.88.07 4.16 4.16 0 0 0 3.88 2.88A8.36 8.36 0 0 1 2 19.54a11.77 11.77 0 0 0 6.29 1.84c7.55 0 11.68-6.25 11.68-11.67 0-.18-.01-.36-.02-.54A8.35 8.35 0 0 0 22.46 6z" />
                    </svg>
                </a>
                <a href="https://instagram.com" target="_blank" class="hover:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.6 0 3 1.4 3 3v10c0 1.6-1.4 3-3 3H7c-1.6 0-3-1.4-3-3V7c0-1.6 1.4-3 3-3h10zm-5 3.5a5.5 5.5 0 1 0 .001 11.001A5.5 5.5 0 0 0 12 7.5zm0 2a3.5 3.5 0 1 1-.001 6.999A3.5 3.5 0 0 1 12 9.5zm4.8-3.9a1.1 1.1 0 1 0 0 2.2 1.1 1.1 0 0 0 0-2.2z" />
                    </svg>
                </a>
                <a href="https://bandungpilotacademy.com/" target="_blank"><img src="{{asset('favicon.png')}}" alt="icon" class="w-5 h-5"></a>
            </div>
        </div>

        <header class="bg-white shadow-md">
            <div class="max-w-7xl mx-auto px-4 py-4 flex justify-center items-center">
                <a href="{{ route('guest.view') }}">
                    <img src="{{ asset('favicon.png') }}" alt="Logo" class="h-12 md:h-16">
                </a>
            </div>
        </header>
    </div>

    <div class="relative w-full h-64 md:h-96">
        <img src="{{asset('gambar/hero.jpg')}}" alt="Banner" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/20 z-10"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
            <h1 class="text-3xl md:text-5xl font-bold drop-shadow-lg" style="text-shadow:0 2px 8px #000,0 0 2px #fff;">Welcome</h1>
            <p class="mt-2 text-lg md:text-2xl font-semibold drop-shadow-lg" style="text-shadow:0 2px 8px #000,0 0 2px #fff;">
                <span class="text-blue-300 font-bold">Bandung</span> <span class="text-white">Pilot Academy</span>
            </p>
        </div>
    </div>

        <div class="max-w-3xl mx-auto mt-8 mb-4 flex justify-center px-2">
            <div class="w-full aspect-video rounded-xl shadow-lg overflow-hidden bg-black">
                <video controls autoplay muted playsinline class="w-full h-full object-cover">
                    <source src="{{ asset('vidio/contoh.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

        <section class="max-w-3xl mx-auto bg-gradient-to-br from-blue-50 via-white to-blue-100 rounded-2xl shadow-2xl p-4 md:p-8 mt-8 mb-8 border border-blue-100">
            <div class="flex flex-col items-center mb-4">
                <div class="bg-blue-600 rounded-full p-3 mb-2 shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m4 0h-1v-4h-1m-4 0h-1v-4h-1m4 0h-1v-4h-1" /></svg>
                </div>
                <h2 class="text-3xl font-extrabold text-blue-700 mb-1 tracking-tight">About Us</h2>
                <div class="w-16 h-1 bg-gradient-to-r from-blue-400 to-blue-700 rounded-full mb-4"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                <div>
                    <p class="text-gray-700 text-base md:text-lg mb-4 leading-relaxed">
                        <span class="font-bold text-blue-700">To Bandung Pilot Academy</span> is an information technology company focused on developing innovative digital solutions and providing professional IT services. We help businesses grow through reliable websites, mobile applications, and information systems.
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-center bg-blue-100 rounded-lg px-3 py-2 hover:bg-blue-200 transition text-sm md:text-base">
                            <svg class="h-5 w-5 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 10c-4.41 0-8-1.79-8-4V6c0-2.21 3.59-4 8-4s8 1.79 8 4v8c0 2.21-3.59 4-8 4z"/></svg>
                            Established in 2020, Jakarta
                        </li>
                        <li class="flex items-center bg-blue-100 rounded-lg px-3 py-2 hover:bg-blue-200 transition text-sm md:text-base">
                            <svg class="h-5 w-5 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 0 1 8 0v2"/></svg>
                            Digital solutions for SMEs & corporations
                        </li>
                        <li class="flex items-center bg-blue-100 rounded-lg px-3 py-2 hover:bg-blue-200 transition text-sm md:text-base">
                            <svg class="h-5 w-5 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            Professional & experienced team
                        </li>
                        <li class="flex items-center bg-blue-100 rounded-lg px-3 py-2 hover:bg-blue-200 transition text-sm md:text-base">
                            <svg class="h-5 w-5 text-blue-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 10c-4.41 0-8-1.79-8-4V6c0-2.21 3.59-4 8-4s8 1.79 8 4v8c0 2.21-3.59 4-8 4z"/></svg>
                            Quality, innovation, & customer satisfaction
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <img src="{{ asset('favicon.png') }}" alt="Company Logo" class="h-20 w-20 md:h-24 md:w-24 rounded-full shadow-lg border-4 border-blue-200 mb-4">
                    <p class="text-blue-700 font-semibold text-center text-sm md:text-base">"With us, realize your business digital transformation!"</p>
                </div>
            </div>
            <div class="w-full border-t border-blue-100 mt-8 mb-2"></div>
            <p class="text-gray-700 text-center mt-2 text-sm md:text-base">
                Contact us for the best digital solutions and consultation for your business.
            </p>
        </section>

   <div id="formModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 opacity-0 invisible transition-opacity duration-300 ease-out">
    <!-- Modal Content -->
        <div class="bg-white p-4 md:p-8 rounded-2xl shadow-2xl w-full max-w-sm md:max-w-2xl lg:max-w-4xl xl:max-w-6xl relative transform scale-95 transition-transform duration-300 ease-out">
        <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-400 hover:text-red-500 text-2xl font-bold transition">
            &times;
        </button>
        <div class="flex flex-col items-center mb-4">
            <img src="{{ asset('favicon.png') }}" alt="Info" class="h-12 w-12 mb-2">
            <h2 class="text-lg font-bold text-blue-700 mb-2">Please fill in this form</h2>
            <p class="text-sm text-gray-600 text-center mb-2 px-2">This form is solely used to collect your name and email information <span class="font-semibold text-blue-600">your privacy is guarenteed,the data</span> will not be used for any other purpose.</p>
            <div class="w-full border-b border-gray-200 mb-4"></div>
        </div>
        <h2 class="text-base font-semibold mb-4 text-center text-gray-800 tracking-wide uppercase">
            Silakan Isi Informasi Anda
        </h2>
    <form action="{{ route('guest.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf
            <div>
                <label class="block text-gray-700 text-sm mb-1 font-medium" for="nama">Name</label>
                <input type="text" name="name" id="nama" class="w-full border-2 border-blue-200 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:border-blue-400 focus:outline-none transition" placeholder="Name" required>
            </div>
            <div>
                <label class="block text-gray-700 text-sm mb-1 font-medium" for="email">Email</label>
                <input type="email" name="email" id="email" class="w-full border-2 border-blue-200 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:border-blue-400 focus:outline-none transition" placeholder="Email" required>
            </div>
            <div>
                <label class="block text-gray-700 text-sm mb-1 font-medium" for="occupation">Occupation</label>
                <input type="text" name="occupation" id="occupation" class="w-full border-2 border-blue-200 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:border-blue-400 focus:outline-none transition" placeholder="Occupation" required>
            </div>
            <div>
                <label class="block text-gray-700 text-sm mb-1 font-medium" for="company">Company Name</label>
                <input type="text" name="company" id="company" class="w-full border-2 border-blue-200 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:border-blue-400 focus:outline-none transition" placeholder="Company Name" required>
            </div>
            <div>
                <label class="block text-gray-700 text-sm mb-1 font-medium" for="phone">Phone Number</label>
                <input type="text" name="phone" id="phone" class="w-full border-2 border-blue-200 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:border-blue-400 focus:outline-none transition" placeholder="Phone Number" required>
            </div>
            <div class="flex items-end justify-end md:col-span-2">
                <button type="submit" class="bg-gradient-to-r from-blue-500 to-blue-700 text-white px-6 py-2 rounded-lg shadow-lg font-semibold hover:from-blue-600 hover:to-blue-800 transition flex items-center gap-2 w-full lg:w-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal() {
        const modal = document.getElementById('formModal');
        modal.classList.remove('opacity-0', 'invisible');
        modal.firstElementChild.classList.remove('scale-95');
    }

    function closeModal() {
        const modal = document.getElementById('formModal');
        modal.classList.add('opacity-0', 'invisible');
        modal.firstElementChild.classList.add('scale-95');
    }

    window.addEventListener('load', () => {
    setTimeout(() => {
    openModal();
    }, 500);
    });
</script>

    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
                confirmButtonColor: '#3085d6',
            })
        </script>
    @endif

       <script>
        @if(session('success'))
            document.getElementById('formModal').style.display = 'none';
        @endif
    </script>

    <main class="mt-6">
        @yield('content')
    </main>
</body>

</html>
