<?php

class LookbookControllerCore extends FrontController
{
    /**
     * Assign template vars related to page content
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();

        $this->setTemplate(_PS_THEME_DIR_.'lookbook.tpl');
    }

    public function init()
    {
        parent::init();

        $id_product = 8;

        $lang = $this->context->cookie->id_lang;

        $children = Pack::getItems($id_product, $lang);

        d($children);
        $this->context->smarty->assign(array('look' => $children));
    }
}
