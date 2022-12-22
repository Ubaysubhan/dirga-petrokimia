<?php

namespace App\Exports;

use App\Core\Domain\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EksekutifExport implements FromView , ShouldAutoSize 
{
    public function __construct()
    {
        $this->users =  $users = User::with(['biodata','akta','suratizinusaha','armada','gudang','npwp'])->get()->where('biodata.daftar','Distributor eksekutif');
    }
   
    public function view(): View
    {
        return view('Admin.table', [
            'users' => $this->users
        ]);
    }
}