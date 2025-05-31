<?php

namespace Database\Seeders;

use App\Models\Ward;
use App\Models\StateNameWithCode;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MastersSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Wards Seeder
        $wards = [
            [
                'id' => 1,
                'name' => 'Ward 1',
                'initial' => 'w1',
            ],
            [
                'id' => 2,
                'name' => 'Ward 2',
                'initial' => 'w2',
            ]
        ];

        foreach ($wards as $ward) {
            Ward::updateOrCreate([
                'id' => $ward['id']
            ], [
                'id' => $ward['id'],
                'name' => $ward['name'],
                'initial' => $ward['initial']
            ]);
        }
        // state

         $states = [
            [
                'id' => 1,
                'stateCode' => '27',
                'stateName' => 'Maharashtra',
            ]
        ];

        foreach ($states as $state) {
            StateNameWithCode::updateOrCreate([
                'id' => $state['id']
            ], [
                'id' => $state['id'],
                'stateCode' => $state['stateCode'],
                'stateName' => $state['stateName']
            ]);
        }

       
    }
}
