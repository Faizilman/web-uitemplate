<?php

namespace App\Support\Docs;

use Illuminate\Support\Str;

class TocGenerator
{
    public static function make(string $html): array
    {
        preg_match_all(
            '/<h3 id="(.*?)">(.*?)<\/h3>/',
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
                "<h3>{$heading}</h3>",
                "<h3 id=\"{$slug}\">{$heading}</h3>",
                $html
            );
        }

        return $toc;
    }
}
