<?php

// え？このファイルいらないの？？
// この時点では検索機能が動かない・・・

namespace App\Livewire;

use Livewire\Component;

class SearchBox extends Component
{
    public $search = '';

    public function updatedSearch()
    {
        // dispatchメソッドの呼び出し方を修正し、searchイベントにsearchプロパティの値を含める
        $this->dispatch('search', ['search' => $this->search]);
    }

    public function update()
    {
        $this->dispatch('search', ['search' => $this->search]);
    }

    public function render()
    {
        return view('livewire.search-box');
    }
}
