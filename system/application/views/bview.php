<body>
<div id= container>
<div id="header">
<h1>Random</h1>
</div>
	<div id="content">
	<?php
		foreach ($posts as $post)
		{
			$postColor = ($post['postID'] % 2) ? 'dark' : 'light';
		?>
		<div class="content <?php echo $postColor ?>">
		<?php
			echo "<i>#" . $post['postID'] . "</i> \n" . "<span class='ip'> <i>ip: " .$post['ip'] . "</i></span> \n <br/>";			

			echo "<p>" . $post['content'] . "</p>\n";
		?>
		</div>
		<?php
		}
	
	?>
	</div>
	<div id="postForm">
	<?php	
			
			$this->load->helper('url');
			$this->load->helper('form') . "\n";
	?>
	<form action="http://<?=current_url()?>" method="post" name="formsubmit">
		<input name="postContent" type="input" width= "80%"/>
		<a style="border: 1px solid #002072; background: #d4d6dc; padding: 2px 10px 2px 10px;" href = "" action= "javascript:document.forms['formsubmit'].submit();"> reply </a>
	</form>
	</div>
</div>
</body>
</html>
