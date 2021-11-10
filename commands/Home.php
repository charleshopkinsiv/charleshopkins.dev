<?php

namespace core\commands;

class Home extends Command
{

    private $title;
    private $description;

    public function doExecute(\core\requests\Request $request) {
        
        // Set values
        $this->view->setTitle('Charles Hopkins Developer : Home');
        $this->view->setDescription('Custom software development to optimize your business.');
        $this->view->setTemplate('home.php');


        // Load Page
        $this->view->load();
    }
}