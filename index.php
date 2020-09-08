<?php
require('controller/frontend.php');
session_start();
try{
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'addMember') {
			if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['date']) && !empty($_POST['sexe']) && !empty($_POST['ville']) && !empty($_POST['email']) && !empty($_POST['passwd']) && !empty($_POST['checkpasswd'])) {
				if($_POST['passwd'] == $_POST['checkpasswd']) {
					if(ageCheck($_POST['date']) >= 18) {
						if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

							if(emailCheck($_POST['email']) == 0) {

								Newmember($_POST['nom'], $_POST['prenom'], $_POST['date'], $_POST['sexe'], $_POST['ville'], $_POST['email'],$_POST['passwd']);

							}
							else{
								throw new Exception('L\'email est déja pris !');
							}
						}
						else {
							throw new Exception('Veuillez entrer un email valide');
						}
					}
					else{
						throw new Exception('Vous êtes trop petit pour ce genre de site ');
					}
				}
				else{
					throw new Exception('Les mot de passe ne sont pas identique !');
				}
			} else{
				throw new Exception('Tous les champs ne sont pas remplis correctement !');
			}	
		} elseif($_GET['action'] == 'logMember') {
			if(!empty($_POST['email']) && !empty($_POST['passwd'])) {
				MemberLogin($_POST['email']);
			}
			else {
				throw New Exception('Veuillez remplir tout les champs !');
			} 
		} elseif($_GET['action'] == 'SignUp') {
			SignUp();
		} elseif($_GET['action'] == 'AccountMember') {	
				AccountMember();
		} elseif($_GET['action'] == 'LogOut') {
			LogOutMember();
		} elseif($_GET['action'] == 'UpdateMember') {
			if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['date']) && !empty($_POST['sexe']) && !empty($_POST['ville']) && !empty($_POST['email'])) {
				if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
					if(emailCheck($_POST['email']) == 0 || AvoidEmailError($_SESSION['id']) == $_POST['email']) {
						UpdateMember($_POST['nom'],$_POST['prenom'],$_POST['date'],$_POST['sexe'],$_POST['ville'],$_POST['email'],$_SESSION['id']);
					}
					else {
						throw new Exception('L\'email est déjà pris !');
					}

				} 
				else {
					throw new Exception('Veuillez entrer un email valide');
				}
			}
			else {
				throw new Exception ('Veuillez remplir tout les champs!');
			}	
		} elseif($_GET['action'] == 'DeleteAccount') {
			DeleteAccount();
		} elseif($_GET['action'] == 'GetBack') {
			GetBack();
		} elseif($_GET['action'] == 'ChangePassWord') {
			ChangePassWord($_SESSION['email']);
		} elseif($_GET['action'] == 'SearchLove') {
			SearchLove();
		} elseif($_GET['action'] == 'SearchPeople') {
			if(!empty($_POST['gender']) && !empty($_POST['year'])) {
				if($_POST['gender'] == 'sexe' || $_POST['year'] == 'tranche' || empty($_POST['checklist'])) {
					throw new Exception("Veuillez remplir tout les champs de recherche");
				}
				else{
					SearchPeople($_POST['checklist'],$_POST['gender'],$_POST['year']);
				}
			} 
			else {
				throw new Exception("Veuillez remplir tout les champs");
			}
		} elseif ($_GET['action'] == 'ChatClub') {
			if (!empty($_SESSION)) {
				ChatClub($_SESSION['id']);
			}
			else{
				throw new Exception("Vous n'avez pas acces a ce site");
				
			}
		} elseif ($_GET['action'] == 'InsertMessage') {
			InsertMessage($_SESSION['id'], $_POST['message']);

		} elseif ($_GET['action'] == 'SeeProfile') {
			if (isset($_GET['id'])) {
				SeeProfile($_GET['id']);
			}

		} elseif ($_GET['action'] == 'GetBackToChat') {
			ChatClub($_SESSION['id']);
		}

	} elseif (isset($_SESSION) && !empty($_SESSION)) {
		ReloadSession();
	}
	else {
		StartWebSite();
	}

}
catch(Exception $e) {
	ErrorPage($e->getMessage()); 
}