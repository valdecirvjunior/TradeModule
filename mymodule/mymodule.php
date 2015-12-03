<?php
if (!defined('_PS_VERSION_'))
  exit;
 
class MyModule extends Module
{
  public function __construct()
  {
    $this->name = 'mymodule';
    $this->tab = 'front_office_features';
    $this->version = '1.0.0';
    $this->author = 'Firstname Lastname';
    $this->need_instance = 0;
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_); 
    $this->bootstrap = true;
 
    parent::__construct();
 
    $this->displayName = $this->l('My module');
    $this->description = $this->l('Description of my module.');
 
    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
 
    if (!Configuration::get($this->name))      
      $this->warning = $this->l('No name provided');
  }

/*
public function install()
{
  if (!parent::install())
    return false;
  return true;
}

public function uninstall()
{
  if (!parent::uninstall())
    return false;
  return true;
}
*/

public function install()
{
  if (Shop::isFeatureActive())
    Shop::setContext(Shop::CONTEXT_ALL);
 
  if (!parent::install() ||
    !$this->registerHook('leftColumn') ||
    !$this->registerHook('header') ||
    !$this->registerHook('rightColumn') ||
    !Configuration::updateValue($this->name, 'my friend')
  )
    return false;
 
  return true;
}



public function uninstall()
{
  if (!parent::uninstall() ||
    !Configuration::deleteByName($this->name)
  )
    return false;
 
  return true;
}

function hookLeftColumn($params){
        global $smarty;
 
        if ($special = Product::getRandomSpecial(intval($params['cookie']->id_lang)))
            $smarty->assign(array(
            'special' => $special,
            'priceWithoutReduction_tax_excl' => Tools::ps_round($special['price_without_reduction'] / (1 + $special['rate'] / 100), 2),
            'oldPrice' => $special['price'] + $special['reduction'],
            'mediumSize' => Image::getSize('medium')));
 
        return $this->display(__FILE__, 'mymodule.tpl');
    }

    public function hookRightColumn($params)
    {
        return $this->hookLeftColumn($params);
    }

}







/*

*/