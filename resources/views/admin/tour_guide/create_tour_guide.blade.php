<x-admin-layout>
  <div class="flex">
    {{-- sidebar --}}
    {{-- <aside class="w-64 mr-5 bg-teal-500 text-white py-4 px-3 rounded h-screen" aria-label="Sidebar">
      <div class="">
        <h3 class="font-bold text-2xl mb-5 text-center">Admin</h3>
        <ul class="space-y-2">
          <li>
            <a href="tour_guide" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-teal-300">
              <i class="fa-solid fa-table-columns"></i>
              <span class="ml-3 text-white">Tour Guides</span>
            </a>
          </li>
          <li>
            <a href="destination" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-teal-300">
              <i class="fa-solid fa-table-columns"></i>
              <span class="ml-3 text-white">Destinations</span>
            </a>
          </li>
        </ul>
      </div>
    </aside> --}}
    {{-- end sidebar --}}

    {{-- form --}}
    <div class="w-[1000px] h-screen relative">
      <h1 class="font-bold text-3xl my-7">Add Data Tour Guide</h1>
      <hr class="mb-5 h-px bg-gray-300 border-0">
      <form action="{{ route('tour_guide.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex gap-10">
          <div>
            <div class="mb-6">
              <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
              <input type="text" name="tg_name" id="guider_name" class="@error('tg_name') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-96 p-2.50" value="{{ Session::get('tg_name') }}">
              @error('tg_name')
                <span class="text-red-500 text-xs">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-6">
              <label for="nickname" class="block mb-2 text-sm font-medium text-gray-900">Nickname</label>
              <input type="text" name="tg_nickname" id="nickname" class="@error('tg_nickname') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 w-96 block p-2.5" value="{{ Session::get('tg_nickname') }}">
              @error('tg_nickname')
                <span class="text-red-500 text-xs">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-6">
              <label for="tg_about" class="block mb-2 text-sm font-medium text-gray-900">About</label>
              <textarea id="tg_about" rows="4" class="@error('tg_about') border-red-500 @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-teal-500 focus:border-teal-500" name="tg_about" placeholder="About the tour guide...">{{ Session::get('tg_about') }}</textarea>
              @error('tg_about')
                <span class="text-red-500 text-xs">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div>
            <div class="mb-6">
              <label for="destination" class="block mb-2 text-sm font-medium text-gray-900">Destination</label>
              <input type="text" name="tg_destination" id="destination" class="@error('tg_destination') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 w-96 block p-2.5" value="{{ Session::get('tg_destination') }}">
              @error('tg_destination')
                <span class="text-red-500 text-xs">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-6">
              <label for="tg_price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
              <input type="text" name="tg_price" id="tg_price" class="@error('tg_price') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 w-96 block p-2.5" value="{{ Session::get('tg_price') }}">
              @error('tg_price')
                <span class="text-red-500 text-xs">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-6">
              <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload image</label>
              <input class="block w-96 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" id="file_input" type="file" name="tg_image">
              @error('tg_image')
                <span class="text-red-500 text-xs">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
        <button type="submit" class="text-white bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:ring-teal-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">Add</button>
      </form>
    </div>
    {{-- end form --}}
  </div>
</x-admin-layout>
