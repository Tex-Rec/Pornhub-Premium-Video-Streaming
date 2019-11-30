<?php
function youPorn($url) {
    $ch = curl_init();
    $timeout = 50;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_USERAGENT,
                "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:69.0) Gecko/20100101 Firefox/69.0");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookiesYP.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookiesYP.txt');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    $scriptx = "";
    $internalErrors = libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    @$dom->loadHTML($data);
    $xpath = new DOMXPath($dom);
    foreach($dom->getElementsByTagName('script') as $k => $js) {
        $scriptx .= $js->nodeValue;
    }
    $is = explode('page_params.video.mediaDefinition = ', $scriptx);
    $usx = explode('"}];', $is[1]);
    return $usx[0].'"}]';
}
$json = youPorn("https://www.youporn.com/watch/15307223/big-booty-teacher-brainwashed-to-need-your-cock-4k/");
$jsi = json_decode($json, true);
echo $jsi[0]['videoUrl']; //720p
//echo $jsi[1]['videoUrl']; //480p
?>
