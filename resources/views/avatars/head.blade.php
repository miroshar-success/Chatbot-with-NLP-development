<!DOCTYPE html>

<html lang="en" class="light-style  layout-menu-fixed   " dir="ltr" data-theme="theme-default" data-assets-path="https://dashboard.yekbun.net/public//assets/" data-base-url="https://dashboard.yekbun.net" data-framework="laravel" data-template="vertical-menu-theme-default-light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Avatars  |
    Bootstrap 5 HTML Admin Template - Pro</title>
  <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- laravel CRUD token -->
  <meta name="csrf-token" content="TmAAPHZcaiHEHuE0K34WbF61iRaF1DbGH80mZ4i0">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-laravel-admin-template/">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="https://dashboard.yekbun.net/public//assets/img/favicon/favicon.ico" />
  

  
  <!-- Include Styles -->
  <!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://dashboard.yekbun.net/public//assets/vendor/fonts/boxicons.css" />
<link rel="stylesheet" href="https://dashboard.yekbun.net/public//assets/vendor/fonts/fontawesome.css" />
<link rel="stylesheet" href="https://dashboard.yekbun.net/public//assets/vendor/fonts/flag-icons.css" />

<!-- Core CSS -->
<link rel="stylesheet" href="https://dashboard.yekbun.net/public//assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
<link rel="stylesheet" href="https://dashboard.yekbun.net/public//assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
<link rel="stylesheet" href="https://dashboard.yekbun.net/public//assets/css/demo.css" />


<link rel="stylesheet" href="https://dashboard.yekbun.net/public//assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
<link rel="stylesheet" href="https://dashboard.yekbun.net/public//assets/vendor/libs/typeahead-js/typeahead.css" />

<!-- Vendor Styles -->
<link rel="stylesheet" href="https://dashboard.yekbun.net/public//assets/vendor/libs/animate-css/animate.css" />
<link rel="stylesheet" href="https://dashboard.yekbun.net/public//assets/vendor/libs/sweetalert2/sweetalert2.css" />
<link rel="stylesheet" href="https://dashboard.yekbun.net/public//assets/vendor/libs/toastr/toastr.css" />
<link rel="stylesheet" href="https://dashboard.yekbun.net/public//assets/vendor/libs/animate-css/animate.css" />

<!-- Page Styles -->
<link rel="stylesheet" href="https://dashboard.yekbun.net/public//assets/vendor/css/pages/page-icons.css" />


<link href="
https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css
" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>

<style>
	.file-icon p{
	font-size:large;	 
	}
</style>
<script>
  const dropZoneInitFunctions = [];
</script>

  <!-- Include Scripts for customizer, helper, analytics, config -->
  <!-- laravel style -->
<script src="https://dashboard.yekbun.net/public//assets/vendor/js/helpers.js"></script>
<!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="https://dashboard.yekbun.net/public//assets/vendor/js/template-customizer.js"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="https://dashboard.yekbun.net/public//assets/js/config.js"></script>

  <script>
    window.templateCustomizer = new TemplateCustomizer({
      cssPath: '',
      themesPath: '',
      defaultShowDropdownOnHover: true, // true/false (for horizontal layout only)
      displayCustomizer: true,
      lang: 'en',
      pathResolver: function(path) {
        var resolvedPaths = {
          // Core stylesheets
                      'core.css': 'https://dashboard.yekbun.net/public//assets/vendor/css/rtl/core.css?id=0286e38248768ef3ef97f053e1fb844e',
            'core-dark.css': 'https://dashboard.yekbun.net/public//assets/vendor/css/rtl/core-dark.css?id=9a1c0d0fa7428bf3d11b21e15f6783c1',
          
          // Themes
                      'theme-default.css': 'https://dashboard.yekbun.net/public//assets/vendor/css/rtl/theme-default.css?id=a2426eee52a0e09728b9fa06cefe0b4b',
            'theme-default-dark.css':
            'https://dashboard.yekbun.net/public//assets/vendor/css/rtl/theme-default-dark.css?id=ba148a35eca48e183e53bfae0dc8b265',
                      'theme-bordered.css': 'https://dashboard.yekbun.net/public//assets/vendor/css/rtl/theme-bordered.css?id=72085df03150d888ef33d284f592b7cb',
            'theme-bordered-dark.css':
            'https://dashboard.yekbun.net/public//assets/vendor/css/rtl/theme-bordered-dark.css?id=58d9f2f33a506c99a780317a1cbbe6c7',
                      'theme-semi-dark.css': 'https://dashboard.yekbun.net/public//assets/vendor/css/rtl/theme-semi-dark.css?id=b48dc34aaae1323386aed6029989ad09',
            'theme-semi-dark-dark.css':
            'https://dashboard.yekbun.net/public//assets/vendor/css/rtl/theme-semi-dark-dark.css?id=f7e984827d3560a67bcc51a41b10b024',
                  }
        return resolvedPaths[path] || path;
      },
      'controls': ["rtl","style","layoutType","showDropdownOnHover","layoutNavbarFixed","layoutFooterFixed","themes"],
    });
  </script>
  <!-- beautify ignore:end -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');

</script>
</head>

