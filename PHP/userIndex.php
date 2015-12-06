<?php
include('class/zoomUser.php');
if(isset($_POST['createAUserSubmit'])){
	$createAUserRequired = array('Email','Type');
	$createAUserError = false;
	/*Check Required Parameters*/
	foreach($createAUserRequired as $field){
		if(empty($_POST[$field])){
			$createAUserError = true;
		}
	}
	/*Error*/
	if($createAUserError){
		echo 'User Email or Type Not Set!</br>';
		return false;
	}
	/*Set Values and make call user/create*/
	else{
		$newCreateUser = new zoomUser();
		$newCreateUser->setUserEmail($_POST['Email']);
		$newCreateUser->setUserType($_POST['Type']);
		if(isset($_POST['FirstName'])){
			$newCreateUser->setUserFirstName($_POST['FirstName']});
		}
		if(isset($_POST['LastName'])){
			$newCreateUser->setUserLastName($_POST['LastName']);
		}
		if(isset($_POST['DisableChat'])){
			$newCreateUser->setUserDisableChat($_POST['DisableChat']);
		}
		if(isset($_POST['EnableE2E'])){
			$newCreateUser->setUserEnableE2E($_POST['EnableE2E']);
		}
		if(isset($_POST['EnableSilentMode'])){
			$newCreateUser->setUserEnableSilentMode($_POST['EnableSilentMode']);
		}
		if(isset($_POST['DisableGroupHD'])){
			$newCreateUser->setUserDisableGroupHD($_POST['DisableGroupHD']);
		}
		if(isset($_POST['EnableCMR'])){
			$newCreateUser->setUserEnableCMR($_POST['EnableCMR']);
		}
		if(isset($_POST['EnableAutoRecording'])){
			$newCreateUser->setUserEnableAutoRecording($_POST['EnableAutoRecording']);
		}
		if(isset($_POST['EnableCloudAutoRecording'])){
			$newCreateUser->setUserEnableCloudAutoRecording($_POST['EnableCloudAutoRecording']);
		}
		if(isset($_POST['TrackID'])){
			$newCreateUser->setUserTrackID($_POST['TrackID']);
		}
		if(isset($_POST['MeetingCapacity'])){
			$newCreateUser->setUserMeetingCapacity($_POST['MeetingCapacity']);
		}
		if(isset($_POST['EnableWebinar'])){
			$newCreateUser->setUserEnableWebinar($_POST['EnableWebinar']);
		}
		if(isset($_POST['WebinarCapacity'])){
			$newCreateUser->setUserWebinarCapacity($_POST['WebinarCapacity']);
		}
		if(isset($_POST['EnableLarge'])){
			$newCreateUser->setUserEnableLarge($_POST['EnableLarge']);
		}
		if(isset($_POST['LargeCapacity'])){
			$newCreateUser->setUserLargeCapacity($_POST['LargeCapacity']);
		}
		if(isset($_POST['DisableFeedback'])){
			$newCreateUser->setUserDisableFeedback($_POST['DisableFeedback']);
		}
		if(isset($_POST['DisableJBHReminder'])){
			$newCreateUser->setUserDisableJBHReminder($_POST['DisableJBHReminder']);
		}
		if(isset($_POST['Dept'])){
			$newCreateUser->setUserDept($_POST['Dept']);
		}
		$newCreateUser->createAUser();
		$newCreateUser = null;
	}
}
if(isset($_POST['autoCreateAUserSubmit'])){
	$autoCreateAUserRequired = array('Email','Type', 'Password');
	$autoCreateAUserError = false;
	/*Check Required Parameters*/
	foreach($autoCreateAUserRequired as $field){
		if(empty($_POST[$field])){
			$autoCreateAUserError = true;
		}
	}
	/*Error*/
	if($autoCreateAUserError){
		echo 'User Email or Type Not Set!</br>';
		return false;
	}
	/*Set Values and make call user/create*/
	else{
		$newAutoCreateUser = new zoomUser();
		$newAutoCreateUser->setUserEmail($_POST['Email']);
		$newAutoCreateUser->setUserType($_POST['Type']);
		$newAutoCreateUser->setUserPassword($_POST['Password']);
		if(isset($_POST['FirstName'])){
			$newAutoCreateUser->setUserFirstName($_POST['FirstName']});
		}
		if(isset($_POST['LastName'])){
			$newAutoCreateUser->setUserLastName($_POST['LastName']);
		}
		if(isset($_POST['DisableChat'])){
			$newAutoCreateUser->setUserDisableChat($_POST['DisableChat']);
		}
		if(isset($_POST['EnableE2E'])){
			$newAutoCreateUser->setUserEnableE2E($_POST['EnableE2E']);
		}
		if(isset($_POST['EnableSilentMode'])){
			$newAutoCreateUser->setUserEnableSilentMode($_POST['EnableSilentMode']);
		}
		if(isset($_POST['DisableGroupHD'])){
			$newAutoCreateUser->setUserDisableGroupHD($_POST['DisableGroupHD']);
		}
		if(isset($_POST['EnableCMR'])){
			$newAutoCreateUser->setUserEnableCMR($_POST['EnableCMR']);
		}
		if(isset($_POST['EnableAutoRecording'])){
			$newAutoCreateUser->setUserEnableAutoRecording($_POST['EnableAutoRecording']);
		}
		if(isset($_POST['EnableCloudAutoRecording'])){
			$newAutoCreateUser->setUserEnableCloudAutoRecording($_POST['EnableCloudAutoRecording']);
		}
		if(isset($_POST['TrackID'])){
			$newAutoCreateUser->setUserTrackID($_POST['TrackID']);
		}
		if(isset($_POST['MeetingCapacity'])){
			$newAutoCreateUser->setUserMeetingCapacity($_POST['MeetingCapacity']);
		}
		if(isset($_POST['EnableWebinar'])){
			$newAutoCreateUser->setUserEnableWebinar($_POST['EnableWebinar']);
		}
		if(isset($_POST['WebinarCapacity'])){
			$newAutoCreateUser->setUserWebinarCapacity($_POST['WebinarCapacity']);
		}
		if(isset($_POST['EnableLarge'])){
			$newAutoCreateUser->setUserEnableLarge($_POST['EnableLarge']);
		}
		if(isset($_POST['LargeCapacity'])){
			$newAutoCreateUser->setUserLargeCapacity($_POST['LargeCapacity']);
		}
		if(isset($_POST['DisableFeedback'])){
			$newAutoCreateUser->setUserDisableFeedback($_POST['DisableFeedback']);
		}
		if(isset($_POST['DisableJBHReminder'])){
			$newAutoCreateUser->setUserDisableJBHReminder($_POST['DisableJBHReminder']);
		}
		if(isset($_POST['Dept'])){
			$newAutoCreateUser->setUserDept($_POST['Dept']);
		}
		$newAutoCreateUser->autoCreateAUser();
		$newAutoCreateAUser = null;
	}

}
if(isset($_POST['custCreateAUserSubmit'])){
	$custCreateAUserRequired = array('Email','Type');
	$custCreateAUserError = false;
	/*Check Required Parameters*/
	foreach($custCreateAUserRequired as $field){
		if(empty($_POST[$field])){
			$custCreateAUserError = true;
		}
	}
	/*Error*/
	if($custCreateAUserError){
		echo 'User Email or Type Not Set!</br>';
		return false;
	}
	/*Set Values and make call user/create*/
	else{
		$newCustCreateUser = new zoomUser();
		$newCustCreateUser->setUserEmail($_POST['Email']);
		$newCustCreateUser->setUserType($_POST['Type']);
		if(isset($_POST['FirstName'])){
			$newCustCreateUser->setUserFirstName($_POST['FirstName']});
		}
		if(isset($_POST['LastName'])){
			$newCustCreateUser->setUserLastName($_POST['LastName']);
		}
		if(isset($_POST['DisableChat'])){
			$newCustCreateUser->setUserDisableChat($_POST['DisableChat']);
		}
		if(isset($_POST['EnableE2E'])){
			$newCustCreateUser->setUserEnableE2E($_POST['EnableE2E']);
		}
		if(isset($_POST['EnableSilentMode'])){
			$newCustCreateUser->setUserEnableSilentMode($_POST['EnableSilentMode']);
		}
		if(isset($_POST['DisableGroupHD'])){
			$newCustCreateUser->setUserDisableGroupHD($_POST['DisableGroupHD']);
		}
		if(isset($_POST['EnableCMR'])){
			$newCustCreateUser->setUserEnableCMR($_POST['EnableCMR']);
		}
		if(isset($_POST['EnableAutoRecording'])){
			$newCustCreateUser->setUserEnableAutoRecording($_POST['EnableAutoRecording']);
		}
		if(isset($_POST['EnableCloudAutoRecording'])){
			$newCustCreateUser->setUserEnableCloudAutoRecording($_POST['EnableCloudAutoRecording']);
		}
		if(isset($_POST['TrackID'])){
			$newCustCreateUser->setUserTrackID($_POST['TrackID']);
		}
		if(isset($_POST['MeetingCapacity'])){
			$newCustCreateUser->setUserMeetingCapacity($_POST['MeetingCapacity']);
		}
		if(isset($_POST['EnableWebinar'])){
			$newCustCreateUser->setUserEnableWebinar($_POST['EnableWebinar']);
		}
		if(isset($_POST['WebinarCapacity'])){
			$newCustCreateUser->setUserWebinarCapacity($_POST['WebinarCapacity']);
		}
		if(isset($_POST['EnableLarge'])){
			$newCustCreateUser->setUserEnableLarge($_POST['EnableLarge']);
		}
		if(isset($_POST['LargeCapacity'])){
			$newCustCreateUser->setUserLargeCapacity($_POST['LargeCapacity']);
		}
		if(isset($_POST['DisableFeedback'])){
			$newCustCreateUser->setUserDisableFeedback($_POST['DisableFeedback']);
		}
		if(isset($_POST['DisableJBHReminder'])){
			$newCustCreateUser->setUserDisableJBHReminder($_POST['DisableJBHReminder']);
		}
		if(isset($_POST['Dept'])){
			$newCustCreateUser->setUserDept($_POST['Dept']);
		}
		$newCustCreateUser->autoCreateAUser();
		$newCustCreateAUser = null;
	}

}
if(isset($_POST['preProvisioningSSOUserSubmit'])){
	$preProvisioningSSOUserRequired = array('Email', 'Type');
	$preProvisioningSSOUserError = false;
	foreach($preProvisionSSOUSER as $field){
		if(empty($_POST['$field'])({
			$preProvisioningSSOUserError = true;
		})
	}
	if($preProvisioningSSOUserError){
		echo 'Email or Type not set!</br>';
		return false;
	}
	else{
		$preProvisioningSSOUserClass = new zoomUser();
		$preProvisioningSSOUserClass->setUserEmail($_POST['Email']);
		$preProvisioningSSOUserClass->setUserType($_POST['Type']);
		if(isset($_POST['FirstName'])){
			$preProvisionSSOUserClass->setUserFirstName($_POST['FirstName']);
		}
		if(isset($_POST['LastName'])){
			$preProvisionSSOUserClass->setUserLastName($_POST['LastName']);
		}
		if(isset($_POST['EnableWebinar'])){
			$preProvisionSSOUserClass->setUserEnableWebinar($_POST['EnableWebinar']);
		}
		if(isset($_POST['WebinarCapacity'])){
			$preProvisionSSOUserClass->setUserWebinarCapacity($_POST['WebinarCapacity']);
		}
		if(isset($_POST['EnableLarge'])){
			$preProvisionSSOUserClass->setUserEnableLarge($_POST['EnableLarge']);
		}
		if(isset($_POST['LargeCapacity'])){
			$preProvisionSSOUserClass->setUserLargeCapacity($_POST['LargeCapacity']);
		}
		if(isset($_POST['Dept'])){
			$preProvisionSSOUserClass->setUserDept($_POST['Dept']);
		}
		if(isset($_POST['PMI'])){
			$preProvisionSSOUserClass->setUserPMI($_POST['PMI']);
		}
		$preProvisioningSSOUserClass->preProvisioningSSOUser();
		$preProvisioningSSOUserClass = null;
	}
}
if(isset($_POST['deleteAUserSubmit'])){
	if(empty($_POST['ID']){
		echo 'ID field for deleting user is empty!</br>';
	}
	else{
		$deleteAUserClass = new zoomUser();
		$deleteAUserClass->setUserID($_POST['ID']);
		$deleteAUserClass->deleteAUser();
		$deleteAUserClass = null;
	}
}
if(isset($_POST['listUsersSubmit'])){
	$listUsersClass = new zoomUser();
	if(isset($_POST['PageSize'])){
		$listUsersClass->setUserPageSize($_POST['PageSize']);
	}
	if(isset($_POST['PageNumber'])){
		$listUserClass->setUserPageNumber($_POST['PageNumber']);
	}
	$listUsersClass->listUsers();
	$listUsersClass = null;
}
if(isset($_POST['listPendingUsersSubmit'])){
	$listPendingUsersClass = new zoomUser();
	if(isset($_POST['PageSize'])){
		$listPendingUsersClass->setUserPageSize($_POST['PageSize']);
	}
	if(isset($_POST['PageNumber'])){
		$listPendingUsersClass->setUserPageNumber($_POST['PageNumber']);
	}
	$listPendingUsersClass->listPendingusers();
	$listPendingUsersClass = null;
}
if(isset($_POST['getUserInfoSubmit'])){
	if(empty($_POST['ID'])){
		echo 'User ID empty. Cannot get info</br>';
		return false;
	}
	else{
		$getUserInfoClass = new zoomUser();
		$getUserInfoClass->setUserID($_POST['ID']);
		$getUserInfoClass->getUserInfo();
		$getUserInfoClass = null;
	}
}
if(isset($_POST['getUserInfoByEmailSubmit'])){
	
	else{
		$getUserInfoClass = new zoomUser();
		$getUserInfoClass->setUserID($_POST['ID']);
		$userClass->getUserInfoByEmail();
	}
}
if(isset($_POST['updateUserInfoSubmit'])){
	$userClass = new zoomUser();
	$userClass->updateUserInfo();
}
if(isset($_POST['updateUserPasswordSubmit'])){
	$userClass = new zoomUser();
	$userClass->updateUserPassword();
}
if(isset($_POST['setUserAssistantSubmit'])){
	$userClass = new zoomUser();
	$userClass->setUserAssistant();
}
if(isset($_POST['deleteUserAssistantSubmit'])){
	$userClass = new zoomUser();
	$userClass->deleteUserAssistant();
}
if(isset($_POST['revokeSSOTokenSubmit'])){
	$userClass = new zoomUser();
	$userClass->revokeSSOToken();
}
if(isset($_POST['deleteUserPermanentlySubmit'])){
	$userClass = new zoomUser();
	$userClass->deleteUserPermanently();
}
?>