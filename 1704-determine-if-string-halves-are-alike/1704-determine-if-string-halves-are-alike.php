class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function halvesAreAlike($s) {
        $len = strlen($s);
        $halflen = $len/2;
        $vowel = array(
            'a'=>true, 
            'e'=>true, 
            'i'=>true, 
            'o'=>true, 
            'u'=> true,
            'A'=>true, 
            'E'=>true, 
            'I'=>true, 
            'O'=>true, 
            'U'=> true,
        );
        $len = 0;
        for($i=0; $i < $halflen; $i++){
            if(array_key_exists($s[$i], $vowel)) $len++;
            if(array_key_exists($s[$i + $halflen], $vowel)) $len--;
        }
        return $len==0;
    }
}