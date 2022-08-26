<?php

namespace core\commands\pages;

class DatingBot extends \core\commands\Command
{

    private $title;
    private $description;

    public function doExecute(\core\requests\Request $request) {
        
        // Set values
        $this->view->setTitle('Charles Hopkins Developer');
        $this->view->setDescription('A tool for automating different instagram marketing functionalities.');
        $this->view->setTemplate('pages/dating-bot.php');


        // Load Page
        $this->view->load();
    }
}