angular.module("formsDirectives", [])
	//datePicker
	.directive('datePickerCustom', function () {
		return function($scope, element){

			$('#datetimepicker').datetimepicker({
				locale: 'ru',
				useCurrent: true,
				format: 'YYYY-MM-DD HH:mm:ss'
			});

            $(element).blur(function(){
                $scope.log.date = $(this).val();
            });


		}
	});