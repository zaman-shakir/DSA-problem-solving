<?php
$link = "https://www.hilltimes.com/story/2022/05/30/as-feds-spark-ev-demand-advocates-charge-for-same-focus-on-transit-other-vehicle-alternatives/230218/?i=63032803aa674dde96c2a5ee9b70fdbd";
$get_url= "http://newdev3.hilltimes.com/2021/06/16/as-liberals-trumpet-merits-of-nsicop-opposition-mps-want-supremacy-of-parliament-respected/301919/?i=63032803aa674dde96c2a5ee9b70fdbd";
$link_array = explode('/',$get_url);
$post_old_id = end($link_array);
var_dump($link_array[count($link_array)-2]);
if(isset($_GET['i'])){
    // do operation
}



?>
