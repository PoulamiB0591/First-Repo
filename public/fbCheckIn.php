<html>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(function (){

	 (function(d, s, id) {
	        var js, fjs = d.getElementsByTagName(s)[0];
	        if (d.getElementById(id)) return;
	        js = d.createElement(s); js.id = id;
	        js.src = "//connect.facebook.net/en_US/sdk.js";
	        fjs.parentNode.insertBefore(js, fjs);
	      }(document, 'script', 'facebook-jssdk'));
	      
	      window.fbAsyncInit = function() {
	        FB.init({
	            appId      : '507520019301583',
	            cookie     : true,  // enable cookies to allow the server to access 
	            xfbml      : true,  // parse social plugins on this page
	            version    : 'v1.0' // use version 2.0
	          });
	      };
});

function checkin()
{
	FB.login(function(response) {
	    FB.api('/me', function(response) {

	       if(response.verified == true)
           {
                var fname = response.first_name;
                var lname = response.last_name;
                var email = response.email;
                var fid   = response.id;

                alert(fid);
                FB.api(
                	    "/"+fid+"/checkins","GET",{
                	        "access_token" : "CAAHNljZA3hM8BADe1k9YddTKC8KAxpkGQ6GhGt40XglKHkvDp7uMWpQkvaPzTSvsR7teyGZCH6NupU9boHQJW4SZBIMSZAEmAZC7WlZAcDVnFw9D3p2oi1nkQyToDM0N3sbuOrN07WcvivhkWG1OSXSVVtsYez1y9DTBZBYZBq8uffOCcaozOZAIxwiTNfKbHGW7XXmghz12oGDsbz2fSN2ZBB7MWQM6ewk44ZD",
                	    },
                	    function (response) {
                	      alert(JSON.stringify(response));
                	    }
                	);
                
           }
           else
           {
            window.location.reload();
                //console.log(response);
     
           }
    });
  },{scope: 'email,manage_pages,user_checkins'});
    
}

</script>
<input type="button" value="CHECK IN" onclick="checkin();"/>

</html>