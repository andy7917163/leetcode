<?php

namespace Src;

class LIOJ
{
    public function numSring($str)
    {
        $str_arr = explode(' ', $str);
        $n = $str_arr[0];
        $nStr = '';
        $m = $str_arr[$n+1];
        $result = '';
        foreach ($str_arr as $key => $value) {
            if ($key > 0) {
                if ($key <= $n) {
                    $nStr .= $value;
                } elseif ($key > $m) {
                    $result .= substr($nStr, $value - 1, 1);
                }
            }
        }
        echo $result;
    }

    public function compareBigOrSmall($str)
    {
        $result = '';
        $list = explode(PHP_EOL, $str);
        for ($i = 1; $i < count($list); $i ++) {
            $game = explode(' ', $list[$i]);
            if ($game[0] > $game[1]) {
                // 2 > 1
                if ($game[2] == '1') {
                    // 大的贏
                    $result .= 'A'.PHP_EOL;
                } else {
                    // 小的贏
                    $result .= 'B'.PHP_EOL;
                }
            }
            if ($game[0] < $game[1]) {
                // 1 < 2
                if ($game[2] == '1') {
                    // 大的贏
                    $result .= 'B'.PHP_EOL;
                } else {
                    // 小的贏
                    $result .= 'A'.PHP_EOL;
                }
            }
            if ($game[0] == $game[1]) {
                $result .= 'DRAW'.PHP_EOL;
            }
        }

        echo $result;
    }

    public function amicableNumbers($numbers)
    {
        $result = '';
        $list = explode(' ', $numbers);
        foreach ($list as $key => $value) {
            $value = intval($value);
            if ($value != 0) {
                $cfsum = $this->cfSum($value);
                $amicableNumber = $this->cfSum($cfsum);
                if ($value == $amicableNumber) {
                    $result .= strval($cfsum).PHP_EOL;
                } else {
                    $result .= 'QQ'.PHP_EOL;
                }
            }
        }
        echo $result;
    }

    public function cfSum($number)
    {
        $cf = [];
        for ($i = 1; $i < $number; $i ++) {
            if ($number % $i == 0) {
                // 整除
                if (in_array($i, $cf)) {
                    // 除數 $i 為已存在公因數
                    break;
                }
                $cf[] = $i;
                $cf[] = $number / $i;
            }
        }
        return array_sum($cf) - $number;
    }

    public function sitPair($str)
    {
        $list = explode(PHP_EOL, $str);
        $sits = array_shift($list);
        $sited = array_shift($list);
        $combinations = [];
        for ($i = 1; $i <= $sits; $i++) {
            $a1 = $i - 1;
            $a2 = $i - 2;
            $a3 = $i + 1;
            $a4 = $i + 2;
            $sits[$i] = [$a1, $a2, $a3, $a4];
        }
    }

    public function popularityKing($str)
    {
        $list = explode(PHP_EOL, $str);
        $popularity = [];
        for ($i = 1; $i <= intval($list[0]); $i++) {
            $people = explode(' ', $list[$i]);
            $popularity[$people[0]] = $people[1];
        }
        echo implode(PHP_EOL, array_keys($popularity, max($popularity)));
    }

    public function isPrimeNumber($number)
    {
        if ($number % 2 === 0) {
            // 是偶數
            return false;
        }
        if ($number > 2) {
            for ($i = 3; $i < floor(sqrt($number)); $i+= 2) {
                if ($number % $i === 0) {
                    // 整除
                    return false;
                }
            }
            return true;
        } else {
            return false;
        }
    }

    public function strReverse($str)
    {
        echo strrev($str);
    }
}

$time_start = microtime(true);
$lioj = new LIOJ();
// $lioj->numSring('2 yo man 3 4 2 1');
// $lioj->compareBigOrSmall("3
// 1 2 1
// 1 2 -1
// 2 2 1");
// $lioj->amicableNumbers('220 1184 2620 5020 66928 0');
// $lioj->sitPair('8
// 2
// 4
// 5');
// $lioj->popularityKing('3
// Nick 90
// Peter 90
// Bob 80');
// var_dump($lioj->isPrimeNumber(4652164));
$lioj->strReverse('asdfasdf');
$time_end = microtime(true);
$execution_time = ($time_end - $time_start) * 1000;
echo PHP_EOL.PHP_EOL.'Total Execution Time: '.number_format((float) $execution_time, 10).' ms';
