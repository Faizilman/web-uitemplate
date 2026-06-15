@php
    $variants = [

    'soft',
    'bordered',

];


$descriptions = [

    'info' => 'Provides additional information, updates, or contextual guidance to users.',

];

@endphp
<div 

class="space-y-6 w-full" >

    @foreach ($variants as $variant)
        <x-ui.component.alert
            variant="{{ $variant }}"
            color="info"
            animation="scale"
            {{-- :auto-close="8000" --}}
            {{-- show-progress --}}
            {{-- pause-on-hover --}}
            >
            <x-ui.component.alert.alert-title>
                {{ $variant }} Variant
            </x-ui.component.alert.alert-title>
            <x-ui.component.alert.alert-description>
                {{ $descriptions['info'] }}
            </x-ui.component.alert.alert-description>
        </x-ui.component.alert>
    @endforeach

</div>