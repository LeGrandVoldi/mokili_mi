<?php

namespace App\Http\Controllers;

use App\Models\anniversaire;
use App\Models\etat;
use App\Models\genre;
use App\Models\mesetoile;
use App\Models\photo;
use App\Models\theme;
use App\Models\utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class Controller_Ajax extends Controller
{
    public function verifierEmail(Request $request){
        $datas = array(
            array("valeur" => 0)
        );
        $email = $request->email ;
        $nombreUtilisateur = json_decode(json_encode(DB::select("SELECT email FROM utilisateurs")),true);
        for($i = 0 ; $i < count($nombreUtilisateur) ; $i++ ){
             if(Crypt::decrypt($nombreUtilisateur[$i]["email"]) === $email){
                $datas = array(
                    array("valeur" => 1)
                );
             }
        }
        
        
        return response()->json($datas);


    }
    public function enregistrerImage(Request $request , photo $photo){
        $datas = array(
            array("valeur" => 0)
        );
        $verifier = 0 ;
        $idCrypt = 0 ;
        $id = $request->monID ;
        $image =  $request->image;
        $nomPhotoProfil = 'maPhoto_'.strval($id).".".$image->getClientOriginalExtension();
        $image->move('photo_profil_MOkili',$nomPhotoProfil);
        $cheminVersMaPhoto = "photo_profil_MOkili/".$nomPhotoProfil;
        $cc = Crypt::encrypt(strval($cheminVersMaPhoto)) ;

        $nombrePhoto = json_decode(json_encode(DB::select("SELECT * FROM photos")),true);
        for($i = 0 ; $i < count($nombrePhoto) ; $i++ ){
             if(Crypt::decrypt($nombrePhoto[$i]["monID"]) == $id){
                $verifier = 1 ;
                $idCrypt = $nombrePhoto[$i]["monID"] ;
             }
        }
        if($verifier == 1){
            DB::update("UPDATE photos set urlPhoto = '$cc' WHERE monID = '$idCrypt'");
        }else{
            $photo->monID = $id ; 
            $photo->urlPhoto =  $cc ;
            $photo->save();
        }
        $datas = array(
            array("valeur" => 1)
        );
        return response()->json($datas);


    }
    public function ajouterTheme(Request $request , theme $theme){
        $datas = array(
            array("valeur" => 0)
        );
        $verifier = 0 ;
        $idCrypt = 0 ;
        $id = $request->monID ;
        $monTheme =  $request->monTheme;
        $monThemeCrypt = Crypt::encrypt($monTheme) ;

        $nombreTheme = json_decode(json_encode(DB::select("SELECT * FROM themes")),true);
        for($i = 0 ; $i < count($nombreTheme) ; $i++ ){
             if(Crypt::decrypt($nombreTheme[$i]["monID"]) == $id){
                $verifier = 1 ;
                $idCrypt = $nombreTheme[$i]["monID"] ;
             }
        }
        if($verifier == 1){
            DB::update("UPDATE themes set monTheme = '$monThemeCrypt' WHERE monID = '$idCrypt'");
        }else{
            $theme->monID = Crypt::encrypt($id);
            $theme->monTheme =  Crypt::encrypt($monTheme) ;
            $theme->save();
        }
    
        return response()->json($datas);


    }
    public function anniversaire(Request $request , anniversaire $anniversaire){
        
        $verifier = 0 ;
        $idCrypt = 0 ;
        $id = $request->monID ;

        $jours =  Crypt::encrypt($request->jours);
        $mois =  Crypt::encrypt($request->mois);
        $annee =  Crypt::encrypt($request->annee);

        $nombreAnniversaire = json_decode(json_encode(DB::select("SELECT * FROM anniversaires")),true);
        for($i = 0 ; $i < count($nombreAnniversaire) ; $i++ ){
             if(Crypt::decrypt($nombreAnniversaire[$i]["monID"]) == $id){
                $verifier = 1 ;
                $idCrypt = $nombreAnniversaire[$i]["monID"] ;
             }
        }
        if($verifier == 1){
            DB::update("UPDATE anniversaires set jour = '$jours' , mois = '$mois' , annee = '$annee' WHERE monID = '$idCrypt'");
        }else{
            $anniversaire->monID = Crypt::encrypt($id);
            $anniversaire->jour = $jours  ;
            $anniversaire->mois = $mois  ;
            $anniversaire->annee = $annee  ;
            $anniversaire->save();
        }
        $datas = array(
            array("valeur" => 1)
        );
        return response()->json($datas);


    }
    public function etat(Request $request , etat $etatE){
        
        $verifier = 0 ;
        $idCrypt = 0 ;
        $id = $request->monID ;

        $etat =  Crypt::encrypt($request->etat);


        $nombreEtat = json_decode(json_encode(DB::select("SELECT * FROM etats")),true);
        for($i = 0 ; $i < count($nombreEtat) ; $i++ ){
             if(Crypt::decrypt($nombreEtat[$i]["monID"]) == $id){
                $verifier = 1 ;
                $idCrypt = $nombreEtat[$i]["monID"] ;
             }
        }
        if($verifier == 1){
            DB::update("UPDATE etats set monEtat = '$etat'  WHERE monID = '$idCrypt'");
        }else{
            $etatE->monID = Crypt::encrypt($id);
            $etatE->monEtat = $etat  ;
            $etatE->save();
        }
        $datas = array(
            array("valeur" => 1)
        );
        return response()->json($datas);


    }
    public function genre(Request $request , genre $genreE){
        
        $verifier = 0 ;
        $idCrypt = 0 ;
        $id = $request->monID ;

        $genre =  Crypt::encrypt($request->genre);


        $nombreGenre = json_decode(json_encode(DB::select("SELECT * FROM genres")),true);
        for($i = 0 ; $i < count($nombreGenre) ; $i++ ){
             if(Crypt::decrypt($nombreGenre[$i]["monID"]) == $id){
                $verifier = 1 ;
                $idCrypt = $nombreGenre[$i]["monID"] ;
             }
        }
        if($verifier == 1){
            DB::update("UPDATE genres set monGenre = '$genre'  WHERE monID = '$idCrypt'");
        }else{
            $genreE->monID = Crypt::encrypt($id);
            $genreE->monGenre = $genre  ;
            $genreE->save();
        }
        $datas = array(
            array("valeur" => 1)
        );
        return response()->json($datas);


    }
    public function rechercheEtoile(Request $request){
        $phrase =  $request->phrase;

        $utilisateurs = json_decode(json_encode(DB::select("SELECT * FROM utilisateurs")),true);
        for($i = 0 ; $i < count($utilisateurs) ; $i++ ){
              
        }

        $datas = array(
            array("valeur" => 1)
        );
        return response()->json($datas);


    }
    public function ajouterMesEtoiles(Request $request , mesetoile $mesetoile){
        $monID =  $request->monID;
        $sonID =  $request->sonID;


        DB::insert("INSERT INTO mesetoiles(monID,sonID) VALUES ($monID,$sonID) , ($sonID,$monID)");

        $datas = array(
            array("valeur" => 1)
        );
        return response()->json($datas);


    }
    
}
