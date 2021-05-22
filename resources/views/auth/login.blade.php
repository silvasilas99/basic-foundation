<x-guest-layout>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <body class="font-mono bg-gray-400">
        <div class="container mx-auto">
            <div class="flex justify-center px-6 my-12">
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <div
                        class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
                        style="background-image: url('https://pm1.narvii.com/7080/b4d54d2da721fac0b8003109e2450e91f2921acer1-720-880v2_hq.jpg')"
                    ></div>
                    <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="pt-4 text-2xl text-center">Welcome Back!</h3>
                        <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                    E-mail
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border border-purple-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="email"
                                    name="email"
                                    type="email"
                                    :value="old('email')"
                                />
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                    Password
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border border-purple-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="password"
                                    name="password"
                                    type="password"
                                    autocomplete="current-password"
                                />
                            </div>
                            <div class="mb-4">
                                <label class="text-sm" for="checkbox_id">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <x-jet-validation-errors class="mb-4" />

                            <div class="mb-6 text-center">
                                <button
                                    class="w-full px-4 py-2 font-bold text-white bg-purple-500 rounded-full hover:bg-purple-700 focus:outline-none focus:shadow-outline"
                                    type="submit"
                                >
                                    Sign In
                                </button>
                            </div>
                            <hr class="mb-6 border-t" />
                            <div class="text-center">
                                <a
                                    class="inline-block text-sm text-purple-500 align-baseline hover:text-purple-800"
                                    href="{{ url('register') }}"
                                >
                                    Don't have an account? Create one
                                </a>
                            </div>
                            <div class="text-center">
                                <a
                                    class="inline-block text-sm text-purple-500 align-baseline hover:text-purple-800"
                                    href="{{ route('password.request') }}"
                                >
                                    Forgot Password?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-guest-layout>

