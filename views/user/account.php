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
 <main>
  <div class="row">
    <div class="main-login main-center">
      <h3>Information: mon compte</h3>

      <ul>
        <li>
         Email :
         <?php  echo $users->email; ?> 
       </li>
       <li>
         Solde :
         <?php  echo $users->token; ?>  
       </li>
       <li>
         Login :
         <?php  echo $users->login; ?>  
       </li>
     </ul>
   </div>
 </div>
 <div class="row main">
  <div class="main-login main-center">
    <h5>Modifier votre profil</h5>
    <form  method="post" action="<? echo WEBROOT . "user/update";?>">
      
      <div class="form-group">
        <label for="email" class="cols-sm-2 control-label">Your Email</label>
        <div class="cols-sm-10">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="username" class="cols-sm-2 control-label">Username</label>
        <div class="cols-sm-10">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="login" id="username"  placeholder="Enter your Username"/>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="password" class="cols-sm-2 control-label">Password</label>
        <div class="cols-sm-10">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
            <input type="password" class="form-control" name="pwd" id="pwd"  placeholder="Enter your Password"/>
          </div>
        </div>
      </div>
      <div class="form-group ">
        <button type="submit"  class="btn btn-default">Submit</button>

      </div>
    </form>
  </div>
</div>
</div>
</main>
<p class="footer_p"> Copyright © U_bet. All right reserved. </p>

