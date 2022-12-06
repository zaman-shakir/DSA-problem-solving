<?php
$url[] = "http://newdev3.hilltimes.com/?post_type=news_opinion_list_pc&p=355168&preview=true";
$url[] = "https://prod4.hilltimes.com/story/2022/12/05/357637/357637/";
$url[] = "https://prod4.hilltimes.com/story/2022/12/07/the-north-needs-less-ottawa%ef%bf%bc/357844/?preview=true";
$url[] = "https://prod4.hilltimes.com/story/2022/12/07/the-north-needs-less-ottawa%ef%bf%bc/357844/?preview_id=357844&preview_nonce=d2c445ec50&preview=true&_thumbnail_id=357848";

foreach($url as $link){

    preg_match_all('!\d+\.*\d*!', $link, $output);
    $output = $output[0];
    //var_dump($output);
    for($i=0; $i<count($output); $i++){

        $id = (int) $output[$i];
        //var_dump($id);
        if($id > 100000){
            echo $id. "\n" ;
            break;
        }
    }
    echo "\n";

}
