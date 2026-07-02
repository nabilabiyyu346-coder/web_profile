<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 :text-gray-200 leading-tight">Protofolio Maker</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-200 overflow-hidden shadow-sm sm:rounded-lg p-8">
                <div class="mb-6">
                    <a href="{{ route('dashboard') }}" class="text-sm font-semibold text-black uppercase hover-underline">← Kembali ke Daftar Portofolio</a>
                </div>
                <form action="{{ route('portfolio.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <x-input-label for="nama" :value="__('Nama Project')" />
                        <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <x-input-label for="id_kategori" :value="__('Kategori Portofolio')" />
                        <select id="id_kategori" name="id_kategori" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" required>
                            <option value="">-- Pilih Kategori --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('id_kategori')" class="mt-2" />
                    </div>
                    <div class="mb-6">
                        <x-input-label for="kilasan" :value="__('Kilasan / Deskripsi Singkat')" />
                        <textarea id="kilasan" name="kilasan" rows="4" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" required>{{ old('kilasan') }}</textarea>
                        <x-input-error :messages="$errors->get('kilasan')" class="mt-2" />
                    </div>
                    <div class="flex items-center justify-end">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-500 active:bg-green-750 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Simpan Portofolio</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>