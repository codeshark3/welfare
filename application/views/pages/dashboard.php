
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Entries</h1>
 </div>



<div class="responsive mx-auto">
<table class="table table-striped table-sm">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">Case Number</th>
      <th scope="col">Folder Number</th>
      <th scope="col">Serial Number</th>
      <th scope="col">Amount Owed</th>
      <th scope="col">Approval</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($entries as $entry) : ?>
    <tr>
      <th scope="row"><?php echo $entry['id']; ?></th>
      <td><?php echo $entry['last_name']; ?></td>
      <td><?php echo $entry['first_name']; ?></td>  
      <td><?php echo $entry['case_no']; ?></td>
      <td><?php echo $entry['folder_no']; ?></td>
      <td><?php echo $entry['serial_no']; ?></td>
      <td><?php echo $entry['total']; ?></td>
      <td><?php echo $entry['approval']; ?></td>
      <td><a class="btn  btn-sm btn-primary" href="<?php echo site_url('/entries/'.$entry['folder_no']); ?>">Details</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</div>


