<?php

namespace App\Livewire;

use App\Models\PPMP;

use Livewire\Component;

class LoadPPMP extends Component
{

    public $load_ppmp = [];
    public $year = [];

    #College office List#

    public $college_office = ['CASBE', 'CBA', 'CA', 'CTHM', 'CEng', 'CISTM', 'CHASS', 'CED', 'CN', 'CPT', 'CS', 'CL', 'GSL', 'CM', 'CPA'];

    public function mount($college_office = null, $year = null) {
        $this->load_ppmp = PPMP::when($college_office, function ($query, $college_office) {
            return $query->where('college_office', $college_office);
        })
        ->when($year, function ($query, $year) {
            return $query->whereYear('created_at', $year);
        })
        ->get();

        $this->year = $this->load_ppmp->map(function ($ppmp) {
            return $ppmp->created_at->format('Y');
        })->unique()->values();
    }

    public function goBack()
    {
        return redirect()->to('/chart');
    }
    
    public function render()
    {
        return view('livewire.load-p-p-m-p');
    }
}
