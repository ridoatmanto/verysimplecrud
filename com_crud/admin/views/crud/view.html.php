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
        if (empty($this->item->id)) {
            JToolbarHelper::cancel('crud.cancel');
            JToolbarHelper::title(JText::_('COM_CRUD_NEW_CRUD'), '');
        } else {
            JToolbarHelper::cancel('crud.cancel', 'JTOOLBAR_CLOSE');
            JToolbarHelper::title(JText::_('COM_CRUD_EDIT_CRUD'), '');
        }
    }
}