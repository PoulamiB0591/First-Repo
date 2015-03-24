<?php
ini_set('display_errors', '1');

$con = mysql_connect("localhost","phpmyadmin","Testing1@") or die("cant connect");
$db = mysql_select_db("sfp_staging", $con) or die ("not selected");


@require_once ($_SERVER['DOCUMENT_ROOT']."/facePub/facebook/facebook.php");  
   $facebook = new Facebook(array(
			'appId' => '639311669508099',
			'secret' => '9344d8e06f2e515e20f58bbafb9242cd',
			'cookie' => true)
	     );
 $signed_request = $facebook->getSignedRequest();
    if(!$signed_request['page']['admin']){
	$_SESSION['onoff'] = 'off';
    }else{
	$_SESSION['onoff'] = 'on';
    }
    
 
 function parse_signed_request($signed_request, $secret) {
  list($encoded_sig, $payload) = explode('.', $signed_request, 2); 
  // decode the data
  $sig = base64_url_decode($encoded_sig);
  $data = json_decode(base64_url_decode($payload), true);

  if (strtoupper($data['algorithm']) !== 'HMAC-SHA256') {
    error_log('Unknown algorithm. Expected HMAC-SHA256');
    return null;
  }
  // check sig
  $expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
  if ($sig !== $expected_sig) {
    error_log('Bad Signed JSON signature!');
    return null;
  }
  return $data;
}

function base64_url_decode($input) {
  return base64_decode(strtr($input, '-_', '+/'));
}

$signed_request = $_POST["signed_request"];

$secret = '9344d8e06f2e515e20f58bbafb9242cd';

$str = parse_signed_request($signed_request,$secret);
//print_r($str);

if(is_array( $str )){
        
        extract($str);
       
        $page_id = $page["id"]; 
        //$page_id; 
       
       $sql = mysql_query("select * from  `userTemplate` where `pageId`='".$page_id."' and `appId` = '639311669508099'");
       
       $arrayData = mysql_fetch_assoc($sql);
      
       $protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
       
      // echo $protocol.$_SERVER['SERVER_NAME'].'/facebook/pageTab/'.$arrayData['facebook_number'].'/index.php';exit;
   // echo  file_get_contents($protocol.$_SERVER['SERVER_NAME'].'/facebook/pageTab/'.$arrayData['facebook_number'].'/index.php');

        }
?>
<iframe name="iframe2" src="<?php echo 'https://'.$_SERVER['SERVER_NAME'].'/facebook/pageTab/'.$arrayData['facebook_number'].'/index.php';?>" style="border: 0; width: 100%; height: 1349px;"></iframe>
<div id="fb-root"></div>
<script type="text/javascript">
	window.fbAsyncInit = function() {
		FB.init({
		  appId  : '898221286878657',
		  status : true,
		  cookie : true,
		  xfbml  : true,
          version    : 'v2.0'
		}); 
		FB.Canvas.setSize();
		FB.Canvas.setAutoResize();
		if (typeof window.onFacebookLoad == 'function')
			onFacebookLoad();
	};

	(function() {
		var e = document.createElement('script');
		e.src = 'https://connect.facebook.net/en_US/sdk.js';
		e.async = true;
		document.getElementById('fb-root').appendChild(e);
	}());
</script>

