<?php
$nb_elem_per_page = 10;
$page = isset($_GET['page'])?intval($_GET['page']-1):0;
$data = (array)$this->view['data']['produkte'];
$number_of_pages = intval(count($data)/$nb_elem_per_page)+1;


<?php foreach (array_slice($data, $page*$nb_elem_per_page, $nb_elem_per_page) as $p) { ?>
...some html code here
<?php} ?>

<ul id='paginator'>
<?php
for($i=1;$i<$number_of_pages;$i++){?>
    <li><a href='./?page=<?=$i?>'>$i</a></li>
<?php}?>
</ul>
?>