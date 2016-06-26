angular.module('tmg').controller 'AboutCtrl', ['$scope', '$rootScope', '$cookies', '$state', ($scope, $rootScope, $cookies, $state)->
	console.log 'AboutCtrl'
	$rootScope.current = 'about'
]