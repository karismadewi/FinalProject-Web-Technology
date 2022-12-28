<x-admin-layout>
  <div class="flex flex-col w-[1000px]">
    <h1 class="my-5 text-3xl">Dashboard</h1>
    <hr>
    <div class="flex gap-10 mt-10">
      <div class="flex flex-col gap-5">
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Total Tour Guide</h5>
          <p class="font-normal text-gray-700 dark:text-gray-400">{{ $tour_guide }} Person</p>
        </div>
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Total Destination</h5>
          <p class="font-normal text-gray-700 dark:text-gray-400">{{ $destination }} Places</p>
        </div>
      </div>
      <div class="flex flex-col gap-5">
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Total Package</h5>
          <p class="font-normal text-gray-700 dark:text-gray-400">{{ $package }} Items</p>
        </div>
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Total Transaction</h5>
          <p class="font-normal text-gray-700 dark:text-gray-400">{{ $transaction }} transaction</p>
        </div>
      </div>
      <div class="flex flex-col gap-5">
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Total Review</h5>
          <p class="font-normal text-gray-700 dark:text-gray-400">{{ $review }} </p>
        </div>
      </div>
    </div>
  </div>
</x-admin-layout>