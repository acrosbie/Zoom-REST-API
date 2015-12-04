<?php
/*Be sure to include sendZoomRequest.php*/
class zoomUser{
	/*Public functions for management of users*/
	public function createAUser(){		
		$createAUserArray = array();
		$createAUserArray['email'] = $_POST['userEmail'];
		$createAUserArray['type'] = $_POST['userType'];
		$createAUserArray['first_name'] = $_POST['userFirstName'];
		$createAUserArray['last_name'] = $_POST['userLastName'];
		$createAUserArray['disable_chat'] = $_POST['userDisableChat'];
		$createAUserArray['enable_e2e_encryption'] = $_POST['userEnableE2EEncryption'];
		$createAUserArray['enable_silent_mode'] = $_POST['userEnableSilentMode'];
		$createAUserArray['disable_group_hd'] = $_POST['userDisableGroupHD'];
		$createAUserArray['disable_recording'] = $_POST['userDisableRecording'];
		$createAUserArray['enable_cmr'] = $_POST['userEnableCmr'];
		$createAUserArray['enable_auto_recording'] = $_POST['userEnableAutoRecording'];
		$createAUserArray['enable_cloud_recording'] = $_POST['userEnableCloudRecording'];
		$createAUserArray['track_id'] = $_POST['userTrackID'];
		$createAUserArray['meeting_capacity'] = $_POST['userMeetingCapacity'];
		$createAUserArray['enable_webinar'] = $_POST['userEnableWebinar'];
		$createAUserArray['webinar_capacity'] = $_POST['userWebinarCapacity'];
		$createAUserArray['enable_large'] = $_POST['userEnableLarge'];
		$createAUserArray['large_capacity'] = $_POST['userLargeCapacity'];
		$createAUserArray['disable_feedback'] = $_POST['userDisableFeedback'];
		$createAUserArray['disable_jbh_reminder'] = $_POST['userDisableJBHReminder'];
		$createAUserArray['dept'] = $_POST['userDept'];
		return $this->$sendZoomRequest->$sendRequest('user/create', $createAUserArray);
	}   

	public function autoCreateAUser(){
		$autoCreateAUserArray = array();
		$autoCreateAUserArray['email'] = $_POST['userEmail'];
		$autoCreateAUserArray['type'] = $_POST['userType'];
		$autoCreateAUserArray['first_name'] = $_POST['userFirstName'];
		$autoCreateAUserArray['last_name'] = $_POST['userLastName'];
		$autoCreateAUserArray['disable_chat'] = $_POST['userDisableChat'];
		$autoCreateAUserArray['enable_e2e_encryption'] = $_POST['userEnableE2EEncryption'];
		$autoCreateAUserArray['enable_silent_mode'] = $_POST['userEnableSilentMode'];
		$autoCreateAUserArray['disable_group_hd'] = $_POST['userDisableGroupHD'];
		$autoCreateAUserArray['disable_recording'] = $_POST['userDisableRecording']
		$autoCreateAUserArray['enable_cmr'] = $_POST['userEnableCmr'];
		$autoCreateAUserArray['enable_auto_recording'] = $_POST['userEnableAutoRecording'];
		$autoCreateAUserArray['enable_cloud_recording'] = $_POST['userEnableCloudRecording'];
		$autoCreateAUserArray['track_id'] = $_POST['userTrackID'];
		$autoCreateAUserArray['meeting_capacity'] = $_POST['userMeetingCapacity'];
		$autoCreateAUserArray['enable_webinar'] = $_POST['userEnableWebinar'];
		$autoCreateAUserArray['webinar_capacity'] = $_POST['userWebinarCapacity'];
		$autoCreateAUserArray['enable_large'] = $_POST['userEnableLarge'];
		$autoCreateAUserArray['large_capacity'] = $_POST['userLargeCapacity'];
		$autoCreateAUserArray['disable_feedback'] = $_POST['userDisableFeedback'];
		$autoCreateAUserArray['disable_jbh_reminder'] = $_POST['userDisableJBHReminder'];
		$autoCreateAUserArray['dept'] = $_POST['userDept'];
		return $this->$sendZoomRequest->sendRequest('user/autocreate', $autoCreateAUserArray);
	}

