<html><head>
<title>Chess Teaching - Enseignement du Jeu d'Echecs</title>
<?php
include('metas.php');
?>
</head>
<body topmargin="0" leftmargin="0" rightmargin="0">

<?php
include('entete.php');
?>

<?php $cpt=0; ?>

<!-- Table de la page enti�re en dessous du bandeau -->
<table class="tablegenerale" align="center" border="0">
<tr><td>

<!-- INTRO -->

<table width="100%" align="center" cellpadding="5">
<tr>
<td>
	<table class="intro" align="center" cellspacing="0" cellpadding="2" border="0">
	<tr>
	<td valign="center">	
	<p align="center"><font size=5><strong>Projets 2021</strong></font></p>
	<ul>
	<li><a href="https://youtube.com/playlist?list=PLcy_l1Nkq8Pk3yjcYPPILTST_gGTjGYDb" target="_blank">Vid�os <em>Le conseil de la semaine</em></a></li>
	<li><a href="http://www.chess-teaching.com/projets/themes-et-conseils.php" target="_blank">Listes de th�mes et conseils pour s'entra�ner</a></li>
	<li><a href="http://www.chess-teaching.com/projets/championnats-du-monde.php" target="_blank">L'histoire des championnats du monde</a></li>
	</ul>
	</td>
	</tr>
	</table>
	
	<br>
	
	<table class="intro" align="center" cellspacing="0" cellpadding="6" border="0">
	<tr>
	<td valign="center">
	<div style="text-align: justify;">
	Enseignants du Jeu d��checs, ce site est un projet de mutualisation de nos connaissances, de nos outils, de nos exp�riences.<br>
	Bien enseigner les �checs est une t�che exigeante et complexe, avec une quantit� consid�rable d'informations � g�rer.<br>
	Partageons nos connaissances, nos ressources, �changeons, mettons en oeuvre des projets.
	<br><br>
	<b>Qui ?</b> Des entra�neurs, animateurs, enseignants, passionn�s, mais plus g�n�ralement tous ceux qui le souhaitent.<br>
	<b>Comment ?</b> En utilisant cette plateforme pour entrer en contact et centraliser les projets.
	<br><br>
	<a href="a_propos.php">En savoir plus</a>
	</div>
	</td>
	</tr>
	</table>
</td>
<td align="center" valign="top">
<font size=4>Livrets d'exercices recommand�s :<br>
(m�thode par �tapes)</font>
<br><br>
<a href="https://www.stappenmethode.nl/fr/index.php" target="_blank"><img src="img/methode_etapes.jpg" width="200" border="0"></a>
<br><br>
</td>
</tr>

<tr>
<td colspan="2" valign="middle" align="center">
<font size=4>Sites recommand�s :&nbsp;&nbsp;&nbsp;
<a href="https://www.europe-echecs.com/" target="_blank"><img align="middle" src="img/logo_EE.png" height="50" border="0"></a>&nbsp;&nbsp;&nbsp;
<a href="https://www.lichess.org/" target="_blank"><img align="middle" src="img/logo_lichess.png" height="60" border="0"></a>&nbsp;&nbsp;&nbsp;
<a href="https://www.chesstempo.com" target="_blank"><img align="middle" src="img/logo_chesstempo.jpg" height="60" border="0"></a>&nbsp;&nbsp;&nbsp;
<a href="https://www.chess.com" target="_blank"><img align="middle" src="img/logo_chesscom.jpg" height="50" border="0"></a>&nbsp;&nbsp;&nbsp;
<a href="https://www.chessgames.com" target="_blank"><img align="middle" src="img/logo_chessgames.jpg" height="50" border="0"></a>&nbsp;&nbsp;&nbsp;
<a href="https://chess24.com/en/watch/live-tournaments" target="_blank"><img align="middle" src="img/logo_chess24.jpg" height="50" border="0"></a></font>
</td>
</tr>
</table>

<br>

<!-- PROJETS -->
<table width=100% cellpadding=2>
<tr>
<td valign=top align=center>
<font size=5><b>Projets : appels � candidatures et avancements</b></font>
<br><br>

