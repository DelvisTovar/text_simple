<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Text_Simple extends Module
{
    public function __construct()
    {
        $this->name = 'text_simple';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Delvis Tovar';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7',
            'max' => _PS_VERSION_
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Text simple demo module');
        $this->description = $this->l('Display demo content text simple.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    }

    public function install()
    {
        if (!parent::install() || !$this->registerHook('displayHome')) 
        {
            return false;
        }
        return true;
    } 
   
    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayHome($params)
    {
        return '<a href="https://github.com/DelvisTovar">Github -> Delvis Tovar</a>';
    }
}