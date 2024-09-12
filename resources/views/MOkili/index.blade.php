<?php
  use Illuminate\Support\Facades\Crypt;
  use Illuminate\Support\Facades\DB;
// Boucle infinie


    $id = $_GET["id"];
    $nombreEtoile = $_GET["nombreEtoile"];


    $maPhoto = "legrand";
    $nombrePhoto = json_decode(json_encode(DB::select("SELECT * FROM photos")),true);//RECUPERER PHOTO
    for($i = 0 ; $i < count($nombrePhoto) ; $i++ ){
        if($nombrePhoto[$i]["monID"] == $id ){
            $maPhoto = Crypt::decrypt($nombrePhoto[$i]["urlPhoto"]);
        }

    }
    $monAnniversaire = "legrand";
    $nombreAnniversaire = json_decode(json_encode(DB::select("SELECT * FROM anniversaires")),true);//RECUPERER MON ANNIVERSAIRE
    for($i = 0 ; $i < count($nombreAnniversaire) ; $i++ ){
            if(Crypt::decrypt($nombreAnniversaire[$i]["monID"]) === $id){
            $monAnniversaire = strval(Crypt::decrypt($nombreAnniversaire[$i]["jour"]))." ".strval(Crypt::decrypt($nombreAnniversaire[$i]["mois"]))." ".strval(Crypt::decrypt($nombreAnniversaire[$i]["annee"]));
            }
    }
    $monGenre = "legrand";
    $nombreGenre = json_decode(json_encode(DB::select("SELECT * FROM genres")),true);//RECUPERER MON GENRE
    for($i = 0 ; $i < count($nombreGenre) ; $i++ ){
            if(Crypt::decrypt($nombreGenre[$i]["monID"]) === $id){
            $monGenre = strval(Crypt::decrypt($nombreGenre[$i]["monGenre"]));
            }
    }
    $monEtat = "legrand";
    $nombreEtat = json_decode(json_encode(DB::select("SELECT * FROM etats")),true);//RECUPERER MON GENRE
    for($i = 0 ; $i < count($nombreEtat) ; $i++ ){
            if(Crypt::decrypt($nombreEtat[$i]["monID"]) === $id){
               $monEtat = strval(Crypt::decrypt($nombreEtat[$i]["monEtat"]));
            }
    }
    $theme = "legrand";
    $nombreTheme = json_decode(json_encode(DB::select("SELECT * FROM themes")),true);//RECUPERER MON THEME
    for($i = 0 ; $i < count($nombreTheme) ; $i++ ){
            if(Crypt::decrypt($nombreTheme[$i]["monID"]) == $id){
               $theme = Crypt::decrypt($nombreTheme[$i]["monTheme"]);
            }
    }
    $lesID = "-1";
    $mesetoiles = json_decode(json_encode(DB::select("SELECT * FROM mesetoiles where monID = $id ")),true);
    for( $i = 0 ; $i < count($mesetoiles) ; $i++){
        if($i == 0 ){
            $lesID = "";
            $lesID .= strval($mesetoiles[$i]['sonID']);
        }
        else{
            $lesID .= " ,".strval($mesetoiles[$i]['sonID']);
        }
        
              
    }
    $nomComplet = json_decode(json_encode(DB::select("SELECT * FROM utilisateurs where id = $id ")),true);//RECUPERER MON nom complet

    $utilisateurs = json_decode(json_encode(DB::select("SELECT util.id , util.prenom as prenom , util.nom as nom , ph.urlPhoto as photo , anniv.jour as jour , anniv.mois as mois , anniv.annee as annee , g.monGenre as genre , et.monEtat as etat
                                                        FROM   utilisateurs util , photos ph , anniversaires anniv , genres g , etats et 
                                                        WHERE  util.id = ph.id AND util.id = anniv.id AND util.id = g.id AND util.id = et.id AND util.id != $id AND util.id NOT IN ($lesID)  ;")),true);//RECUPERER MON THEME
    
    $prenomNoms = json_decode(json_encode(DB::select("SELECT * FROM utilisateurs util where util.id IN ($lesID) ")),true);//RECUPERER les noms & prénoms
    $photos = json_decode(json_encode(DB::select("SELECT * FROM photos ph where ph.id IN ($lesID) ")),true);//RECUPERER les photos
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <link rel="stylesheet" href={{ asset("css/transition.css") }}>
    <link rel="stylesheet" href={{ asset("css/Boostrap/bootstrap.min.css") }}  >
    <link rel="stylesheet" href={{ asset("css/css_page_accueil/bloc_message.css") }}>
    <link rel="stylesheet" href={{ asset("css/css_page_accueil/ligneMessage.css") }}>
    <link rel="stylesheet" href={{ asset("css/position_center.css") }}>
    <link rel="stylesheet" href={{ asset("css/Emojis/emojionearea.css") }}>
    <link rel="stylesheet" href={{ asset("css/css_page_accueil/style.css") }}>
    
    {{-- PHP / theme1  --}}
    @include('MOkili/PHP/theme1') 

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>MOkili MI</title>
</head>
<body id="body" class="transition">
     
    <input  type="text" value="<?=$id?>" id="monID" hidden>
    {{-- Bloc Modifier Anniversaire  --}}
    @include('MOkili/blocks/modifAnniv')
    {{-- Bloc Modifier Situation Amoureux  --}}
    @include('MOkili/blocks/modifSA')
    {{-- Bloc Modifier Genre  --}}
    @include('MOkili/blocks/modifGenre')
    {{-- Bloc Profil Etoile  --}}
    @include('MOkili/blocks/modifProfilEtoile')
    {{-- Bloc Nav  --}}
    @include('MOkili/nav')
    {{-- header  --}}
    @include('MOkili/parties/header')

    <main id="main" onclick="deNav1()" >
        <section id="main_1" class=" transition">
            {{-- BLOCK ENVOYER MESSAGE VIDE --}}
            <?php if( count($mesetoiles) == 0): ?>
                {{-- message vide  --}}
                @include('MOkili/messages/messageVide')
                <div id="voirEnvoyerMessageRemplis" class="transition">
                    {{-- message remplis 1  --}}
                    @include('MOkili/messages/messageRemplis1')
                    {{-- message remplis 2  --}}
                    @include('MOkili/messages/messageRemplis2')
                    {{-- message remplis 3  --}}
                    @include('MOkili/messages/messageRemplis3')
                </div>
                <style>
                    #voirEnvoyerMessageRemplis{
                        display: none
                    }
                </style>
            {{-- BLOCK ENVOYER MESSAGE REMPLIS --}}
            <?php else: ?>
                {{-- message vide  --}}
                @include('MOkili/messages/messageVide')
                <style>
                    #voirEnvoyerMessage{
                        display: none
                    }
                </style>
                <div id="voirEnvoyerMessageRemplis" class="transition">
                    {{-- message remplis 1  --}}
                    @include('MOkili/messages/messageRemplis1')
                    {{-- message remplis 2  --}}
                    @include('MOkili/messages/messageRemplis2')
                    {{-- message remplis 3  --}}
                    @include('MOkili/messages/messageRemplis3')
                </div>
            <?php endif; ?>
            {{-- BLOCK MON PROFIL --}}
            @include('MOkili/monProfil')
            {{-- BLOCK AJOUTER ETOILES  --}}
            @include('MOkili/ajouterEtoile')
        </section>
        <section id="main_2" class="HoriVerCenter transition" >
            @include('MOkili/parties/main2')          
        </section>
    </main>

    {{-- PHP / theme2  --}}
    @include('MOkili/PHP/theme2') 
    {{-- footer  --}}
    @include('MOkili/parties/footer')

    
