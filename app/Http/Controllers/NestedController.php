<?php

namespace App\Http\Controllers;

class NestedController extends Controller
{
    public function index()
    {
        $categories = [
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

        return view('nested', compact('categories'));
    }
}
