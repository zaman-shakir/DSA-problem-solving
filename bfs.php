<?php
class Graph{
    public $adj;
    public $size;
}
$graph = [
    'A' => ['B', 'C'],
    'B' => ['A', 'D'],
    'D' => ['B'],
    'C' => ['A',],
    'E' => ['F'],
];

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

var_dump(bfs($graph,'A','E'));
