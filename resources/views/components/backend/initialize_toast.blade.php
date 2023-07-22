<script>
    // INITIALIZATION OF LIVE TOAST
    // =======================================================
    $(document).ready(function () {
      const liveToast = new bootstrap.Toast(document.querySelector('#liveToast'))
          var error = '{{session("error")}}' 
          var status = '{{session("status")}}' 
          if(error != "" || status != ""){
          liveToast.show()
          }
        })
</script>
