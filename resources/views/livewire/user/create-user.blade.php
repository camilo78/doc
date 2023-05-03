<div>
    <x-jet-button wire:click="$set('open',true)">
        Crear Usuario
    </x-jet-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear Nuevo Usuario
        </x-slot>
        <x-slot name="content">

        </x-slot>
        <x-slot name="footer">

        </x-slot>
    </x-jet-dialog-modal>

</div>
