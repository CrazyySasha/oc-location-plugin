<?php namespace Crazy\Location;

use Backend;
use System\Classes\PluginBase;

/**
 * Location Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Location',
            'description' => 'No description provided yet...',
            'author'      => 'Crazy',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Crazy\Location\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'crazy.location.some_permission' => [
                'tab' => 'Location',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'location' => [
                'label'       => 'Location',
                'url'         => Backend::url('crazy/location/locations'),
                'icon'        => 'icon-leaf',
                'permissions' => ['crazy.location.*'],
                'order'       => 500,
            ],
        ];
    }
    public function registerSettings()
    {
        return [
            'locations' => [
                'label'       => 'Локации',
                'description' => 'Управление локациями пользователей.',
                'category'    => 'Локации',
                'icon'        => 'icon-globe',
                'url'         => Backend::url('crazy/location/locations'),
                'order'       => 500,
            ]
        ];
    }
}
