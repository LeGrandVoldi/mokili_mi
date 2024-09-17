<?php

namespace App\Http\Controllers;

use App\Models\utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use App\Mail\HelloMail;
use App\Models\anniversaire;
use App\Models\etat;
use App\Models\genre;
use App\Models\mesetoile;
use App\Models\photo;
use Exception;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class Controller_1 extends Controller
{
    public function error($error){
        $a = "voldi";
        return view('page_non-trouver');
    }
    public function index(Request $request){

           //pour verifier si la connexion est ouverte
            $se_Connecter =  Crypt::encrypt("se_Connecter");
            $acceder_accueil =  Crypt::encrypt("se_Connecter");
            return view('index',["se_Connecter"=>$se_Connecter,
                                 "acceder_accueil"=>$acceder_accueil]);
       
        
    }
    public function se_Connecter(Request $request){
        $urlNavigateur = $request->url();
        return view('se_connecter');

        
    }
    public function acceder_accueil(Request $request , utilisateur $utilisateur){
    $urlNavigateur = $request->url();
    if($this->connexionInternet() == true) {//pour verifier si la connexion est ouverte
        try{
            $prenom = Crypt::encrypt($request->prenom) ;
            $nom = Crypt::encrypt($request->nom) ;
            $email = $request->email ;
            $motacces = Crypt::encrypt($request->motacces) ;
            $MOkili_mi = Crypt::encrypt("/MOkili_mi") ;
            $code = mt_rand(10000, 99999);
            $nombreLignes = $utilisateur::where('email',$email)->count();
            if( $nombreLignes == 0 ){
                Mail::to($email)->send(new HelloMail($code));
                return view('verification_email',["code"=>$code,
                                                  "MOkili_mi"=>$MOkili_mi,
                                                  "prenom"=>$prenom,
                                                  "nom"=>$nom,
                                                  "email"=>Crypt::encrypt($email),
                                                  "motacces"=>$motacces]);
            }else{
                return redirect()->back()->with("email-utiliser","Email déjà utilisé");
            }
        }catch(Exception $e){
            return view('page_non-trouver',["url"=>$urlNavigateur]);
        }
        
    } else {
       return view('page_non-internet',["url"=>$urlNavigateur]);
    }
        
        
    }
    public function MOkili_mi(Request $request , etat $etat , genre $genre , anniversaire $anniversaire , utilisateur $utilisateur , mesetoile $mesetoile , photo $photo){
        $prenom = $request->prenom;
        $nom = $request->nom ;
        $email = $request->email ;
        $motacces = $request->motacces;

        $utilisateur->prenom = $prenom ;
        $utilisateur->nom = $nom ;
        $utilisateur->email = $email ;
        $utilisateur->mot_acces = $motacces ;
        $utilisateur->save();
        $id = $utilisateur->id;
        $nombreEtoile = $mesetoile::where("monID",$id)->count();

        $photo->monID = Crypt::encrypt($id) ;
        $photo->urlPhoto = Crypt::encrypt("vide") ;
        $photo->save();

        $anniversaire->monID = Crypt::encrypt($id) ;
        $anniversaire->jour = Crypt::encrypt("le") ;
        $anniversaire->mois = Crypt::encrypt("gra") ;
        $anniversaire->annee = Crypt::encrypt("nd") ;
        $anniversaire->save();

        $genre->monID = Crypt::encrypt($id) ;
        $genre->monGenre = Crypt::encrypt("legrand") ;
        $genre->save();

        $etat->monID = Crypt::encrypt($id) ;
        $etat->monEtat = Crypt::encrypt("legrand") ;
        $etat->save();

        return redirect()->route('mokili',['id'=>$id,'nombreEtoile'=>$nombreEtoile]);
        
    }
    public function MOkili_mi_Connexion(Request $request , utilisateur $utilisateur){
        $id = $request->id;
        return redirect()->route('MOkili_mi_Connexion',["id"=> $id]);  
    }
    public function nouveau_ma(Request $request){
        $urlNavigateur = $request->url();
        if ($this->connexionInternet() == true){
            return view('Mot_Acces_Oublier/nouveau-ma'); 
        }else {
            return view('page_non-internet',["url"=>$urlNavigateur]);
        }
          
    }
    public function enrgistrerNMA(Request $request , utilisateur $utilisateur){
        $id = $request->id;
        $ma = Crypt::encrypt($request->motacces) ;
        DB::update("UPDATE  utilisateurs SET mot_acces = '$ma' WHERE id = $id ");
        return redirect()->route('enrgistrerNMA',["id"=> $id]);  
    }
    public function nouveau_ma_envoyer(Request $request){
        $urlNavigateur = $request->url();
        if ($this->connexionInternet() == true){
            return view("MOkili/index");
        }else {
            return view('page_non-internet',["url"=>$urlNavigateur]);
        }
          
    }
    public function principale(Request $request){
       $urlNavigateur = $request->url();

        return view("MOkili/index");

    }
    public function seConnecter(Request $request , mesetoile $mesetoile){
        $email = $request->email;
        $motacces = $request->motacces;
        $verifierIdentiter = false ;
        $id = 0 ;
        
        $nombreUtilisateur = json_decode(json_encode(DB::select("SELECT * FROM utilisateurs")),true);// RECUPERER UTILISATEURS
        for($i = 0 ; $i < count($nombreUtilisateur) ; $i++ ){
             if(Crypt::decrypt($nombreUtilisateur[$i]["email"]) === $email && Crypt::decrypt($nombreUtilisateur[$i]["mot_acces"]) === $motacces){
                 $verifierIdentiter = true ;
                 $id = $nombreUtilisateur[$i]["id"];
             }
        }
        

        $nombreEtoile = $mesetoile::where("monID",$id)->count();
        if($verifierIdentiter == false){
            return redirect()->back()->with("non-trouver","Email ou Mot d'accès incorrecte");
        }else{
            return redirect()->route('allerAccueil',["id"=> $id,
                                                     "nombreEtoile"=> $nombreEtoile]);
        }


    }
    public function allerAccueil(Request $request){
           $urlNavigateur = $request->url();
            return view("MOkili/index");

        
    }
    public function motAccesOublier(Request $request){
        $urlNavigateur = $request->url();
        if ($this->connexionInternet() == true){
            return view("Mot_Acces_Oublier/index");
        }else {
            return view('page_non-internet',["url"=>$urlNavigateur]);
        }
        
    }
    public function verifierMAOEmail(Request $request , utilisateur $utilisateur){
        $urlNavigateur = $request->url();
        $id = 0 ;
        if ($this->connexionInternet() == true){
            $email = $request->email;
            $code = mt_rand(10000, 99999);
            $nombreLignes = 0 ;
            $MOkili_mi = Crypt::encrypt("/MOkili_mi_verifierEmail") ;
            $nombreUtilisateur = json_decode(json_encode(DB::select("SELECT * FROM utilisateurs")),true);
            for($i = 0 ; $i < count($nombreUtilisateur) ; $i++ ){
                if(Crypt::decrypt($nombreUtilisateur[$i]["email"]) === $email ){
                    $nombreLignes += 1 ;
                    $id = $nombreUtilisateur[$i]["id"] ;
                }
            }
            if( $nombreLignes != 0 ){
                Mail::to($email)->send(new HelloMail($code));
                return view("Mot_Acces_Oublier/verifierMail",["MOkili_mi"=>$MOkili_mi,
                                                              "id"=>$id,
                                                              "code"=>$code,
                                                              "email"=>Crypt::encrypt($email)]);
            }else{
                return redirect()->back()->with("non-trouver","Email introuvable");
            }
            
        }else {
            return view('page_non-internet',["url"=>$urlNavigateur]);
        }
        
    }
    public function connexionInternet(){// function acces internet
        $url = 'http://www.google.com';
        $headers = @get_headers($url);
        if($headers && strpos($headers[0], '200')){
              return true ;
        }else{
              return false ;
        }
    }
}
