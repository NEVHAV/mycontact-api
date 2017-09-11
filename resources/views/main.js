var app = angular.module('contact', []);

app.controller ('ContactsList', function($scope, $http) {
	$http.get("http://192.168.10.100/contact").then(function (response) {$scope.contacts = response.data.results;});
});