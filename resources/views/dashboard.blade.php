<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            @include('components.alert')

            <h2>{{ __('user.add_post.heading') }}</h2>

            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="post" action="{{ route('post.save') }}">
                        @csrf
                        <div class="form-group">
                            <label for="title">{{ __('user.add_post.title') }}</label>
                            <input type="text" class="form-control" id="title" name="title" minlength="3" maxlength="50" required>
                        </div>
                        <div class="form-group">
                            <label for="editor">{{ __('user.add_post.content') }}</label>
                            <textarea class="form-control" name="content" id="editor">
                                <p>{{ __('user.add_post.example') }}</p>
                            </textarea>
                        </div>
                        <button type="submit" value="Submit" class="btn btn-primary">{{ __('user.add_post.submit') }}</button>
                    </form>

                </div>
            </div>

            <br>

            <h2>{{ __('user.posts.last_three') }}</h2>

            @if(!$posts->isEmpty())
                @foreach ($posts as $post)

                    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h2>{{ $post->title }}</h2>
                            <br>
                            <div>
                                {!! $post->content !!}
                            </div>
                        </div>
                    </div>
                    <br>

                @endforeach
            @else
                {{ __('user.posts.no_posts') }}
            @endif
            
        </div>
    </div>

        <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ), {
                    toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList' ],
                } )
                .catch( error => {
                    console.error( error );
                } );
        </script>

</x-app-layout>
