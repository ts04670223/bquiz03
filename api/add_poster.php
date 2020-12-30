<?php
include_once "../base.php";

if (!empty($_FILES['poster']['tmp_name'])) {
  $data=[];
  $file=$_FILES['poster']['name'];
  move_uploaded_file($_FILES['poster']['tmp_name'],'../img/'.$file);
  $data['img']=$file;
  $data['name']=$_POST['name'];
  $data['sh']=1;
  $data['rank']=$Poster->q("select max(rank) from poster")[0][0]+1;;
  $data['ani']=rand(1,3);
  $Poster->save($data);
}

to("../backend.php?do=poster");