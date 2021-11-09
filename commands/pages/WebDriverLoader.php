<?php

namespace core\commands\pages;

class WebDriverLoader extends \core\commands\Command
{

    private $title;
    private $description;

    public function doExecute(\core\requests\Request $request) {
        
        // Set values
        $this->view->setTitle('Charles Hopkins Developer');
        $this->view->setDescription('A tool for loading google webdriver that updates the dependencies.');
        $this->view->setTemplate('pages/web-driver-loader.php');


        // Load Page
        $this->view->load();
    }
}