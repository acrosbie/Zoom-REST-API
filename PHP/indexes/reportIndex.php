<?php
include('classes/zoomReport.php');
if(isset($_POST['getDailyReportSubmit'])){
	$getDailyReportRequired = array('year', 'month');
	$getDailyReportError = false;
	foreach($getDailyReportRequired as $field){
		if(empty($_POST[$field])){
			$getDailyReportError = true;
		}
	}
	if($getDailyReportError){
		echo 'Month or year not set. Cannot get daily report!</br>';
		return false;
	}
	else{
		$newGetDailyReport = new zoomReport();
		$newGetDailyReport->setReportMonth($_POST['Month']);
		$newGetDailyReport->setReportYear($_POST['Year']);
		$newGetDailyReport->getDailyReport();
		$newGetDailyReport = null;
	}
}
if(isset($_POST['getAccountReportSubmit'])){
	$getAccountReportRequired = array('From','To');
	$getAccountReportError = false;
	foreach($getAccountReportRequired as $field){
		if(empty($_POST[$field])){
			$getAccountReportError = true;
		}
	}
	if($getAccountReportError){
		echo 'From or to not set. Cannot get Account Report!</br>';
		return false;
	}
	else{
		$newGetAccountReport = new zoomReport();
		$newGetAccountReport->setReportFrom($_POST['From']);
		$newGetAccountReport->setReportTo($_POST['To']);
		if(isset($_POST['PageSize'])){
			$newGetAccountReport->setReportPageSize($_POST['PageSize']);
		}
		if(isset($_POST['PageNumber'])){
			$newGetAccountReport->setReportPageNumber($_POST['PageNumber']);
		}
		$newGetAccountReport->getAccountReport();
		$newGetAccountReport = null;
	}
}
if(isset($_POST['getUserReportSubmit'])){
	$getUserReportRequired = array('From','To','Id');
	$getUserReportError = false;
	foreach($getUserReportRequired as $field){
		if(empty($_POST[$field])){
			$getUserReportError = true;
		}
	}
	if($getUserReportError){
		echo 'From, to, or User ID not set. Cannot get User Report!</br>';
		return false;
	}
	else{
		$newGetUserReport = new zoomReport();
		$newGetUserReport->setReportFrom($_POST['From']);
		$newGetUserReport->setReportTo($_POST['To']);
		$newGetUserReport->setReportUserId($_POST['Id']);
		if(isset($_POST['PageSize'])){
			$newGetUserReport->setReportPageSize($_POST['PageSize']);
		}
		if(isset($_POST['PageNumber'])){
			$newGetUserReport->setReportPageNumber($_POST['PageNumber']);
		}
		$newGetUserReport->getUserReport();
		$newGetUserReport = null;
	}
}
?>