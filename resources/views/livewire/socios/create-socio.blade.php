<div>
    {{-- Botón para abrir el modal --}}
    <x-jet-button wire:click="$set('open', true)">
        Crear Socio
    </x-jet-button>

    {{-- Modal --}}
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Crear Nuevo Socio
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Nombre del Socio" />
                <x-jet-input type="text" class="w-full" wire:model.defer="nombres" />
                <x-jet-input-error for="nombres" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Apellidos del Socio" />
                <x-jet-input type="text" class="w-full" wire:model.defer="apellidos" />
                <x-jet-input-error for="apellidos" />
            </div>

            <div class="mb-4">
                <x-jet-label value="DUI del Socio" />
                <x-jet-input type="text" class="w-full" wire:model.defer="dui" />
                <x-jet-input-error for="dui" />
            </div>

            <div class="mb-4">
                <x-jet-label value="NIT del Socio" />
                <x-jet-input type="text" class="w-full" wire:model.defer="nit" />
                <x-jet-input-error for="nit" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Dirección del Socio" />
                <x-jet-input type="text" class="w-full" wire:model.defer="direccion" />
                <x-jet-input-error for="direccion" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Salario del Socio" />
                <x-jet-input type="number" class="w-full" wire:model.defer="salario" />
                <x-jet-input-error for="salario" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Correo del Socio" />
                <x-jet-input type="email" class="w-full" wire:model.defer="correo" />
                <x-jet-input-error for="correo" />
            </div>

        </x-slot>

        <x-slot name="footer">

            <x-jet-secondary-button class="mx-4" wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-button wire:click="guardar" wire:loading.remove wire:target="guardar">
                Crear Socio
            </x-jet-button>

            <span wire:loading wire:target="guardar">Procesando ...</span>

        </x-slot>
    </x-jet-dialog-modal>
</div>
