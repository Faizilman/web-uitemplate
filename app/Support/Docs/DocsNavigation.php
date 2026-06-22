<?php

namespace App\Support\Docs;

use phpDocumentor\Reflection\Types\Boolean;

class DocsNavigation
{
    
    private static $urlLinks = [
        'quick-start' => [
            'title' => 'Quick Start',
            'desc' => 'start 1 second',
            'folder' => 'getting-started',
            'page' => 'quick-start',
        ],
        'installation' => [
            'title' => 'Installation',
            'desc' => 'installation klik',
            'folder' => 'getting-started',
            'page' => 'installation',
        ],
        'according' => [
            'title' => 'According',
            'desc' => 'according klik',
            'folder' => 'components',
            'page' => 'according',
        ],
        'alert' => [
            'title' => 'alert',
            'desc' => 'alert klik',
            'folder' => 'components',
            'page' => 'alert',
        ],
        'button' => [
            'title' => 'Button',
            'desc' => 'button klik',
            'folder' => 'components',
            'page' => 'button',
        ],
        'date-picker' => [
            'title' => 'Date Picker',
            'desc' => 'Date Picker klik',
            'folder' => 'components',
            'page' => 'date-picker',
        ],
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