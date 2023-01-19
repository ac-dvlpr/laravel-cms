<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2>{{ __('admin.posts.heading') }}</h2>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if(!$posts->isEmpty())
                        @foreach ($posts as $post)

                            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                                <div class="p-6 bg-white border-b border-gray-200">
                                    <table>
                                        <tr>
                                            <td> <small>{{ $post->name }}</small> </td>
                                            <td> <small>{{$post->created_at }}</small> </td>
                                        </tr>
                                    </table>

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
        </div>
    </div>
</x-app-layout>
