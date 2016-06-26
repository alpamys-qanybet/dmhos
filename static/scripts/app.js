/* 'use strict'; */
/* global Highcharts */

// var domainUrl = 'http://localhost/tmg.kz'
var domainUrl = 'http://localhost/hospital2'
// var domainUrl = 'http://php-tmgkaz.rhcloud.com/';

angular.module('jm.i18next').config(['$i18nextProvider', function($i18nextProvider) {

	$i18nextProvider.options = {
		//lng: 'kk',
		preload: ['ru', 'en'],
		fallbackLng: false,
		useCookie: true,
		useLocalStorage: false,
		resGetPath: 'http://localhost/hospital2/static/locales/__lng__/__ns__.json'
		// resGetPath: 'http://tmgkaz.kz/static/locales/__lng__/__ns__.json'
		// resGetPath: 'http://php-tmgkaz.rhcloud.com/static/locales/__lng__/__ns__.json'
	};
}]);

angular.module('tmg', ['ui.router', 'ngCookies', 'ngSanitize', 'jm.i18next'])
	.config(['$stateProvider', function($stateProvider) {
		$stateProvider
		.state('home', {
			url: '/home',
			templateUrl: 'static/views/home.html',
			controller: 'HomeCtrl'
		})
		.state('about', {
			url: '/about',
			templateUrl: 'static/views/about.html',
			controller: 'AboutCtrl'
		})
		.state('info', {
			url: '/info',
			templateUrl: 'static/views/info.html',
			controller: 'InfoCtrl'
		})
		.state('policy', {
			url: '/policy',
			templateUrl: 'static/views/policy.html',
			controller: 'PolicyCtrl'
		})
		.state('certificate', {
			url: '/certificate',
			templateUrl: 'static/views/certificate.html',
			controller: 'CertCtrl'
		})
		.state('contact', {
			url: '/contact',
			templateUrl: 'static/views/contact.html',
			controller: 'ContactCtrl'
		});
	}])
	.directive('chart', function () {
		return {
			restrict: 'E',
			template: '<div></div>',
			scope: {
				chartData: '=value'
			},
			transclude: true,
			replace: true,
			link: function(scope, element, attrs) {
				var chartsDefaults = {
					chart: {
						renderTo: element[0],
						type: attrs.type || null,
						height: attrs.height || null,
						width: attrs.width || null
					}
				};

				//Update when charts data changes
				scope.$watch(function() {
					return scope.chartData;
				}, function(value) {
					if (!value) {
						return;
					}
					
					// We need deep copy in order to NOT override original chart object.
					// This allows us to override chart data member and still the keep
					// our original renderTo will be the same
					var deepCopy = true;
					var newSettings = {};
					$.extend(deepCopy, newSettings, chartsDefaults, scope.chartData);
					new Highcharts.Chart(newSettings);
				});
			}
		};
	})
	.filter('truncate', function () {
        return function (text, length, end) {
            if (isNaN(length))
                length = 10;

            if (end === undefined)
                end = "...";

            if (text.length <= length || text.length - end.length <= length) {
                return text;
            }
            else {
                return String(text).substring(0, length-end.length) + end;
            }

        };
    })
	.run(['$rootScope', '$state', '$stateParams', '$cookies', function($rootScope, $state, $stateParams, $cookies) {
		$rootScope.$state = $state;
		$rootScope.$stateParams = $stateParams;
		$rootScope.$cookies = $cookies;

		$rootScope.covering = true;
	}]);
