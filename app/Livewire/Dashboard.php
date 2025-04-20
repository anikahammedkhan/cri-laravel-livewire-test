<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $userName = 'John Doe';
    public $stats = [
        'totalUsers' => 2340,
        'activeProjects' => 12,
        'revenue' => '$48,960',
        'growth' => '+12.5%'
    ];

    public function render()
    {
        return view('livewire.dashboard')->layout('layouts.app');
    }
}