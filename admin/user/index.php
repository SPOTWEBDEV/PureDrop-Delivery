<?php 

include('../../server/connection.php');



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
                                             <h6 class="font-semibold mb-0 dark:text-white">All User</h6>
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
                                                      <li class="font-medium dark:text-white">All User Page</li>
                                             </ul>
                                    </div>

                                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mt-6">
                                            
                                                                                                                       

                                             <div class="lg:col-span-12 2xl:col-span-6">
                                                      <div class="card h-full border-0 overflow-hidden">
                                                               <div
                                                                        class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 py-4 px-6 flex items-center justify-between">
                                                                        <h6 class="text-lg font-semibold mb-0">All Users
                                                                            </h6>
                                                                       
                                                               </div>
                                                               <div class="card-body p-6">
                                                                        <div class="table-responsive scroll-sm">
                                                                                 <table
                                                                                          class="table bordered-table style-two mb-0">
                                                                                          <thead>
                                                                                                   <tr>
                                                                                                            <th
                                                                                                                     scope="col">
                                                                                                                     
                                                                                                                     ID
                                                                                                            </th>
                                                                                                            <th
                                                                                                                     scope="col">
                                                                                                                     Name
                                                                                                            </th>
                                                                                                            <th
                                                                                                                     scope="col">
                                                                                                                     Email
                                                                                                            </th>
                                                                                                            <th
                                                                                                                     scope="col">
                                                                                                                     Phone
                                                                                                            </th>
																									       <td scope="col">State</td>
																									        <td scope="col">Account Status</td>
                                                                                                            <th scope="col">Date of Register</th>
                                                                                                       
                                                                                                       
                                                                                                   </tr>
                                                                                          </thead>
                                                                                          <tbody>
                                                                                              <?php $select_user = mysqli_query($connection,"SELECT * FROM `user`");
                                                                                                 if(mysqli_num_rows($select_user)){
                                                                                                     $count=0;
                                                                                                     while($row = mysqli_fetch_assoc($select_user)){ $count++ ?>
                                                                                              
                                                                                                        <tr>
                                                                                                            <td>
                                                                                                                <?php echo $count ?>
                                                                                                            </td>
                                                                                                            <td><?php echo $row['name'] ?>
                                                                                                            </td>
                                                                                                            <td><?php echo $row['email'] ?></td>
                                                                                                            <td><?php echo $row['phone']  ?></td>
																											<td><?php echo $row['state'] ?></td>
                                                                                                            <td>
                                                                                                                <?php if($row['status'] == 'active'){ ?>
                                                                                                                
                                                                                                                
                                                                                                         
                                                                                    
                                                                                                                             <span class="bg-success-100 dark:bg-danger-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span>
                                                                                                                  <?php }else{?> 
                                                                                                                           <span
                                                                                                                              class="bg-danger-100 dark:bg-danger-600/25 text-danger-600 dark:text-danger-400 px-6 py-1.5 rounded-full font-medium text-sm">In-Active</span>
                                                                                                            
                                                                                                           
                                                                                            
                                                                                                                   <?php }  ?>
                                                                                                                </td>
                                                                                                               <td><?php echo $row['date'] ?>
                                                                                                               </td>
                                                                                                              </tr>
                                                                                              
                                                                                                         
                                                                                                    <?php }}else{ ?> <p>Table is Empty</p> <?php } ?>
                                                                                          </tbody>
                                                                                 </table>
                                                                        </div>
                                                               </div>
                                                      </div>
                                             </div>
                                             <!-- Latest Performance End -->
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