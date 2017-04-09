<?php
	# Start the session 
	session_start();
	
	# Autoload the required files
	require_once __DIR__ . '/vendor/autoload.php';

	# Set the default parameters
	$fb = new Facebook\Facebook([
	  'app_id' => '1267045453343192',
	  'app_secret' => '261db9d4506c28020c882d90e3e570aa',
	  'default_graph_version' => 'v2.8',
	]);
	$redirect = 'https://toiduveeb.cs.ut.ee/sisselogimine.php';


	# Create the login helper object
	$helper = $fb->getRedirectLoginHelper();

	# Get the access token and catch the exceptions if any
	try {
	  $accessToken = $helper->getAccessToken();
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
	  // When Graph returns an error
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  // When validation fails or other local issues
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
	}

	# If the 
	if (isset($accessToken)) {
	  	// Logged in!
	 	// Now you can redirect to another page and use the
  		// access token from $_SESSION['facebook_access_token'] 
  		// But we shall we the same page

		// Sets the default fallback access token so 
		// we don't have to pass it to each request
		$fb->setDefaultAccessToken($accessToken);

		try {
		  $response = $fb->get('/me?fields=email,name');
		  $userNode = $response->getGraphUser();
		}catch(Facebook\Exceptions\FacebookResponseException $e) {
		  // When Graph returns an error
		  echo 'Graph returned an error: ' . $e->getMessage();
		  exit;
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  // When validation fails or other local issues
		  echo 'Facebook SDK returned an error: ' . $e->getMessage();
		  exit;
		}


		// Print the user Details
		
		

		$image = 'https://graph.facebook.com/'.$userNode->getId().'/picture?width=200';
		               
                $_SESSION['id'] = $userNode->getName();
                $_SESSION['email'] = $userNode->getProperty('email');
                $_SESSION['image'] = 'https://graph.facebook.com/'.$userNode->getId().'/picture?width=200';
                include 'php/profiil.php';
		
	}else{
		$permissions  = ['email'];
		$loginUrl = $helper->getLoginUrl($redirect,$permissions);
		echo '<a href="' . $loginUrl . '"><img src="../meedia/UI/fb-login.png" width="200" height="40" alt="Logi Facebookiga" /></a>';
	}
?>