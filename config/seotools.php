<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "3lmni school", // set false to total remove
            'titleBefore'  => true, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => '3lmni school is located in Rashid city, Al-Buhaira. We aim at your excellence through FUN! - مدرسة علمني تقع في مدينة راشد ، البحيرة. نحن نهدف إلى التميز الخاص بك من خلال FUN', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['3lmni school','3lmni','school','school in Rashid city','Al-Buhaira'],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => '3lmni school', // set false to total remove
            'description' => '3lmni school is located in Rashid city, Al-Buhaira. We aim at your excellence through FUN!', // set false to total remove
            'url'         => env('APP_URL'), // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'site_name'   => '3lmni school',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Over 9000 Thousand!', // set false to total remove
            'description' => '3lmni school is located in Rashid city, Al-Buhaira. We aim at your excellence through FUN!', // set false to total remove
            'url'         => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
