<?php
include('classes/zoomMeeting.php');
if(isset($_POST['createAMeetingSubmit'])){
	$createAMeetingRequired = array('HostId', 'Topic', 'Type')
	$createAMeetingError = false;
	/*Check Required Parameter*/
	foreach($createAmeetingRequired as $field){
		if(empty($_POST[$field])){
			$createAMeetingError = true;
		}
	}
	if($createAMeetingError){
		echo 'Host Id, Topic, or Type not set. Cannot create meeting!</br>';
		return false;
	}
	else{
		$newCreateMeeting = new zoomMeeting();
		$newCreateMeeting->setMeetingHostId($_POST['HostId']);
		$newCreateMeeting->setMeetingTopic($_POST['Topic']);
		$newCreateMeeting->setMeetingType($_POST['Type']);
		if(isset($_POST['StartTime'])){
			$newCreateMeeting->setMeetingStartTime($_POST['StartTime']);
		}
		if(isset($_POST['Duration'])){
			$newCreateMeeting->setMeetingDuration($_POST['Duration']);
		}
		if(isset($_POST['Timezone'])){
			$newCreateMeeting->setMeetingTimezone($_POST['Timezone']);
		}
		if(isset($_POST['Password'])){
			$newCreateMeeting->setMeetingPassword($_POST['Password']);
		}
		if(isset($_POST['OptionJBH'])){
			$newCreateMeeting->setMeetingOptionJBH($_POST['OptionJBH']);
		}
		if(isset($_POST['OptionStartType'])){
			$newCreateMeeting->setMeetingOptionStartType($_POST['OptionStartType']);
		}
		if(isset($_POST['OptionHostVideo'])){
			$newCreateMeeting->setMeetingOptionHostVideo($_POST['OptionHostVideo']);
		}
		if(isset($_POST['OptionParticipantsVideo'])){
			$newCreateMeeting->setMeetingOptionParticipantsVideo($_POST['OptionParticipantsVideo']);
		}
		if(isset($_POST['OptionAudio'])){
			$newCreateMeeting->setMeetingOptionAudio($_POST['OptionAudio']);
		}
		$newCreateMeeting->createAMeeting();
		$newCreateMeeting = null;
	}
}
if(isset($_POST['deleteAMeetingSubmit'])){
	$deleteAMeetingRequired = array('Id', 'HostId');
	$deleteAMeetingError = false;
	foreach($deleteAMeetingRequired as $field){
		if(empty($_POST[$field])){
			$deleteAMeetingError = true;
		}
	}
	if($deleteAMeetingError){
		echo 'Meeting ID or Host ID empty. Cannot delete meeting!</br>';
		return false;
	}
	else{
		$newDeleteMeeting = new zoomMeeting();
		$newDeleteMeeting->setMeetingId($_POST['Id']);
		$newDeleteMeeting->setMeetingHostId($_POST['HostId']);
		$newDeleteMeeting->deleteAMeeting();
		$newDeleteMeeting = null;
	}
	
}
if(isset($_POST['listMeetingsSubmit'])){
	if(empty($_POST['HostId'])){
		echo 'Host ID not set. Cannot list meetings!</br>';
		return false;
	}
	else{
		$newListMeetings = new zoomMeeting();
		$newListMeetings->setMeetingHostId($_POST['HostId']);
		if(isset($_POST['PageSize'])){
			$newListMeetings->setMeetingPageSize($_POST['PageSize']);
		}
		if(isset($_POST['PageNumber'])){
			$newListMeetings->setMeetingPageNumber($_POST['PageNumber']);
		}
		$newListMeetings->listMeetings();
		$newListMeetings = null;
	}
	
}
if(isset($_POST['listLiveMeetingsSubmit'])){
	$newListLiveMeetings = new zoomMeeting();
	$newListLiveMeetings->listLiveMeetings();
	$newListLiveMeetings = null;
}
if(isset($_POST['getMeetingInfoSubmit'])){
	$getMeetingInfoRequired = array('Id', 'HostId');
	$getMeetingInfoError = false; 
	foreach($getMeetingInfoRequired as $field){
		if(empty($_POST[$field])){
			$getMeetingInfoError = true;
		}
	}
	if($getMeetingInfoError){
		echo 'Meeting Id or Host ID not set. Cannot get meeting info!</br>';
		return false;
	}
	else{
		$newGetMeetingInfo = new zoomMeeting();
		$newGetMeetingInfo->setMeetingId($_POST['Id']);
		$newGetMeetingInfo->setMeetingHostId($_POST['HostId']);
		$newGetMeetingInfo->getMeetingInfo();
		$newGetMeetingInfo = null;
	}
}
if(isset($_POST['updateMeetingInfoSubmit'])){
	$updateMeetingInfoRequired = array('Id', 'HostId');
	$updateMeetingInfoError = false;
	foreach($updateMeetingInfoRequired as $field){
		if(empty($_POST[$field])){
			$updateMeetingInfoError = true;
		}
	}
	if($updateMeetingInfoError){
		echo 'Meeting Id or host id not set. Cannot update meeting info!</br>';
		return false;
	}
	else{
		$newUpdateMeetingInfo = new zoomMeeting();
		$newUpdateMeetingInfo->setMeetingId($_POST['Id']);
		$newUpdateMeetingInfo->setMeetingHostId($_POST['HostId']);
		if(isset($_POST['Topic'])){
			$newUpdateMeetingInfo->setMeetingTopic($_POST['Topic']);
		}
		if(isset($_POST['Type'])){
			$newUpdateMeetingInfo->setMeetingType($_POST['Type']);
		}
		if(isset($_POST['StartTime'])){
			$newUpdateMeetingInfo->setMeetingStartTime($_POST['StartTime']);
		}
		if(isset($_POST['Duration'])){
			$newUpdateMeetingInfo->setMeetingDuration($_POST['Duration']);
		}
		if(isset($_POST['Timezone'])){
			$newUpdateMeetingInfo->setMeetingTimezone($_POST['Timezone']);
		}
		if(isset($_POST['Password'])){
			$newUpdateMeetingInfo->setMeetingPassword($_POST['Password']);
		}
		if(isset($_POST['OptionJBH'])){
			$newUpdateMeetingInfo->setMeetingOptionJBH($_POST['OptionJBH']);
		}
		if(isset($_POST['OptionStartType'])){
			$newUpdateMeetingInfo->setMeetingOptionStartType($_POST['OptionStartType']);
		}
		if(isset($_POST['OptionHostVideo'])){
			$newUpdateMeetingInfo->setMeetingOptionHostVideo($_POST['OptionHostVideo']);
		}
		if(isset($_POST['OptionParticipantsVideo'])){
			$newUpdateMeetingInfo->setMeetingOptionParticipantsVideo($_POST['OptionParticipantsVideo']);
		}
		if(isset($_POST['OptionAudio'])){
			$newUpdateMeetingInfo->setMeetingOptionAudio($_POST['OptionAudio']);
		}
		$newUpdateMeetingInfo->updateMeetingInfo();
		$newUpdateMeetingInfo = null;
	}
}
if(isset($_POST['endAMeetingSubmit'])){
	$endAMeetingRequired = array('Id', 'HostId');
	$endAmeetingError = false;
	foreach($endAMeetingRequired as $field){
		if(empty($_POST[$field])){
			$endAmeetingError = true;
		}
	}
	if($endAmeetingError){
		echo 'Meeting Id or Host Id not set. Cannot end meeting!</br>';
		return false;
	}
	else{
		$newEndAMeeting = new zoomMeeting();
		$newEndAMeeting->setMeetingId($_POST['Id']);
		$newEndAMeeting->setMeetingHostId($_POST['HostId']);
		$newEndAMeeting->endAMeeting();
		$newEndAMeeting = null;
	}
}
?>