<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">U_Bet</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<? echo WEBROOT . "user/index";?>">Home</a></li>
      <li><a href="<? echo WEBROOT . "user/pariez";?>">Paris en ligne</a></li>
      <li><a href="<? echo WEBROOT . "user/account";?>">Mon compte</a></li>
      <li><?php if($_SESSION['status'] != NULL){
       ?><a href="<? echo WEBROOT . "user/admi";?>"> Menu admin
       <? } ?></a></li>
       <li><a href="<? echo WEBROOT . "user/deconnex";?>">Deconnexion</a></li>
     </ul>
   </div>
 </nav>
 <div class="col-sm-6 col-sm-offset-3">
  <h1>Le plus beau du hockey, les plus grandes victoires!</h1>
</div>
<div class="row">
  <div class="col-sm-6 col-sm-offset-3">
    <div class="video-container">
      <iframe width="860" height="615" src="https://www.youtube.com/embed/OErBOWst2iA" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <h2>Ici achetez vos u_bet!</h2>
  <input type="hidden" name="cmd" value="_s-xclick">
  <input type="hidden" name="hosted_button_id" value="6RNT8A4HBBJRE">
  <input type="image"
  src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_buynow_107x26.png" alt="Buy Now">
  <img alt="" src="https://paypalobjects.com/en_US/i/scr/pixel.gif"
  width="1" height="1">
</form>
<p class="footer_p"> Copyright © U_bet. All right reserved. </p>

