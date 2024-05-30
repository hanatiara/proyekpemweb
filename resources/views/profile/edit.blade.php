<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
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
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg pb-2">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
