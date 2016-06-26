angular.module('tmg').service '$locales', ['$rootScope', '$i18next', '$cookies', ($rootScope, $i18next, $cookies)->
	langs = [ 'kk', 'en', 'ru' ]
	
	this.langs = ->
		langs
	
	this.current = ->
		lang = $cookies.get 'lng'
		lang or 'kk'
	
	this.changeLang = (lng)->
		$i18next.options.lng = lng
		$cookies.put 'lng',lng
	
	$rootScope.$locales = this # global service
]