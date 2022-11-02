<?php
    if(isset($_POST['bekuld'])){


        if(!empty($_POST["gyarto"])){
            $gyarto = htmlspecialchars(trim($_POST["gyarto"]));
            
        }


        if(!empty($_POST["tipus"])){
            $tipus = htmlspecialchars(trim($_POST["tipus"]));
            
        }


        if(!empty($_POST["kapacitas"])){
            $kapacitas = htmlspecialchars(trim($_POST["kapacitas"]));
            
        }


        if(!empty($_POST["gyartasiev"])){
       
            $gyproba = $_POST["gyartasiev"];
            if(preg_match("/[0-9]{4,}/",$gyproba)){
                $gyartasiev = $gyproba;
               
            }
        }

        if(!empty($_POST["elerhetoseg"])){
       
            $eproba = $_POST["elerhetoseg"];
            if(preg_match("/[0-9]{9,}/",$eproba)){
                $telefon = $eproba;
               
            }
        }


        if(!empty($_POST["alvazszam"])){
            $alvazszam = htmlspecialchars(trim($_POST["alvazszam"]));
            
        }


        if(!empty($_POST["szin"])){
            $szin = htmlspecialchars(trim($_POST["szin"]));
            
        }


        
         
        try {
            $conn = new PDO("mysql:host=localhost;dbname=hf-7","root","");	// adatbázis kapcsolat PDO-val
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);		// kivétel alapú hibakezelés beállítása
        }
        catch (PDOException $e){
            echo "<p class='error'>Adatbázis kapcsolódási hiba: ".$e->getMessage()."</p>\n";		// PDO által dobott adatbázis hiba
            die;
        }
        catch (Exception $e){
            echo "<p class='error'>Hiba: ".$e->getMessage()."</p>\n";		// valamilyen más hiba
            die;
        }
    }

?>



    





