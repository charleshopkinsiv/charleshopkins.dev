<?php

namespace core\commands;

class DefaultCmd extends Command
{

    private $title;
    private $description;

    public function doExecute(\core\requests\Request $request) {
        
        // Set values
        $this->view->setTitle('Panty Client');
        $this->view->setDescription('The pge you were looking for was not found.');
        $this->view->setTemplate('not-found.php');


        // Load Page
        $this->view->load();
    }
}