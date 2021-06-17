<html>
<head>
   <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body>

<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark">

</body>	

<script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);

        var id = profile.getId();
        var name = profile.getName();
        var email = profile.getEmail();
        var token= id_token;

        window.location.href = "googleaccess.php?id="+id+"&nm="+name+"&ml="+email+"&tk="+token;

      };
    </script>

</html>