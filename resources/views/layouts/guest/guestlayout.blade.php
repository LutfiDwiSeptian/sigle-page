<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandung Pilot Academy</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-50 via-white to-blue-100 min-h-screen">
    <div id="formModal"
        class="fixed inset-0 bg-black/40 backdrop-blur-sm flex items-center justify-center z-50 opacity-100 pointer-events-auto transition-opacity duration-300">
        <div
            class="bg-white w-full max-w-sm sm:max-w-md mx-4 rounded-xl shadow-xl p-5 md:p-6 relative overflow-y-auto max-h-[85vh] border border-blue-100">
            <button onclick="closeModal()"
                class="absolute top-3 right-3 text-gray-400 hover:text-red-500 text-2xl font-bold transition">&times;</button>
            <div class="flex flex-col items-center mb-3">
                <img src="{{ asset('favicon.png') }}" alt="Info" class="h-10 w-10 mb-1">
                <h2 class="text-base font-bold text-blue-700 mb-1 tracking-wide">Guest Registration</h2>
                <p class="text-xs text-gray-600 text-center mb-2 px-1 leading-relaxed">
                    This form is only used to collect your name and email information.
                    <span class="font-semibold text-blue-600">Your data will not be used for any other purpose</span>
                    and is guaranteed privacy.
                </p>
                <div class="w-full border-b border-gray-200 mb-3"></div>
            </div>
            <form action="{{ route('guest.store') }}" method="POST" class="space-y-4 text-sm">
                @csrf
                <div>
                    <label class="block text-gray-700 text-xs mb-1 font-medium" for="name">Name</label>
                    <input type="text" name="name" id="name"
                        class="w-full border border-blue-200 rounded-md px-3 py-1.5 focus:ring-2 focus:ring-blue-400 focus:border-blue-400 focus:outline-none transition"
                        placeholder="Name" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-xs mb-1 font-medium" for="email">Email</label>
                    <input type="email" name="email" id="email"
                        class="w-full border border-blue-200 rounded-md px-3 py-1.5 focus:ring-2 focus:ring-blue-400 focus:border-blue-400 focus:outline-none transition"
                        placeholder="Email" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-xs mb-1 font-medium" for="occupation">Occupation</label>
                    <input type="text" name="occupation" id="occupation"
                        class="w-full border border-blue-200 rounded-md px-3 py-1.5 focus:ring-2 focus:ring-blue-400 focus:border-blue-400 focus:outline-none transition"
                        placeholder="Occupation" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-xs mb-1 font-medium" for="company">Company</label>
                    <input type="text" name="company" id="company"
                        class="w-full border border-blue-200 rounded-md px-3 py-1.5 focus:ring-2 focus:ring-blue-400 focus:border-blue-400 focus:outline-none transition"
                        placeholder="Company" required>
                </div>
                <div>
                    <label class="block text-gray-700 text-xs mb-1 font-medium" for="phone">Phone</label>
                    <input type="text" name="phone" id="phone"
                        class="w-full border border-blue-200 rounded-md px-3 py-1.5 focus:ring-2 focus:ring-blue-400 focus:border-blue-400 focus:outline-none transition"
                        placeholder="Phone" required>
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-gradient-to-r from-blue-500 to-blue-700 text-white px-5 py-2 rounded-md shadow font-medium hover:from-blue-600 hover:to-blue-800 transition flex items-center gap-2 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
    <nav class="bg-blue-600 shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-center items-center">
            <div class="flex items-center gap-2">
                <img src="{{ asset('favicon.png') }}" alt="Logo" class="h-10 w-15">
            </div>
        </div>
    </nav>
    <section class="relative h-[40vh] sm:h-[60vh] md:h-[75vh] flex items-center justify-center bg-blue-900">
        <img src="{{ asset('gambar/hero.jpg') }}" alt="Flight Academy"
            class="absolute inset-0 w-full h-full object-cover opacity-70">
        <div class="relative z-10 text-center text-white px-2">
            <h1 class="text-2xl sm:text-4xl md:text-6xl font-extrabold drop-shadow-lg">Reach Your Dreams to Fly</h1>
            <p class="mt-4 text-base sm:text-lg md:text-2xl font-medium drop-shadow">
                Professional Pilot Training & Aviation School
            </p>
            <a href="mailto:marcom@bandungpilotacademy.com"
                class="mt-6 sm:mt-8 inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold px-6 sm:px-8 py-2 sm:py-3 rounded-full shadow-lg transition">
                Get Consultation
            </a>
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent"></div>
    </section>
    <section class="w-full bg-white py-8 sm:py-12">
        <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center gap-6 md:gap-10">
            <div class="w-full md:w-1/2 rounded-xl overflow-hidden shadow-lg mb-4 md:mb-0">
                <iframe class="w-full h-48 sm:h-64 md:h-80 rounded-xl"
                    src="https://www.youtube.com/embed/H51yAwCDIa0?autoplay=1&mute=1&playsinline=1"
                    title="YouTube video" frameborder="0"
                    allow="autoplay; encrypted-media; fullscreen; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
            <div class="w-full md:w-1/2">
                <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-blue-700 mb-3 sm:mb-4">
                    Experience Our Academy
                </h2>
                <p class="text-gray-700 text-base sm:text-lg mb-3 sm:mb-4">
                    Take a closer look at our facilities, training aircraft, and the vibrant learning environment at
                    Bandung Pilot Academy. Our video tour gives you a glimpse into the daily life of our students and
                    the high standards we maintain for pilot education.
                </p>
                <ul class="space-y-2 text-sm sm:text-base">
                    <li class="flex items-center"><span class="text-blue-600 mr-2">&#10003;</span> Modern classrooms &
                        simulators</li>
                    <li class="flex items-center"><span class="text-blue-600 mr-2">&#10003;</span> Real flight training
                        footage</li>
                    <li class="flex items-center"><span class="text-blue-600 mr-2">&#10003;</span> Inspiring student
                        stories</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="about" class="max-w-5xl mx-auto px-4 py-10 sm:py-16">
        <div class="flex flex-col md:flex-row items-center gap-6 md:gap-10">
            <img src="{{ asset('favicon.png') }}" alt="About"
                class="h-24 w-24 sm:h-32 sm:w-32 md:h-48 md:w-48 rounded-full shadow-lg border-4 border-blue-200 mb-4 md:mb-0">
            <div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-700 mb-3 sm:mb-4">About Bandung Pilot
                    Academy</h2>
                <p class="text-gray-700 text-base sm:text-lg mb-3 sm:mb-4">
                    Bandung Pilot Academy is a leading aviation school in Indonesia, dedicated to training the next
                    generation of professional pilots.
                </p>
                <ul class="space-y-2 text-sm sm:text-base">
                    <li class="flex items-center"><span class="text-blue-600 mr-2">&#10003;</span> Certified by the
                        Directorate General of Civil Aviation</li>
                    <li class="flex items-center"><span class="text-blue-600 mr-2">&#10003;</span> Modern aircraft &
                        simulators</li>
                    <li class="flex items-center"><span class="text-blue-600 mr-2">&#10003;</span> Internationally
                        recognized programs</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="downlaods">
        <div class="">
            <h2 class="text-2xl sm:text-3xl font-bold text-blue-700 text-center mb-6 sm:mb-10">Brochure & Company
                Profile
            </h2>
        </div>
        <div id="pdfModal"
            class="fixed inset-0 bg-black/60 flex items-center justify-center z-50 opacity-0 pointer-events-none transition-opacity duration-300">
            <div class="bg-white rounded-xl shadow-2xl w-full max-w-3xl h-[80vh] relative flex flex-col">
                <button onclick="closePdfModal()"
                    class="absolute top-3 right-3 text-gray-400 hover:text-red-500 text-2xl font-bold transition">&times;</button>
                <div id="pdfStatus" class="w-full text-center text-sm text-gray-600 pt-12 px-4 animate-pulse select-none">
                    Loading document...
                </div>
                <iframe id="pdfFrame" src="" class="w-full h-full rounded-b-xl hidden" frameborder="0" title="PDF Preview"></iframe>
            </div>
        </div>
        <div class="w-full flex justify-center bg-gray-100 py-6">
            <a href="{{ asset('file/BPA_Brochure.pdf') }}" id="previewBrochureBtn"
                class="inline-flex items-center gap-2 bg-gray-700 hover:bg-gray-800 text-white font-semibold px-5 py-2 rounded-lg shadow transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
                </svg>
                BPA Brochure
            </a>
        </div>
        <div class="w-full flex justify-center bg-gray-100 py-6">
            <a href="{{ asset('file/Company_Profile.pdf') }}" id="previewCompanyProfileBtn"
               data-expected-path="{{ public_path('file/Company_Profile.pdf') }}"
               class="inline-flex items-center gap-2 bg-gray-700 hover:bg-gray-800 text-white font-semibold px-5 py-2 rounded-lg shadow transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
                </svg>
                Company Profile
            </a>
        </div>
        <!-- Script per tombol dihapus: handler dipusatkan di bagian akhir untuk menghindari error ketika file tidak tersedia -->
    </section>
    <section id="programs" class="bg-white py-10 sm:py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-2xl sm:text-3xl font-bold text-blue-700 text-center mb-6 sm:mb-10">Our Programs</h2>
            <div class="flex flex-col sm:flex-row justify-center items-stretch gap-6 sm:gap-10">
                <div class="bg-blue-50 rounded-xl shadow-lg p-4 sm:p-6 flex flex-col items-center w-full sm:max-w-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="mb-2 text-blue-700">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    </svg>
                    <h3 class="text-lg sm:text-xl font-bold text-blue-700 mb-1 sm:mb-2">
                        Private Pilot License (PPL)
                    </h3>
                    <p class="text-gray-600 text-center text-sm sm:text-base">
                        Basic pilot training for those who want to fly for personal or recreational purposes.
                    </p>
                </div>
                <div class="bg-blue-50 rounded-xl shadow-lg p-4 sm:p-6 flex flex-col items-center w-full sm:max-w-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="mb-2 text-blue-700">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M14.639 10.258l4.83 -1.294a2 2 0 1 1 1.035 3.863l-14.489 3.883l-4.45 -5.02l2.897 -.776l2.45 1.414l2.897 -.776l-3.743 -6.244l2.898 -.777l5.675 5.727z" />
                        <path d="M3 21h18" />
                    </svg>
                    <h3 class="text-lg sm:text-xl font-bold text-blue-700 mb-1 sm:mb-2">
                        Commercial Pilot License (CPL)
                    </h3>
                    <p class="text-gray-600 text-center text-sm sm:text-base">
                        Professional pilot training for a career in commercial aviation.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="advantages" class="max-w-6xl mx-auto px-4 py-10 sm:py-16">
        <h2 class="text-2xl sm:text-3xl font-bold text-blue-700 text-center mb-6 sm:mb-10">Why Choose Us?</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 sm:gap-8">
            <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 flex flex-col items-center">
                <h4 class="font-bold text-blue-700 mb-1">Experienced Instructors</h4>
                <p class="text-gray-600 text-center text-sm sm:text-base">All instructors are certified and have
                    thousands of flight hours.</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 flex flex-col items-center">
                <h4 class="font-bold text-blue-700 mb-1">Modern Fleet</h4>
                <p class="text-gray-600 text-center text-sm sm:text-base">Training with the latest aircraft and flight
                    simulators.</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 flex flex-col items-center">
                <h4 class="font-bold text-blue-700 mb-1">Career Support</h4>
                <p class="text-gray-600 text-center text-sm sm:text-base">Assistance for job placement and airline
                    recruitment.</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 flex flex-col items-center">
                <h4 class="font-bold text-blue-700 mb-1">International Standard</h4>
                <p class="text-gray-600 text-center text-sm sm:text-base">Curriculum and certification recognized
                    globally.</p>
            </div>
        </div>
    </section>
    <footer class="bg-blue-900 text-white py-6 mt-10">
        <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-2">
                <img src="{{ asset('favicon.png') }}" alt="Logo" class="h-6 w-6 rounded-full">
                <span class="font-bold text-sm sm:text-base">Bandung Pilot Academy</span>
            </div>
            <div class="text-xs sm:text-sm">&copy; {{ date('Y') }} Bandung Pilot Academy. All rights reserved.</div>
        </div>
    </footer>

    @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#2563eb'
            }).then(() => {
                closeModal();
            });

            document.getElementById('downloadBrochureBtn').addEventListener('click', function (e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Download Brochure',
                    text: 'Thank you for your interest! Click OK to download the brochure.',
                    icon: 'info',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#2563eb'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = this.href;
                    }
                });
            });
        </script>
    @endif

    <script>
        function closeModal() {
            document.getElementById('formModal').classList.add('opacity-0', 'pointer-events-none');
            document.getElementById('formModal').classList.remove('opacity-100', 'pointer-events-auto');
        }
    </script>
    <script>
        function openPdfModal(pdfUrl) {
            const modal = document.getElementById('pdfModal');
            const frame = document.getElementById('pdfFrame');
            const status = document.getElementById('pdfStatus');
            // Reset state
            frame.classList.add('hidden');
            frame.src = '';
            status.classList.remove('hidden');
            status.textContent = 'Loading document...';
            modal.classList.remove('opacity-0','pointer-events-none');
            modal.classList.add('opacity-100');

            // Helper: set frame source and handle onload
            const setFrame = (url, note=null) => {
                frame.onload = () => {
                    // Some PDF viewers may still render blank; keep minimal delay
                    setTimeout(() => {
                        status.classList.add('hidden');
                        frame.classList.remove('hidden');
                    }, 150);
                };
                if (note) {
                    status.textContent = note;
                }
                frame.src = url;
            };

            // HEAD check to verify accessibility
            fetch(pdfUrl, { method: 'HEAD' })
                .then(resp => {
                    if (resp.ok) {
                        setFrame(pdfUrl + '#view=FitH');
                    } else {
                        // Fallback to Google Viewer
                        status.textContent = 'Direct load failed (status ' + resp.status + '), trying fallback viewer...';
                        const gv = 'https://drive.google.com/viewerng/viewer?embedded=true&url=' + encodeURIComponent(pdfUrl);
                        setFrame(gv);
                    }
                })
                .catch(() => {
                    status.textContent = 'Unable to access file directly, trying fallback...';
                    const gv = 'https://drive.google.com/viewerng/viewer?embedded=true&url=' + encodeURIComponent(pdfUrl);
                    setFrame(gv);
                });

            // Timeout fallback if still blank after 6s
            setTimeout(() => {
                if (frame.classList.contains('hidden')) {
                    status.classList.remove('hidden');
                    status.innerHTML = '<span class="text-red-600">Failed to display PDF. </span><br><a href="' + pdfUrl + '" class="text-blue-600 underline" download>Download instead</a>';
                }
            }, 6000);
        }
        function closePdfModal() {
            document.getElementById('pdfModal').classList.add('opacity-0', 'pointer-events-none');
            document.getElementById('pdfModal').classList.remove('opacity-100');
            document.getElementById('pdfFrame').src = '';
        }
        const brochureBtn = document.getElementById('previewBrochureBtn');
        if (brochureBtn) {
            brochureBtn.addEventListener('click', function (e) {
                e.preventDefault();
                openPdfModal(this.href);
            });
        }
        const companyBtn = document.getElementById('previewCompanyProfileBtn');
        if (companyBtn) {
            companyBtn.addEventListener('click', function (e) {
                e.preventDefault();
                // Optional: cek cepat apakah file bisa dimuat
                const testImg = new Image();
                testImg.onerror = () => console.warn('PDF may not exist or blocked:', this.href);
                testImg.onload = () => { /* ignore; some servers return 200 */ };
                testImg.src = this.href + '#cache-bust=' + Date.now();
                openPdfModal(this.href);
            });
            console.log('Company Profile button initialized:', companyBtn.getAttribute('href'));
        }
    </script>
</body>

</html>
