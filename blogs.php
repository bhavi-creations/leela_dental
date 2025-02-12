<?php
include './db.connection/db_connection.php'; // Include your database connection file

// Retrieve service filter from GET request
$service = isset($_GET['service']) ? $_GET['service'] : '';

// Prepare SQL query with optional service filter
$sql = "SELECT id, title, main_content, main_image, created_at FROM blogs";
if (!empty($service)) {
  $sql .= " WHERE service = ?";
}
$sql .= " ORDER BY created_at DESC";

// Initialize statement
$stmt = $conn->prepare($sql);

// Bind parameters if service is set
if (!empty($service)) {
  $stmt->bind_param("s", $service);
}

// Execute the statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();
?>


<?php include 'header.php'; ?>



<!-- <div class="breadcumb-wrapper ">
  <div class="parallax" data-parallax-image="assets/img/about/krishnadentaure_blogs_page.png"></div>
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Blogs</h1>
      <div class="breadcumb-menu-wrap">
        <i class="far fa-home-lg"></i>
        <ul class="breadcumb-menu">
          <li><a href="index.php">Home</a></li>
          <li class="active">Blogs</li>
        </ul>
      </div>
    </div>
  </div>
</div> -->




<main>
  <!-- Filter Buttons -->
  <div class="container">
    <div class="filter_buttons redirect_section mt-5">
      <a href="blogs.php?service="><button class="redirect_blog_srivice">All</button></a>
 
      
      <a href="blogs.php?service=Implants"><button class="redirect_blog_srivice">Implants</button></a>
      <a href="blogs.php?service=Root Canal"><button class="redirect_blog_srivice">Root Canal</button></a>
      <a href="blogs.php?service=Tooth Aligners"><button class="redirect_blog_srivice">Tooth Aligners</button></a>
      <a href="blogs.php?service=Bridges"><button class="redirect_blog_srivice">Bridges</button></a>
      <a href="blogs.php?service=Gum Surgery"><button class="redirect_blog_srivice"> Gum Surgery</button></a>

     
      <a href="blogs.php?service=Maxillofacial Surger"><button class="redirect_blog_srivice">Maxillofacial Surger</button></a>
      <a href="blogs.php?service=Laser Treatment"><button class="redirect_blog_srivice">Laser Treatment</button></a>
      <a href="blogs.php?service=Teeth Whitening"><button class="redirect_blog_srivice">Teeth Whitening</button></a>
      <a href="blogs.php?service=Veneers"><button class="redirect_blog_srivice">Veneers</button></a>
      <a href="blogs.php?service=Composite Filler"><button class="redirect_blog_srivice">Composite Filler</button></a>
      
      <a href="blogs.php?service=Teeth Jewellery"><button class="redirect_blog_srivice">Teeth Jewellery</button></a>
      
    </div>
  </div>

  <!-- Blogs Section -->
  <div class="container blog-sidebar-list" style="padding-top: 20px; padding-bottom: 20px;">
    <div class="row">
      <div class="col-lg-12">
        <div class="grid row">
          <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $image_path = !empty($row['main_image']) ? "admin/uploads/photos/{$row['main_image']}" : "default_image.png";
              echo "
                                    <div class='grid-item col-sm-12 col-lg-4 mb-5'>
                                        <div class='post-box card_bg_div_box'>
                                            <figure>
                                                <a href='fullblog.php?id={$row['id']}'>
                                                    <img src='{$image_path}' alt='Blog Image' class='img-fluid blog_box_image'>
                                                </a>
                                            </figure>
                                            <div class='box-content'>
                                                <h5 class='box-title'><a  class='box-title' href='fullblog.php?id={$row['id']}'>" . htmlspecialchars($row['title']) . "</a></h5>
                                                <p class='post-desc  mt-5' style='text-align: justify;'>" . substr(strip_tags($row['main_content']), 0, 90) . "...</p>
                                                <a href='fullblog.php?id={$row['id']}'><button class='blog_main_btn'>Read More..</button></a>
                                            </div>
                                        </div>
                                    </div>";
            }
          } else {
            echo "<p>No blog posts found.</p>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</main>










<?php include 'footer.php'; ?>