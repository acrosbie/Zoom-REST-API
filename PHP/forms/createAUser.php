<div id="CreateAUser" class="subgroup well"> 
  <h3 class="ZoomBlue">Create A User</h3>
  <h4 class="ZoomBlue">Synopsis</h4>
  The "Create A User" call will create a new user on Zoom and return the created user id. Please note that
  <ol><li>Your account must have this privilege to provision users. Zoom will only assign this privilege to a trusted partner</li>
      <li>The create user email address will receive a confirmation email. They will have to select an activation link and set their password here on Zoom.</li></ol>
  <form class="form-horizontal" name="createAUserForm" id="createAUserForm" method="post" action="userIndex.php">
    <fieldset>
    <!-- Create A User Form -->
    <legend class="ZoomBlue">Create A User Form</legend>

    <!-- Email input field -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserEmail">User Email</label>  
      <div class="col-md-4">
      <input id="createAUserEmail" name="createAUserEmail" placeholder="youremail@domain.com" type="email" class="form-control input-md" required="">
      <span class="help-block">Enter a Valid Email</span>  
      </div>
    </div>

    <!-- User type field -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserType">User Type</label>
      <div class="col-md-4">
      <div class="radio">
        <label for="createAUserType-0">
          <input type="radio" name="createAUserType" id="createAUserType-0" value="1" checked="checked">
          1 - Basic User
        </label>
      </div>
      <div class="radio">
        <label for="createAUserType-1">
          <input type="radio" name="createAUserType" id="createAUserType-1" value="2">
          2 - Pro User
        </label>
      </div>
      <div class="radio">
        <label for="createAUserType-2">
          <input type="radio" name="createAUserType" id="createAUserType-2" value="3">
          3 - Corp User
        </label>
      </div>
      </div>
    </div>

    <!-- User first name field -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserFirstName">User First Name</label>  
      <div class="col-md-4">
      <input id="createAUserFirstName"  name="createAUserFirstName" type="text" class="form-control input-md" placeholder="Aidan"
      oninvalid="setCustomValidity('Please Enter A Valid First Name')"
      onchange="try{setCustomValidity('')}catch(e){}"
      pattern="^[-'a-zA-ZÀ-ÖØ-öø-ſ]+$" />
      </div>
    </div>

    <!-- User last name field -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserLastName">User Last Name</label>  
      <div class="col-md-4">
      <input id="createAUserLastName" name="createAUserLastName" type="text" class="form-control input-md" placeholder="Crosbie"
      oninvalid="setCustomValidity('Please Enter A Valid Last Name')"
      onchange="try{setCustomValidity('')}catch(e){}"
      pattern="^[-'a-zA-ZÀ-ÖØ-öø-ſ]+$" />
      </div>
    </div>

    <!-- User disable chat field -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserDisableChat">Disable Chat</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="createAUserDisableChat-0">
          <input type="radio" name="createAUserDisableChat" id="createAUserDisableChat-0" value="true">
          True
        </label> 
        <label class="radio-inline" for="createAUserDisableChat-1">
          <input type="radio" name="createAUserDisableChat" id="createAUserDisableChat-1" value="false" checked="checked">
          False
        </label>
      </div>
    </div>

    <!-- User enable E2E field -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserEnableE2EEncryption">Enable End-To-End Encryption</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="createAUserEnableE2EEncryption-0">
          <input type="radio" name="createAUserEnableE2EEncryption" id="createAUserEnableE2EEncryption-0" value="true">
          True
        </label> 
        <label class="radio-inline" for="createAUserEnableE2EEncryption-1">
          <input type="radio" name="createAUserEnableE2EEncryption" id="createAUserEnableE2EEncryption-1" value="false" checked="checked">
          False
        </label>
      </div>
    </div>

    <!-- User enable silent field -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserEnableSilentMode">Enable Silent Mode</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="createAUserEnableSilentMode-0">
          <input type="radio" name="createAUserEnableSilentMode" id="createAUserEnableSilentMode-0" value="true">
          True
        </label> 
        <label class="radio-inline" for="createAUserEnableSilentMode-1">
          <input type="radio" name="createAUserEnableSilentMode" id="createAUserEnableSilentMode-1" value="false" checked="checked">
          False
        </label>
      </div>
    </div>

    <!-- User disable group hd field -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserDisableGroupHD">Disable Group HD</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="createAUserDisableGroupHD-0">
          <input type="radio" name="createAUserDisableGroupHD" id="createAUserDisableGroupHD-0" value="true">
          True
        </label> 
        <label class="radio-inline" for="createAUserDisableGroupHD-1">
          <input type="radio" name="createAUserDisableGroupHD" id="createAUserDisableGroupHD-1" value="false" checked="checked">
          False
        </label>
      </div>
    </div>

    <!-- User disable recording field -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserDisableRecording">Disable Recording</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="createAUserDisableRecording-0">
          <input type="radio" name="createAUserDisableRecording" id="createAUserDisableRecording-0" value="true">
          True
        </label> 
        <label class="radio-inline" for="createAUserDisableRecording-1">
          <input type="radio" name="createAUserDisableRecording" id="createAUserDisableRecording-1" value="false" checked="checked">
          False
        </label>
      </div>
    </div>

    <!-- User enable cmr field -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserEnableCMR">Enable CMR</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="createAUserEnableCMR-0">
          <input type="radio" name="createAUserEnableCMR" id="createAUserEnableCMR-0" value="true">
          True
        </label> 
        <label class="radio-inline" for="createAUserEnableCMR-1">
          <input type="radio" name="createAUserEnableCMR" id="createAUserEnableCMR-1" value="false" checked="checked">
          False
        </label>
      </div>
    </div>

    <!-- User enable auto recording field -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserEnableAutoRecording">Enable Auto Recording</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="createAUserEnableAutoRecording-0">
          <input type="radio" name="createAUserEnableAutoRecording" id="createAUserEnableAutoRecording-0" value="true">
          True
        </label> 
        <label class="radio-inline" for="createAUserEnableAutoRecording-1">
          <input type="radio" name="createAUserEnableAutoRecording" id="createAUserEnableAutoRecording-1" value="false" checked="checked">
          False
        </label>
      </div>
    </div>

    <!-- User enable cloud recording field -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserEnableCloudRecording">Enable Cloud Recording</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="createAUserEnableCloudRecording-0">
          <input type="radio" name="createAUserEnableCloudRecording" id="createAUserEnableCloudRecording-0" value="true">
          True
        </label> 
        <label class="radio-inline" for="createAUserEnableCloudRecording-1">
          <input type="radio" name="createAUserEnableCloudRecording" id="createAUserEnableCloudRecording-1" value="false" checked="checked">
          False
        </label>
      </div>
    </div>

    <!-- User Track ID-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserTrackId">Track ID</label>  
      <div class="col-md-4">
      <input id="createAUserTrackId" name="createAUserTrackId" type="text" class="form-control input-md">
      <span class="help-block">Used created user is being referred</span>  
      </div>
    </div>

    <!-- User Meeting Capacity -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserMeetingCapacity">Meeting Capacity</label>  
      <div class="col-md-4">
      <input id="createAUserMeetingCapacity" name="createAUserMeetingCapacity" type="number" min="0" placeholder="0" class="form-control input-md"
      oninvalid="setCustomValidity('Meeting Capacity Must Be A Value Greater Than 0')"
      onchange="try{setCustomValidity('')}catch(e){}"
      />
      <span class="help-block">0 will default to account settings</span>  
      </div>
    </div>

    <!-- User Enable Webinar -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserEnableWebinar">Enable Webinar</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="createAUserEnableWebinar-0">
          <input type="radio" name="createAUserEnableWebinar" id="createAUserEnableWebinar-0" value="true">
          True
        </label> 
        <label class="radio-inline" for="createAUserEnableWebinar-1">
          <input type="radio" name="createAUserEnableWebinar" id="createAUserEnableWebinar-1" value="false" checked="checked">
          False
        </label>
      </div>
    </div>

    <!-- User webinar capacity -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserWebinarCapacity">Webinar Capacity</label>
      <div class="col-md-4">
      <div class="radio">
        <label for="createAUserWebinarCapacity-0">
          <input type="radio" name="createAUserWebinarCapacity" id="createAUserWebinarCapacity-0" value="100" checked="checked">
          100
        </label>
      </div>
      <div class="radio">
        <label for="createAUserWebinarCapacity-1">
          <input type="radio" name="createAUserWebinarCapacity" id="createAUserWebinarCapacity-1" value="500">
          500
        </label>
      </div>
      <div class="radio">
        <label for="createAUserWebinarCapacity-2">
          <input type="radio" name="createAUserWebinarCapacity" id="createAUserWebinarCapacity-2" value="1000">
          1000
        </label>
      </div>
      <div class="radio">
        <label for="createAUserWebinarCapacity-3">
          <input type="radio" name="createAUserWebinarCapacity" id="createAUserWebinarCapacity-3" value="3000">
          3000
        </label>
      </div>
      </div>
    </div>

    <!-- User enable large meeting -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserEnableLarge">Enable Large Meeting</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="createAUserEnableLarge-0">
          <input type="radio" name="createAUserEnableLarge" id="createAUserEnableLarge-0" value="true">
          True
        </label> 
        <label class="radio-inline" for="createAUserEnableLarge-1">
          <input type="radio" name="createAUserEnableLarge" id="createAUserEnableLarge-1" value="false" checked="checked">
          False
        </label>
      </div>
    </div>

    <!-- User large meeting capacity -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserLargeCapacity">Large Meeting Capacity</label>
      <div class="col-md-4">
      <div class="radio">
        <label for="createAUserLargeCapacity-0">
          <input type="radio" name="createAUserLargeCapacity" id="createAUserLargeCapacity-0" value="100" checked="checked">
          100
        </label>
      </div>
      <div class="radio">
        <label for="createAUserLargeCapacity-1">
          <input type="radio" name="createAUserLargeCapacity" id="createAUserLargeCapacity-1" value="200">
          200
        </label>
      </div>
      </div>
    </div>

    <!-- User disable feedback -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserDisableFeedback">Disable Feedback</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="createAUserDisableFeedback-0">
          <input type="radio" name="createAUserDisableFeedback" id="createAUserDisableFeedback-0" value="true">
          True
        </label> 
        <label class="radio-inline" for="createAUserDisableFeedback-1">
          <input type="radio" name="createAUserDisableFeedback" id="createAUserDisableFeedback-1" value="false" checked="checked">
          False
        </label>
      </div>
    </div>

    <!-- User disable JBH reminder -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserDisableJBHReminder">Disable Join Before Host Reminder</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="createAUserDisableJBHReminder-0">
          <input type="radio" name="createAUserDisableJBHReminder" id="createAUserDisableJBHReminder-0" value="true">
          True
        </label> 
        <label class="radio-inline" for="createAUserDisableJBHReminder-1">
          <input type="radio" name="createAUserDisableJBHReminder" id="createAUserDisableJBHReminder-1" value="false" checked="checked">
          False
        </label>
      </div>
    </div>

    <!-- User deptartment -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserDept">Department</label>  
      <div class="col-md-4">
      <input id="createAUserDept" name="createAUserDept" type="text" placeholder="Engineering" class="form-control input-md">
      <span class="help-block">Assigns User to a Department</span>  
      </div>
    </div>

    <!-- Create A User Submit -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="createAUserSubmit"></label>
      <div class="col-md-4">
        <button type="submit" class="btn btn-default" name="createAUserSubmit">Submit</button>
      </div>
    </div>

    </fieldset>
  </form>
</div>