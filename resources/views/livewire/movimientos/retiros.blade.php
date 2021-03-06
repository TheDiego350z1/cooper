<div>
    <x-jet-nav-link class="cursor-pointer" :active="false" wire:click="$set('open', true)">
        Retirar
    </x-jet-nav-link>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">

            <h3 wire:target="error">Retiro de cuenta</h3>

            @if($error)
                <span>Error: Saldo insuficiente en la cuenta</span>
            @endif

        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label>Buscar Cuetna</x-jet-label>
                <x-jet-input
                    class="w-1/2"
                    type="text"
                    wire:model="buscar_cuenta"
                    wire:keydown.enter="buscar"
                    placeholder="Buscar cuenta por Nº de Cuenta"
                />
                <i class="fa-solid fa-magnifying-glass cursor-pointer" name="buscar" wire:click="buscar"></i>
            </div>

            {{-- Selección de cuenta --}}
            <div class="mb-4">
                <select class="select select-bordered w-full overflow-hidden" size="3" required wire:model="cuenta_select">

                    @foreach ($cuentas as $cuenta)
                        <option value="{{$cuenta->id}}">
                            {{$cuenta->no_cuenta}} | {{$cuenta->socio->nombres}} {{$cuenta->socio->apellidos}}
                        </option>
                    @endforeach

                </select>
            </div>

            <div class="mb-4 flex">

                {{-- Monto de Retiro --}}
                <div class="w-1/2">
                    <x-jet-label>Monto</x-jet-label>
                    <input
                        type="text"
                        class="input input-bordered w-full"
                        wire:model.defer="monto"
                        required
                        placeholder="$0.00"
                    />
                </div>

                {{-- Tipo de retiro --}}
                <div class="w-1/2">
                    <x-jet-label>Tipo</x-jet-label>
                    <select class="select select-bordered w-full" required wire:model.defer="tipo">
                        <option>Tipo de retiro</option>
                        @foreach($tiposMovimiento as $movimiento)
                            <option value="{{ $movimiento->id }}">
                                {{ $movimiento->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

            </div>

            {{-- Descripción del retiro --}}
            <div class="mb-4">
                <x-jet-label>
                    Descripción
                </x-jet-label>
                <textarea
                    rows="4"
                    class="textarea textarea-bordered w-full"
                    wire:model.defer="descripcion"
                    placeholder="Descripción del retiro"
                >
                </textarea>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button class="mx-4" wire:click="$set('open', false)" >
                cancelar
            </x-jet-secondary-button>
            <x-jet-button  wire:click="retirar">
                retirar
            </x-jet-button>
            <span wire:loading wire:target="retirar">Procesando ...</span>

        </x-slot>
    </x-jet-dialog-modal>
</div>
