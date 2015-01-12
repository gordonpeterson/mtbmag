<?php
session_start();
/**
 * Template Name: Contact Page 
 * Description: A Page Template to display contact form with captcha and jQuery validation.
 *
 * @package  WellThemes
 * @file     page-contact.php
 * @author   Well Themes Team
 * @link 	 http://wellthemes.com
 */
 
	$name_error = '';
	$email_error = '';
	$message_error = '';
	$captcha_error = '';
	
	$wt_recaptcha_public_key = wt_get_option('wt_recaptcha_public_key');
	$wt_recaptcha_private_key = wt_get_option('wt_recaptcha_private_key');
								
	include_once( trailingslashit( get_stylesheet_directory() ) . 'framework/lib/recaptcha/recaptchalib.php' );							
if(isset($_POST['wt_submit'])) {
		//validate sender name
		if(trim($_POST['sender_name']) === '') {
			$name_error = 'Please enter your name.';
			$has_error = true;
		} else {
			$sender_name = trim($_POST['sender_name']);
		}
		
		//validate sender email
		if(trim($_POST['sender_email']) === '')  {
			$email_error = 'Please enter your email address.';
			$has_error = true;
		} else if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", trim($_POST['sender_email']))){
			$email_error = 'Please enter a valid email address.';
			$has_error = true;
		} else {
			$sender_email = trim($_POST['sender_email']);
		}
			
		
		//validate message
		if(trim($_POST['message_text']) === '') {
			$message_error = 'Please enter a message.';
			$has_error = true;
		} else {
			if(function_exists('stripslashes')) {
				$message = stripslashes(trim($_POST['message_text']));
			} else {
				$message = trim($_POST['message_text']);
			}
		}
		
				
		# the response from reCAPTCHA
		$resp = null;
		# the error code from reCAPTCHA, if any
		$error = null;
		
		$resp = recaptcha_check_answer ($wt_recaptcha_private_key,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);

		if (!$resp->is_valid) {                
			# set the error code so that we can display it				
			$captcha_error = __('Please enter code correctly.', 'wellthemes');
			$has_error = true;	
		}	
		
			
		
		//if no error, send email.
		if(!isset($has_error)) {
			$email_to = wt_get_option('wt_contact_email');		
			$subject = wt_get_option('wt_contact_subject');	
			
			if (!isset($email_to) || ($email_to == '') ){
				$email_to = get_option('admin_email');				
			}
			
			if (!isset($subject) || ($subject == '') ){
				$subject = 'Contact Message From '.$sender_name;			
			}
			
			$from_user = "=?UTF-8?B?".base64_encode($sender_name)."?=";
			$subject = "=?UTF-8?B?".base64_encode($subject)."?=";

			$headers = "From: $from_user <$sender_email>\r\n".
						"Reply-To: $sender_email" . "\r\n" .
               "MIME-Version: 1.0" . "\r\n" .
               "Content-type: text/html; charset=UTF-8" . "\r\n"; 
			
			$body = "Name: $sender_name <br />Email: $sender_email <br />Comments: $message";	
			
			mail($email_to, $subject, $body, $headers);
			$email_sent = true;
		}
	
	} 

?>

