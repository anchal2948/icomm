<?php include 'db-conn.php'; ?>
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
<!DOCTYPE html>
<html lang="zxx">
  <!DOCTYPE html>
  <html lang="zxx">
    <!-- Mirrored from demo.dashboardpack.com/sales-html/Layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Apr 2023 14:08:09 GMT -->
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>Ecom</title> <?php include 'links.php'
    ?>
    </head>
    <body class="crm_body_bg"> <?php include 'header.php'
    ?> <section class="main_content dashboard_part large_header_bg">
        <div class="container-fluid g-0">
          <div class="row">
            <div class="col-lg-12 p-0 ">
              <div class="header_iner d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                  <i class="ti-menu"></i>
                </div>
                <div class="serach_field-area d-flex align-items-center">
                  <div class="search_inner">
                    <form action="#">
                      <div class="search_field">
                        <input type="text" placeholder="Search here...">
                      </div>
                      <button type="submit">
                        <img src="img/icon/icon_search.svg" alt>
                      </button>
                    </form>
                  </div>
                  <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
                </div>
                <div class="header_right d-flex justify-content-between align-items-center">
                  <div class="header_notification_warp d-flex align-items-center">
                    <li>
                      <a class="bell_notification_clicker nav-link-notify" href="#">
                        <img src="img/icon/bell.svg" alt>
                      </a>
                      <div class="Menu_NOtification_Wrap">
                        <div class="notification_Header">
                          <h4>Notifications</h4>
                        </div>
                        <div class="Notification_body">
                          <div class="single_notify d-flex align-items-center">
                            <div class="notify_thumb">
                              <a href="#">
                                <img src="img/staf/2.png" alt>
                              </a>
                            </div>
                            <div class="notify_content">
                              <a href="#">
                                <h5>Cool Marketing </h5>
                              </a>
                              <p>Lorem ipsum dolor sit amet</p>
                            </div>
                          </div>
                          <div class="single_notify d-flex align-items-center">
                            <div class="notify_thumb">
                              <a href="#">
                                <img src="img/staf/4.png" alt>
                              </a>
                            </div>
                            <div class="notify_content">
                              <a href="#">
                                <h5>Awesome packages</h5>
                              </a>
                              <p>Lorem ipsum dolor sit amet</p>
                            </div>
                          </div>
                          <div class="single_notify d-flex align-items-center">
                            <div class="notify_thumb">
                              <a href="#">
                                <img src="img/staf/3.png" alt>
                              </a>
                            </div>
                            <div class="notify_content">
                              <a href="#">
                                <h5>what a packages</h5>
                              </a>
                              <p>Lorem ipsum dolor sit amet</p>
                            </div>
                          </div>
                          <div class="single_notify d-flex align-items-center">
                            <div class="notify_thumb">
                              <a href="#">
                                <img src="img/staf/2.png" alt>
                              </a>
                            </div>
                            <div class="notify_content">
                              <a href="#">
                                <h5>Cool Marketing </h5>
                              </a>
                              <p>Lorem ipsum dolor sit amet</p>
                            </div>
                          </div>
                          <div class="single_notify d-flex align-items-center">
                            <div class="notify_thumb">
                              <a href="#">
                                <img src="img/staf/4.png" alt>
                              </a>
                            </div>
                            <div class="notify_content">
                              <a href="#">
                                <h5>Awesome packages</h5>
                              </a>
                              <p>Lorem ipsum dolor sit amet</p>
                            </div>
                          </div>
                          <div class="single_notify d-flex align-items-center">
                            <div class="notify_thumb">
                              <a href="#">
                                <img src="img/staf/3.png" alt>
                              </a>
                            </div>
                            <div class="notify_content">
                              <a href="#">
                                <h5>what a packages</h5>
                              </a>
                              <p>Lorem ipsum dolor sit amet</p>
                            </div>
                          </div>
                        </div>
                        <div class="nofity_footer">
                          <div class="submit_button text-center pt_20">
                            <a href="#" class="btn_1">See More</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <a class="CHATBOX_open nav-link-notify" href="#">
                        <img src="img/icon/msg.svg" alt>
                      </a>
                    </li>
                  </div>
                  <div class="profile_info">
                    <img src="img/client_img.png" alt="#">
                    <div class="profile_info_iner">
                      <div class="profile_author_name">
                        <p>Neurologist </p>
                        <h5>Dr. Robar Smith</h5>
                      </div>
                      <div class="profile_info_details">
                        <a href="#">My Profile </a>
                        <a href="#">Settings</a>
                        <a href="#">Log Out </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
              <div class="box_header m-0">
                <div class="main-title">
                  <h3 class="m-0">Product</h3>
                </div>
              </div>
            </div>
            <div class="white_card_body">
              <div class="card-body">
                <form action="function.php" method="post" enctype="multipart/form-data">
                  <div class="row mb-6">
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="inputEmail4">Product Name</label>
                      <input type="name" class="form-control" name="pro_name" id="name" placeholder="name">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="inputEmail4">Categories</label>
                      <select class="form-control" name="parent_id"> 
                        <option value="">---Select----</option>
                        <?php


                                        $sql = "SELECT * FROM ec_categories ORDER BY id DESC";
                                        $check = mysqli_query($conn, $sql);


                                        while ($result = mysqli_fetch_assoc($check)) { ?> <option value="
																									<?php echo $result['id']; ?>"> <?php echo $result['cat_name']; ?> </option> <?php
                                        } ?> </select>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="inputEmail4">Sub Categories</label>
                      <input type="name" class="form-control" name="pro_subCat" id="name" placeholder="name">
         
                      <?php
                      ?>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="inputEmail4">Stock</label>
                      <input type="name" class="form-control" name="stock" id="name" placeholder="Stock">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="inputEmail4">Image</label>
                      <input type="file" class="form-control" name="pro_img" id="pro_img" placeholder="Pro Image">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="inputEmail4"> MRP</label>
                      <input type="name" class="form-control" name="mpr" id="name" placeholder="MRP">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="inputEmail4"> Seling Price</label>
                      <input type="name" class="form-control" name="sell_price" id="name" placeholder="Price">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="inputEmail4">Meta Title</label>
                      <input type="name" class="form-control" name="meta_title" id="name" placeholder="Meta Title">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="inputEmail4">Meta KEyword</label>
                      <input type="name" class="form-control" name="Meta_KEyword" id="name" placeholder="Meta KEyword">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="inputEmail4">Meta Discription</label>
                      <input type="name" class="form-control" name="meta_dec" id="name" placeholder="Meta Discription">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label" for="inputState">Status</label>
                      <select id="inputState" class="form-control" name="Status">
                        <option selected>Choose...</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                      </select>
                    </div>
                    <div class="col-md-12 mb-3">
                      <label class="form-label" for="inputEmail4">Product Discription</label>
                      <textarea name="pro_desc" class="form-control" id="pro_desc" placeholder="pro dec"></textarea>
                    </div>
                  </div>
                  <div class>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-label form-check-label" for="gridCheck"> Check me out </label>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <button type="submit" class="btn btn-primary" name="add_Product">Add Product</button>
                </form>
              </div>
            </div> <?php include 'footer.php'?>
               