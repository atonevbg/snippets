<?php

/*
  $categories = array(
  array(
  'id' => 2 ,
  'name' => 'banana',
  'parent' => 1
  ),

  array(
  'id' => 1 ,
  'name' => 'fruit',
  'parent' => 0
  ),

  array(
  'id' => 3 ,
  'name' => 'Monkey',
  'parent' => 4
  ),

  array(
  'id' => 4 ,
  'name' => 'Animal',
  'parent' => 0
  ),

  array(
  'id' => 5 ,
  'name' => 'apple',
  'parent' => 1
  ),

  array(
  'id' => 6 ,
  'name' => 'Cat',
  'parent' => 4
  ),

  array(
  'id' => 7 ,
  'name' => 'Animal Water',
  'parent' => 1
  ),

  array(
  'id' => 8 ,
  'name' => 'fish',
  'parent' => 7
  ),
  array(
  'id' => 9 ,
  'name' => 'frog',
  'parent' => 7
  )
  );


  foreach ($categories as $category) {
  echo 'id ='. $category['id'].'<br>';
  echo 'name ='. $category['name'].'<br>';
  echo 'parent ='. $category['parent'].'<br><br>';
  }

  function makeRecursive($d, $r = 0, $pk = 'parent', $k = 'id', $c = 'children') {
  $m = array();
  foreach ($d as $e) {
  isset($m[$e[$pk]]) ?: $m[$e[$pk]] = array();
  isset($m[$e[$k]]) ?: $m[$e[$k]] = array();
  $m[$e[$pk]][] = array_merge($e, array($c => &$m[$e[$k]]));
  }

  return $m[$r][0]; // remove [0] if there could be more than one root nodes
  } */


$source = array(
    1 => array(
        'name' => 'Parent One',
        'parent_id' => null
    ),
    2 => array(
        'name' => 'Parent Two',
        'parent_id' => null
    ),
    3 => array(
        'name' => 'Child One',
        'parent_id' => 1
    ),
    4 => array(
        'name' => 'Child Two',
        'parent_id' => 1
    ),
    5 => array(
        'name' => 'Child Three',
        'parent_id' => 2
    ),
    6 => array(
        'name' => 'Child Four',
        'parent_id' => 5
    ),
    7 => array(
        'name' => 'Child Five',
        'parent_id' => 2
    ),
    8 => array(
        'name' => 'Child Six',
        'parent_id' => 3
    ),
    9 => array(
        'name' => 'Child Seven',
        'parent_id' => 6
    )
);

 function makeNested($source) {
  $nested = array();

  foreach ( $source as &$s ) {
  if ( is_null($s['parent']) ) {
  // no parent_id so we put it in the root of the array
  $nested[] = &$s;
  }
  else {
  $pid = $s['parent'];
  if ( isset($source[$pid]) ) {
  // If the parent ID exists in the source array
  // we add it to the 'children' array of the parent after initializing it.

  if ( !isset($source[$pid]['children']) ) {
  $source[$pid]['children'] = array();
  }

  $source[$pid]['children'][] = &$s;
  }
  }
  }
  return $nested;
  }
  
  
  
$categories = array(
  1 => array(
  'id' => 1 ,
  'name' => 'Plodove',
  'parent' => null
  ),

  2 => array(
  'id' => 2 ,
  'name' => 'Tropicheski',
  'parent' => 1
  ),

  3 => array(
  'id' => 3 ,
  'name' => 'Banan',
  'parent' => 2
  ),

  4 => array(
  'id' => 4 ,
  'name' => 'Jivotni',
  'parent' => null
  ),

  5 => array(
  'id' => 5 ,
  'name' => 'Maimuna',
  'parent' => 4
  ),

   6 => array(
  'id' => 6 ,
  'name' => 'Grizli',
  'parent' => 5
  ),

  );
// best for now

function array_tree(&$array) {
    $tree = array();

    // Create an associative array with each key being the ID of the item
    foreach ($array as $k => &$v) {
        $tree[$v['id']] = &$v;
    }

    // Loop over the array and add each child to their parent
    foreach ($tree as $k => &$v) {
        if (!$v['parent']) {
            continue;
        }
        $tree[$v['parent']]['children'][] = &$v;
    }

    // Loop over the array again and remove any items that don't have a parent of 0;
    foreach ($tree as $k => &$v) {
        if (!$v['parent']) {
            continue;
        }
        unset($tree[$k]);
    }

    return $tree;
}


