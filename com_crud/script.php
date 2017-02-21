<?php
defined('_JEXEC') or die;
class com_crudInstallerScript
{
    function install($parent)
    {
        $parent->getParent()->setRedirectURL('index.php?option=com_crud');
    }
    function uninstall($parent)
    {
        echo '<p>' . JText::_('COM_CRUD_UNINSTALL_TEXT') . '</p>';
    }
    function update($parent)
    {
        echo '<p>' . JText::_('COM_CRUD_UPDATE_TEXT') . '</p>';
    }
}