angular.module('hamLog', [
	'mainCtrl',
	'logCtrl',
	'logService',
	'dxclrCtrl',
	'formsDirectives',
	'ui.bootstrap'
	], function($interpolateProvider){
	
	$interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});