function getCategories($categories) {
    $references = array();
    $tree = array();
    foreach ($categories as $id => &$node) {
        // Use id as key to make a references to the tree and initialize it with node reference.
        $references[$node['id']] = &$node;

        // Add empty array to hold the children/subcategories
        $node['children'] = array();

        // Get your root node and add this directly to the tree
        if ($node['parent'] == null) {
            $tree[$node['id']] = &$node;
        } else {
            // Add the non-root node to its parent's references
            $references[$node['parent']]['children'][$node['id']] = &$node;
        }
        unset($node['children']);
    }

    return $tree;
}


$items = array(
         array('id' => 42, 'parent_id' => 1),
        array('id' => 43, 'parent_id' => 42),
        array('id' => 1,  'parent_id' => 0),
        array('id' => 2,  'parent_id' => 0),
        array('id' => 3,  'parent_id' => 2),
);

/*function buildTree($items) {

    $childs = array();

    foreach($items as &$item) {
        $childs[$item['parent_id']][] = &$item;
    }
    unset($item);

    foreach($items as &$item) {
        if (isset($childs[$item['id']])) {
            $item['childs'] = $childs[$item['id']];
        }
    }

    return $childs[0];
}

$tree = buildTree($items);
*/

//echo "<pre>".print_r(makeRecursive($categories), true)."</pre>";
function formatTree($tree, $parent){
        $tree2 = array();
        foreach($tree as $i => $item){
            if($item['id'] == $parent){
                $tree2[$item['id']] = $item;
                $tree2[$item['id']]['children'] = formatTree($tree, $item['parent']);

            }
        }
        return $tree2;
    }

function getChildrenForCategory($id)
{
  
$data = array(
  1 => array(
  'id' => 1 ,
  'name' => 'Plodove',
  'parent' => null
  ),

  2 => array(
  'id' => 2 ,
  'name' => 'Tropicheski',
  'parent' => 1
  ),

  3 => array(
  'id' => 3 ,
  'name' => 'Banan',
  'parent' => 2
  ),

  4 => array(
  'id' => 4 ,
  'name' => 'Jivotni',
  'parent' => null
  ),

  5 => array(
  'id' => 5 ,
  'name' => 'Maimuna',
  'parent' => 4
  ),

   6 => array(
  'id' => 6 ,
  'name' => 'Grizli',
  'parent' => 5
  ),

  );
  if(is_array($data))
  {
    foreach($data as $item)
    {
        // do it again recursively
        $subChildren = getChildrenForCategory($item['id']);
        var_dump($subChildren);exit;
        $item['children'] = $subChildren;
        array_push($children, $item);

    }
  }
  return $children;
}

    echo "<pre>" . print_r(getChildrenForCategory(6), true) . "</pre>";
exit;
    
    
function prepareMenu($array)
{
  $return = array();
  //1
  krsort($array);
  foreach ($array as $k => &$item)
  {
    if (is_numeric($item['parent']))
    {
      $parent = $item['parent'];
      if (empty($array[$parent]['children']))
      {
        $array[$parent]['children'] = array();
      }
      //2
      array_unshift($array[$parent]['children'],$item);
      unset($array[$k]);
    }
  }
  //3
  //ksort($array);
  return $array;
}


function ordered_menu($array,$parent_id = 0)
{
  $temp_array = array();
  foreach($array as $element)
  {
      $element['subs'] = array();
    if($element['parent']==$parent_id)
    {
      $element['subs'] = ordered_menu($array,$element['id']);
      $temp_array[] = $element;
    }
    
  }
  return $temp_array;
}


function assembleTree($menu_array, $parent = 0) {
    $tree = Array();
    foreach($menu_array as $page) {
        if($page['parent'] == $parent) {
            $page['children'] = isset($page['children']) ? $page['children'] : assembleTree($menu_array, $page['id']);
            $tree[$page['id']] = $page;
        }
    }
    return $tree;
}


