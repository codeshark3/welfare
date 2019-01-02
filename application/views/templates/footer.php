</main>
<footer class="page-footer font-small blue" style="margin-top:40px">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> </a>
  </div>
  <!-- Copyright -->

</footer>

<!--
     
</div>script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</script>


 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
 <script src="<?php echo base_url(); ?>static/js/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="<?php echo base_url(); ?>static/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/mdb.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>static/js/feather.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script> 
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js "></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>  
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js "></script> 
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js "></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <!--
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
-->
</body>
</html>
<!-- entries -->
<script type="text/javascript" language="javascript" >  
 $(document).ready(function(){ 

      var dataTable = $('#entry_data').DataTable({  
           "processing":true,  
           "serverSide":true, 
             "dom": 'lBfrtip', 
           "order":[],  
           "ajax":{  
                //url:"<?//php echo base_url();?>entries/fetch", 
               url:"<?php echo base_url() . 'entries/fetch'; ?>",   
                type:"POST"  
           },  
            
            buttons: [
            {
              
                
                
                extend:'print',
                messageTop: 'Korle-Bu Teaching Hospital - Welfare System',
                exportOptions: {
                    columns: ':visible'
                }
            },
          'copy','excel','colvis','csv'
        ],

      
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false ,
                      "visible": false 
                },  
           ],
      
      });  
     ;

      $('.dataTables_length').addClass('bs-select');
 });  
 </script>
<!-- entries -->
<!-- dashboard -->
<script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
      var dataTable = $('#dash_data').DataTable({  
           "processing":true,  
           "serverSide":true, 
             "dom": 'lBfrtip', 
           "order":[],  
           "ajax":{  
                //url:"<?//php echo base_url();?>entries/fetch", 
               url:"<?php echo base_url() . 'dashboard/fetch'; ?>",   
                type:"POST"  
           },  
            
            buttons: [
            {
              
                
                
                extend:'print',

                exportOptions: {
                    columns: ':visible'
                }
            },
          'copy','excel','colvis','csv'
        ],
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false ,
                      "visible": false 
                },  
           ],
      
      });  
     ;
      $('.dataTables_length').addClass('bs-select');
 });  
 </script>
<!--  dashboard -->
<!-- reports -->
<script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
      var dataTable = $('#report_data').DataTable({  
           "processing":true,  
           "serverSide":true, 
           "dom": 'lBfrtip', 
           "order":[],  
           "ajax":{  
              
               url:"<?php echo base_url() . 'reports/fetch'; ?>",   
                type:"POST"  
           },
            buttons: [
            {
              
                
                
                extend:'print',

                exportOptions: {
                    columns: ':visible'
                }
            },
          'copy','excel','colvis','csv'
        ], 
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                      "visible": false 
                },  
           ],
       
      });  

      
      $('.dataTables_length').addClass('bs-select');
 });  
 </script>
<!-- reports -->
<!-- bills -->
<script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
      var dataTable = $('#bill_data').DataTable({  
           "processing":true,  
           "serverSide":true, 
             "dom": 'lBfrtip', 
           "order":[],  
           "ajax":{  
               url:"<?php echo base_url() . 'bill/fetch'; ?>",   
                type:"POST"  
           }, 
           buttons: [
            {
                 
                extend:'print',

                exportOptions: {
                    columns: ':visible'
                }
            },
          'copy','excel','csv','colvis'
        ], 
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                      "visible": false 
                },  
           ],
    //         buttons: [
    //     {
    //         extend: 'print',
    //         text: 'Print current page',
    //         exportOptions: {
    //             modifier: {
    //                 page: 'current'
    //             }
    //         }
    //     }
    // ]
      });  
 });  
 </script>
<!-- bills -->
<!-- <script type="text/javascript">
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?//php echo base_url(); ?>bill/bill_fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#info').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script> -->

<!-- <script type="text/javascript">
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?//php echo base_url(); ?>ajaxsearch/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

 -->

<!-- <script type="text/javascript">
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<//?php echo base_url(); ?>dashboard/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#data').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script> -->
<!-- datepickers -->
<script type="text/javascript">
  $("#subdate_datepicker").datepicker(
    { 
    format: 'yyyy/mm/dd'
     });
$("#date_datepicker").datepicker(
    { 
     format: 'yyyy/mm/dd'
  });
$("#sw_datepicker").datepicker(
    { 
     format: 'yyyy/mm/dd'
  });
$("#acc_datepicker").datepicker(
    {
     format: 'yyyy/mm/dd'
  });
$("#crdate_datepicker").datepicker(
    { format: 'yyyy/mm/dd'
  });
$("#admission_datepicker").datepicker(
    { format: 'yyyy/mm/dd'
  });
$("#discharge_datepicker").datepicker(
    { format: 'yyyy/mm/dd'
  });
$("#payment_datepicker").datepicker(
    { format: 'yyyy/mm/dd'
  });
$("#due_datepicker").datepicker(
    { format: 'yyyy/mm/dd'
  });
$("#effective_datepicker").datepicker(
    { format: 'yyyy/mm/dd'
  });
$("#declarant_datepicker").datepicker(
    { format: 'yyyy/mm/dd'
  });
$("#guarantor_datepicker").datepicker(
    { format: 'yyyy/mm/dd'
  });

</script>

<!-- datepickers -->