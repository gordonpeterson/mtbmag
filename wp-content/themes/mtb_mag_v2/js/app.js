(function () {
'use strict';

/**
 * @ngdoc overview
 * @name mtbMagApp
 * @description
 * # mtbMagApp
 *
 * Main module of the application.
 */
angular
	.module('mtbMagApp', [
		'ngAnimate',
		'ngCookies',
		'ngResource',
		'ngRoute',
		'ngSanitize',
		'ngTouch',
	])

} )();


( function () {
'use strict';
	
	/**
	 * @ngdoc function
	 * @name mtbMagApp:coverCtrl
	 * @description
	 * # coverCtrl
	 * The coverCtrl controller for mtbMagApp. 
	 */

	angular
		.module('mtbMagApp')
		.controller('coverCtrl', coverCtrl);

	coverCtrl.$inject = ['$window'];

	/* @ngInject */
	function coverCtrl ($window) {

		//jshint ignore:line
		var vm = this;
			

		
		vm.controllerName = 'coverCtrl'; //...object property for testing
		vm.coverHeight = 400;


		activate();

		function activate () {
			resizeCover( null );
			angular.element($window).bind('resize', resizeCover);
		}

		function resizeCover ( $event ) {
			vm.coverHeight = $window.innerHeight * 0.45;
			vm.coverWidth = $window.innerWidth;

			if( vm.coverWidth <= 400 ){
				vm.coverHeight = $window.innerHeight * .25;
			}

			if ( vm.coverHeight >= 700 ) {
					vm.coverHeight = 700;
			}



			
		}

	}


})();
