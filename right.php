<div class="right">
	<form action="">
		Search: <input type="text" name="key">
		<input type="submit" name="search" value="Search">
	</form>
	<table border="1" cellspacing="0" align="center" width="100%">
		<tr>
			<th width="150">Image</th>
			<th>Product name</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
		<?php 
		if(isset($_GET['catid']))
			$sql = "select * from product where CatId=" . $_GET['catid'];
		else
			$sql = "select * from product";
		$rows = query($sql);
		for($i=0; $i<count($rows); $i++)
		{
			?>
		<tr align="center">
			<td><img src="<?=$rows[$i][2]?>" width="100%" alt=""></td>
			<td><?=$rows[$i][1]?></td>
			<td><?=$rows[$i][3]?></td>
			<td>
				<a href="index.php?updateid=<?=$rows[$i][0]?>">Edit</a> 
				<a href="index.php?deleteid=<?=$rows[$i][0]?>">Delete</a>
			</td>
		</tr>
			<?php

		}
		?>
	</table>

	<?php 
	if(isset($_GET['updateid']))
		require_once('update.php');
	else
		require_once('add.php');
	?>
</div>