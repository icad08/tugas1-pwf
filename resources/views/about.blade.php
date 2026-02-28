<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About Me') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Biodata Diri</h3>
                    <ul>
                        <li><strong>Nama:</strong> Muhammad Irsyad RM</li>
                        <li><strong>NIM:</strong> 20230140227</li>
                        <li><strong>Program Studi:</strong> Teknologi Informasi</li>
                        <li><strong>Hobi:</strong> Futsal, Lari, Fotografi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>