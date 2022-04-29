<div>

    <x-jet-button wire:click="$set('open_abono', true)">
        abonar
    </x-jet-button>

    <x-jet-dialog-modal wire:model="open_abono">
        <x-slot name="title">
            <span>Abono a cuenta de {{$cuenta->socio->nombres . " " . $cuenta->socio->apellidos}}</span>
            <br>
            <span>Cuenta # {{ $cuenta->no_cuenta }}</span>
        </x-slot>

        <x-slot name="content">
            <div class="bm-4">
                <x-jet-label>
                    Monto
                </x-jet-label>
                <x-jet-input type="number" class="w-full" wire:model="monto" />
            </div>

            <div class="bm-4">

                <x-jet-label>
                    Tipo
                </x-jet-label>
                <select class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                wire:model="tipo">
                    <option value=""></option>
                    @foreach($tiposMovimientos as $movimiento)
                    <option value="{{ $movimiento->id }}" >{{$movimiento->nombre}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <x-jet-label>
                    Descripción
                </x-jet-label>
                <textarea rows="4" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"  wire:model="descripcion"></textarea>
            </div>


        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button class="mx-4" wire:click="$set('open_abono', false)" >
                cancelar
            </x-jet-secondary-button>
            <x-jet-button  wire:click="abonar">
                abonar
            </x-jet-button>
            <span wire:loading wire:target="abonar">Procesando ...</span>


        </x-slot>
    </x-jet-dialog-modal>
</div>
