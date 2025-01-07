<?php

include('../../server/connection.php')

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
    
<aside class="sidebar">
  <button type="button" class="sidebar-close-btn !mt-4">
    <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
  </button>
  <div>
    <a href="index.html" class="sidebar-logo">
      <img src="<?php echo $domain ?>assets/images/logo.png" alt="site logo" class="light-logo">
      <img src="<?php echo $domain ?>assets/images/logo-light.png" alt="site logo" class="dark-logo">
      <img src="<?php echo $domain ?>assets/images/logo-icon.png" alt="site logo" class="logo-icon">
    </a>
  </div>
  <div class="sidebar-menu-area">
    <ul class="sidebar-menu" id="sidebar-menu">
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
          <span>Dashboard</span>
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="index.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> AI</a>
          </li>
          <li>
            <a href="index-2.html"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i> CRM</a>
          </li>
          <li>
            <a href="index-3.html"><i class="ri-circle-fill circle-icon text-info-600 w-auto"></i> eCommerce</a>
          </li>
          <li>
            <a href="index-4.html"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> Cryptocurrency</a>
          </li>
          <li>
            <a href="index-5.html"><i class="ri-circle-fill circle-icon text-success-600 w-auto"></i> Investment</a>
          </li>
          <li>
            <a href="index-6.html"><i class="ri-circle-fill circle-icon text-purple-600 w-auto"></i> LMS / Learning System</a>
          </li>
          <li>
            <a href="index-7.html"><i class="ri-circle-fill circle-icon text-info-600 w-auto"></i> NFT & Gaming</a>
          </li>
          <li>
            <a href="index-8.html"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> Medical</a>
          </li>
          <li>
            <a href="index-9.html"><i class="ri-circle-fill circle-icon text-purple-600 w-auto"></i> Analytics</a>
          </li>
        </ul>
      </li>
      <li class="sidebar-menu-group-title">Application</li>
      <li>
        <a href="email.html">
          <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
          <span>Email</span>
        </a>
      </li>
      <li>
        <a href="chat-message.html">
          <iconify-icon icon="bi:chat-dots" class="menu-icon"></iconify-icon>
          <span>Chat</span> 
        </a>
      </li>
      <li>
        <a href="calendar-main.html">
          <iconify-icon icon="solar:calendar-outline" class="menu-icon"></iconify-icon>
          <span>Calendar</span> 
        </a>
      </li>
      <li>
        <a href="kanban.html">
          <iconify-icon icon="material-symbols:map-outline" class="menu-icon"></iconify-icon>
          <span>Kanban</span> 
        </a>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="hugeicons:invoice-03" class="menu-icon"></iconify-icon>
          <span>Invoice</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="invoice-list.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> List</a>
          </li>
          <li>
            <a href="invoice-preview.html"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i> Preview</a>
          </li>
          <li>
            <a href="invoice-add.html"><i class="ri-circle-fill circle-icon text-info-600 w-auto"></i> Add new</a>
          </li>
          <li>
            <a href="invoice-edit.html"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> Edit</a>
          </li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="hugeicons:ai-brain-03" class="menu-icon"></iconify-icon>
          <span>Ai Application</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="text-generator.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Text Generator</a>
          </li>
          <li>
            <a href="code-generator.html"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i> Code Generator</a>
          </li>
          <li>
            <a href="image-generator.html"><i class="ri-circle-fill circle-icon text-info-600 w-auto"></i> Image Generator</a>
          </li>
          <li>
            <a href="voice-generator.html"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> Voice Generator</a>
          </li>
          <li>
            <a href="video-generator.html"><i class="ri-circle-fill circle-icon text-success-600 w-auto"></i> Video Generator</a>
          </li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="hugeicons:bitcoin-circle" class="menu-icon"></iconify-icon>
          <span>Crypto Currency</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="wallet.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Wallet</a>
          </li>
        </ul>
      </li>

      <li class="sidebar-menu-group-title">UI Elements</li> 

      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="solar:document-text-outline" class="menu-icon"></iconify-icon>
          <span>Components</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="typography.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Typography</a>
          </li>
          <li>
            <a href="colors.html"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i> Colors</a>
          </li>
          <li>
            <a href="button.html"><i class="ri-circle-fill circle-icon text-success-600 w-auto"></i> Button</a>
          </li>
          <li>
            <a href="dropdown.html"><i class="ri-circle-fill circle-icon text-purple-600  dark:text-purple-400 w-auto"></i> Dropdown</a>
          </li>
          <li>
            <a href="alert.html"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i> Alerts</a>
          </li>
          <li>
            <a href="card.html"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> Card</a>
          </li>
          <li>
            <a href="carousel.html"><i class="ri-circle-fill circle-icon text-info-600 w-auto"></i> Carousel</a>
          </li>
          <li>
            <a href="avatar.html"><i class="ri-circle-fill circle-icon text-success-600 w-auto"></i> Avatars</a>
          </li>
          <li>
            <a href="progress.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Progress bar</a>
          </li>
          <li>
            <a href="tabs.html"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i> Tab & Accordion</a>
          </li>
          <li>
            <a href="pagination.html"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> Pagination</a>
          </li>
          <li>
            <a href="badges.html"><i class="ri-circle-fill circle-icon text-info-600 w-auto"></i> Badges</a>
          </li>
          <li>
            <a href="tooltip.html"><i class="ri-circle-fill circle-icon dark:text-purple-400 w-auto"></i> Tooltip & Popover</a>
          </li>
          <li>
            <a href="videos.html"><i class="ri-circle-fill circle-icon text-cyan-600 w-auto"></i> Videos</a>
          </li>
          <li>
            <a href="star-rating.html"><i class="ri-circle-fill circle-icon text-[#7f27ff] w-auto"></i> Star Ratings</a>
          </li>
          <li>
            <a href="tags.html"><i class="ri-circle-fill circle-icon text-[#8252e9] w-auto"></i> Tags</a>
          </li>
          <li>
            <a href="list.html"><i class="ri-circle-fill circle-icon text-[#e30a0a] w-auto"></i> List</a>
          </li>
          <li>
            <a href="calendar.html"><i class="ri-circle-fill circle-icon text-yellow-400 w-auto"></i> Calendar</a>
          </li>
          <li>
            <a href="radio.html"><i class="ri-circle-fill circle-icon text-orange-500 w-auto"></i> Radio</a>
          </li>
          <li>
            <a href="switch.html"><i class="ri-circle-fill circle-icon text-pink-600 w-auto"></i> Switch</a>
          </li>
          <li>
            <a href="image-upload.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Upload</a>
          </li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="heroicons:document" class="menu-icon"></iconify-icon>
          <span>Forms</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="form.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Input Forms</a>
          </li>
          <li>
            <a href="form-layout.html"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i> Input Layout</a>
          </li>
          <li>
            <a href="form-validation.html"><i class="ri-circle-fill circle-icon text-success-600 w-auto"></i> Form Validation</a>
          </li>
          <li>
            <a href="wizard.html"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> Form Wizard</a>
          </li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="mingcute:storage-line" class="menu-icon"></iconify-icon>
          <span>Table</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="table-basic.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Basic Table</a>
          </li>
          <li>
            <a href="table-data.html"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i> Data Table</a>
          </li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="solar:pie-chart-outline" class="menu-icon"></iconify-icon>
          <span>Chart</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="line-chart.html"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> Line Chart</a>
          </li>
          <li>
            <a href="column-chart.html"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i> Column Chart</a>
          </li>
          <li>
            <a href="pie-chart.html"><i class="ri-circle-fill circle-icon text-success-600 w-auto"></i> Pie Chart</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="widgets.html">
          <iconify-icon icon="fe:vector" class="menu-icon"></iconify-icon>
          <span>Widgets</span> 
        </a>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="flowbite:users-group-outline" class="menu-icon"></iconify-icon>
          <span>Users</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="users-list.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Users List</a>
          </li>
          <li>
            <a href="users-grid.html"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i> Users Grid</a>
          </li>
          <li>
            <a href="add-user.html"><i class="ri-circle-fill circle-icon text-info-600 w-auto"></i> Add User</a>
          </li>
          <li>
            <a href="view-profile.html"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> View Profile</a>
          </li>
        </ul>
      </li>

      <li class="sidebar-menu-group-title">Application</li>

      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="simple-line-icons:vector" class="menu-icon"></iconify-icon>
          <span>Authentication</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="sign-in.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Sign In</a>
          </li>
          <li>
            <a href="sign-up.html"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i> Sign Up</a>
          </li>
          <li>
            <a href="forgot-password.html"><i class="ri-circle-fill circle-icon text-info-600 w-auto"></i> Forgot Password</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="gallery.html">
          <iconify-icon icon="solar:gallery-wide-linear" class="menu-icon"></iconify-icon>
          <span>Gallery</span> 
        </a>
      </li>
      <li>
        <a href="pricing.html">
          <iconify-icon icon="hugeicons:money-send-square" class="menu-icon"></iconify-icon>
          <span>Pricing</span> 
        </a>
      </li>
      <li>
        <a href="faq.html">
          <iconify-icon icon="mage:message-question-mark-round" class="menu-icon"></iconify-icon>
          <span>FAQs.</span> 
        </a>
      </li>
      <li>
        <a href="error.html">
          <iconify-icon icon="streamline:straight-face" class="menu-icon"></iconify-icon>
          <span>404</span> 
        </a>
      </li>
      <li>
        <a href="terms-condition.html">
          <iconify-icon icon="octicon:info-24" class="menu-icon"></iconify-icon>
          <span>Terms & Conditions</span> 
        </a>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)">
          <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
          <span>Settings</span> 
        </a>
        <ul class="sidebar-submenu">
          <li>
            <a href="company.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Company</a>
          </li>
          <li>
            <a href="notification.html"><i class="ri-circle-fill circle-icon text-warning-600 w-auto"></i> Notification</a>
          </li>
          <li>
            <a href="notification-alert.html"><i class="ri-circle-fill circle-icon text-info-600 w-auto"></i> Notification Alert</a>
          </li>
          <li>
            <a href="theme.html"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> Theme</a>
          </li>
          <li>
            <a href="currencies.html"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> Currencies</a>
          </li>
          <li>
            <a href="language.html"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> Languages</a>
          </li>
          <li>
            <a href="payment-gateway.html"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> Payment Gateway</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</aside>

