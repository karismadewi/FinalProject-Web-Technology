<x-admin-layout>
    {{-- sidebar --}}
    <div class="flex">
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
              <a href="destination" class="flex items-center p-2 text-base font-normal rounded-lg hover:bg-teal-300">
                <i class="fa-solid fa-table-columns"></i>
                <span class="ml-3 text-white">Destinations</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      {{-- end sidebar --}}
  
      {{-- table --}}
      <div class="overflow-x-auto relative w-full">
        <h1 class="font-bold text-3xl my-10">List Destination of Guidy 2022</h1>
        <button class="focus:outline-none text-white bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2"><a href="destinations/create">Add Data</a></button>
        <table class="w-full text-sm text-left text-gray-500">
          <thead class="text-xs text-gray-700 uppercase bg-gray-200">
            <tr>
              <th scope="col" class="py-3 px-6">
                Number
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
            </tr>
          </thead>
          <tbody>
            @foreach ($destinations as $destination)
            <tr class="bg-white border-b">
              <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                {{ $destination->id }}
              </th>
              <td class="py-4 px-6">
                {{ $destination->dest_name }}
              </td>
              <td class="py-4 px-6">
                {{ $destination->dest_description }}
              </td>
              <td class="py-4 px-6">
                {{-- {{ $destination->tour_guide->tg_name }} --}}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      {{-- end table --}}
    </div>
  </x-admin-layout>
  