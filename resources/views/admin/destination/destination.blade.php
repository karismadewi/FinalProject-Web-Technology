<x-admin-layout>
  <div class="flex">
    {{-- table --}}
    <div class="overflow-x-auto relative w-full">
      <h1 class="font-bold text-3xl my-5">List Destination of Guidy 2022</h1>
      {{-- search --}}
      <form class="flex items-center mb-3" method="GET">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-96">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
            </svg>
          </div>
          <input type="text" name="keyword" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full pl-10 p-2.5" placeholder="Search" required>
        </div>
        <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-teal-700 rounded-lg border border-teal-700 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
          <span class="sr-only">Search</span>
        </button>
      </form>
      {{-- end search --}}
      <button class="focus:outline-none text-white bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2"><a href="destinations/create">Add Data</a></button>
      <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
          <tr>
            <th scope="col" class="py-3 px-6">
              No.
            </th>
            <th scope="col" class="py-3 px-6">
              Image
            </th>
            <th scope="col" class="py-3 px-6">
              Name
            </th>
            <th scope="col" class="py-3 px-6">
              Description
            </th>
            <th scope="col" class="py-3 px-6">
              Tour Guide
            </th>
            <th scope="col" class="py-3 px-6">
              Action
            </th>
          </tr>
        </thead>
        <tbody>
          @php
            $i = 1;
          @endphp
          @foreach ($destinations as $destination)
            <tr class="bg-white border-b">
              <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                {{ $i }}
              </th>
              <td class="py-4 px-6">
                <img src="{{ asset('/images/destinations/' . $destination->dest_image) }}" alt="Photo Profile" width="100">
              </td>
              <td class="py-4 px-6">
                {{ $destination->dest_name }}
              </td>
              <td class="py-4 px-6">
                {{ $destination->dest_description }}
              </td>
              <td class="py-4 px-6">
                {{ $destination->tour_guide->tg_name }}
              </td>
              <td class="py-4 px-6 flex items-center">
                <a href="{{ 'destinations/' . $destination->id . '/edit' }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-4 py-1.5 mr-2 mb-2">Edit</a>
                <form action="{{ 'destinations/' . $destination->id }}" method="POST" onsubmit="confirm('Are you sure to delete this data?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs px-4 py-1.5 mr-2 mb-2">Delete</button>
                </form>
              </td>
            </tr>
            @php
              $i++;
            @endphp
          @endforeach
        </tbody>
      </table>
      <div class="pull-right">
        {{ $destinations->withQueryString()->links() }}
      </div>
    </div>
    {{-- end table --}}
  </div>
</x-admin-layout>
