<?php
    if(!defined('sugarEntry') || !sugarEntry) die("No good...");

    class TraukiamHook{
    function main ($bean, $event, $arguments){
        $bean->name = strtoupper($bean->name);
        $query = "select * from accounts";
        $queryno = $bean->$db->query($query, true,"Error reading from accounts");
        $result = $bean->$db->getOne($queryno);
    }
}
?>
