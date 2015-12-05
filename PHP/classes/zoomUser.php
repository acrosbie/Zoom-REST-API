<?php
include('sendZoomRequest.php');
class zoomUser{
	/*Variables for zoomUser class and their default values*/
	private $userId = "";
	private $userEmail = "aidan@zoom.us";
	private $userType = 2;
	private $userFirstName = "Aidan";
	private $userLastName = "Crosbie";
	private $userDisableChat = false;
	private $userEnableE2E = true;
	private $userEnableSilentMode = false;
	private $userDisableGroupHD = true;
	private $userDisableRecording = false;
	private $userEnableCMR = false;
	private $userEnableAutoRecording = false;
	private $userEnableCloudRecording = false;
	private $userTrackID = "";
	private $userMeetingCapacity = 0;
	private $userEnableWebinar = false;
	private $userWebinarCapacity = 0;
	private $userEnableLarge = false;
	private $userLargeCapacity = 0;
	private $userDisableFeedback = false;
	private $userDisableJBHReminder = false;
	private $userDept = "";
	private $userPMI = 1234567891;
	private $userPageSize = 30;
	private $userPageNumber = 1;
	private $userLoginType = 100;
	private $userTimezone = "America/Los_Angeles";
	private $userPassword = "password";
	private $userAssistantEmail = "lukas@zoom.us";
	private $userPicFile = "http://d24cgw3uvb9a9h.cloudfront.net/static/33899/image/new/ZoomLogo.png";

	/*Get and Set $userEmail*/
	public function setUserEmail($userEmail){
		$this->userEmail = $userEmail;
	}

	public function getUserEmail(){
		return $this->userEmail;
	}

	/*Get and Set $userType*/
	public function setUserType($userType){
		$this->userType = $userType;
	}

	public function getUserType(){
		return $this->userType;
	}

	/*Get and Set $userFirstName*/
	public function setUserFirstName($userFirstName){
		$this->userFirstName = $userFirstName;
	}

	public function getUserFirstName(){
		return $this->userFirstName;
	}

	/*Get and Set $userLastName*/
	public function setUserLastName($userLastName){
		$this->userLastName = $userLastName;
	}

	public function getUserLastName(){
		return $this->userLastName;
	}

	/*Get and Set $userDisableChat*/
	public function setUserDisableChat($userDisableChat){
		$this->userDisableChat = $userDisableChat;
	}

	public function getUserDisableChat(){
		return $this->userDisableChat;
	}

	/*Get and Set $userEnableE2E*/
	public function setUserEnableE2E($userEnableE2E){
		$this->userEnableE2E = $userEnableE2E;
	}

	public function getUserEnableE2E(){
		return $this->userEnableE2E;
	}

	/*Get and Set $userEnableSilentMode*/
	public function setUserEnableSilentMode($userEnableSilentMode){
		$this->userEnableSilentMode = $userEnableSilentMode;
	}

	public function getUserEnableSilentMode(){
		return $this->userEnableSilentMode;
	}

	/*Get and Set $userDisableGroupHD*/
	public function setUserDisableGroupHD($userDisableGroupHD){
		$this->userDisableGroupHD = $userDisableGroupHD;
	}

	public function getUserDisableGroupHD(){
		return $this->userDisableGroupHD;
	}

	/*Get and Set $userEnableCMR*/
	public function setUserEnableCMR($userEnableCMR){
		$this->userEnableCMR = $userEnableCMR;
	}

	public function getUserEnableCMR(){
		return $this->userEnableCMR;
	}

	/*Get and Set $userEnableAutoRecording*/
	public function setUserEnableAutoRecording($userEnableAutoRecording){
		$this->userEnableAutoRecording = $userEnableAutoRecording;
	}

	public function getUserEnableAutoRecording(){
		return $this->userEnableAutoRecording;
	}

