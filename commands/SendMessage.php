<?php

namespace core\commands;

class SendMessage extends Command
{

    private $title;
    private $description;

    public function doExecute(\core\requests\Request $request) {
        

        // Send message
        $email = $_POST['email'];
        $message = "FROM: " . $email . "\n" . $_POST['message'];
        mail("charles@charleshopkins.dev", "New Site Message", $message);

        // Set values
        $this->view->setTitle('Charles Hopkins Developer : Home');
        $this->view->setDescription('Custom software development to optimize your business.');
        $this->view->setTemplate('home.php');


        // Load Page
        $this->view->setData("message_sent", true);
        $this->view->load();
    }
}