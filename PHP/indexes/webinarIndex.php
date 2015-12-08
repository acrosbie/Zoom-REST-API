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
	$getWebinarInfoRequired = array('Id', 'HostId');
	$getWebinarInfoError = false;
	foreach($getWebinarInfoRequired as $field){
		if(empty($_POST[$field])){
			$getWebinarInfoError = true;
		}
	}
	if($getWebinarInfoError){
		echo 'Host Id or Webinar Id not set. Cannot get info!</br>';
		return false;
	}
	else{
		$newGetWebinarInfo = new zoomWebinar();
		$newGetWebinarInfo->setWebinarId($_POST['Id']);
		$newGetWebinarInfo->setWebinarHostId($_POST['HostId']);
		$newGetWebinarInfo->getWebinarInfo();
		$newGetWebinarInfo = null;
	}
}
if(isset($_POST['updateWebinarInfoSubmit'])){
	$updateWebinarInfoRequired = array('Id','HostId');
	$updateWebinarInfoError = false;
	foreach($updateWebinarInfoRequired as $field){
		if(empty($_POST[$field])){
			$updateWebinarInfoError = true;
		}
	}
	if($updateWebinarInfoError){
		echo 'Host Id or Webinar not set. Cannot update Webinar Info!</br>';
		return false;
	}
	else{
		$newUpdateWebinarInfo = new zoomWebinar();
		$newUpdateWebinarInfo->setWebinarId($_POST['Id']});
		$newUpdateWebinarInfo->setWebinarHostId($_POST['HostId']);
		if(isset($_POST['Topic'])){
			$newUpdateWebinarInfo->setWebinarTopic($_POST['Topic']);
		}
		if(isset($_POST['StartTime'])){
			$newUpdateWebinarInfo->setWebinarStartTime($_POST['StartTime']);
		}
		if(isset($_POST['Duration'])){
			$newUpdateWebinarInfo->setWebinarDuration($_POST['Duration']);
		}
		if(isset($_POST['Timezone'])){
			$newUpdateWebinarInfo->setWebinarTimezone($_POST['Timezone']);
		}
		if(isset($_POST['OptionAudio'])){
			$newUpdateWebinarInfo->setWebinarOptionAudio($_POST['OptionAudio']);
		}
		if(isset($_POST['Agenda'])){
			$newUpdateWebinarInfo->setWebinarAgenda($_POST['Agenda']);
		}
		if(isset($_POST['Type'])){
			$newUpdateWebinarInfo->setWebinarType($_POST['Type']);
		}
		$newUpdateWebinarInfo->updateWebinarInfo();
		$newUpdateWebinarInfo = null;
	}

}
if(isset($_POST['endAWebinarSubmit'])){
	$endAWebinarRequired = array('Id','HostId');
	$endAWebinarError = false;
	foreach($endAWebinarRequired as $field){
		if(empty($_POST[$field])){
			$endAWebinarError = true;
		}
	}
	if($endAWebinarError){
		echo 'Host Id or Webinar Id not set. Cannot end webinar!</br>';
		return false;
	}
	else{
		$newEndAWebinar = new zoomWebinar();
		$newEndAWebinar->setWebinarId($_POST['Id']);
		$newEndAWebinar->setWebinarHostId($_POST['HostId']);
		$newEndAWebinar->endAWebinar();
		$newEndAWebinar = null;
	}
}
if(isset($_POST['getWebinarRegistrationInfoSubmit'])){
	$getWebinarRegistrationInfoRequired = array('Id','HostId');
	$getWebinarRegistrationError = false;
	foreach($getWebinarRegistrationInfoRequired as $field){
		if(empty($_POST[$field])){
			$getWebinarRegistrationError = true;
		}
	}
	if($getWebinarRegistrationError){
		echo 'Host Id or Webinar Id not set. Cannot get registration info!</br>';
		return false;
	}
	else{
		$newGetWebinarRegistrationInfo = new zoomWebinar();
		$newGetWebinarRegistrationInfo->setWebinarId($_POST['Id']);
		$newGetWebinarRegistrationInfo->setWebinarHostId($_POST['HostId']);
		$newGetWebinarRegistrationInfo->getWebinarRegistrationInfo();
		$newGetWebinarRegistrationInfo = null;
	}
}
if(isset($_POST['getEndedWebinarUUIDSubmit'])){
	$getEndedWebinarUUIDRequired = array('Id', 'HostId');
	$getEndedWebinarUUIDError = false;
	foreach($getEndedWebinarUUIDRequired as $field){
		if(empty($_POST[$field])){
			$getEndedWebinarUUIDError = true;
		}
	}
	if($getEndedWebinarUUIDError){
		echo 'Webinar Id or Host Id not set. Cannot get UUID!</br>';
		return false;
	}
	else{
		$newGetEndedWebinarUUID = new zoomWebinar();
		$newGetEndedWebinarUUID->setWebinarId($_POST['Id']);
		$newGetEndedWebinarUUID->setWebinarHostId($_POST['HostId']);
		$newGetEndedWebinarUUID->getWebinarUUID();
		$newGetEndedWebinarUUID = null;
	}
}
if(isset($_POST['getEndedWebinarAttendeesSubmit'])){
	$getEndedWebinarAttendeesRequired = array('Id', 'HostId');
	$getEndedWebinarAttendeesError = false;
	foreach($getEndedWebinarAttendeesRequired as $field){
		if(empty($_POST[$field])){
			$getEndedWebinarAttendeesError = true;
		}
	}
	if($getEndedWebinarAttendeesError){
		echo 'Host Id or Webinar Id not set. Cannot get Attendee info!</br>';
		return false;
	}
	else{
		$newGetEndedWebinarAttendees = new zoomWebinar();
		$newGetEndedWebinarAttendees->setWebinarId($_POST['Id']);
		$newGetEndedWebinarAttendees->setWebinarHostId($_POST['HostId']);
		$newGetEndedWebinarAttendees->getEndedWebinarAttendees();
		$newGetEndedWebinarAttendees = null;
	}
}
?>