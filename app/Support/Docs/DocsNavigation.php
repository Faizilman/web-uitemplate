<?php

namespace App\Support\Docs;

use phpDocumentor\Reflection\Types\Boolean;

class DocsNavigation
{

    private static $urlLinks = [
        'quick-start' => [
            'title' => 'quick-start',
            'desc' => 'quick-start klik',
            'folder' => 'getting-started',
            'page' => 'quick-start',
        ],
        'button' => [
            'title' => 'button',
            'desc' => 'button klik',
            'folder' => 'components',
            'page' => 'button',
        ],
        'installation' => [
            'title' => 'installation',
            'desc' => 'installation klik',
            'folder' => 'getting-started',
            'page' => 'installation',
        ]
    ];

    public static function getNamePage(string $page, bool $next = false){
        $keys = array_keys(self::$urlLinks);
        $key = array_search($page, $keys);
    
        if($next){
            return $keys[$key + 1] ?? null;
        }

        return $keys[$key - 1] ?? null;
    }
    
    public static function getNext(string $page) {
        $pageName = self::getNamePage($page, true);

        return self::$urlLinks[$pageName] ?? null;
        }
        
    public static function getPrev(string $page){
        $pageName = self::getNamePage($page, false);
        
        return self::$urlLinks[$pageName] ?? null;
    }
}