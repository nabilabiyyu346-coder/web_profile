<!doctype html>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  </head>
  <body>
    <navbar class="fixed top-0 left-0 w-full bg-blue-500 border-b border-black z-50 px-8 py-4 flex justify-between items-center">
        <span class="text-xl font-bold">TES</span>
        <div class="space-x-10 text-sm">
            <a href="" class="hover:text-white hover:underline transition">TES1</a>
            <a href="" class="hover:text-white hover:underline transition">TES2</a>
            <a href="" class="hover:text-white hover:underline transition">TES3</a>
        </div>
    </navbar>
    <header id="about" class="h-screen flex flex-col justify-center items-center text-center px-80">
        <h1 class="text-5xl font-extrabold mb-4">Moch. Iqbal H. P.</h1>
        <p class="text-blue-400 text-lg max-w-xl mb-2">Testing Website Portofolio</p>
        <h2 class="text-black text-2xl ">SMKN 1 Jenangan Ponorogo</h2>
    </header>
    <section id="portfolio" class="py-20 max-w-6xl mx-auto px-6 border-t border-black">
        <h2 class="text-3xl font-bold mb-12 text-center text-black">Portofolio</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach($portofolios as $portofolio)
        <div class=""></div>
    </section>
  </body>
  </html>
  