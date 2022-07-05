<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!$_SESSION['uname']){
  redirect('home','refresh');
}
else{
    if($_SESSION['utype'] != 'Administrator'){
    ?>
    <script type = "text/javascript">
        Swal.fire({
          title: 'Permission Denied!!',
          text: "You have no Permission to access this page!",
          icon: 'error',
          showCancelButton: false,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          allowOutsideClick: false,
          confirmButtonText: 'OK!'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "<?php echo site_url(); ?>dashboard";

          }
        })
        </script>
    <?php
        
    }
}
?>
