<?php

/**
 * Class SubstitutionEncodingAlgorithm
 */
class SubstitutionEncodingAlgorithm implements EncodingAlgorithm
{
    /**
     * @var array
     */
    private $substitutions;

    /**
     * SubstitutionEncodingAlgorithm constructor.
     * @param $substitutions
     */
    public function __construct(array $substitutions)
    {
        $this->substitutions = array();
    }

    /**
     * Encodes text by substituting character with another one provided in the pair.
     * For example pair "ab" defines all "a" chars will be replaced with "b" and all "b" chars will be replaced with "a"
     * Examples:
     *      substitutions = ["ab"], input = "aabbcc", output = "bbaacc"
     *      substitutions = ["ab", "cd"], input = "adam", output = "bcbm"
     *
     * @param string $text
     * @return string
     */
     public function encode($text)
    {
        //$text = 'zccz';
        $substitutions =  $this->substitutions;//["zb", "cd"];
        $string = '';
        $arrtext = str_split($text);
        $textlength = count($arrtext);
        $charlength = count($substitutions);
        $found=false;
        echo 'String is '.$textlength. '<br>' .'<br>'; ;
        $i = 0;
        while( $i <=$textlength) {
            $found==false;
            for($j =0; $j<=$charlength; $j++) {
                echo '@  '.'$j'.$j.substr($substitutions[$j], 0, 1). '<br>' .'<br>';
                if($arrtext[$i]== substr($substitutions[$j], 0, 1)){
                    $string .= substr($substitutions[$j], 1, 1);
                    echo  $string.'<br>' .'<br>' ;
                    $found=true;
                    break;
                }
            }
            if($found==false){  $string .= $arrtext[$i];
                echo  "else".$string.'<br>' .'<br>' ;
            }
            $i++;
        }
        echo 'final result'.$string. '<br>' .'<br>';
        return $string;
    }
}