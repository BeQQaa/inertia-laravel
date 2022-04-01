<?php


namespace App\Helper;


class PaginationHelper
{
    public static function process(?string $index): string
    {
        if (empty($index)) {
            return '';
        } else {
            return $index;
        }
    }

    public static function linksHandler(mixed $peoples, string $uri)
    {
        $baseUri = parse_url($uri);

        if ($peoples['next'] != null) {
            $externalUri = (parse_url($peoples['next']));
            $peoples['next'] = preg_replace('/\?+([^\n]+)/', '', $uri) .'?'. $externalUri['query'];
        }

        if ($peoples['previous'] != null) {
            $externalUri = (parse_url($peoples['previous']));
            $peoples['previous'] = preg_replace('/\?+([^\n]+)/', '', $uri) .'?'. $externalUri['query'];
        }

        return $peoples;
    }
}
