<x-app-layout>


  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


      <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
          <h1 class="text-xl font-semibold text-gray-900">Create Parents</h1>
          <!-- <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name, title, email and role.</p> -->
        </div>

      </div>
      <form action="{{route('guardians.store')}}" method="post" class="space-y-8 divide-y divide-gray-200">
        @csrf
        <div class="space-y-8 divide-y divide-gray-200">


          <div class="pt-8">

            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
              <div class="sm:col-span-3">
                <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                <div class="mt-1">
                  <input type="text" name="name" id="name" autocomplete="given-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                  @error('name')
                  <div class="text-sm text-red-400">{{ $message}}</div>
                  @enderror

                </div>

                <div class="sm:col-span-3 mt-3">
                  <label for="email" class="block text-sm font-medium text-gray-700"> Email address </label>
                  <div class="mt-1">
                    <input id="email" name="email" type="email" autocomplete="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                  </div>
                  @error('email')
                  <div class="text-sm text-red-400">{{ $message}}</div>
                  @enderror
                </div>

                <div class="sm:col-span-3 mt-3">
                  <label for="phone" class="block text-sm font-medium text-gray-700"> Contact Number </label>
                  <div class="mt-1">
                    <input type="text" name="phone" id="phone" autocomplete="given-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                  </div>
                  @error('phone')
                  <div class="text-sm text-red-400">{{ $message}}</div>
                  @enderror
                </div>


                <div class="sm:col-span-3 mt-3">
                  <label for="nic" class="block text-sm font-medium text-gray-700"> NIC </label>
                  <div class="mt-1">
                    <input type="text" name="nic" id="nic" autocomplete="given-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                  </div>
                  @error('nic')
                  <div class="text-sm text-red-400">{{ $message}}</div>
                  @enderror
                </div>

                <div class="sm:col-span-3 mt-3">
                  <label for="address" class="block text-sm font-medium text-gray-700"> Address </label>
                  <div class="mt-1">
                    <input type="text" name="address" id="address" autocomplete="given-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                  </div>
                  @error('address')
                  <div class="text-sm text-red-400">{{ $message}}</div>
                  @enderror
                </div>
              </div>


            </div>


          </div>
          <div class="pt-5">

            <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>

          </div>
      </form>
    </div>
  </div>
</x-app-layout>