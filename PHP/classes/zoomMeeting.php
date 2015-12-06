<?php
include('sendZoomRequest.php');
class zoomMeeting{
	/*Variables for zoomMeeting class and their default values*/
	private $meetingId = "";
	private $meetingHostId = "";
	private $meetingTopic = "Aidan Crosbie's Zoom Meeting";
	private $meetingType = "2";
	private $meetingStartTime = "2018-11-25T12:00:00Z";
	private $meetingDuration = 60;
	private $meetingTimezone = "America/Los_Angeles";
	private $meetingPassword = "password";
	private $meetingOptionJBH = false;
	private $meetingOptionStartType = "video";
	private $meetingOptionHostVideo = true;
	private $meetingOptionsParticipantsVideo = true;
	private $meetingOptionAudio = "both"; 
	private $meetingPageSize = 30;
	private $meetingPageNumber = 1;

	/*Construct and destruct*/
	public function __construct(){}
	public function __destruct(){}

	/*Get and Set $meetingId*/
	public function setMeetingId($meetingId){
		$this->meetingId = $meetingId;
	}

	public function getMeetingId(){
		return $this->meetingId;
	}

	/*Get and Set $meetingHostId*/
	public function setMeetingHostId($meetingHostId){
		$this->meetingHostId = $meetingHostId;
	}

	public function getMeetingHostId(){
		return $this->meetingHostId;
	}

	/*Get and Set $meetingTopic*/
	public function setMeetingTopic($meetingTopic){
		$this->meetingTopic = $meetingTopic;
	}

	public function getMeetingTopic(){
		return $this->meetingTopic;
	}

	/*Get and Set $meetingType*/
	public function setMeetingType($meetingType){
		$this->meetingType = $meetingType;
	}

	public function getMeetingType(){
		return $this->meetingType;
	}

	/*Get and Set $meetingStartTime*/
	public function setMeetingStartTime($meetingStartTime){
		$this->meetingStartTime = $meetingStartTime;
	}

	public function getMeetingStartTime(){
		return $this->meetingStartTime;
	}

	/*Get and Set $meetingDuration*/
	public function setMeetingDuration($meetingDuration){
		$this->meetingDuration = $meetingDuration;
	}

	public function getMeetingDuration(){
		return $this->meetingDuration;
	}

	/*Get and Set $meetingTimezone*/
	public function setMeeting($meetingTimezone){
		$this->meetingTimezone = $meetingTimezone;
	}

	public function getMeetingTimezone(){
		return $this->meetingTimezone;
	}

	/*Get and Set $meetingPassword*/
	public function setMeetingPassword($meetingPassword){
		$this->meetingPassword = $meetingPassword;
	}

	public function getMeetingPassword(){
		return $this->meetingPassword;
	}

	/*Get and Set $meetingOptionJBH*/
	public function setMeetingOptionJBH($meetingOptionJBH){
		$this->meetingOptionJBH = $meetingOptionJBH;
	}

	public function getMeetingOptionJBH(){
		return $this->meetingOptionJBH;
	}

	/*Get and Set $meetingOptionStartType*/
	public function setMeetingOptionStartType($meetingOptionStartType){
		$this->meetingOptionStartType = $meetingOptionStartType;
	}

	public function getMeetingOptionStartType(){
		return $this->meetingOptionStartType;
	}

	/*Get and Set $meetingOptionHostVideo*/
	public function setMeetingOptionHostVideo($meetingOptionHostVideo){
		$this->meetingOptionHostVideo = $meetingOptionHostVideo;
	}

	public function getMeetingOptionHostVideo(){
		return $this->meetingOptionHostVideo;
	}

	/*Get and Set $meetingOptionsParticipantsVideo*/
	public function setMeetingOptionsParticipantsVideo($meetingOptionsParticipantsVideo){
		$this->meetingOptionsParticipantsVideo = $meetingOptionsParticipantsVideo;
	}

	public function getMeetingOptionsParticipantsVideo(){
		return $this->meetingOptionsParticipantsVideo;
	}

	/*Get and Set $meetingOptionAudio*/
	public function setMeetingOptionAudio($meetingOptionAudio){
		$this->meetingOptionAudio = $meetingOptionAudio;
	}

