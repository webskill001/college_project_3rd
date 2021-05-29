<?php
include "../../../includes/_constant.php";
include SERVER_PATH."includes/database.php";


if(isset($_POST['category1_status']) && isset($_POST['cid'])){
    $arr = array();
    $category1_status = mysqli_real_escape_string($conn,$_POST['category1_status']);
    $cid = mysqli_real_escape_string($conn,$_POST['cid']);

    if($category1_status == "status"){
        $row_cat1 = mysqli_fetch_assoc(mysqli_query($conn, 'select * from category1 where category1_id = '.$cid));
        $status = "active";
        if($row_cat1['category1_status'] == "active"){
            $status = "inactive";
        }
        // echo 'update category1 set category1_status = $status where category1_id = $cid';die();
        $res = mysqli_query($conn, 'update category1 set category1_status = "'.$status.'" where category1_id = '.$cid);
    }
    $status = "";
    if($category1_status == "delete"){
        $num_cat1 = mysqli_num_rows(mysqli_query($conn, 'select * from products where category1_id = '.$cid));
        if($num_cat1 > 0){
            $arr['status'] = "product_exist";
            $arr['message'] = "Products exists with this Category";
        }else{
            $res = mysqli_query($conn, 'delete from category1 where category1_id = '.$cid);
        }
        
    }

    

    $res = mysqli_query($conn, "select * from category1");
    $arr['num'] = mysqli_num_rows($res);
    $arr['record'] = mysqli_fetch_all($res,MYSQLI_ASSOC);
    
    echo json_encode($arr);
}


?>