<?php
function list_category()
{
  $sql = "select * from danhmuc order by id ";
  $listdanhmuc = pdo_query_value($sql);
  return $listdanhmuc;
}