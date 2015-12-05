<?php
include('sendZoomRequest.php');
class zoomUser{
	/*Variables for zoomUser class and their default values*/
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