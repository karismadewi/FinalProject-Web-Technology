<x-admin-layout>
  <div class="flex">
    {{-- sidebar --}}
    {{-- <div class="h-screen bg-teal-500 w-64 rounded">
      <aside class="w-40 mr-5 bg-teal-500 text-white py-4 px-3 rounded" aria-label="Sidebar">
        <div class="">
          <h3 class="font-bold text-2xl mb-5 text-center">Admin</h3>
          <ul class="space-y-2">
            <li>
              <a href="" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-teal-300">
                <i class="fa-solid fa-table-columns"></i>
                <span class="ml-3 text-white">Tour Guides</span>
              </a>
            </li>
            <li>
              <a href="../admin/destinations" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-teal-300">
                <i class="fa-solid fa-table-columns"></i>
                <span class="ml-3 text-white">Destinations</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
    </div> --}}
    {{-- end sidebar --}}

    {{-- table --}}
    <div class="w-full h-screen relative">
      <div class="mx-2">
        <h1 class="font-bold text-3xl my-5">List Tour Guide of Guidy 2022</h1>
        <button class="focus:outline-none text-white bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2"><a href="/admin/tour_guide/create">Add Data</a></button>
        {{-- Search --}}
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
        {{-- End Search --}}
        <table class="text-sm text-left text-gray-500">
          <thead class="text-xs text-gray-700 uppercase bg-gray-200">
            <tr>
              <th scope="col" class="py-3 px-2">
                No.
              </th>
              <th scope="col" class="py-3 px-6">
                Image
              </th>
              <th scope="col" class="py-3 px-6">
                Name
              </th>
              <th scope="col" class="py-3 px-6">
                Nickname
              </th>
              <th scope="col" class="py-3 px-6">
                About
              </th>
              <th scope="col" class="py-3 px-6">
                Destination
              </th>
              <th scope="col" class="py-3 px-6">
                Price
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
            @foreach ($data as $item)
              <tr class="bg-white border-b">
                <th scope="row" class="py-2 px-3 font-medium text-gray-900 whitespace-nowrap">
                  {{ $i }}
                </th>
                <td class="py-4 px-6">
                  <img src="{{ asset('/images/tour_guides/' . $item->tg_image) }}" alt="Photo Profile" width="100">
                </td>
                <td class="py-4 px-6">
                  {{ $item->tg_name }}
                </td>
                <td class="py-4 px-6">
                  {{ $item->tg_nickname }}
                </td>
                <td class="py-4 px-6">
                  {{ $item->tg_about }}
                </td>
                <td class="py-4 px-6">
                  {{ $item->tg_destination }}
                </td>
                <td class="py-4 px-6">
                  {{ $item->tg_price }}
                </td>
                <td class="py-4 px-6 flex items-center justify-center">
                  <a href="{{ 'tour_guide/' . $item->id . '/edit' }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-4 py-1.5 mr-2 mb-2">Edit</a>
                  <form action="{{ 'tour_guide/' . $item->id }}" method="POST" onsubmit="confirm('Are you sure to delete this data?')">
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
          {{ $data->withQueryString()->links() }}
        </div>
      </div>
    </div>
    {{-- end table --}}
  </div>
</x-admin-layout>
