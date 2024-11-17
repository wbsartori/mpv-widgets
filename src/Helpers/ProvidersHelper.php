<?php

namespace Dashboards\Helpers;

class ProvidersHelper
{
    private static array $providers;

    public static function make(array $providers): ProvidersHelper
    {
        self::$providers = $providers;
        return new self();
    }

    public function handleCards(): array
    {
        $serverUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if ($serverUri !== '/') {
            $uri = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        } else {
            $uri = $serverUri;
        }
        $charts = [];
        $newUri = '';
        foreach (self::$providers['providers'] as $key => $items) {
            foreach ($items['cards'] as $provider) {
                if ($key === $uri) {
                    $newUri = $key;
                    $class = new $provider();
                    $charts[] = $class->render();
                }
            }
        }
        return [
            'uri' => $newUri,
            'charts' => $charts
        ];
    }

    public function handleNavigation(): array
    {
        return array_map(function ($items) {
            return $items['navigationName'];
        }, self::$providers['providers']);
    }

    public function handleSearchBar(): array
    {
        return array_map(function ($items) {
            return $items;
        }, self::$providers['search_bar']);
    }
}
