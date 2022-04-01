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
        if (isset($baseUri['port'])){
            $baseUri['port'] = ':' . $baseUri['port'];
        }
        if ($peoples['next'] != null) {
            $externalUri = (parse_url($peoples['next']));
            $peoples['next'] = $baseUri['scheme'] . '://' . $baseUri['host'] . $baseUri['port'] . $baseUri['path'] . '?' . $externalUri['query'];
        }
        if ($peoples['previous'] != null) {
            $externalUri = (parse_url($peoples['previous']));
            $peoples['previous'] = $baseUri['scheme'] . '://' . $baseUri['host'] . $baseUri['port'] . $baseUri['path'] . '?' . $externalUri['query'];
        }
//        dd($peoples);
        return $peoples;
    }
}
