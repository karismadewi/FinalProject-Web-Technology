<x-home-layout>
  <!-- Banner -->
  <div class="w-full bg-center bg-cover" style="height: 75vh; background-image: url('{{ asset('images/bg-banner.jpeg') }}')">
    <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50">
      <div class="w-full">
        <div class="mb-8 text-center">
          <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl">Explore the wonderful Of Indonesia</h1>
          <p class="w-4/6 mx-auto mb-6 font-normal text-lxl text-slate-200 lg:text-2xl sm:px-16 xl:px-48">With Guidy, make your holiday enjoyable, magical, and memorable!</p>
        </div>
        <form class="w-1/2 mx-auto">
          <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 placeholder-gray-400 bg-white border border-gray-300 border-none rounded-lg" placeholder="Destination, Place ..." required />
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-teal-500 hover:bg-teal-600 font-medium rounded-lg text-sm px-4 py-2">Search</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End Banner -->

  <!-- Best Recommend -->
  <div class="py-20 bg-white">
    <div class="container mx-auto">
      <!-- Title -->
      <div class="my-4 text-center">
        <h1 class="text-3xl font-semibold text-center capitalize lg:text-4xl text-slate-700">best recommend</h1>
        <p class="max-w-2xl mx-auto my-4 text-lg text-center text-slate-600">Find your dream holiday and let our guide serve you with the best serve ever!</p>
        <hr class="w-2/12 mx-auto border-2 border-teal-500 rounded-lg" />
      </div>
      <!-- End Title -->

      <div class="flex flex-row flex-wrap">
        <!-- Card -->
        @foreach ($packages as $item)
        <div class="p-4 md:w-3/12">
          <a href="{{'booking/'.$item->id}}">
            <div class="bg-white shadow-xl rounded-xg">
              <img src="{{ asset('images/destinations/'.$item->destination->dest_image) }}" alt="" class="rounded-t-lg" />
              <div class="p-6">
                <h2 class="mb-0 text-2xl font-bold text-slate-800">{{$item->package_name}}</h2>
                <h3 class="mb-4 text-sm font-semibold text-teal-600">{{$item->tour_guide->tg_name}}</h3>
                <p class="mb-4 text-sm text-slate-600"><i class="fa-solid fa-location-dot"></i> {{$item->destination->dest_name}}</p>
                <p class="mb-2 text-slate-600">{{$item->package_desc}}</p>
                <p class="my-4 font-semibold text-slate-600"><i class="text-yellow-500 fa-solid fa-tag"></i>Sold out {{$item->sold}}</p>

                <p class="text-right text-teal-600"><a href="http://" class="font-normal">2.1k Reviews</a></p>

                <hr / class="rounded-lg border-slate-700">
                <div class="flex flex-row justify-between w-full mt-4">
                  <p class="my-2 font-semibold text-slate-600 text-md"><span class="text-sm font-light text-slate-500">From</span> Rp{{$item->price}}</p>
                  <p class="my-2 text-slate-600 text-md"><i class="fa-regular fa-clock"></i> {{$item->duration}} Hours</p>
                </div>
              </div>
            </div>
        </div>
        @endforeach
          </a>
        <!-- End Card -->
      </div>
    </div>
  </div>

  <!-- component -->
  <!-- This is an example component -->
  <div class="container py-20 mx-auto">
    <!-- Title -->
    <div class="my-4 text-center">
      <h1 class="text-3xl font-semibold text-center capitalize lg:text-4xl text-slate-700">Best destination</h1>
      <p class="max-w-2xl mx-auto my-4 text-center text-slate-600">
        Here our best reccomendation place that you can enjoy without worrying about easy thing such as hotel, language, and anything. Dont be be overthinking because Guidy is there for you!
      </p>
      <hr class="w-2/12 mx-auto border-2 border-teal-500 rounded-lg" />
    </div>
    <!-- End Title -->
    <div class="flex flex-wrap items-center">
      @foreach ($destinations as $destination)
        <div class="p-2 md:w-4/12">
          <a href="#">
            <div class="relative overflow-hidden cursor-pointer aspect-video rounded-xl group">
              <div class="absolute inset-x-0 z-50 flex items-end h-full text-white transition duration-300 ease-in-out bg-black bg-opacity-50 rounded-xl group-hover:opacity-100 pt-30">
                <div class="flex">
                  <div class="relative pb-10 space-y-3 text-xl transition duration-300 ease-in-out transform translate-y-4 group-hover:opacity-100 group-hover:translate-y-0">
                    <div class="font-bold text-center">{{ $destination->dest_name }}</div>
                    <div class="w-3/4 mx-auto text-sm text-center opacity-60">{{ $destination->dest_description }}</div>
                  </div>
                </div>
              </div>
              <img alt="" class="object-cover w-full transition duration-300 ease-in-out bg-black bg-opacity-50 aspect-square group-hover:scale-110" src="{{ asset('images/destinations/' . $destination->dest_image) }}" />
            </div>
          </a>
        </div>
      @endforeach
      {{-- <div class="p-2 md:w-4/12">
        <a href="#">
          <div class="relative overflow-hidden cursor-pointer aspect-video rounded-xl group">
            <div class="absolute inset-x-0 z-50 flex items-end h-full text-white transition duration-300 ease-in-out bg-black bg-opacity-50 rounded-xl group-hover:opacity-100 pt-30">
              <div class="flex">
                <div class="relative pb-10 space-y-3 text-xl transition duration-300 ease-in-out transform translate-y-4 group-hover:opacity-100 group-hover:translate-y-0">
                  <div class="font-bold text-center">Nusa Penida</div>
                  <div class="w-3/4 mx-auto text-sm text-center opacity-60">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolores error iure, perferendis sequi totam. Ad aliquam aperiam atque deleniti dolor dolorem enim esse et in, inventore itaque, pariatur reprehenderit.</div>
                </div>
              </div>
            </div>
            <img alt="" class="object-cover w-full transition duration-300 ease-in-out bg-black bg-opacity-50 aspect-square group-hover:scale-110" src="{{ asset('images/bg-banner.jpeg') }}" />
          </div>
        </a>
      </div>
      <div class="p-2 md:w-4/12">
        <a href="#">
          <div class="relative overflow-hidden cursor-pointer aspect-video rounded-xl group">
            <div class="absolute inset-x-0 z-50 flex items-end h-full text-white transition duration-300 ease-in-out bg-black bg-opacity-50 rounded-xl group-hover:opacity-100 pt-30">
              <div class="flex">
                <div class="relative pb-10 space-y-3 text-xl transition duration-300 ease-in-out transform translate-y-4 group-hover:opacity-100 group-hover:translate-y-0">
                  <div class="font-bold text-center">Nusa Penida</div>
                  <div class="w-3/4 mx-auto text-sm text-center opacity-60">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolores error iure, perferendis sequi totam. Ad aliquam aperiam atque deleniti dolor dolorem enim esse et in, inventore itaque, pariatur reprehenderit.</div>
                </div>
              </div>
            </div>
            <img alt="" class="object-cover w-full transition duration-300 ease-in-out bg-black bg-opacity-50 aspect-square group-hover:scale-110" src="{{ asset('images/bg-banner.jpeg') }}" />
          </div>
        </a>
      </div>
      <div class="p-2 md:w-4/12">
        <a href="#">
          <div class="relative overflow-hidden cursor-pointer aspect-video rounded-xl group">
            <div class="absolute inset-x-0 z-50 flex items-end h-full text-white transition duration-300 ease-in-out bg-black bg-opacity-50 rounded-xl group-hover:opacity-100 pt-30">
              <div class="flex">
                <div class="relative pb-10 space-y-3 text-xl transition duration-300 ease-in-out transform translate-y-4 group-hover:opacity-100 group-hover:translate-y-0">
                  <div class="font-bold text-center">Nusa Penida</div>
                  <div class="w-3/4 mx-auto text-sm text-center opacity-60">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolores error iure, perferendis sequi totam. Ad aliquam aperiam atque deleniti dolor dolorem enim esse et in, inventore itaque, pariatur reprehenderit.</div>
                </div>
              </div>
            </div>
            <img alt="" class="object-cover w-full transition duration-300 ease-in-out bg-black bg-opacity-50 aspect-square group-hover:scale-110" src="{{ asset('images/bg-banner.jpeg') }}" />
          </div>
        </a>
      </div>
      <div class="p-2 md:w-4/12">
        <a href="#">
          <div class="relative overflow-hidden cursor-pointer aspect-video rounded-xl group">
            <div class="absolute inset-x-0 z-50 flex items-end h-full text-white transition duration-300 ease-in-out bg-black bg-opacity-50 rounded-xl group-hover:opacity-100 pt-30">
              <div class="flex">
                <div class="relative pb-10 space-y-3 text-xl transition duration-300 ease-in-out transform translate-y-4 group-hover:opacity-100 group-hover:translate-y-0">
                  <div class="font-bold text-center">Nusa Penida</div>
                  <div class="w-3/4 mx-auto text-sm text-center opacity-60">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolores error iure, perferendis sequi totam. Ad aliquam aperiam atque deleniti dolor dolorem enim esse et in, inventore itaque, pariatur reprehenderit.</div>
                </div>
              </div>
            </div>
            <img alt="" class="object-cover w-full transition duration-300 ease-in-out bg-black bg-opacity-50 aspect-square group-hover:scale-110" src="{{ asset('images/bg-banner.jpeg') }}" />
          </div>
        </a>
      </div>
      <div class="p-2 md:w-4/12">
        <a href="#">
          <div class="relative overflow-hidden cursor-pointer aspect-video rounded-xl group">
            <div class="absolute inset-x-0 z-50 flex items-end h-full text-white transition duration-300 ease-in-out bg-black bg-opacity-50 rounded-xl group-hover:opacity-100 pt-30">
              <div class="flex">
                <div class="relative pb-10 space-y-3 text-xl transition duration-300 ease-in-out transform translate-y-4 group-hover:opacity-100 group-hover:translate-y-0">
                  <div class="font-bold text-center">Nusa Penida</div>
                  <div class="w-3/4 mx-auto text-sm text-center opacity-60">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolores error iure, perferendis sequi totam. Ad aliquam aperiam atque deleniti dolor dolorem enim esse et in, inventore itaque, pariatur reprehenderit.</div>
                </div>
              </div>
            </div>
            <img alt="" class="object-cover w-full transition duration-300 ease-in-out bg-black bg-opacity-50 aspect-square group-hover:scale-110" src="{{ asset('images/bg-banner.jpeg') }}" />
          </div>
        </a>
      </div> --}}
    </div>

    <!-- component -->
    <!-- This is an example component -->
  </div>

  <!-- End Best Reccomend -->

  <!-- Break -->
  <div class="h-full bg-fixed" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('images/bg-banner.jpeg') }}')">
    <section class="">
      <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
        <figure class="max-w-screen-md mx-auto">
          <svg class="h-12 mx-auto mb-3 text-gray-400" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
          </svg>
          <blockquote>
            <p class="text-2xl font-medium text-white dark:text-white">"Guidy is a new application to easier tourism that need partner for holiday."</p>
          </blockquote>
          <figcaption class="flex items-center justify-center mt-6 space-x-3">
            <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture" />
            <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
              <div class="pr-3 font-medium text-white dark:text-white">Micheal Gough</div>
              <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">CEO at Google</div>
            </div>
          </figcaption>
        </figure>
    </div>
    </section>
  </div>
  <!-- End Break -->

  <!-- Best Driver -->

  <div class="container px-6 py-20 mx-auto">
    <h1 class="text-3xl font-semibold text-center capitalize lg:text-4xl text-slate-700">Top 3 Best Guide</h1>
    <p class="max-w-2xl mx-auto my-4 text-center text-slate-600">Guidy make sure that all costumers have a excellent holiday with our best guide</p>
    <hr class="w-2/12 mx-auto border-2 border-teal-500 rounded-lg" />

    <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-3">
      @php
        $i = 0;
      @endphp
      @foreach ($tour_guides as $tour_guide)
        @if ($i == 3)
          @php
            break;
          @endphp
        @endif
        <div class="flex flex-col items-center">
          <img class="object-cover w-full rounded-xl aspect-square" src="{{ asset('/images/tour_guides/' . $tour_guide->tg_image) }}" alt="" />
          <h1 class="mt-4 text-2xl font-semibold capitalize text-slate-600">{{ $tour_guide->tg_name }}</h1>
          <p class="mt-2 capitalize text-slate-500">design director</p>
        </div>
        @php
          $i++;
        @endphp
      @endforeach
      {{-- <div class="flex flex-col items-center">
					<img class="object-cover w-full rounded-xl aspect-square" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
					<h1 class="mt-4 text-2xl font-semibold capitalize text-slate-600">arthur melo</h1>
					<p class="mt-2 capitalize text-slate-500">design director</p>
				</div>
				<div class="flex flex-col items-center">
					<img class="object-cover w-full rounded-xl aspect-square" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" />
					<h1 class="mt-4 text-2xl font-semibold capitalize text-slate-600">arthur melo</h1>
					<p class="mt-2 capitalize text-slate-500">design director</p>
				</div> --}}
    </div>
  </div>

  <!-- End Best Driver -->

  <!-- Footer -->
  <div class="h-full bg-gray-200">
    <div class="container flex flex-row flex-wrap mx-auto">
      <div class="h-full p-8 text-center md:w-3/12 sm:text-left">
        <h4 class="my-4 text-lg font-semibold text-dark md:my-6">About Us</h4>
        <p class="text-base text-slate-600 md:mb-7">Sed ut perspiciatis undmnis is iste natus error sit amet voluptatem totam rem aperiam.</p>
      </div>
      <div class="w-6/12 h-full p-4 md:w-3/12 md:p-8">
        <h4 class="text-lg font-semibold text-dark md:my-6">Helpful Link</h4>

        <ul>
          <li class="mb-1"><a href="#">Best Recommend</a></li>
          <li class="mb-1"><a href="#">Half Day Tour</a></li>
          <li class="mb-1"><a href="#">Full Day Tour</a></li>
          <li class="mb-1"><a href="#">Destination</a></li>
        </ul>
      </div>
      <div class="w-6/12 h-full p-4 md:w-3/12 md:p-8">
        <h4 class="text-lg font-semibold text-dark md:my-6">Helpful Link</h4>

        <ul>
          <li class="mb-1"><a href="#">Best Recommend</a></li>
          <li class="mb-1"><a href="#">Half Day Tour</a></li>
          <li class="mb-1"><a href="#">Full Day Tour</a></li>
          <li class="mb-1"><a href="#">Destination</a></li>
        </ul>
      </div>
      <div class="w-full h-full p-8 md:w-3/12">
        <h4 class="text-lg font-semibold text-center text-dark md:my-6 md:text-left">Social Media</h4>
        <div class="mx-auto space-x-3 text-center text-md md:text-left">
          <a href="#" class="text-2xl"><i class="fa-brands fa-facebook"></i> </a>
          <a href="#" class="text-2xl"><i class="fa-brands fa-twitter"></i> </a>
          <a href="#" class="text-2xl"><i class="fa-solid fa-envelope"></i> </a>
          <a href="#" class="text-2xl"><i class="fa-solid fa-phone"></i></a>
        </div>
      </div>

      <hr class="w-10/12 mx-auto border-gray-600" />

      <div class="w-full">
        <div class="py-6 text-sm text-center dark:text-gray-400">© 1968 Company Co. All rights reserved.</div>
      </div>
    </div>
  </div>

  <!-- End Footer -->
</x-home-layout>
