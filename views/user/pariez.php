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
   <h7>Plus la cotte est haute, plus le gain sera important. </h7>
   <? foreach ($events as $event){ ?>
   <div id="evev">
     <div class="row">
       <h2><?= $event->nom_ev?></h2>
       <h2>Du :<?= $event->date_deb?> </h2>
       <h2>Au :<?= $event->date_fin?> </h2>
       <div class="col-sm-2 col-sm-offset-1">
        <form action=" <? echo WEBROOT . "user/add_betA/".$event->id;?>" method="post">
          <input type="number" name="miseA" min="1" max="500" placeholder="Equipe1">
          <button type="submit"  class="btn btn-default">Envoyer</button>
        </form>
      </div>
      <div class="col-sm-6">
        <table class="table">
         <thead>
           <tr>
             <th class="text-center"> <p><?= $event->team1?></p></th>
             <th class="text-center"><img src='<? echo WEBROOT . "assets/images/vs.png";?>' alt="VS" style="width:25%;"></th>
             <th class="text-center"> <p><?= $event->team2?></p></th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <td class="text-center"><?= $event->coteB?>%</td>
             <td class="text-center">:</td>
             <td class="text-center"><?= $event->coteA?>%</td>
           </tr>
         </tbody>
       </table>
     </div>
     <div class="col-sm-2 ">
      <form action=" <? echo WEBROOT . "user/add_betB/".$event->id;?>" method="post">
       <input type="number" name="miseB" min="1" max="500" placeholder="Equipe2">
       <button type="submit"  class="btn btn-default" >Envoyer</button>
     </form>
   </div>
 </div>
 <?php } ?>
</div>
</main>
<footer>
  <p class="footer_p"> Copyright © U_bet. All right reserved. </p>
</footer>
