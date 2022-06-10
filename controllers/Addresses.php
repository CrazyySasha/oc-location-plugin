<?php

namespace Crazy\Location\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Addresses Backend Controller
 */
class Addresses extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    /**
     * @var string formConfig file
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string listConfig file
     */
    public $listConfig = 'config_list.yaml';

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Crazy.Location', 'location', 'addresses');
    }

}
