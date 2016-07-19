<?php namespace Cipherpols\Ui\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\MediaLibrary;
use Illuminate\Support\Facades\DB;

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
        return [];
    }

    /**
     * Get clients
     * @return string
     */
    public function onRun()
    {
        $clients = Db::table('clients')
            ->orderBy('order', 'asc')
            ->get();
        foreach ($clients as $client) {
            if (!empty($client->avatar)) {
                $client->avatarUrl = MediaLibrary::instance()->getPathUrl($client->avatar);
            }
        }
        $this->page['clients'] = $clients;
    }

}
