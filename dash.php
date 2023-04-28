<br>


<?php
  $get_pid=get_option('privacy_policy_id');
  $get_tid=get_option('tnc_id');
  $get_did=get_option('disclaimer_id');
?>
<div class="dash_table">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">PAGE_NAME</th>
      <th scope="col">TYPE</th>
      <th scope="col">LINK</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Privacy policy</td>
      <td>page</td>
      <td><a href="<?php echo APG_ADMIN_URL.'post.php?post='.$get_pid.'&action=edit';?>">Edit</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Terms & Condition</td>
      <td>page</td>
      <td><a href="<?php echo APG_ADMIN_URL.'post.php?post='.$get_tid.'&action=edit';?>">Edit</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Disclaimer</td>
      <td>page</td>
      <td><a href="<?php echo APG_ADMIN_URL.'post.php?post='.$get_did.'&action=edit';?>">Edit</a></td>
    </tr>
  </tbody>
</table>
</div>