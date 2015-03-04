angular.module("formsDirectives", [])
	//datePicker
	.directive('datePickerCustom', function () {
		return function(scope, element, attrs){
			console.log("test");
			$('#datetimepicker').datetimepicker({
				locale: 'ru',
				useCurrent: true,
				format: 'YYYY-MM-DD HH:mm:ss'
			});
		}
	});