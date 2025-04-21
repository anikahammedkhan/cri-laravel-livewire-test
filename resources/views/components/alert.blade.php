@props([
    'type' => 'info', // info, success, warning, error
    'title',
    'count' => null,
    'link' => '#',
    'linkText' => 'View Details',
])

@php
    $colorClasses = [
        'info' => 'blue',
        'success' => 'green',
        'warning' => 'yellow',
        'error' => 'red',
    ];

    $color = $colorClasses[$type] ?? 'blue';

    $iconMap = [
        'info' =>
            '
            <svg class="h-8 w-8 text-' .
            $color .
            '-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
            </svg>
        ',
        'success' =>
            '
            <svg class="h-8 w-8 text-' .
            $color .
            '-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
        ',
        'warning' =>
            '
            <svg class="h-8 w-8 text-' .
            $color .
            '-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
        ',
        'error' =>
            '
            <svg class="h-8 w-8 text-' .
            $color .
            '-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
            </svg>
        ',
    ];

    $icon = $iconMap[$type] ?? $iconMap['info'];
@endphp

<div
    {{ $attributes->merge(['class' => 'bg-white shadow rounded-lg overflow-hidden border-l-4 border-' . $color . '-500']) }}>
    <div class="p-5">
        <div class="flex">
            <div class="flex-shrink-0">
                {!! $icon !!}
            </div>
            <div class="ml-4">
                <h3 class="text-lg font-medium text-{{ $color }}-800">{{ $title }}</h3>
                <div class="mt-2 text-{{ $color }}-700">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    <div class="bg-{{ $color }}-50 px-5 py-3">
        <div class="text-sm flex justify-between items-center">
            @if ($count)
                <span class="font-medium text-{{ $color }}-800">{{ sprintf('%02d', $count) }}</span>
            @endif
            <a href="{{ $link }}"
                class="font-medium text-{{ $color }}-800 hover:text-{{ $color }}-900 flex items-center">
                <span>{{ $linkText }}</span>
                <svg class="ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</div>
