<?php
    function insert_sanpham($tensp,$giasp,$hinh,$mota,$id_danhmuc){
        $sql="INSERT INTO sanpham(name_sanpham,price,img,desc,id_danhmuc) VALUES('$tensp','$giasp','$hinh','$mota','$id_danhmuc')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql="DELETE FROM sanpham WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham(){
        $sql="SELECT*FROM sanpham order by id desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadone_sanpham($id){
        $sql="SELECT*FROM sanpham WHERE id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_sanpham($id,$tenloai){
        $sql="UPDATE sanpham SET name='".$tenloai."' WHERE id=".$id;
        pdo_execute($sql);
    }
?>