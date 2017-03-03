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

    protected function populateState($ordering = null, $direction =null)
    {
        $app = JFactory::getApplication('administrator');
 
        $search = $app->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');

        $this->setState('filter.search', preg_replace('/\s+/',' ', $search));

        parent::populateState('a.id', 'desc');
    }


    protected function getListQuery()
    {
        $db    = $this->getDbo();
        $query = $db->getQuery(true);
        $query->select($this->getState('list.select', 'a.id, a.name, a.birth, a.address'));
        $query->from($db->quoteName('#__crud') . ' AS a');

        // Filter by search in title
        $search = $this->getState('filter.search');
            if (!empty($search))
            {
                if (stripos($search, 'id:') === 0)
                {
                    $query->where('a.id = '.(int) substr($search, 3));
                } else {
                    $search = $db->Quote('%'.$db->escape($search, true).'%');
                    $query->where('(a.name LIKE '.$search.' OR a.address LIKE '.$search.')');
                }
            }
            
        return $query;
    }
}