	public function getMeetingOptionAudio(){
		return $this->meetingOptionAudio;
	}

	/*Get and Set $meetingPageSize*/
	public function setMeetingPageSize($meetingPageSize){
		$this->meetingPageSize = $meetingPageSize;
	}

	public function getMeetingPageSize(){
		return $this->meetingPageSize;
	}

	/*Get and Set $meetingPageNumber*/
	public function setMeetingPageNumber($meetingPageNumber){
		$this->meetingPageNumber = $meetingPageNumber;
	}

	public function getMeetingPageNumber(){
		return $this->meetingPageNumber;
	}

	public function createAMeeting(){
		$createAMeetingArray = array();
		$createAMeetingArray['host_id'] = $meetingHostId;
		$createAMeetingArray['topic'] = $meetingMeetTopic;
		$createAMeetingArray['type'] = $meetingType;
		$createAMeetingArray['start_time'] = $meetingStartTime;
		$createAMeetingArray['duration'] = $meetingDuration;
		$createAMeetingArray['timezone'] = $meetingTimezone;
		$createAMeetingArray['password'] = $meetingPassword;
		$createAMeetingArray['option_jbh'] = $meetingOptionJBH;
		$createAMeetingArray['option_start_type'] = $meetingStartType;
		$createAMeetingArray['option_host_video'] = $meetingOptionHostVideo;
		$createAMeetingArray['option_participants_video'] = $meetingOptionsParticipantsVideo;
		$createAMeetingArray['option_audio'] = $meetingOptionAudio;
		return $this->$sendZoomRequest->$sendRequest('meeting/create', $createAMeetingArray);
	}

	public function deleteAMeeting(){
		$deleteAMeetingArray = array();
		$deleteAMeetingArray['id'] = $meetingId;
		$deleteAMeetingArray['host_id'] = $meetingHostId;
		return $this->$sendZoomRequest->$sendRequest('meeting/delete', $deleteAMeetingArray);
	}

	public function listMeetings(){
		$listMeetingsArray = array();
		$listMeetingsArray['host_id'] = $meetingHostId;
		$listMeetingsArray['page_size'] = $meetingPageSize;
		$listMeetingsArray['page_number'] = $meetingPageNumber;
		return $this->$sendZoomRequest->$sendRequest('meeting/list',$listMeetingsArray);
	}

	public function listLiveMeetings(){
		$listLiveMeetingsArray = array();
		return $this->$sendZoomRequest->$sendRequest('meeting/live',$listLiveMeetingsArray);
	}

	public function getMeetingInfo(){
		$getAMeetingInfoArray = array();
		$getAMeetingInfoArray['id'] = $meetingId;
		$getAMeetingInfoArray['host_id'] = $meetingHostId;
		return $this->$sendZoomRequest->$sendRequest('meeting/get', $getAMeetingInfoArray);
	}

	public function updateMeetingInfo(){
		$updateAMeetingInfoArray = array();
		$updateAMeetingInfoArray['id'] = $meetingId;
		$updateAMeetingInfoArray['host_id'] = $meetingHostId;
		$updateAMeetingArray['topic'] = $meetingTopic;
		$updateAMeetingArray['type'] = $meetingType;
		$updateAMeetingArray['start_time'] = $meetingStartType;
		$updateAMeetingArray['duration'] = $meetingDuration;
		$updateAMeetingArray['timezone'] = $meetingTimezone;
		$updateAMeetingArray['password'] = $meetingPassword;
		$updateAMeetingArray['option_jbh'] = $meetingOptionJBH;
		$updateAMeetingArray['option_start_type'] = $meetingOptionStartType;
		$updateAMeetingArray['option_host_video'] = $meetingOptionHostVideo;
		$updateAMeetingArray['option_participants_video'] = $meetingOptionsParticipantsVideo;
		$updateAMeetingArray['option_audio'] = $meetingOptionAudio;
		return $this->$sendZoomRequest->$sendRequest('meeting/update', $updateMeetingInfoArray);
	}

	public function endAMeeting(){
		$endAMeetingArray = array();
		$endAMeetingArray['id'] = $meetingId;
		$endAMeetingArray['host_id'] = $meetingHostId;
		return $this->$sendZoomRequest->$sendRequest('meeting/end', $endAMeetingArray);
	}

}

?>