<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class=" sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{$book->title}}
                </h1>

                    <div class="mt-3">Penulis : {{$book->author}} </div>
                    <div class="mt-2 mb-5"> Penerbit : {{$book->publisher}} | Tahun {{$book->publication_year}}  </div>
                    <div class="mt-3">Status : {{$book->status == 'available' ? 'Tersedia' : 'Dipinjam'}} </div>
                    <div class="mt-2 mb-5"> Deskripsi : {{$book->description}}</div>

                </div>
            </div>

            </div>
        </div>
    </div>
</x-app-layout>


