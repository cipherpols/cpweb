<?php namespace Cipherpols\Ui\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Controller;

class Feature extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Feature UI',
            'description' => 'Display a Cipherpols feature.'
        ];
    }

    public function defineProperties()
    {
        return [
            'feature' => [
                'description'       => 'Feature Name',
                'title'             => 'Feature Name',
                'default'           => '',
                'type'              => 'string',
            ],
            'description' => [
                'description'       => 'Feature Description',
                'title'             => 'Description',
                'default'           => '',
                'type'              => 'string',
            ],
            'image' => [
                'description'       => 'Feature Image',
                'title'             => 'Image',
                'default'           => '',
                'type'              => 'string',
            ]
        ];
    }

    /**
     * Get feature
     * @return string
     */
    public function getFeature()
    {
        return $this->property('feature');
    }

    /**
     * Get description
     * @return string
     */
    public function getDescription()
    {
        return $this->property('description');
    }

    /**
     * Get image
     * @return string - Absolute URL to the image if exists
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
