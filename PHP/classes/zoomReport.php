<?php
include('sendZoomRequest.php');
class zoomReport{
	/*Variables for zoomMeeting class and their default values*/
	private $reportYear = 2015;
	private $reportMonth = 12;
	private $reportFrom = "";
	private $reportTo = "";
	private $reportPageSize = 30;
	private $reportPageNumber = 1;
	private $reportUserId = "";
	private $sendNewZoomRequest;

	/*Construct and destruct*/
	public function __construct(){}
	public function __construct(zoomUser $sendNewZoomRequest){
		$this->sendZoomRequest = $sendNewZoomRequest;
	}
	public function __destruct(){}

	/*Get and Set $reportYear*/
	public function setReportYear($reportYear){
		$this->reportYear = $reportYear;
	}

	public function getReportYear(){
		return $this->reportYear;
	}

	/*Get and Set $reportMonth*/
	public function setReportMonth($reportMonth){
		$this->reportMonth = $reportMonth;
	}

	public function getReportMonth(){
		return $this->reportMonth;
	}

	/*Get and Set $reportFrom*/
	public function setReportFrom($reportFrom){
		$this->reportFrom = $reportFrom;
	}

	public function getReportFrom(){
		return $this->reportFrom;
	}

	/*Get and Set $reportTo*/
	public function setReportTo($reportTo){
		$this->reportTo = $reportTo;
	}

	public function getReportTo(){
		return $this->reportTo;
	}

	/*Get and Set $reportPageSize*/
	public function setReportPageSize($reportPageSize){
		$this->reportPageSize = $reportPageSize;
	}

	public function getReportPageSize(){
		return $this->reportPageSize;
	}

	/*Get and Set $reportPageNumber*/
	public function setReportPageNumber($reportPageNumber){
		$this->reportPageNumber = $reportPageNumber;
	}

	public function getReportPageNumber(){
		return $this->reportPageNumber;
	}

	/*Get and Set $reportUserId*/
	public function setReportUserId($reportUserId){
		$this->reportUserId = $reportUserId;
	}

	public function getReportUserId(){
		return $this->reportUserId;
	}

	/*Public functions for management of reports*/
	public function getDailyReport(){
		$getDailyReportArray = array()
		$getDailyReportArray['year'] = $reportYear;
		$getDailyReportArray['month'] = $reportMonth;
		return $this->$sendZoomRequest->$sendRequest('report/getdailyreport', $getDailyReportArray);
	}

	public function getAccountReport(){
		$getAccountReportArray = array()
		$getAccountReportArray['from'] = $reportFrom;
		$getAccountReportArray['to'] = $reportTo;
		$getAccountReportArray['page_size'] = $reportPageSize;
		$getAccountReportArray['page_number'] = $reportPageNumber;
		return $this->$sendZoomRequest->$sendRequest('report/getaccountreport', $getAccountReportArray);
	}

	public function getUserReport(){
		$getUserReportArray = array()
		$getUserReportArray['user_id'] = $reportUserId;
		$getUserReportArray['from'] = $reportFrom;
		$getUserReportArray['to'] = $reportTo;
		$getUserReportArray['page_size'] = $reportPageSize;
		$getUserReportArray['page_number'] = $reportPageNumber;
		return $this->$sendZoomRequest->$sendRequest('report/getuserreport', $getUserReportArray);
	}
}

?>