<table border="1" width="100%" cellpadding="4" cellspacing="0">
<tr style="font-weight: bold; text-align: center;">
<td width="2%">Id</td>
<td>Projet</td>
<td width="10%">Avancement</td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>Recensement : meilleurs livres</td>
<td style="text-align: center;"><a href="projets/meilleurs_livres.php">En ligne</a></td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td width="2%" style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>Articles : �loges et critiques de livres (en toutes langues)</td>
<td style="text-align: center;">Non attribu�</td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>Articles : �loges et critiques de logiciels, applications, etc.</td>
<td style="text-align: center;">Non attribu�</td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>Recensement/Culture/Contenu �chiqu�en : meilleures parties de l'histoire.</td>
<td style="text-align: center;"><a href="projets/meilleures_parties.php">En ligne</a></td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>D�veloppement web : interface permettant de se tester sur x positions sur un th�me donn�.</td>
<td style="text-align: center;">Non attribu�</td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>Culture : biographies de joueurs c�l�bres (avec ajout �ventuel d'une s�lection de leurs meilleures parties).</td>
<td style="text-align: center;"><a href="projets/biographies-joueurs.php">En ligne</a></td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>Culture : biographies de compositeurs �chiqu�ens c�l�bres (avec ajout �ventuel d'une s�lection de leurs meilleures �tudes).</td>
<td style="text-align: center;"><a href="projets/biographies-compositeurs.php">En ligne</a></td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>Contenu �chiqu�en : �tudes pratiques.</td>
<td style="text-align: center;">Non attribu�</td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>Contenu �chiqu�en : strat�gie �l�mentaire.</td>
<td style="text-align: center;">Non attribu�</td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>Recensement : sites de tactique.</td>
<td style="text-align: center;">A venir</td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>Contenu �chiqu�en : finales �l�mentaires</td>
<td style="text-align: center;">Non attribu�</td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>Contenu �chiqu�en : ouvertures �l�mentaires.</td>
<td style="text-align: center;">Non attribu�</td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>D�veloppement web : interface de recherche pour le classement FIDE.</td>
<td style="text-align: center;">A venir</td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>Culture : recensement d'articles �chiqu�ens culturels.</td>
<td style="text-align: center;">A venir</td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>Articles : �loges et critiques de vid�os (cha�nes Youtube, etc.)</td>
<td style="text-align: center;">Non attribu�</td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td></td>
<td style="text-align: center;"></td>
</tr>

</table>

</td>
</tr>
</table>

<br>

<!-- THEMATIQUES -->
<table width=100% cellpadding=2>
<tr>
<td valign=top align=center>
<font size=5><b>Th�matiques, philosophies</b></font>
<br><br>
<?php $cpt=0; ?>

<table border="1" width="100%" cellpadding="4" cellspacing="0">
<tr style="font-weight: bold; text-align: center;">
<td width="2%">Id</td>
<td>Th�matique</td>
<td width="10%">Avancement</td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>Streamings en fran�ais</td>
<td style="text-align: center;"><a href="projets/streamings.php">En ligne</a></td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td width="2%" style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>Plateformes �chiqu�ennes (jeu en ligne, cours, articles)</td>
<td style="text-align: center;">� venir</td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>Sites ressources pour l'enseignement du jeu d'�checs</td>
<td style="text-align: center;">� venir</td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td>Cha�nes Youtube en fran�ais</td>
<td style="text-align: center;">Non attribu�</td>
</tr>
<tr>
<?php $cpt=$cpt+1; ?>
<td style="text-align: center;"><?php echo "#$cpt"; ?></td>
<td></td>
<td style="text-align: center;"></td>
</tr>

</table>
<br>

<!-- DOCUMENTS -->
<font size=5><b>Derniers documents mis en ligne</b></font>
<br><br>
<table border="1" width="50%" cellpadding="4" cellspacing="0" style="font-size: 75%;">
<tr style="font-weight: bold; text-align: center;">
<td style="text-align: center;">
Document
</td>
<td style="text-align: center;">
Auteur
</td>
</tr>

<tr>
<td style="text-align: center;">
<a href="http://chess-teaching.com/SR/T+F%20vs%20T.pdf" target="_blank">Finales : T+F vs T (PDF)</a><br>
<a href="http://chess-teaching.com/SR/T+FvsT_cours_et_reponses.cbv" target="_blank">Finales : T+F vs T (CBV)</a><br>
</td>
<td style="text-align: center;">
Sylvain Ravot
</td>
</tr>

<tr>
<td style="text-align: center;">
<a href="docs/Entrainement_Tactique_Objectif_1500.pdf" target="_blank">Tactique : objectif 1500</a>
</td>
<td style="text-align: center;">
JEIP
</td>
</tr>

<tr>
<td style="text-align: center;">
<a href="docs/Entrainement_Tactique_Objectif_1300.pdf" target="_blank">Tactique : objectif 1300</a>
</td>
<td style="text-align: center;">
JEIP
</td>
</tr>

<tr>
<td style="text-align: center;">
<a href="docs/Elements_pour_progresser.pdf" target="_blank">El�ments pour progresser</a>
</td>
<td style="text-align: center;">
Jean-Paul Sebban
</td>
</tr>

<tr>
<td style="text-align: center;">
<a href="docs/Les_Principes_Classiques_de_la_Strategie.pdf" target="_blank">Principes de strat�gie</a>
</td>
<td style="text-align: center;">
Jean-Paul Sebban
</td>
</tr>

<tr>
<td style="text-align: center;">
<a href="docs/Principes_Finales_1.pdf" target="_blank">Principes de finales</a>
</td>
<td style="text-align: center;">
Jean-Paul Sebban
</td>
</tr>

<tr>
<td style="text-align: center;">
<a href="docs/Les_Champions_du_Monde_d�Echecs.pdf" target="_blank">Les champions du monde</a>
</td>
<td style="text-align: center;">
Jean-Paul Sebban
</td>
</tr>

<tr>
<td style="text-align: center;">
<a href="docs/etudes_Platov.pdf" target="_blank">Les fr�res Platov</a>
</td>
<td style="text-align: center;">
Sylvain Ravot
</td>
</tr>

<tr>
<td style="text-align: center;">
<a href="docs/DIFFE-DAFFE_2014_Cahier_Culture_3.pdf" target="_blank">Les champions du monde</a>
</td>
<td style="text-align: center;">
Sylvain Ravot
</td>
</tr>

<tr>
<td style="text-align: center;">
<a href="docs/DIFFE-DAFFE_2014_Cahier_Culture_4.pdf" target="_blank">Les championnes du monde</a>
</td>
<td style="text-align: center;">
Sylvain Ravot
</td>
</tr>

</table>
<br><br>

<!-- CONTRIBUER -->
Int�ress� pour participer � un projet ou une th�matique ? Une id�e � soumettre ?<br>
<b>contact@chess-teaching.com</b>
<br><br>
<a href="contribuer.php">Comment contribuer au projet ?</a>

</td>
</tr>
</table>


<br>



<!-- abonnement � la newsletter des entra�neurs 
<hr>
<table width='100%'><tr><td align=right>
<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://widget.mailjet.com/fd95e3dd95624215010c182d45173beac6139657.html" width="250" height="138"></iframe>
</td></tr></table>

<!-- fin table generale -->
</td></tr></table>


<?php
include('footer.php');
?>


<br>

</body>
</html>
