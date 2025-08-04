<?php
 
namespace App\Livewire;
 
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Entry;
use Illuminate\Support\Facades\Auth;

class Attendance extends Component
{
    public function render(){

        $user = Auth::user();
        $entries = Entry::where('user_id', $user->id)->get();

        // $entries = Entry::all();
        return view('livewire.attendance', ['entries' => $entries, 'user' => $user]);

    }

}