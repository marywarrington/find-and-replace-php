<?php
    class FindAndReplace
    {

        function fAndReplace($input, $replace, $replaceWith)
        {
            $explodedArray = explode(" ", $input);
            foreach ($explodedArray as $key => $wordInArray) {
                $explodedArray[$key] = str_replace($replace, $replaceWith, $wordInArray);
            }
            $explodedArray = implode(' ', $explodedArray);
            return $explodedArray;
        }
    }





?>
