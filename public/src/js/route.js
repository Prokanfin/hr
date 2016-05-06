loginApp.config(function ($routeProvider){
    $routeProvider
            .when('/',{
                templateUrl: 'tpl/login.html',
                controller: 'loginAppCtrl2'
            })
            .when('/profile',{
                templateUrl: 'tpl/profile.html',
                controller: 'profileCtrl'
            })
            .otherwise({
                redirectTo: '/'
            });
                    
            
});