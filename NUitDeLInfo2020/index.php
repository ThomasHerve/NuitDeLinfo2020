<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', true);

include_once "db.php";
include_once "tools.php";
session_start();
include_once "Controller/route.php";


print "<p><p>test DTLUSER</p>";
include "model/DTLUsers.php";
$d=new DTLUsers();
$p=$d->getall();
print $p[0]->pseudo."\n";

$p2=$d->getbyid(2);
print $p2->pseudo."\n";

$p3=$d->getbyPseudo("snoopy");
print $p3->pseudo."\n";

print $d->setUsers("test1","test2");
print "ci vide :".$d->setUsers("test1","test2").": alors ok ";

print "</p>";

print "<p><p>test DTLCOM</p>";
include_once "model/DTLCom.php";
$c=new DTLCom();
$p=$c->getall();
print $p[0]->com."\n";

$p2=$c->getbyid(2);
print $p2->com."\n";

$p3=$c->getbyPlageId(2);
print $p3[0]->com."\n";

$p4=$c->getbyUserId(2);
print $p4[2]->com."\n";

print $c->setCom("complop",1,1,3,2,1);
print "</p>";


print "<p><p>test DTLplage</p>";
include_once "model/DTLPlage.php";
$a=new DTLPlage();
$c=$a->getall();

print $c[0]->nom_plage."\n";

$c1=$a->getbyid(2);
print $c2->nom_plage."\n";
print "</p>";
