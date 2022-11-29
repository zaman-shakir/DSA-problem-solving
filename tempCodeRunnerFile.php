<?php
if(!in_array($neighbour, $visited)){
                $visited[] = $neighbour;
                $queue->enqueue($neighbour);
            }