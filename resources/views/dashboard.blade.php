<x-app-layout>
    <x-slot name="header">
        <div class="row p-3">
            <div class="col">
                <livewire:new-link-button/>
            </div>
            <div class="col align-right">
            </div>
        </div>
    </x-slot>
    <livewire:links-table/>
    <livewire:edit-link-modal/>
</x-app-layout>
