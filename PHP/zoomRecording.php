<?php
/*Be sure to include sendZoomRequest.php*/
class zoomRecording{
	/*Public functions for managing recordings*/
	public function listRecording(){
		$listRecordingArray = array();
		$listRecordingArray['host_id'] = $_POST['userId'];
		$listRecordingArray['meeting_numnber'] = $_POST['meetingId'];
		$listRecordingArray['from'] = $_POST['from'];
		$listRecordingArray['to'] = $_POST['to'];
		$listRecordingArray['page_size'] = $_POST['pageSize'];
		$listRecordingArray['page_number'] = $_POST['pageNumber'];
		return $this->$sendZoomRequest->$sendRequest('recording/list', $listRecordingArray);
	}

	public function listMCRecording(){
		$listMCRecordingArray = array();
		$listMCRecordingArray['host_id'] = $_POST['userId'];
		$listMCRecordingArray['meeting_numnber'] = $_POST['meetingId'];
		$listMCRecordingArray['from'] = $_POST['from'];
		$listMCRecordingArray['to'] = $_POST['to'];
		$listMCRecordingArray['page_size'] = $_POST['pageSize'];
		$listMCRecordingArray['page_number'] = $_POST['pageNumber'];
		return $this->$sendZoomRequest->$sendRequest('mc/recording/list', $listMCRecordingArray);
	}

	public function getARecording(){
		$getARecordingArray = array();
		$getARecordingArray['meeting_id'] = $_POST['meetingId'];
		return $this->$sendZoomRequest->$sendRequest('recording/get', $getARecordingArray);
	}

	public function deleteARecording(){
		$deleteARecordingArray = array();
		$deleteARecordingArray['meeting_id'] = $_POST['meetingId'];
		$deleteARecordingArray['file_id'] = $_POST['fileId'];
		return $this->$sendZoomRequest->$sendRequest('recording/delete', $deleteARecordingArray);
	}
}

?>