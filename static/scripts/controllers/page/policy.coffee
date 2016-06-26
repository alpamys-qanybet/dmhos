angular.module('tmg').controller 'PolicyCtrl', ['$scope', '$rootScope', '$cookies', '$state', ($scope, $rootScope, $cookies, $state)->
	console.log 'PolicyCtrl'
	$rootScope.current = 'policy'
]