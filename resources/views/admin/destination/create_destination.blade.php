<x-admin-layout>
  <div class="flex">
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
              <input type="text" name="dest_name" id="name" class="@error('dest_name') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-96 p-2.50" value="{{ Session::get('dest_name') }}">
              @error('dest_name')
                <span class="text-red-500 text-xs">{{ $message }}</span> 
              @enderror
            </div>
            <div class="mb-5">
              <label for="dest_description" class="block mb-2 text-sm font-medium text-gray-900">About</label>
              <textarea id="dest_description" rows="4" class="@error('dest_description') border-red-500 @enderror block p-2.5 w-96 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-teal-500 focus:border-teal-500" name="dest_description" placeholder="About the place...">{{ Session::get('dest_description') }}</textarea>
              @error('dest_description')
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
            <h5>Tour Guide</h5>
            <select name="tguide_id" class="@error('tguide_id') border-red-500 @enderror w-96 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
              <option selected>Choose Tour Guide</option>
              @foreach ($tour_guides as $tour_guide)
                <option value="{{ $tour_guide->id }}">{{ $tour_guide->tg_name }}</option>
              @endforeach
            </select>
            @error('tguide_id')
              <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <button type="submit" class="text-white bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:ring-teal-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">Add</button>
    </div>
    </form>
  </div>
  {{-- end form --}}
  </div>
</x-admin-layout>
