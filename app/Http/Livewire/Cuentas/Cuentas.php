<?php

namespace App\Http\Livewire\Cuentas;

use Livewire\Component;

use App\Models\Ctr_cuenta;

class Cuentas extends Component
{

    public  $buscarCuenta;

    protected $listeners = ['render' => 'render'];

    public function updatingBuscarCuenta()
    {
        $this->resetPage();
    }

    public function render()
    {
        $cuentas = Ctr_cuenta::where('no_cuenta', 'like', '%' . $this->buscarCuenta . '%')
                            ->paginate(5);

        return view('livewire.cuentas.cuentas', compact('cuentas'));
    }

}
