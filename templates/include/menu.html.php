<section id="sidebar">
<a href="#" class="brand">
<i class='bx bxs-smile'></i>
<span class="text">Quizz SA</span>
</a>
<ul class="side-menu top">
<li class="active">
<a href="#">
<i class='bx bxs-dashboard' ></i>
<span class="text">Dashboard</span>
</a>
</li>
<?php if(is_admin()):?>
<li>
<a href="#">
<i class='bx bxs-shopping-bag-alt' ></i>
<span class="text">Liste des Joueurs</span>
</a>
</li>
<?php endif?>
</ul>
<ul class="side-menu">
<li>
<a href="#" class="logout">
<i class='bx bxs-log-out-circle' ></i>
<span class="text">Logout</span>
</a>
</li>
</ul>
</section>
<li>
<a href="<?=WEBROOT."?controller=securite&action=deconnexion"?>"
class="logout">
<i class='bx bxs-log-out-circle' ></i>
<span class="text">Logout</span>
</a>
</li>