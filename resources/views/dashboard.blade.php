<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Links') }}
        </h2>
    </x-slot>
    <livewire:links-table/>
    <button wire:click="$emit('postAdded')">Edit</button>
</x-app-layout>
