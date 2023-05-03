<div>
    <x-jet-button wire:click="$set('open',true)">
        Crear Usuario
    </x-jet-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Ingresar Nuevo Usuario
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Nombre de la Unidad" />
                <x-jet-input type="text" wire:model="name" />
                <x-jet-input-error for="name" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Correo" />
                <x-jet-input type="text" wire:model="email" />
                <x-jet-input-error for="email" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Contraseña" />
                <x-jet-input type="password" wire:model="password" />
                <x-jet-input-error for="password" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-danger-button>
            <x-jet-button class="ml-4 disabled:opacity-25" wire:click="save" wire:loading.attr="disabled"
                wire:target="save">
                Crear
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
