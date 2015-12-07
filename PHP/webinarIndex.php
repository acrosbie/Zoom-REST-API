<?php
include('classes/zoomWebinar.php');
if(isset($_POST['createAWebinarSubmit'])){
	$createAWebinarRequired = array('HostId','Topic');
	$createAWebinarError = false;
	foreach($createAWebinarRequired as $field){
		if(empty($_POST[$field])){
			$createAWebinarError = true;
		}
	}
	if($createAWebinarError){
		echo 'Host Id or Topic not set. Cannot Create Webinar!</br>';
		return false;
	}
	else{
		$newCreateWebinar = new zoomWebinar();
		$newCreateWebinar->setWebinarHostId($_POST['HostId']);
		$newCreateWebinar->setWebinarTopic($_POST['Topic']);
		if(isset($_POST['StartTime'])){
			$newCreateWebinar->setWebinarStartTime($_POST['StartTime']);
		}
		if(isset($_POST['Duration'])){
			$newCreateWebinar->setWebinarDuration($_POST['Duration']);
		}
		if(isset($_POST['Timezone'])){
			$newCreateWebinar->setWebinarTimezone($_POST['Timezone']);
		}
		if(isset($_POST['OptionAudio'])){
			$newCreateWebinar->setWebinarOptionAudio($_POST['OptionAudio']);
		}
		if(isset($_POST['Agenda'])){
			$newCreateWebinar->setWebinarAgenda($_POST['Agenda']);
		}
		if(isset($_POST['Type'])){
			$newCreateWebinar->setWebinarType($_POST['Type']);
		}
		$newCreateWebinar->createAWebinar();
		$newCreateWebinar = null;
	}
}
if(isset($_POST['deleteAWebinarSubmit'])){
	$deleteAWebinarRequired = array('Id', 'HostId');
	$deleteAWebinarError = false;
	foreach($deleteAWebinarRequired as $field){
		if(empty($_POST[$field])){
			$deleteAWebinarError = true;
		}
	}
	if($deleteAWebinarError){
		echo 'Cannot delete webinar. Webinar Id and Host ID not set!</br>';
		return false;
	}
	else{
		$newDeleteAWebinar = new zoomWebinar();
		$newDeleteAWebinar->setWebinarHostId($_POST['HostId']);
		$newDeleteAWebinar->setWebinarId($_POST['Id']);
		$newDeleteAWebinar->deleteAWebinar();
		$newDeleteAWebinar = null;
	}
}
if(isset($_POST['listWebinarSubmit'])){
	if(empty($_POST['HostId'])){
		echo 'Host Id not set. Cannot list webinars!</br>';
		return false;
	}
	else{
		$newListWebinar = new zoomWebinar();
		$newListWebinar->setWebinarHostId($_POST['HostId']);
		if(isset($_POST['PageSize'])){
			$newListWebinar->setWebinarPageSize($_POST['PageSize']);
		}
		if(isset($_POST['PageNumber'])){
			$newListWebinar->setWebinarPageNumber($_POST['PageNumber']);
		}
		$newListWebinar->listWebinars();
		$newListWebinar = null;
	}
}
if(isset($_POST['getWebinarInfoSubmit'])){
	
}
if(isset($_POST['updateWebinarInfoSubmit'])){
	
}
if(isset($_POST['endAWebinarSubmit'])){
	
}
if(isset($_POST['getWebinarInfoSubmit'])){
	
}
if(isset($_POST['getEndedWebinarUUID'])){
	
}
if(isset($_POST['getEndedWebinarAttendees'])){
	
}
?>