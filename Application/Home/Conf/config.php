<?php
return array(
    'URL_MODEL' =>2,
    'URL_CASE_INSENSITIVE'  =>  false,
    'URL_ROUTER_ON' => true,
    'URL_ROUTE_RULES' => array(
        '/^index$/'           	=>    'Index/index',
        '/^article-(\d{1,5})$/' =>  'Article/content?id=:1',
        '/^archive-(\d{1,5})$/' =>  'Archive/index?id=:1'
    )
);