	public function custCreateAUser(){
		$custCreateAUserArray = array();
		$custCreateAUserArray['email'] = $_POST['userEmail'];
		$custCreateAUserArray['type'] = $_POST['userType'];
		$custCreateAUserArray['first_name'] = $_POST['userFirstName'];
		$custCreateAUserArray['last_name'] = $_POST['userLastName'];
		$custCreateAUserArray['disable_chat'] = $_POST['userDisableChat'];
		$custCreateAUserArray['enable_e2e_encryption'] = $_POST['userEnableE2EEncryption'];
		$custCreateAUserArray['enable_silent_mode'] = $_POST['userEnableSilentMode'];
		$custCreateAUserArray['disable_group_hd'] = $_POST['userDisableGroupHD'];
		$custCreateAUserArray['disable_recording'] = $_POST['userDisableRecording'];
		$custCreateAUserArray['enable_cmr'] = $_POST['userEnableCmr'];
		$custCreateAUserArray['enable_auto_recording'] = $_POST['userEnableAutoRecording'];
		$custCreateAUserArray['enable_cloud_recording'] = $_POST['userEnableCloudRecording'];
		$custCreateAUserArray['track_id'] = $_POST['userTrackID'];
		$custCreateAUserArray['meeting_capacity'] = $_POST['userMeetingCapacity'];
		$custCreateAUserArray['enable_webinar'] = $_POST['userEnableWebinar'];
		$custCreateAUserArray['webinar_capacity'] = $_POST['userWebinarCapacity'];
		$custCreateAUserArray['enable_large'] = $_POST['userEnableLarge'];
		$custCreateAUserArray['large_capacity'] = $_POST['userLargeCapacity'];
		$custCreateAUserArray['disable_feedback'] = $_POST['userDisableFeedback'];
		$custCreateAUserArray['disable_jbh_reminder'] = $_POST['userDisableJBHReminder'];
		$custCreateAUserArray['dept'] = $_POST['userDept'];
		return $this->$sendZoomRequest->sendRequest('user/custcreate', $custCreateAUserArray);
	}  

	public function preProvisioningSSOUser(){
		$preProvisioningSSOUserArray = array();
		$preProvisioningSSOUserArray['email'] = $_POST['userEmail'];
		$preProvisioningSSOUserArray['type'] = $_POST['userType'];
		$preProvisioningSSOUserArray['first_name'] = $_POST['userFirstName'];
		$preProvisioningSSOUserArray['last_name'] = $_POST['userLastName'];
		$preProvisioningSSOUserArray['enable_webinar'] = $_POST['userEnableWebinar'];
		$preProvisioningSSOUserArray['webinar_capacity'] = $_POST['userWebinarCapacity'];
		$preProvisioningSSOUserArray['enable_large'] = $_POST['userEnableLarge'];
		$preProvisioningSSOUserArray['large_capacity'] = $_POST['userLargeCapacity'];
		$preProvisioningSSOUserArray['dept'] = $_POST['userDept'];
		$preProvisioningSSOUserArray['pmi'] = $_POST['userPMI'];
		return $this->$sendZoomRequest->sendRequest('user/ssocreate', $preProvisioningSSOUserArray);
	}

	public function deleteAUser(){
		$deleteAUserArray = array();
		$deleteAUserArray['id'] = $_POST['userId'];
		return $this->$sendZoomRequest->sendRequest('user/delete', $deleteUserArray);
	}     

	public function listUsers(){
		$listUsersArray = array();
		$listUsersArray['page_size'] = $_POST['pageSize'];
		$listUsersArray['page_number'] = $_POST['pageNumber'];
		return $this->$sendZoomRequest->sendRequest('user/list', $listUsersArray);
	}   

	public function listPendingUsers(){
		$listPendingUsersArray = array();
		$listPendingUsersArray['page_size'] = $_POST['pageSize'];
		$listPendingUsersArray['page_number'] = $_POST['pageNumber'];
		return $this->$sendZoomRequest->sendRequest('user/pending', $listPendingUsersArray);
	}    

	public function getUserInfo(){
		$getUserInfoArray = array();
		$getUserInfoArray['id'] = $_POST['userId'];
		return $this->$sendZoomRequest->sendRequest('user/get',$getUserInfoArray);
	}   

