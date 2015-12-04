<?php
/*Zoom Support*/
/*Last Edit 12/4/15*/

class ZoomAPI{

	/*The API Key, Secret, & URL will be used in every function.*/
	private $api_key = 'Please Input Your Own API Key Here';
	private $api_secret = 'Please Input Your Own API Secret Here';
	private $api_url = 'https://api.zoom.us/v1/';

	/*Function to send HTTP POST Requests*/
	/*Used by every function below to make HTTP POST call*/
	function sendRequest($calledFunction, $data){
		/*Creates the endpoint URL*/
		$request_url = $this->api_url.$calledFunction;

		/*Adds the Key, Secret, & Datatype to the passed array*/
		$data['api_key'] = $this->api_key;
		$data['api_secret'] = $this->api_secret;
		$data['data_type'] = 'JSON';

		$postFields = http_build_query($data);
		/*Check to see queried fields*/
		/*Used for troubleshooting/debugging*/
		echo $postFields;

		/*Preparing Query...*/
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_URL, $request_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
		$response = curl_exec($ch);

		/*Check for any errors*/
		$errorMessage = curl_exec($ch);
		echo $errorMessage;
		curl_clost($ch);

		/*Will print back the response from the call*/
		/*Used for troubleshooting/debugging		*/
		echo $request_url;
		var_dump($data);
		var_dump($response);
		if(!$response){
			return false;
		}
		/*Return the data in JSON format*/
		return json_encode($response);
	}
	/*The following contains all possible 
	parameters for each API call. Please check
	Zoom documentation for which parameters can be
	ignored and what each parameter specifically does
	*/

	/*Functions for management of users*/
	function createAUser(){		
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
		return $this->sendRequest('user/create', $createAUserArray);
	}   

	function autoCreateAUser(){
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
		return $this->sendRequest('user/autocreate', $autoCreateAUserArray);
	}

	function custCreateAUser(){
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
		return $this->sendRequest('user/custcreate', $custCreateAUserArray);
	}  

	function preProvisioningSSOUser(){
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
		return $this->sendRequest('user/ssocreate', $preProvisioningSSOUserArray);
	}

	function deleteAUser(){
		$deleteAUserArray = array();
		$deleteAUserArray['id'] = $_POST['userId'];
		return $this->sendRequest('user/delete', $deleteUserArray);
	}     

	function listUsers(){
		$listUsersArray = array();
		$listUsersArray['page_size'] = $_POST['pageSize'];
		$listUsersArray['page_number'] = $_POST['pageNumber'];
		return $this->sendRequest('user/list', $listUsersArray);
	}   

	function listPendingUsers(){
		$listPendingUsersArray = array();
		$listPendingUsersArray['page_size'] = $_POST['pageSize'];
		$listPendingUsersArray['page_number'] = $_POST['pageNumber'];
		return $this->sendRequest('user/pending', $listPendingUsersArray);
	}    

	function getUserInfo(){
		$getUserInfoArray = array();
		$getUserInfoArray['id'] = $_POST['userId'];
		return $this->sendRequest('user/get',$getUserInfoArray);
	}   

	function getUserInfoByEmail(){
		$getUserInfoByEmailArray = array();
		$getUserInfoByEmailArray['email'] = $_POST['userEmail'];
		$getUserInfoByEmailArray['login_type'] = $_POST['userLoginType'];
		return $this->sendRequest('user/getbyemail',$getUserInfoByEmailArray);
	}  

	function updateUserInfo(){
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
		return $this->sendRequest('user/update',$updateUserInfoArray);
	}  

	function updateUserPassword(){
		$updateUserPasswordArray = array();
		$updateUserPasswordArray['id'] = $_POST['userId'];
		$updateUserPasswordArray['password'] = $_POST['userNewPassword'];
		return $this->sendRequest('user/updatepassword', $updateUserPasswordArray)
	}      

	function setUserAssistant(){
		$setUserAssistantArray() = array();
		$setUserAssistantArray['id'] = $_POST['userId'];
		$setUserAssistantArray['host_email'] = $_POST['userEmail'];
		$setUserAssistantArray['assistant_email'] = $_POST['assistantEmail'];
		return $this->sendRequest('user/assistant/set', $setUserAssistantArray);
	}     

	function deleteUserAssistant(){
		$deleteUserAssistantArray = array();
		$deleteUserAssistantArray['id'] = $_POST['userId'];
		$deleteUserAssistantArray['host_email'] = $_POST['userEmail'];
		$deleteUserAssistantArray['assistant_email'] = $_POST['assistantEmail'];
		return $this->sendRequest('user/assistant/delete',$deleteUserAssistantArray);
	}   

