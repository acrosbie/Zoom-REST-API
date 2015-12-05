<?php
include('sendZoomRequest.php');
class zoomUser{
	/*Public functions for management of users*/
	public function createAUser(){		
		$createAUserArray = array();
		$createAUserArray['email'] = $_POST['createAUserEmail'];
		$createAUserArray['type'] = $_POST['createAUserType'];
		$createAUserArray['first_name'] = $_POST['createAUserFirstName'];
		$createAUserArray['last_name'] = $_POST['createAUserLastName'];
		$createAUserArray['disable_chat'] = $_POST['createAUserDisableChat'];
		$createAUserArray['enable_e2e_encryption'] = $_POST['createAUserEnableE2EEncryption'];
		$createAUserArray['enable_silent_mode'] = $_POST['createAUserEnableSilentMode'];
		$createAUserArray['disable_group_hd'] = $_POST['createAUserDisableGroupHD'];
		$createAUserArray['disable_recording'] = $_POST['userDisableRecording'];
		$createAUserArray['enable_cmr'] = $_POST['createAUserEnableCmr'];
		$createAUserArray['enable_auto_recording'] = $_POST['createAUserEnableAutoRecording'];
		$createAUserArray['enable_cloud_recording'] = $_POST['createAUserEnableCloudRecording'];
		$createAUserArray['track_id'] = $_POST['createAUserTrackID'];
		$createAUserArray['meeting_capacity'] = $_POST['createAUserMeetingCapacity'];
		$createAUserArray['enable_webinar'] = $_POST['createAUuserEnableWebinar'];
		$createAUserArray['webinar_capacity'] = $_POST['createAUserWebinarCapacity'];
		$createAUserArray['enable_large'] = $_POST['createAUserEnableLarge'];
		$createAUserArray['large_capacity'] = $_POST['createAUserLargeCapacity'];
		$createAUserArray['disable_feedback'] = $_POST['createAUserDisableFeedback'];
		$createAUserArray['disable_jbh_reminder'] = $_POST['createAUserDisableJBHReminder'];
		$createAUserArray['dept'] = $_POST['createAUserDept'];
		return $this->$sendZoomRequest->$sendRequest('user/create', $createAUserArray);
	}   

	public function autoCreateAUser(){
		$autoCreateAUserArray = array();
		$autoCreateAUserArray['email'] = $_POST['autoCreateAUserEmail'];
		$autoCreateAUserArray['type'] = $_POST['autoCreateAUserType'];
		$autoCreateAUserArray['first_name'] = $_POST['autoCreateAUserFirstName'];
		$autoCreateAUserArray['last_name'] = $_POST['autoCreateAUserLastName'];
		$autoCreateAUserArray['disable_chat'] = $_POST['autoCreateAUserDisableChat'];
		$autoCreateAUserArray['enable_e2e_encryption'] = $_POST['autoCreateAUserEnableE2EEncryption'];
		$autoCreateAUserArray['enable_silent_mode'] = $_POST['autoCreateAUserEnableSilentMode'];
		$autoCreateAUserArray['disable_group_hd'] = $_POST['autoCreateAUserDisableGroupHD'];
		$autoCreateAUserArray['disable_recording'] = $_POST['autoCreateAUserDisableRecording']
		$autoCreateAUserArray['enable_cmr'] = $_POST['autoCreateAUserEnableCmr'];
		$autoCreateAUserArray['enable_auto_recording'] = $_POST['autoCreateAUserEnableAutoRecording'];
		$autoCreateAUserArray['enable_cloud_recording'] = $_POST['autoCreateAUserEnableCloudRecording'];
		$autoCreateAUserArray['track_id'] = $_POST['autoCreateAUserTrackID'];
		$autoCreateAUserArray['meeting_capacity'] = $_POST['autoCreatAUserMeetingCapacity'];
		$autoCreateAUserArray['enable_webinar'] = $_POST['autoCreateAUserEnableWebinar'];
		$autoCreateAUserArray['webinar_capacity'] = $_POST['autoCreateAUserWebinarCapacity'];
		$autoCreateAUserArray['enable_large'] = $_POST['autoCreateAUserEnableLarge'];
		$autoCreateAUserArray['large_capacity'] = $_POST['autoCreateAUserLargeCapacity'];
		$autoCreateAUserArray['disable_feedback'] = $_POST['autoCreateAUserDisableFeedback'];
		$autoCreateAUserArray['disable_jbh_reminder'] = $_POST['autoCreateAUserDisableJBHReminder'];
		$autoCreateAUserArray['dept'] = $_POST['autoCreateAUserDept'];
		return $this->$sendZoomRequest->sendRequest('user/autocreate', $autoCreateAUserArray);
	}