<body>
  

  <!-- Layout Content -->
  <div class="layout-wrapper layout-content-navbar ">
  <div class="layout-container">

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" data-bg-class="bg-menu-theme"
  style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

  <!-- ! Hide app brand if navbar-full -->
  <div class="app-brand demo ">
    <a href="https://dashboard.yekbun.net" class="app-brand-link">
      <span class="app-brand-logo demo">
        <svg width="220" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink">
          <defs>
            <path
              d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
              id="path-1"></path>
            <path
              d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
              id="path-3"></path>
            <path
              d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
              id="path-4"></path>
            <path
              d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
              id="path-5"></path>
          </defs>
          <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
              <g id="Icon" transform="translate(27.000000, 15.000000)">
                <g id="Mask" transform="translate(0.000000, 8.000000)">
                  <mask id="mask-2" fill="white">
                    <use xlink:href="#path-1"></use>
                  </mask>
                  <use fill="#696cff" xlink:href="#path-1"></use>
                  <g id="Path-3" mask="url(#mask-2)">
                    <use fill="#696cff" xlink:href="#path-3"></use>
                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                  </g>
                  <g id="Path-4" mask="url(#mask-2)">
                    <use fill="#696cff" xlink:href="#path-4"></use>
                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                  </g>
                </g>
                <g id="Triangle"
                  transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                  <use fill="#696cff" xlink:href="#path-5"></use>
                  <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                </g>s
              </g>
            </g>
          </g>
        </svg>
      </span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow" style="display: none;"></div>

  <ul class="menu-inner py-1 ps ps--active-y">
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Dashboard</span>
    </li>
    <li class="menu-item ">
      <a href="https://dashboard.yekbun.net" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div>Dashboard</div>
      </a>
    </li>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Customers</span>
    </li>
   
    <li class="menu-item    " style="">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-group"></i>
        <div>Users</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item    ">
          <a href="https://dashboard.yekbun.net/users/standard" class="menu-link">

         
            <div>Standard</div>
          </a>
        </li>
        <li class="menu-item   ">
          <a href="https://dashboard.yekbun.net/users/premium" class="menu-link">
            <div>Premium</div>
          </a>
        </li>
        <li class="menu-item    ">
          <a href="https://dashboard.yekbun.net/users/vip" class="menu-link">
            <div>VIP</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/settings/user-roles/standard" class="menu-link">
                <div>User Roles</div>
              </a>
            </li>
            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/settings/pricing" class="menu-link">
                <div>User Pricing</div>
              </a>
            </li>
            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/settings/reasons" class="menu-link">
                <div>Reasons</div>
              </a>
            </li>
            <!--<li class="menu-item ">-->
            <!--  <a href="https://yekbun.hellodev.site/app/user/storage" class="menu-link">-->
            <!--    <div>Storage</div>-->
            <!--  </a>-->
            <!--</li>-->
            <!--<li class="menu-item ">-->
            <!--  <a href="https://yekbun.hellodev.site/reports/flagged-users" class="menu-link">-->
            <!--    <div>Flagged Users</div>-->
            <!--  </a>-->
            <!--</li>-->
            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/settings/user/prefix" class="menu-link">
                <div>User Prefix</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
     <li class="menu-item ">
      <a href="https://dashboard.yekbun.net/reports/flagged-users" class="menu-link">
        <i class="menu-icon tf-icons bx bx-flag"></i>
        <div>Flagged User</div>
      </a>
    </li>
    <li class="menu-item         ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-file"></i>
        <div>Channels</div>
      </a>
      <ul class="menu-sub">
		  
		   <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/addmanagechannel" class="menu-link">
            <div>Add Manage Channels</div>
          </a>
        </li>
		   <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/channelrequest?view=new_request" class="menu-link">
            <div>Channel Request</div>
          </a>
        </li>
		  <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/managechannel?view=new_request" class="menu-link">
            <div>Manage Channel</div>
          </a>
        </li>
		    <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/channeladmin" class="menu-link">
            <div>Channel Admin</div>
          </a>
        </li>
       
       
      
      
        <li class="menu-item    ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/channels/reason" class="menu-link">
                <div>Reasons</div>
              </a>
            </li>
            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/channels/prefix" class="menu-link">
                <div>Prefix</div>
              </a>
            </li>
            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/channels/policy_terms" class="menu-link">
                <div>Policy and Terms</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
        <li class="menu-item ">
      <a href="https://dashboard.yekbun.net/flaggedfanpage" class="menu-link">
        <i class="menu-icon tf-icons bx bx-flag"></i>
        <div>Flagged Channels</div>
      </a>
    </li>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">E-Commerce</span>
    </li>
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-store"></i>
        <div>Online Shop</div>
      </a>
      <ul class="menu-sub ">
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/onlineshop/addonlineshop?view=new_request" class="menu-link">
            <div>Add Online Shop</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/onlineshop/newshop?view=new_request" class="menu-link">
            <div>New Shop Request</div>
          </a>


        </li>



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/onlineshop/manageshop?view=new_request" class="menu-link">
            <div>Manage Online Shops</div>
          </a>


        </li>



        <li class="menu-item  ">
          <a href="https://dashboard.yekbun.net/onlineshop/manageitem" class="menu-link">
            <div>Manage Items</div>
          </a>


        </li>



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/onlineshop/commisionsetting" class="menu-link">
            <div>Commission Setting</div>
          </a>


        </li>



        <li class="menu-item  ">
          <a href="https://dashboard.yekbun.net/onlineshop/taxsetting" class="menu-link">
            <div>Tax Settings</div>
          </a>


        </li>



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/onlineshop/shipping" class="menu-link">
            <div>Shipping</div>
          </a>


        </li>



        <!--<li class="menu-item ">-->
        <!--  <a href="https://dashboard.yekbun.net/onlineshop/currency" class="menu-link">-->
        <!--    <div>Currency</div>-->
        <!--  </a>-->


        <!--</li>-->



        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link">
            <div>Payment Method</div>
          </a>


        </li>



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/onlineshop/additionalservices" class="menu-link">
            <div>Additional Services</div>
          </a>


        </li>



        <li class="menu-item   ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>


          <ul class="menu-sub">



            <li class="menu-item  ">
              <a href="https://dashboard.yekbun.net/onlineshop/setting/reason" class="menu-link">
                <div>Reasons</div>
              </a>


            </li>



            <li class="menu-item  ">
              <a href="https://dashboard.yekbun.net/onlineshop/setting/prefix" class="menu-link">
                <div>Prefix</div>
              </a>


            </li>



            <li class="menu-item  ">
              <a href="https://dashboard.yekbun.net/onlineshop/setting/policy_terms" class="menu-link">
                <div>Policy and Terms</div>
              </a>


            </li>
          </ul>
        </li>
      </ul>
    </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-store"></i>
        <div>Bazar</div>
      </a>


      <ul class="menu-sub">



        <li class="menu-item  ">
          <a href="https://dashboard.yekbun.net/bazars/manage_categories" class="menu-link">
            <div>Manage - Category</div>
          </a>


        </li>



        <li class="menu-item  ">
          <a href="https://dashboard.yekbun.net/bazars/manage_sale?view=new_request" class="menu-link">
            <div>Manage for Sale Items</div>
          </a>


        </li>



        <li class="menu-item  ">
          <a href="https://dashboard.yekbun.net/bazars/manage_search?view=new_request" class="menu-link">
            <div>Manage Search Items</div>
          </a>


        </li>



        <li class="menu-item  ">
          <a href="https://dashboard.yekbun.net/bazars/pricing_plans" class="menu-link">
            <div>Pricing Plan</div>
          </a>



        </li>



        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>


          <ul class="menu-sub">



            <li class="menu-item  ">
              <a href="https://dashboard.yekbun.net/bazars/setting/reason" class="menu-link">
                <div>Reasons</div>
              </a>


            </li>



            <li class="menu-item  ">
              <a href="https://dashboard.yekbun.net/bazars/setting/prefix" class="menu-link">
                <div>Prefix</div>
              </a>


            </li>



            <li class="menu-item  ">
              <a href="https://dashboard.yekbun.net/bazars/setting/policy_terms" class="menu-link">
                <div>Policy and Terms</div>
              </a>


            </li>
          </ul>
        </li>
      </ul>
    </li>








    <li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-intersect"></i>
        <div>Service Portal</div>
      </a>


      <ul class="menu-sub">



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/serviceportal/manage_categories" class="menu-link">
            <div>Add/Manage Categories</div>
          </a>


        </li>



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/serviceportal/manage_service?view=new_request" class="menu-link">
            <div>Manage Service Offers</div>
          </a>


        </li>



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/serviceportal/manage_search?view=new_request" class="menu-link">
            <div>Manage Search Services</div>
          </a>


        </li>

 <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/serviceportal/addpricing" class="menu-link">
            <div>Add Pricing</div>
          </a>


        </li>



        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>


          <ul class="menu-sub">



            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/serviceportal/reason" class="menu-link">
                <div>Reasons</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/serviceportal/prefix" class="menu-link">
                <div>Prefix</div>
              </a>


            </li>



            <li class="menu-item  ">
              <a href="https://dashboard.yekbun.net/serviceportal/policy_terms" class="menu-link">
                <div>Policy and Terms</div>
              </a>


            </li>
          </ul>
        </li>
      </ul>
    </li>




    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">User adds</span>
    </li>









    <li class="menu-item         ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-book-content"></i>
        <div>Feeds</div>
      </a>


      <ul class="menu-sub">

        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/manage-user-feeds" class="menu-link">
            <div>Manage User Feeds</div>
          </a>


        </li>



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/manage-fanpage-feeds" class="menu-link">
            <div>Manage Fanpage Feed</div>
          </a>


        </li>



        <li class="menu-item      ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>


          <ul class="menu-sub">



            <li class="menu-item ">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <div>Post Filter</div>
              </a>


              <ul class="menu-sub">



                <li class="menu-item ">
                  <a href="javascript:void(0)" class="menu-link">
                    <div>Image Filter</div>
                  </a>


                </li>



                <li class="menu-item ">
                  <a href="javascript:void(0)" class="menu-link">
                    <div>Video Filter</div>
                  </a>


                </li>



                <li class="menu-item ">
                  <a href="javascript:void(0)" class="menu-link">
                    <div>Keywords Filter</div>
                  </a>


                </li>
              </ul>
            </li>



            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/feed-background" class="menu-link">
                <div>Feed Background</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/feed-emoji" class="menu-link">
                <div>Add Emojis</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/feeds-reasons" class="menu-link">
                <div>Reasons</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/feeds-policy_and_terms" class="menu-link">
                <div>Policy and Terms</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/feeds-prefix" class="menu-link">
                <div>Prefix</div>
              </a>


            </li>
          </ul>
        </li>
      </ul>
    </li>








    <li class="menu-item       ">
        
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-video"></i>
        <div>Videos</div>
      </a>


      <ul class="menu-sub">



        <li class="menu-item  ">
          <a href="https://dashboard.yekbun.net/manage_video" class="menu-link">
            <div>Manage Videos</div>
          </a>


        </li>
        
         



        <li class="menu-item  ">
          <a href="https://dashboard.yekbun.net/video_request" class="menu-link">
            <div>Reported Videos</div>
          </a>


        </li>



        <li class="menu-item  ">
          <a href="javascript:void(0)" class="menu-link">
            <div>Max. Upload Page</div>
          </a>


        </li>



        <!--<li class="menu-item ">-->
        <!--  <a href="javascript:void(0)" class="menu-link">-->
        <!--    <div>Video Type Page</div>-->
        <!--  </a>-->


        <!--</li>-->



        <li class="menu-item   ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>


          <ul class="menu-sub">



            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/reason" class="menu-link">
                <div>Reasons</div>
              </a>


            </li>



            <li class="menu-item  ">
              <a href="https://dashboard.yekbun.net/prefix" class="menu-link">
                <div>Prefix</div>
              </a>


            </li>



            <li class="menu-item   ">
              <a href="https://dashboard.yekbun.net/policyterms" class="menu-link">
                <div>Policy and Terms</div>
              </a>


            </li>



            <!--<li class="menu-item ">-->
            <!--  <a href="javascript:void(0)" class="menu-link">-->
            <!--    <div>Remove Maintaince</div>-->
            <!--  </a>-->


            <!--</li>-->
          </ul>
        </li>
      </ul>
    </li>








    <li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-calendar-event"></i>
        <div>Events</div>
      </a>


      <ul class="menu-sub">



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/events?view=new_request" class="menu-link">
            <div>Add a Event</div>
          </a>


        </li>



        <!--<li class="menu-item ">-->
        <!--  <a href="https://yekbun.hellodev.site/events/requests" class="menu-link">-->
        <!--    <div>Event Requests</div>-->
        <!--  </a>-->


        <!--</li>-->



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/events/manage?view=new_request" class="menu-link">
            <div>Manage Event</div>
          </a>


        </li>



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/events/tickets" class="menu-link">
            <div>Event Tickets</div>
          </a>


        </li>



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/ticket-service" class="menu-link">
            <div>Event Services</div>
          </a>


        </li>


        <!--<li class="menu-item ">-->
        <!--  <a href="https://yekbun.hellodev.site/events/ex_property_listing" class="menu-link">-->
        <!--    <div>Property Listing</div>-->
        <!--  </a>-->


        <!--</li>-->



        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>


          <ul class="menu-sub">



            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/events/reasons" class="menu-link">
                <div>Reasons</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/events/policy_and_terms" class="menu-link">
                <div>Policy and Terms</div>
              </a>


            </li>
          </ul>
        </li>
      </ul>
    </li>








    <li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-credit-card"></i>
        <div>Wishes &amp; Thanks</div>
      </a>


      <ul class="menu-sub">

