<?php
////////////////////////////////////////////////////////////////////////////////////////////////////
//
//  Command Class
//
////////////////////////////////////////////////////////////////////////////////////////////////////


namespace core\commands;

abstract class Command {

    protected $view;

    final public function __construct() {

        $this->view = new \core\View();
    }

    public function execute(\core\requests\Request $request) {

        $this->doExecute($request);

    }

    abstract public function doExecute(\core\requests\Request $request);

}