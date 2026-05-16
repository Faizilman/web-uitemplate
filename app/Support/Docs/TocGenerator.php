<?php

namespace App\Support\Docs;

use Illuminate\Support\Str;

class TocGenerator
{
    public static function make(string $html): array
    {
        preg_match_all(
            '/<h2 id="(.*?)">(.*?)<\/h2>/',
            $html,
            $matches
        );

        $toc = [
        ];

        foreach ($matches[2] as $heading) {
            $slug = Str::slug($heading);

            $toc[] = [
                'title' => $heading,
                'slug' => $slug,
            ];

            $html = str_replace(
                "<h2>{$heading}</h2>",
                "<h2 id=\"{$slug}\">{$heading}</h2>",
                $html
            );
        }

        return $toc;
    }
}
