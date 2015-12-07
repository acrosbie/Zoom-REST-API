<?php
include('sendZoomRequest.php');
class zoomWebinar{
	/*Variables for zoomMeeting class and their default values*/
	private $webinarId = "";
	private $webinarHostId = "";
	private $webinarTopic = "Aidan Crosbie's Zoom Webinar";
	private $webinarStartTime = "2018-12-25T12:00:00Z";
	private $webinarDuration = 60;
	private $webinarTimezone = "America/Los_Angeles";
	private $webinarOptionAudio = "both";
	private $webinarAgenda = "This is a Webinar going over how to use Webinar";
	private $webinarType = 5;
	private $webinarPageSize = 30;
	private $webinarPageNumber = 1;
	private $sendNewZoomRequest;

	/*Construct and destruct*/
	public function __construct(){}
	public function __construct(zoomUser $sendNewZoomRequest){
		$this->sendZoomRequest = $sendNewZoomRequest;
	}
	public function __destruct(){}
	
	/*Get and Set $webinarId*/
	public function setWebinarId($webinarId){
		$this->webinarId = $webinarId;
	}

	public function getWebinarId(){
		return $this->webinarId;
	}

	/*Get and Set $webinarHostId*/
	public function setWebinarHostId($webinarHostId){
		$this->webinarHostId = $webinarHostId;
	}

	public function getWebinarHostId(){
		return $this->webinarHostId;
	}

	/*Get and Set $webinarTopic*/
	public function setWebinarTopic($webinarTopic){
		$this->webinarTopic = $webinarTopic;
	}

	public function getWebinarTopic(){
		return $this->webinarTopic;
	}

	/*Get and Set $webinarStartTime*/
	public function setWebinarStartTime($webinarStartTime){
		$this->webinarStartTime = $webinarStartTime;
	}

	public function getWebinarStartTime(){
		return $this->webinarStartTime;
	}

	/*Get and Set $webinarDuration*/
	public function setWebinarDuration($webinarDuration){
		$this->webinarDuration = $webinarDuration;
	}

	public function getWebinarDuration(){
		return $this->webinarDuration;
	}

	/*Get and Set $webinarTimezone*/
	public function setWebinarTimezone($webinarTimezone){
		$this->webinarTimezone = $webinarTimezone;
	}

	public function getWebinarTimezone(){
		return $this->webinarTimezone;
	}

	/*Get and Set $webinarOptionAudio*/
	public function setWebinarOptionAudio($webinarOptionAudio){
		$this->webinarOptionAudio = $webinarOptionAudio;
	}

	public function getWebinarOptionAudio(){
		return $this->webinarOptionAudio;
	}

	/*Get and Set $webinarAgenda*/
	public function setWebinarAgenda($webinarAgenda){
		$this->webinarAgenda = $webinarAgenda;
	}

	public function getWebinarAgenda(){
		return $this->webinarAgenda;
	}

	/*Get and Set $webinarType*/
	public function setWebinarType($webinarType){
		$this->webinarType = $webinarType;
	}

	public function getWebinarType(){
		return $this->webinarType;
	}

	/*Get and Set $webinarPageSize*/
	public function setWebinarPageSize($webinarPageSize){
		$this->webinarPageSize = $webinarPageSize;
	}

	public function getWebinarPageSize(){
		return $this->webinarPageSize;
	}

	/*Get and Set $webinarPageNumber*/
	public function setWebinarPageNumber($webinarPageNumber){
		$this->webinarPageNumber = $webinarPageNumber;
	}

	public function getWebinarPageNumber(){
		return $this->webinarPageNumber;
	}


	/*Public functions for management of webinars*/
	public function createAWebinar(){
		$createAWebinarArray = array();
		$createAWebinarArray['host_id'] = $webinarHostId;
		$createAWebinarArray['topic'] = $webinarTopic;
		$createAWebinarArray['start_time'] = $webinarStartTime;
		$createAWebinarArray['duration'] = $webinarDuration;
		$createAWebinarArray['timezone'] = $webinarTimezone;
		$createAWebinarArray['option_audio'] = $webinarOptionAudio;
		$createAWebinarArray['agenda'] = $webinarAgenda;
		$createAWebinarArray['type'] = $webinarType;
		return $this->sendRequest('webinar/create',$createAWebinarArray);
	}

	public function deleteAWebinar(){
		$deleteAWebinarArray = array();
		$deleteAWebinarArray['id'] = $webinarId;
		$deleteAWebinarArray['host_id'] = $webinarHostId;
		return $this->sendRequest('webinar/delete',$deleteAWebinarArray);
	}

	public function listWebinars(){
		$listWebinarsArray = array();
		$listWebinarsArray['host_id'] = $webinarHostId;
		$listWebinarsArray['page_size'] = $webinarPageSize;
		$listWebinarsArray['page_number'] = $webinarPageNumber;
		return $this->sendRequest('webinar/list',$listWebinarsArray);
	}

	public function getWebinarInfo(){
		$getWebinarInfoArray = array();
		$getWebinarInfoArray['id'] = $webinarId;
		$getWebinarInfoArray['host_id'] = $webinarHostId;
		return $this->sendRequest('webinar/get',$getWebinarInfoArray);
	}

	public function updateWebinarInfo(){
		$updateWebinarInfoArray = array();
		$updateWebinarInfoArray['id'] = $webinarId;
		$updateWebinarInfoArray['host_id'] = $webinarHostId;
		$updateWebinarInfoArray['topic'] = $webinarTopic;
		$updateWebinarInfoArray['start_time'] = $webinarStartTime;
		$updateWebinarInfoArray['duration'] = $webinarDuration;
		$updateWebinarInfoArray['timezone'] = $webinarTimezone;
		$updateWebinarInfoArray['option_audio'] = $webinarOptionAudio;
		$updateWebinarInfoArray['agenda'] = $webinarAgenda;
		$updateWebinarInfoArray['type'] = $webinarType;
		return $this->sendRequest('webinar/update',$updateWebinarInfoArray);
	}

	public function endAWebinar(){
		$endAWebinarArray = array();
		$endAWebinarArray['id'] = $webinarId;
		$endAWebinarArray['host_id'] = $webinarHostId;
		return $this->sendRequest('webinar/end',$endAWebinarArray);
	}

	public function getWebinarRegistrationInfo(){
		$getWebinarRegistrationInfoArray = array();
		$getWebinarRegistrationInfoArray['id'] = $webinarId;
		$getWebinarRegistrationInfoArray['host_id'] = $webinarHostId;
		return $this->sendRequest('webinar/registration', $getWebinarRegistrationInfoArray);
	}

	public function getWebinarUUID(){
		$getWebinarUUIDArray = array();
		$getWebinarUUIDArray['id'] = $webinarId;
		$getWebinarUUIDArray['host_id'] = $webinarHostId;
		return $this->sendRequest('webinar/uuid/list', $getWebinarUUIDArray);
	}

	public function getEndedWebinarAttendees(){
		$getEndedWebinarAttendeesArray = array();
		$getEndedWebinarAttendeesArray['id'] = $webinarId;
		$getEndedWebinarAttendeesArray['host_id'] = $webinarHostId;
		return $this->sendRequest('webinar/attendees/list', $getEndedWebinarAttendeesArray);
	}
}

?>