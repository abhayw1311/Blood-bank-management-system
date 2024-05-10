<br>
<div class="container">
<table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    foreach($information as $info) {
        ?>
         <tr>
            <td><?php echo $info['name'] ?></td>
            <td><?php echo $info['email'] ?></td>
            <td><?php echo $info['phone'] ?></td>
            <td><?php echo $info['message'] ?></td>
        </tr>
        <?php 
    }
    ?>
     
    </tbody>
  </table>
  </div>
  <br />