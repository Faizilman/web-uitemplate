<div
    {{
        $attributes->merge([
            'class' => '
                mt-2
                text-sm
                leading-relaxed
                opacity-80
            '
        ])
    }}
>
    {{ $slot }}
</div>