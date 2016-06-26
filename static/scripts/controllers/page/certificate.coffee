angular.module('tmg').controller 'CertCtrl', ['$scope', '$rootScope', '$cookies', '$state', ($scope, $rootScope, $cookies, $state)->
	console.log 'CertCtrl'
	$rootScope.current = 'certificate'
]