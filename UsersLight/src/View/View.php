<?php
namespace Users\View;


abstract class View extends \View\View
{

    public function start()
    {
        parent::start();

        $this->view = new \Dframe\View\SmartyView();
        $this->view->smarty->setTemplateDir(__DIR__);

        $this->assign('router', $this->router);

    }


}