<main class="dashboard-main">
    <div class="navbar-header border-b border-neutral-200 dark:border-neutral-600">
  <div class="flex items-center justify-between">
    <div class="col-auto">
      <div class="flex flex-wrap items-center gap-[16px]">
        <button type="button" class="sidebar-toggle">
          <iconify-icon icon="heroicons:bars-3-solid" class="icon non-active"></iconify-icon>
          <iconify-icon icon="iconoir:arrow-right" class="icon active"></iconify-icon>
        </button>
        <button type="button" class="sidebar-mobile-toggle d-flex !leading-[0]">
          <iconify-icon icon="heroicons:bars-3-solid" class="icon !text-[30px]"></iconify-icon>
        </button>
        <form class="navbar-search">
          <input type="text" name="search" placeholder="Search">
          <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
        </form>
        
      </div>
    </div>
    <div class="col-auto">
      <div class="flex flex-wrap items-center gap-3">
        <button type="button" id="theme-toggle" class="w-10 h-10 bg-neutral-200 dark:bg-neutral-700 dark:text-white rounded-full flex justify-center items-center">
          <span id="theme-toggle-dark-icon" class="hidden">
            <i class="ri-sun-line"></i>
          </span>
          <span id="theme-toggle-light-icon" class="hidden">
            <i class="ri-moon-line"></i>
          </span>
        </button>  

        <!-- Language Dropdown Start  -->
        <div class="hidden sm:inline-block">
          <button data-dropdown-toggle="dropdownInformation" class="has-indicator w-10 h-10 bg-neutral-200 dark:bg-neutral-700 dark:text-white rounded-full flex justify-center items-center" type="button">
            <img src="<?php echo $domain ?>assets/images/lang-flag.png" alt="image" class="w-6 h-6 object-cover rounded-full">
          </button>
          <div id="dropdownInformation" class="z-10 hidden bg-white dark:bg-neutral-700 rounded-lg shadow-lg dropdown-menu-sm p-3">
            <div class="py-3 px-4 rounded-lg bg-primary-50 dark:bg-primary-600/25 mb-4 flex items-center justify-between gap-2">
              <div>
                <h6 class="text-lg text-neutral-900 font-semibold mb-0">Choose Your Language</h6>
              </div>
            </div>

            <div class="max-h-[400px] overflow-y-auto scroll-sm pe-2">
              <div class="mt-4 flex flex-col gap-4">

                <div class="form-check style-check flex items-center justify-between">
                  <label class="form-check-label line-height-1 font-medium text-secondary-light" for="english"> 
                    <span class="text-black hover-bXg-transparent hover-text-primary flex items-center gap-3"> 
                      <img src="<?php echo $domain ?>assets/images/flags/flag1.png" alt="" class="w-9 h-9 bg-success-subtle text-success-600 rounded-full shrink-0">
                      <span class="text-base font-semibold mb-0">English</span>
                    </span>
                  </label>
                  <input class="form-check-input rounded-full" name="language" type="radio" id="english">
                </div>

                <div class="form-check style-check flex items-center justify-between">
                  <label class="form-check-label line-height-1 font-medium text-secondary-light" for="Japan"> 
                    <span class="text-black hover-bXg-transparent hover-text-primary flex items-center gap-3"> 
                      <img src="<?php echo $domain ?>assets/images/flags/flag2.png" alt="" class="w-9 h-9 bg-success-subtle text-success-600 rounded-full shrink-0">
                      <span class="text-base font-semibold mb-0">Japan</span>
                    </span>
                  </label>
                  <input class="form-check-input rounded-full" name="language" type="radio" id="Japan">
                </div>

                <div class="form-check style-check flex items-center justify-between">
                  <label class="form-check-label line-height-1 font-medium text-secondary-light" for="Franch"> 
                    <span class="text-black hover-bXg-transparent hover-text-primary flex items-center gap-3"> 
                      <img src="<?php echo $domain ?>assets/images/flags/flag3.png" alt="" class="w-9 h-9 bg-success-subtle text-success-600 rounded-full shrink-0">
                      <span class="text-base font-semibold mb-0">Franch</span>
                    </span>
                  </label>
                  <input class="form-check-input rounded-full" name="language" type="radio" id="Franch">
                </div>

                <div class="form-check style-check flex items-center justify-between">
                  <label class="form-check-label line-height-1 font-medium text-secondary-light" for="Germany"> 
                    <span class="text-black hover-bXg-transparent hover-text-primary flex items-center gap-3"> 
                      <img src="<?php echo $domain ?>assets/images/flags/flag4.png" alt="" class="w-9 h-9 bg-success-subtle text-success-600 rounded-full shrink-0">
                      <span class="text-base font-semibold mb-0">Germany</span>
                    </span>
                  </label>
                  <input class="form-check-input rounded-full" name="language" type="radio" id="Germany">
                </div>

                <div class="form-check style-check flex items-center justify-between">
                  <label class="form-check-label line-height-1 font-medium text-secondary-light" for="SouthKoria"> 
                    <span class="text-black hover-bXg-transparent hover-text-primary flex items-center gap-3"> 
                      <img src="<?php echo $domain ?>assets/images/flags/flag5.png" alt="" class="w-9 h-9 bg-success-subtle text-success-600 rounded-full shrink-0">
                      <span class="text-base font-semibold mb-0">South Koria</span>
                    </span>
                  </label>
                  <input class="form-check-input rounded-full" name="language" type="radio" id="SouthKoria">
                </div>

                <div class="form-check style-check flex items-center justify-between">
                  <label class="form-check-label line-height-1 font-medium text-secondary-light" for="Bangladesh"> 
                    <span class="text-black hover-bXg-transparent hover-text-primary flex items-center gap-3"> 
                      <img src="<?php echo $domain ?>assets/images/flags/flag6.png" alt="" class="w-9 h-9 bg-success-subtle text-success-600 rounded-full shrink-0">
                      <span class="text-base font-semibold mb-0">Bangladesh</span>
                    </span>
                  </label>
                  <input class="form-check-input rounded-full" name="language" type="radio" id="Bangladesh">
                </div>

                <div class="form-check style-check flex items-center justify-between">
                  <label class="form-check-label line-height-1 font-medium text-secondary-light" for="India"> 
                    <span class="text-black hover-bXg-transparent hover-text-primary flex items-center gap-3"> 
                      <img src="<?php echo $domain ?>assets/images/flags/flag7.png" alt="" class="w-9 h-9 bg-success-subtle text-success-600 rounded-full shrink-0">
                      <span class="text-base font-semibold mb-0">India</span>
                    </span>
                  </label>
                  <input class="form-check-input rounded-full" name="language" type="radio" id="India">
                </div>

                <div class="form-check style-check flex items-center justify-between">
                  <label class="form-check-label line-height-1 font-medium text-secondary-light" for="Koria"> 
                    <span class="text-black hover-bXg-transparent hover-text-primary flex items-center gap-3"> 
                      <img src="<?php echo $domain ?>assets/images/flags/flag8.png" alt="" class="w-9 h-9 bg-success-subtle text-success-600 rounded-full shrink-0">
                      <span class="text-base font-semibold mb-0">Koria</span>
                    </span>
                  </label>
                  <input class="form-check-input rounded-full" name="language" type="radio" id="Koria">
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- Language Dropdown End  -->


        <!-- Message Dropdown Start  -->
        <button data-dropdown-toggle="dropdownMessage" class="has-indicator w-10 h-10 bg-neutral-200 dark:bg-neutral-700 rounded-full flex justify-center items-center" type="button">
          <iconify-icon icon="mage:email" class="text-neutral-900 dark:text-white text-xl"></iconify-icon>
        </button>
        <div id="dropdownMessage" class="z-10 hidden bg-white dark:bg-neutral-700 rounded-2xl overflow-hidden shadow-lg max-w-[394px] w-full">
          <div class="py-3 px-4 rounded-lg bg-primary-50 dark:bg-primary-600/25 m-4 flex items-center justify-between gap-2">
            <h6 class="text-lg text-neutral-900 font-semibold mb-0">Messaage</h6>
            <span class="w-10 h-10 bg-white dark:bg-neutral-600 text-primary-600 dark:text-white font-bold flex justify-center items-center rounded-full">05</span>
          </div>
          <div class="scroll-sm !border-t-0">
            <div class="max-h-[400px] overflow-y-auto">
              <a href="javascript:void(0)" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 justify-between gap-1">
                <div class="flex items-center gap-3">
                  <div class="flex-shrink-0 relative">
                    <img class="rounded-full w-11 h-11" src="<?php echo $domain ?>assets/images/notification/profile-3.png" alt="Joseph image">
                    <span class="absolute end-[2px] bottom-[2px] w-2.5 h-2.5 bg-success-500 border border-white rounded-full dark:border-gray-600"></span>
                  </div>
                  <div>
                    <h6 class="text-sm fw-semibold mb-1">Kathryn Murphy</h6>
                    <p class="mb-0 text-sm line-clamp-1">hey! there i'm...</p>
                  </div>
                </div>
                <div class="shrink-0 flex flex-col items-end gap-1">
                  <span class="text-sm text-neutral-500">12:30 PM</span>
                  <span class="w-4 h-4 text-xs bg-warning-600 text-white rounded-full flex justify-center items-center">8</span>
                </div>
              </a>
              <a href="javascript:void(0)" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 justify-between gap-1">
                <div class="flex items-center gap-3">
                  <div class="flex-shrink-0 relative">
                    <img class="rounded-full w-11 h-11" src="<?php echo $domain ?>assets/images/notification/profile-4.png" alt="Joseph image">
                    <span class="absolute end-[2px] bottom-[2px] w-2.5 h-2.5 bg-success-500 border border-white rounded-full dark:border-gray-600"></span>
                  </div>
                  <div>
                    <h6 class="text-sm fw-semibold mb-1">Kathryn Murphy</h6>
                    <p class="mb-0 text-sm line-clamp-1">hey! there i'm...</p>
                  </div>
                </div>
                <div class="shrink-0 flex flex-col items-end gap-1">
                  <span class="text-sm text-neutral-500">12:30 PM</span>
                  <span class="w-4 h-4 text-xs bg-warning-600 text-white rounded-full flex justify-center items-center">8</span>
                </div>
              </a>
              <a href="javascript:void(0)" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 justify-between gap-1">
                <div class="flex items-center gap-3">
                  <div class="flex-shrink-0 relative">
                    <img class="rounded-full w-11 h-11" src="<?php echo $domain ?>assets/images/notification/profile-5.png" alt="Joseph image">
                    <span class="absolute end-[2px] bottom-[2px] w-2.5 h-2.5 bg-success-500 border border-white rounded-full dark:border-gray-600"></span>
                  </div>
                  <div>
                    <h6 class="text-sm fw-semibold mb-1">Kathryn Murphy</h6>
                    <p class="mb-0 text-sm line-clamp-1">hey! there i'm...</p>
                  </div>
                </div>
                <div class="shrink-0 flex flex-col items-end gap-1">
                  <span class="text-sm text-neutral-500">12:30 PM</span>
                  <span class="w-4 h-4 text-xs bg-warning-600 text-white rounded-full flex justify-center items-center">8</span>
                </div>
              </a>
              <a href="javascript:void(0)" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 justify-between gap-1">
                <div class="flex items-center gap-3">
                  <div class="flex-shrink-0 relative">
                    <img class="rounded-full w-11 h-11" src="<?php echo $domain ?>assets/images/notification/profile-6.png" alt="Joseph image">
                    <span class="absolute end-[2px] bottom-[2px] w-2.5 h-2.5 bg-success-500 border border-white rounded-full dark:border-gray-600"></span>
                  </div>
                  <div>
                    <h6 class="text-sm fw-semibold mb-1">Kathryn Murphy</h6>
                    <p class="mb-0 text-sm line-clamp-1">hey! there i'm...</p>
                  </div>
                </div>
                <div class="shrink-0 flex flex-col items-end gap-1">
                  <span class="text-sm text-neutral-500">12:30 PM</span>
                  <span class="w-4 h-4 text-xs bg-warning-600 text-white rounded-full flex justify-center items-center">8</span>
                </div>
              </a>
              <a href="javascript:void(0)" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 justify-between gap-1">
                <div class="flex items-center gap-3">
                  <div class="flex-shrink-0 relative">
                    <img class="rounded-full w-11 h-11" src="<?php echo $domain ?>assets/images/notification/profile-7.png" alt="Joseph image">
                    <span class="absolute end-[2px] bottom-[2px] w-2.5 h-2.5 bg-success-500 border border-white rounded-full dark:border-gray-600"></span>
                  </div>
                  <div>
                    <h6 class="text-sm fw-semibold mb-1">Kathryn Murphy</h6>
                    <p class="mb-0 text-sm line-clamp-1">hey! there i'm...</p>
                  </div>
                </div>
                <div class="shrink-0 flex flex-col items-end gap-1">
                  <span class="text-sm text-neutral-500">12:30 PM</span>
                  <span class="w-4 h-4 text-xs bg-warning-600 text-white rounded-full flex justify-center items-center">8</span>
                </div>
              </a>
            </div>

            <div class="text-center py-3 px-4">
              <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 font-semibold hover:underline text-center">See All Message </a>
            </div>
          </div>
        </div>
        <!-- Message Dropdown End  -->


        <!-- Notification Start  -->
        <button data-dropdown-toggle="dropdownNotification" class="has-indicator w-10 h-10 bg-neutral-200 dark:bg-neutral-700 rounded-full flex justify-center items-center" type="button">
          <iconify-icon icon="iconoir:bell" class="text-neutral-900 dark:text-white text-xl"></iconify-icon>
        </button>
        <div id="dropdownNotification" class="z-10 hidden bg-white dark:bg-neutral-700 rounded-2xl overflow-hidden shadow-lg max-w-[394px] w-full">
          <div class="py-3 px-4 rounded-lg bg-primary-50 dark:bg-primary-600/25 m-4 flex items-center justify-between gap-2">
            <h6 class="text-lg text-neutral-900 font-semibold mb-0">Notification</h6>
            <span class="w-10 h-10 bg-white dark:bg-neutral-600 text-primary-600 dark:text-white font-bold flex justify-center items-center rounded-full">05</span>
          </div>
          <div class="scroll-sm !border-t-0">
            <div class="max-h-[400px] overflow-y-auto">
              <a href="javascript:void(0)" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 justify-between gap-1">
                <div class="flex items-center gap-3">
                  <div class="flex-shrink-0 relative w-11 h-11 bg-success-200 dark:bg-success-600/25 text-success-600 flex justify-center items-center rounded-full">
                    <iconify-icon icon="bitcoin-icons:verify-outline" class="text-2xl"></iconify-icon>
                  </div>
                  <div>
                    <h6 class="text-sm fw-semibold mb-1">Congratulations</h6>
                    <p class="mb-0 text-sm line-clamp-1">Your profile has been Verified. Your profile has been Verified</p>
                  </div>
                </div>
                <div class="shrink-0">
                  <span class="text-sm text-neutral-500">23 Mins ago</span>
                </div>
              </a>
              <a href="javascript:void(0)" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 justify-between gap-1">
                <div class="flex items-center gap-3">
                  <div class="flex-shrink-0 relative">
                    <img class="rounded-full w-11 h-11" src="<?php echo $domain ?>assets/images/notification/profile-4.png" alt="Joseph image">
                  </div>
                  <div>
                    <h6 class="text-sm fw-semibold mb-1">Ronald Richards</h6>
                    <p class="mb-0 text-sm line-clamp-1">You can stitch between artboards</p>
                  </div>
                </div>
                <div class="shrink-0">
                  <span class="text-sm text-neutral-500">23 Mins ago</span>
                </div>
              </a>
              <a href="javascript:void(0)" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 justify-between gap-1">
                <div class="flex items-center gap-3">
                  <div class="flex-shrink-0 relative w-11 h-11 bg-primary-100 dark:bg-primary-600/25 text-primary-600 flex justify-center items-center rounded-full">
                    AM
                  </div>
                  <div>
                    <h6 class="text-sm fw-semibold mb-1">Arlene McCoy</h6>
                    <p class="mb-0 text-sm line-clamp-1">Invite you to prototyping</p>
                  </div>
                </div>
                <div class="shrink-0">
                  <span class="text-sm text-neutral-500">23 Mins ago</span>
                </div>
              </a>
              <a href="javascript:void(0)" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 justify-between gap-1">
                <div class="flex items-center gap-3">
                  <div class="flex-shrink-0 relative">
                    <img class="rounded-full w-11 h-11" src="<?php echo $domain ?>assets/images/notification/profile-6.png" alt="Joseph image">
                  </div>
                  <div>
                    <h6 class="text-sm fw-semibold mb-1">Annette Black</h6>
                    <p class="mb-0 text-sm line-clamp-1">Invite you to prototyping</p>
                  </div>
                </div>
                <div class="shrink-0">
                  <span class="text-sm text-neutral-500">23 Mins ago</span>
                </div>
              </a>
              <a href="javascript:void(0)" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 justify-between gap-1">
                <div class="flex items-center gap-3">
                  <div class="flex-shrink-0 relative w-11 h-11 bg-primary-100 dark:bg-primary-600/25 text-primary-600 flex justify-center items-center rounded-full">
                    DR
                  </div>
                  <div>
                    <h6 class="text-sm fw-semibold mb-1">Darlene Robertson</h6>
                    <p class="mb-0 text-sm line-clamp-1">Invite you to prototyping</p>
                  </div>
                </div>
                <div class="shrink-0">
                  <span class="text-sm text-neutral-500">23 Mins ago</span>
                </div>
              </a>
            </div>

            <div class="text-center py-3 px-4">
              <a href="javascript:void(0)" class="text-primary-600 dark:text-primary-600 font-semibold hover:underline text-center">See All Notification </a>
            </div>
          </div>
        </div>
        <!-- Notification End  -->


        <button data-dropdown-toggle="dropdownProfile" class="flex justify-center items-center rounded-full" type="button">
          <img src="<?php echo $domain ?>assets/images/user.png" alt="image" class="w-10 h-10 object-fit-cover rounded-full">
        </button>
        <div id="dropdownProfile" class="z-10 hidden bg-white dark:bg-neutral-700 rounded-lg shadow-lg dropdown-menu-sm p-3">
          <div class="py-3 px-4 rounded-lg bg-primary-50 dark:bg-primary-600/25 mb-4 flex items-center justify-between gap-2">
            <div>
              <h6 class="text-lg text-neutral-900 font-semibold mb-0">Shahidul Islam</h6>
              <span class="text-neutral-500">Admin</span>
            </div>
            <button type="button" class="hover:text-danger-600">
              <iconify-icon icon="radix-icons:cross-1" class="icon text-xl"></iconify-icon> 
            </button>
          </div>

          <div class="max-h-[400px] overflow-y-auto scroll-sm pe-2">
            <ul class="flex flex-col">
                <li>
                  <a class="text-black px-0 py-2 hover:text-primary-600 flex items-center gap-4" href="view-profile.html"> 
                  <iconify-icon icon="solar:user-linear" class="icon text-xl"></iconify-icon>  My Profile</a>
                </li>
                <li>
                  <a class="text-black px-0 py-2 hover:text-primary-600 flex items-center gap-4" href="email.html"> 
                  <iconify-icon icon="tabler:message-check" class="icon text-xl"></iconify-icon>  Inbox</a>
                </li>
                <li>
                  <a class="text-black px-0 py-2 hover:text-primary-600 flex items-center gap-4" href="company.html"> 
                  <iconify-icon icon="icon-park-outline:setting-two" class="icon text-xl"></iconify-icon>  Setting</a>
                </li>
                <li>
                  <a class="text-black px-0 py-2 hover:text-danger-600 flex items-center gap-4" href="javascript:void(0)"> 
                  <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon>  Log Out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
    
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
            <div class="col-span-12 lg:col-span-4">
                <div class="user-grid-card relative border border-neutral-200 dark:border-neutral-600 rounded-2xl overflow-hidden bg-white dark:bg-neutral-700 h-full">
                    <img src="<?php echo $domain ?>assets/images/user-grid/user-grid-bg1.png" alt="" class="w-full object-fit-cover">
                    <div class="pb-6 ms-6 mb-6 me-6 -mt-[100px]">
                        <div class="text-center border-b border-neutral-200 dark:border-neutral-600">
                            <img src="<?php echo $domain ?>assets/images/user-grid/user-grid-img14.png" alt="" class="border br-white border-width-2-px w-200-px h-[200px] rounded-full object-fit-cover mx-auto">
                            <h6 class="mb-0 mt-4">Jacob Jones</h6>
                            <span class="text-secondary-light mb-4">ifrandom@gmail.com</span>
                        </div>
                        <div class="mt-6">
                            <h6 class="text-xl mb-4">Personal Info</h6>
                            <ul>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200">Full Name</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: Will Jonto</span>
                                </li>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200"> Email</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: willjontoax@gmail.com</span>
                                </li>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200"> Phone Number</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: (1) 2536 2561 2365</span>
                                </li>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200"> Department</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: Design</span>
                                </li>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200"> Designation</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: UI UX Designer</span>
                                </li>
                                <li class="flex items-center gap-1 mb-3">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200"> Languages</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: English</span>
                                </li>
                                <li class="flex items-center gap-1">
                                    <span class="w-[30%] text-base font-semibold text-neutral-600 dark:text-neutral-200"> Bio</span>
                                    <span class="w-[70%] text-secondary-light font-medium">: Lorem Ipsum is simply dummy text of the       printing and typesetting industry.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-8">
                <div class="card h-full border-0">
                    <div class="card-body p-6">

                        <ul class="tab-style-gradient flex flex-wrap text-sm font-medium text-center mb-5" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                            <li class="" role="presentation">
                                <button class="py-2.5 px-4 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600" id="edit-profile-tab" data-tabs-target="#edit-profile" type="button" role="tab" aria-controls="edit-profile" aria-selected="false">
                                    Edit Profile
                                </button>
                            </li>
                            <li class="" role="presentation">
                                <button class="py-2.5 px-4 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="change-password-tab" data-tabs-target="#change-password" type="button" role="tab" aria-controls="change-password" aria-selected="false">
                                    Change Password
                                </button>
                            </li>
                            <li class="" role="presentation">
                                <button class="py-2.5 px-4 border-t-2 font-semibold text-base inline-flex items-center gap-3 text-neutral-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="notification-password-tab" data-tabs-target="#notification-password" type="button" role="tab" aria-controls="notification-password" aria-selected="false">
                                    Notification Password
                                </button>
                            </li>
                        </ul>
            
                        <div id="default-tab-content">
                        <div class="hidden" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
                            <h6 class="text-base text-neutral-600 dark:text-neutral-200 mb-4">Profile Image</h6>
                            <!-- Upload Image Start -->
                            <div class="mb-6 mt-4">
                                <div class="avatar-upload">
                                        <div class="avatar-edit absolute bottom-0 end-0 me-6 mt-4 z-[1] cursor-pointer">
                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" hidden>
                                            <label for="imageUpload" class="w-8 h-8 flex justify-center items-center bg-primary-100 dark:bg-primary-600/25 text-primary-600 dark:text-primary-400 border border-primary-600 hover:bg-primary-100 text-lg rounded-full">
                                                <iconify-icon icon="solar:camera-outline" class="icon"></iconify-icon>
                                            </label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Upload Image End -->
                            <form action="#">
                                <div class="grid grid-cols-1 sm:grid-cols-12 gap-x-6">
                                    <div class="col-span-12 sm:col-span-6">
                                        <div class="mb-5">
                                            <label for="name" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Full Name <span class="text-danger-600">*</span></label>
                                            <input type="text" class="form-control rounded-lg" id="name" placeholder="Enter Full Name">
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <div class="mb-5">
                                            <label for="email" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Email <span class="text-danger-600">*</span></label>
                                            <input type="email" class="form-control rounded-lg" id="email" placeholder="Enter email address">
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <div class="mb-5">
                                            <label for="number" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Phone</label>
                                            <input type="email" class="form-control rounded-lg" id="number" placeholder="Enter phone number">
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <div class="mb-5">
                                            <label for="depart" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Department <span class="text-danger-600">*</span> </label>
                                            <select class="form-control rounded-lg form-select" id="depart">
                                                <option>Enter Event Title </option>
                                                <option>Enter Event Title One </option>
                                                <option>Enter Event Title Two</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <div class="mb-5">
                                            <label for="desig" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Designation <span class="text-danger-600">*</span> </label>
                                            <select class="form-control rounded-lg form-select" id="desig">
                                                <option>Enter Designation Title </option>
                                                <option>Enter Designation Title One </option>
                                                <option>Enter Designation Title Two</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6">
                                        <div class="mb-5">
                                            <label for="Language" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Language <span class="text-danger-600">*</span> </label>
                                            <select class="form-control rounded-lg form-select" id="Language">
                                                <option> English</option>
                                                <option> Bangla </option>
                                                <option> Hindi</option>
                                                <option> Arabic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-span-12">
                                        <div class="mb-5">
                                            <label for="desc" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Description</label>
                                            <textarea name="#0" class="form-control rounded-lg" id="desc" placeholder="Write description..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center gap-3">
                                    <button type="button" class="border border-danger-600 bg-hover-danger-200 text-danger-600 text-base px-14 py-[11px] rounded-lg"> 
                                        Cancel
                                    </button>
                                    <button type="button" class="btn btn-primary border border-primary-600 text-base px-14 py-3 rounded-lg"> 
                                        Save
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="hidden" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
                            <div class="mb-5">
                                <label for="your-password" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">New Password <span class="text-danger-600">*</span></label>
                                <div class="relative">
                                    <input type="password" class="form-control rounded-lg" id="your-password" placeholder="Enter New Password*">
                                    <span class="toggle-password ri-eye-line cursor-pointer absolute end-0 top-1/2 -translate-y-1/2 me-4 text-secondary-light" data-toggle="#your-password"></span>
                                </div>
                            </div>
                            <div class="mb-5">
                                <label for="confirm-password" class="inline-block font-semibold text-neutral-600 dark:text-neutral-200 text-sm mb-2">Confirmed Password <span class="text-danger-600">*</span></label>
                                <div class="relative">
                                    <input type="password" class="form-control rounded-lg" id="confirm-password" placeholder="Confirm Password*">
                                    <span class="toggle-password ri-eye-line cursor-pointer absolute end-0 top-1/2 -translate-y-1/2 me-4 text-secondary-light" data-toggle="#confirm-password"></span>
                                </div>
                            </div>
                        </div>
                        <div class="hidden" id="notification-password" role="tabpanel" aria-labelledby="notification-password-tab">
                            <div class="form-switch switch-primary py-3 px-4 border rounded-lg relative mb-4">
                                <label for="companzNew" class="absolute w-full h-full start-0 top-0"></label>
                                <div class="flex items-center gap-3 justify-between">
                                    <span class="form-check-label line-height-1 font-medium text-secondary-light">Company News</span>
                                    <input class="form-check-input" type="checkbox" role="switch" id="companzNew">
                                </div>
                            </div>
                            <div class="form-switch switch-primary py-3 px-4 border rounded-lg relative mb-4">
                                <label for="pushNotifcation" class="absolute w-full h-full start-0 top-0"></label>
                                <div class="flex items-center gap-3 justify-between">
                                    <span class="form-check-label line-height-1 font-medium text-secondary-light">Push Notification</span>
                                    <input class="form-check-input" type="checkbox" role="switch" id="pushNotifcation" checked>
                                </div>
                            </div>
                            <div class="form-switch switch-primary py-3 px-4 border rounded-lg relative mb-4">
                                <label for="weeklyLetters" class="absolute w-full h-full start-0 top-0"></label>
                                <div class="flex items-center gap-3 justify-between">
                                    <span class="form-check-label line-height-1 font-medium text-secondary-light">Weekly News Letters</span>
                                    <input class="form-check-input" type="checkbox" role="switch" id="weeklyLetters" checked>
                                </div>
                            </div>
                            <div class="form-switch switch-primary py-3 px-4 border rounded-lg relative mb-4">
                                <label for="meetUp" class="absolute w-full h-full start-0 top-0"></label>
                                <div class="flex items-center gap-3 justify-between">
                                    <span class="form-check-label line-height-1 font-medium text-secondary-light">Meetups Near you</span>
                                    <input class="form-check-input" type="checkbox" role="switch" id="meetUp">
                                </div>
                            </div>
                            <div class="form-switch switch-primary py-3 px-4 border rounded-lg relative mb-4">
                                <label for="orderNotification" class="absolute w-full h-full start-0 top-0"></label>
                                <div class="flex items-center gap-3 justify-between">
                                    <span class="form-check-label line-height-1 font-medium text-secondary-light">Orders Notifications</span>
                                    <input class="form-check-input" type="checkbox" role="switch" id="orderNotification" checked>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <footer class="d-footer">
  <div class="flex items-center justify-between gap-3">
    <p class="mb-0">© 2024 WowDash. All Rights Reserved.</p>
    <p class="mb-0">Made by <span class="text-primary-600">wowtheme7</span></p>
  </div>
</footer>
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