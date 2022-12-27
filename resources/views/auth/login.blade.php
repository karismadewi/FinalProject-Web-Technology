<x-guest-layout>


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- component -->
<style>
    .bg-image {
      background-image: url(https://c4.wallpaperflare.com/wallpaper/179/915/685/photography-water-reflection-bali-wallpaper-preview.jpg);
    }
    .backdrop {
      backdrop-filter: blur(2px);
    }
  </style>

  <div class="flex items-center justify-center w-full h-screen bg-gradient-to-tr from-teal-500 to-white">
    <div class="z-10 flex flex-col items-center w-full mx-3 overflow-hidden bg-center bg-cover rounded shadow-md bg-white-600 bg-image sm:w-1/2 md:w-9/12 lg:w-1/2 md:mx-5 lg:mx-0 md:flex-row">
      <div class="flex flex-col items-center justify-center w-full bg-teal-600 bg-opacity-25 md:w-1/2 backdrop">
        <h1 class="my-2 text-3xl font-extrabold text-white md:text-4xl md:my-0">
          Guidy
        </h1>
        <p class="hidden mb-2 font-mono text-white md:block">
          Tourist Solution
        </p>
      </div>
      <div class="flex flex-col items-center w-full px-4 py-5 bg-teal-500 md:w-1/2 md:py-8">
        <h3 class="flex items-center mb-4 text-3xl font-bold text-white">
          LOGIN
        </h3>
        <form action="#" class="flex flex-col items-center justify-center w-full gap-3 px-3">
             <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />


          <x-text-input id="password" class="block w-full mt-1"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />

          <x-primary-button class="flex items-center justify-center px-3 py-1 text-white bg-teal-500 rounded hover:bg-teal-600 focus:outline-none focus:ring">
            <svg class="inline w-5 h-5"fill="none"stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
            </svg>
            <p class="ml-1 text-lg">
                {{ __('Log in') }}
            </p>
          </x-primary-button>
        </form>
        <p class="mt-2 text-sm text-gray-700">
          <a href="#" class="mt-3 font-bold text-white underline hover:text-white focus:outline-none">
            @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
          </a>
        </p>
      </div>
    </div>
  </div>
            </div>
        </form>
</x-guest-layout>
