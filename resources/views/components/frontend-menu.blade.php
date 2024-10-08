<nav x-data="{ open: false }" class="bg-white border-gray-200 dark:bg-gray-900 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <svg
          width="44"
          height="44"
          viewBox="0 0 512 512"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <defs>
            <linearGradient
              gradientTransform="rotate(150, 0.5, 0.5)"
              x1="50%"
              y1="0%"
              x2="50%"
              y2="100%"
              id="ffflux-gradient"
            >
              <stop
                stop-color="hsl(315, 100%, 72%)"
                stop-opacity="1"
                offset="0%"
              ></stop>
              <stop
                stop-color="hsl(227, 100%, 50%)"
                stop-opacity="1"
                offset="100%"
              ></stop>
            </linearGradient>
            <linearGradient
              gradientTransform="rotate(150, 0.5, 0.5)"
              x1="50%"
              y1="0%"
              x2="50%"
              y2="100%"
              id="ffflux-gradient2"
            >
              <stop
                stop-color="hsl(0, 0%, 0%)"
                stop-opacity="1"
                offset="0%"
              ></stop>
              <stop
                stop-color="hsl(0, 0%, 24%)"
                stop-opacity="1"
                offset="100%"
              ></stop>
            </linearGradient>
          </defs>
          <path
            d="M256 512C397.385 512 512 397.385 512 256C512 114.615 397.385 0 256 0C114.615 0 0 114.615 0 256C0 397.385 114.615 512 256 512Z"
            fill="url(#ffflux-gradient)"
          />
          <path
            d="M236 237.44H277.92C278.56 214.88 280.32 202.24 300.96 184.8C312.64 175.04 327.2 171.36 341.6 170.88V278.72C341.6 369.12 267.68 443.04 177.28 443.04C174.88 443.04 172.64 443.04 170.4 442.88V382.88C170.4 382.88 199.52 380.64 226.88 364.48C248.32 352 268.64 330.08 273.44 299.36C274.741 290.488 275.755 281.577 276.48 272.64H234.72C233.44 304.96 229.92 324.16 195.2 337.6C186.4 340.96 178.08 343.04 170.4 344V233.28C170.4 142.88 244.32 68.96 334.72 68.96C337.12 68.96 339.36 68.96 341.6 69.12V130.4C341.6 130.4 308.64 131.68 279.68 149.92C260 162.24 241.92 183.68 238.24 212.64C237.12 221.44 236.48 229.76 236 237.44Z"
            fill="url(#ffflux-gradient2)"
          />
        </svg>
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
          HipStaff
        </span>
      </a>
  
      <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        @if (Route::has('login')) @auth
        <a
          href="{{ url('/dashboard') }}"
          type="button"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          Dashboard
        </a>
        @else
        <a
          href="{{ url('/login') }}"
          type="button"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
          Login
        </a>
        @endauth @endif
        <!-- Hamburger -->
        <div class="-me-2 flex items-center md:hidden">
            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

      </div>
      <div :class="{'block': open, 'hidden': ! open}" class="hidden items-center justify-between w-full md:flex md:w-auto md:order-1">
        <ul class="nav flex flex-col md:flex-row justify-center mt-4 md:mt-0 bg-gray-800 dark:bg-gray-900">
          <li>
            <a href="/" class="block py-2 px-3 text-white" aria-current="page">
              {{ __('Home') }}
            </a>
          </li>
        </ul>
      </div>
    </div>
</nav>  