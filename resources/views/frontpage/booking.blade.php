<x-home-layout>
    <div class="container flex flex-row flex-wrap mx-auto bg-white">
        <!-- product-detail -->
        <div class="w-full bg-white md:w-9/12 sm:w-9/12">
            <div class="bg-white">
                <div class="pt-6">
                    <!-- Image gallery -->
                    <div class="mx-auto mt-6 sm:px-6 aspect-video">
                        <div class="w-full h-full">
                            <img src="{{ asset('images/destinations/'.$packages->destination->dest_image) }}"
                                alt="Two each of gray, white, and black shirts laying flat." class="w-full h-full" />
                        </div>
                        <div class="flex flex-row space-x-2">
                            <div class="my-2">
                                <img src="{{ asset('images/destinations/'.$packages->destination->dest_image) }}"
                                    alt="Two each of gray, white, and black shirts laying flat."
                                    class="w-full h-full" />
                            </div>
                            <div class="my-2">
                                <img src="{{ asset('images/destinations/'.$packages->destination->dest_image) }}"
                                    alt="Two each of gray, white, and black shirts laying flat."
                                    class="w-full h-full" />
                            </div>
                            <div class="my-2">
                                <img src="{{ asset('images/destinations/'.$packages->destination->dest_image) }}"
                                    alt="Two each of gray, white, and black shirts laying flat."
                                    class="w-full h-full" />
                            </div>
                            <div class="my-2">
                                <img src="{{ asset('images/destinations/'.$packages->destination->dest_image) }}"
                                    alt="Two each of gray, white, and black shirts laying flat."
                                    class="w-full h-full" />
                            </div>
                        </div>
                    </div>

                    <!-- Product info -->
                    <div
                        class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
                        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                            <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{$packages->package_name}}</h1>
                            <h2 class="text-lg font-bold tracking-tight text-teal-700 sm:text-2xl">IDR
                                <span>{{$packages->price}}</span></h2>

                            <p class="my-1 text-base font-bold text-slate-600"><i
                                    class="text-yellow-500 fa-solid fa-bookmark"></i> Best Seller</p>
                        </div>


                        <!-- Options -->
                        <div class="mt-4 lg:row-span-3 lg:mt-0">
                            <div>
                                <p class="mb-2 text-3xl font-bold tracking-tight text-teal-700">{{$packages->tour_guide->tg_name}}</p>

                                <p><i class="fa-solid fa-globe"></i><span class="text-base font-bold"> Available
                                        Language
                                        <ul class="pl-4 mt-3 ml-4 space-y-2 text-sm font-semibold list-disc">
                                            <li>Mandarin</li>
                                            <li>Japanese</li>
                                            <li>Indonesia</li>
                                            <li>English</li>
                                        </ul>
                                        <!-- <p class="text-3xl tracking-tight text-gray-900">Rp. 750.000</p> -->
                            </div>
                            <!-- Reviews -->
                            <div class="mt-6">
                                <!-- <div class="flex items-center"> -->
                                <div>
                                    <i class="text-yellow-500 fa-solid fa-star"></i>
                                    <i class="text-yellow-500 fa-solid fa-star"></i>
                                    <i class="text-yellow-500 fa-solid fa-star"></i>
                                    <i class="text-yellow-500 fa-solid fa-star"></i>
                                    <i class="text-yellow-500 fa-regular fa-star"></i>


                                    <!-- Heroicon name: mini/star -->
                                </div>
                                <!-- <p class="font-light font-sm">4 out of 5 stars</p> -->
                                <div>
                                    <p class="my-4 font-semibold text-slate-600"><i
                                            class="text-yellow-500 fa-solid fa-tag"></i> Sold out {{$packages->sold}}</p><br>
                                    <p class="text-base font-bold text-right text-bold"><a href="#"
                                            class="ml-3 text-sm font-medium text-teal-600 hover:text-teal-500">2.1k
                                            reviews</a></p>
                                </div>
                                <!-- </div> -->
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
                                            @foreach ($tour_guides as $tour_guide)
                                            <label
                                                class="relative flex items-center justify-center text-sm font-medium text-gray-900 uppercase bg-white rounded-md shadow-sm cursor-pointer group hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                                <input type="radio" name="size-choice" value="XS" class="sr-only"
                                                    aria-labelledby="size-choice-1-label" />
                                                <img src="{{ asset('images/tour_guides/'.$tour_guide->tg_image) }}" alt=""
                                                    class="w-20 h-20 rounded-full shadow-xl rder-solid w-border-teal-600 border-5 border-3" />
                                                <span class="absolute rounded-md pointer-events-none -inset-px"
                                                    aria-hidden="true"></span>
                                            </label>
                                            @endforeach
                                        </div>
                                    </fieldset>
                                </div>

                                <button type="submit"
                                    class="flex items-center justify-center w-full px-8 py-3 mt-10 text-base font-medium text-white bg-teal-600 border border-transparent rounded-md hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2">Add
                                    to cart</button>
                            </form>
                        </div>

                        <div
                            class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pb-16 lg:pr-8">
                            <!-- Description and details -->
                            <div>
                                <h3 class="sr-only">Description</h3>

                                <div class="space-y-6">
                                    <p class="text-base text-gray-900">{{$packages->package_desc}}</p>
                                </div>
                            </div>

                            <div class="mt-10">
                                <h3 class="text-sm font-medium text-gray-900">Service</h3>

                                <div class="mt-4">
                                    <ul role="list" class="pl-4 space-y-2 text-sm list-disc">
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
                <div class="p-4 bg-white border border-gray-200 rounded">
                    <h4 class="mb-10 text-lg font-medium text-gray-800 uppercase">{{$packages->package_name}}</h4>
                    <div class="mt-4">
                        <div class="flow-root">
                            <p class="text-sm font-medium text-teal-600 font-mon">Pick the date :</p>
                            <input type="date" class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full pl-10 p-2.5">
                            <p class="mt-5 text-sm font-medium text-teal-600 font-mon">Pick the time :</p>
                            <input type="time" class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full pl-10 p-2.5">
                            <p class="mt-5 text-sm font-medium text-teal-600 font-mon">Adult :</p>
                            <input type="number" class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full pl-10 p-2.5" placeholder="amount">
                            <p class="mt-5 text-sm font-medium text-teal-600 font-mon">Child (0-10th) :</p>
                            <input type="number" class="bg-gray-50 border mt-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full pl-10 p-2.5" placeholder="amount">


                        </div>
                    </div>

                    <div class="px-4 py-6 border-t border-gray-200 sm:px-4">
                        <div class="flex justify-between text-base font-medium text-gray-900">
                            <p>Total</p>
                            <p class="text-lg font-extrabold"><span>IDR.</span> {{$packages->price}}</p>
                        </div>

                        <div class="mt-6">
                            <a href="history"
                                class="flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-teal-600 border border-transparent rounded-md shadow-sm hover:bg-teal-700">Order
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-home-layout>
