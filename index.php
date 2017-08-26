<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Multi-Step Form</title>
  
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body style="background: #213;">
  

<main ng-app="formApp" ng-controller="formCtrl" ng-cloak>
  <div class="container">
    <div class="row">
      <div class="col-md-12">&nbsp;</div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2 style="color: white; text-align: center;">Multi-Step Form With Angular-js</h1>
      </div>
    </div>
    <form name="multiStepForm" class="form-validation" role="form" novalidate>
      <div class="animate-switch-container" ng-switch on="stage" ng-class="{forward: direction, backward:!direction}">
        <div class="animate-switch" ng-switch-default>
          <div class="row">
            <div class="col-md-12">
              <h3>Welcome to the form.</h3>
              <button type="button" class="btn btn-primary" ng-click="next('stage1')">Start</button>
            </div>
          </div>
        </div>
        <div class="animate-switch" ng-switch-when="stage1">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="tb-fname">First Name:</label>
                <input type="text" class="form-control" id="tb-fname" name="firstName" ng-maxlength="250" ng-model="formParams.firstName" required ng-class="{'input-error': formValidation && multiStepForm.firstName.$error.required}" >
                <span ng-show="multiStepForm.firstName.$error.maxlength">
                  Max character length reached.
                </span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="tb-lname">Last Name:</label>
                <input type="text" class="form-control" id="tb-lname" name="lastName" ng-maxlength="250" ng-model="formParams.lastName" ng-class="{'input-error': formValidation && multiStepForm.lastName.$error.required}" required>
                <span ng-show="multiStepForm.lastName.$error.maxlength">
                  Max character length reached.
                </span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="tb-email">Email:</label>
                <input type="email" class="form-control" id="tb-email" name="email" ng-maxlength="100" ng-model="formParams.email" ng-class="{'input-error': formValidation && multiStepForm.email.$error.required}" ng-model-options="{ updateOn: 'blur' }" required>
                <span ng-show="multiStepForm.email.$error.email">
                  Incorrect email format.
                </span>
                <span ng-show="multiStepForm.email.$error.maxlength">
                  Max character length reached.
                </span>
              </div>
            </div>
          </div>
            <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="tb-lname">Password:</label>
                <input type="password" class="form-control" id="tb-lname" name="password" ng-maxlength="250" ng-model="formParams.password" ng-class="{'input-error': formValidation && multiStepForm.password.$error.required}" required>
                <span ng-show="multiStepForm.password.$error.maxlength">
                  Max character length reached.
                </span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div class="form-group">
                <label for="tb-cc-email">Phone No.:</label>
                <input type="text" class="form-control" id="tb-cc-email" name="ccEmail" ng-maxlength="100" ng-model="formParams.ccEmail" ng-class="{'input-error': formValidation && multiStepForm.ccEmail.$error.email}" ng-model-options="{ updateOn: 'blur' }">
                <span ng-show="multiStepForm.ccEmail.$error.maxlength">
                  Max character length reached.
                </span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <div ng-repeat="cc in formParams.ccEmailList">
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-info" ng-click="back('')">Back</button>
          <button type="button" class="btn btn-primary" ng-click="next('stage2')">Next</button>
        </div>
              <div class="animate-switch" ng-switch-when="stage2">
              <div class="form-group">
                <label for="ta-body">City:</label>
                <input type="text" class="form-control" id="tb-fname" name="city" ng-maxlength="250" ng-model="formParams.city" required ng-class="{'input-error': formValidation && multiStepForm.city.$error.required}" >
                <span ng-show="multiStepForm.city.$error.maxlength">
                  Max character length reached.
                </span>
                </div>
                </div>
           <div class="animate-switch" ng-switch-when="stage2">
              <div class="form-group">
                <label for="ta-body">State:</label>
                <input type="text" class="form-control" id="tb-fname" name="state" ng-maxlength="250" ng-model="formParams.state" required ng-class="{'input-error': formValidation && multiStepForm.state.$error.required}" >
                <span ng-show="multiStepForm.state.$error.maxlength">
                  Max character length reached.
                </span>
            </div>
            </div> 
        <div class="animate-switch" ng-switch-when="stage2">
          <div class="form-group">
            <label for="ta-body">Suggestions:</label>
            <textarea class="form-control" rows="5" id="ta-body" ng-model="formParams.messageBody"></textarea>
          </div>
          
          <button type="button" class="btn btn-info" ng-click="back('stage1')">Back</button>
          <button type="button" class="btn btn-primary" ng-click="next('stage3')">Next</button>
          </div>
        <div class="animate-switch" ng-switch-when="stage3">
          <h3>Summary</h3>
          <p>First name: {{formParams.firstName}}</p>
          <p>Last name: {{formParams.lastName}}</p>
          <p>Email: {{formParams.email}}</p>
          <p>Password: {{formParams.password}}</p>
          <p>Phone No.: {{formParams.ccEmail}}</p>
          <p>City: {{formParams.city}}</p>
          <p>State: {{formParams.state}}</p>
          <p>Message Body: {{formParams.messageBody}}</p>
        </div>
        <div class="animate-switch" ng-switch-when="success">
          <div class="success-wrap">
            <h2 class="confirmation-text">Thank you</h2>
            <p>Your message has been sent.<br>You should receive a confirmation email.</p>
            <div><button type="button" class="btn btn-success" ng-click="reset()" >Send Another</button></div>
          </div>
        </div>
        <div class="animate-switch" ng-switch-when="error" >
          <div class="error-wrap">
            <h2 class="confirmation-text">Error</h2>
            <p>There was an error when attempting to submit your request.<br>Please try again later.</p>
            <p><strong>*This will always error until a web service URL is set.*</strong></p>
            <div><button type="button" class="btn btn-danger" ng-click="reset()" >Try again</button></div>
          </div>
        </div>
      </div>
    </form>
    
  </div>
</main>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular-animate.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
