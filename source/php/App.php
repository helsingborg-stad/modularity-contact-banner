<?php

namespace ModularityContactBanner;

use WpUtilService\Features\Enqueue\EnqueueManager;

class App
{
    public function __construct(
        private EnqueueManager $wpEnqueue,
    ) {
        add_action('init', array($this, 'registerModule'));
        add_filter('Municipio/Admin/Acf/PrefillIconChoice', array($this, 'addFieldNameToPrefillList'));
        add_action('wp_enqueue_scripts', function () {
            $this->wpEnqueue->add('css/modularity-contact-banner.css');
        });
    }

    public function addFieldNameToPrefillList(array $items)
    {
        $items[] = 'mod_contactbanner_cta_icon';

        return $items;
    }

    /**
     * Register the module
     * @return void
     */
    public function registerModule()
    {
        if (function_exists('modularity_register_module')) {
            modularity_register_module(MODULARITYCONTACTBANNER_MODULE_PATH, 'ContactBanner');
        }
    }
}
