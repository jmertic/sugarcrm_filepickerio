<?php
/*********************************************************************************
 * The contents of this file are subject to
 * *******************************************************************************/
require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');

class SugarFieldFilepickerio extends SugarFieldBase 
{
    function getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex) 
    {
        require_once('include/connectors/sources/SourceFactory.php');

        $source = 'ext_rest_filepickerio';
        $s = SourceFactory::getSource($source);
        $config = $s->getConfig();
        $displayParams['apiKey'] = $config['properties']['api_key'];

        return parent::getEditViewSmarty($parentFieldArray, $vardef, $displayParams, $tabindex);
    }
}