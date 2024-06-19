<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('books.create') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Add Book</a>
                    <div class="mt-6">
                        <div class="overflow-x-auto">
                            <table class="min-w-full w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Judul Buku
                                        </th>
                                        <th scope="col" class="py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Penulis
                                        </th>
                                        <th scope="col" class="py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Penerbit
                                        </th>
                                        <th scope="col" class="py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Tahun Terbit
                                        </th>
                                        <th scope="col" class="py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th scope="col" class="relative text-left text-xs  py-4 font-medium text-gray-500 uppercase tracking-wider">
                                            <span class=" ">Aksi</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($books as $book)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            {{$book->title}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            {{$book->author}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            {{$book->publisher}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            {{$book->publication_year}}
                                        </td>   
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            {{$book->status}}
                                        </td>
                                        <td class="py-4 whitespace-nowrap text-sm font-medium text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('books.destroy', $book->id) }}" method="POST">
                                                <a href="{{ route('books.show', $book->id) }}" class="text-green-600 hover:text-green-900">Detail</a>
                                                <a href="{{ route('books.edit', $book->id) }}" class="text-indigo-600 hover:text-indigo-900 px-3">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center">Data buku belum tersedia.</td>
                                </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>

    