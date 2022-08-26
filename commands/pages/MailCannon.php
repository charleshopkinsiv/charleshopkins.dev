<?php

namespace core\commands\pages;

class MailCannon extends \core\commands\Command
{

    private $title;
    private $description;

    public function doExecute(\core\requests\Request $request) {
        
        // Set values
        $this->view->setTitle('Charles Hopkins Developer');
        $this->view->setDescription('A free email marketing platform.');
        $this->view->setTemplate('pages/mail-cannon.php');


        // Load Page
        $this->view->load();
    }
}