<?php 
class PaiementController extends Controller
{
    
    public function process($params)
    {
        // HTTP header
        //header("HTTP/1.0 404 Not Found");
        // HTML header
        $this->head['title'] = 'Paiement';
        $this->data["nom"] = (empty($_POST['nom'])) ? 'N/A' : $_POST['nom'];
        $this->data["nbrePersonne"] = (empty($_POST['nbrePersonne'])) ? 'N/A' : $_POST['nbrePersonne'];
        $this->data["tel"] = (empty($_POST['tel'])) ? 'N/A' : $_POST['tel'];
        $this->data["date"] = (empty($_POST['date'])) ? 'N/A' : $_POST['date'];
        $this->data["email"] = (empty($_POST['email'])) ? 'N/A' : $_POST['email'];
        $this->data["heure"] = (empty($_POST['heure'])) ? 'N/A' : $_POST['heure'];

        $this->data['post'] = $_POST;

        $prix = null;

        switch($this->data["nbrePersonne"]){
            case "1": 
                $prix = 100;
            break;
            case "2": 
                $prix = 200;
            break;
            case "3": 
                $prix = 300;
            break;
            case "4": 
                $prix = 400;
            break;
            case "5": 
                $prix = 500;
                //$this->data["prix"] = 500;
            break;

            default:  
            $this->data["prix"] = "N/A";
        }

        $this->data["prix"] = (is_null($prix)) ? 0 : $prix;


        $this->data["nbre"] = $_POST;
        // Sets the template
        $this->view = 'paiement';
    }
}