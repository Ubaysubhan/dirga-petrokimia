<?php

namespace App\Exports;

use App\Core\Domain\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PetroganikExport implements FromView , ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct()
    {
        $this->users =  User::with(['biodata','akta','suratizinusaha','armada','gudang','npwp'])->get()->where('biodata.daftar','Petroganik');
    }

    public function view(): View
    {
        return view('Admin.table', [
            'users' => $this->users
        ]);
    }
}
