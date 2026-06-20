@props([
    'type' => 'field',
    'variant' => 'soft',
    'color' => 'primary',
    'label' => 'Date',
    'name' => 'date',
])

@if($type === 'field')

    @include('components.ui.component.date-picker.field',[
        'color'=>$color,
        'variant'=>$variant,
        'label'=>$label,
        'name'=>$name
    ])

@else

    @include('components.ui.component.date-picker.calendar',[
        'color'=>$color,
        'variant'=>$variant,
        'label'=>$label,
        'name'=>$name
    ])

@endif