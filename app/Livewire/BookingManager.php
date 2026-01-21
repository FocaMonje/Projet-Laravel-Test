<?php

namespace App\Livewire;

use App\Models\Booking;
use App\Models\Property;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class BookingManager extends Component
{
    public $property;
    public $start_date;
    public $end_date;
    public $message = '';
    public $messageType = '';

    public function mount(Property $property)
    {
        $this->property = $property;
    }

    public function rules()
    {
        return [
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
        ];
    }

    public function createBooking()
    {
        if (!Auth::check()) {
            $this->message = 'Debes iniciar sesión para hacer una reservación.';
            $this->messageType = 'error';
            return;
        }

        $this->validate();

        // Verificar disponibilidad
        $conflict = Booking::where('property_id', $this->property->id)
            ->where(function ($query) {
                $query->whereBetween('start_date', [$this->start_date, $this->end_date])
                    ->orWhereBetween('end_date', [$this->start_date, $this->end_date])
                    ->orWhere(function ($q) {
                        $q->where('start_date', '<=', $this->start_date)
                          ->where('end_date', '>=', $this->end_date);
                    });
            })
            ->exists();

        if ($conflict) {
            $this->message = 'Las fechas seleccionadas no están disponibles.';
            $this->messageType = 'error';
            return;
        }

        Booking::create([
            'user_id' => Auth::id(),
            'property_id' => $this->property->id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        $this->message = '¡Reservación creada exitosamente!';
        $this->messageType = 'success';
        $this->reset(['start_date', 'end_date']);
    }

    public function render()
    {
        return view('livewire.booking-manager');
    }
}
