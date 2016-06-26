angular.module('tmg').controller 'MainCtrl', ['$scope', '$rootScope', '$state', '$cookies', '$locales', '$interval', ($scope, $rootScope, $state, $cookies, $locales, $interval)->
	$rootScope.covering = true

	$locales.changeLang $locales.current()

	$scope.flags = [
		code: 'ru'
		name: 'russia'
	,
		code: 'en'
		name: 'united_kingdom'
	,
		code: 'kk'
		name: 'kazakhstan'
	]

	$scope.navs = [
		name: 'home'
		url: 'home'
	,
		name: 'about'
		url: 'about'
	,
		name: 'info'
		url: 'info'
	,
		name: 'policy'
		url: 'policy'
	,
		name: 'certificate'
		url: 'certificate'
	,
		name: 'contact'
		url: 'contact'
	]

	$scope.clock = new Date()
	
	$interval ->
		$scope.clock = Date.now()
	,
		1000

	# current url
	$rootScope.currentUrl = ->
		document.URL

	$state.transitionTo 'home'
]