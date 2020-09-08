<?php

function requireClass($classe)
{
	require_once('model/'.$classe.'.php');
}

spl_autoload_register('requireClass');
function ReloadSession()
{
	require('view/acceuilMembre.php');
}
function  NewMember($name, $prename, $birth, $sexe, $ville, $email, $passwd)
{
	if ($ville !== 'Ville') {
		
		$manager =  new InscriptionManager();
		$member = $manager->postNewMember($name, $prename, $birth, $sexe, $ville, $email, password_hash($passwd,PASSWORD_DEFAULT));

		if ($member === false) {
			throw new Exception('Impossible d\'ajouter le membre !');
		} 		
		else {
			upload();
			StartWebSite();
		}
	}
	else{
		throw new Exception("Veuillez choisir une ville valide");
		
	}
}
function ageCheck($date)
{
	$manager = new InscriptionManager();
	$age = $manager->checkAge($date);
	return $age;
}
function emailCheck($email)
{
	$manager = new InscriptionManager();
	$check = $manager->checkEmail($email);
	return $check;
	
}
function MemberLogin($email)
{
	$manager = new ConnexionManager();
	$check = $manager->VerifyMember($email);
	$AccInfos = $manager->CheckValidate($email);
	
	if(password_verify($_POST['passwd'],$check)) {
		if($AccInfos == 'true') {
			GetAllInfos($email);
			require('view/acceuilMembre.php');
		}
		else{
			throw new Exception('Compte Supprimé !');
		}
	} 
	else{
		throw new Exception('Mauvais email ou mot de passe ! ');
	}

}
function StartWebSite()
{
	$info = new InformationManager();
	$number = $info->CountMember();

	require('view/connexion.php');
}
function SignUp()
{
	require('view/inscription.php');
}
function AccountMember()
{
	if(!empty($_SESSION)) {
		require('view/PersonnalMember.php');
	}
	else {
		throw new Exception('Hophop on s\'arrete la mesieur le hackeur');
	}
}
function LogOutMember()
{	
	if (!empty($_SESSION)) {
		$_SESSION = array();
		$_POST = array();
		session_destroy();
		StartWebSite();
	}
	else{
		throw new Exception("Error Processing Request");
	}
}
function UpdateMember($name,$prename,$birth,$sexe,$city,$email,$id)
{
	$manager = new UpdateManager();
	$update = $manager->UpdateMember($name,$prename,$birth,$sexe,$city,$email,$id);

	if ($update === false) {
		throw new Exception('Impossible de mettre à jour le membre !');
	}
	else {
		$validate = 'Update réalisé avec succés ! :)';
		GetAllInfos($email);
		require('view/PersonnalMember.php');

		
	}
}
function AvoidEmailError($id)
{
	$manager = new UpdateManager();
	$result = $manager->AvoidEmailError($id);
	return $result;
}
function DeleteAccount()
{
	if (!empty($_SESSION)) {

		$manager = new DeleteManager();
		$delete = $manager->DeleteAccount($_SESSION['id']);

		if ($delete === false) {
			throw new Exception('Impossible de supprimer le compte');
		}
		else{
			LogOutMember();
		}
	}
	else{
		throw new Exception("Error Processing Request");	
	}
}
function GetBack()
{
	if (!empty($_SESSION)) {
		GetAllInfos($_SESSION['email']);
		require('view/acceuilMembre.php');
	}
	else{
		throw new Exception('Hophop on s\'arrete la mesieur le hackeur');
	}

}
function ChangePassWord($email)
{
	if(!empty($_POST)) {

		if($_POST['newpasswd'] == $_POST['checknewpasswd']) {
			$manager = new ConnexionManager();
			$check = $manager->VerifyMember($email);
			if(password_verify($_POST['oldpasswd'],$check)) {
				$update = new UpdateManager();
				$changepasswd = $update->ChangePassWord(password_hash($_POST['newpasswd'],PASSWORD_DEFAULT),$email);
				require('view/PersonnalMember.php');
				return $changepasswd;
			}
			else {
				throw new Exception('Ancien mot de passe erroné !');
			}
		}
		else{
			throw new Exception('Les nouveaux mot de passe ne sont pas identique !');
		}
	}
	else{
		throw new Exception('Error Processing Request');
		
	}
}
function SearchLove()
{
	require('view/Recherche.php');
}
function GetAllInfos($email)
{
	$info = new InformationManager();
	$_SESSION['nom'] = $info->GetName($email);
	$_SESSION['prenom'] = $info->GetPreName($email);
	$_SESSION['date'] = $info->GetBirthDay($email);
	$_SESSION['sexe'] = $info->GetSexe($email);
	$_SESSION['ville'] = $info->GetCity($email);
	$_SESSION['email'] = $info->GetEmail($email);
	$_SESSION['id'] = $info->GetId($email);
	return $_SESSION;
}
function ErrorPage($message)
{
	require('view/Error.php');
}
function SearchPeople($ville,$sexe,$tranche)
{
	$member = new SearchManager();
	$result = $member->SearchPeople($ville,$sexe,$tranche);
	require('view/Recherche.php');
}
function NamePhotos()
{
	$info = new InscriptionManager();
	$int = $info->NamePhotos();
	return $int;
}
function upload()
{
	if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0) {


		if ($_FILES['monfichier']['size'] <= 1000000) {


			$infosfichier = pathinfo($_FILES['monfichier']['name']);
			$extension_upload = $infosfichier['extension'];
			$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
			if (in_array($extension_upload, $extensions_autorisees)) {

				$info = new InscriptionManager();
				$int = $info->NamePhotos();
				move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/'.$int.'.jpg');

			}
		}
	}

}

/*
Le code suivant
	est tout mon code bonus
*/


function ChatClub($id)
{
	if (!empty($_SESSION)) {

		$manager = new ChatManager();
		$AllAuthor = $manager->getAuthor();
		$AllMessage = $manager->getMessage();
		$AllPhotos = $manager->getPhotos($id);
		require('view/ChatClub.php');
	}
	else{
		throw new Exception("Vous n'avez pas accés a cette page");
	}
}
function InsertMessage($id, $content)
{
	if (!empty($_SESSION)) {
		$manager = new ChatManager();
		$message = $manager->InsertMessage($id, $content);
		ChatClub($id);
	}
	else{
		throw new Exception("Vous n'avez pas accés a cette page");
		
	}
}
function SeeProfile($id)
{
	if (!empty($_SESSION)) {
		$manager = new ChatManager();
		$profile = $manager->getProfile($id);
			require('view/SeeProfile.php');
	}
	else{
		throw new Exception("Vous n'avez pas accés a cette page");
		
	}
}






































