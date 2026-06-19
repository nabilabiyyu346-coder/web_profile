<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>

</head>
<body class="bg-slate-900 text-white">

    <!-- HERO -->
    <section class="min-h-screen flex items-center justify-center px-6">
        <div class="max-w-5xl mx-auto text-center">

            <img src="https://via.placeholder.com/200"
                 alt="Profile"
                 class="w-48 h-48 rounded-full mx-auto border-4 border-blue-500 shadow-lg">

            <h1 class="text-5xl font-bold mt-6">
                Nama Lengkap
            </h1>

            <p class="text-xl text-slate-300 mt-2">
                Web Developer | Laravel Developer | Student
            </p>

            <p class="max-w-2xl mx-auto mt-6 text-slate-400">
                Saya adalah seorang developer yang memiliki minat dalam
                pengembangan website menggunakan Laravel, PHP, dan MySQL.
            </p>

            <div class="mt-8 flex justify-center gap-4">
                <a href="#contact"
                   class="bg-blue-600 px-6 py-3 rounded-lg hover:bg-blue-700">
                    Hubungi Saya
                </a>

                <a href="#project"
                   class="border border-blue-500 px-6 py-3 rounded-lg hover:bg-blue-500">
                    Lihat Project
                </a>
            </div>

        </div>
    </section>

    <!-- ABOUT -->
    <section class="py-20 bg-slate-800">
        <div class="max-w-5xl mx-auto px-6">

            <h2 class="text-4xl font-bold text-center mb-10">
                Tentang Saya
            </h2>

            <p class="text-center text-slate-300 leading-relaxed">
                Saya memiliki ketertarikan dalam pengembangan aplikasi web,
                khususnya menggunakan Laravel Framework. Saat ini saya terus
                mempelajari backend development, database management,
                serta UI/UX dasar.
            </p>

        </div>
    </section>

    <!-- SKILLS -->
    <section class="py-20">
        <div class="max-w-5xl mx-auto px-6">

            <h2 class="text-4xl font-bold text-center mb-10">
                Skills
            </h2>

            <div class="grid md:grid-cols-4 gap-6">

                <div class="bg-slate-800 p-6 rounded-xl text-center">
                    <h3 class="font-bold">HTML</h3>
                    <p class="text-slate-400">Advanced</p>
                </div>

                <div class="bg-slate-800 p-6 rounded-xl text-center">
                    <h3 class="font-bold">CSS</h3>
                    <p class="text-slate-400">Intermediate</p>
                </div>

                <div class="bg-slate-800 p-6 rounded-xl text-center">
                    <h3 class="font-bold">PHP</h3>
                    <p class="text-slate-400">Intermediate</p>
                </div>

                <div class="bg-slate-800 p-6 rounded-xl text-center">
                    <h3 class="font-bold">Laravel</h3>
                    <p class="text-slate-400">Intermediate</p>
                </div>

            </div>

        </div>
    </section>

    <!-- EDUCATION -->
    <section class="py-20 bg-slate-800">
        <div class="max-w-5xl mx-auto px-6">

            <h2 class="text-4xl font-bold text-center mb-10">
                Pendidikan
            </h2>

            <div class="space-y-6">

                <div class="bg-slate-700 p-6 rounded-xl">
                    <h3 class="font-bold text-xl">
                        Universitas / Sekolah
                    </h3>

                    <p class="text-slate-300">
                        2023 - Sekarang
                    </p>
                </div>

                <div class="bg-slate-700 p-6 rounded-xl">
                    <h3 class="font-bold text-xl">
                        SMK / SMA
                    </h3>

                    <p class="text-slate-300">
                        2020 - 2023
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- PROJECT -->
    <section id="project" class="py-20">
        <div class="max-w-5xl mx-auto px-6">

            <h2 class="text-4xl font-bold text-center mb-10">
                Project
            </h2>

            <div class="grid md:grid-cols-2 gap-6">

                <div class="bg-slate-800 p-6 rounded-xl">
                    <h3 class="text-2xl font-bold">
                        Sistem Absensi
                    </h3>

                    <p class="text-slate-400 mt-3">
                        Aplikasi absensi berbasis Laravel dan MySQL.
                    </p>
                </div>

                <div class="bg-slate-800 p-6 rounded-xl">
                    <h3 class="text-2xl font-bold">
                        Toko Online
                    </h3>

                    <p class="text-slate-400 mt-3">
                        Website penjualan produk dengan fitur login,
                        keranjang, dan checkout.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="py-20 bg-slate-800">
        <div class="max-w-5xl mx-auto px-6 text-center">

            <h2 class="text-4xl font-bold mb-10">
                Kontak
            </h2>

            <div class="space-y-3 text-slate-300">
                <p>Email : nama@email.com</p>
                <p>WhatsApp : 08xxxxxxxxxx</p>
                <p>GitHub : github.com/username</p>
            </div>

        </div>
    </section>

</body>
</html>