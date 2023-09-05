<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="/">
        @csrf

        <div>
            <x-input-label for="message" :value="__('Your Question')" />
            <x-text-input id="message" class="block mt-1 w-full" type="text" name="message" required autofocus autocomplete="off" />
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('conversation.reset'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('conversation.reset') }}">
                    {{ __('Reset Conversation') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Send') }}
            </x-primary-button>
        </div>
    </form>

    @foreach($messages as $message)
        <div class="flex rounded-lg p-4 @if ($message['role'] === 'assistant') bg-green-200 flex-reverse @else bg-blue-200 @endif ">
            <div class="ml-4">
                <div class="text-lg">
                    @if ($message['role'] === 'assistant')
                        <a href="#" class="font-medium text-gray-900">ChatGPT Bot:</a>
                    @else
                        <a href="#" class="font-medium text-gray-900">You:</a>
                    @endif
                </div>
                <div class="mt-1">
                    <p class="text-gray-600">
                        {!! \Illuminate\Mail\Markdown::parse($message['content']) !!}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</x-guest-layout>
