<?php
/*Be sure to include sendZoomRequest.php*/
class zoomMeeting{
	/*Public public functions for management of meetings*/

	public function createAMeeting(){
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
		return $this->$sendZoomRequest->$sendRequest('meeting/create', $createAMeetingArray);
	}

	public function deleteAMeeting(){
		$deleteAMeetingArray = array();
		$deleteAMeetingArray['id'] = $_POST['meetingId'];
		$deleteAMeetingArray['host_id'] = $_POST['userId'];
		return $this->$sendZoomRequest->$sendRequest('meeting/delete', $deleteAMeetingArray);
	}

	public function listMeetings(){
		$listMeetingsArray = array();
		$listMeetingsArray['host_id'] = $_POST['userId'];
		$listMeetingsArray['page_size'] = $_POST['pageSize'];
		$listMeetingsArray['page_number'] = $_POST['pageNumber'];
		return $this->$sendZoomRequest->$sendRequest('meeting/list',$listMeetingsArray);
	}

	public function listLiveMeetings(){
		$listLiveMeetingsArray = array();
		return $this->$sendZoomRequest->$sendRequest('meeting/live',$listLiveMeetingsArray);
	}

	public function getMeetingInfo(){
		$getAMeetingInfoArray = array();
		$getAMeetingInfoArray['id'] = $_POST['meetingId'];
		$getAMeetingInfoArray['host_id'] = $_POST['userId'];
		return $this->$sendZoomRequest->$sendRequest('meeting/get', $getAMeetingInfoArray);
	}

	public function updateMeetingInfo(){
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
		return $this->$sendZoomRequest->$sendRequest('meeting/update', $updateMeetingInfoArray);
	}

	public function endAMeeting(){
		$endAMeetingArray = array();
		$endAMeetingArray['id'] = $_POST['meetingId'];
		$endAMeetingArray['host_id'] = $_POST['userId'];
		return $this->$sendZoomRequest->$sendRequest('meeting/end', $endAMeetingArray);
	}

}

?>