<!--first add-->
    <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Greetings</div>
          </a>


          <ul class="menu-sub">



  <li class="menu-item ">
     
          <a href="https://dashboard.yekbun.net/wishes/manage_greeting?view=new_request " class="menu-link">
                <div>Manage Greeting</div>
              </a>


            </li>


  <li class="menu-item ">
     
          <a href="https://dashboard.yekbun.net/wishes/upload_cardtwo?view=new_request " class="menu-link">
                <div>Upload Cards</div>
              </a>


            </li>
            
          
  <!--<li class="menu-item ">-->
     
  <!--        <a href="https://dashboard.yekbun.net/wishes/add_greeting?view=new_request " class="menu-link">-->
  <!--              <div>Add Greeting</div>-->
  <!--            </a>-->


  <!--          </li>-->

          



         
          </ul>
        </li>

<!--first add-->



<!--sec add-->
    <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Prays</div>
          </a>


          <ul class="menu-sub">


    <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/wishes/manage_pray?view=new_request" class="menu-link">
                <div>Manage Prays</div>
              </a>
            </li>

           <li class="menu-item ">
     
          <a href="https://dashboard.yekbun.net/wishes/upload_card?view=new_request " class="menu-link">
                <div>Upload Cards</div>
              </a>


            </li>

          
 <li class="menu-item ">
     
          <a href="https://dashboard.yekbun.net/wishes/add_prays?view=new_request " class="menu-link">
                <div>Add Prays</div>
              </a>


            </li>


         
          </ul>
        </li>

<!--sec add-->





<!--thi add-->
    <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Sympathy</div>
          </a>


          <ul class="menu-sub">


  <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/wishes/manage_sympathy?view=new_request" class="menu-link">
                <div>Manage Sympathy</div>
              </a>


            </li>

           <li class="menu-item ">
     
          <a href="https://dashboard.yekbun.net/wishes/upload_cardone?view=new_request " class="menu-link">
                <div>Upload Cards</div>
              </a>


            </li>

          
    <li class="menu-item ">
     
          <a href="https://dashboard.yekbun.net/wishes/add_verses?view=new_request " class="menu-link">
                <div>Add verses</div>
              </a>


            </li>


         
          </ul>
        </li>

