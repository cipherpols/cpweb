<?php namespace Cipherpols\Ui;

use Cms\Classes\Theme;

/**
 * The plugin.php file (called the plugin initialization script) defines the plugin information class.
 */

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Cipherpols UI',
            'description' => 'Provides features used by the provided theme.',
            'author'      => 'Duc Duong',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            '\Cipherpols\Ui\Components\Feature' => 'uiFeature',
            '\Cipherpols\Ui\Components\Member' => 'member',
            '\Cipherpols\Ui\Components\Clients' => 'clients',
            '\Cipherpols\Ui\Components\ContactInfo' => 'contactInfo'
        ];
    }

}