	/*Get and Set $userEnableCloudRecording*/
	public function setUser($userEnableCloudRecording){
		$this->userEnableCloudRecording = $userEnableCloudRecording;
	}

	public function getUserEnableCloudRecording(){
		return $this->userEnableCloudRecording;
	}

	/*Get and Set $userTrackID*/
	public function setUserTrackID($userTrackID){
		$this->userTrackID = $userTrackID;
	}

	public function getUserTrackID(){
		return $this->userTrackID;
	}

	/*Get and Set $userMeetingCapacity*/
	public function setUserMeetingCapacity($userMeetingCapacity){
		$this->userMeetingCapacity = $userMeetingCapacity;
	}

	public function getUserMeetingCapacity(){
		return $this->userMeetingCapacity;
	}

	/*Get and Set $userEnableWebinar*/
	public function setUserEnableWebinar($userEnableWebinar){
		$this->userEnableWebinar = $userEnableWebinar;
	}

	public function getUserEnableWebinar(){
		return $this->userEnableWebinar;
	}

	/*Get and Set $userWebinarCapacity*/
	public function setUserWebinarCapacity($userWebinarCapacity){
		$this->userWebinarCapacity = $userWebinarCapacity;
	}

	public function getUserWebinarCapacity(){
		return $this->userWebinarCapacity;
	}

	/*Get and Set $userEnableLarge*/
	public function setUserEnableLarge($userEnableLarge){
		$this->userEnableLarge = $userEnableLarge;
	}

	public function getUserEnableLarge(){
		return $this->userEnableLarge;
	}

	/*Get and Set $userLargeCapacity*/
	public function setUserLargeCapacity($userLargeCapacity){
		$this->userLargeCapacity = $userLargeCapacity;
	}

	public function getUserLargeCapacity(){
		return $this->userLargeCapacity;
	}

	/*Get and Set $userDisableFeedback */
	public function setUserDisableFeedback($userDisableFeedback){
		$this->userDisableFeedback = $userDisableFeedback;
	}

	public function getUserDisableFeedback (){
		return $this->userDisableFeedback;
	}

	/*Get and Set $userDisableJBHReminder*/
	public function setUserDisableJBHReminder($userDisableJBHReminder){
		$this->userDisableJBHReminder = $userDisableJBHReminder;
	}

	public function getUserDisableJBHReminder(){
		return $this->userDisableJBHReminder;
	}

	/*Get and Set $userDept*/
	public function setUserDept($userDept){
		$this->userDept = $userDept;
	}

	public function getUserDept(){
		return $this->userDept;
	}

	/*Get and Set $userPMI*/
	public function setUserPMI($userPMI){
		$this->userPMI = $userPMI;
	}

	public function getUserPMI(){
		return $this->userPMI;
	}

	/*Get and Set $userPageSize*/
	public function setUserPageSize($userPageSize){
		$this->userPageSize = $userPageSize;
	}

	public function getUserPageSize(){
		return $this->userPageSize;
	}

	/*Get and Set $userPageNumber*/
	public function setUserPageNumber($userPageNumber){
		$this->userPageNumber = $userPageNumber;
	}

	public function getUserPageNumber(){
		return $this->userPageNumber;
	}

	/*Get and Set $user*/
	public function setUserLoginType($userLoginType){
		$this->userLoginType = $userLoginType;
	}

	public function getUserLoginType(){
		return $this->userLoginType;
	}

	/*Get and Set $userTimezone*/
	public function setUserTimezone($userTimezone){
		$this->userTimezone = $userTimezone;
	}

	public function getUserTimezone(){
		return $this->userTimezone;
	}

	/*Get and Set $userPassword*/
	public function setUserPassword($userPassword){
		$this->userPassword = $userPassword;
	}

	public function getUserPassword(){
		return $this->userPassword;
	}

	/*Get and Set $userAssistantEmail*/
	public function setUser($userAssistantEmail){
		$this->userAssistantEmail = $userAssistantEmail;
	}

