class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        
        $result = [];
        $total = 0;
        for ($i=0; $i<count($nums); $i++)
        {
            $result[] = $total + $nums[$i];
            $total += $nums[$i]; 
        }
        return $result;

    }
}