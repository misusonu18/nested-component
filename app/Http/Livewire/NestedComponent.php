<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NestedComponent extends Component
{
    public $categories = [
        'id' => 1,
        'name' => 'Clothes',
        'parent_id' => [
            'id' => 2,
            'name' => 'Men',
            'parent_id' => [
                'id' => 3,
                'name' => 'Shirt',
                'parent_id' => [
                    'id' => 4,
                    'name' => 'Levies',
                    'parent_id' => []
                ]
            ]
        ],
    ];

    public function render()
    {
        return view('livewire.nested-component')->extends('layouts.app')->slot('content');
    }
}
