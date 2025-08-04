<?php
 
namespace App\Livewire;
 
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Entry;


class Attendance extends Component
{
    public function render(){

        $entries = Entry::all();
        return view('livewire.attendance', ['entries' => $entries]);

    }

}