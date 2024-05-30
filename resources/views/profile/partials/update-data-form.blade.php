<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{-- {{ __('Profile') }} --}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex">
            <div class="w-1/5">
                <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-4">
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('profile.edit') }}" class="block py-2 px-4 rounded-md text-gray-700 dark:text-gray-300 @if(request()->routeIs('profile.edit')) bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-white @endif hover:bg-gray-200 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white focus:bg-gray-200 dark:focus:bg-gray-700 focus:text-gray-900 dark:focus:text-white">Data Akun</a>
                        </li>
                        <li>
                            <a href="{{ route('profile.data') }}" class="block py-2 px-4 rounded-md text-gray-700 dark:text-gray-300 @if(request()->routeIs('profile.data')) bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-white @endif hover:bg-gray-200 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white focus:bg-gray-200 dark:focus:bg-gray-700 focus:text-gray-900 dark:focus:text-white">Data Diri</a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('profile.orders') }}" class="block py-2 px-4 rounded-md text-gray-700 dark:text-gray-300 @if(request()->routeIs('profile.orders')) bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-white @endif hover:bg-gray-200 dark:hover:bg-gray-700 hover:text-gray-900 dark:hover:text-white focus:bg-gray-200 dark:focus:bg-gray-700 focus:text-gray-900 dark:focus:text-white">Riwayat Pemesanan</a>
                        </li> --}}
                    </ul>
                </div>
            </div>

            <div class="w-4/5">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <section>
                            <header>
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Data Diri') }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                    {{ __("Update data diri Anda seperti nama lengkap, nomor KTP, alamat domisili, dan nomor telepon.") }}
                                </p>
                            </header>

                            <form method="post" action="{{ route('profile.data.update') }}" class="mt-6 space-y-6">
                                @csrf
                                {{-- @method('patch') --}}

                                <div>
                                    <x-input-label for="full_name" :value="__('Nama Lengkap')" />
                                    <x-text-input id="full_name" name="full_name" type="text" class="mt-1 block w-full" :value="old('full_name', $user->full_name)" required autofocus />
                                    <x-input-error class="mt-2" :messages="$errors->get('full_name')" />
                                </div>

                                <div>
                                    <x-input-label for="card_id" :value="__('Nomor KTP')" />
                                    <x-text-input id="card_id" name="card_id" type="text" class="mt-1 block w-full" :value="old('card_id', $user->ktp_number)" required />
                                    <x-input-error class="mt-2" :messages="$errors->get('card_id')" />
                                </div>

                                <div>
                                    <x-input-label for="address" :value="__('Alamat Domisili')" />
                                    <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $user->address)" required />
                                    <x-input-error class="mt-2" :messages="$errors->get('address')" />
                                </div>

                                <div>
                                    <x-input-label for="phone_number" :value="__('Nomor Telepon')" />
                                    <x-text-input id="phone_number" name="phone_number" type="text" class="mt-1 block w-full" :value="old('phone_number', $user->phone_number)" required />
                                    <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
                                </div>


                                <div class="flex items-center gap-4">
                                    <x-primary-button>Simpan</x-primary-button>

                                    @if (session('status') === 'data-updated')
                                        <p
                                            x-data="{ show: true }"
                                            x-show="show"
                                            x-transition
                                            x-init="setTimeout(() => show = false, 2000)"
                                            class="text-sm text-gray-600 dark:text-gray-400"
                                        >{{ __('Data berhasil disimpan.') }}</p>
                                    @endif
                                </div>
                            </form>
                        </section>


                    </div>
                </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


