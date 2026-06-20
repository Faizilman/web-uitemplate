@php

    $variants = [
        'soft', 
        'line'
    ];

    $array = [
        [
            'name' => 'primary',
            'color' => 'primary'
        ],
        [
            'name' => 'tertiary',
            'color' => 'tertiary'
        ],
        [
            'name' => 'info',
            'color' => 'info'
        ],
        [
            'name' => 'warning',
            'color' => 'warning'
        ],
    ];
@endphp
<div class="flex flex-wrap">
    @foreach (['calendar', 'field'] as $type)
        @foreach ($variants as $variant)
            @foreach ($array as $a)
                <x-ui.component.date-picker type="{{ $type }}" variant="{{ $variant }}" color="{{ $a['color'] }}" label="{{ $type . ' ' . $a['name'] . ' '. $variant }}" name="{{ $a['name'] }}"/>
            @endforeach
        @endforeach
    @endforeach
</div>
