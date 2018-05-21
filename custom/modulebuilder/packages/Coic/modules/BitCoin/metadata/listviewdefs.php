<?php
$module_name = 'Bit_BitCoin';
$listViewDefs [$module_name] = 
array (
  'BITCOIN_CODE' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_BITCOIN_CODE',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'SYMBOL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SYMBOL',
    'width' => '10%',
    'default' => true,
  ),
  'BITCOIN_RATE' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_BITCOIN_RATE',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'BITCOIN_DESCRIPTION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_BITCOIN_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'BITCOIN_RATE_FLOAT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BITCOIN_RATE_FLOAT',
    'width' => '10%',
    'default' => true,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
