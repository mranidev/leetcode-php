<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        
        $prefix = '';

        for ($i=0; $i<strlen($strs[0]); $i++)
        {
            $prefix .= $strs[0][$i];
            foreach($strs as $str)
            {
                if (substr($str, 0, strlen($prefix)) == $prefix)
                {
                    continue;
                }
                else 
                {
                    return substr($prefix, 0, -1);
                }
            }
        }
        return $prefix;
    }
}
