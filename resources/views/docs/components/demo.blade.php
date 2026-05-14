@php

    /*
|--------------------------------------------------------------------------
| Preview View
|--------------------------------------------------------------------------
*/

    $preview = "docs.examples.{$component}";

    /*
|--------------------------------------------------------------------------
| Source Paths
|--------------------------------------------------------------------------
*/

    $bladePath = resource_path("views/docs/1.x/{$folder}/{$component}/{$component}.blade.php");

    $vuePath = resource_path("views/docs/1.x/{$folder}/{$component}/{$component}.vue");

    /*
|--------------------------------------------------------------------------
| Tabs
|--------------------------------------------------------------------------
*/

    $tabs = [];

    if (file_exists($bladePath)) {
        $tabs['blade'] = trim(file_get_contents($bladePath));
    }

    if (file_exists($vuePath)) {
        $tabs['vue'] = trim(file_get_contents($vuePath));
    }

@endphp

<div class="
        border
        rounded-2xl
        overflow-hidden
        my-8
    ">



    {{-- Preview --}}
    <div class="
            p-8
            border-b
            bg-white
            dark:bg-zinc-950
        ">

        @include($preview)
    </div>

    <x-docs.tabs :tabs="$tabs" />



</div>
