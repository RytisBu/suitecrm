<?php
$popupMeta = array (
    'moduleMain' => 'Bit_BitCoin',
    'varName' => 'Bit_BitCoin',
    'orderBy' => 'bit_bitcoin.name',
    'whereClauses' => array (
  'name' => 'bit_bitcoin.name',
  'assigned_user_id' => 'bit_bitcoin.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
);
