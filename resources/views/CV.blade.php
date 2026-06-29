<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body class=" bg-gray-50">
    <navbar class="fixed top-0 right-0 left-0 px-8 py-7 flex justify-between items-center rounded-b-lg bg-white shadow-sm text-slate-800">
        <span class="text-xl font-bold tracking-6wider">Iqbal.CV</span>
        <div class="text-lg font-bold space-x-7 ">
            <a href="/" class="hover:text-blue-400 transition">Portofolio & Blog</a>
        </div>
    </navbar>
    <header class="pt-28 px-2 pb-8 md:pb-16 max-w-5xl mx-auto text-center md:text-left md:flex md:items-center md:gap-12">
        <div class="flex-shrink-0 mb-6 md:mb-0">
            <img src="{{ asset('image/Test_PP.jpg') }}" alt="Moch. Iqbal Hafidz P." class="w-32 h-32 md:w-56 md:h-56 rounded-full mx-auto object-cover">
        </div>
        <div>
            <h1 class="text-3xl md:text-5xl font-bold md:font-extrabold mt-6 mb-4 uppercase tracking-tight md:tracking-wide"><span class="text-blue-500">mochammad iqbal</span><br> hafidz pratama</h1>
            <p class="text-lg font-medium mb-2 leading-relaxed">Saya merupakan siswa <span class="text-blue-500">SMKN 1 Jenangan Ponorogo</span> jurusan <span class="text-blue-500">Rekayasa Perangkat Lunak (RPL).</span> Memiliki pengalaman mengerjakan
                    proyek perangkat lunak secara individu maupun tim, serta memiliki motivasi tinggi untuk belajar, beradaptasi, dan
                    mengembangkan kemampuan di dunia kerja melalui kegiatan PKL.</p>
        </div>
    </header>
    <main class="text-white grid grid-cols-1 md:grid-cols-2 gap-6 p-6 max-w-5xl mx-auto">
        <div class="bg-blue-600 p-6 rounded-xl shadow-md">
            <h2 class="text-xl font-bold text-center mb-4 tracking-wide">PENDIDIKAN</h2>
            <div class="space-y-3 text-sm md:text-base">
                <div class="border-b border-blue-400 pb-2">
                    <p class="font-semibold">SD Ma'arif Ponorogo</p>
                    <p class="text-blue-200 text-xs">2015 - 2021</p>
                </div>
                <div class="border-b border-blue-400 pb-2">
                    <p class="font-semibold">MTsN 2 Ponorogo</p>
                    <p class="text-blue-200 text-xs">2021 - 2024</p>
                </div>
                <div>
                    <p class="font-semibold">SMKN 1 Jenangan Ponorogo</p>
                    <p class="text-blue-200 text-xs">Jurusan RPL (2024 - Sekarang)</p>
                </div>
            </div>
        </div>
        <div class="bg-blue-600 p-6 rounded-xl shadow-md">
            <h2 class="text-xl font-bold text-center mb-4 tracking-wide">PRESTASI</h2>
            <div class="space-y-2 text-sm md:text-base">
                <p class="border-b border-white-400 pb-2">
                    <span class="font-semibold">Juara 2 Lomba Scratch Tingkat Sekolah</span><br>
                    <span class="text-xs">Diadakan oleh mahasiswa Universitas Malang</span>
                </p>
                <p>
                    <span class="font-semibold">Terbaik 2 Lomba Arek_AI Jatim (Kategori Aplikasi Python)</span><br>
                    <span class="text-xs">Kegiatan FESTIKA Jawa Timur 2025</span>
                </p>
            </div>
        </div>
        <div class="bg-blue-600 p-6 rounded-xl shadow-md">
            <h2 class="text-xl font-bold text-center mb-4 tracking-wide">HARD SKILL</h2>
            <div class="space-y-2 text-sm md:text-base">
                <p class="font-semibold">
                    <span>1. Python, C++, PHP (Laravel).</span><br>
                    <span>2. Logika dan algoritma pemrograman.</span><br>
                    <span>3. HTML dan Css (Dasar).</span><br>
                    <span>4. PostgreSQL (Dasar).</span><br>
                    <span>5. Microsoft Office, Canva, CapCut.</span><br>
                    <span>6. Editing Vidio (Capcut, Alight Motion).</span><br>
                </p>
            </div>
        </div>
        <div class="bg-blue-600 p-6 rounded-xl shadow-md">
            <h2 class="text-xl font-bold text-center mb-4 tracking-wide">SOFT SKILL</h2>
            <div class="space-y-2 text-sm md:text-base">
                <p class="font-semibold">
                    <span>1. Kerja tim dan komunikasi.</span><br>
                    <span>2. Disiplin dan bertanggung jawab.</span><br>
                    <span>3. Problem solving dasar.</span><br>
                    <span>4. Mampu menerima arahan dan evaluasi.</span><br>
                    <span>5. Adaptif dalam lingkungan.</span>
                </p>
            </div>
        </div>
    </main>
    <footer class="mt-12 py-6 text-center w-full bg-white border-t border-slate-300 rounded-t-xl text-slate-800">        
        <div class="flex justify-center gap-6 text-sm md:text-base">
            <a href="/" class="hover:underline flex items-center gap-1">Portofolio & Blog</a>
        </div>
    </footer>
  </body>
</html>