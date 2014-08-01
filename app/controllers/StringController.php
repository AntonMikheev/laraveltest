<?php

class StringController extends BaseController {

    public function StringToArray()
    {
        $array_str = [
            'мой замок был ограблен',
            'на меня напал высокоуровневый замок',
            'ограблен замок моего товарища'
        ];
        foreach($array_str as $b){
            $a[] = explode(' ', $b);

// echo '234';
        }
// print_r($a);

// $resp = [];
        $first = '0';
        $second = '1';
        for($i = 0;$i<count($a);$i++){
            for($c = 0;$c<count($a);$c++){
                if($a[$i] == $a[$c]){
                    continue;
                }
                $src[] = array_intersect($a[$i],$a[$c]);

// print_r($src);
            }
        }
// $src = array_intersect($a[$first],$a[$second]);

        print_r($src);

    }

}