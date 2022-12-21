<?php

    /**
     * @param Integer $n
     * @param Integer[][] $dislikes
     * @return Boolean
     */
    function possibleBipartition($n, $dislikes) {

        $colSet = [];
        $list = [];
        foreach($dislikes as $dis){
            $list[$dis[0]][] = $dis[1];
            $list[$dis[1]][] = $dis[0];
        }
        foreach($list as $l){

            $queue = new SplQueue();
            $queue->enqueue(key($list));
            $colSet[key($list)] = 1;
            $visited = [];
            while(!$queue->isEmpty()){
                $node = $queue->dequeue();
                if(!in_array($node, $visited)){
                    $visited[] = $node;
                    if(isset($colSet[$node])){
                        $nodeColor = $colSet[$node];
                        foreach($list[$node] as $adj){
                            if(isset($colSet[$adj]) && $colSet[$adj] == $nodeColor ) return false;
                            else{
                                $colSet[$adj] = 1 - $nodeColor;
                                $queue->enqueue($adj);
                            }
                        }
                    }
                    else{
                        $adjColor = null;
                        foreach($list[$node] as $b ){
                            if(isset($colSet[$b])){
                                $adjColor = $colSet[$b];
                                break;
                            }
                        }
                        //if($adjColor == null) $adjColor = 1;
                        foreach($list[$node] as $adj){
                            if(isset($colSet[$adj]) && $colSet[$adj] != $adjColor ) return false;
                            else{
                                $colSet[$adj] = $adjColor;
                                $queue->enqueue($adj);
                            }
                        }
                    }
                }
            }
            //if(count($visited) !== $n ) return false;
        }

        return true;

        //print_r($list);
    }


    $n = 4; $dislikes = [[1,2],[1,3],[2,4]];
    $n = 5; $dislikes = [[1,2],[2,3],[3,4],[4,5],[1,5]];
    $n = 3; $dislikes = [[1,2],[1,3],[2,3]];
    $n = 10; $dislikes = [[1,2],[3,4],[5,6],[6,7],[8,9],[7,8]]; /// true
    $n = 5; $dislikes = [[1,2],[3,4],[4,5],[3,5]]; /// false
    //$n = 10; $dislikes = [[1,2],[3,4],[5,6],[6,7],[8,9],[7,8]]; /// true

    var_dump(possibleBipartition($n, $dislikes));
