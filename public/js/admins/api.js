/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admins/api.js":
/*!************************************!*\
  !*** ./resources/js/admins/api.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$.ajaxSetup({\n  headers: {\n    'X-CSRF-TOKEN': $('meta[name=\"csrf-token\"]').attr('content')\n  }\n});\n\napiNotification = function apiNotification() {\n  return $.ajax({\n    url: '/api/notification',\n    type: \"get\"\n  });\n};\n\napiGetMedicines = function apiGetMedicines(params) {\n  return $.ajax({\n    url: '/api/medicines',\n    type: \"get\",\n    data: params\n  });\n};\n\napiGetMedicineMeasurements = function apiGetMedicineMeasurements(params) {\n  return $.ajax({\n    url: '/api/medicine/measurement',\n    type: \"get\",\n    data: params\n  });\n};\n\napiGetMedicineByBarcode = function apiGetMedicineByBarcode(params) {\n  return $.ajax({\n    url: '/api/medicine/scanner',\n    type: \"get\",\n    data: params\n  });\n};\n\napiStoreCustomer = function apiStoreCustomer(params) {\n  return $.ajax({\n    url: '/api/customer/store',\n    type: \"post\",\n    data: params\n  });\n};\n\napiGalleryRemoveImg = function apiGalleryRemoveImg(params) {\n  return $.ajax({\n    url: '/api/galleries/destroy',\n    type: \"post\",\n    data: params\n  });\n};\n\napiGalleryRemoveGallery = function apiGalleryRemoveGallery(params) {\n  return $.ajax({\n    url: '/api/blogs/remove-image',\n    type: \"post\",\n    data: params\n  });\n};\n\napiGalleryRemovePressGallery = function apiGalleryRemovePressGallery(params) {\n  return $.ajax({\n    url: '/api/presses/remove-image',\n    type: \"post\",\n    data: params\n  });\n};\n\napiSocialGalleryRemove = function apiSocialGalleryRemove(params) {\n  return $.ajax({\n    url: '/api/social-value/remove-image',\n    type: \"post\",\n    data: params\n  });\n};//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYWRtaW5zL2FwaS5qcz85MjdhIl0sIm5hbWVzIjpbIiQiLCJhamF4U2V0dXAiLCJoZWFkZXJzIiwiYXR0ciIsImFwaU5vdGlmaWNhdGlvbiIsImFqYXgiLCJ1cmwiLCJ0eXBlIiwiYXBpR2V0TWVkaWNpbmVzIiwicGFyYW1zIiwiZGF0YSIsImFwaUdldE1lZGljaW5lTWVhc3VyZW1lbnRzIiwiYXBpR2V0TWVkaWNpbmVCeUJhcmNvZGUiLCJhcGlTdG9yZUN1c3RvbWVyIiwiYXBpR2FsbGVyeVJlbW92ZUltZyIsImFwaUdhbGxlcnlSZW1vdmVHYWxsZXJ5IiwiYXBpR2FsbGVyeVJlbW92ZVByZXNzR2FsbGVyeSIsImFwaVNvY2lhbEdhbGxlcnlSZW1vdmUiXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUNDLFNBQUYsQ0FBWTtBQUNSQyxTQUFPLEVBQUU7QUFDTCxvQkFBZ0JGLENBQUMsQ0FBQyx5QkFBRCxDQUFELENBQTZCRyxJQUE3QixDQUFrQyxTQUFsQztBQURYO0FBREQsQ0FBWjs7QUFNQUMsZUFBZSxHQUFHLDJCQUFXO0FBQ3pCLFNBQU9KLENBQUMsQ0FBQ0ssSUFBRixDQUFPO0FBQ1ZDLE9BQUcsRUFBRSxtQkFESztBQUVWQyxRQUFJLEVBQUU7QUFGSSxHQUFQLENBQVA7QUFJSCxDQUxEOztBQU9BQyxlQUFlLEdBQUcseUJBQVNDLE1BQVQsRUFBaUI7QUFDL0IsU0FBT1QsQ0FBQyxDQUFDSyxJQUFGLENBQU87QUFDVkMsT0FBRyxFQUFFLGdCQURLO0FBRVZDLFFBQUksRUFBRSxLQUZJO0FBR1ZHLFFBQUksRUFBRUQ7QUFISSxHQUFQLENBQVA7QUFLSCxDQU5EOztBQVFBRSwwQkFBMEIsR0FBRyxvQ0FBU0YsTUFBVCxFQUFpQjtBQUMxQyxTQUFPVCxDQUFDLENBQUNLLElBQUYsQ0FBTztBQUNWQyxPQUFHLEVBQUUsMkJBREs7QUFFVkMsUUFBSSxFQUFFLEtBRkk7QUFHVkcsUUFBSSxFQUFFRDtBQUhJLEdBQVAsQ0FBUDtBQUtILENBTkQ7O0FBUUFHLHVCQUF1QixHQUFHLGlDQUFTSCxNQUFULEVBQWlCO0FBQ3ZDLFNBQU9ULENBQUMsQ0FBQ0ssSUFBRixDQUFPO0FBQ1ZDLE9BQUcsRUFBRSx1QkFESztBQUVWQyxRQUFJLEVBQUUsS0FGSTtBQUdWRyxRQUFJLEVBQUVEO0FBSEksR0FBUCxDQUFQO0FBS0gsQ0FORDs7QUFRQUksZ0JBQWdCLEdBQUcsMEJBQVNKLE1BQVQsRUFBaUI7QUFDaEMsU0FBT1QsQ0FBQyxDQUFDSyxJQUFGLENBQU87QUFDVkMsT0FBRyxFQUFFLHFCQURLO0FBRVZDLFFBQUksRUFBRSxNQUZJO0FBR1ZHLFFBQUksRUFBRUQ7QUFISSxHQUFQLENBQVA7QUFLSCxDQU5EOztBQU9BSyxtQkFBbUIsR0FBRyw2QkFBU0wsTUFBVCxFQUFpQjtBQUNuQyxTQUFPVCxDQUFDLENBQUNLLElBQUYsQ0FBTztBQUNWQyxPQUFHLEVBQUUsd0JBREs7QUFFVkMsUUFBSSxFQUFFLE1BRkk7QUFHVkcsUUFBSSxFQUFFRDtBQUhJLEdBQVAsQ0FBUDtBQUtILENBTkQ7O0FBT0FNLHVCQUF1QixHQUFHLGlDQUFTTixNQUFULEVBQWlCO0FBQ3ZDLFNBQU9ULENBQUMsQ0FBQ0ssSUFBRixDQUFPO0FBQ1ZDLE9BQUcsRUFBRSx5QkFESztBQUVWQyxRQUFJLEVBQUUsTUFGSTtBQUdWRyxRQUFJLEVBQUVEO0FBSEksR0FBUCxDQUFQO0FBS0gsQ0FORDs7QUFPQU8sNEJBQTRCLEdBQUcsc0NBQVNQLE1BQVQsRUFBaUI7QUFDNUMsU0FBT1QsQ0FBQyxDQUFDSyxJQUFGLENBQU87QUFDVkMsT0FBRyxFQUFFLDJCQURLO0FBRVZDLFFBQUksRUFBRSxNQUZJO0FBR1ZHLFFBQUksRUFBRUQ7QUFISSxHQUFQLENBQVA7QUFLSCxDQU5EOztBQVFBUSxzQkFBc0IsR0FBRyxnQ0FBU1IsTUFBVCxFQUFpQjtBQUN0QyxTQUFPVCxDQUFDLENBQUNLLElBQUYsQ0FBTztBQUNWQyxPQUFHLEVBQUUsZ0NBREs7QUFFVkMsUUFBSSxFQUFFLE1BRkk7QUFHVkcsUUFBSSxFQUFFRDtBQUhJLEdBQVAsQ0FBUDtBQUtILENBTkQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYWRtaW5zL2FwaS5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIiQuYWpheFNldHVwKHtcclxuICAgIGhlYWRlcnM6IHtcclxuICAgICAgICAnWC1DU1JGLVRPS0VOJzogJCgnbWV0YVtuYW1lPVwiY3NyZi10b2tlblwiXScpLmF0dHIoJ2NvbnRlbnQnKVxyXG4gICAgfVxyXG59KTtcclxuXHJcbmFwaU5vdGlmaWNhdGlvbiA9IGZ1bmN0aW9uKCkge1xyXG4gICAgcmV0dXJuICQuYWpheCh7XHJcbiAgICAgICAgdXJsOiAnL2FwaS9ub3RpZmljYXRpb24nLFxyXG4gICAgICAgIHR5cGU6IFwiZ2V0XCJcclxuICAgIH0pO1xyXG59O1xyXG5cclxuYXBpR2V0TWVkaWNpbmVzID0gZnVuY3Rpb24ocGFyYW1zKSB7XHJcbiAgICByZXR1cm4gJC5hamF4KHtcclxuICAgICAgICB1cmw6ICcvYXBpL21lZGljaW5lcycsXHJcbiAgICAgICAgdHlwZTogXCJnZXRcIixcclxuICAgICAgICBkYXRhOiBwYXJhbXNcclxuICAgIH0pO1xyXG59O1xyXG5cclxuYXBpR2V0TWVkaWNpbmVNZWFzdXJlbWVudHMgPSBmdW5jdGlvbihwYXJhbXMpIHtcclxuICAgIHJldHVybiAkLmFqYXgoe1xyXG4gICAgICAgIHVybDogJy9hcGkvbWVkaWNpbmUvbWVhc3VyZW1lbnQnLFxyXG4gICAgICAgIHR5cGU6IFwiZ2V0XCIsXHJcbiAgICAgICAgZGF0YTogcGFyYW1zXHJcbiAgICB9KTtcclxufTtcclxuXHJcbmFwaUdldE1lZGljaW5lQnlCYXJjb2RlID0gZnVuY3Rpb24ocGFyYW1zKSB7XHJcbiAgICByZXR1cm4gJC5hamF4KHtcclxuICAgICAgICB1cmw6ICcvYXBpL21lZGljaW5lL3NjYW5uZXInLFxyXG4gICAgICAgIHR5cGU6IFwiZ2V0XCIsXHJcbiAgICAgICAgZGF0YTogcGFyYW1zXHJcbiAgICB9KTtcclxufTtcclxuXHJcbmFwaVN0b3JlQ3VzdG9tZXIgPSBmdW5jdGlvbihwYXJhbXMpIHtcclxuICAgIHJldHVybiAkLmFqYXgoe1xyXG4gICAgICAgIHVybDogJy9hcGkvY3VzdG9tZXIvc3RvcmUnLFxyXG4gICAgICAgIHR5cGU6IFwicG9zdFwiLFxyXG4gICAgICAgIGRhdGE6IHBhcmFtc1xyXG4gICAgfSk7XHJcbn07XHJcbmFwaUdhbGxlcnlSZW1vdmVJbWcgPSBmdW5jdGlvbihwYXJhbXMpIHtcclxuICAgIHJldHVybiAkLmFqYXgoe1xyXG4gICAgICAgIHVybDogJy9hcGkvZ2FsbGVyaWVzL2Rlc3Ryb3knLFxyXG4gICAgICAgIHR5cGU6IFwicG9zdFwiLFxyXG4gICAgICAgIGRhdGE6IHBhcmFtc1xyXG4gICAgfSk7XHJcbn07XHJcbmFwaUdhbGxlcnlSZW1vdmVHYWxsZXJ5ID0gZnVuY3Rpb24ocGFyYW1zKSB7XHJcbiAgICByZXR1cm4gJC5hamF4KHtcclxuICAgICAgICB1cmw6ICcvYXBpL2Jsb2dzL3JlbW92ZS1pbWFnZScsXHJcbiAgICAgICAgdHlwZTogXCJwb3N0XCIsXHJcbiAgICAgICAgZGF0YTogcGFyYW1zXHJcbiAgICB9KTtcclxufTtcclxuYXBpR2FsbGVyeVJlbW92ZVByZXNzR2FsbGVyeSA9IGZ1bmN0aW9uKHBhcmFtcykge1xyXG4gICAgcmV0dXJuICQuYWpheCh7XHJcbiAgICAgICAgdXJsOiAnL2FwaS9wcmVzc2VzL3JlbW92ZS1pbWFnZScsXHJcbiAgICAgICAgdHlwZTogXCJwb3N0XCIsXHJcbiAgICAgICAgZGF0YTogcGFyYW1zXHJcbiAgICB9KTtcclxufTtcclxuXHJcbmFwaVNvY2lhbEdhbGxlcnlSZW1vdmUgPSBmdW5jdGlvbihwYXJhbXMpIHtcclxuICAgIHJldHVybiAkLmFqYXgoe1xyXG4gICAgICAgIHVybDogJy9hcGkvc29jaWFsLXZhbHVlL3JlbW92ZS1pbWFnZScsXHJcbiAgICAgICAgdHlwZTogXCJwb3N0XCIsXHJcbiAgICAgICAgZGF0YTogcGFyYW1zXHJcbiAgICB9KTtcclxufTtcclxuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/admins/api.js\n");

/***/ }),

/***/ 5:
/*!******************************************!*\
  !*** multi ./resources/js/admins/api.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\camsolution\tech-for-kid\resources\js\admins\api.js */"./resources/js/admins/api.js");


/***/ })

/******/ });