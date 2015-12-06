<?php
include('sendZoomRequest.php');
class zoomGroup{
	/*Variables for zoomGroup class and their default values*/
	private $groupId = "";
	private $groupName = "";
	private $groupType = "Normal";
	private $groupPageSize = 30;
	private $groupPageNumber = 1;
	private $groupMemberIds = "";

	/*Construct and destruct*/
	public function __construct(){}
	public function __destruct(){}

	/*Get and set for $groupId*/
	public function setGroupId($groupId){
		$this->groupId = $groupId;
	}

	public function getGroupId(){
		return $this->groupId;
	}

	/*Get and set for $groupName*/
	public function setGroupName($groupName){
		$this->groupName = $groupName;
	}

	public function getGroupName($groupName){
		return $this->groupName;
	}

	/*Get and set for $groupType*/
	public function setGroupType($groupType){
		$this->groupType = $groupType;
	}

	public function getGroupType(){
		return $this->groupType;
	}

	/*Get and set for $groupPageSize*/
	public function setGroupPageSize($groupPageSize){
		$this->groupPageSize = $groupPageSize;
	}

	public function getGroupPageSize(){
		return $this->groupPageSize;
	}

	/*Get and set for $groupPageNumber*/
	public function setGroupPageNumber($groupPageNumber){
		$this->groupPageNumberPageNumber = $groupPageNumber;
	}

	public function getGroupPageNumber(){
		return $this->groupPageNumber;
	}

	/*Get and set for $group*/
	public function setGroupMemberIds($groupMemberIds){
		$this->groupMemberIds = $groupMemberIds;
	}

	public function getGroupMemberIds(){
		return $this->groupMemberIds;
	}


	/*Public Functions for management of groups*/
	public function listGroups(){
		$listGroupsArray = array();
		return $this->$sendZoomRequest->$sendRequest('group/list', $listGroupsArray);
	}

	public function getGroupInfo(){
		$getGroupInfoArray = array();
		$getGroupInfoArray['id'] = $groupId;
		return $this->$sendZoomRequest->$sendRequest('group/get', $getGroupInfoArray);
	}

	public function createAGroup(){
		$createAGroupArray = array();
		$createAGroupArray['name'] = $groupName;
		$createAGroupArray['type'] = $groupType;
		return $this->$sendZoomRequest->$sendRequest('group/create', $createAGroupArray);
	}

	public function editAGroup(){
		$editAGroupArray = array();
		$editAGroupArray['id'] = $groupId;
		$editAGroupArray['name'] = $groupName;
		$editAGroupArray['type'] = $groupType;
		return $this->$sendZoomRequest->$sendRequest('group/edit', $editAGroupArray);
	}

	public function deleteAGroup(){
		$deleteAGroupArray = array();
		$deleteAGroupArray['id'] = $groupId;
		return $this->$sendZoomRequest->$sendRequest('group/delete', $deleteAGroupArray);
	}

	public function listGroupMembers(){
		$listGroupMembersArray = array();
		$listGroupMembersArray['id'] = $groupId;
		$listGroupMembersArray['page_size'] = $groupPageSize;
		$listGroupMembersArray['page_number'] = $groupPageNumber;
		return $this->$sendZoomRequest->$sendRequest('group/member/list', $listGroupMembersArray);
	}

	public function addGroupMembers(){
		$addGroupMembersArray = array();
		$addGroupMembersArray['id'] = $groupId;
		$addGroupMembersArray['member_ids'] = $groupMemberIds;
		return $this->$sendZoomRequest->$sendRequest('group/member/add', $addGroupMembersArray);
	}

	public function deleteGroupMembers(){
		$deleteGroupMembersArray = array();
		$deleteGroupMembersArray['id'] = $groupId;
		$deleteGroupMembersArray['member_ids'] = $groupMemberIds;
		return $this->$sendZoomRequest->$sendRequest('group/member/delete', $deleteGroupMembersArray);
	}
}

?>