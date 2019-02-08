<?php

/**
 * Class OffsetEncodingAlgorithm
 */
class OffsetEncodingAlgorithm implements EncodingAlgorithm
{
    /**
     * Lookup string
     */
    const CHARACTERS = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    /**
     * @var int
     */
    private $offset;

    /**
     * @param int $offset
     */
    public function __construct($offset = 13)
    {
        $this->offset = $offset;
    }

    /**
     * Encodes text by shifting each character (existing in the lookup string) by an offset (provided in the constructor)
     * Examples:
     *      offset = 1, input = "a", output = "b"
     *      offset = 2, input = "z", output = "B"
     *      offset = 1, input = "Z", output = "a"
     *
     * @param string $text
     * @return string
     */
public function encode($text)
    {
       
        $string = '';
        $offset = $this->offset ;
        $arrtext = str_split($text);
        $textlength = count($arrtext);
        $arrchar = str_split($this->CHARACTERS);
        $charlength = count($arrchar );
        $i = 0;
        while( $i <=$textlength) {
            for($j =0; $j<$charlength; $j++) {
                if($arrtext[$i]== $arrchar[$j]){
                    //echo '@  '.$arrtext[$i].' * '.$arrchar[$j]. '<br>' .'<br>'; ;
                    $index=(($offset+$j) %( $charlength));
                    // echo '(($offset+$j))'.($offset+$j).'%'.$textlength.'='.(($offset+$j) %( $textlength)).'<br>' .'<br>' ;
                    $string .= $arrchar[$index];
                }
            }
            $i++;
        }
        // echo 'final result'.$string. '<br>' .'<br>';
        return $string;
    }
  
}