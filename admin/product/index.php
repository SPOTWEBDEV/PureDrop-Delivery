<?php 

include('../../server/connection.php');



// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $product_name = $_POST['product_name'] ?? '';
    $product_price = $_POST['product_price'] ?? 0;

    // Handle file upload
    $target_dir = "../../uploads/"; // Directory to store uploaded images
    $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
    $upload_ok = true;

    // Validate file upload
    if (isset($_FILES["product_image"]) && $_FILES["product_image"]["error"] === UPLOAD_ERR_OK) {
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check file type
        if (!in_array($file_type, ["jpg", "png", "jpeg", "gif"])) {
            echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
            $upload_ok = false;
        }

        // Attempt to upload file
        if ($upload_ok && !move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
            echo "There was an error uploading the file.";
            $upload_ok = false;
        }
    } else {
        $upload_ok = false;
        $target_file = ''; // Empty path if no file is uploaded
    }

    // Insert into the database if all validations pass
    if ($upload_ok) {
        $sql = "INSERT INTO products (product_name, product_image, product_price) VALUES (?, ?, ?)";

        if ($stmt = $connection->prepare($sql)) {
            $stmt->bind_param("ssd", $product_name, $target_file, $product_price); // Bind variables (string, string, double)

            if ($stmt->execute()) {
                echo "Product added successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    } else {
        echo "File upload failed.";
    }

    // Close database connection
    $connection->close();
}
?>






<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

         <!-- Mirrored from wowdash.wowtheme7.com/tailwind/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2025 18:34:41 GMT -->

         <head>
                  <meta charset="UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <title>Wowdash - Tailwind CSS Admin Dashboard HTML Template</title>
                  <link rel="icon" type="image/png" href="<?php echo $domain ?>assets/images/favicon.png" sizes="16x16">
                  <!-- google fonts -->
                  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;display=swap"
                           rel="stylesheet">
                  <!-- remix icon font css  -->
                  <link rel="stylesheet" href="<?php echo $domain ?>assets/css/remixicon.css">
                  <!-- Apex Chart css -->
                  <link rel="stylesheet" href="<?php echo $domain ?>assets/css/lib/apexcharts.css">
                  <!-- Data Table css -->
                  <link rel="stylesheet" href="<?php echo $domain ?>assets/css/lib/dataTables.min.css">
                  <!-- Text Editor css -->
                  <link rel="stylesheet" href="<?php echo $domain ?>assets/css/lib/editor-katex.min.css">
                  <link rel="stylesheet" href="<?php echo $domain ?>assets/css/lib/editor.atom-one-dark.min.css">
                  <link rel="stylesheet" href="<?php echo $domain ?>assets/css/lib/editor.quill.snow.css">
                  <!-- Date picker css -->
                  <link rel="stylesheet" href="<?php echo $domain ?>assets/css/lib/flatpickr.min.css">
                  <!-- Calendar css -->
                  <link rel="stylesheet" href="<?php echo $domain ?>assets/css/lib/full-calendar.css">
                  <!-- Vector Map css -->
                  <link rel="stylesheet" href="<?php echo $domain ?>assets/css/lib/jquery-jvectormap-2.0.5.css">
                  <!-- Popup css -->
                  <link rel="stylesheet" href="<?php echo $domain ?>assets/css/lib/magnific-popup.css">
                  <!-- Slick Slider css -->
                  <link rel="stylesheet" href="<?php echo $domain ?>assets/css/lib/slick.css">
                  <!-- prism css -->
                  <link rel="stylesheet" href="<?php echo $domain ?>assets/css/lib/prism.css">
                  <!-- file upload css -->
                  <link rel="stylesheet" href="<?php echo $domain ?>assets/css/lib/file-upload.css">

                  <link rel="stylesheet" href="<?php echo $domain ?>assets/css/lib/audioplayer.css">
                  <!-- main css -->
                  <link rel="stylesheet" href="<?php echo $domain ?>assets/css/style.css">
         </head>

         <body class="dark:bg-neutral-800 bg-neutral-100 dark:text-white">
                  <?php include('../components/sidenav.php') ?>

                  <main class="dashboard-main">
                      <?php  include('../components/navbar.php') ?>
                           

                           <div class="dashboard-main-body">

                                    <div class="flex flex-wrap items-center justify-between gap-2 mb-6">
                                             <h6 class="font-semibold mb-0 dark:text-white">Add product</h6>
                                             <ul class="flex items-center gap-[6px]">
                                                      <li class="font-medium">
                                                               <a href="index.html"
                                                                        class="flex items-center gap-2 hover:text-primary-600 dark:text-white">
                                                                        <iconify-icon
                                                                                 icon="solar:home-smile-angle-outline"
                                                                                 class="icon text-lg"></iconify-icon>
                                                                        Dashboard
                                                               </a>
                                                      </li>
                                                      <li class="dark:text-white">-</li>
                                                      <li class="font-medium dark:text-white">Add product Page</li>
                                             </ul>
                                    </div>

                                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mt-6">
                                            
                                                                                                                       

                                            <div class="col-span-12">
        <div class="card border-0">
          <div class="card-header">
            <h5 class="text-lg font-semibold mb-0">Input Custom Styles</h5>
          </div>
          <div class="card-body" >
            <form class="grid grid-cols-12 gap-4" method="POST" enctype="multipart/form-data">
              <div class="md:col-span-6 col-span-12">
                <label class="form-label">Name of Product</label>
                <input type="text" name="product_name" class="form-control" required>
              </div>
              <div class="md:col-span-6 col-span-12">
                <label class="form-label">Medium Size File Input </label>
                <input class="border border-neutral-200 dark:border-neutral-600 w-full rounded-lg" type="file" name="product_image">
              </div>
				
			  <div class="md:col-span-6 col-span-12">
                <label class="form-label">Product Price</label>
                <input type="number" name="product_price" class="form-control"  required>
              </div>
              
              
              
              
              <div class="col-span-12">
                <button class="btn btn-primary-600" type="submit">Submit form</button>
              </div>
            </form>
          </div>
        </div>
      </div>
                                    </div>
                           </div>
                           <?php echo include('../components/footer.php') ?>
                  </main>
                  <!-- jQuery library js -->
                  <script src="<?php echo $domain ?>assets/js/lib/jquery-3.7.1.min.js"></script>
                  <!-- Apex Chart js -->
                  <script src="<?php echo $domain ?>assets/js/lib/apexcharts.min.js"></script>
                  <!-- Data Table js -->
                  <script src="<?php echo $domain ?>assets/js/lib/simple-datatables.min.js"></script>
                  <!-- Iconify Font js -->
                  <script src="<?php echo $domain ?>assets/js/lib/iconify-icon.min.js"></script>
                  <!-- jQuery UI js -->
                  <script src="<?php echo $domain ?>assets/js/lib/jquery-ui.min.js"></script>
                  <!-- Vector Map js -->
                  <script src="<?php echo $domain ?>assets/js/lib/jquery-jvectormap-2.0.5.min.js"></script>
                  <script src="<?php echo $domain ?>assets/js/lib/jquery-jvectormap-world-mill-en.js"></script>
                  <!-- Popup js -->
                  <script src="<?php echo $domain ?>assets/js/lib/magnifc-popup.min.js"></script>
                  <!-- Slick Slider js -->
                  <script src="<?php echo $domain ?>assets/js/lib/slick.min.js"></script>
                  <!-- prism js -->
                  <script src="<?php echo $domain ?>assets/js/lib/prism.js"></script>
                  <!-- file upload js -->
                  <script src="<?php echo $domain ?>assets/js/lib/file-upload.js"></script>
                  <!-- audio player -->
                  <script src="<?php echo $domain ?>assets/js/lib/audioplayer.js"></script>

                  <script src="<?php echo $domain ?>assets/js/flowbite.min.js"></script>
                  <!-- main js -->
                  <script src="<?php echo $domain ?>assets/js/app.js"></script>

                  <script src="<?php echo $domain ?>assets/js/homeTwoChart.js"></script>

         </body>

         <!-- Mirrored from wowdash.wowtheme7.com/tailwind/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2025 18:34:42 GMT -->

</html>