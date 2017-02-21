<?php
defined('_JEXEC') or die;
class CrudModelCruds extends JModelList
{
    public function __construct($config = array())
    {
        if (empty($config['filter_fields'])) {
            $config['filter_fields'] = array(
                'id',
                'a.id',

                'name',
                'a.name',

                'birth',
                'a.birth',
                
                'address',
                'a.address'
            );
        }
        parent::__construct($config);
    }
    protected function getListQuery()
    {
        $db    = $this->getDbo();
        $query = $db->getQuery(true);
        $query->select($this->getState('list.select', 'a.id, a.name, a.birth, a.address'));
        $query->from($db->quoteName('#__crud') . ' AS a');
        return $query;
    }
}