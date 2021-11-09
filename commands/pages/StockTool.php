<?php

namespace core\commands\pages;

class StockTool extends \core\commands\Command
{

    private $title;
    private $description;

    public function doExecute(\core\requests\Request $request) {
        
        // Set values
        $this->view->setTitle('Charles Hopkins Developer');
        $this->view->setDescription('A custom stock market data analysis tool.');
        $this->view->setTemplate('pages/stock-tool.php');


        // Load Page
        $this->view->load();
    }
}