<?php

namespace App\Services;

use Illuminate\Support\Str;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\Attributes\AttributesExtension;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\MarkdownConverter;

class DocsService
{
    public static function markDownToHtml($page)
    {
        /*
    |--------------------------------------------------------------------------
    | Markdown Path
    |--------------------------------------------------------------------------
    */
        $path = resource_path("docs/1.x/{$page}.md");

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

        $config = [
            'attributes' => [
                'allow' => ['id', 'class', 'align'],
            ],
        ];

        $environment = new Environment($config);
        $environment->addExtension(new CommonMarkCoreExtension);

        // Add this extension
        $environment->addExtension(new AttributesExtension);

        $converter = new MarkdownConverter($environment);

        $result = $converter->convert($markdown);

        preg_match_all(
            '/<h2>(.*?)<\/h2>/',
            $result,
            $matches
        );

        foreach ($matches[1] as $heading) {
            $slug = Str::slug($heading);

            $result = str_replace(
                "<h2>{$heading}</h2>",
                "<h2 id=\"{$slug}\">{$heading}</h2>",
                $result
            );
        }

        return $result;

    }

    /*
     |--------------------------------------------------------------------------
     | Parse :::demo
     |--------------------------------------------------------------------------
     */
    public static function parseDemoTags($html, string $folder)
    {

        return preg_replace_callback(

            '/<p>\[\[(.*?):(.*?)\{(.*?)\}\]\]<\/p>/',

            function ($matches) use ($folder) {

                $page =
                 trim($matches[1]);

                $component =
                 trim($matches[2]);

                $nameFile =
                 trim($matches[3]);

                $page = 'docs.partials.'.$page;

                return view(
                    "$page",
                    compact(['component', 'folder', 'nameFile']),
                )->render();

            },

            $html

        );
    }
}
