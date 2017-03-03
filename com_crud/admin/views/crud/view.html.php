<?php
defined('_JEXEC') or die;

class CrudViewCrud extends JViewLegacy
{
    protected $item;
    protected $form;

    public function display($tpl = null)
    {
        $this->item = $this->get('Item');
        $this->form = $this->get('Form');
        if (count($errors = $this->get('Errors'))) {
            JError::raiseError(500, implode("\n", $errors));
            return false;
        }
        $this->addToolbar();
        parent::display($tpl);
    }
    protected function addToolbar()
    {
        JToolbarHelper::save('crud.save');
        JToolbarHelper::cancel('crud.cancel');
        if (empty($this->item->id)) {
            JToolbarHelper::title(JText::_('COM_CRUD_NEW_CRUD'), '');
        } else {
            JToolbarHelper::title(JText::_('COM_CRUD_EDIT_CRUD'), '');
        }
    }
}