<?php namespace Cipherpols\Ui\Components;

use Cms\Classes\ComponentBase;

class ContactInfo extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Contact Information',
            'description' => 'Cipherpols contact information.'
        ];
    }

    public function defineProperties()
    {
        return [
            'cellphone' => [
                'description'       => 'Cellphone Number',
                'title'             => 'Cellphone',
                'default'           => '',
                'type'              => 'string',
            ],
            'email' => [
                'description'       => 'Email',
                'title'             => 'Email',
                'default'           => '',
                'type'              => 'string',
            ],
            'address' => [
                'description'       => 'Address',
                'title'             => 'Address',
                'default'           => '',
                'type'              => 'string',
            ],
            'telephone' => [
                'description'       => 'Telephone Number',
                'title'             => 'Telephone',
                'default'           => '',
                'type'              => 'string',
            ]
        ];
    }

    /**
     * Handle onRender event.
     * Prepare data to display on template
     */
    public function onRender()
    {
        $this->page['cellphone'] = $this->property('cellphone');
        $this->page['toCallCellphone'] = preg_replace('/[^0-9]/', '', $this->property('cellphone'));

        $this->page['email'] = $this->property('email');
        $this->page['address'] = $this->property('address');
        $this->page['telephone'] = $this->property('telephone');
    }

}
