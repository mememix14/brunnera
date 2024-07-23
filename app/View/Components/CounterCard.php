<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CounterCard extends Component
{
    public $title;
    public $icon;
    public $count;
    public $color;

    public function __construct($title, $icon, $count, $color)
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->count = $count;
        $this->color = $color;
    }

    public function render()
    {
        return view('components.counter-card');
    }
}
