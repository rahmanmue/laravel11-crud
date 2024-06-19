<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form action="{{ route('books.update', $book->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <div>
                            <x-input-label for="title" :value="__('Judul Buku')" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $book->title)" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="author" :value="__('Penulis')" />
                            <x-text-input id="author" name="author" type="text" class="mt-1 block w-full" :value="old('author', $book->author)" required autofocus autocomplete="author" />
                            <x-input-error class="mt-2" :messages="$errors->get('author')" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="publisher" :value="__('Penerbit')" />
                            <x-text-input id="publisher" name="publisher" type="text" class="mt-1 block w-full" :value="old('publisher', $book->publisher)" required autofocus autocomplete="publisher" />
                            <x-input-error class="mt-2" :messages="$errors->get('publisher')" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="publication_year" :value="__('Tahun Terbit')" />
                            <x-text-input id="publication_year" name="publication_year" type="text" class="mt-1 block w-full" :value="old('publication_year', $book->publication_year)" required autofocus autocomplete="publication_year" />
                            <x-input-error class="mt-2" :messages="$errors->get('publication_year')" />
                        </div >
                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Status')" />
                            <x-text-input id="status" name="status" type="text" class="mt-1 block w-full" :value="old('status', $book->status)" required autofocus autocomplete="status" />
                            <x-input-error class="mt-2" :messages="$errors->get('status')" />
                        </div>   
                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Deskripsi')" />
                            <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" :value="old('description', $book->description)" required autofocus autocomplete="description" />
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>  
                        
                        <x-primary-button class="mt-6">
                            {{ __('Update') }}
                        </x-primary-button>
                    </form>
               
                </div>
            </div>

            </div>
        </div>
    </div>
</x-app-layout>


