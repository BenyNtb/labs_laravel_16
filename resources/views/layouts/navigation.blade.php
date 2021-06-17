<!-- component -->
<div class="flex min-h-screen">
    <nav class="w-64 flex-shrink-0">
        <div class="flex-auto bg-gray-900 h-full">
            <div class="flex flex-col overflow-y-auto">
                <ul class="relative m-0 p-0 list-none h-full">
                    <li
                        class="text-white text-2xl p-4 w-full flex relative shadow-sm justify-start bg-gray-800 border-b-2 border-gray-700">
                        <img class="" src="{{asset('img/logo.png')}}" alt="">
                    </li>

                    <li
                        class="text-white p-4 w-full flex relative shadow-sm justify-start bg-gray-800 border-b-2 border-gray-700">
                        <div class="mr-4 flex-shrink-0 my-auto">
                            <svg class="fill-current w-5 h-5" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                            </svg>
                        </div>
                        <div class="flex-auto my-1">
                            <a href="{{ route('dashboard') }}">
                                <span>Dashboard</span>
                            </a>
                        </div>
                    </li>
                    @Webmaster
                    <li class="p-4 w-full flex relative shadow-sm">
                        <div class="flex-auto my-1">
                            <span class="text-white font-medium">Accueil</span>
                        </div>
                    </li>

                    <div class="text-blue-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                        <div class="mr-4 my-auto">
                            <svg class="fill-current h-5 w-5" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex-auto my-1">
                            <a href="{{ route('user.index') }}">
                                <span>Users</span>
                            </a>
                        </div>
                    </div>

                    <div class="text-gray-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                        <div class="mr-4 my-auto">
                            <svg class="fill-current h-5 w-5" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M19 13H5c-1.1 0-2 .9-2 2v4c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-4c0-1.1-.9-2-2-2zM7 19c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zM19 3H5c-1.1 0-2 .9-2 2v4c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM7 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex-auto my-1">
                                <span>Home
                                    <li class="ml-14">
                                        <a class="text-gray-100 hover:text-black hover:font-bold"
                                            href="{{ route('homecard.index') }}">Cards
                                    </li>
                                    <li class="ml-14">
                                        <a class="text-gray-100 hover:text-black hover:font-bold"
                                            href="{{ route('homediscover.index') }}">Discover
                                    </li>
                                    <li class="ml-14">
                                        <a class="text-gray-100 hover:text-black hover:font-bold"
                                            href="{{ route('video.index') }}">Video
                                    </li>
                                     <li class="ml-14">
                                        <a class="text-gray-100 hover:text-black hover:font-bold"
                                            href="{{ route('titre.index') }}">Titres
                                    </li>
                                    <li class="ml-14">
                                        <a class="text-gray-100 hover:text-black hover:font-bold"
                                            href="{{ route('testimonials.index') }}">Testimonials
                                    </li>
                                </span>

                            </a>

                        </div>
                        @endWebmaster
                    </div>

                    <div class="text-gray-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                        <div class="mr-4 my-auto">
                            <svg class="fill-current h-5 w-5" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M21 3H3C2 3 1 4 1 5v14c0 1.1.9 2 2 2h18c1 0 2-1 2-2V5c0-1-1-2-2-2zM5 17l3.5-4.5 2.5 3.01L14.5 11l4.5 6H5z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex-auto my-1">
                            <a href="{{ route('service.index') }}">
                                <span>Services</span>
                            </a>
                        
                        </div>
                    </div>

                    <div class="text-gray-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                        <div class="mr-4 my-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z"/></svg>
                        </div>
                        <div class="flex-auto my-1">
                            <a href="{{route('blog.index')}}">
                                <span>Blog</span>
                            </a>
                        </div>
                    </div>

                    <div class="text-gray-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10.01 21.01c0 1.1.89 1.99 1.99 1.99s1.99-.89 1.99-1.99h-3.98zm8.87-4.19V11c0-3.25-2.25-5.97-5.29-6.69v-.72C13.59 2.71 12.88 2 12 2s-1.59.71-1.59 1.59v.72C7.37 5.03 5.12 7.75 5.12 11v5.82L3 18.94V20h18v-1.06l-2.12-2.12zM16 13.01h-3v3h-2v-3H8V11h3V8h2v3h3v2.01z"/></svg>
                        <div class="flex-auto my-1">
                            <a href="{{ route('newsletter.index') }}">
                                <span>Newsletter</span>
                            </a>
                        
                        </div>
                    </div>

                    <div class="text-gray-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                        <div class="mr-4 my-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M22 3H2C.9 3 0 3.9 0 5v14c0 1.1.9 2 2 2h20c1.1 0 1.99-.9 1.99-2L24 5c0-1.1-.9-2-2-2zM8 6c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H2v-1c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1zm3.85-4h1.64L21 16l-1.99 1.99c-1.31-.98-2.28-2.38-2.73-3.99-.18-.64-.28-1.31-.28-2s.1-1.36.28-2c.45-1.62 1.42-3.01 2.73-3.99L21 8l-1.51 2h-1.64c-.22.63-.35 1.3-.35 2s.13 1.37.35 2z"/></svg>
                        </div>
                        <div class="flex-auto my-1">
                            <a href="{{ route('contact.index') }}">
                                <span>Contact</span>
                            </a>
                        </div>
                    </div>
                    <div class="text-gray-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                        <div class="mr-4 my-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/></svg>
                        </div>
                        <div class="flex-auto my-1">
                            <a href="{{ route('validate.index') }}">
                                <span>Validation</span>
                            </a>
                        </div>
                    </div>
                    <div class="text-gray-400 flex relative px-4 hover:bg-gray-700 cursor-pointer">
                        <div class="mr-4 my-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                            </svg>
                        </div>
                        <div class="flex-auto my-1">
                            <a href="{{ route('trash.index') }}">
                                <span>Corbeille</span>
                            </a>
                        
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <div class="flex flex-col w-full">
        <header class="text-white bg-blue-400 sticky left-auto top-0 right-0">
            <div class="h-12 px-6 flex relative items-center justify-end">
                <button class="flex mx-4 text-white hover:text-gray-200 focus:outline-none">
                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </button>

                <button class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                    <img class="h-full w-full object-cover" src="{{ asset(Auth::user()->img) }}" alt="Avatar">
                </button>
                <span class="font-semibold text-white">{{ Auth::user()->nom }} {{ Auth::user()->email }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-3 rounded">Logout</button>

                </form>
            </div>
        </header>

        <div class="text-white bg-blue-400 flex flex-shrink-0 flex-col">
            <div class="flex relative items-center p-4 h-12">
                <span class="text-2xl tracking-wide">Users</span>
            </div>
        </div>

        <div class="text-white bg-blue-400 flex w-full">
            <div class="flex overflow-hidden h-12 ml-2">
                <button class="mx-3 border-b-2 border-white">
                    <span>Profil</span>
                </button>

                <button class="mx-3 hover:border-b-2 border-white">
                    <span>Utilisateurs inscrit</span>
                </button>

                <button class="mx-3 hover:border-b-2 border-white">
                    <a href="{{ route('user.index') }}">
                        <span>Rôles</span>
                    </a>
                </button>

                <button class="mx-3 hover:border-b-2 border-white">
                    <span>Usage</span>
                </button>
            </div>
        </div>
    </div>
</div>
