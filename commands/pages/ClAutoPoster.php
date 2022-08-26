<?php

namespace core\commands\pages;

class ClAutoPoster extends \core\commands\Command
{

    private $title;
    private $description;

    public function doExecute(\core\requests\Request $request) {
        
        // Set values
        $this->view->setTitle('Charles Hopkins Developer');
        $this->view->setDescription('A tool for automating craigslist posts.');
        $this->view->setTemplate('pages/cl-auto-poster.php');


        // Load Page
        $this->view->load();
    }
}