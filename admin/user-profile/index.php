<?php

include('../../server/connection.php');

if(isset($_GET['user'])){
	$user = $_GET['user'];
	$check = mysqli_query($connection,"SELECT * FROM `user` WHERE `id`='$user'");
	if(mysqli_num_rows($check)){
		$row = mysqli_fetch_assoc($check);
		
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wowdash.wowtheme7.com/tailwind/demo/view-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2025 18:38:13 GMT -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wowdash - Tailwind CSS Admin Dashboard HTML Template</title>
  <link rel="icon" type="image/png" href="<?php echo $domain ?>assets/images/favicon.png" sizes="16x16">
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;display=swap" rel="stylesheet">
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
    <?php include('../components/navbar.php')  ?>
    
    <div class="dashboard-main-body">
        <div class="flex flex-wrap items-center justify-between gap-2 mb-6">
  <h6 class="font-semibold mb-0 dark:text-white">View Profile</h6>
  <ul class="flex items-center gap-[6px]">
    <li class="font-medium">
      <a href="index.html" class="flex items-center gap-2 hover:text-primary-600 dark:text-white">
        <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
        Dashboard
      </a>
    </li>
    <li class="dark:text-white">-</li>
    <li class="font-medium dark:text-white">View Profile</li>
  </ul>
</div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            <div class="col-span-12 lg:col-span-9">
                <div class="user-grid-card relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden bg-white dark:bg-neutral-700 h-full">
                    <img src="<?php echo $domain ?>assets/images/user-grid/user-grid-bg1.png" alt="" class="w-full object-fit-cover">
                    <div class="pb-6 ms-6 mb-6 me-6 -mt-[100px]">
                        <div class="text-center border-b border-neutral-200 dark:border-neutral-600">
                            <img src="<?php echo $domain ?>assets/images/user-grid/user-grid-img14.png" alt="" class="border br-white border-width-2-px w-200-px h-[200px] rounded-full object-fit-cover mx-auto">
                            <h6 class="mb-0 mt-4"><?php echo $row['name'] ?></h6>
                            <span class="text-secondary-light mb-4"><?php echo $row['email'] ?></span>
                        </div>
                        <div class="mt-6">
                            <h6 class="text-xl mb-4">Personal Info</h6>
                            <ul>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200">Full Name</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: <?php echo $row['name'] ?></span>
                                </li>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200"> Email</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: <?php echo $row['email'] ?></span>
                                </li>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200"> Phone Number</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: <?php echo $row['phone'] ?></span>
                                </li>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200"> State</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: <?php echo $row['state'] ?></span>
                                </li>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200"> Account Status</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: <?php echo $row['status'] ?></span>
                                </li>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200"> Register Date</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: <?php echo $row['date'] ?></span>
                                </li>
                                
                            </ul>
                        </div>
						<div class="mt-6">
                            <h6 class="text-xl mb-4">Billing Info</h6>
                            <ul>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200">Full Name</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: <?php echo $row['name'] ?></span>
                                </li>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200"> Email</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: <?php echo $row['email'] ?></span>
                                </li>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200"> Phone Number</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: <?php echo $row['phone'] ?></span>
                                </li>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200"> State</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: <?php echo $row['state'] ?></span>
                                </li>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200"> Account Status</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: <?php echo $row['status'] ?></span>
                                </li>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200"> Register Date</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: <?php echo $row['date'] ?></span>
                                </li>
                                
                            </ul>
                        </div>
						
						
						
                    </div>
                </div>
            </div>
           
        </div>
    </div>
  
    <?php include('../components/footer.php') ?>
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

<script>
    // ======================== Upload Image Start =====================
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                $('#imagePreview').hide();
                $('#imagePreview').fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
    // ======================== Upload Image End =====================

    // ================== Password Show Hide Js Start ==========
    function initializePasswordToggle(toggleSelector) {
        $(toggleSelector).on('click', function() {
            $(this).toggleClass("ri-eye-off-line");
            var input = $($(this).attr("data-toggle"));
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    }
    // Call the function
    initializePasswordToggle('.toggle-password');
  // ========================= Password Show Hide Js End ===========================
</script>

</body>

<!-- Mirrored from wowdash.wowtheme7.com/tailwind/demo/view-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2025 18:38:13 GMT -->
</html>
