<?php
$shop = array( array("title"=>"apples", "price"=>1.25 , "number"=>15),
               array("title"=>"cucumbers", "price"=>0.75 , "number"=>25),
               array("title"=>"tomatos", "price"=>1.15 , "number"=>7) 
             ); 
?>
<?php if (count($shop) > 0): ?>
<table border ="1" >
  <thead bgcolor="red">
    <tr>
      <th ><?php echo implode('</th><th>', array_keys(current($shop))); ?></th>
    </tr>
  </thead>
  <tbody bgcolor = "yellow">
<?php foreach ($shop as $row): array_map('htmlentities', $row); ?>
    <tr>
      <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>