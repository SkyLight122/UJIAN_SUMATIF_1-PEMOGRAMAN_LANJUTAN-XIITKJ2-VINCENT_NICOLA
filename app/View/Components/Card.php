<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $nama;
    public $username;
    public $deskripsi;
    public $foto;
    public function __construct($id, $nama, $username, $deskripsi, $foto)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->username = $username;
        $this->deskripsi = $deskripsi;
        $this->foto = $foto;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
