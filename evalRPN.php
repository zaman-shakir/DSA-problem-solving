<?php
    function evalRPN($tokens) {
        $stack = new \SplStack();

        foreach($tokens as $token){
            var_dump($stack->isEmpty());
           if($token === "+" || $token === "-" || $token === "*" || $token === "/"){
                $n = $stack->pop();
                if($token == "+" ) $res = $stack->pop() + $n;

                if($token == "-" ) $res = $stack->pop() - $n;

                if($token == "*" ) $res = $stack->pop() * $n;

                if($token == "/" ) $res = (int)($stack->pop() / $n);

                $stack->push($res);
           }
           else{
               $stack->push($token);
           }

        }

       return $stack->top();

    }
$tokens = ["10","6","9","3","+","-11","*","/","*","17","+","5","+"];
var_dump(evalRPN($tokens));
