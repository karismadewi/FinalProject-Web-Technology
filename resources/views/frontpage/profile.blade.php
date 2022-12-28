<x-home-layout>
    <div class="container pt-10 mx-auto">
        <div class="flex flex-row flex-wrap">
            <aside class="sticky top-0 w-4/12 h-screen">
                <!-- card -->
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-md ">
                    <div class="flex justify-end px-4 pt-4">
                        <button id="dropdownButton" data-dropdown-toggle="dropdown"
                            class="inline-block text-gray-500 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                            type="button">
                            <span class="sr-only">Open dropdown</span>
                            <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                                </path>
                                <path
                                    d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z">
                                </path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow w-44">
                            <ul class="py-1" aria-labelledby="dropdownButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Edit</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Export
                                        Data</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 ">Delete</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex flex-col items-center pb-4">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="./images/avatar.jpeg"
                            alt="Bonnie image" />
                        <h5 class="mb-1 text-xl font-medium text-gray-900 ">Bonnie Green</h5>
                        <p class="text-sm font-normal text-center text-gray-500"><span
                                class="font-bold text-teal-700 tex-medium">"</span> Let explore Bali together with me as
                            your guide <span class="font-bold text-teal-700 tex-medium">"</span></p>
                        <div>
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-regular fa-star"></i>


                            <!-- Heroicon name: mini/star -->
                        </div>
                        <div class="flex mt-4 space-x-3 md:mt-6">
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-teal-600 rounded-lg hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Contact
                                Me
                            </a>
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>
                        </div>
                    </div>

                    <div class="max-w-sm pt-3 pb-6 pl-8 pr-6">
                        <hr / class=" border-slate-200">

                        <p class="pt-4 mb-2 "><i class="pr-3 fa-solid fa-location-dot"></i>I live in <span
                                class="text-base font-bold text-teal-700">Denpasar</span></p>
                        <p class="mb-2"><i class="pr-2 fa-solid fa-earth-americas"></i>I speak <span
                                class="text-base font-bold text-teal-700">English, Mandarin, Franch</span></p>
                        <p class="mb-2"><i class="pr-2 fa-solid fa-circle-check"></i>Verified <span
                                class="text-base font-bold text-teal-700">Native Host</span></p>




                    </div>
                    <!-- end card -->
                    <!-- start card packages -->
            </aside>
            <main class="flex flex-wrap w-8/12 gap-7">
                <div
                    class="max-w-sm mb-5 bg-white border border-gray-200 rounded-lg shadow-md ">
                    <a href="#">
                        <img class="rounded-t-lg" src="./images/bg-banner.jpeg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-0 text-lg font-bold tracking-tight text-gray-600 dark:text-white font-mon">
                                <span>City Escape :</span> <span>Explore North Bali Trip</span> </h5>
                        </a>
                        <!-- name of guide -->
                        <p class="text-base font-semibold text-teal-600">Bonnie Green</p>
                        <div class="text-xs">
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-regular fa-star"></i>
                            <!-- Heroicon name: mini/star -->
                        </div>
                        <div class="mt-5 text-right">
                            <p class="text-2xl font-bold font-mon">IDR <span>750000</span></p>
                            <p class="text-base font-semibold text-slate-600"><i
                                    class="text-sm text-yellow-500 fa-solid fa-tag "></i> Sold
                                out <span>3k++</span></p>
                            <p class="text-base text-bold"><a href="#"
                                    class="ml-1 text-sm font-bold text-teal-600 hover:text-teal-500">2.1k
                                    reviews</a></p>
                        </div>
                    </div>
                </div>
                <div
                    class="max-w-sm mb-5 bg-white border border-gray-200 rounded-lg shadow-md ">
                    <a href="#">
                        <img class="rounded-t-lg" src="./images/bg-banner.jpeg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-0 text-lg font-bold tracking-tight text-gray-600 dark:text-white font-mon">
                                <span>City Escape :</span> <span>Explore North Bali Trip</span> </h5>
                        </a>
                        <!-- name of guide -->
                        <p class="text-base font-semibold text-teal-600">Bonnie Green</p>
                        <div class="text-xs">
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-regular fa-star"></i>
                            <!-- Heroicon name: mini/star -->
                        </div>
                        <div class="mt-5 text-right">
                            <p class="text-2xl font-bold font-mon">IDR <span>750000</span></p>
                            <p class="text-base font-semibold text-slate-600"><i
                                    class="text-sm text-yellow-500 fa-solid fa-tag "></i> Sold
                                out <span>3k++</span></p>
                            <p class="text-base text-bold"><a href="#"
                                    class="ml-1 text-sm font-bold text-teal-600 hover:text-teal-500">2.1k
                                    reviews</a></p>
                        </div>
                    </div>
                </div>
                <div
                    class="max-w-sm mb-5 bg-white border border-gray-200 rounded-lg shadow-md ">
                    <a href="#">
                        <img class="rounded-t-lg" src="./images/bg-banner.jpeg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-0 text-lg font-bold tracking-tight text-gray-600 dark:text-white font-mon">
                                <span>City Escape :</span> <span>Explore North Bali Trip</span> </h5>
                        </a>
                        <!-- name of guide -->
                        <p class="text-base font-semibold text-teal-600">Bonnie Green</p>
                        <div class="text-xs">
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-regular fa-star"></i>
                            <!-- Heroicon name: mini/star -->
                        </div>
                        <div class="mt-5 text-right">
                            <p class="text-2xl font-bold font-mon">IDR <span>750000</span></p>
                            <p class="text-base font-semibold text-slate-600"><i
                                    class="text-sm text-yellow-500 fa-solid fa-tag "></i> Sold
                                out <span>3k++</span></p>
                            <p class="text-base text-bold"><a href="#"
                                    class="ml-1 text-sm font-bold text-teal-600 hover:text-teal-500">2.1k
                                    reviews</a></p>
                        </div>
                    </div>
                </div>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md mb-7 ">
                    <a href="#">
                        <img class="rounded-t-lg" src="./images/bg-banner.jpeg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-0 text-lg font-bold tracking-tight text-gray-600 dark:text-white font-mon">
                                <span>City Escape :</span> <span>Explore North Bali Trip</span> </h5>
                        </a>
                        <!-- name of guide -->
                        <p class="text-base font-semibold text-teal-600">Bonnie Green</p>
                        <div class="text-xs">
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-solid fa-star"></i>
                            <i class="text-yellow-500 fa-regular fa-star"></i>
                            <!-- Heroicon name: mini/star -->
                        </div>
                        <div class="mt-5 text-right">
                            <p class="text-2xl font-bold font-mon">IDR <span>750000</span></p>
                            <p class="text-base font-semibold text-slate-600"><i
                                    class="text-sm text-yellow-500 fa-solid fa-tag "></i> Sold
                                out <span>3k++</span></p>
                            <p class="text-base text-bold"><a href="#"
                                    class="ml-1 text-sm font-bold text-teal-600 hover:text-teal-500">2.1k
                                    reviews</a></p>
                        </div>
                    </div>
                </div>
                <!-- comment and review -->
                <div>
                    <h2 class="text-2xl font-bold text-slate-600 mb-7">Reviews</h2>
                    <div class="p-8 mb-6 mr-12 text-base bg-white border rounded-lg ">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center">
                                <p class="inline-flex items-center mr-3 text-base text-gray-900 "><img
                                        class="w-10 h-10 mr-2 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                        alt="Michael Gough">Michael Gough</p>
                                <p class="text-sm text-gray-600"><time pubdate datetime="2022-02-08"
                                        title="February 8th, 2022">Feb. 8, 2022</time></p>
                            </div>
                            <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:focus:ring-gray-600"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                    </path>
                                </svg>
                                <span class="sr-only">Comment settings</span>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownComment1"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-36 ">
                                <ul class="py-1 text-sm text-gray-700 "
                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:text-white">Edit</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:text-white">Remove</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:text-white">Report</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p class="text-gray-500">Very straight-to-point article. Really worth time
                            reading. Thank you! But tools are just the
                            instruments for the UX designers. The knowledge of the design tools are as important as the
                            creation of the design strategy.</p>
                    </div>
                    <div class="p-8 mb-6 mr-12 text-base bg-white border rounded-lg ">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center">
                                <p class="inline-flex items-center mr-3 text-base text-gray-900 "><img
                                        class="w-10 h-10 mr-2 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                        alt="Michael Gough">Michael Gough</p>
                                <p class="text-sm text-gray-600"><time pubdate datetime="2022-02-08"
                                        title="February 8th, 2022">Feb. 8, 2022</time></p>
                            </div>
                            <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:focus:ring-gray-600"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                    </path>
                                </svg>
                                <span class="sr-only">Comment settings</span>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownComment1"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-36 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:text-white">Edit</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:text-white">Remove</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:text-white">Report</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p class="text-gray-500">Very straight-to-point article. Really worth time
                            reading. Thank you! But tools are just the
                            instruments for the UX designers. The knowledge of the design tools are as important as the
                            creation of the design strategy.</p>
                    </div>
                </div>

                <!-- end comment and review -->
            </main>



        </div>
    </div>
</x-home-layout>
