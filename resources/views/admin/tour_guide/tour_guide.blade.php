<x-admin-layout>
  {{-- sidebar --}}
  <div class="flex">
    <div class="h-screen bg-teal-500 w-64 rounded">
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
    </div>
    {{-- end sidebar --}}

    {{-- table --}}
    <div class="overflow-x-auto w-full h-screen relative ml-3">
      <h1 class="font-bold text-3xl my-5">List Tour Guide of Guidy 2022</h1>
      <button class="focus:outline-none text-white bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2"><a href="/admin/tour_guide/create">Add Data</a></button>
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
        {{ $data->links() }}
      </div>
    </div>
    {{-- end table --}}
  </div>
</x-admin-layout>
