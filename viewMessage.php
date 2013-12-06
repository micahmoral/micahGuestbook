<center>
<table border='1'>
	<tr>
		<td><b>Id</b></td>
		<td><b>Name</b></td>
		<td><b>Email</b></td>
		<td><b>Message</b></td>
		<td><b>Date Posted</b></td>
		<td><b>Is Approved</b></td>
		<td><b><center>Action</center></b></td>
	</tr>

<?php
	include "getForm.php";

	$record=getdata();
	foreach($record as $list):?>
	<tr>
		<td><?=$list['id'];?></td>
		<td><?=$list['name'];?></td>
		<td><?=$list['email'];?></td>
		<td><?=$list['message'];?></td>
		<td><?=$list['date_posted'];?></td>
		<td><?=$list['is_approved'];?></td>
		<td><b><form method = 'POST'action = "reject.php?id=<?=$list['id']?>"><input type = "submit" value =  "Reject"></form>
		<td><b><form method = 'POST' action = "approve.php?id=<?=$list['id']?>"><input type = "submit" value =  "Approve"></form>
		
</form>
		</a>&nbsp;<a href = "is_delete.php?id<?=$list['id']?>">[Delete]</a>
	</tr>

<?php endforeach; ?>
</table>
<br>
<a href='home.php'><button>Back</button>
</center>