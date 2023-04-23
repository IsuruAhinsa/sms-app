<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">

                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Create Parents') }}
                </h2>

                <div class="max-w-xl">
                    <form method="post" action="{{ route('guardians.store') }}" class="mt-6 space-y-6">
                        @csrf

                        <div>
                            <label for="contact_person" class="block text-sm font-medium text-gray-700"> Contact
                                Person</label>
                            <div class="flex item-inline mt-1">
                                <div class="flex items-center">
                                    <input id="mother" name="contact_person" type="radio"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                        value="Mother">
                                    <label for="mother" class="ml-3 block text-sm font-medium text-gray-700">
                                        Mother</label>
                                </div>
                                <div class="flex items-center ml-4">
                                    <input id="father" name="contact_person" type="radio"
                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                        value="Father">
                                    <label for="father" class="ml-3 block text-sm font-medium text-gray-700">
                                        Father</label>
                                </div>
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('contact_person')" />

                        </div>

                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                :value="old('name')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                                :value="old('email')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>

                        <div>
                            <x-input-label for="phone" :value="__('Contact Number')" />
                            <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full"
                                :value="old('phone')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                        </div>

                        <div>
                            <x-input-label for="nic" :value="__('NIC')" />
                            <x-text-input id="nic" name="nic" type="text" class="mt-1 block w-full"
                                :value="old('nic')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('nic')" />
                        </div>

                        <div>
                            <x-input-label for="address" :value="__('Address')" />
                            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full"
                                :value="old('address')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('address')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