	function revokeSSOToken(){
		$revokeSSOTokenArray = array();
		$revokeSSOTokenArray['id'] = $_POST['userId'];
		$revokeSSOTokenArray['email'] = $_POST['userEmail'];
		return $this->sendRequest('user/revoketoken', $revokeSSOTokenArray);
	}      

	function deleteUserPermanently(){
		$deleteUserPermanentlyArray = array();
		$deleteUserPermanentlyArray['id'] = $_POST['userId'];
		$deleteUserPermanentlyArray['email'] = $_POST['userEmail'];
		return $this->sendRequest('user/permanentdelete', $deleteUserPermanentlyArray);
	}               


	/*Functions for management of meetings*/
	function createAMeeting(){
		$createAMeetingArray = array();
		$createAMeetingArray['host_id'] = $_POST['userId'];
		$createAMeetingArray['topic'] = $_POST['meetingTopic'];
		$createAMeetingArray['type'] = $_POST['meetingType'];
		$createAMeetingArray['start_time'] = $_POST['meetingStartTime'];
		$createAMeetingArray['duration'] = $_POST['meetingDuration'];
		$createAMeetingArray['timezone'] = $_POST['meetingTimezone'];
		$createAMeetingArray['password'] = $_POST['meetingPassword'];
		$createAMeetingArray['option_jbh'] = $_POST['meetingOptionJBH'];
		$createAMeetingArray['option_start_type'] = $_POST['meetingOptionStartType'];
		$createAMeetingArray['option_host_video'] = $_POST['meetingOptionHostVideo'];
		$createAMeetingArray['option_participants_video'] = $_POST['meetingOptionsParticipantsVideo'];
		$createAMeetingArray['option_audio'] = $_POST['meetingOptionAudio'];
		return $this->sendRequest('meeting/create', $createAMeetingArray);
	}

	function deleteAMeeting(){
		$deleteAMeetingArray = array();
		$deleteAMeetingArray['id'] = $_POST['meetingId'];
		$deleteAMeetingArray['host_id'] = $_POST['userId'];
		return $this->sendRequest('meeting/delete', $deleteAMeetingArray);
	}

	function listMeetings(){
		$listMeetingsArray = array();
		$listMeetingsArray['host_id'] = $_POST['userId'];
		$listMeetingsArray['page_size'] = $_POST['pageSize'];
		$listMeetingsArray['page_number'] = $_POST['pageNumber'];
		return $this->sendRequest('meeting/list',$listMeetingsArray);
	}

	function listLiveMeetings(){
		$listLiveMeetingsArray = array();
		return $this->sendRequest('meeting/live',$listLiveMeetingsArray);
	}

	function getMeetingInfo(){
		$getAMeetingInfoArray = array();
		$getAMeetingInfoArray['id'] = $_POST['meetingId'];
		$getAMeetingInfoArray['host_id'] = $_POST['userId'];
		return $this->sendRequest('meeting/get', $getAMeetingInfoArray);
	}

	function updateMeetingInfo(){
		$updateAMeetingInfoArray = array();
		$updateAMeetingInfoArray['id'] = $_POST['meetingId'];
		$updateAMeetingInfoArray['host_id'] = $_POST['userId'];
		$updateAMeetingArray['topic'] = $_POST['meetingTopic'];
		$updateAMeetingArray['type'] = $_POST['meetingType'];
		$updateAMeetingArray['start_time'] = $_POST['meetingStartTime'];
		$updateAMeetingArray['duration'] = $_POST['meetingDuration'];
		$updateAMeetingArray['timezone'] = $_POST['meetingTimezone'];
		$updateAMeetingArray['password'] = $_POST['meetingPassword'];
		$updateAMeetingArray['option_jbh'] = $_POST['meetingOptionJBH'];
		$updateAMeetingArray['option_start_type'] = $_POST['meetingOptionStartType'];
		$updateAMeetingArray['option_host_video'] = $_POST['meetingOptionHostVideo'];
		$updateAMeetingArray['option_participants_video'] = $_POST['meetingOptionsParticipantsVideo'];
		$updateAMeetingArray['option_audio'] = $_POST['meetingOptionAudio'];
		return $this->sendRequest('meeting/update', $updateMeetingInfoArray);
	}

	function endAMeeting(){
		$endAMeetingArray = array();
		$endAMeetingArray['id'] = $_POST['meetingId'];
		$endAMeetingArray['host_id'] = $_POST['userId'];
		return $this->sendRequest('meeting/end', $endAMeetingArray);
	}


