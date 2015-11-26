<?php

function fetch_recursive($src_arr, $id, $parentfound = false, $cats = array())
{
    foreach($src_arr as $row)
    {
        if((!$parentfound && $row['parent'] == $id) || $row['id'] == $id)
        {
            $rowdata = array();
            foreach ($row as $k => $v) {
                $rowdata[$k] = $v;
			}
			
            $cats[] = $rowdata;
            if($row['id'] == $id) {
                $cats = array_merge($cats, fetch_recursive($src_arr, $row['parent'], true));
			}
        }
    }
    return $cats;
}

   echo "<pre>" . print_r(fetch_recursive($categories, 0), true) . "</pre>"; exit;
   
   // http://stackoverflow.com/questions/11497202/get-all-child-grandchild-etc-nodes-under-parent-using-php-with-mysql-query-resu/11497724#11497724
   // http://stackoverflow.com/questions/11064913/achieve-hierarchy-parent-child-relationship-in-an-effective-and-easy-way?lq=1
   // http://stackoverflow.com/questions/11497202/get-all-child-grandchild-etc-nodes-under-parent-using-php-with-mysql-query-resu
