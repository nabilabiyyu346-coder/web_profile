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
            <a href="/CV" class="hover:text-white hover:underline transition">CV Iqbal</a>
            <a href="/login" class="hover:text-white hover:underline transition">Login</a>
            <a href="/register" class="hover:text-white hover:underline transition">Register</a>
        </div>
    </navbar>
    <header id="about" class="h-screen flex flex-col justify-center items-center text-center px-80">
        <h1 class="text-5xl font-extrabold mb-4">Moch. Iqbal H. P.</h1>
        <p class="text-blue-400 text-lg max-w-xl mb-2">Testing Website Portofolio</p>
        <h2 class="text-black text-2xl ">SMKN 1 Jenangan Ponorogo</h2>
    </header>
    <div x-data="{ openModal: false, modalTitle: '', modalDesc: '' }">
    <section 
    id="portfolio" class="py-20 max-w-6xl mx-auto px-6 border-t border-black" >
        <h2 class="text-3xl font-bold mb-12 text-center text-black">Portofolio</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach($portfolios as $portfolio)
        <div class="bg-blue-500 border border-blue-900 rounded-xl">
            <div class="p-6">
                <span class="text-xs text-white font-bold bg-blue-600 px-2 py-1 rounded uppercase">Portofolio</span>
                <h3 class="text-xl font-bold mt-4 mb-2 text-white">{{ $portfolio->judul ?? $portfolio->nama ?? 'Tanpa Judul' }}</h3>
                <p class="text-white text-sm line-clamp-3 mb-6">{{ $portfolio->deskripsi ?? $portfolio->kilasan ?? $portfolio->description ?? '' }}</p>
                <button @click="openModal = true;
                    modalTitle = @js($portfolio->judul ?? $portfolio->nama ?? 'Detail'); 
                    modalDesc = @js($portfolio->deskripsi ?? $portfolio->kilasan ?? $portfolio->description ?? '');" 
                    class="text-sm font-semibold text-white hover:underline cursor-pointer">Baca Selengkapnya
                </button>
            </div>
        </div>
        @endforeach
        </div>
        <div x-show="openModal"
        class="fixed inset-0 bg-black/60 z-50 flex items-center justify-center p-4 backdrop-blur-sm"
        x-transition
        x-cloak>
        <div class="bg-white p-6 rounded-2xl max-w-lg w-full shadow-2xl relative" @click.away="openModal = false">
            <h2 class="text-2xl font-bold mb-4 text-gray-900" x-text="modalTitle"></h2>
            <div class="text-gray-600 text-sm overflow-y-auto max-h-60 mb-6 whitespace-pre-line" x-text="modalDesc"></div>
            <div class="flex justify-end">
                <button @click="openModal = false" class="bg-gray-900 text-white px-4 py-2 rounded-xl text-sm font-medium hover:bg-gray-800 transition cursor-pointer">Tutup</button>
            </div>
        </div>
        </div>
    </section>
    <section id="blog" class="py-20 max-w-6xl mx-auto px-6 border-t border-gray-900">
    <h2 class="text-3xl font-bold mb-12 text-center text-black">Blog</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @foreach($blogs as $blog)
        <div class="bg-blue-500 rounded-xl border border-blue-900">
            <div class="p-6">
                <span class="text-xs text-white font-bold bg-blue-600 px-2 py-1 rounded uppercase">Blog</span>
                <h3 class="text-xl font-bold mt-4 mb-2 text-white">{{ $blog->title }}</h3>
                <p class="text-white text-sm line-clamp-3 mb-6">Diposting pada: {{ $blog->created_at ?? '-' }}</p>
                <button 
                    @click="
                        openModal = true; 
                        modalTitle = @js($blog->title); 
                        modalDesc = @js($blog->content);" 
                    class="text-sm font-semibold text-white hover:underline cursor-pointer">Baca Artikel </button>
            </div>
        </div>
        @endforeach
    </div>
    </section>
    </div>
    <footer class="mt-12 py-6 text-center w-full bg-blue-500 border-t border-black text-slate-800">        
        <div class="flex justify-center gap-6 text-sm md:text-base">
            <a href="" class="hover:text-white hover:underline transition">TES1</a>
            <a href="" class="hover:text-white hover:underline transition">TES2</a>
            <a href="" class="hover:text-white hover:underline transition">TES3</a>
        </div>
    </footer>
  </body>
  </html>
  