	/*Functions for management of reports*/
	function getDailyReport(){
		$getDailyReportArray = array()
		$getDailyReportArray['year'] = $_POST['year'];
		$getDailyReportArray['month'] = $_POST['month'];
		return $this->sendRequest('report/getdailyreport', $getDailyReportArray);
	}

	function getAccountReport(){
		$getAccountReportArray = array()
		$getAccountReportArray['from'] = $_POST['from'];
		$getAccountReportArray['to'] = $_POST['to'];
		$getAccountReportArray['page_size'] = $_POST['pageSize'];
		$getAccountReportArray['page_number'] = $_POST['pageNumber'];
		return $this->sendRequest('report/getaccountreport', $getAccountReportArray);
	}

	function getUserReport(){
		$getUserReportArray = array()
		$getUserReportArray['user_id'] = $_POST['userId'];
		$getUserReportArray['from'] = $_POST['from'];
		$getUserReportArray['to'] = $_POST['to'];
		$getUserReportArray['page_size'] = $_POST['pageSize'];
		$getUserReportArray['page_number'] = $_POST['pageNumber'];
		return $this->sendRequest('report/getuserreport', $getUserReportArray);
	}


	/*Functions for management of groups*/
	function listGroups(){
		$listGroupsArray = array();
		return $this->sendRequest('group/list', $listGroupsArray);
	}

	function getGroupInfo(){
		$getGroupInfoArray = array();
		$getGroupInfoArray['id'] = $_POST['groupId'];
		return $this->sendRequest('group/get', $getGroupInfoArray);
	}

	function createAGroup(){
		$createAGroupArray = array();
		$createAGroupArray['name'] = $_POST['groupName'];
		$createAGroupArray['type'] = $_POST['groupType'];
		return $this->sendRequest('group/create', $createAGroupArray);
	}

	function editAGroup(){
		$editAGroupArray = array();
		$editAGroupArray['id'] = $_POST['groupId'];
		$editAGroupArray['name'] = $_POST['groupName'];
		$editAGroupArray['type'] = $_POST['groupType'];
		return $this->sendRequest('group/edit', $editAGroupArray);
	}

	function deleteAGroup(){
		$deleteAGroupArray = array();
		$deleteAGroupArray['id'] = $_POST['groupId'];
		return $this->sendRequest('group/delete', $deleteAGroupArray);
	}

	function listGroupMembers(){
		$listGroupMembersArray = array();
		$listGroupMembersArray['id'] = $_POST['groupId'];
		$listGroupMembersArray['page_size'] = $_POST['pageSize'];
		$listGroupMembersArray['page_number'] = $_POST['pageNumber'];
		return $this->sendRequest('group/member/list', $listGroupMembersArray);
	}

	function addGroupMembers(){
		$addGroupMembersArray = array();
		$addGroupMembersArray['id'] = $_POST['groupId'];
		$addGroupMembersArray['member_ids'] = $_POST['listUserId'];
		return $this->sendRequest('group/member/add', $addGroupMembersArray);
	}

	function deleteGroupMembers(){
		$deleteGroupMembersArray = array();
		$deleteGroupMembersArray['id'] = $_POST['groupId'];
		$deleteGroupMembersArray['member_ids'] = $_POST['listUserId'];
		return $this->sendRequest('group/member/delete', $deleteGroupMembersArray);
	}


	/*Functions for management of recordings*/
	function listRecording(){
		$listRecordingArray = array();
		$listRecordingArray['host_id'] = $_POST['userId'];
		$listRecordingArray['meeting_numnber'] = $_POST['meetingId'];
		$listRecordingArray['from'] = $_POST['from'];
		$listRecordingArray['to'] = $_POST['to'];
		$listRecordingArray['page_size'] = $_POST['pageSize'];
		$listRecordingArray['page_number'] = $_POST['pageNumber'];
		return $this->sendRequest('recording/list', $listRecordingArray);
	}

	function listMCRecording(){
		$listMCRecordingArray = array();
		$listMCRecordingArray['host_id'] = $_POST['userId'];
		$listMCRecordingArray['meeting_numnber'] = $_POST['meetingId'];
		$listMCRecordingArray['from'] = $_POST['from'];
		$listMCRecordingArray['to'] = $_POST['to'];
		$listMCRecordingArray['page_size'] = $_POST['pageSize'];
		$listMCRecordingArray['page_number'] = $_POST['pageNumber'];
		return $this->sendRequest('mc/recording/list', $listMCRecordingArray);
	}