	public function getUserAssistantEmail(){
		return $this->userAssistantEmail;
	}

	/*Get and Set $user*/
	public function setUserPicFile($userPicFile){
		$this->userPicFile = $userPicFile;
	}

	public function getUserPicFile(){
		return $this->userPicFile;
	}


	/*Public functions for management of users*/
	public function createAUser(){		
		$createAUserArray = array();
		$createAUserArray['email'] = $userEmail;
		$createAUserArray['type'] = $userType;
		$createAUserArray['first_name'] = $userFirstName;
		$createAUserArray['last_name'] = $userLastName;
		$createAUserArray['disable_chat'] = $userDisableChat;
		$createAUserArray['enable_e2e_encryption'] = $userEnableE2E;
		$createAUserArray['enable_silent_mode'] = $userEnableSilentMode;
		$createAUserArray['disable_group_hd'] = $userDisableGroupHD;
		$createAUserArray['disable_recording'] = $userDisableRecording;
		$createAUserArray['enable_cmr'] = $userEnableCMR;
		$createAUserArray['enable_auto_recording'] = $userEnableAutoRecording;
		$createAUserArray['enable_cloud_recording'] = $userEnableCloudRecording;
		$createAUserArray['track_id'] = $userTrackID;
		$createAUserArray['meeting_capacity'] = $userMeetingCapacity;
		$createAUserArray['enable_webinar'] = $userEnableWebinar;
		$createAUserArray['webinar_capacity'] = $userWebinarCapacity;
		$createAUserArray['enable_large'] = $userEnableLarge;
		$createAUserArray['large_capacity'] = $userLargeCapacity;
		$createAUserArray['disable_feedback'] = $userDisableFeedback;
		$createAUserArray['disable_jbh_reminder'] = $userDisableJBHReminder;
		$createAUserArray['dept'] = $userDept;
		return $this->$sendZoomRequest->$sendRequest('user/create', $createAUserArray);
	}   

	public function autoCreateAUser(){
		$autoCreateAUserArray = array();
		$autoCreateAUserArray['email'] = $userEmail;
		$autoCreateAUserArray['type'] = $userType;
		$autoCreateAUserArray['first_name'] = $userFirstName;
		$autoCreateAUserArray['last_name'] = $userLastName;
		$autoCreateAUserArray['disable_chat'] = $userDisableChat;
		$autoCreateAUserArray['enable_e2e_encryption'] = $userEnableE2E;
		$autoCreateAUserArray['enable_silent_mode'] = $userEnableSilentMode;
		$autoCreateAUserArray['disable_group_hd'] = $userDisableGroupHD;
		$autoCreateAUserArray['disable_recording'] = $userDisableRecording;
		$autoCreateAUserArray['enable_cmr'] = $userEnableCMR;
		$autoCreateAUserArray['enable_auto_recording'] = $userEnableAutoRecording;
		$autoCreateAUserArray['enable_cloud_recording'] = $userEnableCloudRecording;
		$autoCreateAUserArray['track_id'] = $userTrackID;
		$autoCreateAUserArray['meeting_capacity'] = $userMeetingCapacity;
		$autoCreateAUserArray['enable_webinar'] = $userEnableWebinar;
		$autoCreateAUserArray['webinar_capacity'] = $userWebinarCapacity;
		$autoCreateAUserArray['enable_large'] = $userEnableLarge;
		$autoCreateAUserArray['large_capacity'] = $userLargeCapacity;
		$autoCreateAUserArray['disable_feedback'] = $userDisableFeedback;
		$autoCreateAUserArray['disable_jbh_reminder'] = $userDisableJBHReminder;
		$autoCreateAUserArray['dept'] = $userDept;
		return $this->$sendZoomRequest->sendRequest('user/autocreate', $autoCreateAUserArray);
	}

