<?php

namespace App\Http\Controllers;

use App\Services\DocsService;
use App\Support\Docs\DocsNavigation;
use App\Support\Docs\TocGenerator;

class DocsController extends Controller
{


    public function __construct(
        protected DocsService $docsService
    ) {}


    public function show($folder, $page)
    {

        $html = $this->docsService->markDownToHtml($page);

        $toc = TocGenerator::make($html);
        $html = $this->docsService->parseDemoTags($html, $folder);


        $next = DocsNavigation::getNext($page); 
        $prev = DocsNavigation::getPrev($page); 

        return view(
            'layouts.docs',
            [
                'page' => "{$page}",
                'content' => $html,
                'toc' => $toc,
                'navigation' => [
                    "next" => $next,
                    "prev" => $prev
                ]
            ]
        );

    }

    // public function showCopyCode($folder, $page)
    // {

    //     $html = $this->docsService->markDownToHtml($page);

    //     $html = $this->docsService->parseDemoTags($html, $folder, 'copy-code');

    //     return view(
    //         'layouts.docs',
    //         [
    //             'title' => "{$page} UI template",
    //             'content' => $html,
    //         ]
    //     );

    // }
}
