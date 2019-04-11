//------------------------------Module CalendarDemoApp---------------------
var myApp = angular.module('calendarDemoApp', []);
//------------ API --------------
///////////////////////////
myApp.factory('api', function ($http, $q) {
    var service = {
        getAllEvents: function (start, end) {
            var defer = $q.defer();
            var url = '/' + start + '/' + end;
            $http({
                method: 'GET',
                url: FULL_SITE_ROOT + 'api/data/event/getAllEvents' + url,
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        getRecentEvents: function () {
            var defer = $q.defer();
            $http({
                method: 'GET',
                url: FULL_SITE_ROOT + 'api/data/event/getRecentEvents'
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        addEvent: function (data) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/event/addEvent',
                data: data
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        deleteEvent: function (id, data) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/event/deleteEvent/' + id,
                data: data
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        updateEvent: function (id, data) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/event/updateEvent/' + id,
                data: data
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        getEventDetail: function (id) {
            var defer = $q.defer();
            $http({
                method: 'GET',
                url: FULL_SITE_ROOT + 'api/data/event/getEventDetail/' + id,
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        searchEvents: function (data) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/event/searchEvents/' + data,
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        getAllReport: function () {
            var defer = $q.defer();
            $http({
                method: 'GET',
                url: FULL_SITE_ROOT + 'api/data/group/getAllReport'
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        getAllRooms: function () {
            var defer = $q.defer();
            $http({
                method: 'GET',
                url: FULL_SITE_ROOT + 'api/data/room/getAllRooms'
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        searchRooms: function (data) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/room/searchRooms',
                data: data
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        addRoom: function (data) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/room/addRoom',
                data: data
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        deleteRoom: function (id) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/room/deleteRoom/' + id,
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        updateRoom: function (id, data) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/room/updateRoom/' + id,
                data: data
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        getRoomDetail: function (id) {
            var defer = $q.defer();
            $http({
                method: 'GET',
                url: FULL_SITE_ROOT + 'api/data/room/getRoomDetail/' + id,
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        getAllGroups: function () {
            var defer = $q.defer();
            $http({
                method: 'GET',
                url: FULL_SITE_ROOT + 'api/data/group/getAllGroups'
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        updateGroup: function (id, data) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/group/updateGroup/' + id,
                data: data
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        deleteGroup: function (id) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/group/deleteGroup/' + id,
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        addGroup: function (data) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/group/addGroup',
                data: data
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        getGroupDetail: function (id) {
            var defer = $q.defer();
            $http({
                method: 'GET',
                url: FULL_SITE_ROOT + 'api/data/group/getGroupDetail/' + id,
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        getAllReport: function () {
            var defer = $q.defer();
            $http({
                method: 'GET',
                url: FULL_SITE_ROOT + 'api/data/event/getAllReport'
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        getReportByEventId: function (id) {
            var defer = $q.defer();
            $http({
                method: 'GET',
                url: FULL_SITE_ROOT + 'api/data/event/getReportByEventId/' + id,
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        deleteUser: function (id) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/user/deleteUser/' + id,
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        getUserDetail: function (id) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/user/getUserDetail/' + id,
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        updateUser: function (id, data) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/user/updateUser/' + id,
                data: data
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        restorePassword: function (id, data) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/user/restorePassword/' + id,
                data: data
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        setAdmin: function (id) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/user/setAdmin/' + id
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        getAuthId: function () {
            var defer = $q.defer();
            $http({
                method: 'GET',
                url: FULL_SITE_ROOT + 'getUser'
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        addUser: function (data) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/user/addUser',
                data: data
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        changePassword: function (data) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/user/changePassword',
                data: data
            }).then(function successCallback(response) {
                defer.resolve(response);
            }, function errorCallback(response) {
                autohidenotify('error', 'Error', 'Please try again!!!');
                $('.modal').modal('hide');
                defer.reject();
            });
            return defer.promise;
        },
        changeAvatar: function (id, data) {
            var defer = $q.defer();
            $http({
                method: 'POST',
                url: FULL_SITE_ROOT + 'api/data/user/changeAvatar/' + id,
                data: data,
                transformRequest: angular.identity,
                processData: false,
                headers: {
                  'Content-Type':'multipart/form-data'
              }
          }).then(function successCallback(response) {
            defer.resolve(response);
        }, function errorCallback(response) {
            autohidenotify('error', 'Error', 'Please try again!!!');
            $('.modal').modal('hide');
            defer.reject();
        });
          return defer.promise;
      },
      reportEvent: function (id, data) {
        var defer = $q.defer();
        $http({
            method: 'POST',
            url: FULL_SITE_ROOT + 'api/data/event/reportEvent/' + id,
            data: data,
            transformRequest: angular.identity,
            headers: {
              'Content-Type':undefined
          },
      }).then(function successCallback(response) {
        defer.resolve(response);
    }, function errorCallback(response) {
        autohidenotify('error', 'Error', 'Please try again!!!');
        $('.modal').modal('hide');
        defer.reject();
    });
      return defer.promise;
  },
};
return service;
});
myApp.directive('fileModel', ['$parse', function ($parse) {
    return {
       restrict: 'A',
       link: function(scope, element, attrs) {
          var model = $parse(attrs.fileModel);
          var modelSetter = model.assign;
          element.bind('change', function(){
             scope.$apply(function(){
                modelSetter(scope, element[0].files[0]);
            });
         });
      }
  };
}]);
myApp.directive("inputFiles", function($parse) {
  return function linkFn (scope, elem, attrs) {
    elem.on("change", function (e) {
      var inputFilesGetter = $parse(attrs.inputFiles);
      var inputFilesSetter = inputFilesGetter.assign;
      inputFilesSetter(scope, e.target.files);
      scope.$apply();
    });
  };
});
myApp.directive('ngEnter', function () {
    return function (scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if (event.which === 13) {
                scope.$apply(function () {
                    scope.$eval(attrs.ngEnter);
                });
                event.preventDefault();
            }
        });
    }
});