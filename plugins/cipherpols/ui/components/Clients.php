<?php namespace Cipherpols\Ui\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\MediaLibrary;

class Clients extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Cipherpols Clients',
            'description' => 'Display Cipherpols clients.'
        ];
    }

    public function defineProperties()
    {
        return [
            'folder' => [
                'description'       => 'Images Folder',
                'title'             => 'Images Folder',
                'default'           => '',
                'type'              => 'string',
            ]
        ];
    }

    /**
     * Handle onRender event.
     * Scan clients folder for images.
     */
    public function onRender()
    {
        $folder = $this->property('folder');
        if (empty($folder)) {
            return [];
        }

        $folderImages = MediaLibrary::instance()->listFolderContents($folder);
        $images = [];
        foreach ($folderImages as $folderImage) {
            $images[] = $folderImage->publicUrl;
        }

        $this->page['images'] = $images;
    }

}
