<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<meta name="description" content="">
<title>soft</title>
	<script src="/webroot/js/coments.js"></script>
</head>
<body>
	<div class="coments">
		<?php if(!empty($coments)) : ?>
			<?php foreach($coments as $coment) : ?>
				<table>
					<tr><th><?= $coment['user_name']?></th></tr>
					<tr>
						<td><?= $coment['coment']?></td>
						<td style="cursor: pointer; padding-right: 20px;" id="coment_rating"><?= $coment['rating']?></td>
						<td><a id="delete_coment" data-delete="<?= $coment['id']?>" href="">delete coment</a></td>
					</tr>
				</table>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
	<div class="add_coments">
		<textarea id="coment" placeholder="leave your coment"></textarea>
		<a id="send_coment" href="">Send Coment</a>
	</div>
</body>

