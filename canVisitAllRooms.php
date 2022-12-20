<?php
    /**
     * @param Integer[][] $rooms
     * @return Boolean
     */
    function canVisitAllRooms(array $rooms):bool
    {
        $visitedRooms = array();
        $stack = new SplStack();
        foreach ( $rooms[0] as $room) {
            $stack->push($room);
        }
        $visitedRooms[] = 0;
        while(!$stack->isEmpty()){
            $roomindex = $stack->pop();

            if(!in_array($roomindex, $visitedRooms)){
                $visitedRooms[] = $roomindex;
                $room = $rooms[ $roomindex];
                foreach($room as $key){
                    $stack->push($key);
                }
            }
        }
        return count($visitedRooms) == count($rooms);
    }

    $rooms = [[1,3],[3,0,1],[2],[0]];
    $rooms = [[1],[2],[3],[]];
    $rooms = [[2],[],[1]];
    $rooms = [[1],[2],[3],[]];
    //$rooms = [[6,7,8],[5,4,9],[],[8],[4],[],[1,9,2,3],[7],[6,5],[2,3,1]];
    var_dump(canVisitAllRooms($rooms));
    1. Mark rooms[0] visitied and put all the keys into a stack $stack.
    2. Perfrom operations untill stack becomes empty:

    - if $roommIndex is not visited then put into $visitedIndex array.
    - get all keys from $roomIndex and put all those keys into $stack

    if the  count of visitedRooms equals to the count of rooms then all the room has been visited, return true, otherwise return false.
