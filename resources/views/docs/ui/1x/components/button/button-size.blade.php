@php
    $variants = ['primary', 'secondary', 'warning', 'danger', 'info', 'tertiary'];

    $sizes = ['sm', 'md', 'lg'];

@endphp
<div class="flex gap-y-4 gap-x-3 flex-wrap items-center">
    @foreach ($variants as $key => $value)
        <x-ui.component.button variant="{{ $value }}" size="{{ $sizes[$key % count($sizes)] }}">
            Button {{ ucfirst($value) }}
        </x-ui.component.button>
    @endforeach
</div>
