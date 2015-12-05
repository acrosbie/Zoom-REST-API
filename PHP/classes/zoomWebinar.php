<?php
include('sendZoomRequest.php');
class zoomWebinar{
	/*Public functions for management of webinars*/
	public function createAWebinar(){
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

	public function deleteAWebinar(){
		$deleteAWebinarArray = array();
		$deleteAWebinarArray['id'] = $_POST['webinarId'];
		$deleteAWebinarArray['host_id'] = $_POST['userId'];
		return $this->sendRequest('webinar/delete',$deleteAWebinarArray);
	}

	public function listWebinars(){
		$listWebinarsArray = array();
		$listWebinarsArray['host_id'] = $_POST['userId'];
		$listWebinarsArray['page_size'] = $_POST['pageSize'];
		$listWebinarsArray['page_number'] = $_POST['pageNumber'];
		return $this->sendRequest('webinar/list',$listWebinarsArray);
	}

	public function getWebinarInfo(){
		$getWebinarInfoArray = array();
		$getWebinarInfoArray['id'] = $_POST['webinarId'];
		$getWebinarInfoArray['host_id'] = $_POST['userId'];
		return $this->sendRequest('webinar/get',$getWebinarInfoArray);
	}

	public function updateWebinarInfo(){
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

	public function endAWebinar(){
		$endAWebinarArray = array();
		$endAWebinarArray['id'] = $_POST['webinarId'];
		$endAWebinarArray['host_id'] = $_POST['userId'];
		return $this->sendRequest('webinar/end',$endAWebinarArray);
	}

	public function getWebinarRegistrationInfo(){
		$getWebinarRegistrationInfoArray = array();
		$getWebinarRegistrationInfoArray['id'] = $_POST['webinarId'];
		$getWebinarRegistrationInfoArray['host_id'] = $_POST['userId'];
		return $this->sendRequest('webinar/registration', $getWebinarRegistrationInfoArray);
	}

	public function getWebinarUUID(){
		$getWebinarUUIDArray = array();
		$getWebinarUUIDArray['id'] = $_POST['webinarId'];
		$getWebinarUUIDArray['host_id'] = $_POST['userId'];
		return $this->sendRequest('webinar/uuid/list', $getWebinarUUIDArray);
	}

	public function getEndedWebinarAttendees(){
		$getEndedWebinarAttendeesArray = array();
		$getEndedWebinarAttendeesArray['id'] = $_POST['webinarId'];
		$getEndedWebinarAttendeesArray['host_id'] = $_POST['userId'];
		return $this->sendRequest('webinar/attendees/list', $getEndedWebinarAttendeesArray);
	}
}

?>