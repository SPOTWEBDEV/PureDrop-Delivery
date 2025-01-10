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
                                                      <a href="<?php echo $domain  ?>app/">
                                                               <iconify-icon icon="solar:home-smile-angle-outline"
                                                                        class="menu-icon"></iconify-icon>
                                                               <span>Dashboard</span>
                                                      </a>
                                                      
                                                               
                                             </li>
                                             <li class="sidebar-menu-group-title">Application</li>
                                             <li>
                                                      <a href="<?php echo $domain ?>app/user/">
                                                               <iconify-icon icon="mage:email" class="menu-icon">
                                                               </iconify-icon>
                                                               <span>User</span>
                                                      </a>
                                             </li>
										   
										    <li>
                                                      <a href="<?php echo $domain ?>app/product/list/">
                                                               <iconify-icon icon="mage:email" class="menu-icon">
                                                               </iconify-icon>
                                                               <span>List Product</span>
                                                      </a>
                                             </li>
										
                                             <li>
                                                      <a href="<?php echo $domain  ?>app/contact/">
                                                               <iconify-icon icon="bi:chat-dots" class="menu-icon">
                                                               </iconify-icon>
                                                               <span>Contact</span>
                                                      </a>
                                             </li>
                                             
                                             
                                             <li class="dropdown">
                                                      <a href="javascript:void(0)">
                                                               <iconify-icon icon="hugeicons:invoice-03"
                                                                        class="menu-icon"></iconify-icon>
                                                               <span>Order</span>
                                                      </a>
                                                      <ul class="sidebar-submenu">
                                                               <li>
                                                                        <a href="invoice-list.html"><i
                                                                                          class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                                                                 Pending Order</a>
                                                               </li>
                                                               <li>
                                                                        <a href="invoice-preview.html"><i
                                                                                          class="ri-circle-fill circle-icon text-warning-600 w-auto"></i>
                                                                                 Declined Order</a>
                                                               </li>
                                                               <li>
                                                                        <a href="invoice-add.html"><i
                                                                                          class="ri-circle-fill circle-icon text-info-600 w-auto"></i>
                                                                                 Approved Order</a>
                                                               </li>
                                                      </ul>
                                             </li>
                                    </ul>
                           </div>
                  </aside>