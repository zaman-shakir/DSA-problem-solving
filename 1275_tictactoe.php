<?php


class Solution {

    /**
     * @param Integer[][] $moves
     * @return String
     */
    function tictactoe($moves) {
        $matrix = [];
        foreach ($moves as $key=>$move) {

            if($key % 2 == 0){
                $matrix[$move[0]][$move[1]] = "X";
            }
            else{
                $matrix[$move[0]][$move[1]] = "O";

            }
        }
        for($i=0; $i<3; $i++){
            for($j=0; $j<3; $j++){
                if(!isset($matrix[$i][$j])){
                    $matrix[$i][$j]= "-";
                }
            }
        }
        if(
            $this->checkRow($matrix,'X') ||
            $this->checkDiagonal($matrix,'X') ||
            $this->checkCol($matrix,'X')
        )
            {
                return "A";
            }
        elseif(
            $this->checkRow($matrix,'O') ||
            $this->checkDiagonal($matrix,'O') ||
            $this->checkCol($matrix,'O')
        ){
            return "B";

        }
        else{
            if(count($moves)<=4) return "Pending";
            return "Draw";
        }


    }

    function checkRow($moves,$char){

        if(
             $moves[0][0] == $char &&
             $moves[0][1] == $char &&
             $moves[0][2] == $char
        )
        return true;
        if(
             $moves[1][0] == $char &&
             $moves[1][1] == $char &&
             $moves[1][2] == $char
        )
        return true;
        if(
             $moves[2][0] == $char &&
             $moves[2][1] == $char &&
             $moves[2][2] == $char
        )
        return true;

        return false;


    }

    function checkDiagonal($moves,$char){

        if(
            $moves[0][0] == $char &&
            $moves[1][1] == $char &&
            $moves[2][2] == $char
       )
       return true;
        if(
            $moves[0][2] == $char &&
            $moves[1][1] == $char &&
            $moves[2][0] == $char
       )
       return true;


       return false;
    }

    function checkCol($moves,$char){

        if(
            $moves[0][0] == $char &&
            $moves[1][0] == $char &&
            $moves[2][0] == $char
       )
       return true;
       if(
            $moves[0][1] == $char &&
            $moves[1][1] == $char &&
            $moves[2][1] == $char
       )
       return true;
       if(
            $moves[0][2] == $char &&
            $moves[1][2] == $char &&
            $moves[2][2] == $char
       )
       return true;

       return false;

    }
}


$sol = new Solution();
$moves = [[0,0],[1,1],[0,1],[0,2],[1,0],[2,0]];
$moves = [[0,0],[1,1]];
$res = $sol->tictactoe($moves);
echo $res;
