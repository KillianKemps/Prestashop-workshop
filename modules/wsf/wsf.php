<?php
class Wsf extends Module
{
  public function __construct()
  {
    $this->name = 'wsf';
    $this->tab = 'front_office_features';
    $this->version = '0.1';
    $this->author = 'Killian Kemps';
    $this->need_instance = 0;

    parent::__construct();

    $this->displayName = $this->l('Web School Factory');
    $this->descritpion = $this->l('Module for Web School Factory.');
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
  }

  public function install()
  {
    return (parent::install() && $this->registerhook('displayProductButtons'));
  }

  public function uninstall()
  {
    return (parent::uninstall());
  }

  public function getContent()
  {
    //$form = $this->renderForm();
    //return $form;
  }

  public function hookDisplayProductButtons($params)
  {
    $product = $params['product'];
    //$iframe = str_replace('__SWF_KEYWORD__', $product->name, base64_decode();

    //$this->smarty->assign(
      //array(
        //'iframe' => $iframe,
      //)
    //);
    return $this->display(__FILE__, 'displayProductButtons.tpl');
  }
}
