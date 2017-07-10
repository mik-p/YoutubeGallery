<?php namespace Taema\Youtubegallery\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Playlists Back-end Controller
 */
class Playlists extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Taema.Youtubegallery', 'youtubegallery', 'playlists');
    }
}
