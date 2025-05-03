<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;

    public $search = '';
    public $statusFilter = null;
    public $packageFilter = null;

    protected $queryString = [
        'search' => ['except' => ''],
        'statusFilter' => ['except' => null],
        'packageFilter' => ['except' => null],
    ];

    public function getStatCards()
    {
        // In a real app, these would come from the database
        return [
            [
                'title' => 'Active Now',
                'count' => 212,
                'subtitle' => 'Screening in progress',
                'icon' => 'activity',
                'color' => 'blue',
                'link' => '#'
            ],
            [
                'title' => 'Approved',
                'count' => 209,
                'subtitle' => 'Approved Applicants',
                'icon' => 'check',
                'color' => 'green',
                'link' => '#'
            ],
            [
                'title' => 'Smart Hire',
                'count' => 221,
                'subtitle' => 'Fast Track Candidates',
                'icon' => 'users',
                'color' => 'blue',
                'link' => '#'
            ],
            [
                'title' => 'Action Required',
                'count' => 03,
                'subtitle' => 'Action Required',
                'icon' => 'alert-triangle',
                'color' => 'yellow',
                'link' => '#'
            ],
            [
                'title' => 'Review Flags',
                'count' => 04,
                'subtitle' => 'Review Red Flags',
                'icon' => 'flag',
                'color' => 'red',
                'link' => '#'
            ],
            [
                'title' => 'Archived',
                'count' => 06,
                'subtitle' => 'Historical Records',
                'icon' => 'archive',
                'color' => 'gray',
                'link' => '#'
            ],
        ];
    }

    public function getApplicants()
    {
        // In a real app, this would be a database query
        return [
            [
                'id' => 1,
                'name' => 'Liam Johnson',
                'email' => 'liam@example.com',
                'package' => 'Basic',
                'status' => 'Approved',
                'flag' => null
            ],
            [
                'id' => 2,
                'name' => 'Olivia Smith',
                'email' => 'olivia@example.com',
                'package' => 'Standard',
                'status' => 'Review',
                'flag' => 'Red Flag'
            ],
            [
                'id' => 3,
                'name' => 'Noah Williams',
                'email' => 'noah@example.com',
                'package' => 'Individual',
                'status' => 'Archived',
                'flag' => null
            ],
            [
                'id' => 4,
                'name' => 'Emma Brown',
                'email' => 'emma@example.com',
                'package' => 'Basic',
                'status' => 'Approved',
                'flag' => null
            ],
            [
                'id' => 5,
                'name' => 'Liam Johnson',
                'email' => 'liam2@example.com',
                'package' => 'Individual',
                'status' => 'Approved',
                'flag' => null
            ],
            [
                'id' => 6,
                'name' => 'Liam Johnson',
                'email' => 'liam3@example.com',
                'package' => 'Standard',
                'status' => 'Pending',
                'flag' => 'Action Required'
            ],
            [
                'id' => 7,
                'name' => 'Olivia Smith',
                'email' => 'olivia2@example.com',
                'package' => 'Individual',
                'status' => 'Review',
                'flag' => 'Red Flag'
            ],
        ];
    }

    public function getChartData()
    {
        // In a real app, this would come from aggregated database queries
        return [
            ['name' => 'Approved', 'value' => 26, 'color' => '#10B981'],
            ['name' => 'Red Flag', 'value' => 11, 'color' => '#EF4444'],
            ['name' => 'Smart Hire', 'value' => 24, 'color' => '#3B82F6'],
            ['name' => 'Active', 'value' => 39, 'color' => '#6366F1']
        ];
    }

    public function getFilteredApplicants()
    {
        $applicants = collect($this->getApplicants());

        if (!empty($this->search)) {
            $applicants = $applicants->filter(function ($item) {
                return stripos($item['name'], $this->search) !== false ||
                       stripos($item['email'], $this->search) !== false;
            });
        }

        if ($this->statusFilter) {
            $applicants = $applicants->filter(function ($item) {
                return $item['status'] === $this->statusFilter;
            });
        }

        if ($this->packageFilter) {
            $applicants = $applicants->filter(function ($item) {
                return $item['package'] === $this->packageFilter;
            });
        }

        return $applicants->values()->all();
    }

    public function resetFilters()
    {
        $this->reset(['search', 'statusFilter', 'packageFilter']);
    }

    public function render()
    {
        return view('livewire.dashboard', [
            'statCards' => $this->getStatCards(),
            'applicants' => $this->getFilteredApplicants(),
            'chartData' => $this->getChartData(),
            'total' => 573
        ])->layout('layouts.dashboard');
    }
}
