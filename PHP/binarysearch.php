<?php
$list = range(0, 100000, 1);
$listCount = count($list);
define ('SearchObject', 11451);
$firstIndex = 0;
$lastIndex = $listCount - 1;
$isFind = false;
$startTime = microtime(true);
echo "開始時間: ".date('Y-m-d H:i:s',(int)$startTime)."\n";
do {
    $centerIndex = (Int) (($firstIndex + $lastIndex) / 2);
    if ($list[$centerIndex] == SearchObject) {
        $isFind = true;
        echo "見つかったンゴ　キーは" . $centerIndex . "です\n";
        break;
    } else if ($list[$centerIndex] < SearchObject){
        $firstIndex = $centerIndex + 1;
    } else if ($list[$centerIndex] > SearchObject){
        $lastIndex = $centerIndex - 1;
    }
} while($firstIndex <= $lastIndex);
if (!$isFind) {
    echo "見つからないんだよなあ・・・\n";
}
$endTime = microtime(true);
echo "終了時間: ".date('Y-m-d H:i:s',(int)$endTime)."\n";
$resultTime = $endTime - $startTime;
echo "処理時間は" . sprintf('%0.5f', $resultTime). "秒だゾ";