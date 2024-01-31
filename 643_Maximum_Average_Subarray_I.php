<?php
/*
    Input: nums = [1,12,-5,-6,50,3], k = 4
    Output: 12.75000
    Explanation: Maximum average is (12 - 5 - 6 + 50) / 4 = 51 / 4 = 12.75
    Example 2:

    Input: nums = [5], k = 1
    Output: 5.00000
*/

class Solution {

    /**
     * @param int[] $nums
     * @param int $k
     * @return Float
     */
    function findMaxAverage($nums, $k) {

        $left = 0;
        $right= $k-1;
        $sum = 0;
        $max_avg = PHP_INT_MIN;

        for($i=0; $i<= $right;$i++){
            $sum += $nums[$i];
        }
        $max_avg = $sum / $k;
        $left++;
        $right++;
        while(isset($nums[$right])){
            $sum = $sum - $nums[$left-1]  + $nums[$right];
            $avg = $sum / $k;

            $max_avg = max($max_avg, $avg);

            $left++;
            $right++;
        }
        return $max_avg;
    }
    /**
         * Test cases:
         * 1. Empty array should return 0.
         * 2. Array with one element should return that element.
         * 3. Array with all negative numbers should return the maximum value.
         * 4. Array with all positive numbers should return the maximum average.
         * 5. Array with both positive and negative numbers should return the maximum average.
     */

    function testFindMaxAverage() {
        // Test case 1
        $nums = [];
        $k = 1;
        $expected = 0;
        $result = $this->findMaxAverage($nums, $k);
        assert($result === $expected, "Test case 1 failed");

        // Test case 2
        $nums = [5];
        $k = 1;
        $expected = 5;
        $result = $this->findMaxAverage($nums, $k);
        assert($result === $expected, "Test case 2 failed");

        // Test case 3
        $nums = [-1, -2, -3, -4, -5];
        $k = 3;
        $expected = -2;
        $result = $this->findMaxAverage($nums, $k);
        assert($result === $expected, "Test case 3 failed");

        // Test case 4
        $nums = [1, 2, 3, 4, 5];
        $k = 3;
        $expected = 4;
        $result = $this->findMaxAverage($nums, $k);
        assert($result === $expected, "Test case 4 failed");

        // Test case 5
        $nums = [1, -1, 2, -2, 3, -3];
        $k = 4;
        $expected = 1;
        $result = $this->findMaxAverage($nums, $k);
        assert($result === $expected, "Test case 5 failed");

        echo "All test cases passed!";
    }
}

$ob = new Solution();

//$ob->testFindMaxAverage();
$res = $ob->findMaxAverage([1,12,-5,-6,50,3], 4);

echo $res;
// testFindMaxAverage();
