@php

    /*
|--------------------------------------------------------------------------
| Preview View
|--------------------------------------------------------------------------
*/

    $preview = "docs.ui.1x.{$folder}.{$component}.{$nameFile}";

    /*
|--------------------------------------------------------------------------
| Source Paths
|--------------------------------------------------------------------------
*/

    $htmlPath = resource_path("views/docs/1.x/{$folder}/{$component}/{$nameFile}.html");

    $bladePath = resource_path("views/docs/1.x/{$folder}/{$component}/{$nameFile}.blade.php");

    $vuePath = resource_path("views/docs/1.x/{$folder}/{$component}/{$nameFile}.vue");

    /*
|--------------------------------------------------------------------------
| Tabs
|--------------------------------------------------------------------------
*/

    $tabs = [];

    if (file_exists($htmlPath)) {
        $tabs['html'] = trim(file_get_contents($htmlPath));
    }

    if (file_exists($bladePath)) {
        $tabs['blade'] = trim(file_get_contents($bladePath));
    }

    if (file_exists($vuePath)) {
        $tabs['vue'] = trim(file_get_contents($vuePath));
    }

@endphp

<div class="w-full max-w-4xl mx-auto mt-10 border border-slate-700 rounded-xl bg-[#010101] shadow-2xl">

    <div class="p-12 flex justify-center items-center bg-center border-b border-slate-700">
        @include($preview)
    </div>

    <x-docs.tabs :tabs="$tabs" />
</div>
