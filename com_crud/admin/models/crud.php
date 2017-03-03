<?php
defined('_JEXEC') or die;
class CrudModelCrud extends JModelAdmin
{
    protected $text_prefix = 'COM_CRUD';
    
    public function getTable($type = 'Crud', $prefix = 'CrudTable', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }

    public function getForm($data = array(), $loadData = true)
    {
        $app  = JFactory::getApplication();
        $form = $this->loadForm('com_crud.crud', 'crud', array(
            'control' => 'jform',
            'load_data' => $loadData
        ));

        if (empty($form)) {
            return false;
        }
        return $form;
    }

    protected function loadFormData()
    {
        $data = JFactory::getApplication()->getUserState('com_crud.edit.crud.data', array());
        if (empty($data)) {
            $data = $this->getItem();
        }
        return $data;
    }

    protected function prepareTable($table)
    {
        $table->name = htmlspecialchars_decode($table->name, ENT_QUOTES);
        $table->birth = htmlspecialchars_decode($table->birth, ENT_QUOTES);
        $table->address = htmlspecialchars_decode($table->address, ENT_QUOTES);
    }
}