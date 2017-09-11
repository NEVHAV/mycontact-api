var app = angular.module('contact', [
	'ngResource',
	'infinite-scroll',
	'angularSpinner',
	'jcs-autoValidate',
	'angular-ladda',
	'mgcrea.ngStrap',
	'toaster',
	'ngAnimate'
	]).constant('API_URL', 'http://localhost:8080/contacts/public/');