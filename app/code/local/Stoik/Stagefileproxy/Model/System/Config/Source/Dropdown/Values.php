<?php

class Stoik_Stagefileproxy_Model_System_Config_Source_Dropdown_Values
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'php_curl',
                'label' => 'PHP CURL',
            ),
            array(
                'value' => 'php_curl_c',
                'label' => 'PHP CURL C',
            )
        );
    }
}