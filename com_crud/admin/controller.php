<?php
defined('_JEXEC') or die;

class CrudController extends JControllerLegacy
{
    protected $default_view = 'cruds';

    public function display($cachable = false, $urlparams = false)
    {
        $view   = $this->input->get('view', 'cruds');
        $layout = $this->input->get('layout', 'default');
        $id     = $this->input->getInt('id');

        if ($view == 'crud' && $layout == 'edit' && !$this->checkEditId('com_crud.edit.crud', $id)) {
            $this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
            $this->setMessage($this->getError(), 'error');
            $this->setRedirect(JRoute::_('index.php?option=com_crud&view=cruds', false));
            return false;
        }
        parent::display();
        return $this;
    }
}