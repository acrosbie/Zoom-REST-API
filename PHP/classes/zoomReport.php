<?php
include('sendZoomRequest.php');
class zoomReport{
	/*Public functions for management of reports*/
	public function getDailyReport(){
		$getDailyReportArray = array()
		$getDailyReportArray['year'] = $_POST['year'];
		$getDailyReportArray['month'] = $_POST['month'];
		return $this->$sendZoomRequest->$sendRequest('report/getdailyreport', $getDailyReportArray);
	}

	public function getAccountReport(){
		$getAccountReportArray = array()
		$getAccountReportArray['from'] = $_POST['from'];
		$getAccountReportArray['to'] = $_POST['to'];
		$getAccountReportArray['page_size'] = $_POST['pageSize'];
		$getAccountReportArray['page_number'] = $_POST['pageNumber'];
		return $this->$sendZoomRequest->$sendRequest('report/getaccountreport', $getAccountReportArray);
	}

	public function getUserReport(){
		$getUserReportArray = array()
		$getUserReportArray['user_id'] = $_POST['userId'];
		$getUserReportArray['from'] = $_POST['from'];
		$getUserReportArray['to'] = $_POST['to'];
		$getUserReportArray['page_size'] = $_POST['pageSize'];
		$getUserReportArray['page_number'] = $_POST['pageNumber'];
		return $this->$sendZoomRequest->$sendRequest('report/getuserreport', $getUserReportArray);
	}
}

?>