<?php

namespace App\Http\Controllers;

use App\Services\DocsService;

class DocsController extends Controller
{
    public function __construct(
        protected DocsService $docsService
    ) {}

    public function show($folder, $page)
    {

        $html = $this->docsService->markDownToHtml($page);

        $html = $this->docsService->parseDemoTags($html, $folder, 'demo');

        return view(
            'layouts.docs',
            [
                'title' => "Component - {$page}",
                'content' => $html,
            ]
        );

    }
}
