<?php

namespace App\Services;

use League\CommonMark\CommonMarkConverter;

class DocsService
{
    public static function markDownToHtml($page)
    {
        /*
    |--------------------------------------------------------------------------
    | Markdown Path
    |--------------------------------------------------------------------------
    */
        $path = resource_path("docs/v1/{$page}.md");

        abort_unless(
            file_exists($path),
            404
        );

        /*
        |--------------------------------------------------------------------------
        | Read Markdown
        |--------------------------------------------------------------------------
        */

        $markdown =
            file_get_contents($path);

        /*
        |--------------------------------------------------------------------------
        | Markdown → HTML
        |--------------------------------------------------------------------------
        */

        $converter =
            new CommonMarkConverter;

        return $converter->convert($markdown);

    }

    /*
     |--------------------------------------------------------------------------
     | Parse :::demo
     |--------------------------------------------------------------------------
     */
    public static function parseDemoTags($html, string $folder, string $page)
    {

        return preg_replace_callback(

            '/<p>\[\[demo\:(.*?)\]\]<\/p>/',

            function ($matches) use ($folder, $page) {

                $component =
                 trim($matches[1]);

                $page = 'docs.components.'.$page;

                return view(
                    "{$page}",
                    compact(['component', 'folder']),
                )->render();

            },

            $html

        );
    }
}
