<?php
$dictionary['module_manager'] = array(
    'table' => 'accounts_cases',
    'fields' => array(
        array(
            'name' => 'id',
            'type' => 'varchar',
            'len' => '36'
        ),
        array(
            'name' => 'module_name',
            'type' => 'varchar',
            'len' => '100'
        ),
        array(
            'name' => 'module_path',
            'type' => 'varchar',
            'len' => '255'
        ),
        array(
            'name' => 'module_status',
            'type' => 'varchar',
            'len' => '50'
        ),
        array(
            'name' => 'date_modified',
            'type' => 'datetime'
        ),
        array(
            'name' => 'deleted',
            'type' => 'bool',
            'len' => '1',
            'required' => false,
            'default' => '0'
        ),
    ),
    'indices' => array(
        array(
            'name' => 'accounts_casespk',
            'type' => 'primary', 'fields' => array(
                'id',
            ),
        ),
    ),
);
