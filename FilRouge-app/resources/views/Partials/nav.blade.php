@include('Partials.layout')
<div class="pt-5 w-full text-xs flex justify-around items-center">
    <div class="flex">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
             xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
             viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                  d="M8.64 4.737A7.97 7.97 0 0 1 12 4a7.997 7.997 0 0 1 6.933 4.006h-.738c-.65 0-1.177.25-1.177.9 0 .33 0 2.04-2.026 2.008-1.972 0-1.972-1.732-1.972-2.008 0-1.429-.787-1.65-1.752-1.923-.374-.105-.774-.218-1.166-.411-1.004-.497-1.347-1.183-1.461-1.835ZM6 4a10.06 10.06 0 0 0-2.812 3.27A9.956 9.956 0 0 0 2 12c0 5.289 4.106 9.619 9.304 9.976l.054.004a10.12 10.12 0 0 0 1.155.007h.002a10.024 10.024 0 0 0 1.5-.19 9.925 9.925 0 0 0 2.259-.754 10.041 10.041 0 0 0 4.987-5.263A9.917 9.917 0 0 0 22 12a10.025 10.025 0 0 0-.315-2.5A10.001 10.001 0 0 0 12 2a9.964 9.964 0 0 0-6 2Zm13.372 11.113a2.575 2.575 0 0 0-.75-.112h-.217A3.405 3.405 0 0 0 15 18.405v1.014a8.027 8.027 0 0 0 4.372-4.307ZM12.114 20H12A8 8 0 0 1 5.1 7.95c.95.541 1.421 1.537 1.835 2.415.209.441.403.853.637 1.162.54.712 1.063 1.019 1.591 1.328.52.305 1.047.613 1.6 1.316 1.44 1.825 1.419 4.366 1.35 5.828Z"
                  clip-rule="evenodd"/>
        </svg>
        <p class="ml-3 pt-1 text-gray-800 font-serif">Worldwide shipping</p>
    </div>
    <a href="/"><img class="pr-28" src="{{ asset('./assets/images/Logo.png') }}" alt="logo"></a>
    @guest
        <a href="/login" class=" pt-2 h-10 focus:outline-none text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5">
            login
        </a>
    @endguest
    @auth()
    <div>
        <a href="/Cart">
            <div class="flex flex-row-reverse ml-2 w-full">
                <div slot="icon" class="relative">
                    <div
                        class="absolute text-xs rounded-full -mt-1 -mr-2 px-1 font-bold top-0 right-0 bg-red-700 text-white cart-count">
                        {{getCartCount()}}
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-shopping-cart w-6 h-6 mt-2">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                </div>
            </div>
        </a>
    </div>
    @endauth
</div>

<nav id="bar" class="flex justify-center ">
    <div class="sm:mb-0 self-center">
        <a href="/" class="text-md no-underline text-gray-800 hover:text-green-800 ml-2 px-1">Home</a>
        <a href="/All_products" class="text-md no-underline text-gray-800 hover:text-green-800 ml-2 px-1">Products</a>
        <a href="/Blog" class="text-md no-underline text-gray-800 hover:text-green-800 ml-2 px-1">Blogs</a>
        <a href="/Contact" class="text-md no-underline text-gray-800 hover:text-green-800 ml-2 px-1">Contact Us</a>
        <a href="/FAQ" class="text-md no-underline text-gray-800 hover:text-green-800 ml-2 px-1">FAQ</a>
        <a href="/About" class="text-md no-underline text-gray-800 hover:text-green-800 ml-2 px-1">About</a>
    </div>
</nav>
</div>


