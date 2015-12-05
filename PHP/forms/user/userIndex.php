<?php

if(isset($_POST["createAUserSubmit"])){
	$userClass = new zoomUser();
	$userClass->createAUser();
}

if(isset($_POST["autoCreateAUserSubmit"])){
	$userClass = new zoomUser();
	$userClass->autoCreateAUser();
}

if(isset($_POST["custCreateAUserSubmit"])){
	$userClass = new zoomUser();
	$userClass->custCreateAUser();
}

if(isset($_POST["preProvisioningSSOUserSubmit"])){
	$userClass = new zoomUser();
	$userClass->preProvisioningSSOUser();
}

if(isset($_POST["deleteAUserSubmit"])){
	$userClass = new zoomUser();
	$userClass->deleteAUser();
}

if(isset($_POST["listUsersSubmit"])){
	$userClass = new zoomUser();
	$userClass->listUsers();
}

if(isset($_POST["listPendingUsersSubmit"])){
	$userClass = new zoomUser();
	$userClass->listPendingusers();
}

if(isset($_POST["getUserInfoSubmit"])){
	$userClass = new zoomUser();
	$userClass->getUserInfo();
}

if(isset($_POST["getUserInfoByEmailSubmit"])){
	$userClass = new zoomUser();
	$userClass->getUserInfoByEmail();
}

if(isset($_POST["updateUserInfoSubmit"])){
	$userClass = new zoomUser();
	$userClass->updateUserInfo();
}

if(isset($_POST["updateUserPasswordSubmit"])){
	$userClass = new zoomUser();
	$userClass->updateUserPassword();
}

if(isset($_POST["setUserAssistantSubmit"])){
	$userClass = new zoomUser();
	$userClass->setUserAssistant();
}

if(isset($_POST["deleteUserAssistantSubmit"])){
	$userClass = new zoomUser();
	$userClass->deleteUserAssistant();
}

if(isset($_POST["revokeSSOTokenSubmit"])){
	$userClass = new zoomUser();
	$userClass->revokeSSOToken();
}

if(isset($_POST["deleteUserPermanentlySubmit"])){
	$userClass = new zoomUser();
	$userClass->deleteUserPermanently();
}

?>