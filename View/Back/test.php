<form method="post" name="group_note" action="group_test.php?Counselor=<?php echo $_GET['Counselor'];?>"/>
<table border="1" width="650" cellpadding="5" cellspacing="0" bordercolor="#999999">
<tr><th>Group Note</th></tr>
<tr><td><textarea name="Note" rows="10" cols="115"></textarea></td></tr>
<tr><th align="left">Select clients below to receive this group note &nbsp; <input type="submit" value="Add Group Note"></th></tr>
</table>
<table border="1" cellpadding="5" cellspacing="0" bordercolor="#999999">
<thead>
  <tr>
    <th bgcolor="#009999">Select</th>
    <th bgcolor="#009999">Name</th>
    <th bgcolor="#009999">Case No.</th>
    <th bgcolor="#009999">Client No.</th>
    </tr>
  </thead>
  <tbody>
<?php foreach ($dbh -> query($sql) as $row) { ?>        
<tr> 
        <td><input type="checkbox" name="groupselect[]" value="<?php echo $row['Case_No'];?>" /></td>
        <td><?php echo $row['FirstName']. " " . $row['LastName']; ?></td>
        <td><?php echo $row['Case_No']; ?></td> 
        <td><?php echo $row['Client_No']; ?><input type="hidden" name="Client_No[]" value="<?php echo $row['Client_No']; ?>"/></td>

<?php  }  ?>
</tbody>
</table>
    <input type="hidden" name="MM_insert" value="group_note">
</form>
