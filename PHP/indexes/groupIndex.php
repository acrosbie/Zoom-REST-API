<?php
include('classes/zoomGroup.php');
if(isset($_POST['listGroupsSubmit'])){
	$newListGroups = new zoomGroup();
	$newListGroups->listGroups();
	$newListGroups = null;
}
if(isset($_POST['getGroupInfoSubmit'])){
	if(empty($_POST['Id'])){
		echo 'Group Id not set. Cannot get group info!</br>';
		return false;
	}
	else{
		$newGetGroupInfo = new zoomGroup();
		$newGetGroupInfo->setGroupId($_POST['Id']);
		$newGetGroupInfo->getGroupInfo();
		$newGetGroupInfo = null;
	}
}
if(isset($_POST['createAGroupSubmit'])){
	if(empty($_POST['Name'])){
		echo 'Group name not set. Cannot Create group!</br>';
		return false;
	}
	else{
		$newCreateAGroup = new zoomGroup();
		$newCreateAGroup->setGroupName($_POST['Name']);
		if(isset($_POST['Type'])){
			$newCreateAGroup->setGroupType($_POST['Type']);
		}
		$newCreateAGroup->createAGroup();
		$newCreateAGroup = null;
	}
}
if(isset($_POST['editAGroupSubmit'])){
	if(empty($_POST['Id'])){
		echo 'Group Id not set. Cannot edit Group!</br>';
		return false;
	}
	else{
		$newEditAGroup = new zoomGroup();
		$newEditAGroup->setGroupId($_POST['Id']);
		if(isset($_POST['Name'])){
			$newEditAGroup->setGroupName($_POST['Name']);
		}
		if(isset($_POST['Type'])){
			$newEditAGroup->setGroupType($_POST['Type']);
		}
		$newEditAGroup->editAGroup();
		$newEditAGroup = null;
	}
}

if(isset($_POST['deleteAGroupSubmit'])){
	if(empty($_POST['Id'])){
		echo 'Group Id not set. Cannot delete group!</br>';
		return false;
	}
	else{
		$newDeleteAGroup = new zoomGroup();
		$newDeleteAGroup->setGroupId($_POST['Id']);
		$newDeleteAGroup->deleteAGroup();
		$newDeleteAGroup = null;
	}
}
if(isset($_POST['listGroupMembersSubmit'])){
	if(empty($_POST['Id'])){
		echo 'Group id not set. Cannot list group members!</br>';
		return false;
	}
	else{
		$newListGroupMembers = new zoomGroup();
		$newListGroupMembers->setGroupId($_POST['Id']);
		if(isset($_POST['PageSize'])){
			$newListGroupMembers->setGroupPageSize($_POST['PageSize']);
		}
		if(isset($_POST['PageNumber'])){
			$newListGroupMembers->setGroupPageNumber($_POST['PageNumber']);
		}
		$newListGroupMembers->listGroupMembers();
		$newListGroupMembers = null;
	}
}
if(isset($_POST['addGroupMembersSubmit'])){
	$addGroupMembersRequired = array('Id', 'MemberIds');
	$addGroupMembersError = false;
	foreach($addGroupMembersRequired as $field){
		if(empty($_POST[$field])){
			$addGroupMembersError = true;
		}
	}
	if($addGroupMembersError){
		echo 'Group Id or Member Ids not set! Cannot add group members!</br>';
		return false;
	}
	else{
		$newAddGroupMembers = new zoomGroup();
		$newAddGroupMembers->setGroupId($_POST['Id']);
		$newAddGroupMembers->setGroupMemberIds($_POST['MemberIds']);
		$newAddGroupMembers->addGroupMembers();
		$newAddGroupMembers = null;
	}
}
if(isset($_POST['deleteGroupMembersSubmit'])){
	$deleteGroupMembersRequired = array('Id', 'MemberIds');
	$deleteGroupMembersError = false;
	foreach($deleteGroupMembersRequired as $field){
		if(empty($_POST[$field])){
			$deleteGroupMembersError = true;
		}
	}
	if($deleteGroupMembersError){
		echo 'Group Id or Member Ids not set! Cannot delete group members!</br>';
		return false;
	}
	else{
		$newdeleteGroupMembers = new zoomGroup();
		$newdeleteGroupMembers->setGroupId($_POST['Id']);
		$newdeleteGroupMembers->setGroupMemberIds($_POST['MemberIds']);
		$newdeleteGroupMembers->deleteGroupMembers();
		$newdeleteGroupMembers = null;
	}
}
?>