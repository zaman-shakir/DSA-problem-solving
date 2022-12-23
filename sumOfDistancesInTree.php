<?php

    Class Solution {

        public $count = [];
        public $ans = [];
        public $adj= [];
        public $n = 0;
        /**
         * @param Int $n
         * @param Int[][] $edges
         * @return Int[]
        */
        public function sumOfDistancesInTree($n, $edges){
            $this->n = $n;
            $this->count = array_fill(0,$n,1);
            $this->ans = array_fill(2,$n,0);


            for($i=0; $i<$n; $i++){
                $this->adj[$i] = [];
            }
            foreach($edges as $e){
                $this->adj[$e[0]][] = $e[1];
                $this->adj[$e[1]][] = $e[0];
            }
            //var_dump($this->adj); die();
            $this->dfs1(0,-1);
            $this->dfs2(0,-1);
            ksort($this->ans);
            return array_slice($this->ans,0,$n-1);


        }

        public function dfs1($node, $parent){

            foreach($this->adj[$node] as $child){
                if($child != $parent){
                    $this->dfs1($child,$node);
                    //$this->ans[$child] = $this->n - $this->count[$child] + $this->ans[$node] - $this->count[$child];
                    $this->count[$node] += $this->count[$child];
                    $this->ans[$node] += $this->ans[$child]+$this->count[$child];
                }
            }
        }
        public function dfs2($node,$parent){

            foreach($this->adj[$node] as $child){
                if($child != $parent){
                    $this->ans[$child] = $this->n - $this->count[$child] + $this->ans[$node] - $this->count[$child];
                    $this->dfs2($child,$node);
                }

            }

        }
    }
    $sol = new Solution();

    $n =6; $input  = [[0,1],[0,2],[2,3],[2,4],[2,5]];

    //$input  = [[1,0]];
    var_dump( $sol->sumOfDistancesInTree($n,$input));
