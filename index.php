<?php
// Include base script
require_once('admin/base.php');

// Choose our action:
if (isset($_GET['u'])) {
    // If a username is given, attempt to load the public collection
    $header = 'Location: collection/' . $_GET['u'];
    header($header);
} elseif($user->isAuthd()) {
    // If the user is logged in, direct to their collection
    header('Location: collection');
} elseif(!$user->isAuthd()) {
    // If the user is not logged in, and no username is set, show a login page

    // Define Page Title and initial class
    $pageTitle = 'Sign In';
	$pageClass = 'login system';
	//$webAppTesting = true;
	require_once('styles/php/header.php');

	$loginMsgClass = "";
	$loginMsgText = "";

	$loginMsgClass = "success";
	$loginMsgText = "Testing success";
	
	if(isset($_GET['action'])){

		//check the action
		switch ($_GET['action']) {
			case 'x10':
				$loginMsgClass = "error";
				$loginMsgText = "We've moved: Update your links";
				break;
			case 'active':
				$loginMsgClass = "success";
				$loginMsgText = "Account activated";
				break;
			case 'reset':
				$loginMsgClass = "success";
				$loginMsgText = "Reset link sent";
				break;
			case 'resetAccount':
				$loginMsgClass = "success";
				$loginMsgText = "Password reset";
				break;
			case 'manipulation':
				$loginMsgClass = "error";
				$loginMsgText = "Session Error. Please Sign In";
				break;
			case 'joined':
				$loginMsgClass = "success";
				$loginMsgText = "Success! Activation link sent";
				break;
			case 'erroractive':
				$loginMsgClass = "error";
				$loginMsgText = "Activation Error";
				break;
		}

	}

    // BELOW IS PULLED FROM V2 AS A BASIS, NOT FOR PRODUCTION USE
?>

<!-- The header will not be used for the login screen, but we have a blank one for compatibility -->
<header id="MainHeader" class="<?=$loginMsgClass?>"><div class="diagtitle"><?=$loginMsgText?></div></header>
<div class="vertAlignWrap">
	<div class="vertAlignCont">
		<div class="libLogo"></div>
		<form role="form" method="" action="" autocomplete="off">
			<?php
			//check for any errors
			if(isset($error)){
				foreach($error as $error){
					echo '<div class="errorMsg">'.$error.'</div>';
				}
			}


			?>
			<input type="text" name="username" id="username" placeholder="Username / Email" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1">
			<input type="password" name="password" id="password" placeholder="Password" tabindex="2"><input type="button" name="submit" onclick="login" value="❯" tabindex="3">
			<div class="g-signin2" data-onsuccess="onSignIn"  data-width="280" data-height="45" data-longtitle="true" tabindex="4"></div>
      		<div class="loginCheckbox"><input type="checkbox" name="keeplogin" id="keeplogin" tabindex="5" /><label for="keeplogin">Keep me signed in</label></div>
		</form>
	</div>
</div>
<footer id="LoginFooter">
	<div class="forgotbtn ftrleft">Forgot Password</div>
    <div class="registerbtn ftrright">Register</div>
</footer>

<?}?>
