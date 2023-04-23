<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Create Student') }}
                </h2>

                <div class="max-w-7xl">
                    <form method="post" action="{{ route('students.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-6 gap-x-4 gap-y-6 grid grid-cols-1 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="guardian" class="block text-sm font-medium text-gray-700"> Select Parent
                                </label>
                                <select id="guardian" name="guardian"
                                    class="mt-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    <option selected disabled>Please select the parent</option>
                                    @forelse($guardians as $guardian)
                                        <option value="{{ $guardian->id }}">{{ $guardian->name }} -
                                            {{ $guardian->contact_person }}
                                        </option>
                                    @empty
                                        <option disabled>Please add Parents before creating student.</option>
                                    @endforelse
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('guardian')" />
                            </div>

                            <div class="sm:col-span-3">
                                <x-input-label for="first_name" :value="__('First Name')" />
                                <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full"
                                    :value="old('first_name')" required />
                                <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                            </div>

                            <div class="sm:col-span-3">
                                <x-input-label for="middle_name" :value="__('Middle Name')" />
                                <x-text-input id="middle_name" name="middle_name" type="text"
                                    class="mt-1 block w-full" :value="old('middle_name')" required />
                                <x-input-error class="mt-2" :messages="$errors->get('middle_name')" />
                            </div>

                            <div class="sm:col-span-3">
                                <x-input-label for="last_name" :value="__('Last Name')" />
                                <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full"
                                    :value="old('last_name')" required />
                                <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                            </div>

                            <div class="sm:col-span-3">
                                <x-input-label for="address" :value="__('Address')" />
                                <x-text-input id="address" name="address" type="text" class="mt-1 block w-full"
                                    :value="old('address')" required />
                                <x-input-error class="mt-2" :messages="$errors->get('address')" />
                            </div>

                            <div class="sm:col-span-3">
                                <x-input-label for="city" :value="__('City')" />
                                <x-text-input id="city" name="city" type="text" class="mt-1 block w-full"
                                    :value="old('city')" required />
                                <x-input-error class="mt-2" :messages="$errors->get('city')" />
                            </div>

                            <div class="sm:col-span-3">
                                <label for="district" class="block text-sm font-medium text-gray-700">District</label>
                                <select id="district" name="district"
                                    class="mt-1 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                    @foreach($districts as $district)
                                    <option value="{{$district->name_en}}">{{$district->name_en}}</option>
                                    @endforeach
                                </select>
                                @error('district')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <x-input-label for="birthday" :value="__('Birthday')" />
                                <x-text-input id="birthday" name="birthday" type="date" class="mt-1 block w-full"
                                    :value="old('birthday')" required />
                                <x-input-error class="mt-2" :messages="$errors->get('birthday')" />
                            </div>

                            <div class="sm:col-span-3">
                                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                <div class="mt-1 flex items-center">

                                    <img class="inline-block h-12 w-12 rounded-full"
                                        src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2.5&w=256&h=256&q=80"
                                        alt="">
                                    <div class="ml-4 flex">
                                        <div
                                            class="relative bg-white py-2 px-3 border border-blue-gray-300 rounded-md shadow-sm flex items-center cursor-pointer hover:bg-blue-gray-50 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-blue-gray-50 focus-within:ring-blue-500">
                                            <label for="photo"
                                                class="relative text-sm font-medium text-blue-gray-900 pointer-events-none">
                                                <span>Change</span>
                                                <span class="sr-only"> user photo</span>
                                            </label>
                                            <input id="image" name="image" type="file"
                                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer border-gray-300 rounded-md">
                                        </div>

                                    </div>
                                </div>
                                @error('image')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="flex items-center justify-end my-6">
                            <x-primary-button>{{ __('Create Student') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>