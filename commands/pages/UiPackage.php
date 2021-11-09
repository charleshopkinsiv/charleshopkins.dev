<?php

namespace core\commands\pages;

class UiPackage extends \core\commands\Command
{

    private $title;
    private $description;

    public function doExecute(\core\requests\Request $request) {
        
        // Set values
        $this->view->setTitle('Charles Hopkins Developer');
        $this->view->setDescription('A simple package for common backend UI occurrances.');
        $this->view->setTemplate('pages/ui-package.php');


        // Load Page
        $this->view->load();
    }
}