	public function custCreateAUser(){
		$custCreateAUserArray = array();
		$custCreateAUserArray['email'] = $userEmail;
		$custCreateAUserArray['type'] = $userType;
		$custCreateAUserArray['first_name'] = $userFirstName;
		$custCreateAUserArray['last_name'] = $userLastName;
		$custCreateAUserArray['disable_chat'] = $userDisableChat;
		$custCreateAUserArray['enable_e2e_encryption'] = $userEnableE2E;
		$custCreateAUserArray['enable_silent_mode'] = $userEnableSilentMode;
		$custCreateAUserArray['disable_group_hd'] = $userDisableGroupHD;
		$custCreateAUserArray['disable_recording'] = $userDisableRecording;
		$custCreateAUserArray['enable_cmr'] = $userEnableCMR;
		$custCreateAUserArray['enable_auto_recording'] = $userEnableAutoRecording;
		$custCreateAUserArray['enable_cloud_recording'] = $userEnableCloudRecording;
		$custCreateAUserArray['track_id'] = $userTrackID;
		$custCreateAUserArray['meeting_capacity'] = $userMeetingCapacity;
		$custCreateAUserArray['enable_webinar'] = $userEnableWebinar;
		$custCreateAUserArray['webinar_capacity'] = $userWebinarCapacity;
		$custCreateAUserArray['enable_large'] = $userEnableLarge;
		$custCreateAUserArray['large_capacity'] = $userLargeCapacity;
		$custCreateAUserArray['disable_feedback'] = $userDisableFeedback;
		$custCreateAUserArray['disable_jbh_reminder'] = $userDisableJBHReminder;
		$custCreateAUserArray['dept'] = $userDept;
		return $this->$sendZoomRequest->sendRequest('user/custcreate', $custCreateAUserArray);
	}  

	public function preProvisioningSSOUser(){
		$preProvisioningSSOUserArray = array();
		$preProvisioningSSOUserArray['email'] = $userEmail;
		$preProvisioningSSOUserArray['type'] = $userType;
		$preProvisioningSSOUserArray['first_name'] = $userFirstName;
		$preProvisioningSSOUserArray['last_name'] = $userLastName;
		$preProvisioningSSOUserArray['enable_webinar'] = $userEnableWebinar;
		$preProvisioningSSOUserArray['webinar_capacity'] = $userWebinarCapacity;
		$preProvisioningSSOUserArray['enable_large'] = $userEnableLarge;
		$preProvisioningSSOUserArray['large_capacity'] = $userLargeCapacity;
		$preProvisioningSSOUserArray['dept'] = $userDept;
		$preProvisioningSSOUserArray['pmi'] = $userPMI;
		return $this->$sendZoomRequest->sendRequest('user/ssocreate', $preProvisioningSSOUserArray);
	}

	public function deleteAUser(){
		$deleteAUserArray = array();
		$deleteAUserArray['id'] = $userId;
		return $this->$sendZoomRequest->sendRequest('user/delete', $deleteUserArray);
	}     

	public function listUsers(){
		$listUsersArray = array();
		$listUsersArray['page_size'] = $userPageSize;
		$listUsersArray['page_number'] = $userPageNumber;
		return $this->$sendZoomRequest->sendRequest('user/list', $listUsersArray);
	}   

	public function listPendingUsers(){
		$listPendingUsersArray = array();
		$listPendingUsersArray['page_size'] = $userPageSize;
		$listPendingUsersArray['page_number'] = $userPageNumber;
		return $this->$sendZoomRequest->sendRequest('user/pending', $listPendingUsersArray);
	}    

	public function getUserInfo(){
		$getUserInfoArray = array();
		$getUserInfoArray['id'] = $userId;
		return $this->$sendZoomRequest->sendRequest('user/get',$getUserInfoArray);
	}   