function buildTree(Array $data, $parent = 0) {
    $tree = array();
    foreach ($data as $d) {
        if ($d['parent'] == $parent) {
            $children = buildTree($data, $d['id']);
            // set a trivial key
            if (!empty($children)) {
                $d['children'] = $children;
            }
            $tree[] = $d;
        }
    }
    return $tree;
}



function buildMenu($array)
{
  echo '<ul>';
  foreach ($array as $item)
  {
    echo '<li>';
    echo $item['name'];
    $test = array();
    if (!empty($item['children']))
    {
      buildMenu($item['children']);
    }
    echo '</li>';
  }
  echo '</ul>';
}
$tree = buildTree($categories);
buildMenu($tree);

echo "<pre>" . print_r($tree, true) . "</pre>";
exit;
function printTree($tree, $r = 0, $p = null) {
    foreach ($tree as $i => $t) {
        $dash = ($t['parent'] == 0) ? '' : str_repeat('-', $r) .' ';
        printf("\t<option value='%d'>%s%s</option>\n", $t['id'], $dash, $t['name']);
        if ($t['parent'] == $p) {
            // reset $r
            $r = 0;
        }
        if (isset($t['_children'])) {
            printTree($t['_children'], ++$r, $t['parent']);
        }
    }
}


//print("<select>\n");
//printTree($tree);
//print("</select>");
//echo "<pre>" . print_r(buildTree($categories, 0), true) . "</pre>";
?>

<?php
$connection = mysqli_connect('localhost', 'root', '', 'products');
if(!$connection){
    echo 'no database';
    exit;
}
mysqli_set_charset($connection, 'utf8');

$sql1 = "SELECT * FROM product";
$product_query = mysqli_query($connection, $sql1);
while($product_row = mysqli_fetch_assoc($product_query)){
    $products[$product_row['id']] = $product_row;
}
$sql3 = "SELECT * FROM product2category";
$relation_query = mysqli_query($connection, $sql3);
while($relation_row = mysqli_fetch_assoc($relation_query)){
    $products[$relation_row['ProductId']]['relations'][] = $relation_row['CategoryId'];
}
$sql2 = "SELECT * FROM category";
$category_query = mysqli_query($connection, $sql2);
while($category_row = mysqli_fetch_assoc($category_query)){
    $categories[$category_row['id']] = $category_row;
}

foreach ($products as $product) {
  
  $relations = isset($product['relations']) ? $product['relations'] : array();
  //echo "<pre>".print_r($product['relations'], true)."</pre>";
  echo $product['title'].'<br>';  
  foreach ($relations as $categoryid) {
    if(isset($categories[$categoryid])) {
      echo $categories[$categoryid]['title'].'<br>';
    }
  }
}
echo '<br><br>';
$sql = "SELECT p.id as `ProdID`,c.id as `CatID`, c.title as `CatTitle`,p.title as `ProdTitle`,p.price as `Price`
        FROM category as c
        INNER JOIN product2category as pc on pc.categoryid = c.id
        INNER JOIN product as p ON p.id = pc.productid";
$query = mysqli_query($connection, $sql);
while($row = mysqli_fetch_assoc($query)){
  //$data[$row['ProdID']]['Price'] = $row['Price'];
  //$data[$row['ProdID']]['categories'][$row['CatID']] = $row['CatTitle'];
  //$data[$row['ProdID']]['ProdTitle'] = $row['ProdTitle'];

  $data['All'] = $row;
}
$test[$data['All']['ProdID']]['Price'] = $data['All']['Price'];
$test[$data['All']['ProdID']]['categories'][$data['All']['CatID']] = $data['All']['CatTitle'] ;
$test[$data['All']['ProdID']]['ProdTitle'] = $data['All']['ProdTitle'];

echo "<pre>".print_r($data, true)."</pre>"; exit;

foreach ($test as $value) {
  //echo "<pre>".print_r($test, true)."</pre>"; exit;
  echo $value['ProdTitle'].'<br>';
  foreach($value['categories'] as $category) {
    echo $category. '<br>';
  }
}
