<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductIndex extends Component
{
    public function render()
    {
        // return view('livewire.product-index')->extends('livewire.product-index')->section('content-products');
        return view('livewire.product-index');
    }
}