<!--thi add-->


        <!--<li class="menu-item ">-->
        <!--  <a href="javascript:void(0)" class="menu-link">-->
        <!--    <div>Add/ Manage Category</div>-->
        <!--  </a>-->


        <!--</li>-->



        <!--<li class="menu-item ">-->
        <!--  <a href="javascript:void(0)" class="menu-link">-->
        <!--    <div>Manage Ads</div>-->
        <!--  </a>-->


        </li>



        <!--<li class="menu-item ">-->
        <!--  <a href="javascript:void(0)" class="menu-link">-->
        <!--    <div>Upload Banner</div>-->
        <!--  </a>-->


        <!--</li>-->



        <!--<li class="menu-item ">-->
        <!--  <a href="javascript:void(0)" class="menu-link">-->
        <!--    <div>Upload Songs</div>-->
        <!--  </a>-->


        <!--</li>-->



        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Setting</div>
          </a>


          <ul class="menu-sub">



             <li class="menu-item ">
        <a href="https://dashboard.yekbun.net/wishes/setting/pricing" class="menu-link">
                <div>Pricing</div>
              </a>


            </li>

            <li class="menu-item  ">
              <a href="https://dashboard.yekbun.net/wishes/setting/reasons" class="menu-link">
                <div>Reasons</div>
              </a>


            </li>

            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/wishes/setting/policy_terms" class="menu-link">
                <div>Policy and Terms</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/wishes/setting/prefix" class="menu-link">
                <div>Prefix</div>
              </a>


            </li>
          </ul>
        </li>
      </ul>
    </li>








    <li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bxs-videos"></i>
        <div>Stories</div>
      </a>


      <ul class="menu-sub">



        <li class="menu-item  ">
          <a href="https://dashboard.yekbun.net/story/ManageStories" class="menu-link">
            <div>Manage Stories</div>
          </a>


        </li>



         <li class="menu-item  ">
          <a href="https://dashboard.yekbun.net/story/ReportedStories" class="menu-link">
            <div>Reported Stories</div>
          </a>


        </li>



        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>


          <ul class="menu-sub">



         



            <li class="menu-item ">
              <a href="javascript:void(0)" class="menu-link">
                <div>Add Songs</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="javascript:void(0)" class="menu-link">
                <div>Add Effects</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="javascript:void(0)" class="menu-link">
                <div>Add Fonts</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="javascript:void(0)" class="menu-link">
                <div>Add Font Colors</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="javascript:void(0)" class="menu-link">
                <div>Stories Time</div>
              </a>


            </li>

             <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/settings/stories/reasons" class="menu-link">
                <div>Reasons</div>
              </a>


            </li>

            <li class="menu-item  ">
              <a href="https://dashboard.yekbun.net/settings/stories/prefix" class="menu-link">
                <div>Prefix</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/settings/stories/policy_and_terms" class="menu-link">
                <div>Policy and Terms</div>
              </a>


            </li>
          </ul>
        </li>
      </ul>
    </li>




    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Content Adds</span>
    </li>









    <li class="menu-item       ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-music"></i>
        <div>Music</div>
      </a>


      <ul class="menu-sub">



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/music" class="menu-link">
            <div>Add Music</div>
          </a>


        </li>



        <li class="menu-item  ">
          <a href="https://dashboard.yekbun.net/artist" class="menu-link">
            <div>Add Artist</div>
          </a>


        </li>



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/album" class="menu-link">
            <div>Add Album</div>
          </a>


        </li>



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/video-clips" class="menu-link">
            <div>Add Video Clips</div>
          </a>


        </li>



        <li class="menu-item  ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>


          <ul class="menu-sub">



            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/setting/music/pricing" class="menu-link">
                <div>Pricing</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/musics/policy_and_terms" class="menu-link">
                <div>Policy and Terms</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/setting/music/prefix" class="menu-link">
                <div>Prefix</div>
              </a>


            </li>
            
            
            
            
              <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/setting/music/country" class="menu-link">
                <div>Country</div>
              </a>

            </li>
          </ul>
        </li>
      </ul>
    </li>








    <li class="menu-item   ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-sort"></i>
        <div>Voting</div>
      </a>


      <ul class="menu-sub">



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/vote-category" class="menu-link">
            <div>Add Category</div>
          </a>


        </li>



        <li class="menu-item  ">
          <a href="https://dashboard.yekbun.net/vote" class="menu-link">
            <div>Add Manage Vote</div>
          </a>


        </li>



        <li class="menu-item  ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>


          <ul class="menu-sub">



            <li class="menu-item ">
              <a href="javascript:void(0)" class="menu-link">
                <div>Add Notification</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="javascript:void(0)" class="menu-link">
                <div>Setting</div>
              </a>


            </li>



            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/settings/voting/prefix" class="menu-link">
                <div>Prefix</div>
              </a>


            </li>
          </ul>
        </li>
      </ul>
    </li>








    <li class="menu-item   ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-history"></i>
        <div>History</div>
      </a>


      <ul class="menu-sub">



        <li class="menu-item  ">
          <a href="https://dashboard.yekbun.net/history-category" class="menu-link">
            <div>Add Category</div>
          </a>


        </li>



        <li class="menu-item   ">
          <a href="https://dashboard.yekbun.net/history" class="menu-link">
            <div>Add Manage History</div>
          </a>


        </li>



        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>


          <ul class="menu-sub">



            <li class="menu-item  ">
              <a href="https://dashboard.yekbun.net/settings/history/prefix" class="menu-link">
                <div>Prefix</div>
              </a>


            </li>
          </ul>
        </li>
      </ul>
    </li>








    <li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-donate-heart"></i>
        <div>Donation</div>
      </a>


      <ul class="menu-sub">



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/donations" class="menu-link">
            <div>Add Manage Donation</div>
          </a>


        </li>



        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/donations/organizations" class="menu-link">
            <div>Add Manage Organization</div>
          </a>


        </li>



        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>


          <ul class="menu-sub">



            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/settings/donation/prefix" class="menu-link">
                <div>Prefix</div>
              </a>


            </li>
          </ul>
        </li>
      </ul>
    </li>








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-bot"></i>
        <div>Avatar</div>
      </a>


      <ul class="menu-sub">



        <li class="menu-item ">
          <a href="{{url('avatars')}}" class="menu-link">
            <div>Add/Manage Avatars</div>
          </a>


        </li>



        <li class="menu-item ">
          <a href="{{url('manage-avatars')}}" class="menu-link">
            <div>Manage AI Posts</div>
          </a>


        </li>



      </ul>
    </li>




    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Entertainment</span>
    </li>









    <!--<li class="menu-item  ">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--    <i class="menu-icon tf-icons bx bx-video-recording"></i>-->
    <!--    <div>Live Stream</div>-->
    <!--  </a>-->


    <!--  <ul class="menu-sub">-->



    <!--    <li class="menu-item ">-->
    <!--      <a href="https://dashboard.yekbun.net/live/request_channel?view=new_request" class="menu-link">-->
    <!--        <div>Manage Channel request</div>-->
    <!--      </a>-->


    <!--    </li>-->



    <!--    <li class="menu-item ">-->
    <!--      <a href="https://dashboard.yekbun.net/live/manage_channel?view=new_request" class="menu-link">-->
    <!--        <div>Manage Channels</div>-->
    <!--      </a>-->


    <!--    </li>-->



    <!--    <li class="menu-item  ">-->
    <!--      <a href="https://dashboard.yekbun.net/live/manage_live_stream" class="menu-link">-->
    <!--        <div>Manage Live Streams</div>-->
    <!--      </a>-->


    <!--    </li>-->



    <!--    <li class="menu-item ">-->
    <!--      <a href="https://dashboard.yekbun.net/live/report_live_stream" class="menu-link">-->
    <!--        <div>Reported Live Streams</div>-->
    <!--      </a>-->


    <!--    </li>-->



    <!--    <li class="menu-item ">-->
    <!--      <a href="javascript:void(0)" class="menu-link menu-toggle">-->
    <!--        <div>Settings</div>-->
    <!--      </a>-->


    <!--      <ul class="menu-sub">-->



    <!--        <li class="menu-item ">-->
    <!--          <a href="https://dashboard.yekbun.net/setting/live/streaming_duration" class="menu-link">-->
    <!--            <div>Streaming Durations</div>-->
    <!--          </a>-->


    <!--        </li>-->



    <!--        <li class="menu-item ">-->
    <!--          <a href="https://dashboard.yekbun.net/setting/live/reasons" class="menu-link">-->
    <!--            <div>Reasons</div>-->
    <!--          </a>-->


    <!--        </li>-->



    <!--        <li class="menu-item ">-->
    <!--          <a href="https://dashboard.yekbun.net/setting/live/prefix" class="menu-link">-->
    <!--            <div>Prefix</div>-->
    <!--          </a>-->


    <!--        </li>-->



    <!--        <li class="menu-item ">-->
    <!--          <a href="https://dashboard.yekbun.net/setting/live/policy_and_terms" class="menu-link">-->
    <!--            <div>Policy and Terms</div>-->
    <!--          </a>-->


    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->








    <!--<li class="menu-item ">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--    <i class="menu-icon tf-icons bx bx-message-dots"></i>-->
    <!--    <div>Chat System</div>-->
    <!--  </a>-->


    <!--  <ul class="menu-sub">-->



    <!--    <li class="menu-item ">-->
    <!--      <a href="https://yekbun.hellodev.site/settings/chats/manage-group" class="menu-link">-->
    <!--        <div>Add/Manage Groups</div>-->
    <!--      </a>-->


    <!--    </li>-->



    <!--    <li class="menu-item ">-->
    <!--      <a href="javascript:void(0)" class="menu-link menu-toggle">-->
    <!--        <div>Settings</div>-->
    <!--      </a>-->


    <!--      <ul class="menu-sub">-->



    <!--        <li class="menu-item ">-->
    <!--          <a href="javascript:void(0)" class="menu-link">-->
    <!--            <div>Upload Ringtone</div>-->
    <!--          </a>-->


    <!--        </li>-->



    <!--        <li class="menu-item ">-->
    <!--          <a href="javascript:void(0)" class="menu-link">-->
    <!--            <div>Text Settings</div>-->
    <!--          </a>-->


    <!--        </li>-->



    <!--        <li class="menu-item ">-->
    <!--          <a href="javascript:void(0)" class="menu-link">-->
    <!--            <div>Keywords</div>-->
    <!--          </a>-->


    <!--        </li>-->



    <!--        <li class="menu-item ">-->
    <!--          <a href="https://yekbun.hellodev.site/settings/chats/permission" class="menu-link">-->
    <!--            <div>Permission</div>-->
    <!--          </a>-->


    <!--        </li>-->



    <!--        <li class="menu-item ">-->
    <!--          <a href="https://yekbun.hellodev.site/settings/chats/reasons" class="menu-link">-->
    <!--            <div>Reasons</div>-->
    <!--          </a>-->


    <!--        </li>-->



    <!--        <li class="menu-item ">-->
    <!--          <a href="https://yekbun.hellodev.site/settings/chats/prefix" class="menu-link">-->
    <!--            <div>Prefix</div>-->
    <!--          </a>-->


    <!--        </li>-->



    <!--        <li class="menu-item ">-->
    <!--          <a href="https://yekbun.hellodev.site/settings/chats/policy_and_terms" class="menu-link">-->
    <!--            <div>Policy and Terms</div>-->
    <!--          </a>-->


    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->








    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-movie-play"></i>
        <div>Movies</div>
      </a>


      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/movie/upload-movies" class="menu-link">
            <div>Add/Manage Movies</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/movie/setting/prefix" class="menu-link">
                <div>Prefix</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-movie-play"></i>
        <div>Series</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/series/series" class="menu-link">
            <div>Add/Manage Series</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/series/setting/prefix" class="menu-link">
                <div>Prefix</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <!--<li class="menu-item ">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--    <i class="menu-icon tf-icons bx bx-devices"></i>-->
    <!--    <div>Zarok App</div>-->
    <!--  </a>-->
    <!--  <ul class="menu-sub">-->
    <!--    <li class="menu-item ">-->
    <!--      <a href="javascript:void(0)" class="menu-link">-->
    <!--        <div>Add Category</div>-->
    <!--      </a>-->

    <!--    </li>-->
    <!--    <li class="menu-item ">-->
    <!--      <a href="javascript:void(0)" class="menu-link">-->
    <!--        <div>Add Manage Videos</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item ">-->
    <!--      <a href="javascript:void(0)" class="menu-link menu-toggle">-->
    <!--        <div>Settings</div>-->
    <!--      </a>-->
    <!--      <ul class="menu-sub">-->
    <!--        <li class="menu-item ">-->
    <!--          <a href="javascript:void(0)" class="menu-link">-->
    <!--            <div>Prefix</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--        <li class="menu-item ">-->
    <!--          <a href="javascript:void(0)" class="menu-link">-->
    <!--            <div>Policy and Terms</div>-->
    <!--          </a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->
    <!--<li class="menu-item ">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--    <i class="menu-icon tf-icons bx bx-tv"></i>-->
    <!--    <div>Yekbun Tv</div>-->
    <!--  </a>-->
    <!--  <ul class="menu-sub">-->
    <!--    <li class="menu-item ">-->
    <!--      <a href="javascript:void(0)" class="menu-link">-->
    <!--        <div>View Users</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item ">-->
    <!--      <a href="javascript:void(0)" class="menu-link menu-toggle">-->
    <!--        <div>Settings</div>-->
    <!--      </a>-->
    <!--      <ul class="menu-sub">-->
    <!--        <li class="menu-item ">-->
    <!--          <a href="javascript:void(0)" class="menu-link menu-toggle">-->
    <!--            <div>Maintainance</div>-->
    <!--          </a>-->
    <!--          <ul class="menu-sub">-->
    <!--            <li class="menu-item ">-->
    <!--              <a href="javascript:void(0)" class="menu-link menu-toggle">-->
    <!--                <div>Kids Area</div>-->
    <!--              </a>-->
    <!--              <ul class="menu-sub">-->
    <!--                <li class="menu-item ">-->
    <!--                  <a href="javascript:void(0)" class="menu-link">-->
    <!--                    <div>Category</div>-->
    <!--                  </a>-->
    <!--                </li>-->
    <!--              </ul>-->
    <!--            </li>-->
    <!--            <li class="menu-item ">-->
    <!--              <a href="javascript:void(0)" class="menu-link menu-toggle">-->
    <!--                <div>Adult Area</div>-->
    <!--              </a>-->
    <!--              <ul class="menu-sub">-->
    <!--                <li class="menu-item ">-->
    <!--                  <a href="javascript:void(0)" class="menu-link">-->
    <!--                    <div>Category</div>-->
    <!--                  </a>-->
    <!--                </li>-->
    <!--              </ul>-->
    <!--            </li>-->
    <!--          </ul>-->
    <!--        </li>-->
    <!--        <li class="menu-item ">-->
    <!--          <a href="javascript:void(0)" class="menu-link menu-toggle">-->
    <!--            <div>Permission</div>-->
    <!--          </a>-->
    <!--          <ul class="menu-sub">-->
    <!--            <li class="menu-item ">-->
    <!--              <a href="javascript:void(0)" class="menu-link">-->
    <!--                <div>Comments</div>-->
    <!--              </a>-->
    <!--            </li>-->
    <!--            <li class="menu-item ">-->
    <!--              <a href="javascript:void(0)" class="menu-link">-->
    <!--                <div>Add to Playlist</div>-->
    <!--              </a>-->
    <!--            </li>-->
    <!--            <li class="menu-item ">-->
    <!--              <a href="javascript:void(0)" class="menu-link">-->
    <!--                <div>View Later</div>-->
    <!--              </a>-->
    <!--            </li>-->
    <!--            <li class="menu-item ">-->
    <!--              <a href="javascript:void(0)" class="menu-link">-->
    <!--                <div>Report</div>-->
    <!--              </a>-->
    <!--            </li>-->
    <!--            <li class="menu-item ">-->
    <!--              <a href="javascript:void(0)" class="menu-link">-->
    <!--                <div>Move to Playlist</div>-->
    <!--              </a>-->
    <!--            </li>-->
    <!--            <li class="menu-item ">-->
    <!--              <a href="javascript:void(0)" class="menu-link">-->
    <!--                <div>Create Playlist</div>-->
    <!--              </a>-->
    <!--            </li>-->
    <!--          </ul>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--     <li class="menu-item ">-->
    <!--      <a href="javascript:void(0)" class="menu-link">-->
    <!--        <div>Policy and Terms</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item ">-->
    <!--      <a href="javascript:void(0)" class="menu-link">-->
    <!--        <div>Payment Method</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--    <li class="menu-item ">-->
    <!--      <a href="javascript:void(0)" class="menu-link">-->
    <!--        <div>Languages</div>-->
    <!--      </a>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</li>-->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Bank &amp; Payments</span>
    </li>
    <li class="menu-item ">
      <a href="https://dashboard.yekbun.net/currency" class="menu-link">
        <i class="menu-icon tf-icons bx bx-devices"></i>
        <div>Currency</div>
      </a>


    </li>
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-money"></i>
        <div>Income</div>
      </a>
      <ul class="menu-sub">
       <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/app/user-income" class="menu-link">
            <div>User Income</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/app/online-shop-income" class="menu-link">
            <div>Online Shop Income</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/app/service-income" class="menu-link">
            <div>Service Income</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/app/events-income" class="menu-link">
            <div>Events Income</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/app/music-income" class="menu-link">
            <div>Music Income</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/app/video-income" class="menu-link">
            <div>Videos Income</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/app/donation-income" class="menu-link">
            <div>Donation Income</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/app/total-income" class="menu-link">
            <div>Total Income</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-file"></i>
        <div>Invoice</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/app/invoice/list" class="menu-link">
            <div>User Invoice</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/app/invoice/list" class="menu-link">
            <div>FanPage Invoice</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/app/invoice/list" class="menu-link">
            <div>Bazar Invoice</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/app/invoice/list" class="menu-link">
            <div>OnlineShop Invoice</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/app/invoice/list" class="menu-link">
            <div>Ads Service Invoice</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/app/invoice/list" class="menu-link">
            <div>Donation Invoice</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Setting</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/app/invoice/edit" class="menu-link">
                <div>Edit Invoice</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-credit-card"></i>
        <div>Payments</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/settings/payment-offices" class="menu-link">
            <div>Payment Office</div>
          </a>
        </li>
        <li class="menu-item  ">
          <a href="https://dashboard.yekbun.net/settings/bank-transfer" class="menu-link">
            <div>Add Manage Bank Transfer</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/settings/paypal-stripe" class="menu-link">
            <div>Add Manage Paypal Transfer</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/settings/payment-methods" class="menu-link">
            <div>Add Manage DebitCard</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">App Settings</span>
    </li>
    <li class="menu-item ">
      <a href="https://dashboard.yekbun.net/app/portal-notification" class="menu-link">
        <i class='menu-icon tf-icons bx bx-notification'></i>
        <div>Portal Notifications</div>
      </a>
    </li>
    <li class="menu-item ">
      <a href="https://dashboard.yekbun.net/policy_and_terms" class="menu-link">
        <i class="menu-icon tf-icons bx bx-list-ul"></i>
        <div>App Policy</div>
      </a>
    </li>
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-map"></i>
        <div>Locations</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/settings/yekbun-location/countries" class="menu-link">
            <div>Add Country</div>
          </a>
        </li>
        <li class="menu-item  ">
          <a href="https://dashboard.yekbun.net/settings/provinces" class="menu-link">
            <div>Add Province</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/settings/cities" class="menu-link">
            <div>Add City and Zipcode</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item ">
      <a href="https://dashboard.yekbun.net/settings/countries" class="menu-link">
        <i class="menu-icon tf-icons bx bx-flag"></i>
        <div>Add Country</div>
      </a>
    </li>
    <li class="menu-item  ">
      <a href="https://dashboard.yekbun.net/app/popup" class="menu-link">
        <i class="menu-icon tf-icons bx bx-message-square-add"></i>
        <div>Add Popup</div>
      </a>
    </li>
    <li class="menu-item ">
      <a href="https://dashboard.yekbun.net/settings/app-setting/appinfo" class="menu-link">
        <i class="menu-icon tf-icons bx bx-info-square"></i>
        <div>App Info</div>
      </a>
    </li>
    <li class="menu-item ">
      <a href="https://dashboard.yekbun.net/settings/app-setting/ringtone" class="menu-link">
        <i class="menu-icon tf-icons bx bx-music"></i>
        <div>Add Ringtone</div>
      </a>
    </li>
    <!--<li class="menu-item ">-->
    <!--  <a href="javascript:void(0);" class="menu-link">-->
    <!--    <i class="menu-icon tf-icons bx bx-cog"></i>-->
    <!--    <div>Ringtone</div>-->
    <!--  </a>-->
    <!--</li>-->
    <li class="menu-item ">
      <a href="https://dashboard.yekbun.net/settings/app-setting/maintainance" class="menu-link">
        <i class="menu-icon tf-icons bx bx-wrench"></i>
        <div>Maintainance</div>
      </a>
    </li>
    <!--add-->
    
    
    <!--<li class="menu-item active open" style="">-->
    <!--  <a href="javascript:void(0);" class="menu-link menu-toggle">-->
    <!--            <i class="menu-icon tf-icons bx bx-spreadsheet"></i>-->
    <!--            <div class="text-truncate">Wizard Examples</div>-->
    <!--          </a>-->

      
    <!--        <ul class="menu-sub">-->
      
    
    <!--   <li class="menu-item ">-->
    <!--          <a href="https://dashboard.yekbun.net/setting/live/reasons" class="menu-link">-->
    <!--                <div>Checkout</div>-->
    <!--    </a>-->

        
    <!--          </li>-->
    
    
    
    <!--  <li class="menu-item">-->
    <!--    <a href="https://dashboard.yekbun.net/wizard-ex-checkout" class="menu-link">-->
    <!--                <div>Property Listing</div>-->
    <!--    </a>-->

        
    <!--          </li>-->
    
    
    
    <!--  <li class="menu-item ">-->
    <!--    <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/wizard/ex-create-deal" class="menu-link">-->
    <!--                <div>Create Deal</div>-->
    <!--    </a>-->

        
    <!--          </li>-->
    <!--  </ul>-->
    <!--      </li>-->
    
    
    <!--add-->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">System Settings</span>
    </li>
    <li class="menu-item ">
      <a href="https://dashboard.yekbun.net/logs" class="menu-link">
        <i class="menu-icon tf-icons bx bx-file"></i>
        <div>System Log</div>
      </a>
    </li>
    <li class="menu-item ">
      <a href="https://dashboard.yekbun.net/language" class="menu-link">
        <i class="menu-icon tf-icons bx bx-transfer"></i>
        <div>Translation</div>
      </a>
    </li>
    <li class="menu-item ">
      <a href="https://dashboard.yekbun.net/app/ftp/list" class="menu-link">
        <i class="menu-icon tf-icons bx bx-network-chart"></i>
        <div>FTP Settings</div>
      </a>
    </li>
    
    <li class="menu-item  ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-cloud-upload"></i>
        <div>Backup Section</div>
      </a>
      <ul class="menu-sub " >
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link">
            <div>Add/Manage Backup Plan</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/backup_setting" class="menu-link">
            <div>Backup Setting</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-file"></i>
        <div>Team &amp; Role</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/settings/team/members" class="menu-link">
            <div>Add/Manage Team</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="https://dashboard.yekbun.net/settings/team/roles" class="menu-link">
            <div>Add/Manage Roles</div>
          </a>
        </li>
        <li class="menu-item  ">
          <a href="https://dashboard.yekbun.net/app/task/list" class="menu-link">
            <div>Add Tasks</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div>Settings</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item ">
              <a href="https://dashboard.yekbun.net/team/policy_and_terms" class="menu-link">
                <div>Policy and Terms</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    
        <li class="menu-item ">
      <a href="https://dashboard.yekbun.net/department" class="menu-link">
        <i class="menu-icon tf-icons bx bx-wrench"></i>
        <div>Department</div>
      </a>
    </li>
    
    <!--  <li class="menu-item ">-->
    <!--  <a href="https://dashboard.yekbun.net" class="menu-link">-->
    <!--    <i class="menu-icon tf-icons bx bx-devices"></i>-->
    <!--    <div>Backup Setting</div>-->
    <!--  </a>-->
    <!--</li>-->
    
      <li class="menu-item ">
      <a href="https://dashboard.yekbun.net/storage_setting" class="menu-link">
        <i class="menu-icon tf-icons bx bx-devices"></i>
        <div>Storage Setting</div>
      </a>
    </li>
    
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
      <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 298px; right: 4px;">
      <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 37px;"></div>
    </div>
  </ul>

