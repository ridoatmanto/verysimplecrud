<?php
defined('_JEXEC') or die;

class CrudControllerCruds extends JControllerAdmin
{
    public function getModel($name = 'Crud', $prefix = 'CrudModel', $config = array('ignore_request' => true))
    {
        $model = parent::getModel($name, $prefix, $config);
        return $model;
    }
}