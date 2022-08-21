<?php

namespace Database\Seeders;

use App\Models\Party;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $party = [
            'PDP',
            'APC',
            'SDP',
            'ICP',
            'NNPC'
        ];

        foreach ($party as $key => $value) {
            $already_exist = Party::where('name', $value)->first();
            if($already_exist == null){
                $role = new Party();
                $role->name = $value;
                $role->save();
            }
        }
    }
}
