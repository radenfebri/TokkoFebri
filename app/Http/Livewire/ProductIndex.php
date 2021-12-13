<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if($this->search !== null) {
            $products = Product::where('nama', 'like', '%' .$this->search. '%' )->paginate(8);
        } else {
            $products = Product::paginate(8);
        }

        return view('livewire.product-index', [
            'products' => $products,
        ])->extends('layouts.app')->section('content');
    }
}
