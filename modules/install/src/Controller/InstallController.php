<?php
namespace Drupal\install\Controller;

class InstallController
{
    function __getvocabularies($name_only = false){
        $arrVocabs['Software'] = array(
            'name' => t('Software'),
            'multiple' => 0,
            'required' => 1,
            'hierarchy' => 1,
            'relations' => 0,
            'module' => 'install',
            'weight' => -10,
            'nodes' => array('software_user' => 1, 'software_node' => 1),
        );
        return ($name_only) ? array_keys($arrVocabs) : $arrVocabs;
    }    
}

?>