<?php

use Illuminate\Support\Str;
use PhpParser\Node\Stmt\Foreach_;

function userFullName()
{
    return auth()->user()->prenom." ". auth()->user()->nom ;
}

function setMenuClass($route,$classe){
    $routeActuel = request()->route()->getName();
    if(contains($routeActuel,$route)){
        return $classe;
    }
    return "";
}
function setMenuActive($route){
    $routeActuel = request()->route()->getName();
    if($routeActuel===$route){
        return "active";
    }
    return "";
}
function contains($container, $contenu){
    return Str::contains($container, $contenu);
}
function getprofilsName()
{
   $profilsname="";
   $i=0;
   foreach(auth()->user()->profils as $profil){
    $profilsname.= $profil->libProfil;
    if($i <sizeof(auth()->user()->profils)-1){
        $profilsname .=",";
    }
    $i++;
   }
   return $profilsname;
}
