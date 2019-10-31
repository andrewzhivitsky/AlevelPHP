<?php
$stringArray = ["python", "php", "js", "c", ""];
function maxString($arr) {
    $maxStr = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if (iconv_strlen($arr[$i]) > iconv_strlen($maxStr)) {
            $maxStr = $arr[$i];
        }
    }
    return $maxStr;
}
echo maxString($stringArray);