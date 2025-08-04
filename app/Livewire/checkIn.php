<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Entry;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;



class CheckIn extends Component
{
    // #[Layout('layouts.app')]
    public string $date;
    public $alreadyCheckedin = false; 


    
    public function store(){


        Entry::create([
            'time'=> now()->toTimeString(),
            'date'=> now() ->toDateString(),
            'present'=> 'true'
        ]); 

        if (!$this->alreadyCheckedin){
            return;
        }

        // $entry = Entry::pluck('time');
        
        // dd($entry);
    }

    public function mount(){
        $this->alreadyCheckedin = Entry::where('date' ,now()->toDateString())->exists();
    }
    public function render()
    {
        return view('livewire.check-in');
    }
}
