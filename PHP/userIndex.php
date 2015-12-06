<?php
include('classes/zoomUser.php');
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
		if(isset($_POST['DisableRecording'])){
			$newCreateUser->setUserDisableRecording($_POST['DisableRecording']);
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
		if(isset($_POST['DisableRecording'])){
			$newAutoCreateUser->setUserDisableRecording($_POST['DisableRecording']);
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
		if(isset($_POST['DisableRecording'])){
			$newCustCreateUser->setUserDisableRecording($_POST['DisableRecording']);
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
			$newPreProvisioningSSOUser->setUserFirstName($_POST['FirstName']);
		}
		if(isset($_POST['LastName'])){
			$newPreProvisioningSSOUser->setUserLastName($_POST['LastName']);
		}
		if(isset($_POST['EnableWebinar'])){
			$newPreProvisioningSSOUser->setUserEnableWebinar($_POST['EnableWebinar']);
		}
		if(isset($_POST['WebinarCapacity'])){
			$newPreProvisioningSSOUser->setUserWebinarCapacity($_POST['WebinarCapacity']);
		}
		if(isset($_POST['EnableLarge'])){
			$newPreProvisioningSSOUser->setUserEnableLarge($_POST['EnableLarge']);
		}
		if(isset($_POST['LargeCapacity'])){
			$newPreProvisioningSSOUser->setUserLargeCapacity($_POST['LargeCapacity']);
		}
		if(isset($_POST['Dept'])){
			$newPreProvisioningSSOUser->setUserDept($_POST['Dept']);
		}
		if(isset($_POST['PMI'])){
			$newPreProvisioningSSOUser->setUserPMI($_POST['PMI']);
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
		$newDeleteAUser = new zoomUser();
		$newDeleteAUser->setUserID($_POST['ID']);
		$newDeleteAUser->deleteAUser();
		$newDeleteAUser = null;
	}
}
if(isset($_POST['listUsersSubmit'])){
	$newListUsers = new zoomUser();
	if(isset($_POST['PageSize'])){
		$newListUsers->setUserPageSize($_POST['PageSize']);
	}
	if(isset($_POST['PageNumber'])){
		$listUserClass->setUserPageNumber($_POST['PageNumber']);
	}
	$newListUsers->listUsers();
	$newListUsers = null;
}
if(isset($_POST['listPendingUsersSubmit'])){
	$newListPendingUsers = new zoomUser();
	if(isset($_POST['PageSize'])){
		$newListPendingUsers->setUserPageSize($_POST['PageSize']);
	}
	if(isset($_POST['PageNumber'])){
		$newListPendingUsers->setUserPageNumber($_POST['PageNumber']);
	}
	$newListPendingUsers->listPendingusers();
	$newListPendingUsers = null;
}
if(isset($_POST['getUserInfoSubmit'])){
	if(empty($_POST['ID'])){
		echo 'User ID empty. Cannot get info</br>';
		return false;
	}
	else{
		$newGetUserInfo = new zoomUser();
		$newGetUserInfo->setUserID($_POST['ID']);
		$newGetUserInfo->getUserInfo();
		$newGetUserInfo = null;
	}
}
if(isset($_POST['getUserInfoByEmailSubmit'])){
	if(empty($_POST['Email']) || empty($_POST['LoginType'])){
		echo 'Email or Login Type not set. Cannot gather info.</br>';
		return false;
	}
	else{
		$newGetUserInfoByEmail = new zoomUser();
		$newGetUserInfoByEmail->getUserInfoByEmail();
	}
}
if(isset($_POST['updateUserInfoSubmit'])){
	if(empty($_POST['ID'])){
		echo 'No ID submitted. Cannot update user!</br>';
		return false;
	}
	else{
		$newUpdateUserInfo = new zoomUser();
		$newUpdateUserInfo->setUserID($_POST['ID']);
		if(isset($_POST['Type'])){
			$newUpdateUserInfo->setUserType($_POST['Type']);
		}
		if(isset($_POST['FirstName'])){
			$newUpdateUserInfo->setUserFirstName($_POST['FirstName']);
		}
		if(isset($_POST['LastName'])){
			$newUpdateUserInfo->setUserLastName($_POST['LastName']);
		}
		if(isset($_POST['DisableChat'])){
			$newUpdateUserInfo->setUserDisableChat($_POST['DisableChat']);
		}
		if(isset($_POST['EnableE2E'])){
			$newUpdateUserInfo->setUserEnableE2E($_POST['EnableE2E']);
		}
		if(isset($_POST['EnableSilentMode'])){
			$newUpdateUserInfo->setUserEnableSilentMode($_POST['EnableSilentMode']);
		}
		if(isset($_POST['DisableGroupHD'])){
			$newUpdateUserInfo->setUserDisableGroupHD($_POST['DisableGroupHD']);
		}
		if(isset($_POST['DisableRecording'])){
			$newUpdateUserInfo->setUserDisableRecording($_POST['DisableRecording']);
		}
		if(isset($_POST['EnableCMR'])){
			$newUpdateUserInfo->setUserEnableCMR($_POST['EnableCMR']);
		}
		if(isset($_POST['EnableAutoRecording'])){
			$newUpdateUserInfo->setUserEnableAutoRecording($_POST['EnableAutoRecording']);
		}
		if(isset($_POST['EnableCloudAutoRecording'])){
			$newUpdateUserInfo->setUserEnableCloudAutoRecording($_POST['EnableCloudAutoRecording']);
		}
		if(isset($_POST['TrackID'])){
			$newUpdateUserInfo->setUserTrackID($_POST['TrackID']);
		}
		if(isset($_POST['MeetingCapacity'])){
			$newUpdateUserInfo->setUserMeetingCapacity($_POST['MeetingCapacity']);
		}
		if(isset($_POST['EnableWebinar'])){
			$newUpdateUserInfo->setUserEnableWebinar($_POST['EnableWebinar']);
		}
		if(isset($_POST['WebinarCapacity'])){
			$newUpdateUserInfo->setUserWebinarCapacity($_POST['WebinarCapacity']);
		}
		if(isset($_POST['EnableLarge'])){
			$newUpdateUserInfo->setUserEnableLarge($_POST['EnableLarge']);
		}
		if(isset($_POST['LargeCapacity'])){
			$newUpdateUserInfo->setUserLargeCapacity($_POST['LargeCapacity']);
		}
		if(isset($_POST['DisableFeedback'])){
			$newUpdateUserInfo->setUserDisableFeedback($_POST['DisableFeedback']);
		}
		if(isset($_POST['DisableJBHReminder'])){
			$newUpdateUserInfo->setUserDisableJBHReminder($_POST['DisableJBHReminder']);
		}
		if(isset($_POST['Dept'])){
			$newUpdateUserInfo->setUserDept($_POST['Dept']);
		}
		$newUpdateUserInfo->updateUserInfo();
		$newUpdateUserInfo = null;
	}
}
if(isset($_POST['updateUserPasswordSubmit'])){
	if(empty($_POST['ID']) || empty($_POST['Password'])){
		echo 'ID or New Password Not Set. Cannot Update!</br>';
		return false;
	}
	else{
		$newUpdateUserPassword = new zoomUser();
		$newUpdateUserPassword->setUserPassword($_POST['Password']);
		$newUpdateUserPassword->setUserID($_POST['ID']);
		$newUpdateUserPassword->updateUserPassword();
		$newUpdateUserPassword = null;
	}
}
if(isset($_POST['setUserAssistantSubmit'])){
	if(empty($_POST['ID']) && empty($_POST['HostEmail'])){
		echo 'User ID or Email not set. Cannot Add Assistant!</br>';
		return false;
	}
	if(empty($_POST['AssistantEmail')){
		echo 'Assistant Email not set. Cannot Add Assistant!</br>';
		return false;
	}
	else{
		$newSetUserAssistantClass = new zoomUser();
		if(empty($_POST['ID'])){
			$newSetUserAssistant->setUserEmail($_POST['Email']);
		}
		else{
			$newSetUserAssistant->setUserID($_POST['ID']);
		}
		$newSetUserAssistant->setUserAssistantEmail($_POST['AssistantEmail']);
		$newSetUserAssistant->setUserAssistant();
		$newSetUserAssistant = null;
	}
}
if(isset($_POST['deleteUserAssistantSubmit'])){
	if(empty($_POST['ID']) && empty($_POST['HostEmail'])){
		echo 'User ID or Email not set. Cannot Delete Assistant!</br>';
		return false;
	}
	if(empty($_POST['AssistantEmail')){
		echo 'Assistant Email not set. Cannot Delete Assistant!</br>';
		return false;
	}
	else{
		$newDeleteUserAssistantClass = new zoomUser();
		if(empty($_POST['ID'])){
			$newDeleteUserAssistant->setUserEmail($_POST['Email']);
		}
		else{
			$newDeleteUserAssistant->setUserID($_POST['ID']);
		}
		$newDeleteUserAssistant->setUserAssistantEmail($_POST['AssistantEmail']);
		$newDeleteUserAssistant->deleteUserAssistant();
		$newDeleteUserAssistant = null;
	}
}
if(isset($_POST['revokeSSOTokenSubmit'])){
	if(empty($_POST['ID']) && $_POST['Email']){
		echo 'Email and ID not set. Cannot Revoke SSO Token!</br>';
		return false;
	}
	else{
		$newRevokeSSOToken = new zoomUser();
		if(empty($_POST['ID'])){
			$newRevokeSSOToken->setUserEmail($_POST['Email']);
		}
		else{
			$newRevokeSSOToken->setUserID($_POST['ID']);
		}
		$newRevokeSSOToken->revokeSSOToken();
		$newRevokeSSOToken = null;
	}
}
if(isset($_POST['deleteUserPermanentlySubmit'])){
	if(empty($_POST['ID']) && $_POST['Email']){
		echo 'Email and ID not set. Cannot permanently delete user!</br>';
		return false;
	}
	else{
		$newDeleteAUserPermanently = new zoomUser();
		if(empty($_POST['Email'])){
			$newDeleteAUserPermanently->setUserID($_POST['ID']);
		}
		else{
			$newDeleteAUserPermanently->setUserEmail($_POST['Email'])
		}
		$newDeleteAUserPermanently->deleteAUserPermanently();
		$newDeleteAUserPermanently = null;
	}
}
?>