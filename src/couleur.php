<?php
$url = 'upload_files/group_cover/bf1.png';
dominant_color($url);
function dominant_color($url){
    $i = imagecreatefrompng($url);
    $rTotal  = '';
    $bTotal  = '';
    $gTotal  = '';
    $total = '';
    for ($x=0;$x<imagesx($i);$x++) {
        for ($y=0;$y<imagesy($i);$y++) {
            $rgb = imagecolorat($i, $x, $y);
            $r = ($rgb >> 16) & 0xFF;
            $g = ($rgb >> 8) & 0xFF;
            $b = $rgb & 0xFF;
            $rTotal += $r;
            $gTotal += $g;
            $bTotal += $b;
            $total++;
    }

}

$r = round($rTotal/$total);
$g = round($gTotal/$total);
$b = round($bTotal/$total);

echo '<img style="float:left;margin-right:5px;" width="63" height="63" src="'.$url.'">';

echo '<div style="float:left;"><div style="font-size:10px;font-family:Verdana;text-align:center;width:300px;padding:5px;margin-bottom:5px;border-radius:5px;border:3px solid;border-color:rgb('.($r-20).','.($g-20).','.($b-20).');background-color:rgb('.$r.','.$g.','.$b.')">Rouge : '.$r.', Vert : '.$g.', Bleu : '.$b.'</div>';

echo '<div style="font-size:10px;font-family:Verdana;text-align:center;width:300px;padding:5px;margin-bottom:5px;border-radius:5px;border:3px solid;border-color:rgb('.($r-20).','.($g-20).','.($b-20).');background-color:rgb('.$r.','.$g.','.$b.')">Url : '.$url.'</div></div>';

}

// dominant_color("upload_files/user_avatar/test.png");