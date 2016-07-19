<?php namespace Cipherpols\Ui\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Client Back-end Controller
 */
class Client extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Cipherpols.Ui', 'ui', 'client');
    }
}