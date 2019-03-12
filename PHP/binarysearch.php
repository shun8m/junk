<?php
$list = range(0, 100000, 1);
$listCount = count($list);
define ('SearchObject', 11451);
$firstIndex = 0;
$lastIndex = $listCount - 1;
$isFind = false;
$startTime = microtime(true);
do {
    $centerIndex = (Int) (($firstIndex + $lastIndex) / 2);
    if ($list[$centerIndex] == SearchObject) {
        $isFind = true;
        echo '見つかったンゴ　キーは' . $centerIndex . 'です';
        break;
    } else if ($list[$centerIndex] < SearchObject){
        $firstIndex = $centerIndex + 1;
    } else if ($list[$centerIndex] > SearchObject){
        $lastIndex = $centerIndex - 1;
    }
} while($firstIndex <= $lastIndex);
if (!$isFind) {
    echo '見つからないんだよなあ・・・';
}
$endTime = microtime(true);
$resultTime = $endTime - $startTime;
echo "\n処理時間は" . $resultTime . "みり秒だゾ";