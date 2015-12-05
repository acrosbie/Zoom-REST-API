<?php
include('sendZoomRequest.php');
class zoomGroup{
	/*Public Functions for management of groups*/
	public function listGroups(){
		$listGroupsArray = array();
		return $this->$sendZoomRequest->$sendRequest('group/list', $listGroupsArray);
	}

	public function getGroupInfo(){
		$getGroupInfoArray = array();
		$getGroupInfoArray['id'] = $_POST['groupId'];
		return $this->$sendZoomRequest->$sendRequest('group/get', $getGroupInfoArray);
	}

	public function createAGroup(){
		$createAGroupArray = array();
		$createAGroupArray['name'] = $_POST['groupName'];
		$createAGroupArray['type'] = $_POST['groupType'];
		return $this->$sendZoomRequest->$sendRequest('group/create', $createAGroupArray);
	}

	public function editAGroup(){
		$editAGroupArray = array();
		$editAGroupArray['id'] = $_POST['groupId'];
		$editAGroupArray['name'] = $_POST['groupName'];
		$editAGroupArray['type'] = $_POST['groupType'];
		return $this->$sendZoomRequest->$sendRequest('group/edit', $editAGroupArray);
	}

	public function deleteAGroup(){
		$deleteAGroupArray = array();
		$deleteAGroupArray['id'] = $_POST['groupId'];
		return $this->$sendZoomRequest->$sendRequest('group/delete', $deleteAGroupArray);
	}

	public function listGroupMembers(){
		$listGroupMembersArray = array();
		$listGroupMembersArray['id'] = $_POST['groupId'];
		$listGroupMembersArray['page_size'] = $_POST['pageSize'];
		$listGroupMembersArray['page_number'] = $_POST['pageNumber'];
		return $this->$sendZoomRequest->$sendRequest('group/member/list', $listGroupMembersArray);
	}

	public function addGroupMembers(){
		$addGroupMembersArray = array();
		$addGroupMembersArray['id'] = $_POST['groupId'];
		$addGroupMembersArray['member_ids'] = $_POST['listUserId'];
		return $this->$sendZoomRequest->$sendRequest('group/member/add', $addGroupMembersArray);
	}

	public function deleteGroupMembers(){
		$deleteGroupMembersArray = array();
		$deleteGroupMembersArray['id'] = $_POST['groupId'];
		$deleteGroupMembersArray['member_ids'] = $_POST['listUserId'];
		return $this->$sendZoomRequest->$sendRequest('group/member/delete', $deleteGroupMembersArray);
	}
}

?>