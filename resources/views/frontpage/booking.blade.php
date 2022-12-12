<x-home-layout>
    <div class="flex flex-row flex-wrap container mx-auto bg-white">
        <!-- product-detail -->
        <div class="w-full md:w-9/12 sm:w-9/12 bg-white">
            <div class="bg-white">
                <div class="pt-6">
                    <!-- Image gallery -->
                    <div class="mx-auto mt-6 sm:px-6 aspect-video">
                        <div class="h-full w-full">
                            <img src="{{ asset('images/bg-banner.jpeg') }}"
                                alt="Two each of gray, white, and black shirts laying flat." class="h-full w-full" />
                        </div>
                        <div class="flex flex-row space-x-2">
                            <div class="my-2">
                                <img src="{{ asset('images/bg-banner.jpeg') }}"
                                    alt="Two each of gray, white, and black shirts laying flat."
                                    class="h-full w-full" />
                            </div>
                            <div class="my-2">
                                <img src="{{ asset('images/bg-banner.jpeg') }}"
                                    alt="Two each of gray, white, and black shirts laying flat."
                                    class="h-full w-full" />
                            </div>
                            <div class="my-2">
                                <img src="{{ asset('images/bg-banner.jpeg') }}"
                                    alt="Two each of gray, white, and black shirts laying flat."
                                    class="h-full w-full" />
                            </div>
                            <div class="my-2">
                                <img src="{{ asset('images/bg-banner.jpeg') }}"
                                    alt="Two each of gray, white, and black shirts laying flat."
                                    class="h-full w-full" />
                            </div>
                        </div>
                    </div>

                    <!-- Product info -->
                    <div
                        class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
                        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                            <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Nusa Penida Full Day
                                Trip</h1>
                        </div>

                        <!-- Options -->
                        <div class="mt-4 lg:row-span-3 lg:mt-0">
                            <p class="text-3xl tracking-tight text-gray-900">Rp. 750.000</p>

                            <!-- Reviews -->
                            <div class="mt-6">
                                <div class="flex items-center">
                                    <div class="flex items-center">
                                        <i class="fa-solid fa-star text-yellow-500"></i>
                                        <i class="fa-solid fa-star text-yellow-500"></i>
                                        <i class="fa-solid fa-star text-yellow-500"></i>
                                        <i class="fa-solid fa-star text-yellow-500"></i>
                                        <i class="fa-regular fa-star text-yellow-500"></i>

                                        <!-- Heroicon name: mini/star -->
                                    </div>
                                    <p class="sr-only">4 out of 5 stars</p>
                                    <a href="#"
                                        class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117
                                        reviews</a>
                                </div>
                            </div>

                            <form class="mt-10">
                                <!-- Sizes -->
                                <div class="mt-10">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-sm font-medium text-gray-900">Select Driver</h3>
                                    </div>

                                    <fieldset class="mt-4">
                                        <legend class="sr-only">Choose a size</legend>
                                        <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                                            <!-- Active: "ring-2 ring-indigo-500" -->
                                            <label
                                                class="group relative rounded-md flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                                <input type="radio" name="size-choice" value="XS" class="sr-only"
                                                    aria-labelledby="size-choice-1-label" />
                                                <img src="{{ asset('images/avatar.jpeg') }}" alt=""
                                                    class="rounded-full border-5 border-solid border-4 border-purple-400 shadow-xl" />
                                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                                    aria-hidden="true"></span>
                                            </label>
                                            <label
                                                class="group relative rounded-md flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                                <input type="radio" name="size-choice" value="XS" class="sr-only"
                                                    aria-labelledby="size-choice-1-label" />
                                                <img src="{{ asset('images/avatar.jpeg') }}" alt=""
                                                    class="rounded-full" />
                                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                                    aria-hidden="true"></span>
                                            </label>
                                            <label
                                                class="group relative rounded-md flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                                <input type="radio" name="size-choice" value="XS" class="sr-only"
                                                    aria-labelledby="size-choice-1-label" />
                                                <img src="{{ asset('images/avatar.jpeg') }}" alt=""
                                                    class="rounded-full" />
                                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                                    aria-hidden="true"></span>
                                            </label>
                                            <label
                                                class="group relative rounded-md flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                                <input type="radio" name="size-choice" value="XS" class="sr-only"
                                                    aria-labelledby="size-choice-1-label" />
                                                <img src="{{ asset('images/avatar.jpeg') }}" alt=""
                                                    class="rounded-full" />
                                                <span class="pointer-events-none absolute -inset-px rounded-md"
                                                    aria-hidden="true"></span>
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>

                                <button type="submit"
                                    class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add
                                    to cart</button>
                            </form>
                        </div>

                        <div
                            class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pb-16 lg:pr-8">
                            <!-- Description and details -->
                            <div>
                                <h3 class="sr-only">Description</h3>

                                <div class="space-y-6">
                                    <p class="text-base text-gray-900">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Esse reprehenderit magni obcaecati vero amet, ullam aliquam
                                        aliquid placeat harum consequatur voluptates velit iure, quibusdam reiciendis
                                        ipsum provident ratione accusamus eveniet.</p>
                                </div>
                            </div>

                            <div class="mt-10">
                                <h3 class="text-sm font-medium text-gray-900">Service</h3>

                                <div class="mt-4">
                                    <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                        <li class="text-gray-400"><span class="text-gray-600">Transport</span></li>

                                        <li class="text-gray-400"><span class="text-gray-600">Hotel</span></li>

                                        <li class="text-gray-400"><span class="text-gray-600">Dinner</span></li>

                                        <li class="text-gray-400"><span class="text-gray-600">24 Hours Trip</span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="mt-10">
                                <h2 class="text-sm font-medium text-gray-900">Details</h2>

                                <div class="mt-4 space-y-6">
                                    <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Quis, illum error totam a maxime nostrum voluptatibus vero reprehenderit!
                                        Enim tempora consectetur perspiciatis excepturi. Laborum quibusdam vitae sint
                                        in, a corrupti?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./product-detail -->
        <div class="w-full md:mt-16 md:w-3/12 sm:w-3/12">
            <div class="bg-white">
                <div class="border border-gray-200 p-4 rounded bg-white">
                    <h4 class="text-gray-800 text-lg font-medium uppercase">order summary</h4>
                    <div class="mt-4">
                        <div class="flow-root">
                            <ul role="list" class="py-6 divide-y divide-gray-200">
                                <li class="flex">
                                    <div class="ml-4 flex flex-1 flex-col">
                                        <div>
                                            <div class="flex justify-between text-base font-medium text-gray-900">
                                                <h3>
                                                    <a href="#">Nusa Penida Full Day Trip</a>
                                                </h3>
                                                <p class="ml-4">Rp. 750.000</p>
                                            </div>
                                            <p class="mt-1 text-sm text-gray-500">Bayu Danu</p>
                                        </div>
                                        <div class="flex flex-1 items-end justify-between text-sm">
                                            <div class="flex">
                                                <button type="button"
                                                    class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 py-6 px-4 sm:px-4">
                        <div class="flex justify-between text-base font-medium text-gray-900">
                            <p>Total</p>
                            <p>Rp. 750.000</p>
                        </div>

                        <div class="mt-6">
                            <a href="#"
                                class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Order
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-home-layout>
