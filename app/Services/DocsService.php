<?php

namespace App\Services;

use Illuminate\Support\Str;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\Attributes\AttributesExtension;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\Table\TableExtension;
use League\CommonMark\MarkdownConverter;

class DocsService
{
    public static function markDownToHtml($folder, $page)
    {
        /*
    |--------------------------------------------------------------------------
    | Markdown Path
    |--------------------------------------------------------------------------
    */
        $path = resource_path("docs/1.x/{$folder}/{$page}.md");

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

        // Define your configuration, if needed
        $config = [
            'attributes' => [
                'allow' => ['id', 'class', 'align'],
            ],
        ];

        $environment = new Environment($config);
        $environment->addExtension(new CommonMarkCoreExtension);
        $environment->addExtension(new TableExtension);

        // Add this extension
        $environment->addExtension(new AttributesExtension);

        $converter = new MarkdownConverter($environment);

        $result = $converter->convert($markdown);

        preg_match_all(
            '/<h3>(.*?)<\/h3>/',
            $result,
            $matches
        );

        foreach ($matches[1] as $heading) {
            $slug = Str::slug($heading);

            $result = str_replace(
                "<h3>{$heading}</h3>",
                "<h3 id=\"{$slug}\">{$heading}</h3>",
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
