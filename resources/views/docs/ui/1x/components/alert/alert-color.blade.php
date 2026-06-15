@php


$colors = [

    'primary',

    'neutral',

    'success',

    'info',

    'warning',

    'danger',

];

$descriptions = [

    'success' => 'Displays positive feedback for completed actions or successful operations.',

    'info' => 'Provides additional information, updates, or contextual guidance to users.',

    'warning' => 'Highlights situations that require attention but do not prevent continuing.',

    'danger' => 'Communicates errors, failures, or destructive actions that need immediate attention.',

    'neutral' => 'Displays general-purpose messages without a specific semantic meaning.',
    
    'primary' => 'Displays default view.',

];

@endphp
<div 

class="space-y-6 w-full" >

        @foreach ($colors as $color)
        <x-ui.component.alert
            color="{{ $color }}"
            animation="scale"
            {{-- :auto-close="8000" --}}
            {{-- show-progress --}}
            {{-- pause-on-hover --}}
            >
            <x-ui.component.alert.alert-title>
                {{ ucfirst($color) }} Color
            </x-ui.component.alert.alert-title>
            <x-ui.component.alert.alert-description>
                {{ $descriptions[$color] }}
            </x-ui.component.alert.alert-description>
        </x-ui.component.alert>
        @endforeach

</div>