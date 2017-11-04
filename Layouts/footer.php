<script src="https://www.gstatic.com/firebasejs/4.6.1/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBl4h7SkK30JszfkAoYXsOXCgHBBlNjB_0",
    authDomain: "dbase-6206-01.firebaseapp.com",
    databaseURL: "https://dbase-6206-01.firebaseio.com",
    projectId: "dbase-6206-01",
    storageBucket: "dbase-6206-01.appspot.com",
    messagingSenderId: "173142686947"
  };
  firebase.initializeApp(config);
</script>
<!-- </main> -->
<script>
  // creates the cool more info 
$( "div.card" ).hover(
  function() {
       $(this).find(".moreInfo").toggleClass("display");

    }
);
</script>

 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
 <script src="../../../../assets/js/vendor/popper.min.js"></script>
 <script src="../../../../dist/js/bootstrap.min.js"></script>
 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>