	public function getUserInfoByEmail(){
		$getUserInfoByEmailArray = array();
		$getUserInfoByEmailArray['email'] = $userEmail;
		$getUserInfoByEmailArray['login_type'] = $userLoginType;
		return $this->$sendZoomRequest->sendRequest('user/getbyemail',$getUserInfoByEmailArray);
	}  

	public function updateUserInfo(){
		$updateUserInfoArray = array();
		$updateUserInfoArray['id'] = $userId;
		$updateUserInfoAUserArray['type'] = $userType;
		$updateUserInfoAUserArray['first_name'] = $userFirstName;
		$updateUserInfoAUserArray['last_name'] = $userLastName;
		$updateUserInfoAUserArray['disable_chat'] = $userDisableChat;
		$updateUserInfoAUserArray['enable_e2e_encryption'] = $userEnableE2E;
		$updateUserInfoAUserArray['enable_silent_mode'] = $userEnableSilentMode;
		$updateUserInfoAUserArray['disable_group_hd'] = $$userDisableGroupHD;
		$updateUserInfoAUserArray['disable_recording'] = $userDisableRecording;
		$updateUserInfoAUserArray['enable_cmr'] = $userEnableCMR;
		$updateUserInfoAUserArray['enable_auto_recording'] = $userEnableAutoRecording;
		$updateUserInfoAUserArray['enable_cloud_recording'] = $userEnableCloudRecording;
		$updateUserInfoAUserArray['track_id'] = $userTrackID;
		$updateUserInfoAUserArray['meeting_capacity'] = $userMeetingCapacity;
		$updateUserInfoAUserArray['enable_webinar'] = $userEnableWebinar;
		$updateUserInfoAUserArray['webinar_capacity'] = $userWebinarCapacity;
		$updateUserInfoAUserArray['enable_large'] = $userEnableLarge;
		$updateUserInfoAUserArray['large_capacity'] = $userLargeCapacity;
		$updateUserInfoAUserArray['disable_feedback'] = $userDisableFeedback;
		$updateUserInfoAUserArray['disable_jbh_reminder'] = $userDisableJBHReminder;
		$updateUserInfoAUserArray['dept'] = $userDept;
		return $this->$sendZoomRequest->sendRequest('user/update',$updateUserInfoArray);
	}  

	public function updateUserPassword(){
		$updateUserPasswordArray = array();
		$updateUserPasswordArray['id'] = $userId;
		$updateUserPasswordArray['password'] = $userPassword;
		return $this->$sendZoomRequest->sendRequest('user/updatepassword', $updateUserPasswordArray)
	}      

	public function setUserAssistant(){
		$setUserAssistantArray() = array();
		$setUserAssistantArray['id'] = $userId;
		$setUserAssistantArray['host_email'] = $userEmail;
		$setUserAssistantArray['assistant_email'] = $userAssistantEmail;
		return $this->$sendZoomRequest->sendRequest('user/assistant/set', $setUserAssistantArray);
	}     

	public function deleteUserAssistant(){
		$deleteUserAssistantArray = array();
		$deleteUserAssistantArray['id'] = $userId;
		$deleteUserAssistantArray['host_email'] = $userEmail;
		$deleteUserAssistantArray['assistant_email'] = $userAssistantEmail;
		return $this->$sendZoomRequest->sendRequest('user/assistant/delete',$deleteUserAssistantArray);
	}   

	public function revokeSSOToken(){
		$revokeSSOTokenArray = array();
		$revokeSSOTokenArray['id'] = $userId;
		$revokeSSOTokenArray['email'] = $userEmail;
		return $this->$sendZoomRequest->sendRequest('user/revoketoken', $revokeSSOTokenArray);
	}      

	public function deleteUserPermanently(){
		$deleteUserPermanentlyArray = array();
		$deleteUserPermanentlyArray['id'] = $userId;
		$deleteUserPermanentlyArray['email'] = $userEmail;
		return $this->$sendZoomRequest->sendRequest('user/permanentdelete', $deleteUserPermanentlyArray);
	}   
}
?>