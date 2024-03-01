<?php

/**
 * @param String $n
 * @return Integer
 */
function minPartitions($n)
{
    return max(str_split($n));
}
