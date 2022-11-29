<?php

$graph = [
    'A' => ['B', 'C'],
    'B' => ['A', 'C'],
    'D' => ['C'],
    'C' => ['D'],
    'E' => ['F'],
];
$graph = [[0,1],[0,2],[3,5],[5,4],[4,3]];
$graph = [[0,7],[0,8],[6,1],[2,0],[0,4],[5,8],[4,7],[1,3],[3,5],[6,5]];
function bfs($graph,$start,$end){

    $queue = new SplQueue();
    $queue->enqueue($start);
    $visited =[$start];

    while($queue->count() > 0){

        $node = $queue->dequeue();
        echo $node."->";

        if($node === $end){
            return true;
        }
        foreach($graph[$node] as $neighbour){
            if(!in_array($neighbour, $visited)){
                $visited[] = $neighbour;
                $queue->enqueue($neighbour);
            }
        }
    }
    return false;

}
function bfs_self($g,$start,$end){
    $graph=[];
    foreach($g as $edge){
        $node1 = $edge[0];
        $node2 = $edge[1];
        $graph[$node1][] = $node2;

    }

    $queue = new SplQueue();
    $queue->enqueue($start);
    $visited[$start]=1;

    while($queue->count() > 0){
        $node = $queue->dequeue();

        if($node === $end){
            return true;
        }
        if(isset($graph[$node])){
            foreach($graph[$node] as $neighbour){
                if(!array_key_exists($neighbour,$visited)){
                    $visited[$neighbour] = 1;
                    $queue->enqueue($neighbour);

                }

            }
        }

    }
    return false;

}

var_dump(bfs_self($graph,7,5));
