class Solution {

    /**
     * @param Integer $n
     * @param Integer[][] $edges
     * @param Integer $source
     * @param Integer $destination
     * @return Boolean
     */
    function validPath($n, $edges, $source, $destination) {
        $graph=[];
        foreach($edges as $edge){
            $node1 = $edge[0];
            $node2 = $edge[1];
            $graph[$node1][] = $node2;
            $graph[$node2][] = $node1;
        }
        //print_r($graph);
        $queue = new SplQueue();
        $queue->enqueue($source);
        $visited[]=$source;

            while($queue->count() > 0){
                $node = $queue->dequeue();

                if($node === $destination){
                    return true;
                }
                if(isset($graph[$node])){
                    foreach($graph[$node] as $neighbour){

                        if(!in_array($neighbour, $visited)){
                            $visited[] = $neighbour;
                            $queue->enqueue($neighbour);
                        }
                    }
                }

            }
            return false;
    }
}