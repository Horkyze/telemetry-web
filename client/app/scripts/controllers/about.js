'use strict';

/**
 * @ngdoc function
 * @name zadanie1App.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the zadanie1App
 */
angular.module('zadanie1App')
  .controller('AboutCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
