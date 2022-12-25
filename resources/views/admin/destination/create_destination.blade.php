<x-admin-layout>
  <div class="flex">
    {{-- sidebar --}}
    <aside class="w-64 mr-5 bg-teal-500 text-white py-4 px-3 rounded h-screen" aria-label="Sidebar">
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
            <a href="destinations" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-teal-300">
              <i class="fa-solid fa-table-columns"></i>
              <span class="ml-3 text-white">Destinations</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    {{-- end sidebar --}}

    {{-- form --}}
    <div class="container">
      <h1 class="font-bold text-3xl my-7">Add Data Destination</h1>
      <hr class="mb-5 h-px bg-gray-300 border-0">
      <form action="{{ route('destinations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex gap-10">
          <div class="flex flex-col">
            <div class="mb-5">
              <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Destination Name</label>
              <input type="text" name="dest_name" id="name" class="@error('dest_name') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-96 p-2.50" value="">
              @error('dest_name')
                <span class="text-red-500 text-xs">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-5">
              <label for="dest_description" class="block mb-2 text-sm font-medium text-gray-900">About</label>
              <textarea id="dest_description" rows="4" class="@error('dest_description') border-red-500 @enderror block p-2.5 w-96 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-teal-500 focus:border-teal-500" name="dest_description" placeholder="About the place..."></textarea>
              @error('tg_about')
                <span class="text-red-500 text-xs">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-5">
              <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload image</label>
              <input class="block w-96 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" id="file_input" type="file" name="dest_image">
              @error('dest_image')
                <span class="text-red-500 text-xs">{{ $message }}</span>
              @enderror
            </div>
          </div>
          <div>
            <div class="flex flex-col bg-white w-96 rounded">
              <h5>Tour Guide</h5>
              @foreach ($destinations as $destination)
                <div class="mb-3 flex items-center">
                  <input id="tourguide" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500">
                  <label for="tourguide" name="tour_guide" class="ml-2 text-sm font-medium text-gray-900">{{ $destination->tour_guide->tg_name }}</label>
                </div>
              @endforeach
            </div>
          </div>
        </div>
        <button type="submit" class="text-white bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:ring-teal-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">Add</button>
    </div>
    </form>
  </div>
  {{-- end form --}}
  </div>
</x-admin-layout>
