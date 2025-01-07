<?php 

include('../server/connection.php');



?>

<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">



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
                  <?php include('./components/sidenav.php') ?>

                  <main class="dashboard-main">
                      <?php  include('./components/navbar.php') ?>
                           

                           <div class="dashboard-main-body">

                                    <div class="flex flex-wrap items-center justify-between gap-2 mb-6">
                                             <h6 class="font-semibold mb-0 dark:text-white">Dashboard</h6>
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
                                                      <li class="font-medium dark:text-white">CRM</li>
                                             </ul>
                                    </div>

                                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mt-6">
                                             <div class="lg:col-span-12 2xl:col-span-8">
                                                      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                                                               <div
                                                                        class="card px-4 py-5 shadow-2 rounded-lg border-gray-200 dark:border-neutral-600 h-full bg-gradient-to-l from-primary-600/10 to-bg-white">
                                                                        <div class="card-body p-0">
                                                                                 <div
                                                                                          class="flex flex-wrap items-center justify-between gap-1 mb-2">
                                                                                          <div
                                                                                                   class="flex items-center gap-2">
                                                                                                   <span
                                                                                                            class="mb-0 w-[44px] h-[44px] bg-primary-600 shrink-0 text-white flex justify-center items-center rounded-full h6">
                                                                                                            <iconify-icon
                                                                                                                     icon="mingcute:user-follow-fill"
                                                                                                                     class="icon">
                                                                                                            </iconify-icon>
                                                                                                   </span>
                                                                                                   <div>
                                                                                                            <span
                                                                                                                     class="mb-2 font-medium text-secondary-light text-sm">New
                                                                                                                     Users</span>
                                                                                                            <h6
                                                                                                                     class="font-semibold">
                                                                                                                     15,000
                                                                                                            </h6>
                                                                                                   </div>
                                                                                          </div>

                                                                                          <div id="new-user-chart"
                                                                                                   class="remove-tooltip-title rounded-tooltip-value">
                                                                                          </div>
                                                                                 </div>
                                                                                 <p class="text-sm mb-0">Increase by
                                                                                          <span
                                                                                                   class="bg-success-100 dark:bg-success-600/25 px-1 py-px rounded font-medium text-success-600 dark:text-success-400 text-sm">+200</span>
                                                                                          this week
                                                                                 </p>
                                                                        </div>
                                                               </div>

                                                               <div
                                                                        class="card px-4 py-5 shadow-2 rounded-lg border-gray-200 dark:border-neutral-600 h-full bg-gradient-to-l from-success-600/10 to-bg-white">
                                                                        <div class="card-body p-0">
                                                                                 <div
                                                                                          class="flex flex-wrap items-center justify-between gap-1 mb-2">
                                                                                          <div
                                                                                                   class="flex items-center gap-2">
                                                                                                   <span
                                                                                                            class="mb-0 w-[44px] h-[44px] bg-success-600 shrink-0 text-white flex justify-center items-center rounded-full h6">
                                                                                                            <iconify-icon
                                                                                                                     icon="mingcute:user-follow-fill"
                                                                                                                     class="icon">
                                                                                                            </iconify-icon>
                                                                                                   </span>
                                                                                                   <div>
                                                                                                            <span
                                                                                                                     class="mb-2 font-medium text-secondary-light text-sm">Active
                                                                                                                     Users</span>
                                                                                                            <h6
                                                                                                                     class="font-semibold">
                                                                                                                     8,000
                                                                                                            </h6>
                                                                                                   </div>
                                                                                          </div>

                                                                                          <div id="active-user-chart"
                                                                                                   class="remove-tooltip-title rounded-tooltip-value">
                                                                                          </div>
                                                                                 </div>
                                                                                 <p class="text-sm mb-0">Increase by
                                                                                          <span
                                                                                                   class="bg-success-100 dark:bg-success-600/25 px-1 py-px rounded font-medium text-success-600 dark:text-success-400 text-sm">+200</span>
                                                                                          this week
                                                                                 </p>
                                                                        </div>
                                                               </div>

                                                               <div
                                                                        class="card px-4 py-5 shadow-2 rounded-lg border-gray-200 dark:border-neutral-600 h-full bg-gradient-to-l from-warning-600/10 to-bg-white">
                                                                        <div class="card-body p-0">
                                                                                 <div
                                                                                          class="flex flex-wrap items-center justify-between gap-1 mb-2">
                                                                                          <div
                                                                                                   class="flex items-center gap-2">
                                                                                                   <span
                                                                                                            class="mb-0 w-[44px] h-[44px] bg-warning-600 text-white shrink-0 flex justify-center items-center rounded-full h6">
                                                                                                            <iconify-icon
                                                                                                                     icon="iconamoon:discount-fill"
                                                                                                                     class="icon">
                                                                                                            </iconify-icon>
                                                                                                   </span>
                                                                                                   <div>
                                                                                                            <span
                                                                                                                     class="mb-2 font-medium text-secondary-light text-sm">Total
                                                                                                                     Sales</span>
                                                                                                            <h6
                                                                                                                     class="font-semibold">
                                                                                                                     $5,00,000
                                                                                                            </h6>
                                                                                                   </div>
                                                                                          </div>

                                                                                          <div id="total-sales-chart"
                                                                                                   class="remove-tooltip-title rounded-tooltip-value">
                                                                                          </div>
                                                                                 </div>
                                                                                 <p class="text-sm mb-0">Increase by
                                                                                          <span
                                                                                                   class="bg-danger-100 dark:bg-danger-600/25 px-1 py-px rounded font-medium text-danger-600 dark:text-danger-400 text-sm">-$10k</span>
                                                                                          this week
                                                                                 </p>
                                                                        </div>
                                                               </div>

                                                               <div
                                                                        class="card px-4 py-5 shadow-2 rounded-lg border-gray-200 dark:border-neutral-600 h-full bg-gradient-to-l from-purple-600/10 to-bg-white">
                                                                        <div class="card-body p-0">
                                                                                 <div
                                                                                          class="flex flex-wrap items-center justify-between gap-1 mb-2">
                                                                                          <div
                                                                                                   class="flex items-center gap-2">
                                                                                                   <span
                                                                                                            class="mb-0 w-[44px] h-[44px] bg-purple-600 text-white shrink-0 flex justify-center items-center rounded-full h6">
                                                                                                            <iconify-icon
                                                                                                                     icon="mdi:message-text"
                                                                                                                     class="icon">
                                                                                                            </iconify-icon>
                                                                                                   </span>
                                                                                                   <div>
                                                                                                            <span
                                                                                                                     class="mb-2 font-medium text-secondary-light text-sm">Conversion</span>
                                                                                                            <h6
                                                                                                                     class="font-semibold">
                                                                                                                     25%
                                                                                                            </h6>
                                                                                                   </div>
                                                                                          </div>

                                                                                          <div id="conversion-user-chart"
                                                                                                   class="remove-tooltip-title rounded-tooltip-value">
                                                                                          </div>
                                                                                 </div>
                                                                                 <p class="text-sm mb-0">Increase by
                                                                                          <span
                                                                                                   class="bg-success-100 dark:bg-success-600/25 px-1 py-px rounded font-medium text-success-600 dark:text-success-400 text-sm">+5%</span>
                                                                                          this week
                                                                                 </p>
                                                                        </div>
                                                               </div>

                                                               <div
                                                                        class="card px-4 py-5 shadow-2 rounded-lg border-gray-200 dark:border-neutral-600 h-full bg-gradient-to-l from-pink-600/10 to-bg-white">
                                                                        <div class="card-body p-0">
                                                                                 <div
                                                                                          class="flex flex-wrap items-center justify-between gap-1 mb-2">
                                                                                          <div
                                                                                                   class="flex items-center gap-2">
                                                                                                   <span
                                                                                                            class="mb-0 w-[44px] h-[44px] bg-pink-600 text-white shrink-0 flex justify-center items-center rounded-full h6">
                                                                                                            <iconify-icon
                                                                                                                     icon="mdi:leads"
                                                                                                                     class="icon">
                                                                                                            </iconify-icon>
                                                                                                   </span>
                                                                                                   <div>
                                                                                                            <span
                                                                                                                     class="mb-2 font-medium text-secondary-light text-sm">Leads</span>
                                                                                                            <h6
                                                                                                                     class="font-semibold">
                                                                                                                     250
                                                                                                            </h6>
                                                                                                   </div>
                                                                                          </div>

                                                                                          <div id="leads-chart"
                                                                                                   class="remove-tooltip-title rounded-tooltip-value">
                                                                                          </div>
                                                                                 </div>
                                                                                 <p class="text-sm mb-0">Increase by
                                                                                          <span
                                                                                                   class="bg-success-100 dark:bg-success-600/25 px-1 py-px rounded font-medium text-success-600 dark:text-success-400 text-sm">+20</span>
                                                                                          this week
                                                                                 </p>
                                                                        </div>
                                                               </div>

                                                               <div
                                                                        class="card px-4 py-5 shadow-2 rounded-lg border-gray-200 dark:border-neutral-600 h-full bg-gradient-to-l from-cyan-600/10 to-bg-white">
                                                                        <div class="card-body p-0">
                                                                                 <div
                                                                                          class="flex flex-wrap items-center justify-between gap-1 mb-2">
                                                                                          <div
                                                                                                   class="flex items-center gap-2">
                                                                                                   <span
                                                                                                            class="mb-0 w-[44px] h-[44px] bg-cyan-600 text-white shrink-0 flex justify-center items-center rounded-full h6">
                                                                                                            <iconify-icon
                                                                                                                     icon="streamline:bag-dollar-solid"
                                                                                                                     class="icon">
                                                                                                            </iconify-icon>
                                                                                                   </span>
                                                                                                   <div>
                                                                                                            <span
                                                                                                                     class="mb-2 font-medium text-secondary-light text-sm">Total
                                                                                                                     Profit</span>
                                                                                                            <h6
                                                                                                                     class="font-semibold">
                                                                                                                     $3,00,700
                                                                                                            </h6>
                                                                                                   </div>
                                                                                          </div>

                                                                                          <div id="total-profit-chart"
                                                                                                   class="remove-tooltip-title rounded-tooltip-value">
                                                                                          </div>
                                                                                 </div>
                                                                                 <p class="text-sm mb-0">Increase by
                                                                                          <span
                                                                                                   class="bg-success-100 dark:bg-success-600/25 px-1 py-px rounded font-medium text-success-600 dark:text-success-400 text-sm">+$15k</span>
                                                                                          this week
                                                                                 </p>
                                                                        </div>
                                                               </div>
                                                      </div>
                                             </div>
                                             

                                            


                                            


                                             <!-- Latest Performance Start -->
                                             <div class="lg:col-span-12 2xl:col-span-6">
                                                      <div class="card h-full border-0 overflow-hidden">
                                                               <div
                                                                        class="card-header border-b border-neutral-200 dark:border-neutral-600 bg-white dark:bg-neutral-700 ps-0 py-0 pe-6 flex items-center justify-between">
                                                                        <div
                                                                                 class="border-b border-gray-200 dark:border-gray-700">
                                                                                 <ul class="flex flex-wrap -mb-px text-sm font-medium text-center"
                                                                                          id="default-styled-tab"
                                                                                          data-tabs-toggle="#default-styled-tab-content"
                                                                                          data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500"
                                                                                          data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                                                                                          role="tablist">
                                                                                          <li class=""
                                                                                                   role="presentation">
                                                                                                   <button class="inline-block p-4 border-b-2 rounded-t-lg transition-colors ease-in-out duration-300 text-neutral-600 dark:text-white"
                                                                                                            id="todoList-styled-tab"
                                                                                                            data-tabs-target="#styled-todoList"
                                                                                                            type="button"
                                                                                                            role="tab"
                                                                                                            aria-controls="styled-todoList"
                                                                                                            aria-selected="false">To
                                                                                                            Do
                                                                                                            List</button>
                                                                                          </li>
                                                                                          <li class=""
                                                                                                   role="presentation">
                                                                                                   <button class="inline-block p-4 border-b-2 rounded-t-lg transition-colors ease-in-out duration-300 text-neutral-600 dark:text-white hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                                                                                            id="recentLead-styled-tab"
                                                                                                            data-tabs-target="#styled-recentLead"
                                                                                                            type="button"
                                                                                                            role="tab"
                                                                                                            aria-controls="styled-recentLead"
                                                                                                            aria-selected="false">Recent
                                                                                                            Leads</button>
                                                                                          </li>
                                                                                 </ul>
                                                                        </div>
                                                                        <a href="javascript:void(0)"
                                                                                 class="text-primary-600 dark:text-primary-600 hover-text-primary flex items-center gap-1">
                                                                                 View All
                                                                                 <iconify-icon
                                                                                          icon="solar:alt-arrow-right-linear"
                                                                                          class="icon"></iconify-icon>
                                                                        </a>
                                                               </div>

                                                               <div class="card-body p-6">
                                                                        <div id="default-styled-tab-content">
                                                                                 <div class="hidden rounded-lg"
                                                                                          id="styled-todoList"
                                                                                          role="tabpanel">
                                                                                          <div
                                                                                                   class="table-responsive scroll-sm">
                                                                                                   <table
                                                                                                            class="table bordered-table mb-0">
                                                                                                            <thead>
                                                                                                                     <tr>
                                                                                                                              <th
                                                                                                                                       scope="col">
                                                                                                                                       Task
                                                                                                                                       Name
                                                                                                                              </th>
                                                                                                                              <th
                                                                                                                                       scope="col">
                                                                                                                                       Assigned
                                                                                                                                       To
                                                                                                                              </th>
                                                                                                                              <th
                                                                                                                                       scope="col">
                                                                                                                                       Due
                                                                                                                                       Date
                                                                                                                              </th>
                                                                                                                              <th
                                                                                                                                       scope="col">
                                                                                                                                       Status
                                                                                                                              </th>
                                                                                                                              <th
                                                                                                                                       scope="col">
                                                                                                                                       Action
                                                                                                                              </th>
                                                                                                                     </tr>
                                                                                                            </thead>
                                                                                                            <tbody>
                                                                                                                     <tr>
                                                                                                                              <td>
                                                                                                                                       <div>
                                                                                                                                                <span
                                                                                                                                                         class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel
                                                                                                                                                         Management
                                                                                                                                                         System</span>
                                                                                                                                                <span
                                                                                                                                                         class="text-sm block font-normal text-secondary-light">#5632</span>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                              <td>Kathryn
                                                                                                                                       Murphy
                                                                                                                              </td>
                                                                                                                              <td>27 Mar
                                                                                                                                       2024
                                                                                                                              </td>
                                                                                                                              <td> <span
                                                                                                                                                class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span>
                                                                                                                              </td>
                                                                                                                              <td
                                                                                                                                       class="text-center text-neutral-700 text-xl">

                                                                                                                                       <button data-dropdown-toggle="dropdown1"
                                                                                                                                                class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white"
                                                                                                                                                type="button">
                                                                                                                                                <i
                                                                                                                                                         class="ri-more-2-fill"></i>
                                                                                                                                       </button>

                                                                                                                                       <!-- Dropdown menu -->
                                                                                                                                       <div id="dropdown1"
                                                                                                                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                                                                                                                <ul
                                                                                                                                                         class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another
                                                                                                                                                                           Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something
                                                                                                                                                                           else</a>
                                                                                                                                                         </li>
                                                                                                                                                </ul>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                     </tr>
                                                                                                                     <tr>
                                                                                                                              <td>
                                                                                                                                       <div>
                                                                                                                                                <span
                                                                                                                                                         class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel
                                                                                                                                                         Management
                                                                                                                                                         System</span>
                                                                                                                                                <span
                                                                                                                                                         class="text-sm block font-normal text-secondary-light">#5632</span>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                              <td>Darlene
                                                                                                                                       Robertson
                                                                                                                              </td>
                                                                                                                              <td>27 Mar
                                                                                                                                       2024
                                                                                                                              </td>
                                                                                                                              <td> <span
                                                                                                                                                class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span>
                                                                                                                              </td>
                                                                                                                              <td
                                                                                                                                       class="text-center text-neutral-700 text-xl">
                                                                                                                                       <button data-dropdown-toggle="dropdown2"
                                                                                                                                                class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white"
                                                                                                                                                type="button">
                                                                                                                                                <i
                                                                                                                                                         class="ri-more-2-fill"></i>
                                                                                                                                       </button>

                                                                                                                                       <!-- Dropdown menu -->
                                                                                                                                       <div id="dropdown2"
                                                                                                                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                                                                                                                <ul
                                                                                                                                                         class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another
                                                                                                                                                                           Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something
                                                                                                                                                                           else</a>
                                                                                                                                                         </li>
                                                                                                                                                </ul>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                     </tr>
                                                                                                                     <tr>
                                                                                                                              <td>
                                                                                                                                       <div>
                                                                                                                                                <span
                                                                                                                                                         class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel
                                                                                                                                                         Management
                                                                                                                                                         System</span>
                                                                                                                                                <span
                                                                                                                                                         class="text-sm block font-normal text-secondary-light">#5632</span>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                              <td>Courtney
                                                                                                                                       Henry
                                                                                                                              </td>
                                                                                                                              <td>27 Mar
                                                                                                                                       2024
                                                                                                                              </td>
                                                                                                                              <td> <span
                                                                                                                                                class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span>
                                                                                                                              </td>
                                                                                                                              <td
                                                                                                                                       class="text-center text-neutral-700 text-xl">
                                                                                                                                       <button data-dropdown-toggle="dropdown3"
                                                                                                                                                class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white"
                                                                                                                                                type="button">
                                                                                                                                                <i
                                                                                                                                                         class="ri-more-2-fill"></i>
                                                                                                                                       </button>

                                                                                                                                       <!-- Dropdown menu -->
                                                                                                                                       <div id="dropdown3"
                                                                                                                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                                                                                                                <ul
                                                                                                                                                         class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another
                                                                                                                                                                           Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something
                                                                                                                                                                           else</a>
                                                                                                                                                         </li>
                                                                                                                                                </ul>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                     </tr>
                                                                                                                     <tr>
                                                                                                                              <td>
                                                                                                                                       <div>
                                                                                                                                                <span
                                                                                                                                                         class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel
                                                                                                                                                         Management
                                                                                                                                                         System</span>
                                                                                                                                                <span
                                                                                                                                                         class="text-sm block font-normal text-secondary-light">#5632</span>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                              <td>Jenny Wilson
                                                                                                                              </td>
                                                                                                                              <td>27 Mar
                                                                                                                                       2024
                                                                                                                              </td>
                                                                                                                              <td> <span
                                                                                                                                                class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span>
                                                                                                                              </td>
                                                                                                                              <td
                                                                                                                                       class="text-center text-neutral-700 text-xl">
                                                                                                                                       <button data-dropdown-toggle="dropdown4"
                                                                                                                                                class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white"
                                                                                                                                                type="button">
                                                                                                                                                <i
                                                                                                                                                         class="ri-more-2-fill"></i>
                                                                                                                                       </button>

                                                                                                                                       <!-- Dropdown menu -->
                                                                                                                                       <div id="dropdown4"
                                                                                                                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                                                                                                                <ul
                                                                                                                                                         class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another
                                                                                                                                                                           Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something
                                                                                                                                                                           else</a>
                                                                                                                                                         </li>
                                                                                                                                                </ul>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                     </tr>
                                                                                                                     <tr>
                                                                                                                              <td>
                                                                                                                                       <div>
                                                                                                                                                <span
                                                                                                                                                         class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel
                                                                                                                                                         Management
                                                                                                                                                         System</span>
                                                                                                                                                <span
                                                                                                                                                         class="text-sm block font-normal text-secondary-light">#5632</span>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                              <td>Leslie
                                                                                                                                       Alexander
                                                                                                                              </td>
                                                                                                                              <td>27 Mar
                                                                                                                                       2024
                                                                                                                              </td>
                                                                                                                              <td> <span
                                                                                                                                                class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span>
                                                                                                                              </td>
                                                                                                                              <td
                                                                                                                                       class="text-center text-neutral-700 text-xl">
                                                                                                                                       <button data-dropdown-toggle="dropdown5"
                                                                                                                                                class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white"
                                                                                                                                                type="button">
                                                                                                                                                <i
                                                                                                                                                         class="ri-more-2-fill"></i>
                                                                                                                                       </button>

                                                                                                                                       <!-- Dropdown menu -->
                                                                                                                                       <div id="dropdown5"
                                                                                                                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                                                                                                                <ul
                                                                                                                                                         class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another
                                                                                                                                                                           Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something
                                                                                                                                                                           else</a>
                                                                                                                                                         </li>
                                                                                                                                                </ul>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                     </tr>
                                                                                                            </tbody>
                                                                                                   </table>
                                                                                          </div>
                                                                                 </div>
                                                                                 <div class="hidden rounded-lg bg-gray-50 dark:bg-gray-800"
                                                                                          id="styled-recentLead"
                                                                                          role="tabpanel">
                                                                                          <div
                                                                                                   class="table-responsive scroll-sm">
                                                                                                   <table
                                                                                                            class="table bordered-table mb-0">
                                                                                                            <thead>
                                                                                                                     <tr>
                                                                                                                              <th
                                                                                                                                       scope="col">
                                                                                                                                       Task
                                                                                                                                       Names
                                                                                                                              </th>
                                                                                                                              <th
                                                                                                                                       scope="col">
                                                                                                                                       Assigned
                                                                                                                                       To
                                                                                                                              </th>
                                                                                                                              <th
                                                                                                                                       scope="col">
                                                                                                                                       Due
                                                                                                                                       Date
                                                                                                                              </th>
                                                                                                                              <th
                                                                                                                                       scope="col">
                                                                                                                                       Status
                                                                                                                              </th>
                                                                                                                              <th
                                                                                                                                       scope="col">
                                                                                                                                       Action
                                                                                                                              </th>
                                                                                                                     </tr>
                                                                                                            </thead>
                                                                                                            <tbody>
                                                                                                                     <tr>
                                                                                                                              <td>
                                                                                                                                       <div>
                                                                                                                                                <span
                                                                                                                                                         class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel
                                                                                                                                                         Management
                                                                                                                                                         System</span>
                                                                                                                                                <span
                                                                                                                                                         class="text-sm block font-normal text-secondary-light">#5632</span>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                              <td>Kathryn
                                                                                                                                       Murphy
                                                                                                                              </td>
                                                                                                                              <td>27 Mar
                                                                                                                                       2024
                                                                                                                              </td>
                                                                                                                              <td> <span
                                                                                                                                                class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span>
                                                                                                                              </td>
                                                                                                                              <td
                                                                                                                                       class="text-center text-neutral-700 text-xl">

                                                                                                                                       <button data-dropdown-toggle="dropdown6"
                                                                                                                                                class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white"
                                                                                                                                                type="button">
                                                                                                                                                <i
                                                                                                                                                         class="ri-more-2-fill"></i>
                                                                                                                                       </button>

                                                                                                                                       <!-- Dropdown menu -->
                                                                                                                                       <div id="dropdown6"
                                                                                                                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                                                                                                                <ul
                                                                                                                                                         class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another
                                                                                                                                                                           Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something
                                                                                                                                                                           else</a>
                                                                                                                                                         </li>
                                                                                                                                                </ul>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                     </tr>
                                                                                                                     <tr>
                                                                                                                              <td>
                                                                                                                                       <div>
                                                                                                                                                <span
                                                                                                                                                         class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel
                                                                                                                                                         Management
                                                                                                                                                         System</span>
                                                                                                                                                <span
                                                                                                                                                         class="text-sm block font-normal text-secondary-light">#5632</span>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                              <td>Darlene
                                                                                                                                       Robertson
                                                                                                                              </td>
                                                                                                                              <td>27 Mar
                                                                                                                                       2024
                                                                                                                              </td>
                                                                                                                              <td> <span
                                                                                                                                                class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span>
                                                                                                                              </td>
                                                                                                                              <td
                                                                                                                                       class="text-center text-neutral-700 text-xl">
                                                                                                                                       <button data-dropdown-toggle="dropdown7"
                                                                                                                                                class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white"
                                                                                                                                                type="button">
                                                                                                                                                <i
                                                                                                                                                         class="ri-more-2-fill"></i>
                                                                                                                                       </button>

                                                                                                                                       <!-- Dropdown menu -->
                                                                                                                                       <div id="dropdown7"
                                                                                                                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                                                                                                                <ul
                                                                                                                                                         class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another
                                                                                                                                                                           Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something
                                                                                                                                                                           else</a>
                                                                                                                                                         </li>
                                                                                                                                                </ul>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                     </tr>
                                                                                                                     <tr>
                                                                                                                              <td>
                                                                                                                                       <div>
                                                                                                                                                <span
                                                                                                                                                         class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel
                                                                                                                                                         Management
                                                                                                                                                         System</span>
                                                                                                                                                <span
                                                                                                                                                         class="text-sm block font-normal text-secondary-light">#5632</span>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                              <td>Courtney
                                                                                                                                       Henry
                                                                                                                              </td>
                                                                                                                              <td>27 Mar
                                                                                                                                       2024
                                                                                                                              </td>
                                                                                                                              <td> <span
                                                                                                                                                class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span>
                                                                                                                              </td>
                                                                                                                              <td
                                                                                                                                       class="text-center text-neutral-700 text-xl">
                                                                                                                                       <button data-dropdown-toggle="dropdown8"
                                                                                                                                                class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white"
                                                                                                                                                type="button">
                                                                                                                                                <i
                                                                                                                                                         class="ri-more-2-fill"></i>
                                                                                                                                       </button>

                                                                                                                                       <!-- Dropdown menu -->
                                                                                                                                       <div id="dropdown8"
                                                                                                                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                                                                                                                <ul
                                                                                                                                                         class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another
                                                                                                                                                                           Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something
                                                                                                                                                                           else</a>
                                                                                                                                                         </li>
                                                                                                                                                </ul>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                     </tr>
                                                                                                                     <tr>
                                                                                                                              <td>
                                                                                                                                       <div>
                                                                                                                                                <span
                                                                                                                                                         class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel
                                                                                                                                                         Management
                                                                                                                                                         System</span>
                                                                                                                                                <span
                                                                                                                                                         class="text-sm block font-normal text-secondary-light">#5632</span>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                              <td>Jenny Wilson
                                                                                                                              </td>
                                                                                                                              <td>27 Mar
                                                                                                                                       2024
                                                                                                                              </td>
                                                                                                                              <td> <span
                                                                                                                                                class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span>
                                                                                                                              </td>
                                                                                                                              <td
                                                                                                                                       class="text-center text-neutral-700 text-xl">
                                                                                                                                       <button data-dropdown-toggle="dropdown9"
                                                                                                                                                class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white"
                                                                                                                                                type="button">
                                                                                                                                                <i
                                                                                                                                                         class="ri-more-2-fill"></i>
                                                                                                                                       </button>

                                                                                                                                       <!-- Dropdown menu -->
                                                                                                                                       <div id="dropdown9"
                                                                                                                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                                                                                                                <ul
                                                                                                                                                         class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another
                                                                                                                                                                           Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something
                                                                                                                                                                           else</a>
                                                                                                                                                         </li>
                                                                                                                                                </ul>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                     </tr>
                                                                                                                     <tr>
                                                                                                                              <td>
                                                                                                                                       <div>
                                                                                                                                                <span
                                                                                                                                                         class="text-base block line-height-1 font-medium text-neutral-600 dark:text-neutral-200 text-w-200-px">Hotel
                                                                                                                                                         Management
                                                                                                                                                         System</span>
                                                                                                                                                <span
                                                                                                                                                         class="text-sm block font-normal text-secondary-light">#5632</span>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                              <td>Leslie
                                                                                                                                       Alexander
                                                                                                                              </td>
                                                                                                                              <td>27 Mar
                                                                                                                                       2024
                                                                                                                              </td>
                                                                                                                              <td> <span
                                                                                                                                                class="bg-success-100 dark:bg-success-600/25 text-success-600 dark:text-success-400 px-6 py-1.5 rounded-full font-medium text-sm">Active</span>
                                                                                                                              </td>
                                                                                                                              <td
                                                                                                                                       class="text-center text-neutral-700 text-xl">
                                                                                                                                       <button data-dropdown-toggle="dropdown10"
                                                                                                                                                class="focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-600 font-medium rounded-lg px-4 py-2.5 text-neutral-700 text-2xl dark:text-white"
                                                                                                                                                type="button">
                                                                                                                                                <i
                                                                                                                                                         class="ri-more-2-fill"></i>
                                                                                                                                       </button>

                                                                                                                                       <!-- Dropdown menu -->
                                                                                                                                       <div id="dropdown10"
                                                                                                                                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg border border-neutral-200 dark:border-neutral-600 shadow-lg w-44 dark:bg-gray-700">
                                                                                                                                                <ul
                                                                                                                                                         class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Another
                                                                                                                                                                           Actions</a>
                                                                                                                                                         </li>
                                                                                                                                                         <li>
                                                                                                                                                                  <a href="javascript:void(0)"
                                                                                                                                                                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Something
                                                                                                                                                                           else</a>
                                                                                                                                                         </li>
                                                                                                                                                </ul>
                                                                                                                                       </div>
                                                                                                                              </td>
                                                                                                                     </tr>
                                                                                                            </tbody>
                                                                                                   </table>
                                                                                          </div>
                                                                                 </div>
                                                                        </div>

                                                               </div>
                                                      </div>
                                             </div>

                                            
                                    </div>
                           </div>
                           <?php echo include('./components/footer.php') ?>
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