	function getARecording(){
		$getARecordingArray = array();
		$getARecordingArray['meeting_id'] = $_POST['meetingId'];
		return $this->sendRequest('recording/get', $getARecordingArray);
	}

	function deleteARecording(){
		$deleteARecordingArray = array();
		$deleteARecordingArray['meeting_id'] = $_POST['meetingId'];
		$deleteARecordingArray['file_id'] = $_POST['fileId'];
		return $this->sendRequest('recording/delete', $deleteARecordingArray);
	}


	/*Functions for management of webinars*/
	function createAWebinar(){
		$createAWebinarArray = array();
		$createAWebinarArray['host_id'] = $_POST['userId'];
		$createAWebinarArray['topic'] = $_POST['topic'];
		$createAWebinarArray['start_time'] = $_POST['webinarStartTime'];
		$createAWebinarArray['duration'] = $_POST['webinarDuration'];
		$createAWebinarArray['timezone'] = $_POST['webinarTimezone'];
		$createAWebinarArray['option_audio'] = $_POST['webinarOptionAudio'];
		$createAWebinarArray['agenda'] = $_POST['webinarAgenda'];
		$createAWebinarArray['type'] = $_POST['webinarType'];
		return $this->sendRequest('webinar/create',$createAWebinarArray);
	}

	function deleteAWebinar(){
		$deleteAWebinarArray = array();
		$deleteAWebinarArray['id'] = $_POST['webinarId'];
		$deleteAWebinarArray['host_id'] = $_POST['userId'];
		return $this->sendRequest('webinar/delete',$deleteAWebinarArray);
	}

	function listWebinars(){
		$listWebinarsArray = array();
		$listWebinarsArray['host_id'] = $_POST['userId'];
		$listWebinarsArray['page_size'] = $_POST['pageSize'];
		$listWebinarsArray['page_number'] = $_POST['pageNumber'];
		return $this->sendRequest('webinar/list',$listWebinarsArray);
	}

	function getWebinarInfo(){
		$getWebinarInfoArray = array();
		$getWebinarInfoArray['id'] = $_POST['webinarId'];
		$getWebinarInfoArray['host_id'] = $_POST['userId'];
		return $this->sendRequest('webinar/get',$getWebinarInfoArray);
	}

	function updateWebinarInfo(){
		$updateWebinarInfoArray = array();
		$updateWebinarInfoArray['id'] = $_POST['webinarId'];
		$updateWebinarInfoArray['host_id'] = $_POST['userId'];
		$updateWebinarInfoArray['topic'] = $_POST['topic'];
		$updateWebinarInfoArray['start_time'] = $_POST['webinarStartTime'];
		$updateWebinarInfoArray['duration'] = $_POST['webinarDuration'];
		$updateWebinarInfoArray['timezone'] = $_POST['webinarTimezone'];
		$updateWebinarInfoArray['option_audio'] = $_POST['webinarOptionAudio'];
		$updateWebinarInfoArray['agenda'] = $_POST['webinarAgenda'];
		$updateWebinarInfoArray['type'] = $_POST['webinarType'];
		return $this->sendRequest('webinar/update',$updateWebinarInfoArray);
		}

	function endAWebinar(){
		$endAWebinarArray = array();
		$endAWebinarArray['id'] = $_POST['webinarId'];
		$endAWebinarArray['host_id'] = $_POST['userId'];
		return $this->sendRequest('webinar/end',$endAWebinarArray);
	}

	function getWebinarRegistrationInfo(){
		$getWebinarRegistrationInfoArray = array();
		$getWebinarRegistrationInfoArray['id'] = $_POST['webinarId'];
		$getWebinarRegistrationInfoArray['host_id'] = $_POST['userId'];
		return $this->sendRequest('webinar/registration', $getWebinarRegistrationInfoArray);
	}

	function getWebinarUUID(){
		$getWebinarUUIDArray = array();
		$getWebinarUUIDArray['id'] = $_POST['webinarId'];
		$getWebinarUUIDArray['host_id'] = $_POST['userId'];
		return $this->sendRequest('webinar/uuid/list', $getWebinarUUIDArray);
	}

	function getEndedWebinarAttendees(){
		$getEndedWebinarAttendeesArray = array();
		$getEndedWebinarAttendeesArray['id'] = $_POST['webinarId'];
		$getEndedWebinarAttendeesArray['host_id'] = $_POST['userId'];
		return $this->sendRequest('webinar/attendees/list', $getEndedWebinarAttendeesArray);
	}
}

?> 