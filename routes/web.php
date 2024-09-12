<?php

use App\Http\Controllers\Controller_1;
use App\Http\Controllers\Controller_Ajax;
use App\Mail\HelloMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Crypt;


// Route page de présentation
Route::get('/',[Controller_1::class,'index']);
// Mail::to('legrandvoldi@gmail.com')->send(new HelloMail());
// return view('welcome');



// Route page se connecter
Route::get("/seXXXCoYYYnnecZZZterAAA/{se_Connecter}",[Controller_1::class,"se_Connecter"]);
// Route page acces accueil
Route::post("/aXXXcceYYYderZZZpageAAAaccuBBBeilCCC/{acceder_accueil}",[Controller_1::class,"acceder_accueil"]);
// Route retour page acces 
Route::get("/aXXXcceYYYderZZZpageAAAaccuBBBeilCCC/{acceder_accueil}",[Controller_1::class,"index"]);
// Route page acces accueil PRINCIPALE 
Route::get("rdfdggfgfeaZnrZERgistrDZFnoHveuNjbhsdNhcfdjfdhfyJpdiI6IlphbVJMdmtDU0d0blpFRzlmYTFPUmc9PSIsInZhbHVlIjoiY3p5c2ZhRkwvYWx6cGVMc2lYQW0zM1ZXYXArdHlpeXpPMCtNNW1oaUJNWT0iLCJtYWMiOiI1ODViM2Q2M2NjNzhiNDFiMTBhNzVmNTczOTEyYTM5NDRiMWIzMzllMzBjOWRiZDAyYzljYTdiYzI1NWJmZGYyIiwidGFnIjoiIn0=",[Controller_1::class,"allerAccueil"])->name("allerAccueil");
Route::post("/mOXXXcliYYYderZZZliAAAaccumiCCC/{MOkili_mi}",[Controller_1::class,"MOkili_mi"]);
Route::get("JhsdNhcfdjfdhfyJpdiI6IlphbVJMdmtDU0d0blpFRzlmYTFPUmc9PSIsInZhbHVlIjoiY3p5c2ZhRkwvYWx6cGVMc2lYQW0zM1ZXYXArdHlpeXpPMCtNNW1oaUJNWT0iLCJtYWMiOiI1ODViM2Q2M2NjNzhiNDFiMTBhNzVmNTczOTEyYTM5NDRiMWIzMzllMzBjOWRiZDAyYzljYTdiYzI1NWJmZGYyIiwidGFnIjoiIn0=",[Controller_1::class,"principale"])->name("mokili");
// Route page acces nouveau mot d'accès
Route::post("/veZEZzsdZZZmOXXXcliYYYderZZZliAAAaccumiCCC/{MOkili_mi}",[Controller_1::class,"MOkili_mi_Connexion"]);
Route::get("noHveuNjbhsdNhcfdjfdhfyJpdiI6IlphbVJMdmtDU0d0blpFRzlmYTFPUmc9PSIsInZhbHVlIjoiY3p5c2ZhRkwvYWx6cGVMc2lYQW0zM1ZXYXArdHlpeXpPMCtNNW1oaUJNWT0iLCJtYWMiOiI1ODViM2Q2M2NjNzhiNDFiMTBhNzVmNTczOTEyYTM5NDRiMWIzMzllMzBjOWRiZDAyYzljYTdiYzI1NWJmZGYyIiwidGFnIjoiIn0=",[Controller_1::class,"nouveau_ma"])->name("MOkili_mi_Connexion");
// Route page acces enregistrer nouveau mot d'accès
Route::post("/enrgistrerNMA",[Controller_1::class,"enrgistrerNMA"]);
Route::get("eaZnrZERgistrDZFnoHveuNjbhsdNhcfdjfdhfyJpdiI6IlphbVJMdmtDU0d0blpFRzlmYTFPUmc9PSIsInZhbHVlIjoiY3p5c2ZhRkwvYWx6cGVMc2lYQW0zM1ZXYXArdHlpeXpPMCtNNW1oaUJNWT0iLCJtYWMiOiI1ODViM2Q2M2NjNzhiNDFiMTBhNzVmNTczOTEyYTM5NDRiMWIzMzllMzBjOWRiZDAyYzljYTdiYzI1NWJmZGYyIiwidGFnIjoiIn0=",[Controller_1::class,"nouveau_ma_envoyer"])->name("enrgistrerNMA");
// Route page Mot Acces Oublier
Route::get("/mot-acces-oublier",[Controller_1::class,"motAccesOublier"]);
// Route page acces accueil PRINCIPALE via une authentification
Route::post("/seConnecter",[Controller_1::class,"seConnecter"]);
// Route page acces verification email oublier
Route::post("/verifierMAOEmail",[Controller_1::class,"verifierMAOEmail"]);


// Route Ajax
Route::get("/verifierEmail",[Controller_Ajax::class,"verifierEmail"]);
Route::post("/enregistrerImage",[Controller_Ajax::class,"enregistrerImage"]);
Route::get("/ajouterTheme",[Controller_Ajax::class,"ajouterTheme"]);
Route::get("/anniversaire",[Controller_Ajax::class,"anniversaire"]);
Route::get("/etat",[Controller_Ajax::class,"etat"]);
Route::get("/genre",[Controller_Ajax::class,"genre"]);
Route::get("/rechercheEtoile",[Controller_Ajax::class,"rechercheEtoile"]);
Route::get("/ajouterMesEtoiles",[Controller_Ajax::class,"ajouterMesEtoiles"]);



// Route page non-trouver
Route::get('/{error}',[Controller_1::class,'error']);