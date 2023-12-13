<?php
include 'db-conn.php';

function slugUrl($string)
{
    // Replace any non-alphanumeric characters (except for space and hyphen) with an empty string
    $slug = preg_replace('/[^a-zA-Z0-9 -]/', '', $string);

    // Replace spaces with hyphens
    $slug = str_replace(' ', '-', $slug);

    // Convert to lowercase
    $slug = strtolower($slug);

    return $slug;
}

if (isset($_POST['add-categories'])) {
    $cat_id = mt_rand(11111, 99999);
    $cat_name = $_POST['cat_name'];
    $Meta_Title = $_POST['Meta_Title'];
    $Meta_KEyword = $_POST['Meta_KEyword'];
    $Meta_Discription = $_POST['Meta_Discription'];
    $added_on = date('M d, Y');
    $slug_url = slugUrl($cat_name);

    $sql = "INSERT INTO ec_categories (cat_id, cat_name, Meta_Title, Meta_KEyword, Meta_Discription, slug_url, status, added_on)
           VALUES ('$cat_id', '$cat_name', '$Meta_Title', '$Meta_KEyword', '$Meta_Discription', '$slug_url', '1', '$added_on')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Category Added')</script>";
        echo "<script>window.location.href = 'view-product.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
if (isset($_POST['add_Product'])) {
    $proid = mt_rand(11111, 99999);
    $pro_name = $_POST['pro_name'];
    $pro_subCat = $_POST['pro_subCat'];
    $pro_dec = $_POST['pro_desc'];
    $stock = $_POST['stock'];
    $mpr = $_POST['mpr'];

    $Meta_Title = $_POST['meta_title'];
    $Meta_KEyword = $_POST['Meta_KEyword'];
    $Meta_Discription = $_POST['meta_dec'];
    $added_on = date('M d, Y');
    $slug_url = slugUrl($pro_name);

    if (isset($_FILES['pro_img']['name'])) {
        $filename = $_FILES['pro_img']['name'];
        $tempname = $_FILES['pro_img']["tmp_name"];
        $description = 'img/productimg' . $filename;
        move_uploaded_file($tempname, $description);


        $sql="INSERT INTO `ec_product`(`pro_id`, `pro_name`, `pro_cat`, `pro_subCat`, `pro_dec`, `stock`, `mpr`, `sell_price`, `pro_img`, `meta_title`, `meta_dec`, `status`, `added_on`) 
        VALUES ('$proid','$pro_name','$pro_subCat','$pro_dec','$stock','$mpr','$Meta_Title',' $Meta_KEyword ','$Meta_Discription','$filename','$slug_url','1','$added_on')";

       
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Product Added')</script>";
            echo "<script>window.location.href = 'view-product.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

if (isset($_POST['add-sub-categories'])) {
    $cat_id = mt_rand(11111, 99999);
    $cat_name = $_POST['subCategories'];
    // $Meta_Title = $_POST['Meta_Title'];
    $Meta_KEyword = $_POST['Meta_KEyword'];
    $Meta_Discription = $_POST['Meta_Discription'];
    $added_on = date('M d, Y');
    $parent_id = $_POST['parent_id'];
    $slug_url = slugUrl($cat_name);

    $sql = "INSERT INTO ec_sub_categories (cat_id, cat_name,Parent_id, Meta_KEyword, Meta_Discription, slug_url, status, added_on)
          VALUES ('$cat_id', '$cat_name', '$parent_id','$Meta_KEyword', '$Meta_Discription', '$slug_url', '1', '$added_on')";
    if (mysqli_query($conn, $sql)) {

        echo "<script>alert('sub Category Added')</script>";
        echo "<script>window.location.href = 'view-sub-categories.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

function get_categories()
{
    include 'db-conn.php';
    $sql = "SELECT * FROM ec_categories ORDER BY id DESC";
    $check = mysqli_query($conn, $sql);

    $output = "";
    while ($result = mysqli_fetch_assoc($check)) {
        $output .= "<tr>
     <td>" . $result['cat_id'] . "</td>
     <td>" . $result['cat_name'] . "</td>
     <td>" . $result['Meta_Discription'] . "</td>
     <td>" . $result['status'] . "</td>
     <td>" . $result['added_on'] . "</td>

     </tr>";
    }
    return $output;
}

function ec_sub_categories()
{
    include 'db-conn.php';
    $sql = "SELECT sub_cat.*, cat.cat_name as parent_category_name
        FROM `ec_categories` cat 
        JOIN `ec_sub_categories` sub_cat ON cat.id = sub_cat.Parent_id";

    $check = mysqli_query($conn, $sql);

    $output = "";
    while ($result = mysqli_fetch_assoc($check)) {
        $output .= "<tr>
      <td>" . $result['cat_id'] . "</td>
      <td>" . $result['cat_name'] . "</td>
      <td>" . $result['slug_url'] . "</td>
      <td>" . $result['parent_category_name'] . "</td>
      <td>" . $result['status'] . "</td>
      <td>" . $result['added_on'] . "</td>
 
      </tr>";
    }
    return $output;
}