</aside>    

    <!-- Layout page -->
    <div class="layout-page">
      <!-- BEGIN: Navbar-->
            <!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar" style="box-shadow: none; background: transparent !important;">
        
            <!--  Brand demo (display only for navbar-full and hide on below xl) -->
            
            <!-- ! Not required for layout-without-menu -->
                        <div
                class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-sm"></i>
                </a>
            </div>
            
            <div class="navbar-nav-right d-flex align-items-center row" id="navbar-collapse">

                                <div class="col-7 card mb-0 px-3 search-wrap d-flex justify-content-center" style="height:54px;">
                    <!-- Search -->
                    <div class="navbar-nav">
                        <div class="nav-item navbar-search-wrapper mb-0">
                            <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                                <i class="bx bx-search bx-sm"></i>
                                <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Search -->
                <div class="col-1 mb-0"></div>
                                <div class="col-4 card mb-0 d-flex justify-content-between align-items-center">
                    <ul class="navbar-nav flex-row align-items-center justify-content-around" style="width: 100%;">
                                                <!-- Language -->
                        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class="bx bx-globe bx-sm"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item">
                                        <span class="align-middle">English</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <span class="align-middle">French</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <span class="align-middle">Arabic</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <span class="align-middle">German</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="nav-item me-2 me-xl-0">
                            <a class="nav-item nav-link" href="https://dashboard.yekbun.net/app/user/notes?type=all-news">
                                <img src="https://dashboard.yekbun.net/public//assets/svg/icons/sticky-notes.svg" width="25" alt="">
                            </a>
                        </li>

                        
                        
                        
                         -->

                        <!--/ Language -->
                        
                        
                        <!-- Quick links  -->
                        <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class='bx bx-grid-alt bx-sm'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end py-0">
                                <div class="dropdown-menu-header border-bottom">
                                    <div class="dropdown-header d-flex align-items-center py-3">
                                        <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                                        <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i
                                                class="bx bx-sm bx-plus-circle"></i></a>
                                    </div>
                                </div>
                                <div class="dropdown-shortcuts-list scrollable-container">
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                                            <span
                                                class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                <i class="bx bx-calendar fs-4"></i>
                                            </span>
                                            <a href="https://dashboard.yekbun.net/app/calendar" class="stretched-link">Calendar</a>
                                            <small class="text-muted mb-0">Appointments</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                                            <span
                                                class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                <i class="bx bx-food-menu fs-4"></i>
                                            </span>
                                            <a href="https://dashboard.yekbun.net/app/invoice/list" class="stretched-link">Invoice App</a>
                                            <small class="text-muted mb-0">Manage Accounts</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                                            <span
                                                class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                <i class="bx bx-user fs-4"></i>
                                            </span>
                                            <a href="https://dashboard.yekbun.net/app/user/list" class="stretched-link">User App</a>
                                            <small class="text-muted mb-0">Manage Users</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                                            <span
                                                class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                <i class="bx bx-check-shield fs-4"></i>
                                            </span>
                                            <a href="https://dashboard.yekbun.net/app/access-roles" class="stretched-link">Role
                                                Management</a>
                                            <small class="text-muted mb-0">Permission</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                                            <span
                                                class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                                            </span>
                                            <a href="https://dashboard.yekbun.net" class="stretched-link">Dashboard</a>
                                            <small class="text-muted mb-0">User Profile</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                                            <span
                                                class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                <i class="bx bx-cog fs-4"></i>
                                            </span>
                                            <a href="https://dashboard.yekbun.net/pages/account-settings-account"
                                                class="stretched-link">Setting</a>
                                            <small class="text-muted mb-0">Account Settings</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                                            <span
                                                class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                <i class="bx bx-help-circle fs-4"></i>
                                            </span>
                                            <a href="https://dashboard.yekbun.net/pages/help-center-landing" class="stretched-link">Help
                                                Center</a>
                                            <small class="text-muted mb-0">FAQs & Articles</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                                            <span
                                                class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                <i class="bx bx-window-open fs-4"></i>
                                            </span>
                                            <a href="https://dashboard.yekbun.net/modal-examples" class="stretched-link">Modals</a>
                                            <small class="text-muted mb-0">Useful Popups</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Quick links -->

                        <!-- Style Switcher -->
                        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class="bx bx-bell bx-sun bx-sm"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item">
                                        <i class="bx bx-sun me-2"></i>
                                        <span class="align-middle">Light</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <i class="bx bx-moon me-2"></i>
                                        <span class="align-middle">Dark</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <i class="bx bx-desktop me-2"></i>
                                        <span class="align-middle">System</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ Style Switcher -->

                        <!-- Notification -->
                        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class="bx bx-bell bx-sm"></i>
                                <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end py-0">
                                <li class="dropdown-menu-header border-bottom">
                                    <div class="dropdown-header d-flex align-items-center py-3">
                                        <h5 class="text-body mb-0 me-auto">Notification</h5>
                                        <a href="javascript:void(0)" class="dropdown-notifications-all text-body"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i
                                                class="bx fs-4 bx-envelope-open"></i></a>
                                    </div>
                                </li>
                                <li class="dropdown-notifications-list scrollable-container">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="https://dashboard.yekbun.net/public//assets/img/avatars/1.png" alt
                                                            class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                                                    <p class="mb-0">Won the monthly best seller gold badge</p>
                                                    <small class="text-muted">1h ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span
                                                            class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Charles Franklin</h6>
                                                    <p class="mb-0">Accepted your connection</p>
                                                    <small class="text-muted">12hr ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="https://dashboard.yekbun.net/public//assets/img/avatars/2.png" alt
                                                            class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">New Message ✉️</h6>
                                                    <p class="mb-0">You have new message from Natalie</p>
                                                    <small class="text-muted">1h ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-success"><i
                                                                class="bx bx-cart"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                                                    <p class="mb-0">ACME Inc. made new order $1,154</p>
                                                    <small class="text-muted">1 day ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="https://dashboard.yekbun.net/public//assets/img/avatars/9.png" alt
                                                            class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Application has been approved 🚀 </h6>
                                                    <p class="mb-0">Your ABC project application has been approved.</p>
                                                    <small class="text-muted">2 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-success"><i
                                                                class="bx bx-pie-chart-alt"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Monthly report is generated</h6>
                                                    <p class="mb-0">July monthly financial report is generated </p>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="https://dashboard.yekbun.net/public//assets/img/avatars/5.png" alt
                                                            class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Send connection request</h6>
                                                    <p class="mb-0">Peter sent you connection request</p>
                                                    <small class="text-muted">4 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="https://dashboard.yekbun.net/public//assets/img/avatars/6.png" alt
                                                            class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">New message from Jane</h6>
                                                    <p class="mb-0">Your have new message from Jane</p>
                                                    <small class="text-muted">5 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-warning"><i
                                                                class="bx bx-error"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">CPU is running high</h6>
                                                    <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                                                    <small class="text-muted">5 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-menu-footer border-top">
                                    <a href="javascript:void(0);"
                                        class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40">
                                        View all notifications
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ Notification -->

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="https://www.w3schools.com/howto/img_avatar.png"
                                        alt class="w-px-40 h-auto rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="https://dashboard.yekbun.net/admin/profile">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="https://www.w3schools.com/howto/img_avatar.png"
                                                        alt class="w-px-40 h-auto rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block">
                                                                                                        Admin
                                                                                                    </span>
                                                <small class="text-muted">admin@gmail.com</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="https://dashboard.yekbun.net/admin/profile">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">My Profile</span>
                                    </a>
                                </li>
                                   <li>
                                    <a class="dropdown-item" href="https://dashboard.yekbun.net/admin_activity">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">Admin Activity</span>
                                    </a>
                                </li>
                                
                                                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                                                <li>
                                    <a class="dropdown-item" href="https://dashboard.yekbun.net/logout"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class='bx bx-power-off me-2'></i>
                                        <span class="align-middle">Logout</span>
                                    </a>
                                </li>
                                <form method="POST" id="logout-form" action="https://dashboard.yekbun.net/logout">
                                    <input type="hidden" name="_token" value="TmAAPHZcaiHEHuE0K34WbF61iRaF1DbGH80mZ4i0">                                </form>
                                                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
            </div>

            <!-- Search Small Screens -->
            <div
                class="navbar-search-wrapper search-input-wrapper  d-none">
                <input type="text"
                    class="form-control search-input container-xxl border-0"
                    placeholder="Search..." aria-label="Search...">
                <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
            </div>

                </nav>
    <!-- / Navbar -->

    <!-- Category Model -->
    <div class="modal fade" id="livestreammodel" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="col-xl-6">
                    <div class="nav-align-top mb-4">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-home" aria-controls="navs-top-home"
                                    aria-selected="true">Publish</button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-profile" aria-controls="navs-top-profile"
                                    aria-selected="false">Album</button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="modal"
                                    data-bs-target="#onboardingSlideModal" aria-controls="onboardingSlideModal"
                                    aria-selected="false">Video</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="tab-content tabcontent--1">
                        <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                            <div class="row">
                                <form method="POST" action="https://dashboard.yekbun.net/news-category">
                                    <input type="hidden" name="_token" value="TmAAPHZcaiHEHuE0K34WbF61iRaF1DbGH80mZ4i0">                                    <div class="col-12 d-flex">
                                        <div>
                                            <img src="https://dashboard.yekbun.net/public//assets/img/avatars/1.png" width="50"
                                                class="rounded-circle">
                                        </div>
                                        <textarea type="text" id="nameLarge" class="form-control border-0"
                                            placeholder="Write Something here" name="news_category"></textarea>
                                    </div>
                                </form>
                                <div class="col-12 "
                                    style="display:flex;gap:16px;margin-top:100px; border-top:1px solid #f7f7f7 ">
                                    <div>
                                        <button class="btn" style="background-color:#f7f7f7; border-radius:500px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-camera">
                                                <path
                                                    d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                                                </path>
                                                <circle cx="12" cy="13" r="4"></circle>
                                            </svg>&nbsp;Media</button>
                                    </div>
                                    <div>
                                        <button class="btn " style="background-color:#f7f7f7; border-radius:500px;">
                                            <img src=https://dashboard.yekbun.net/public//assets/img/emoji-1.svg
                                                width="25">&nbsp;Activity</button>
                                    </div>

                                    <div>
                                        <button class="btn " style="background-color:#f7f7f7; border-radius:500px;">
                                            <i class='bx bx-dots-horizontal-rounded '></i></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                            <div class="row">
                                <form method="POST" action="https://dashboard.yekbun.net/news-category">
                                    <input type="hidden" name="_token" value="TmAAPHZcaiHEHuE0K34WbF61iRaF1DbGH80mZ4i0">                                    <div class="col-12 d-flex">
                                        <div>
                                            <img src="https://dashboard.yekbun.net/public//assets/img/avatars/1.png" width="50"
                                                class="rounded-circle">
                                        </div>
                                        <textarea type="text" id="nameLarge" class="form-control border-0"
                                            placeholder="Write Something here" name="news_category"></textarea>
                                    </div>
                                </form>
                                <div class="col-12"
                                    style="display:flex;gap:16px;margin-top:100px; border-top:1px solid #f7f7f7 ">
                                    <div><button class="btn "
                                            style="background-color:#f7f7f7; border-radius:500px;"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-camera">
                                                <path
                                                    d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                                                </path>
                                                <circle cx="12" cy="13" r="4"></circle>
                                            </svg>&nbsp;Media</button></div>
                                    <div> <button class="btn "
                                            style="background-color:#f7f7f7; border-radius:500px;"><img
                                                src=https://dashboard.yekbun.net/public//assets/img/emoji-1.svg
                                                width="25">&nbsp;Activity</button></div>
                                    <button class="btn " style="background-color:#f7f7f7; border-radius:500px;"><i
                                            class='bx bx-dots-horizontal-rounded '></i></button>
                                    <div></div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>


    <!-- slider modal -->
    <div class="modal-onboarding modal fade animate__animated" id="onboardingSlideModal" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-header border-0">
                    <a class="text-muted close-label" href="javascript:void(0);" data-bs-dismiss="modal">Skip Intro</a>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div id="modalCarouselControls" class="carousel slide pb-4 mb-2" data-bs-interval="false">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#modalCarouselControls" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#modalCarouselControls" data-bs-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="onboarding-media">
                                <div class="mx-2">
                                    <img src="https://dashboard.yekbun.net/public//assets/img/videotrip.svg" alt="girl-with-laptop-light"
                                        width="335" class="img-fluid">
                                </div>
                            </div>
                            <div class="onboarding-content">
                                <h4 class="onboarding-title text-body">Share live videos</h4>
                                <p>Lorem ipsum sit dolor amet is a dummy text used by the typography industry and the
                                    web industry.</p>
                                <br><br>
                            </div>
                            <a class="carousel-control-next" href="#modalCarouselControls" role="button"
                                data-bs-slide="next">
                                <button type="button" class="btn btn-primary">
                                    Next
                                </button>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <div class="onboarding-media">
                                <div class="mx-2">
                                    <img src="https://dashboard.yekbun.net/public//assets/img/videocall.svg" alt="boy-with-laptop-light"
                                        width="300" class="img-fluid">
                                </div>
                            </div>
                            <div class="onboarding-content">
                                <h4 class="onboarding-title text-body">To build your audience</h4>
                                <div class="onboarding-info">Lorem ipsum sit dolor amet is a dummy text used by the
                                    typography industry and the web industry.</div> <br><br>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#animationModal">
                                    Got it
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ slider modal -->

    <!-- Modal -->
    <div class="modal fade animate__animated fadeIn" id="animationModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel5">Go Live</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="row ">
                    <div class="col-md-7">
                        <div class="video-container">
                            <iframe width="100%" height="680"
                                src="https://media.istockphoto.com/id/1365258482/video/adaptive-interface-design-video-concept.mp4?s=mp4-640x640-is&k=20&c=tf7tups5Y05BtaiZnfdCfyMrt3lhDbH3sX_H6R8Tji8=">
                            </iframe>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="d-flex justify-content-start align-items-center user-name ">
                                    <div class="avatar-wrapper">
                                        <div class="avatar avatar-sm me-3"><img src="https://dashboard.yekbun.net/public//assets/img/10.png"
                                                alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="javascript:void(0)" class="text-body text-truncate">
                                            <span class="fw-semibold">Jenna Devis <span>is live</span></span>
                                        </a>
                                        <small class="text-muted">right now</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button class="btn border rounded">Follow</button>
                                <div class="dropup d-none d-sm-block" style="position: absolute; right:10px; top:55px;">
                                    <button class="btn p-0" type="button" id="sharedList" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sharedList"
                                        style="padding:10px;">

                                        <strong>Who can see this ?</strong>
                                        <ul class="list-group list-unstyled">
                                            <li><a>
                                                    <div
                                                        class="d-flex justify-content-center align-items-center user-name ">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-3 text-center"><i
                                                                    class='bx bx-world'></i></div>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <a href="javascript:void(0)"
                                                                class="text-body text-truncate">
                                                                <span class="fw-semibold">Public</span>
                                                            </a>
                                                            <small class="text-muted">Anyone can see this
                                                                publication.</small>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li><a>
                                                    <div
                                                        class="d-flex justify-content-center align-items-center user-name ">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-3 text-center"><i
                                                                    class='bx bx-group'></i></div>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <a href="javascript:void(0)"
                                                                class="text-body text-truncate">
                                                                <span class="fw-semibold">Friends</span>
                                                            </a>
                                                            <small class="text-muted">Only Friends can see this
                                                                publication.</small>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li><a>
                                                    <div
                                                        class="d-flex justify-content-center align-items-center user-name ">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-3 text-center"><i
                                                                    class='bx bxs-right-arrow-alt'></i></div>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <a href="javascript:void(0)"
                                                                class="text-body text-truncate">
                                                                <span class="fw-semibold">Specific Friends</span>
                                                            </a>
                                                            <small class="text-muted">Dont Show it to some
                                                                friends.</small>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <hr>
                                            <li><a>
                                                    <div
                                                        class="d-flex justify-content-center align-items-center user-name ">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-3 text-center"><i
                                                                    class='bx bxs-user'></i></div>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <a href="javascript:void(0)"
                                                                class="text-body text-truncate">
                                                                <span class="fw-semibold">Only me</span>
                                                            </a>
                                                            <small class="text-muted">Only me can see this
                                                                publication.</small>
                                                        </div>
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-11 mt-4">
                                <input type="text" class="form-control form-rounded"
                                    placeholder="what is this live about?" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-8 ">
                                <span style="margin-left:10px;">
                                    <i class='bx bx-heart'></i>&nbsp;&nbsp;0</span>
                                <span style="margin-left:10px;">
                                    <i class='bx bx-share'></i>&nbsp;&nbsp;0</span>
                                <span style="margin-left:10px;">
                                    <i class='bx bx-chat'></i>&nbsp;&nbsp;0</span>
                            </div>

                            <div class="col-md-4 ">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="#888da8" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>&nbsp;&nbsp;0</span><span>&nbsp;&nbsp;views</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11">
                                <hr>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <span class="feeds_icons">
                                    <i class='bx bx-like'></i>&nbsp;Like
                                </span>
                            </div>
                            <div class="col-md-3">
                                <span class="feeds_icons">
                                    <i class='bx bx-chat'></i>&nbsp;Comment
                                </span>
                            </div>
                            <div class="col-md-3">
                                <span class="feeds_icons">
                                    <i class='bx bx-share'></i>&nbsp;Share
                                </span>
                            </div>

                            <div class="col-md-3">
                                <div class="dropdown show">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="https://dashboard.yekbun.net/public//assets/img/10.png" alt="Avatar" class="rounded-circle"
                                            width="20" height="20">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink"
                                        style="padding:10px;">
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-3"><img
                                                        src="https://dashboard.yekbun.net/public//assets/img/10.png" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="javascript:void(0)" class="text-body text-truncate">
                                                    <span class="fw-semibold">Jenna Devis <span>is live</span></span>
                                                </a>
                                                <small class="text-muted">right now</small>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-3"><img
                                                        src="https://dashboard.yekbun.net/public//assets/img/10.png" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="javascript:void(0)" class="text-body text-truncate">
                                                    <span class="fw-semibold">Jenna Devis <span>is live</span></span>
                                                </a>
                                                <small class="text-muted">right now</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">

                            <div class="col-md-6 ">
                                <h6 class="comments_section"><a>Comments</a></h6>
                                <hr class="hr__commemnts">
                            </div>
                            <div class="col-md-6">
                                <h6><a>UpComing</a></h6>
                                <hr>
                            </div>

                        </div>

                        <div class="section_feeds overflow-auto" style="height:300px">
                            <div class="container-fluid">
                                
                                <div class="row mb-1">
                                    <div class="col">
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-3"><img
                                                        src="https://dashboard.yekbun.net/public//assets/img/10.png" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2" style="background: #f5f6f7">
                                                <a href="javascript:void(0)" class="text-body text-truncate">
                                                    <span class="fw-semibold">Jenna Devis <span>is live</span></span>
                                                </a>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Proin ornare magna eros</small>
                                                <span style=" color: #5596e6;">Like</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row mb-1">
                                    <div class="col">
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-3"><img
                                                        src="https://dashboard.yekbun.net/public//assets/img/10.png" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2" style="background: #f5f6f7">
                                                <a href="javascript:void(0)" class="text-body text-truncate">
                                                    <span class="fw-semibold">Jenna Devis <span>is live</span></span>
                                                </a>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Proin ornare magna eros</small>
                                                <span style=" color: #5596e6;">Like</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row mb-1">
                                    <div class="col">
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-3"><img
                                                        src="https://dashboard.yekbun.net/public//assets/img/10.png" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2" style="background: #f5f6f7">
                                                <a href="javascript:void(0)" class="text-body text-truncate">
                                                    <span class="fw-semibold">Jenna Devis <span>is live</span></span>
                                                </a>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Proin ornare magna eros</small>
                                                <span style=" color: #5596e6;">Like</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row mb-1">
                                    <div class="col">
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-3"><img
                                                        src="https://dashboard.yekbun.net/public//assets/img/10.png" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2" style="background: #f5f6f7">
                                                <a href="javascript:void(0)" class="text-body text-truncate">
                                                    <span class="fw-semibold">Jenna Devis <span>is live</span></span>
                                                </a>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Proin ornare magna eros</small>
                                                <span style=" color: #5596e6;">Like</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-11">
                                <div class="d-flex gap-2">
                                    <img src="https://dashboard.yekbun.net/public//assets/img/10.png" alt="Avatar" class="rounded-circle"
                                        width="40" height="40">
                                    <input type="text" class="form-control form-rounded" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>            <!-- END: Navbar-->

