$arr = ["byte","kb","mb","gb","tb"]; // İsteğinize göre içeriği artırıp azaltabilirsiniz.
$carpan = 1024; // IEEE 1541'e göre 2^10 katları olarak alınmıştır.
$boyut = 1024; // Bayt cinsinden değer giriniz.

for($i = 0; $i < count($arr); $i++){
  $islem = pow($carpan , $i);
  if ($boyut < 1024){
    print $boyut." ".$arr[$i];
    break;
  }elseif ( $boyut < pow($carpan,$i+1) ){
  print round( ($boyut / $islem), 2)." ".$arr[$i];
  break;}
}