	public function getUserInfoByEmail(){
		$getUserInfoByEmailArray = array();
		$getUserInfoByEmailArray['email'] = $_POST['userEmail'];
		$getUserInfoByEmailArray['login_type'] = $_POST['userLoginType'];
		return $this->$sendZoomRequest->sendRequest('user/getbyemail',$getUserInfoByEmailArray);
	}  

	public function updateUserInfo(){
		$updateUserInfoArray = array();
		$updateUserInfoArray['id'] = $_POST['userId'];
		$updateUserInfoAUserArray['type'] = $_POST['userType'];
		$updateUserInfoAUserArray['first_name'] = $_POST['userFirstName'];
		$updateUserInfoAUserArray['last_name'] = $_POST['userLastName'];
		$updateUserInfoAUserArray['disable_chat'] = $_POST['userDisableChat'];
		$updateUserInfoAUserArray['enable_e2e_encryption'] = $_POST['userEnableE2EEncryption'];
		$updateUserInfoAUserArray['enable_silent_mode'] = $_POST['userEnableSilentMode'];
		$updateUserInfoAUserArray['disable_group_hd'] = $_POST['userDisableGroupHD'];
		$updateUserInfoAUserArray['disable_recording'] = $_POST['userDisableRecording'];
		$updateUserInfoAUserArray['enable_cmr'] = $_POST['userEnableCmr'];
		$updateUserInfoAUserArray['enable_auto_recording'] = $_POST['userEnableAutoRecording'];
		$updateUserInfoAUserArray['enable_cloud_recording'] = $_POST['userEnableCloudRecording'];
		$updateUserInfoAUserArray['track_id'] = $_POST['userTrackID'];
		$updateUserInfoAUserArray['meeting_capacity'] = $_POST['userMeetingCapacity'];
		$updateUserInfoAUserArray['enable_webinar'] = $_POST['userEnableWebinar'];
		$updateUserInfoAUserArray['webinar_capacity'] = $_POST['userWebinarCapacity'];
		$updateUserInfoAUserArray['enable_large'] = $_POST['userEnableLarge'];
		$updateUserInfoAUserArray['large_capacity'] = $_POST['userLargeCapacity'];
		$updateUserInfoAUserArray['disable_feedback'] = $_POST['userDisableFeedback'];
		$updateUserInfoAUserArray['disable_jbh_reminder'] = $_POST['userDisableJBHReminder'];
		$updateUserInfoAUserArray['dept'] = $_POST['userDept'];
		return $this->$sendZoomRequest->sendRequest('user/update',$updateUserInfoArray);
	}  

	public function updateUserPassword(){
		$updateUserPasswordArray = array();
		$updateUserPasswordArray['id'] = $_POST['userId'];
		$updateUserPasswordArray['password'] = $_POST['userNewPassword'];
		return $this->$sendZoomRequest->sendRequest('user/updatepassword', $updateUserPasswordArray)
	}      

	public function setUserAssistant(){
		$setUserAssistantArray() = array();
		$setUserAssistantArray['id'] = $_POST['userId'];
		$setUserAssistantArray['host_email'] = $_POST['userEmail'];
		$setUserAssistantArray['assistant_email'] = $_POST['assistantEmail'];
		return $this->$sendZoomRequest->sendRequest('user/assistant/set', $setUserAssistantArray);
	}     

	public function deleteUserAssistant(){
		$deleteUserAssistantArray = array();
		$deleteUserAssistantArray['id'] = $_POST['userId'];
		$deleteUserAssistantArray['host_email'] = $_POST['userEmail'];
		$deleteUserAssistantArray['assistant_email'] = $_POST['assistantEmail'];
		return $this->$sendZoomRequest->sendRequest('user/assistant/delete',$deleteUserAssistantArray);
	}   

	public function revokeSSOToken(){
		$revokeSSOTokenArray = array();
		$revokeSSOTokenArray['id'] = $_POST['userId'];
		$revokeSSOTokenArray['email'] = $_POST['userEmail'];
		return $this->$sendZoomRequest->sendRequest('user/revoketoken', $revokeSSOTokenArray);
	}      

	public function deleteUserPermanently(){
		$deleteUserPermanentlyArray = array();
		$deleteUserPermanentlyArray['id'] = $_POST['userId'];
		$deleteUserPermanentlyArray['email'] = $_POST['userEmail'];
		return $this->$sendZoomRequest->sendRequest('user/permanentdelete', $deleteUserPermanentlyArray);
	}   

}
?>