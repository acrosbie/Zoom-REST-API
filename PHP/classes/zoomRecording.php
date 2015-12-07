<?php
include('sendZoomRequest.php');
class zoomRecording{
	/*Variables for zoomRecording class and their default values*/
	private $recordingHostId = "";
	private $recordingMeetingId = "";
	private $recordingFileId = "";
	private $recordingFrom = "12/05/2018 09:05 pm";
	private $recordingTo = "12/25/2018 09:05 pm";
	private $recordingPageSize = 30;
	private $recordingPageNumber = 1;
	private $sendNewZoomRequest;

	/*Construct and destruct*/
	public function __construct(){}
	public function __construct(zoomUser $sendNewZoomRequest){
		$this->sendZoomRequest = $sendNewZoomRequest;
	}
	public function __destruct(){}

	/*Get and Set $recordingHostId*/
	public function setRecordingHostId($recordingHostId){
		$this->recordingHostId = $recordingHostId;
	}

	public function getRecordingHostId(){
		return $this->recordingHostId;
	}

	/*Get and Set $recordingMeetingId*/
	public function setRecordingMeetingId($recordingMeetingId){
		$this->recordingMeetingId = $recordingMeetingId;
	}

	public function getRecordingMeetingId(){
		return $this->recordingMeetingId;
	}

	/*Get and Set $recordingFileId*/
	public function setRecordingFileId($recordingFileId){
		$this->recordingFileId = $recordingFileId;
	}

	public function getRecordingFileId(){
		return $this->recordingFileId;
	}

	/*Get and Set $recordingFrom*/
	public function setRecordingFrom($recordingFrom){
		$this->recordingFrom = $recordingFrom;
	}

	public function getRecordingFrom(){
		return $this->recordingFrom;
	}

	/*Get and Set $recordingTo*/
	public function setRecordingTo($recordingTo){
		$this->recordingTo = $recordingTo;
	}

	public function getRecordingTo(){
		return $this->recordingTo;
	}

	/*Get and Set $recordingPageSize*/
	public function setRecordingPageSize($recordingPageSize){
		$this->recordingPageSize = $recordingPageSize;
	}

	public function getRecordingPageSize(){
		return $this->recordingPageSize;
	}

	/*Get and Set $recordingPageNumber*/
	public function setRecordingPageNumber($recordingPageNumber){
		$this->recordingPageNumber = $recordingPageNumber;
	}

	public function getRecordingPageNumber(){
		return $this->recordingPageNumber;
	}


	/*Public functions for managing recordings*/
	public function listRecording(){
		$listRecordingArray = array();
		$listRecordingArray['host_id'] = $recordingHostId;
		$listRecordingArray['meeting_numnber'] = $recordingMeetingId;
		$listRecordingArray['from'] = $recordingFrom;
		$listRecordingArray['to'] = $recordingTo;
		$listRecordingArray['page_size'] = $recordingPageSize;
		$listRecordingArray['page_number'] = $recordingPageNumber;
		return $this->$sendZoomRequest->$sendRequest('recording/list', $listRecordingArray);
	}

	public function listMCRecording(){
		$listMCRecordingArray = array();
		$listMCRecordingArray['host_id'] = $recordingHostId;
		$listMCRecordingArray['meeting_numnber'] = $recordingMeetingId;
		$listMCRecordingArray['from'] = $recordingFrom;
		$listMCRecordingArray['to'] = $recordingTo;
		$listMCRecordingArray['page_size'] = $recordingPageSize;
		$listMCRecordingArray['page_number'] = $recordingPageNumber;
		return $this->$sendZoomRequest->$sendRequest('mc/recording/list', $listMCRecordingArray);
	}

	public function getARecording(){
		$getARecordingArray = array();
		$getARecordingArray['meeting_id'] = $recordingMeetingId;
		return $this->$sendZoomRequest->$sendRequest('recording/get', $getARecordingArray);
	}

	public function deleteARecording(){
		$deleteARecordingArray = array();
		$deleteARecordingArray['meeting_id'] = $recordingMeetingId;
		$deleteARecordingArray['file_id'] = $recordingFileId;
		return $this->$sendZoomRequest->$sendRequest('recording/delete', $deleteARecordingArray);
	}
}

?>