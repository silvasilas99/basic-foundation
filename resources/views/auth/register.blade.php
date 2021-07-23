<x-guest-layout>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}

    <body class="bg-white">
        <!-- url('/img/hero-pattern.svg') -->
        <div class="flex min-h-screen bg-white">

            <div class="w-1/2 bg-cover md:block hidden" style="background-image:  url(https://imgur.com/zLw8Fem.png)"></div>
            <!-- <div class="bg-no-repeat bg-right bg-cover max-w-max max-h-8 h-12 overflow-hidden">
                <img src="log_in.webp" alt="hey">
            </div> -->


            <div class="md:w-1/2 max-w-lg mx-auto my-24 px-4 py-5 shadow-none">

                <div class="text-left p-0 font-sans">
                    <h1 class=" text-gray-800 text-3xl font-medium">Come to us, create your account</h1>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mt-5">
                        <label for="name" class="sc-bqyKva ePvcBv">Name</label>
                        <input type="text" id="name" name="name" :value="old('name')" autocomplete="name" class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent" placeholder="Your complete name" required>
                    </div>
                    <div class="mt-5">
                        <label for="email" class="sc-bqyKva ePvcBv">Email</label>
                        <input type="email" id="email" name="email" :value="old('email')" autocomplete="email" class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent" placeholder="example@mail.com" required>
                    </div>
                    <div class="mt-5">
                        <label for="password" class="sc-bqyKva ePvcBv">Password</label>
                        <input type="password" id="password" name="password" autocomplete="new-password" class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent " placeholder="Your new password" required>
                    </div>
                    <div class="mt-5">
                        <label for="password_confirmation" class="sc-bqyKva ePvcBv">Confirm password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="block w-full p-2 border rounded border-gray-300 focus:outline-none focus:ring-1 focus:ring-gray-400 focus:border-transparent" placeholder="New password confirmation" required>
                    </div>

                    <div class="mt-10">
                        <input type="submit" value="Sign up" class="py-3 bg-purple-500 text-white w-full rounded hover:bg-purple-700">
                    </div>
                </form>
                <a class="" href="{{ route('login') }}" data-test="Link"><span class="block  p-5 text-center text-gray-800  text-xs ">Already have an account?</span></a>
            </div>
        </div>
    </body>


</x-guest-layout>
