<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        
        $common = '';

        for ($i=0; $i<strlen($strs[0]); $i++)
        {
            $common .= $strs[0][$i];
            foreach($strs as $str)
            {
                if (substr($str, 0, strlen($common)) == $common)
                {
                    continue;
                }
                else 
                {
                    return substr($common, 0, -1);
                }
            }
        }
        return $common;
    }
}
