<!--
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>  -->      
<script type="text/javascript">
  (function(){
    $('#datetimepicker-demo').datetimepicker({
      format: 'L', // or 'l' (lowercase L) for non-zero-padded
      date: moment()

    });

  });
</script>
<script src="<?php echo base_url(); ?>static/js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment-with-locales.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/moment.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/moment-with-locales.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/tempusdominus-bootstrap-4.min.js"></script>


<script src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>


<!--

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
-->
</body>
</html>