angular.module('hamLog', [
	'mainCtrl',
	'logCtrl',
	'dxclrCtrl',
	'ui.bootstrap'
	], function($interpolateProvider){
	
	$interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});