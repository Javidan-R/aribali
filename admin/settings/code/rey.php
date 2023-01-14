<?php 
$say = 0;
$reyler = $umumi->CoxluGetir("reyler");
rsort($reyler);


if(@$_GET['st']!=""){
	$umumi->Status(@$_GET['id'],"reyler",@$_GET['st']) ? header("Location:reyler.php?status=ok") : header("Location:reyler.php?status=no");
}


function STS($st)
{

	switch ($st) {
		case 0:
		return '<span class="badge badge-danger font-weight-100">Ləğv Edilib</span>'."\n";
		break;
		case 1:
		return '<span class="badge badge-success font-weight-100">Təsdiq Edilib</span>'."\n";
		break;
		case 2:
		return '<span class="badge badge-warning font-weight-100">Gözləmədə</span>'."\n";
		break;
	}
}
if(@$_GET['sil']=="ok"){
    $umumi->Sil(@$_GET['id'],"reyler") ? header("Location:reyler.php?status=ok")     :  header("Location:reyler.php?status=no");

}


?>