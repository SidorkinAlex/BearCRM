<?php
class ModuleLoader extends SugarBean {
    public $field_name_map = array();
    // Stored fields
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $assigned_user_id;
    public $annual_revenue;
    public $id;
    public $name;


    public $created_by;
    public $created_by_name;
    public $modified_by_name;

    // These are for related fields

    public $module_dir = 'ModuleLoader';
    public $emailAddress;


    public $table_name = "moduleloader";
    public $object_name = "ModuleLoader";
    public $importable = false;
    public $new_schema = true;
}