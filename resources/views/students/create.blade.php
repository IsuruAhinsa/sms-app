<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">Create Students</h1>
                    <!-- <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name, title, email and role.</p> -->
                </div>

            </div>

            <form action="{{route('students.store')}}" method="post" class="space-y-8 divide-y divide-gray-200" enctype="multipart/form-data">
                @csrf
                <div class="space-y-8 divide-y divide-gray-200">

                    <div class="pt-8">

                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">

                            <div class="sm:col-span-3 mt-3">
                                <label for="guardian" class="block text-sm font-medium text-gray-700"> Select Guarian </label>
                                <select id="guardian" name="guardian" class="mt-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    @foreach($guardians as $guardian)
                                    <option value="{{ $guardian->id}}">{{$guardian->name}} {{$guardian->nic}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="sm:col-span-3 mt-3">
                                <label for="contact_person" class="block text-sm font-medium text-gray-700"> Contact Person</label>
                                <div class="flex item-inline mt-1">
                                    <div class="flex items-center">
                                        <input id="mother" name="contact_person" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="mother">
                                        <label for="mother" class="ml-3 block text-sm font-medium text-gray-700"> Mother</label>
                                    </div>
                                    <div class="flex items-center ml-4">
                                        <input id="father" name="contact_person" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" value="father">
                                        <label for="father" class="ml-9 block text-sm font-medium text-gray-700"> Father</label>
                                    </div>
                                </div>
                                @error('contact_person')
                                <div class="text-sm text-red-400">{{ $message}}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-3 mt-3">
                                <label for="first_name" class="block text-sm font-medium text-gray-700"> First Name</label>
                                <div class="mt-1">
                                    <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>
                                @error('first_name')
                                <div class="text-sm text-red-400">{{ $message}}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-3 mt-3">
                                <label for="middle_name" class="block text-sm font-medium text-gray-700"> Middle Name</label>
                                <div class="mt-1">
                                    <input type="text" name="middle_name" id="middle_name" autocomplete="given-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>
                                @error('middle_name')
                                <div class="text-sm text-red-400">{{ $message}}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-3 mt-3">
                                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                                <div class="mt-1">
                                    <input type="text" name="last_name" id="last_name" autocomplete="given-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>
                                @error('last_name')
                                <div class="text-sm text-red-400">{{ $message}}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-3 mt-3">
                                <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                                <div class="mt-1">
                                    <input type="text" name="age" id="age" autocomplete="given-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>
                                @error('age')
                                <div class="text-sm text-red-400">{{ $message}}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">

                            <div class="sm:col-span-3 mt-3">
                                <label for="address_one" class="block text-sm font-medium text-gray-700"> Address </label>
                                <div class="mt-1">
                                    <input id="address_one" name="address_one" type="text" autocomplete="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>
                                @error('address_one')
                                <div class="text-sm text-red-400">{{ $message}}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-3 mt-3">
                                <label for="city" class="block text-sm font-medium text-gray-700"> City </label>
                                <div class="mt-1">
                                    <input id="city" name="city" type="text" autocomplete="email" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>
                                @error('address_one')
                                <div class="text-sm text-red-400">{{ $message}}</div>
                                @enderror
                            </div>


                            <div class="sm:col-span-3 mt-3">
                                <label for="district" class="block text-sm font-medium text-gray-700">District</label>
                                <select id="district" name="district" class="mt-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    <option value="Jaffna">Jaffna</option>
                                    <option value="Kurunegala">Kurunegala</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Anuradhapura">Anuradhapura</option>

                                </select>
                                @error('district')
                                <div class="text-sm text-red-400">{{ $message}}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-3 mt-3">
                                <label for="dob" class="block text-sm font-medium text-gray-700"> Date Of Birth </label>
                                <div class="mt-1">
                                    <input type="date" name="dob" id="dob" autocomplete="given-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                </div>
                                @error('address')
                                <div class="text-sm text-red-400">{{ $message}}</div>
                                @enderror
                            </div>


                            <div class="sm:col-span-3 mt-3">
                                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                <div class="mt-1 flex items-center">

                                    <img class="inline-block h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2.5&w=256&h=256&q=80" alt="">
                                    <div class="ml-4 flex">
                                        <div class="relative bg-white py-2 px-3 border border-blue-gray-300 rounded-md shadow-sm flex items-center cursor-pointer hover:bg-blue-gray-50 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-blue-gray-50 focus-within:ring-blue-500">
                                            <label for="photo" class="relative text-sm font-medium text-blue-gray-900 pointer-events-none">
                                                <span>Change</span>
                                                <span class="sr-only"> user photo</span>
                                            </label>
                                            <input id="image" name="image" type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                                        </div>

                                    </div>
                                </div>
                                @error('image')
                                <div class="text-sm text-red-400">{{ $message}}</div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="pt-5">
                        <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>