<?php
defined('_JEXEC') or die;
class CrudViewCruds extends JViewLegacy
{
    protected $items;
    protected $pagination;

    public function display($tpl = null)
    {
        $this->items        = $this->get('Items');
        $this->pagination   = $this->get('Pagination');
        $this->state        = $this->get('State');

        $this->searchterms  = $this->state->get('filter.search');

        if (count($errors = $this->get('Errors'))) {
            JError::raiseError(500, implode("\n", $errors));
            return false;
        }

        $this->addToolbar();
        parent::display($tpl);
    }

    protected function addToolbar()
    {
        JToolBar::getInstance('toolbar');
        
        JToolbarHelper::title(JText::_('COM_CRUD_MANAGER_CRUD'), '');
        JToolbarHelper::addNew('crud.add');

        JToolbarHelper::editList('crud.edit');
        JToolBarHelper::deleteList('', 'cruds.delete', 'JTOOLBAR_DELETE');

    }
    
}