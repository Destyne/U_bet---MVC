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
   <div class="row main">
    <div class="main-login main-center">
      <h5>Créer des events</h5>
      <form  method="post" action="<? echo WEBROOT . "user/insert";?>">
        
        <div class="form-group">
          <label for="text" class="cols-sm-2 control-label">Equipe 1</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
              <input type="text" class="form-control" name="team1" id="email"  placeholder="Equipe 1"/>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="text" class="cols-sm-2 control-label">Equipe 2</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
              <input type="text" class="form-control" name="team2" id="username"  placeholder="Equipe 2"/>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="Date" class="cols-sm-2 control-label">Date de début</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
              <input type="Date" class="form-control" name="date_deb" id="pwd"  placeholder="YYYY-MM-DD"/>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="Date" class="cols-sm-2 control-label">Date de fin</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
              <input type="Date" class="form-control" name="date_fin" id="pwd"  placeholder="YYYY-MM-DD"/>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="text" class="cols-sm-2 control-label">Nom de l'event</label>
          <div class="cols-sm-10">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
              <input type="text" class="form-control" name="nom_ev" id="pwd"  placeholder="nom de l'event"/>
            </div>
          </div>
        </div>
        <div class="form-group ">
          <form action=" <? echo WEBROOT . "user/index";?>" method="post">
            <button type="submit"  class="btn btn-default">Envoyer</button>
          </form>
        </div>
      </form>
    </div>
  </div>






<!-- je veux faire quoi?
pouvoir parier une somme sur un match
retirer le credit du compte et l'ajouter sur la team ou la somme a était parié -->