	public function custCreateAUser(){
		$custCreateAUserArray = array();
		$custCreateAUserArray['email'] = $_POST['custCreateAUserEmail'];
		$custCreateAUserArray['type'] = $_POST['custCreateAUserType'];
		$custCreateAUserArray['first_name'] = $_POST['custCreateAUserFirstName'];
		$custCreateAUserArray['last_name'] = $_POST['custCreateAUserLastName'];
		$custCreateAUserArray['disable_chat'] = $_POST['custCreateAUserDisableChat'];
		$custCreateAUserArray['enable_e2e_encryption'] = $_POST['custCreateAUserEnableE2EEncryption'];
		$custCreateAUserArray['enable_silent_mode'] = $_POST['custCreateAUserEnableSilentMode'];
		$custCreateAUserArray['disable_group_hd'] = $_POST['custCreateAUserDisableGroupHD'];
		$custCreateAUserArray['disable_recording'] = $_POST['custCreateAUserDisableRecording'];
		$custCreateAUserArray['enable_cmr'] = $_POST['custCreateAUserEnableCmr'];
		$custCreateAUserArray['enable_auto_recording'] = $_POST['custCreateAUserEnableAutoRecording'];
		$custCreateAUserArray['enable_cloud_recording'] = $_POST['custCreateAUserEnableCloudRecording'];
		$custCreateAUserArray['track_id'] = $_POST['custCreateAUserTrackID'];
		$custCreateAUserArray['meeting_capacity'] = $_POST['custCreateAUserMeetingCapacity'];
		$custCreateAUserArray['enable_webinar'] = $_POST['custCreateAUserEnableWebinar'];
		$custCreateAUserArray['webinar_capacity'] = $_POST['custCreateAUserWebinarCapacity'];
		$custCreateAUserArray['enable_large'] = $_POST['custCreateAUserEnableLarge'];
		$custCreateAUserArray['large_capacity'] = $_POST['custCreateAUserLargeCapacity'];
		$custCreateAUserArray['disable_feedback'] = $_POST['custCreateAUserDisableFeedback'];
		$custCreateAUserArray['disable_jbh_reminder'] = $_POST['custCreateAUserDisableJBHReminder'];
		$custCreateAUserArray['dept'] = $_POST['custCreateAUserDept'];
		return $this->$sendZoomRequest->sendRequest('user/custcreate', $custCreateAUserArray);
	}  

	public function preProvisioningSSOUser(){
		$preProvisioningSSOUserArray = array();
		$preProvisioningSSOUserArray['email'] = $_POST['preProvisioningSSOUserEmail'];
		$preProvisioningSSOUserArray['type'] = $_POST['preProvisioningSSOUserype'];
		$preProvisioningSSOUserArray['first_name'] = $_POST['preProvisioningSSOUserFirstName'];
		$preProvisioningSSOUserArray['last_name'] = $_POST['preProvisioningSSOUserLastName'];
		$preProvisioningSSOUserArray['enable_webinar'] = $_POST['preProvisioningSSOUserEnableWebinar'];
		$preProvisioningSSOUserArray['webinar_capacity'] = $_POST['preProvisioningSSOUserWebinarCapacity'];
		$preProvisioningSSOUserArray['enable_large'] = $_POST['preProvisioningSSOUserEnableLarge'];
		$preProvisioningSSOUserArray['large_capacity'] = $_POST['preProvisioningSSOUserLargeCapacity'];
		$preProvisioningSSOUserArray['dept'] = $_POST['preProvisioningSSOUserDept'];
		$preProvisioningSSOUserArray['pmi'] = $_POST['preProvisioningSSOUserPMI'];
		return $this->$sendZoomRequest->sendRequest('user/ssocreate', $preProvisioningSSOUserArray);
	}

	public function deleteAUser(){
		$deleteAUserArray = array();
		$deleteAUserArray['id'] = $_POST['deleteAUserId'];
		return $this->$sendZoomRequest->sendRequest('user/delete', $deleteUserArray);
	}     

	public function listUsers(){
		$listUsersArray = array();
		$listUsersArray['page_size'] = $_POST['listUserPageSize'];
		$listUsersArray['page_number'] = $_POST['listUserPageNumber'];
		return $this->$sendZoomRequest->sendRequest('user/list', $listUsersArray);
	}   

	public function listPendingUsers(){
		$listPendingUsersArray = array();
		$listPendingUsersArray['page_size'] = $_POST['listPendingUsersPageSize'];
		$listPendingUsersArray['page_number'] = $_POST['listPendingUsersPageNumber'];
		return $this->$sendZoomRequest->sendRequest('user/pending', $listPendingUsersArray);
	}    

	public function getUserInfo(){
		$getUserInfoArray = array();
		$getUserInfoArray['id'] = $_POST['getUserInfoUserId'];
		return $this->$sendZoomRequest->sendRequest('user/get',$getUserInfoArray);
	}   

