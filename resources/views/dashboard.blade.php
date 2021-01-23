<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Links') }}
        </h2>
    </x-slot>
    <livewire:links-table/>
    <livewire:edit-link-modal/>
</x-app-layout>
