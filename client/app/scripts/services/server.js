'use strict';

/**
 * @ngdoc service
 * @name zadanie1App.Server
 * @description
 * # Server
 * Factory in the zadanie1App.
 */
angular.module('zadanie1App').factory('Server', function ($http) {
	var o = {

		server: "http://localhost/dropbox/FIIT/DBS/project/server/api.php",

		getDevices: function  () {
			$http.get(this.server).success();
		}
	}

	return o;

});
