<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 :text-gray-200 leading-tight">Dashboard Admin</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-200 overflow-hidden shadow-sm sm:rounded-lg p-6">
            @if(session('success'))
                <div class="mb-4 p-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-700 dark:text-green-400 font-medium" role="alert">{{ session('success') }}</div>
            @endif          
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-semibold text-black uppercase">Daftar Portofolio</h3>
                    <a href="{{ route('portfolio.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md text-sm font-semibold hover:bg-blue-400 transition">+ Tambah Portofolio</a>
                </div>
                <div class="overflow-x-auto rounded-md">
                    <table class="w-full text-sm text-left text-white">
                        <thead class="text-xs text-black bg-white uppercase border-b boder-black">
                            <tr>
                                <th class="px-6 py-3">nama project</th>
                                <th class="px-6 py-3">kategori</th>
                                <th class="px-6 py-3">kilasan</th>
                                <th class="px-6 py-3">opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($portfolios as $portfolio)
                            <tr class="border-b bg-white border-black hover:bg-blue-50 ">
                                <td class="px-6 py-4 font-medium text-gray-900 :text-white whitespace-nowrap">
                                    {{ $portfolio->nama }}
                                </td>
                                <td class="px-6 py-4">
                                    <span class="bg-red-100 text-indigo-800 text-xs font-bold px-2.5 py-0.5 rounded uppercase">
                                        {{ $portfolio->nama_kategori }}
                                    </span>
                                </td>
                                <td class="text-indigo-800 px-6 py-4 max-w-xs truncate ">
                                    {{ $portfolio->kilasan }}
                                </td>
                                <td class="px-6 py-4 flex items-center space-x-4">
                                    <form class="uppercase "action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST" onsubmit="return confirm('kamu yakin ingin menghapus portofolio ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline font-medium">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="px-6 py-4 text-center">Belum ada data portofolio.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>