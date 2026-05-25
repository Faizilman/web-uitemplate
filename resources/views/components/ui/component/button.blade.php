@props([
    /*
|--------------------------------------------------------------------------
| Appearance
|--------------------------------------------------------------------------
*/
    'variant' => 'primary',
    'size' => 'md',
    /*
|--------------------------------------------------------------------------
| State
|--------------------------------------------------------------------------
*/
    'fullWidth' => false,
    'isDisabled' => false,
    'isPending' => false,
    'isIconOnly' => false,
])


@php

    /*
|--------------------------------------------------------------------------
| Base
|--------------------------------------------------------------------------
*/

    $base = '
inline-flex items-center justify-center gap-x-1 font-medium transition-all duration-200
active:scale-[0.98]
focus:outline-none focus-visible:ring-4';

    /*
|--------------------------------------------------------------------------
| Variant
|--------------------------------------------------------------------------
*/

    $variants = [
        'primary' => '
bg-blue-700 text-white hover:bg-blue-800 focus-visible:ring-blue-300 shadow-sm
dark:bg-blue-500 dark:hover:bg-blue-600
',

        'secondary' => '
bg-slate-100 text-slate-900 hover:bg-slate-200 focus-visible:ring-slate-300
dark:bg-slate-800 dark:text-white dark:hover:bg-slate-700
',

        'tertiary' => '
bg-zinc-100/80 text-zinc-700 hover:bg-zinc-200 focus-visible:ring-zinc-300 shadow-sm
dark:bg-zinc-800 dark:text-zinc-200 dark:hover:bg-zinc-700
',

        'outline' => '
border border-slate-200 text-slate-700 hover:bg-slate-50 focus-visible:ring-slate-300
dark:border-slate-700 dark:text-slate-200 dark:hover:bg-slate-900
',

        'ghost' => '
text-slate-700 hover:bg-slate-100
dark:text-slate-300 dark:hover:bg-slate-900
',

        'info' => '
        bg-cyan-500 hover:bg-cyan-600 text-white
',

        'danger' => '
bg-red-600 text-white hover:bg-red-700 focus-visible:ring-red-300
',
        'dangerSoft' => '
bg-red-700/20 border border-red-500/50 text-red-500/80 hover:bg-red-700/30 hover:border-red-700 focus-visible:ring-red-300
',

        'warning' => '
bg-amber-500 text-slate-900 hover:bg-amber-600 focus-visible:ring-amber-300 shadow-sm
dark:bg-amber-500 dark:hover:bg-amber-600 dark:text-slate-900
',
    ];

    /*
|--------------------------------------------------------------------------
| Size
|--------------------------------------------------------------------------
*/
    $sizes = [
        'sm' => 'h-9 px-4 text-sm',
        'md' => 'h-10 px-4 text-sm',
        'lg' => 'h-11 px-5 text-base',
    ];

    /*
|--------------------------------------------------------------------------
| Icon Only Size
|--------------------------------------------------------------------------
*/

    $iconSizes = [
        'sm' => 'h-9 w-9 p-0 text-xs',
        'md' => 'h-11 w-11 p-0 text-sm',
        'lg' => 'h-12 w-12 p-0 text-base',
    ];

    /*
|--------------------------------------------------------------------------
| Icon Only
|--------------------------------------------------------------------------
*/

    $iconOnly = $isIconOnly ? 'aspect-square rounded-full px-0 shrink-0' : '';

    /*
|--------------------------------------------------------------------------
| Shape
|--------------------------------------------------------------------------
*/

    $shape = $isIconOnly ? 'rounded-full' : 'rounded-2xl';

    $disabled = $isDisabled || $isPending ? 'disabled:cursor-not-allowed disabled:opacity-50' : ' ';

    $class =
        $base .
        $variants[$variant] .
        ($isIconOnly ? $iconSizes[$size] : $sizes[$size]) .
        ' ' .
        $disabled .
        ' ' .
        $shape .
        ($fullWidth ? ' w-full' : '');
@endphp

<button type="{{ $attributes->get('type', 'button') }}"
    {{ $attributes->merge([
        'class' => $class,
        'aria-disabled' => $isDisabled || $isPending ? 'true' : 'false',
        'aria-busy' => $isPending ? 'true' : 'false',
    ]) }}
    @if ($isDisabled || $isPending) disabled @endif>

    @if ($isPending)
        {{ $pending }}
    @endif

    {{ $slot }}

</button>
