<?php 
$dongu = 0;
$comments = $umumi->CoxluGetir("photo_com");
rsort($comments);


if(@$_GET['st']!=""){
	$umumi->Status(@$_GET['id'],"photo_com",@$_GET['st']) ? header("Location:comments.php?status=ok") : header("Location:comments.php?status=no");
}


function Comment_Status($st)
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
    $umumi->Sil(@$_GET['id'],"photo_com") ? header("Location:comments.php?status=ok")     :  header("Location:comments.php?status=no");

}


?>