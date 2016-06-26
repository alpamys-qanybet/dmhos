angular.module('tmg').controller 'InfoCtrl', ['$scope', '$rootScope', '$cookies', '$state', ($scope, $rootScope, $cookies, $state)->
	console.log 'InfoCtrl'
	$rootScope.current = 'info'
]