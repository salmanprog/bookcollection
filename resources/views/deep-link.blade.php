<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Deep Linking - {{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-itunes-app" content=""/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
  <p id="default_button"></p>
  <p id="ios_button"></p>
  <p id="android_button"></p>
  <script>
    let mobile;
    let schema = 'quickadd://add';
    let ios_id = 1453044284;
    let android_package = 'com.quickadd';
    let auto = false;
    let request_uri = '/deep-link';
    let http_user_aggent = navigator.userAgent.toLowerCase();
    if( http_user_aggent.indexOf("android") > -1 ){
      mobile = 'android';
    } else if( http_user_aggent.indexOf("iphone") > -1 || http_user_aggent.indexOf("ipod") > -1 || http_user_aggent.indexOf("ipad") > -1 ){
      mobile = 'ios';
    } else {
      mobile = 'web';
    }
    let ios_install     = 'https://apps.apple.com/us/app/body-spartan/id1529908029';
    let android_install = 'https://play.google.com/store/apps/details?id=com.bodyspartan';
    if( mobile == 'ios' ){
      let open = schema + ':/' + request_uri;
      $('[name="apple-itunes-app"]').attr('content','app-id='+ ios_id +', app-argument=' + open);
      $('#ios_button').html('Click the banner on top of this screen to <a href="'+ ios_install +'">install</a> our app or directly <a href="'+ open +'">open</a> this content in our app if you have it installed already.');
    } else if( mobile == 'android' ) {
      let open = 'intent:/' + request_uri + '#Intent;package=' + android_package + ';scheme=' + schema + ';launchFlags=268435456;end;';
      $('#android_button').html('Go ahead and <a href="'+ android_install +'">install</a> our app or directly <a href="'+ open +'">open</a> this content in our app if you have it installed already.<p>');
   } else {
      $('#default_button').html('Go to the <a href="'+ ios_install +'">App Store</a> or <a href="'+ android_install +'">Google Play</a> to install and open this content in our app.');
   }
    function open() {
        window.location = open;
        if( mobile == 'ios' ){
          setTimeout(function() {
              if (!document.webkitHidden) {
                  window.location = ios_install;
              }
          }, 25);
        }
    }
    if( auto ){
      open()
    }
  </script>
</body>
</html>
