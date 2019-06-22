<?php
function getWhereByArray($where = array()) {
   if (!is_array($where)) {
       $where = array($where);
   }

   $stWhere = '';
   $and = false;

   foreach ($where as $key => $value) {
       $stWhere .= ($and ? ' AND ' : '');
       if (is_string($value)) {
           $stWhere .= " {$key} = '{$value}'";
       } else {
           $stWhere .= " {$key} = {$value}";
       }
       if (!$and) {
           $and = true;
       }
   }
   return $stWhere;
}