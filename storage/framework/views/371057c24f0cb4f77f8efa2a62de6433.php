</div>
      <!-- / Layout page -->
    </div>

        <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->
    <!--/ Layout Content -->

  

  <!-- Include Scripts -->
  <!-- BEGIN: Vendor JS-->
<script src="https://dashboard.yekbun.net/public//assets/vendor/libs/jquery/jquery.js?id=be95af1b7fa35aa4b1dec268626264d2"></script>
<script src="https://dashboard.yekbun.net/public//assets/vendor/libs/popper/popper.js?id=62b540407346f16042446be395a1de9b"></script>
<script src="https://dashboard.yekbun.net/public//assets/vendor/js/bootstrap.js?id=78abe8c016e9085012911d16f3c2d410"></script>
<script src="https://dashboard.yekbun.net/public//assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js?id=91a15b5a6abe136b3a259607c4985984"></script>
<script src="https://dashboard.yekbun.net/public//assets/vendor/libs/hammer/hammer.js?id=58f8e2d88db3256252e130eb0bf65102"></script>
<script src="https://dashboard.yekbun.net/public//assets/vendor/libs/i18n/i18n.js?id=d84587ac552cc6b5c83ae3c49f1e543c"></script>
<script src="https://dashboard.yekbun.net/public//assets/vendor/libs/typeahead-js/typeahead.js?id=70e819040bc904810817c06de6a77130"></script>
<script src="https://dashboard.yekbun.net/public//assets/vendor/js/menu.js?id=9a70d8747378d2e5603b6b09560c5b74"></script>
<script src="https://dashboard.yekbun.net/public//assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
<script src="https://dashboard.yekbun.net/public//assets/vendor/libs/toastr/toastr.js?id=721bf49c50441c757c2edf0cfae6b542"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="https://dashboard.yekbun.net/public//assets/js/main.js?id=ef69c07373e4b8fc24d19104a28ccaf8"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<script>
  function confirmAction(event, callback) {
    event.preventDefault();
    Swal.fire({
      title: 'Are you sure?',
      text: "Are you sure you want to delete this?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      customClass: {
        confirmButton: 'btn btn-danger me-3',
        cancelButton: 'btn btn-label-secondary'
      },
      buttonsStyling: false
    }).then(function (result) {
      if (result.value) {
        callback();
      }
    });
  }
  
  function drpzone_init() {
	  
      dropZoneInitFunctions.forEach(callback => callback());
  }
  
</script>
<!-- END: Page JS-->

<script>  $('.dropify').dropify();</script>
<script>
  
</script>
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>

</body>

</html>
<?php /**PATH E:\code\mongodb\my-app\resources\views/avatars/footer.blade.php ENDPATH**/ ?>