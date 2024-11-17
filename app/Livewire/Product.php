<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Item;

class Product extends Component
{
    public $name, $category, $description, $cost_price, $unit_price, $image;
    public function store(){
        $this->validate();
        Item::create([
            'name' => $this->name,
            'category' => $this->category,
            'description' => $this->description,
            'cost_price' => $this->cost_price,
            'unit_price' => $this->unit_price,
            'image' => $this->image
        ]); 
    }
    public function rules() {
        return [
            'name' => 'required|string',
            'category' => 'required|string',
            'cost_price' => 'required|numeric',
            'unit_price' => 'required|numeric',
            'image' => 'required',
        ];
    }
    public function render()
    {
        return view('livewire.product');
    }
}
