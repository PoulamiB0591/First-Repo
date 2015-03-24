function logInWithYourFaceBookAccount()
{
    var siteWithProtocol = location.protocol+"//"+document.location.hostname;
    var controllerAction = '/ajaxcall/userinsertupdate';
    var ajaxUrl = siteWithProtocol+controllerAction;
    alert(ajaxUrl);
	 FB.login(function(response) {
	    FB.api('/me', function(response) {
	       if(response.verified == true)
           {
                console.log(response);
                window.location.href="https://test.scampaigns.com/Frontend";
           }
           else
           {
                console.log('test')
           }
           //$.ajax({
//                type:'POST',
//                data:{},
//                url:
//                success:function(data){}
//            });
           
    });
  },{scope: 'email,manage_pages'});
}