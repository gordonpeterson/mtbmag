<?php
	
// Do not delete these lines

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

if ( post_password_required() ) { ?>
	<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'woothemes') ?></p>

<?php return; } ?>

<?php $comments_by_type = &separate_comments($comments); ?>    

<!-- You can start editing here. -->

<?php 
#### Vbridge Replacement code for comments
if (function_exists('Comment_Handler')) {

	$vbridge = Comment_Handler($post->ID);

	global $vbulletin; 
}

if ($vbridge[id] > 0) {
?>
<!-- START EDITING -->
<?php
$db_vb = new mysqli('10.0.0.2', 'wusr0001', 'ayowi133', 'db_forum');

$result = $db_vb->query("SELECT `views` FROM `vb3_thread` WHERE `threadid` = $vbridge[id];");

if ($row = $result->fetch_assoc()) {
   $db_vb->query("UPDATE `vb3_thread` SET `views` = `views` + 1 WHERE `threadid` = $vbridge[id];");
}

//LOGGING
$vb_ID=0;
$vb_name=NULL;
$cookie_ID=$_COOKIE['mtb_forumuserid'];
define('COOKIE_SALT', 'fMaMmeOiWb8N4cQb3xrOnPe20yM1eFnchnGkr');


$result = $db_vb->query("SELECT `userid`, `username`, `email`, `avatarrevision`, `password` FROM `vb3_user` WHERE `userid`=$cookie_ID;");
if ($row = $result->fetch_assoc()) {
	if($row['userid']!=0 and md5($row['password'] . COOKIE_SALT)==$_COOKIE['mtb_forumpassword']) {	
		$vb_ID=$row['userid'];
		$vb_name=$row['username'];
	}
}

$db_vb->close();
?>
<!-- END EDITING -->
<div class="comments">
<?php
	if(is_single()) {
		if (is_array($vbridge[replies])) {
?>
<br/>

	<div  align="center">
		
		<style type="text/css">
.mtb-under-article { width: 640px; height: 200px; }
</style>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- MTB under article -->
<ins class="adsbygoogle mtb-under-article"
     style="display:inline-block"
     data-ad-client="ca-pub-4921136079852098"
     data-ad-slot="3496296743"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
		</div>

<br/>
<div id="respond">
<?php 
//$current_user=get_currentuserinfo();
if($vb_ID==0) { ?>
	<center><hr><b>Devi essere loggato per commentare.</b> <a href="/community/forum/usercp.php">Accedi</a> o <a href="/community/forum/register.php">Registrati</a></center>
<?php
} else {
?>
<form action="<?php echo get_option('vbb_VBURL') ?>/newreply.php?do=postreply&amp;t=<?php echo $vbridge[id] ?>" method="post">
	Loggato come <b><?php echo  $vb_name; ?></b>
	<br/>
  	Se vuoi usare l'interfaccia del forum con faccine e immagini inseribili <a href=<?php echo get_option('vbb_VBURL') ?>/newreply.php?do=newreply&noquote=1&t=<?php echo $vbridge[id] ?>>clicca qui</a>
	<input type="hidden" name="title" value="">
	<textarea style="width:100%" id="comment" tabindex="4" rows="10" name="message" ></textarea>
	<input name="s" value="" type="hidden">
	<input name="do" value="postreply" type="hidden">
	<input type="hidden" name="p" value="">
	<input type="hidden" name="specifiedpost" value="0">
	<input type="hidden" name="signature" value="1" />
	<input type="hidden" name="wp_post" value="1" />
	<input type="hidden" name="loggedinuser" value="<?php echo $vb_ID; ?>">
	<input type="hidden" name="securitytoken" value="<?php echo $vbulletin->userinfo['securitytoken']; ?>"/>
	<br />
	<center><input type="submit" class="button" name="sbutton" id="vB_Editor_001_save" value="Commenta" accesskey="s" tabindex="1"></center>
</form>
<?php } ?>
</div>


	<p id="comments">
	<?php
			$commcount=0;
			foreach ($vbridge[replies] as $reply) { 
			$commcount++;
	?>
	<table style="width: 100%; 	border-style: solid; border-width: 1px; border-color:#D7D7D7; background-color:#ffffff">

		<tr>
			<td style="background-color:#D7D7D7" colspan="2">
				Commento di <a href=<?php echo get_option('vbb_VBURL') ?>/member.php?u=<?php echo $reply['userid'] ?>><?php echo $reply['username'] ?></a>
				pubblicato il <a href="<?php echo get_option('vbb_VBURL') ?>/showthread.php?p=<?php echo $reply['postid'] ?>">
				<?php echo vbdate($vbulletin->options['dateformat'],$reply['dateline']) . ', ' . vbdate($vbulletin->options['timeformat'],$reply['dateline']) ?>
				</a>
			</td>
			<td style="background-color:#D7D7D7; text-align:right"><a href="<?php echo get_option('vbb_VBURL') ?>/showthread.php?p=<?php echo $reply['postid'] ?>">#<?php echo $commcount;?></a></td>
		</tr>
		<tr>
			<td colspan="3" style="height:5px">&nbsp;</td>
		</tr>
		<tr>
			<td style="width:5px">&nbsp;</td>
			<td style="width:100%"><?php echo utf8_encode($vbridge[vb_parser]->do_parse($reply[pagetext], false, true)); ?></td>
			<td style="width:5px">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="3" style="height:5px">&nbsp;</td>
		</tr>
	</table><br/>

	<?php } ?>
	</p>
</div>




<?php
			
		}
	}
}
##End Vbridge Replacement
?>


<?php if ('open' == $post->comment_status) : ?>



<?php endif; // if you delete this the sky will fall on your head ?>