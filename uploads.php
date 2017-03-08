<?php
  $file = $_FILES["file"];
  if ($file["error"] == 0) 
  {
    $typeArr = explode("/", $file["type"]);
    if($typeArr[0]== "image")
    {
      $imgType = array("png","jpg","jpeg");
      if(in_array($typeArr[1], $imgType))
      {
        $imgname = "file/".time().".".$typeArr[1];
        $bol = move_uploaded_file($file["tmp_name"], $imgname);
        if($bol)
        {
          echo "上传成功！";
        } 
        else 
        {
          echo "上传失败！";
        }
      }
    } 
    else 
    {
      echo "没有图片，再检查一下吧！";
    }
  } 
  else 
  {
    echo $file["error"];
  }
