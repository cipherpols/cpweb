<?php namespace Cipherpols\Ui;

/**
 * The plugin.php file (called the plugin initialization script) defines the plugin information class.
 */

use Backend;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;

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
            '\Cipherpols\Ui\Components\Members' => 'members',
            '\Cipherpols\Ui\Components\Clients' => 'clients',
            '\Cipherpols\Ui\Components\ContactInfo' => 'contactInfo'
        ];
    }

    public function registerPermissions()
    {
        return [
            'cipherpols.ui.access_settings' => [
                'tab'   => 'cipherpols.ui::lang.permissions.tab',
                'label' => 'cipherpols.ui::lang.permissions.settings'
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'ui' => [
                'label'       => 'cipherpols.ui::lang.strings.cipherpols_label',
                'url'         => Backend::url('cipherpols/ui/member'),
                'icon'        => 'icon-flag',
                'permissions' => ['system.manage_updates'],
                'order'       => 500,

                'sideMenu' => [
                    'members' => [
                        'label'       => 'Members',
                        'icon'        => 'icon-users',
                        'url'         => Backend::url('cipherpols/ui/member'),
                        'permissions' => ['system.manage_updates'],
                    ],
                    'clients' => [
                        'label'       => 'Clients',
                        'icon'        => 'icon-bars',
                        'url'         => Backend::url('cipherpols/ui/client'),
                        'permissions' => ['system.manage_updates'],
                    ],
                ],
            ]
        ];
    }

}
