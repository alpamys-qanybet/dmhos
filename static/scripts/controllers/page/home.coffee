angular.module('tmg').controller 'HomeCtrl', ['$scope', '$rootScope', '$cookies', '$state', ($scope, $rootScope, $cookies, $state)->
	console.log 'HomeCtrl'
	$rootScope.current = 'home'
]