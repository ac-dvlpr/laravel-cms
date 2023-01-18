<x-guest-layout>

    <h1>{{ __('common.contact.contact') }}</h1>

    <form method="POST" action="{{ route('contact.send') }}">
        @csrf

        <div>
            <x-input-label for="name" :value="__('common.contact.name_surname')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('common.contact.email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="message" :value="__('common.contact.message')" />
            <textarea id="message" class="block mt-1 w-full" name="message" style="resize: none;" rows=10 required>{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
        </div>

        <div class="flex items-center mt-4">
            <x-primary-button>
                {{ __('common.contact.send') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
