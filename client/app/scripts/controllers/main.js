'use strict';

/**
 * @ngdoc function
 * @name zadanie1App.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the zadanie1App
 */
angular.module('zadanie1App')
  .controller('MainCtrl', function ($scope) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
  });
