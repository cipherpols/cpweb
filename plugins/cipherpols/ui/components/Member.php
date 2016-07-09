<?php namespace Cipherpols\Ui\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Controller;

class Member extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Cipherpols Member',
            'description' => 'Display a Cipherpols member.'
        ];
    }

    public function defineProperties()
    {
        return [
            'name' => [
                'description'       => 'Member Name',
                'title'             => 'Name',
                'default'           => '',
                'type'              => 'string',
            ],
            'alias' => [
                'description'       => 'Member Alias',
                'title'             => 'Alias',
                'default'           => '',
                'type'              => 'string',
            ],
            'role' => [
                'description'       => 'Member Role',
                'title'             => 'Role',
                'default'           => '',
                'type'              => 'string',
            ],
            'image' => [
                'description'       => 'Member Avatar',
                'title'             => 'Avatar',
                'default'           => '',
                'type'              => 'string',
            ]
        ];
    }

    /**
     * Get member name
     * @return string
     */
    public function getName()
    {
        return $this->property('name');
    }

    /**
     * Get member alias
     * @return string
     */
    public function getAlias()
    {
        return $this->property('alias');
    }

    /**
     * Get member alias
     * @return string
     */
    public function getRole()
    {
        return $this->property('role');
    }

    /**
     * Get member avatar
     * @return string|null - Absolute URL to the image if exists
     */
    public function getImage()
    {
        $image = $this->property('image');
        if (empty($image)) {
            return null;
        }

        $controller = new Controller();
        return $controller->getAssetPath($image);
    }

}
