<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="#" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Table</a>
            </div>
    </div>
        
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You are logged in!") }}
                    Admin
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
