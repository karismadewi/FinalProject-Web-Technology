<x-home-layout>
  <h1 class="text-center text-4xl bold py-12">Find Your Partner Guide</h1>
  <div class="flex flex-wrap">
    @foreach ($tour_guides as $tour_guide)
      <div class="md:w-3/12 p-4">
        <a href="booking">
          <div class="bg-white rounded-xg shadow-xl">
            <img src="{{ asset('images/tour_guides/' . $tour_guide->tg_image) }}" alt="" class="rounded-t-lg" />
            <div class="p-6">
              <h2 class="font-bold mb-2 text-2xl text-slate-800">{{ $tour_guide->tg_name }}</h2>
              <p class="text-slate-600 mb-2">{{ $tour_guide->tg_about }}</p>
              <p class="text-slate-600 font-semibold my-4"><i class="fa-solid fa-star text-yellow-500"></i>4.5 <span class="font-normal">(10 Reviews)</span></p>
              <hr / class=" border-slate-700 rounded-lg">
              <div class="flex flex-row w-full justify-between mt-4">
                <p class="text-slate-600 my-2 text-md font-semibold"><span class="text-slate-500 text-sm font-light">From</span> Rp{{ $tour_guide->tg_price }}</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
</x-home-layout>