	public function getUserInfoByEmail(){
		$getUserInfoByEmailArray = array();
		$getUserInfoByEmailArray['email'] = $_POST['getUserInfoByEmailUserEmail'];
		$getUserInfoByEmailArray['login_type'] = $_POST['getUserInfoByEmailUserLoginType'];
		return $this->$sendZoomRequest->sendRequest('user/getbyemail',$getUserInfoByEmailArray);
	}  

	public function updateUserInfo(){
		$updateUserInfoArray = array();
		$updateUserInfoArray['id'] = $_POST['updateUserInfoId'];
		$updateUserInfoAUserArray['type'] = $_POST['updateUserInfoType'];
		$updateUserInfoAUserArray['first_name'] = $_POST['updateUserInfoFirstName'];
		$updateUserInfoAUserArray['last_name'] = $_POST['updateUserInfoLastName'];
		$updateUserInfoAUserArray['disable_chat'] = $_POST['updateUserInfoDisableChat'];
		$updateUserInfoAUserArray['enable_e2e_encryption'] = $_POST['updateUserInfoEnableE2EEncryption'];
		$updateUserInfoAUserArray['enable_silent_mode'] = $_POST['updateUserInfoEnableSilentMode'];
		$updateUserInfoAUserArray['disable_group_hd'] = $_POST['updateUserInfoDisableGroupHD'];
		$updateUserInfoAUserArray['disable_recording'] = $_POST['updateUserInfoDisableRecording'];
		$updateUserInfoAUserArray['enable_cmr'] = $_POST['updateUserInfoEnableCmr'];
		$updateUserInfoAUserArray['enable_auto_recording'] = $_POST['updateUserInfoEnableAutoRecording'];
		$updateUserInfoAUserArray['enable_cloud_recording'] = $_POST['updateUserInfoEnableCloudRecording'];
		$updateUserInfoAUserArray['track_id'] = $_POST['updateUserInfoTrackID'];
		$updateUserInfoAUserArray['meeting_capacity'] = $_POST['updateUserInfoMeetingCapacity'];
		$updateUserInfoAUserArray['enable_webinar'] = $_POST['updateUserInfoEnableWebinar'];
		$updateUserInfoAUserArray['webinar_capacity'] = $_POST['updateUserInfoWebinarCapacity'];
		$updateUserInfoAUserArray['enable_large'] = $_POST['updateUserInfoEnableLarge'];
		$updateUserInfoAUserArray['large_capacity'] = $_POST['updateUserInfoLargeCapacity'];
		$updateUserInfoAUserArray['disable_feedback'] = $_POST['updateUserInfoDisableFeedback'];
		$updateUserInfoAUserArray['disable_jbh_reminder'] = $_POST['updateUserInfoDisableJBHReminder'];
		$updateUserInfoAUserArray['dept'] = $_POST['updateUserInfoDept'];
		return $this->$sendZoomRequest->sendRequest('user/update',$updateUserInfoArray);
	}  

	public function updateUserPassword(){
		$updateUserPasswordArray = array();
		$updateUserPasswordArray['id'] = $_POST['updateUserPasswordId'];
		$updateUserPasswordArray['password'] = $_POST['updateUserPasswordNewPassword'];
		return $this->$sendZoomRequest->sendRequest('user/updatepassword', $updateUserPasswordArray)
	}      

	public function setUserAssistant(){
		$setUserAssistantArray() = array();
		$setUserAssistantArray['id'] = $_POST['setUserAssistantId'];
		$setUserAssistantArray['host_email'] = $_POST['setUserAssistantEmail'];
		$setUserAssistantArray['assistant_email'] = $_POST['setUserAssistantAssistantEmail'];
		return $this->$sendZoomRequest->sendRequest('user/assistant/set', $setUserAssistantArray);
	}     

	public function deleteUserAssistant(){
		$deleteUserAssistantArray = array();
		$deleteUserAssistantArray['id'] = $_POST['deleteUserAssistantId'];
		$deleteUserAssistantArray['host_email'] = $_POST['deleteUserAssistantEmail'];
		$deleteUserAssistantArray['assistant_email'] = $_POST['deleteUserAssistantAssistantEmail'];
		return $this->$sendZoomRequest->sendRequest('user/assistant/delete',$deleteUserAssistantArray);
	}   

	public function revokeSSOToken(){
		$revokeSSOTokenArray = array();
		$revokeSSOTokenArray['id'] = $_POST['revokeSSOTokenId'];
		$revokeSSOTokenArray['email'] = $_POST['revokeSSOTokenEmail'];
		return $this->$sendZoomRequest->sendRequest('user/revoketoken', $revokeSSOTokenArray);
	}      

	public function deleteUserPermanently(){
		$deleteUserPermanentlyArray = array();
		$deleteUserPermanentlyArray['id'] = $_POST['deleteUserPermanentlyId'];
		$deleteUserPermanentlyArray['email'] = $_POST['deleteUserPermanentlyEmail'];
		return $this->$sendZoomRequest->sendRequest('user/permanentdelete', $deleteUserPermanentlyArray);
	}   
}
?>