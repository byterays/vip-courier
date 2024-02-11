<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   

    <!-- PAGE TITLE HERE -->
    <title>VIP Courier & Cargo</title>

    <!-- FAVICONS ICON -->
    
    <link href="//fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="assets/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <object class="logo-abbr" data="assets/images/svg/icon-logo.svg" type="image/svg+xml" height="20"></object>
                &nbsp;<object class="brand-title" data="assets/images/svg/text-logo.svg" type="image/svg+xml" height="12"></object>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

       <?php include "theme/admin/components/top-header.php"?>

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    
                    <li><a class="has-arrow " href="assets/javascript:void(0);" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="assets/index.html">Dashboard Light</a></li>
                            <li><a href="assets/index-2.html">Dashboard Dark</a></li>
                        </ul>
                    </li>
                    <li><a href="assets/employee.html" class="" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.986 14.0673C7.4407 14.0673 4.41309 14.6034 4.41309 16.7501C4.41309 18.8969 7.4215 19.4521 10.986 19.4521C14.5313 19.4521 17.5581 18.9152 17.5581 16.7693C17.5581 14.6234 14.5505 14.0673 10.986 14.0673Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.986 11.0054C13.3126 11.0054 15.1983 9.11881 15.1983 6.79223C15.1983 4.46564 13.3126 2.57993 10.986 2.57993C8.65944 2.57993 6.77285 4.46564 6.77285 6.79223C6.76499 9.11096 8.63849 10.9975 10.9563 11.0054H10.986Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Employees</span>
                        </a>
                    </li>
                    <li><a href="assets/core-hr.html" class="" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8381 12.7317C16.4566 12.7317 16.9757 13.2422 16.8811 13.853C16.3263 17.4463 13.2502 20.1143 9.54009 20.1143C5.43536 20.1143 2.10834 16.7873 2.10834 12.6835C2.10834 9.30245 4.67693 6.15297 7.56878 5.44087C8.19018 5.28745 8.82702 5.72455 8.82702 6.36429C8.82702 10.6987 8.97272 11.8199 9.79579 12.4297C10.6189 13.0396 11.5867 12.7317 15.8381 12.7317Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8848 9.1223C19.934 6.33756 16.5134 1.84879 12.345 1.92599C12.0208 1.93178 11.7612 2.20195 11.7468 2.5252C11.6416 4.81493 11.7834 7.78204 11.8626 9.12713C11.8867 9.5459 12.2157 9.87493 12.6335 9.89906C14.0162 9.97818 17.0914 10.0862 19.3483 9.74467C19.6552 9.69835 19.88 9.43204 19.8848 9.1223Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Core HR</span>
                        </a>
                    </li>
                    <li><a href="assets/finance.html" class="" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.64111 13.5497L9.38482 9.9837L12.5145 12.4421L15.1995 8.97684" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <ellipse cx="18.3291" cy="3.85021" rx="1.76201" ry="1.76201" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.6808 2.86012H7.01867C4.25818 2.86012 2.54651 4.81512 2.54651 7.57561V14.9845C2.54651 17.7449 4.22462 19.6915 7.01867 19.6915H14.9058C17.6663 19.6915 19.3779 17.7449 19.3779 14.9845V8.53213" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Finance</span>
                        </a>
                    </li>
                    <li><a class="has-arrow " href="assets/javascript:void(0);" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5346 2.55658H7.1072C4.28845 2.55658 2.52112 4.55216 2.52112 7.37733V14.9985C2.52112 17.8237 4.2802 19.8192 7.1072 19.8192H15.1959C18.0238 19.8192 19.7829 17.8237 19.7829 14.9985V11.3062" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09214 10.0108L14.9424 3.16057C15.7958 2.30807 17.1791 2.30807 18.0325 3.16057L19.1481 4.27615C20.0015 5.12957 20.0015 6.51374 19.1481 7.36624L12.2648 14.2495C11.8917 14.6226 11.3857 14.8325 10.8577 14.8325H7.42389L7.51006 11.3675C7.52289 10.8578 7.73097 10.372 8.09214 10.0108Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.9014 4.21895L18.0869 8.40445" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Tasks</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="assets/task.html">Tasks</a></li>
                            <li><a href="assets/task-summary.html">Task Summary</a></li>
                        </ul>
                    </li>
                    <li><a href="assets/performance.html" class="" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9732 2.52102H7.0266C4.25735 2.52102 2.52118 4.48177 2.52118 7.25651V14.7438C2.52118 17.5186 4.2491 19.4793 7.0266 19.4793H14.9723C17.7507 19.4793 19.4795 17.5186 19.4795 14.7438V7.25651C19.4795 4.48177 17.7507 2.52102 14.9732 2.52102Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.73657 11.0002L9.91274 13.1754L14.2632 8.82493" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Performance</span>
                        </a>
                    </li>
                    <li><a href="assets/project.html" class="" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.75713 9.35157V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.0349 6.34253V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.2428 12.6746V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2952 1.83333H6.70474C3.7103 1.83333 1.83331 3.95274 1.83331 6.95306V15.0469C1.83331 18.0473 3.70157 20.1667 6.70474 20.1667H15.2952C18.2984 20.1667 20.1666 18.0473 20.1666 15.0469V6.95306C20.1666 3.95274 18.2984 1.83333 15.2952 1.83333Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Projects</span>
                        </a>
                    </li>
                    <li><a href="assets/reports.html" class="" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5096 2.53165H7.41104C5.50437 2.52432 3.94146 4.04415 3.89654 5.9499V15.7701C3.85437 17.7071 5.38979 19.3121 7.32671 19.3552C7.35512 19.3552 7.38262 19.3561 7.41104 19.3552H14.7343C16.6538 19.2773 18.1663 17.6915 18.1525 15.7701V7.36798L13.5096 2.53165Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.2688 2.52084V5.18742C13.2688 6.48909 14.3211 7.54417 15.6228 7.54784H18.1482" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.0974 14.0786H8.1474" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.2229 10.6388H8.14655" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Reports</span>
                        </a>
                    </li>
                    <li><a href="assets/manage-client.html" class="" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79222 13.9396C12.1738 13.9396 15.0641 14.452 15.0641 16.4989C15.0641 18.5458 12.1931 19.0729 8.79222 19.0729C5.40972 19.0729 2.52039 18.5651 2.52039 16.5172C2.52039 14.4694 5.39047 13.9396 8.79222 13.9396Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.79223 11.0182C6.57206 11.0182 4.77173 9.21874 4.77173 6.99857C4.77173 4.7784 6.57206 2.97898 8.79223 2.97898C11.0115 2.97898 12.8118 4.7784 12.8118 6.99857C12.8201 9.21049 11.0326 11.0099 8.82064 11.0182H8.79223Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.1095 9.9748C16.5771 9.76855 17.7073 8.50905 17.7101 6.98464C17.7101 5.48222 16.6147 4.23555 15.1782 3.99997" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17.0458 13.5045C18.4675 13.7163 19.4603 14.2149 19.4603 15.2416C19.4603 15.9483 18.9928 16.4067 18.2374 16.6936" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Manage Clients</span>
                        </a>
                    </li>
                    <li><a href="assets/blog-1.html" class="" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2.75012H7.665C4.644 2.75012 2.75 4.88912 2.75 7.91612V16.0841C2.75 19.1111 4.635 21.2501 7.665 21.2501H16.333C19.364 21.2501 21.25 19.1111 21.25 16.0841V7.91612C21.25 4.88912 19.364 2.75012 16.334 2.75012Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.9946 16.0001V12.0001" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.9896 8.20435H11.9996" stroke="#888888" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                            <span class="nav-text">Blog</span>
                            <span class="badge badge-danger badge-xs ms-1">NEW</span>
                        </a>
                    </li>
                    <li><a href="assets/svg-icon.html" class="" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7379 2.76181H8.08493C6.00493 2.75381 4.29993 4.41181 4.25093 6.49081V17.2038C4.20493 19.3168 5.87993 21.0678 7.99293 21.1148C8.02393 21.1148 8.05393 21.1158 8.08493 21.1148H16.0739C18.1679 21.0298 19.8179 19.2998 19.8029 17.2038V8.03781L14.7379 2.76181Z" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.4751 2.75V5.659C14.4751 7.079 15.6231 8.23 17.0431 8.234H19.7981" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.2882 15.3585H8.88818" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.2432 11.606H8.88721" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                            <span class="nav-text">SVG Icons</span>
                            <span class="badge badge-danger badge-xs ms-1">NEW</span>
                        </a>
                    </li>
                    <li class="menu-title">OUR FEATURES</li>
                    <li><a class="has-arrow " href="assets/javascript:void(0);" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.11086 10.2878V13.7208" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.86244 12.0045H5.35974" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.0856 10.3924H12.9875" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.748 13.6691H14.6499" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.39948 0.833328C6.39948 1.5121 6.96092 2.06236 7.65349 2.06236H8.62193C9.69042 2.06617 10.5559 2.9144 10.5608 3.9616V4.5804" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0593 19.1324C11.3045 19.1791 8.60026 19.1771 5.94166 19.1324C2.99069 19.1324 0.833313 17.0275 0.833313 14.1354V9.87325C0.833313 6.98107 2.99069 4.8762 5.94166 4.8762C8.61483 4.83051 11.321 4.83146 14.0593 4.8762C17.0102 4.8762 19.1666 6.98203 19.1666 9.87325V14.1354C19.1666 17.0275 17.0102 19.1324 14.0593 19.1324Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Apps <span class="badge badge-danger badge-xs ms-1">NEW</span></span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="assets/chat.html">Chat<span class="badge badge-danger badge-xs ms-1">NEW</span></a></li>
                            <li><a class="has-arrow" href="assets/javascript:void(0);" aria-expanded="false">Users Manager<span class="badge badge-danger badge-xs ms-1">NEW</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="assets/user.html">User</a></li>
                                    <li><a href="assets/edit-profile.html">Add User</a></li>
                                    <li><a href="assets/user-roles.html">Roles Listing </a></li>
                                    <li><a href="assets/add-role.html">Add Roles</a></li>
                                    <li><a href="assets/app-profile-1.html">Profile 1</a></li>
                                    <li><a href="assets/app-profile-2.html">Profile 2 <span class="badge badge-danger badge-xs ms-1">NEW</span></a></li>
                                    <li><a href="assets/edit-profile.html">Edit Profile</a></li>
                                    <li><a href="assets/post-details.html">Post Details</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="assets/javascript:void(0);" aria-expanded="false">Customer Manager<span class="badge badge-danger badge-xs ms-1">NEW</span></a>
                                <ul aria-expanded="false">
                                    <li><a href="assets/customer.html">Customer</a></li>
                                    <li><a href="assets/customer-profile.html">Customer Profile</a></li>
                                </ul>
                            </li>
                            <li><a href="assets/contacts.html">Contacts <span class="badge badge-danger badge-xs ms-1">NEW</span></a></li>
                            <li><a class="has-arrow" href="assets/javascript:void(0);" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="assets/email-compose.html">Compose</a></li>
                                    <li><a href="assets/email-inbox.html">Inbox</a></li>
                                    <li><a href="assets/email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="assets/app-calender.html">Calendar</a></li>
                            <li><a class="has-arrow" href="assets/javascript:void(0);" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="assets/ecom-product-grid.html">Product Grid</a></li>
                                    <li><a href="assets/ecom-product-list.html">Product List</a></li>
                                    <li><a href="assets/ecom-product-detail.html">Product Details</a></li>
                                    <li><a href="assets/ecom-product-order.html">Order</a></li>
                                    <li><a href="assets/ecom-checkout.html">Checkout</a></li>
                                    <li><a href="assets/ecom-invoice.html">Invoice</a></li>
                                    <li><a href="assets/ecom-customers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="assets/javascript:void(0);" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_14_1294)">
                                        <path d="M12.1498 18.1013H8.30563L7.86828 15.8455H5.15205L4.71469 18.1013H1.05469L3.67883 3.80664H9.52563L12.1498 18.1013ZM7.43092 13.1523L6.62526 8.04211H6.46413L5.65847 13.1523H7.43092Z" stroke="#888888" />
                                        <path d="M17.4903 3.80664H13.5771V18.1013H17.4903V3.80664Z" stroke="#888888" />
                                        <mask id="mask0_14_1294" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="6" y="0" width="21" height="20">
                                            <path d="M16.6266 0.00350988L6.97803 9.84375L16.8183 19.4923L26.4668 9.65207L16.6266 0.00350988Z" stroke="#888888" />
                                        </mask>
                                        <g mask="url(#mask0_14_1294)">
                                            <path d="M14.7219 3.91233L14.8299 14.8991L18.7149 14.8609L18.609 4.09213L16.632 0.00825376L14.7219 3.91233ZM18.281 14.4355L15.2553 14.4652L15.1592 4.68853L15.3838 4.90622L15.8065 4.47173L16.2438 4.89717L16.6711 4.46324L17.1063 4.89177L17.5245 4.45487L17.9687 4.88023L18.1848 4.65719L18.281 14.4355ZM18.1324 4.09379L17.9573 4.27443L17.5112 3.84721L17.0972 4.27979L16.6664 3.85554L16.2373 4.29131L15.7981 3.86408L15.3748 4.29917L15.1532 4.08445L15.1525 4.00974L16.0974 2.07838L16.6448 2.43559L17.1599 2.08482L18.1324 4.09379ZM16.6397 1.91931L16.2877 1.68959L16.6299 0.990098L16.9707 1.69393L16.6397 1.91931Z" stroke="#888888" />
                                            <path d="M14.8359 15.545L18.7114 15.5068L18.7072 15.0772L14.8316 15.1153L14.8359 15.545Z" stroke="#888888" />
                                            <path d="M14.8521 17.1728C14.8573 17.7 15.2905 18.1248 15.8178 18.1196L17.7798 18.1003C18.0352 18.0978 18.2744 17.996 18.4532 17.8136C18.632 17.6312 18.7291 17.3901 18.7266 17.1347L18.7127 15.7235L14.8383 15.7616L14.8521 17.1728ZM18.297 17.1389C18.2984 17.2796 18.2449 17.4123 18.1465 17.5128C18.048 17.6132 17.9163 17.6693 17.7756 17.6707L15.8136 17.69C15.5232 17.6929 15.2846 17.4589 15.2818 17.1686L15.2721 16.1871L18.2874 16.1574L18.297 17.1389Z" stroke="#888888" />
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_14_1294">
                                            <rect width="20" height="20" stroke="#888888" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <span class="nav-text">AIKit<span class="badge badge-danger badge-xs ms-1">NEW</span></span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="assets/auto-write.html">Auto Writer</a></li>
                            <li><a href="assets/scheduled.html">Scheduler</a></li>
                            <li><a href="assets/repurpose.html">Repurpose</a></li>
                            <li><a href="assets/rss.html">RSS</a></li>
                            <li><a href="assets/chatbot.html">Chatbot</a></li>
                            <li><a href="assets/fine-tune-models.html">Fine-tune Models</a></li>
                            <li><a href="assets/prompt.html">AI Menu Prompts</a></li>
                            <li><a href="assets/setting.html">Settings</a></li>
                            <li><a href="assets/import.html">Export/Import Settings</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="assets/javascript:void(0);" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8064 7.62355L20.184 6.54346C19.6574 5.62954 18.4905 5.31426 17.5753 5.83866V5.83866C17.1397 6.09528 16.6198 6.16809 16.1305 6.04103C15.6411 5.91396 15.2224 5.59746 14.9666 5.16131C14.8021 4.88409 14.7137 4.56833 14.7103 4.24598V4.24598C14.7251 3.72916 14.5302 3.22834 14.1698 2.85761C13.8094 2.48688 13.3143 2.2778 12.7973 2.27802H11.5433C11.0367 2.27801 10.5511 2.47985 10.1938 2.83888C9.83644 3.19791 9.63693 3.68453 9.63937 4.19106V4.19106C9.62435 5.23686 8.77224 6.07675 7.72632 6.07664C7.40397 6.07329 7.08821 5.98488 6.81099 5.82035V5.82035C5.89582 5.29595 4.72887 5.61123 4.20229 6.52516L3.5341 7.62355C3.00817 8.53633 3.31916 9.70255 4.22975 10.2322V10.2322C4.82166 10.574 5.18629 11.2055 5.18629 11.889C5.18629 12.5725 4.82166 13.204 4.22975 13.5457V13.5457C3.32031 14.0719 3.00898 15.2353 3.5341 16.1453V16.1453L4.16568 17.2345C4.4124 17.6797 4.82636 18.0082 5.31595 18.1474C5.80554 18.2865 6.3304 18.2248 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6515 8.2191 17.7821C8.70725 17.9128 9.12299 18.233 9.37392 18.6716C9.53845 18.9488 9.62686 19.2646 9.63021 19.5869V19.5869C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5 14.7053 20.6491 14.7103 19.5961V19.5961C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6806 16.6233 17.6831C16.9449 17.6917 17.2594 17.7797 17.5387 17.9393V17.9393C18.4515 18.4653 19.6177 18.1543 20.1474 17.2437V17.2437L20.8064 16.1453C21.0615 15.7074 21.1315 15.1859 21.001 14.6963C20.8704 14.2067 20.55 13.7893 20.1108 13.5366V13.5366C19.6715 13.2839 19.3511 12.8665 19.2206 12.3769C19.09 11.8872 19.16 11.3658 19.4151 10.9279C19.581 10.6383 19.8211 10.3981 20.1108 10.2322V10.2322C21.0159 9.70283 21.3262 8.54343 20.8064 7.63271V7.63271V7.62355Z" stroke="#888888" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                                    <circle cx="12.1747" cy="11.889" r="2.63616" stroke="#888888" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">CMS<span class="badge badge-danger badge-xs ms-1">NEW</span></span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="assets/content.html">Content</a></li>
                            <li><a href="assets/menu.html">Menus</a></li>
                            <li><a href="assets/email-template.html">Email Template</a></li>
                            <li><a href="assets/blog.html">Blog</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="assets/javascript:void(0);" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8381 11.7317C15.4566 11.7317 15.9757 12.2422 15.8811 12.853C15.3263 16.4463 12.2502 19.1143 8.54009 19.1143C4.43536 19.1143 1.10834 15.7873 1.10834 11.6835C1.10834 8.30245 3.67693 5.15297 6.56878 4.44087C7.19018 4.28745 7.82702 4.72455 7.82702 5.36429C7.82702 9.69868 7.97272 10.8199 8.79579 11.4297C9.61886 12.0396 10.5867 11.7317 14.8381 11.7317Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.8848 8.12229C18.934 5.33755 15.5134 0.848777 11.345 0.92597C11.0208 0.93176 10.7612 1.20194 10.7468 1.52518C10.6416 3.81492 10.7834 6.78202 10.8626 8.12711C10.8867 8.54588 11.2157 8.87492 11.6335 8.89904C13.0162 8.97816 16.0914 9.08623 18.3483 8.74465C18.6552 8.69834 18.88 8.43202 18.8848 8.12229Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Charts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="assets/chart-flot.html">Flot</a></li>
                            <li><a href="assets/chart-morris.html">Morris</a></li>
                            <li><a href="assets/chart-chartjs.html">Chartjs</a></li>
                            <li><a href="assets/chart-chartist.html">Chartist</a></li>
                            <li><a href="assets/chart-sparkline.html">Sparkline</a></li>
                            <li><a href="assets/chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="assets/javascript:void(0);" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0122 1.82893L11.6874 5.17545C11.8515 5.50399 12.1684 5.73179 12.5359 5.78451L16.2832 6.32391C17.2091 6.45758 17.5775 7.57968 16.9075 8.22262L14.1977 10.8264C13.9314 11.0825 13.8101 11.4505 13.8731 11.812L14.5126 15.488C14.6701 16.3974 13.7023 17.0911 12.8747 16.6609L9.52545 14.9241C9.1971 14.7537 8.80385 14.7537 8.47455 14.9241L5.12525 16.6609C4.29771 17.0911 3.32986 16.3974 3.48831 15.488L4.12686 11.812C4.18986 11.4505 4.06864 11.0825 3.80233 10.8264L1.09254 8.22262C0.422489 7.57968 0.790922 6.45758 1.71678 6.32391L5.4641 5.78451C5.83158 5.73179 6.14942 5.50399 6.31359 5.17545L7.98776 1.82893C8.40201 1.00148 9.59799 1.00148 10.0122 1.82893Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Bootstrap</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="assets/ui-accordion.html">Accordion</a></li>
                            <li><a href="assets/ui-alert.html">Alert</a></li>
                            <li><a href="assets/ui-badge.html">Badge</a></li>
                            <li><a href="assets/ui-button.html">Button</a></li>
                            <li><a href="assets/ui-modal.html">Modal</a></li>
                            <li class="extra-menu-li">
                                <ul id="collapseExample" class="pt-0 extra-menu-links extra-menu-area">
                                    <li><a href="assets/ui-button-group.html">Button Group</a></li>
                                    <li><a href="assets/ui-list-group.html">List Group</a></li>
                                    <li><a href="assets/ui-card.html">Cards</a></li>
                                    <li><a href="assets/ui-carousel.html">Carousel</a></li>
                                    <li><a href="assets/ui-dropdown.html">Dropdown</a></li>
                                    <li><a href="assets/ui-popover.html">Popover</a></li>
                                    <li><a href="assets/ui-progressbar.html">Progressbar</a></li>
                                    <li><a href="assets/ui-tab.html">Tab</a></li>
                                    <li><a href="assets/ui-typography.html">Typography</a></li>
                                    <li><a href="assets/ui-pagination.html">Pagination</a></li>
                                    <li><a href="assets/ui-grid.html">Grid</a></li>
                                </ul>
                                <a class="btn show-more-btn border-0" data-bs-toggle="collapse" href="assets/#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <span class="show-more">Show More + </span>
                                    <span class="show-less">Show Less - </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="assets/javascript:void(0);" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.634 13.4211C18.634 16.7009 16.7007 18.6342 13.4209 18.6342H6.28738C2.99929 18.6342 1.06238 16.7009 1.06238 13.4211V6.27109C1.06238 2.99584 2.26688 1.06259 5.54763 1.06259H7.38096C8.03913 1.06351 8.65879 1.37242 9.05296 1.89951L9.88988 3.01234C10.2859 3.53851 10.9055 3.84834 11.5637 3.84926H14.1579C17.446 3.84926 18.6596 5.52309 18.6596 8.86984L18.634 13.4211Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5.85754 12.2577H13.8646" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Plugins</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="assets/uc-select2.html">Select 2</a></li>
                            <li><a href="assets/uc-nestable.html">Nestable</a></li>
                            <li><a href="assets/uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="assets/uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="assets/uc-toastr.html">Toastr</a></li>
                            <li><a href="assets/map-jqvmap.html">Jqv Map</a></li>
                            <li><a href="assets/uc-lightgallery.html">Light Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="assets/widget-basic.html" class="" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 5.95833C2.75 3.55189 2.77577 2.75 5.95833 2.75C9.1409 2.75 9.16667 3.55189 9.16667 5.95833C9.16667 8.36478 9.17682 9.16667 5.95833 9.16667C2.73985 9.16667 2.75 8.36478 2.75 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 5.95833C12.8333 3.55189 12.8591 2.75 16.0416 2.75C19.2242 2.75 19.25 3.55189 19.25 5.95833C19.25 8.36478 19.2601 9.16667 16.0416 9.16667C12.8232 9.16667 12.8333 8.36478 12.8333 5.95833Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.75 16.0417C2.75 13.6352 2.77577 12.8333 5.95833 12.8333C9.1409 12.8333 9.16667 13.6352 9.16667 16.0417C9.16667 18.4481 9.17682 19.25 5.95833 19.25C2.73985 19.25 2.75 18.4481 2.75 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8333 16.0417C12.8333 13.6352 12.8591 12.8333 16.0416 12.8333C19.2242 12.8333 19.25 13.6352 19.25 16.0417C19.25 18.4481 19.2601 19.25 16.0416 19.25C12.8232 19.25 12.8333 18.4481 12.8333 16.0417Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Widget</span>
                        </a>
                    </li>
                    <li><a class="has-arrow " href="assets/javascript:void(0);" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.4065 14.8714H7.78821" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.4065 11.0338H7.78821" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.3137 7.2051H7.78827" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5829 2.52066C14.5829 2.52066 7.54563 2.52433 7.53463 2.52433C5.00463 2.53991 3.43805 4.20458 3.43805 6.74374V15.1734C3.43805 17.7254 5.01655 19.3965 7.56855 19.3965C7.56855 19.3965 14.6049 19.3937 14.6168 19.3937C17.1468 19.3782 18.7143 17.7126 18.7143 15.1734V6.74374C18.7143 4.19174 17.1349 2.52066 14.5829 2.52066Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>

                            <span class="nav-text">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="assets/form-element.html">Form Elements</a></li>
                            <li><a href="assets/form-wizard.html">Wizard</a></li>
                            <li><a href="assets/form-ckeditor.html">CkEditor</a></li>
                            <li><a href="assets/form-pickers.html">Pickers</a></li>
                            <li><a href="assets/form-validation.html">Form Validate</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="assets/javascript:void(0);" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.46932 12.2102H0.693665" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.04547 3.32535H14.8211" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.99912 3.27573C4.99912 2.08805 4.02914 1.125 2.8329 1.125C1.63667 1.125 0.666687 2.08805 0.666687 3.27573C0.666687 4.46342 1.63667 5.42647 2.8329 5.42647C4.02914 5.42647 4.99912 4.46342 4.99912 3.27573Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.3333 12.1743C15.3333 10.9866 14.3641 10.0235 13.1679 10.0235C11.9709 10.0235 11.0009 10.9866 11.0009 12.1743C11.0009 13.3619 11.9709 14.325 13.1679 14.325C14.3641 14.325 15.3333 13.3619 15.3333 12.1743Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="assets/table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="assets/table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="assets/javascript:void(0);" aria-expanded="false">
                            <div class="menu-icon">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3691 18.7157C18.086 18.7157 19.4784 17.3242 19.4793 15.6073V15.6055V13.1305C18.3454 13.1305 17.4269 12.212 17.426 11.078C17.426 9.94504 18.3445 9.02562 19.4784 9.02562H19.4793V6.55062C19.4812 4.83279 18.0906 3.43946 16.3737 3.43762H16.3682H5.63216C3.91433 3.43762 2.52191 4.82912 2.521 6.54696V6.54787V9.10537C3.6155 9.06687 4.53308 9.92304 4.57158 11.0175C4.5725 11.0377 4.57341 11.0579 4.57341 11.078C4.57433 12.2101 3.65858 13.1286 2.5265 13.1305H2.521V15.6055C2.52008 17.3224 3.9125 18.7157 5.62941 18.7157H5.63033H16.3691Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.3403 8.30788L11.905 9.45096C11.96 9.5628 12.0663 9.64071 12.1901 9.65905L13.4523 9.8433C13.7649 9.88913 13.8887 10.2723 13.6632 10.4914L12.7502 11.3805C12.6603 11.4676 12.62 11.5932 12.6402 11.717L12.8556 12.9728C12.9087 13.2835 12.5833 13.52 12.3047 13.3734L11.1762 12.7803C11.0653 12.7216 10.9333 12.7216 10.8224 12.7803L9.69491 13.3734C9.41533 13.52 9.08991 13.2835 9.14308 12.9728L9.3585 11.717C9.37958 11.5932 9.33833 11.4676 9.2485 11.3805L8.33641 10.4914C8.11091 10.2723 8.23466 9.88913 8.54633 9.8433L9.80858 9.65905C9.93233 9.64071 10.0396 9.5628 10.0946 9.45096L10.6583 8.30788C10.7977 8.02555 11.201 8.02555 11.3403 8.30788Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="assets/page-login.html">Login</a></li>
                            <li><a href="assets/page-register.html">Register</a></li>
                            <li><a class="has-arrow" href="assets/javascript:void(0);" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="assets/page-error-400.html">Error 400</a></li>
                                    <li><a href="assets/page-error-403.html">Error 403</a></li>
                                    <li><a href="assets/page-error-404.html">Error 404</a></li>
                                    <li><a href="assets/page-error-500.html">Error 500</a></li>
                                    <li><a href="assets/page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="assets/page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="assets/empty-page.html">Empty Page</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="help-desk">
                    <a href="assets/javascript:void(0)" class="btn btn-primary">Help Desk</a>
                </div>
            </div>
        </div>

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="assets/javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="assets/javascript:void(0)">Form Elements</a></li>
                </ol>
            </div>
            <div class="container-fluid">

                <!-- row -->
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Style</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="mb-3">
                                            <input type="text" class="form-control input-default " placeholder="input-default">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control input-rounded" placeholder="input-rounded">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Checkbox</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 col-xxl-6 col-6">
                                        <div class="form-check custom-checkbox mb-3">
                                            <input type="checkbox" class="form-check-input" id="customCheckBox1" required>
                                            <label class="form-check-label" for="customCheckBox1">Checkbox 1</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-6 col-6">
                                        <div class="form-check custom-checkbox mb-3 checkbox-info">
                                            <input type="checkbox" class="form-check-input" checked id="customCheckBox2" required>
                                            <label class="form-check-label" for="customCheckBox2">Checkbox 2</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-6 col-6">
                                        <div class="form-check custom-checkbox mb-3 checkbox-success">
                                            <input type="checkbox" class="form-check-input" checked id="customCheckBox3" required>
                                            <label class="form-check-label" for="customCheckBox3">Checkbox 3</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-6 col-6">
                                        <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                            <input type="checkbox" class="form-check-input" checked id="customCheckBox4" required>
                                            <label class="form-check-label" for="customCheckBox4">Checkbox 4</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-6 col-6">
                                        <div class="form-check custom-checkbox mb-3 checkbox-danger">
                                            <input type="checkbox" class="form-check-input" checked id="customCheckBox5" required>
                                            <label class="form-check-label" for="customCheckBox5">Checkbox 5</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check custom-checkbox mb-3 check-xs">
                                            <input type="checkbox" class="form-check-input" checked id="customCheckBox6" required>
                                            <label class="form-check-label" for="customCheckBox6"></label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check custom-checkbox mb-3 checkbox-info">
                                            <input type="checkbox" class="form-check-input" checked id="customCheckBox7" required>
                                            <label class="form-check-label" for="customCheckBox7"></label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check custom-checkbox mb-3 checkbox-success check-lg">
                                            <input type="checkbox" class="form-check-input" checked id="customCheckBox8" required>
                                            <label class="form-check-label" for="customCheckBox8"></label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check custom-checkbox mb-3 checkbox-warning check-xl">
                                            <input type="checkbox" class="form-check-input" checked id="customCheckBox9" required>
                                            <label class="form-check-label" for="customCheckBox9"></label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Textarea</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="mb-3">
                                            <textarea class="form-txtarea form-control" rows="8" id="comment"></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Size</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="mb-3">
                                            <input class="form-control form-control-lg" type="text" placeholder="form-control-lg">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control" type="text" placeholder="Default input">
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control form-control-sm" type="text" placeholder="form-control-sm">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Select Size</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <select class="default-select form-control wide mb-3 form-control-lg">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                        <select class="default-select form-control wide mb-3">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                        <select class="default-select form-control wide form-control-sm ">
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Select List</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Select list (select one):</label>
                                            <select class="default-select  form-control wide">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        <select multiple class="default-select form-control wide mt-3">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Horizontal Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>

                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" placeholder="First Name">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label>City</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-4">
                                                <label class="form-label">State</label>
                                                <select id="inputState" class="default-select form-control wide">
                                                    <option selected>Choose...</option>
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label class="form-label">Zip</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Vertical Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <fieldset class="mb-3">
                                            <div class="row">
                                                <label class="col-form-label col-sm-3 pt-0">Radios</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked>
                                                        <label class="form-check-label">
                                                            First radio
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                                                        <label class="form-check-label">
                                                            Second radio
                                                        </label>
                                                    </div>
                                                    <div class="form-check disabled">
                                                        <input class="form-check-input" type="radio" name="gridRadios" value="option3" disabled>
                                                        <label class="form-check-label">
                                                            Third disabled radio
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="mb-3 row">
                                            <div class="col-sm-3">Checkbox</div>
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">
                                                        Example checkbox
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Checkboxes</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="mb-3">
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" id="check1" value="" checked>
                                                <label class="form-check-label" for="check1">Option 1</label>
                                            </div>
                                            <div class="form-check mb-2">
                                                <input type="checkbox" class="form-check-input" id="check2" value="">
                                                <label class="form-check-label" for="check2">Option 2</label>
                                            </div>
                                            <div class="form-check disabled">
                                                <input type="checkbox" class="form-check-input" id="check3" value="" disabled>
                                                <label class="form-check-label" for="check3">Disabled</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Inline Checkboxes</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="mb-3">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="" checked>Option 1
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="">Option 2
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline disabled">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="" disabled>Disabled
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Radio Buttons</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox mb-3 checkbox-primary">
                                                    <input type="radio" class="form-check-input" id="customRadioBox1" name="optradioCustom">
                                                    <label class="form-check-label" for="customRadioBox1">Checkbox 1</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox mb-3 checkbox-secondary">
                                                    <input type="radio" class="form-check-input" id="customRadioBox2" name="optradioCustom">
                                                    <label class="form-check-label" for="customRadioBox2">Checkbox 2</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox mb-3 checkbox-info">
                                                    <input type="radio" class="form-check-input" id="customRadioBox3" name="optradioCustom">
                                                    <label class="form-check-label" for="customRadioBox3">Checkbox 2</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox mb-3 checkbox-success">
                                                    <input type="radio" class="form-check-input" id="customRadioBox4" name="optradioCustom">
                                                    <label class="form-check-label" for="customRadioBox4">Checkbox 3</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox mb-3 checkbox-warning">
                                                    <input type="radio" class="form-check-input" id="customRadioBox5" name="optradioCustom">
                                                    <label class="form-check-label" for="customRadioBox5">Checkbox 4</label>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox mb-3 checkbox-danger">
                                                    <input type="radio" class="form-check-input" id="customRadioBox6" name="optradioCustom">
                                                    <label class="form-check-label" for="customRadioBox6">Checkbox 5</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Inline Radio </h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="mb-3 mb-0">
                                            <div class="form-check custom-checkbox form-check-inline">
                                                <input type="radio" class="form-check-input" id="customRadioBox7" name="optradioCustom1">
                                                <label class="form-check-label" for="customRadioBox7">Checkbox 1</label>
                                            </div>
                                            <div class="form-check custom-checkbox form-check-inline">
                                                <input type="radio" class="form-check-input" id="customRadioBox8" name="optradioCustom1">
                                                <label class="form-check-label" for="customRadioBox8">Checkbox 1</label>
                                            </div>
                                            <div class="form-check custom-checkbox form-check-inline">
                                                <input type="radio" class="form-check-input" id="customRadioBox9" name="optradioCustom1">
                                                <label class="form-check-label" for="customRadioBox9">Checkbox 1</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Readonly</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="mb-3">
                                            <input class="form-control" type="text" placeholder="Readonly input here…" readonly>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" readonly class="form-control-plaintext" value="email@example.com">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Inline Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form class="d-flex align-items-center flex-wrap flex-sm-nowrap">
                                        <div class="mb-3 mb-2">
                                            <label class="sr-only">Email</label>
                                            <input type="text" readonly class="form-control-plaintext" value="email@example.com">
                                        </div>
                                        <div class="mb-3 mt-2 mx-sm-2">
                                            <label class="sr-only">Password</label>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form grid</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="First name">
                                            </div>
                                            <div class="col-sm-6 mt-2 mt-sm-0">
                                                <input type="text" class="form-control" placeholder="Last name">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Row</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="First name">
                                            </div>
                                            <div class="col-sm-6 mt-2 mt-sm-0">
                                                <input type="text" class="form-control" placeholder="Last name">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Label Size</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-sm" placeholder="col-form-label-sm">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" placeholder="col-form-label">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-lg" placeholder="col-form-label-lg">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Column size</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" placeholder="City">
                                            </div>
                                            <div class="col mt-2 mt-sm-0">
                                                <input type="text" class="form-control" placeholder="State">
                                            </div>
                                            <div class="col mt-2 mt-sm-0">
                                                <input type="text" class="form-control" placeholder="Zip">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Auto-sizing</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <label class="sr-only">Name</label>
                                                <input type="text" class="form-control mb-2" placeholder="Jane Doe">
                                            </div>
                                            <div class="col-auto">
                                                <label class="sr-only">Username</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-text">@</div>
                                                    <input type="text" class="form-control" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox">
                                                    <label class="form-check-label">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Custom Select</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="row align-items-center">
                                            <div class="col-auto my-1">
                                                <label class="me-sm-2">Preference</label>
                                                <select class="me-sm-2 default-select form-control wide" id="inlineFormCustomSelect">
                                                    <option selected>Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Disabled forms</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <fieldset disabled>
                                            <div class="mb-3">
                                                <label class="form-label">Disabled input</label>
                                                <input type="text" class="form-control" placeholder="Disabled input">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Disabled select menu</label>
                                                <select class="form-control ">
                                                    <option>Disabled select</option>
                                                </select>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" disabled>
                                                <label class="form-check-label">
                                                    Can't check this
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3 text-white">Submit</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Group</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group mb-3 input-warning-o">
                                            <span class="input-group-text">@</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group mb-3 input-success-o">
                                            <span class="input-group-text">@</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="input-group mb-3 input-primary">
                                            <input type="text" class="form-control" placeholder="Recipient's username">
                                            <span class="input-group-text border-0">@example.com</span>
                                        </div>

                                        <label>Your vanity URL</label>
                                        <div class="input-group mb-3  input-success">
                                            <span class="input-group-text border-0">//example.com</span>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="input-group mb-3  input-info">
                                            <span class="input-group-text border-0">$</span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-text border-0">.00</span>
                                        </div>

                                        <div class="input-group   input-danger">
                                            <span class="input-group-text border-0">With textarea</span>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Group Size</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text">Small</span>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Default</span>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="input-group input-group-lg">
                                            <span class="input-group-text">Large</span>
                                            <input type="text" class="form-control">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Checkboxes and radios</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group mb-3">
                                            <div class="input-group-text">
                                                <div class="form-check custom-checkbox">
                                                    <input type="checkbox" class="form-check-input">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <div class="form-check custom-checkbox">
                                                    <input type="radio" class="form-check-input">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Multiple inputs</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group">
                                            <span class="input-group-text">First and last name</span>
                                            <input type="text" class="form-control">
                                            <input type="text" class="form-control">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Multiple addons</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">$</span>
                                            <span class="input-group-text">0.00</span>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-text">$</span>
                                            <span class="input-group-text">0.00</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Button addons</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group mb-3">
                                            <button class="btn btn-primary" type="button">Button</button>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control">
                                            <button class="btn btn-primary" type="button">Button</button>
                                        </div>

                                        <div class="input-group mb-3">
                                            <button class="btn btn-primary" type="button">Button</button>
                                            <button class="btn btn-primary" type="button">Button</button>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <button class="btn btn-primary" type="button">Button</button>
                                            <button class="btn btn-primary" type="button">Button</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Buttons with dropdowns</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group mb-3">
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropdown</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="assets/#">Action</a>
                                                <a class="dropdown-item" href="assets/#">Another action</a>
                                                <a class="dropdown-item" href="assets/#">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="assets/#">Separated link</a>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Dropdown</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="assets/#">Action</a>
                                                <a class="dropdown-item" href="assets/#">Another action</a>
                                                <a class="dropdown-item" href="assets/#">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="assets/#">Separated link</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Segmented buttons</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group mb-3">
                                            <button type="button" class="btn btn-primary">Action</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="assets/#">Action</a>
                                                <a class="dropdown-item" href="assets/#">Another action</a>
                                                <a class="dropdown-item" href="assets/#">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="assets/#">Separated link</a>
                                            </div>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="input-group">
                                            <input type="text" class="form-control">
                                            <button type="button" class="btn btn-primary">Action</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="assets/#">Action</a>
                                                <a class="dropdown-item" href="assets/#">Another action</a>
                                                <a class="dropdown-item" href="assets/#">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="assets/#">Separated link</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Custom select</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text mb-0">Options</label>
                                            <select class="default-select  form-control wide">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>

                                        <div class="input-group mb-3">
                                            <select class="default-select form-control wide bleft">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <label class="input-group-text  mb-0">Options</label>
                                        </div>

                                        <div class="input-group mb-3">
                                            <button class="btn btn-primary" type="button">Button</button>
                                            <select class="default-select form-control wide">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>

                                        <div class="input-group">
                                            <select class="default-select form-control wide bleft">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <button class="btn btn-primary" type="button">Button</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Custom file input</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Default file input example</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                                    <input class="form-control" type="file" id="formFileMultiple" multiple="">
                                </div>
                                <div class="mb-3">
                                    <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                                    <input class="form-control" type="file" id="formFileDisabled" disabled="">
                                </div>
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Small file input example</label>
                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                </div>
                                <div>
                                    <label for="formFileLg" class="form-label">Large file input example</label>
                                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer out-footer">
            <div class="copyright">
                <p>Copyright © Developed by <a href="/" target="_blank">VIP Courier & Cargo</a> <?=date("Y")?></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

       


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="assets/vendor/global/global.min.js"></script>
    <script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

    <script src="assets/js/custom.js"></script>
    <script src="assets/js/deznav-init.js"></script>
</body>

</html>