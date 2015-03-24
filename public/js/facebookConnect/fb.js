  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      var test = testAPI();
     //sendMail();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }
  //showing dialogue box using FB.ui
  
  $("#dialogue").click(function(){
       FB.ui({ method: 'apprequests', 
     message: 'My diaolog...'});
  });
  

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1484924788415270',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.0' // use version 2.0
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
       // facebookimg = 'https://graph.facebook.com/'+response.id+'/picture?type=large';
       document.getElementById('email').innerHTML =
        'This is your email , ' + response.email + '!';
        var user_id = response.id;     //for farthur use in other api
        var email1 = response.email;  
        
         //sending an email.........................
        
        
        
        //showing friend lists.................!!!!!!!!!!!!!!!!!!!
        
   FB.api('/me/frindlists', function(response) {             //frindlists instead of friends
    
          var friend_list = [];
          for(i = 0; i < response.data.length; i++) {
            friend_list.push(response.data[i].id);
            alert(response.data[i].id);
          }
          //user_friend_list = friend_list.join(",");
          alert("user id:" + user_id + "friend_list:" + friend_list.join(","));
   });
              
   FB.api('/me/picture',function(response) {
              //alert(response.data['url']);
              //$("#profile_pic").attr('src',response.data['url']);
              //alert($("#profile_pic").length);
              $("#profile_pic").html("<img src='" + response.data['url'] + "'>");
                          
          });    
    });
    
    return 1;
  }
  
  function sendMail() {
    
           sendGmail({
    to: 'champ0078.sen@gmail.com',
    from: 'arnab.delgence@gmail.com',
    subject: 'hi',
    message: 'My First Mail'
});

   var recipient = 'champ0078.sen@gmail.com',
     sender = 'arnab.delgence@gmail.com',
     subject   = 'Hi',
     message  = 'Hello Arnab';
     
     var sendGmail = function(opts){
    var str = 'http://mail.google.com/mail/?view=cm&fs=1'+
              '&to=' + opts.recipient +
              '&from=' + opts.sender +
              '&su=' + opts.subject +
              '&body=' + opts.message +
              '&ui=1';
    location.href = str;
}
    sendGmail({
       
       to: 'champ0078.sen@gmail.com',
       from: 'arnab.delgence@gmail.com',
       subject: 'Hi',
       message: 'Hello Arnab'
        
    });
    alert("Mail Send to");
         
  }
  
  
/**
 *    FB.login(function(response) {
 *    if (response.authResponse) {
 *      console.log('Welcome!  Fetching your information.... ');
 *      FB.api('/me', function(response) {
 *        console.log('Good to see you, ' + response.name + '.');
 *      });
 *    } else {
 *      console.log('User cancelled login or did not fully authorize.');
 *      document.getElementById('profile_pic').innerHTML =
 *         'Picture: ' + response.n ;
 *    }
 *  });
 */
             
    
/**
 *     FB.api(
 *     " ",
 *     function (response) {
 *       if (response && !response.error) {
 *         
 *         document.getElementById('friendlists').innerHTML =
 *         'users friendlists ' + response.name ;
 *         
 *       }
 *     }
 * );         
 *  
 */
 
/**
 *   FB.logout(function(response) {
 *         
 *     });
 *  
 */
 