<?php get_header(); ?>

	<script type="text/javascript">
	<!--//--><![CDATA[//><!--
		jQuery(document).ready(function() {
			jQuery('form#wt_contact_form').submit(function() {
			jQuery('form#wt_contact_form .error').remove();
			var hasError = false;
			jQuery('.requiredField').each(function() {
			if(jQuery.trim(jQuery(this).val()) == '') {
									
					if(jQuery(this).hasClass('name_field')) {
						jQuery(this).parent().append('<span class="error"><?php _e('Please enter your name.', 'wellthemes'); ?></span>');
					}
					
					if(jQuery(this).hasClass('title_field')) {
						jQuery(this).parent().append('<span class="error"><?php _e('Please enter message title.', 'wellthemes'); ?></span>');
					}
					
					if(jQuery(this).hasClass('email')) {
						jQuery(this).parent().append('<span class="error"><?php _e('Please enter your email.', 'wellthemes'); ?></span>');
					}
					
					if(jQuery(this).hasClass('message_field')) {
						jQuery(this).parent().append('<span class="error"><?php _e('Please enter your message.', 'wellthemes'); ?></span>');
					}
					
					if(jQuery(this).hasClass("captcha_field")) {
						jQuery(this).parent().append('<span class="error"><?php _e('Please enter the security code.', 'wellthemes'); ?></span>');
					}
				
					jQuery(this).addClass('inputError');
					hasError = true;
				} else if(jQuery(this).hasClass('email')) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if(!emailReg.test(jQuery.trim(jQuery(this).val()))) {
						jQuery(this).parent().append('<span class="error"><?php _e('Please enter valid email', 'wellthemes'); ?> </span>');
						jQuery(this).addClass('inputError');
						hasError = true;
					}
				}
			});
						
			if(hasError) {
				return false;
			} else{
				return true;
			}						
			});
		});
	//-->!]]>
	</script>	
	
	<div id="content" class="contact-page full-content">
			<header class="page-header">
				<h1><?php the_title(); ?></h1>
								
				<div class="page-sep">						
					<span class="line"></span>
					<span class="shape"></span>					
				</div>
			</header><!-- /archive-header -->
			
			<?php $wt_contact_address = wt_get_option( 'wt_contact_address' );	?>
			
			<?php if ( wt_get_option( 'wt_show_contact_map' ) == 1 ) { ?>
			
				<div class="map section">
					<iframe width="100%" scrolling="no" height="320" frameborder="0" src="		https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo urlencode($wt_contact_address); ?>&amp;z=14&amp;iwloc=near&amp;output=embed" marginwidth="0" marginheight="0"></iframe>
				</div><!--/map -->
			<?php } ?>
		
			<div class="contact-text">		
				<?php while ( have_posts() ) : the_post(); ?>			
					<?php the_content(); ?>			
				<?php endwhile; // end of the loop. ?>					
			</div><!-- /contact-text -->
		
			<div class="contact-wrap">
			<script type="text/javascript">
				 var RecaptchaOptions = {
					theme : 'custom',
					custom_theme_widget: 'recaptcha_widget'
				 };
			</script>
				
				<div class="col col-350 contact-form">		
					
					<div class="col-header">
						<h2><?php _e('Send us a message!', 'wellthemes')?></h2><hr />
					</div>
					
					<?php if(isset($email_sent) && $email_sent == true) { ?>				
						<div class="msgbox msgbox-success"><?php _e('<strong>Thank you.</strong> Your email was sent successfully.', 'wellthemes') ?></div>	
					<?php } else { ?>
	
					<?php if(isset($has_error)) { ?>
						<div class="msgbox msgbox-error"><?php _e('Please correct the following errors and try again.', 'wellthemes') ?></div>
						<?php } ?>
	
						<form action="<?php $_SERVER['PHP_SELF']; ?>" id="wt_contact_form" method="post">
						
							<div class="field">
								<label for="sender_name"><?php _e('Name', 'wellthemes') ?><span>&#42;</span></label>
								<input type="text" class="text name_field requiredField" name="sender_name" id="sender_name" placeholder="Your name and surname" value="<?php if(isset($_POST['sender_name'])) echo $_POST['sender_name'];?>" />
								<?php if($name_error != '') { ?>
									<span class="error"><?php echo $name_error; ?></span>  
								<?php } ?>
							</div>
							
							<div class="field">
								<label for="sender_email"><?php _e('Email', 'wellthemes') ?><span>&#42;</span></label>
								<input type="text" class="text requiredField email" name="sender_email" id="sender_email" placeholder="To contact you" value="<?php if(isset($_POST['sender_email']))  echo $_POST['sender_email'];?>" />
								<?php if($email_error != '') { ?>
									<span class="error"><?php echo $email_error; ?></span> 
								<?php } ?>	
							</div>
							
							<div class="field message-field">
								<label for="message_title"><?php _e('Title', 'wellthemes') ?><span>&#42;</span></label>
								<input type="text" class="text title_field requiredField" name="message_title" id="message_title" placeholder="What you ask about?" value="<?php if(isset($_POST['message_title'])) echo $_POST['message_title'];?>" />
								<?php if($name_error != '') { ?>
									<span class="error"><?php echo $message_error; ?></span>  
								<?php } ?>
							</div>
								
							<div class="field textarea-field">		
								<label for="message_text"><?php _e('Message', 'wellthemes') ?><span>&#42;</span></label>
								<textarea class="textarea message_field requiredField" name="message_text" id="message_text" placeholder="Your question here."><?php if(isset($_POST['message_text'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['message_text']); } else { echo $_POST['message_text']; } } ?></textarea>
																
								<?php if($message_error != '') { ?>
									<span class="error"><?php echo $message_error; ?></span> 
								<?php } ?>				
							</div>
							
							<div id="recaptcha_widget" style="display:none">
							
								<div class="field">
									<div class="recaptcha_only_if_incorrect_sol" style="color:red"><?php _e('Incorrect please try again', 'wellthemes'); ?></div>
									<span class="recaptcha_only_if_image"><span class="enter-words"><?php _e('Enter the words:', 'wellthemes'); ?></span><span class="required">&#42;</span></span>
								    <span class="recaptcha_only_if_audio"><span class="enter-words"><?php _e('Enter the numbers you hear:', 'wellthemes'); ?></span><span class="required">&#42;</span></span>
								    <input type="text" id="recaptcha_response_field" class="text requiredField captcha_field" name="recaptcha_response_field" />
									<?php if($captcha_error != '') { ?>
										<span class="error"><?php echo $captcha_error; ?></span> 
									<?php } ?>										
								</div>
								 
								<div class="field recaptcha-image">
									<div id="recaptcha_image"></div>
									<div class="recaptcha_refresh"><i class="icon-refresh"></i><a href="javascript:Recaptcha.reload()"><?php _e('Refresh', 'wellthemes'); ?></a></div>
									<div class="recaptcha_only_if_image"><i class="icon-volume-up"></i><a href="javascript:Recaptcha.switch_type('audio')"><?php _e('Audio ', 'wellthemes'); ?></a></div>
									<div class="recaptcha_only_if_audio"><i class="icon-picture"></i><a href="javascript:Recaptcha.switch_type('image')"><?php _e('Image', 'wellthemes'); ?></a></div>
									<div class="recaptcha_help"><i class="icon-info-sign"></i><a href="javascript:Recaptcha.showhelp()"><?php _e('Help', 'wellthemes'); ?></a></div>
								</div>

								<script type="text/javascript"
									src="http://www.google.com/recaptcha/api/challenge?k=<?php echo $wt_recaptcha_public_key; ?>">
								</script>
								<noscript>
								   <iframe src="http://www.google.com/recaptcha/api/noscript?k=<?php echo $wt_recaptcha_public_key; ?>"
										height="300" width="500" frameborder="0"></iframe><br>
									<textarea name="recaptcha_challenge_field" rows="3" cols="40">
								   </textarea>
								   <input type="hidden" name="recaptcha_response_field"
										value="manual_challenge">
								</noscript>
							</div>
						
							<div class="field field-submit">
								<div class="submit-icon main-color-bg"><i class="icon-location-arrow"></i></div>
								<input type="submit" name="wt_submit" value="<?php _e('Send', 'wellthemes'); ?>" class="button main-color-bg" />
							</div>				
																
						</form>
	
				<?php } ?>
	
		</div><!-- /one-third -->
		
		<div class="contact-info col col-350">
			<div class="col-header">
				<h2><?php _e('Contact us', 'wellthemes')?></h2><hr />
			</div>
			
			<?php if(!empty($wt_contact_address)){?>
				<div class="address">
					<div class="icon"><i class="icon-map-marker"></i></div>
					<div class="right">
						<h6><?php _e('Our Address', 'wellthemes'); ?></h6>
						<p><?php echo $wt_contact_address; ?></p>
					</div>
				</div>
			<?php } ?>
			
			<?php 
				$contact_phone = wt_get_option('wt_contact_phone');	
				if(!empty($contact_phone)){?>
				<div class="phone">
					<div class="icon"><i class="icon-mobile-phone"></i></div>
					<div class="right">
						<h6><?php _e('Phone', 'wellthemes'); ?></h6>
						<p><?php echo $contact_phone; ?></p>
					</div>
				</div>
			<?php } ?>
			
			<?php 
				$visible_email = wt_get_option('wt_contact_visible_email');	
				if(!empty($visible_email)){?>
				<div class="email">
					<div class="icon"><i class="icon-envelope"></i></div>
					<div class="right">
						<h6><?php _e('Email', 'wellthemes'); ?></h6>
						<p><?php echo $visible_email; ?></p>
					</div>
				</div>
			<?php } ?>
			
			<?php if ( wt_get_option( 'wt_contact_show_social' ) == 1 ) { ?>
					<div class="social-links">
					
					<div class="title"><h6><?php _e('Get social with us', 'wellthemes'); ?></h6></div>
					
					<ul class="list">
						<?php if (wt_get_option( 'wt_gplus_url' )) { ?>
							<li><a class="gplus" href="<?php echo wt_get_option( 'wt_gplus_url' ); ?>">Google+</a></li>
						<?php } ?>
						
						<?php if (wt_get_option( 'wt_fb_url' )) { ?>
							<li><a class="fb" href="<?php echo wt_get_option( 'wt_fb_url' ); ?>">Facebook</a></li>
						<?php } ?>
								
						<?php if (wt_get_option( 'wt_twitter_url' )) { ?>
							<li><a class="twitter" href="<?php echo wt_get_option( 'wt_twitter_url' ); ?>">Twitter</a></li>
						<?php } ?>
						
						<?php if (wt_get_option( 'wt_linkedin_url' )) { ?>
							<li><a class="linkedin" href="<?php echo wt_get_option( 'wt_linkedin_url' ); ?>">Linkedin</a></li>
						<?php } ?>
						
						<?php if (wt_get_option( 'wt_dribbble_url' )) { ?>
							<li><a class="dribbble" href="<?php echo wt_get_option( 'wt_dribbble_url' ); ?>">Dribbble</a></li>
						<?php } ?>
						
						<?php if (wt_get_option( 'wt_pinterest_url' )) { ?>
							<li><a class="pinterest" href="<?php echo wt_get_option( 'wt_pinterest_url' ); ?>">Pinterest</a></li>
						<?php } ?>
						
						<?php if (wt_get_option( 'wt_instagram_url' )) { ?>
							<li><a class="instagram" href="<?php echo wt_get_option( 'wt_instagram_url' ); ?>">Instagram</a></li>
						<?php } ?>
						
						<?php if (wt_get_option( 'wt_youtube_url' )) { ?>
							<li><a class="youtube" href="<?php echo wt_get_option( 'wt_youtube_url' ); ?>">Youtube</a></li>
						<?php } ?>
						
						<?php if (wt_get_option( 'wt_rss_url' )) { ?>
							<li><a class="rss" href="<?php echo wt_get_option( 'wt_rss_url' ); ?>">Youtube</a></li>
						<?php } ?>
						
					</ul>
					
					</div>
				
			<?php } ?>
			
			
			
		</div><!-- /one-third -->
		
		<div class="contact-about col col-350 last">
			<div class="col-header">
				<h2><?php _e('Who we are', 'wellthemes')?></h2><hr />
			</div>
			
			<div class="contact-logo"
				<?php if (wt_get_option( 'wt_contact_logo' )) { ?>
					<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
						<img src="<?php echo wt_get_option( 'wt_contact_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
					</a>
				<?php } else{
					if (wt_get_option( 'wt_logo_url' )) { ?>
						<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>">
							<img src="<?php echo wt_get_option( 'wt_logo_url' ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
						</a>
					<?php }
				} ?>
			</div>
			
			<div class="contact-desc">			
				<?php 
					if (wt_get_option( 'wt_contact_text' )) { 
						echo wt_get_option( 'wt_contact_text' );
					} 
				?>
			</div>
			
		</div><!-- /one-third -->
		
			
	</div><!-- /contact-form-wrap -->
</div><!-- /content -->
<?php get_footer(); ?>