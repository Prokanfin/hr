

/*loginApp.controller('loginAppCtrl', function ($scope, $http, service_list, $location) {
 
 
 
 $scope.btnLogin = function (txtUsername, txtPassword) {
 
 
 
 service_list.service_login_post(txtUsername, txtPassword, function (detail) {
 $scope.em_detail = detail;
 
 
 });
 
 $location.path('profile');
 
 
 }
 
 
 }); */


/*loginApp.controller('profileCtrl',function($scope,$http, service_list){
 
 
 service_list.service_login_post(txtUsername, txtPassword, function (detail) {
 $scope.em_detail = detail;
 
 
 });
 
 
 
 }); */


loginApp.controller('loginAppCtrl2', function ($scope, $http, service_list, $location) {



    $scope.btnLogin = function (txtUsername, txtPassword) {



        service_list.service_api_login(txtUsername, txtPassword, function (detail) {
            $scope.em_detail = detail;
            var loginStatus = $scope.em_detail = detail;
           //console.log($scope.em_detail);
            
            if(loginStatus){
               console.log("OK");
               $location.path('profile');
            }

        });
        
        //$location.path('profile');


    }


});


loginApp.controller('profileCtrl', function ($scope, service_list){
    
    
    service_list.service_api_profile(function (detail){
        $scope.em_profile = detail;
        
        
    });
    
    
});

