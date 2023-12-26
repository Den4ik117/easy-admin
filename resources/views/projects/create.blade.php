<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Project Information') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __("Create your project.") }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('projects.store') }}" class="mt-6 space-y-6">
                            @csrf

                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="name" :value="__('Description')" />
                                <x-text-input id="name" name="description" type="text" class="mt-1 block w-full" :value="old('description')" required />
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />
                            </div>

                            <div>
                                <x-input-label for="about" :value="__('About')" />
                                <x-text-input id="about" name="about" type="text" class="mt-1 block w-full" :value="old('about')" required />
                                <x-input-error class="mt-2" :messages="$errors->get('about')" />
                            </div>

{{--                            <div>--}}
{{--                                <x-input-label for="email" :value="__('Email')" />--}}
{{--                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />--}}
{{--                                <x-input-error class="mt-2" :messages="$errors->get('email')" />--}}

{{--                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())--}}
{{--                                    <div>--}}
{{--                                        <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">--}}
{{--                                            {{ __('Your email address is unverified.') }}--}}

{{--                                            <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">--}}
{{--                                                {{ __('Click here to re-send the verification email.') }}--}}
{{--                                            </button>--}}
{{--                                        </p>--}}

{{--                                        @if (session('status') === 'verification-link-sent')--}}
{{--                                            <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">--}}
{{--                                                {{ __('A new verification link has been sent to your email address.') }}--}}
{{--                                            </p>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                @endif--}}
{{--                            </div>--}}

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>

                                @if (session('success'))
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600 dark:text-gray-400"
                                    >{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
