<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{route('post.save'/*, ['_token' => csrf_token() ]*/)}}">
                        @csrf
                        <textarea name="content" id="editor">
                            <p>This is some sample content.</p>
                        </textarea>
                        <p><input type="submit" value="Submit"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ), {
                    toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                } )
                .catch( error => {
                    console.error( error );
                } );
        </script>

</x-app-layout>
