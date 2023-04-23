<x-app-layout>


  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


      @if( session()->has('success'))
      <!-- This example requires Tailwind CSS v2.0+ -->
      <div class="rounded-md bg-green-50 p-4">
        <div class="flex">
          <div class="flex-shrink-0">
            <!-- Heroicon name: solid/check-circle -->
            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
          </div>
          <div class="ml-3">
            <p class="text-sm font-medium text-green-800">{{ session()->get('success')}}</p>
          </div>
          <div class="ml-auto pl-3">
            <div class="-mx-1.5 -my-1.5">
              <button type="button" class="inline-flex bg-green-50 rounded-md p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-50 focus:ring-green-600">
                <span class="sr-only">Dismiss</span>
                <!-- Heroicon name: solid/x -->
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>

      @endif

      <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
          <h1 class="text-xl font-semibold text-gray-900">Update Parents</h1>
          <!-- <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name, title, email and role.</p> -->
        </div>

      </div>
      <form action="{{route('guardians.update', $guardian->id)}}" method="post" class="space-y-8 divide-y divide-gray-200">
        @csrf
        @method('PUT')
        <div class="space-y-8 divide-y divide-gray-200">


          <div class="pt-8">

            <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
              <div class="sm:col-span-3">
                <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                <div class="mt-1">
                  <input type="text" name="name" id="name" autocomplete="given-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ $guardian->name}}">
                  @error('name')
                  <div class="text-sm text-red-400">{{ $message}}</div>
                  @enderror

                </div>

                <div class="sm:col-span-3 mt-3">
                  <label for="email" class="block text-sm font-medium text-gray-700"> Email address </label>
                  <div class="mt-1">
                    <input id="email" name="email" type="email" autocomplete="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ $guardian->email}}">
                  </div>
                  @error('email')
                  <div class="text-sm text-red-400">{{ $message}}</div>
                  @enderror
                </div>

                <div class="sm:col-span-3 mt-3">
                  <label for="phone" class="block text-sm font-medium text-gray-700"> Contact Number </label>
                  <div class="mt-1">
                    <input type="text" name="phone" id="phone" autocomplete="given-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ $guardian->phone}}">
                  </div>
                  @error('phone')
                  <div class="text-sm text-red-400">{{ $message}}</div>
                  @enderror
                </div>


                <div class="sm:col-span-3 mt-3">
                  <label for="nic" class="block text-sm font-medium text-gray-700"> NIC </label>
                  <div class="mt-1">
                    <input type="text" name="nic" id="nic" autocomplete="given-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ $guardian->nic}}">
                  </div>
                  @error('nic')
                  <div class="text-sm text-red-400">{{ $message}}</div>
                  @enderror
                </div>

                <div class="sm:col-span-3 mt-3">
                  <label for="address" class="block text-sm font-medium text-gray-700"> Address </label>
                  <div class="mt-1">
                    <input type="text" name="address" id="address" autocomplete="given-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" value="{{ $guardian->address}}">
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