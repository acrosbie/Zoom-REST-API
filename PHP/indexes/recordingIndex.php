<?php
include('classes/zoomRecording.php');
if(isset($_POST['listRecordingSubmit'])){
	if(empty($_POST['HostId'])){
		echo 'Cannot list recordings. Host Id not set!</br>';
		return false;
	}
	else{
		$newListRecording = new zoomRecording();
		$newListRecording->setRecordingHostId($_POST['HostId']);
		if(isset($_POST['MeetingNumber'])){
			$newListRecording->setRecordingMeetingNumber($_POST['MeetingNumber']);
		}
		if(isset($_POST['From'])){
			$newListRecording->setRecordingFrom($_POST['From']);
		}
		if(isset($_POST['To'])){
			$newListRecording->setRecordingTo($_POST['To']);
		}
		if(isset($_POST['PageSize'])){
			$newListRecording->setRecordingPageSize($_POST['PageSize']);
		}
		if(isset($_POST['PageNumber'])){
			$newListRecording->setRecordingPageNumber($_POST['PageNumber']);
		}
		$newListRecording->listRecording();
		$newListRecording = null;
	}
}
if(isset($_POST['listMCRecordingSubmit'])){
	if(empty($_POST['HostId'])){
		echo 'Cannot list MC recordings. Host Id not set!</br>';
		return false;
	}
	else{
		$newListMCRecording = new zoomRecording();
		$newListMCRecording->setRecordingHostId($_POST['HostId']);
		if(isset($_POST['MeetingNumber'])){
			$newListMCRecording->setRecordingMeetingNumber($_POST['MeetingNumber']);
		}
		if(isset($_POST['From'])){
			$newListMCRecording->setRecordingFrom($_POST['From']);
		}
		if(isset($_POST['To'])){
			$newListMCRecording->setRecordingTo($_POST['To']);
		}
		if(isset($_POST['PageSize'])){
			$newListMCRecording->setRecordingPageSize($_POST['PageSize']);
		}
		if(isset($_POST['PageNumber'])){
			$newListMCRecording->setRecordingPageNumber($_POST['PageNumber']);
		}
		$newListMCRecording->listMCRecording();
		$newListMCRecording = null;
	}
}
if(isset($_POST['getRecordingSubmit'])){
	if(empty($_POST['MeetingId'])){
		echo 'Meeting ID not set. Cannot get recording!</br>';
		return false;
	}
	else{
		$newGetRecording = new zoomRecording();
		$newGetRecording->setRecordingMeetingId($_POST['MeetingId']);
		$newGetRecording->getARecording();
		$newGetRecording = null;
	}
}
if(isset($_POST['deleteRecordingSubmit'])){
	if(empty($_POST['MeetingId'])){
		echo 'Meeting ID not set. Cannot delete recording!</br>';
		return false;
	}
	else{
		$newDeleteRecording = new zoomRecording();
		$newDeleteRecording->setRecordingMeetingId($_POST['MeetingId']);
		if(isset($_POST['FileId']){
			$newDeleteRecording->setRecordingFileId($_POST['FileId']);
		}
		$newDeleteRecording->deleteARecording();
		$newDeleteRecording = null;
	}
}
?>