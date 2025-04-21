@props([
    'status' => null,
    'flag' => null
])

@php
    $badgeClass = '';
    $badgeText = '';
    
    if ($status === 'Approved') {
        $badgeClass = 'bg-green-100 text-green-800';
        $badgeText = 'Approved';
    } elseif ($flag === 'Red Flag') {
        $badgeClass = 'bg-red-100 text-red-800';
        $badgeText = 'Red Flag';
    } elseif ($status === 'Archived') {
        $badgeClass = 'bg-gray-100 text-gray-800';
        $badgeText = 'Archived';
    } elseif ($flag === 'Action Required') {
        $badgeClass = 'bg-yellow-100 text-yellow-800';
        $badgeText = 'Action Required';
    } elseif ($status === 'Pending') {
        $badgeClass = 'bg-blue-100 text-blue-800';
        $badgeText = 'Pending';
    }
@endphp

@if($badgeText)
    <span {{ $attributes->merge(['class' => 'px-2 inline-flex text-xs leading-5 font-semibold rounded-full ' . $badgeClass]) }}>
        {{ $badgeText }}
    </span>
@endif