<?php
function buildTree(Array $data, $parent = 6) {
    $tree = array();
    foreach ($data as $d) {
        if ($d['id'] == $parent) {
            $children = buildTree($data, $d['parent']);
            // set a trivial key
            if (!empty($children)) {
                $d['_children'] = $children;
            }
            $tree[] = $d;
        }
    }
    return $tree;
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
$rows = array(
    array ('id' => 1, 'name' => 'Test 1', 'parent' => 0),
    array ('id' => 2, 'name' => 'Test 1.1', 'parent' => 1),
    array ('id' => 4, 'name' => 'Test 1.2.1', 'parent' => 3),
    array ('id' => 3, 'name' => 'Test 1.2', 'parent' => 1),
    array ('id' => 5, 'name' => 'Test 3.2.2', 'parent' => 0),
    array ('id' => 6, 'name' => 'Test 1.2.2.1', 'parent' => 5),
    array ('id' => 7, 'name' => 'Test 2', 'parent' => 0),
    array ('id' => 8, 'name' => 'Test 2.1', 'parent' => 7),
);

$tree = buildTree($categories);
   echo "<pre>" . print_r($tree, true) . "</pre>";
exit;
foreach ($tree as $t) {  ?>
<ul>
    <li><?= $t['name'] ?></li>
    <?php if($t['_children']) {
        foreach ($t['_children'] as $child) { ?>
            <li>-<?= $child['name'] ?></li>
      <?php  }
    } ?>
            <?php if(isset($child['_children'])) {
        foreach ($child['_children'] as $child) { ?>
            <li>--<?= $child['name'] ?></li>
      <?php  }
    } ?>
</ul>
<?php }
// print_r($tree);

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


print("<select>\n");
printTree($tree);
print("</select>");

function flattenChildren(array $array, $key) {
    $chain = !empty($array['children']) ? flattenChildren($array['children'], $key) : array();
    array_unshift($chain, $array[$key]);
var_dump($chain);
    return $chain;
}
