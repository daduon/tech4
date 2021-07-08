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
/******/ 	return __webpack_require__(__webpack_require__.s = 8);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admins/pages/mentor.js":
/*!*********************************************!*\
  !*** ./resources/js/admins/pages/mentor.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var MentorContainer = $('#mentor');\n  var MentorDatatable = $('#mentor-table', MentorContainer);\n  var t = MentorDatatable.DataTable({\n    processing: true,\n    serverSide: true,\n    deferRender: true,\n    ajax: {\n      url: MentorDatatable.data('route')\n    },\n    columns: [{\n      data: 'DT_RowIndex',\n      name: 'DT_RowIndex',\n      className: 'text-center',\n      width: \"30px\"\n    }, {\n      data: 'img',\n      name: 'img'\n    }, {\n      data: 'name_en',\n      name: 'name_en'\n    }, {\n      data: 'position_en',\n      name: 'position_en'\n    }, {\n      data: 'text_en',\n      name: 'text_en'\n    }, {\n      data: 'action',\n      name: 'action',\n      className: 'w-12',\n      searchable: false,\n      orderable: false\n    }]\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYWRtaW5zL3BhZ2VzL21lbnRvci5qcz83NGVjIl0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5IiwiTWVudG9yQ29udGFpbmVyIiwiTWVudG9yRGF0YXRhYmxlIiwidCIsIkRhdGFUYWJsZSIsInByb2Nlc3NpbmciLCJzZXJ2ZXJTaWRlIiwiZGVmZXJSZW5kZXIiLCJhamF4IiwidXJsIiwiZGF0YSIsImNvbHVtbnMiLCJuYW1lIiwiY2xhc3NOYW1lIiwid2lkdGgiLCJzZWFyY2hhYmxlIiwib3JkZXJhYmxlIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsS0FBWixDQUFrQixZQUFZO0FBQzFCLE1BQU1DLGVBQWUsR0FBR0gsQ0FBQyxDQUFDLFNBQUQsQ0FBekI7QUFDQSxNQUFNSSxlQUFlLEdBQUdKLENBQUMsQ0FBQyxlQUFELEVBQWtCRyxlQUFsQixDQUF6QjtBQUVBLE1BQUlFLENBQUMsR0FBR0QsZUFBZSxDQUFDRSxTQUFoQixDQUEwQjtBQUM5QkMsY0FBVSxFQUFFLElBRGtCO0FBRTlCQyxjQUFVLEVBQUUsSUFGa0I7QUFHOUJDLGVBQVcsRUFBRSxJQUhpQjtBQUk5QkMsUUFBSSxFQUFFO0FBQ0ZDLFNBQUcsRUFBRVAsZUFBZSxDQUFDUSxJQUFoQixDQUFxQixPQUFyQjtBQURILEtBSndCO0FBTzlCQyxXQUFPLEVBQUUsQ0FDTDtBQUFDRCxVQUFJLEVBQUUsYUFBUDtBQUFzQkUsVUFBSSxFQUFFLGFBQTVCO0FBQTJDQyxlQUFTLEVBQUUsYUFBdEQ7QUFBcUVDLFdBQUssRUFBRTtBQUE1RSxLQURLLEVBRUw7QUFBQ0osVUFBSSxFQUFFLEtBQVA7QUFBY0UsVUFBSSxFQUFFO0FBQXBCLEtBRkssRUFHTDtBQUFDRixVQUFJLEVBQUUsU0FBUDtBQUFrQkUsVUFBSSxFQUFFO0FBQXhCLEtBSEssRUFJTDtBQUFDRixVQUFJLEVBQUUsYUFBUDtBQUFzQkUsVUFBSSxFQUFFO0FBQTVCLEtBSkssRUFLTDtBQUFDRixVQUFJLEVBQUUsU0FBUDtBQUFrQkUsVUFBSSxFQUFFO0FBQXhCLEtBTEssRUFNTDtBQUFDRixVQUFJLEVBQUUsUUFBUDtBQUFpQkUsVUFBSSxFQUFFLFFBQXZCO0FBQWdDQyxlQUFTLEVBQUUsTUFBM0M7QUFBbURFLGdCQUFVLEVBQUUsS0FBL0Q7QUFBc0VDLGVBQVMsRUFBRTtBQUFqRixLQU5LO0FBUHFCLEdBQTFCLENBQVI7QUFnQkgsQ0FwQkQiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYWRtaW5zL3BhZ2VzL21lbnRvci5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcclxuICAgIGNvbnN0IE1lbnRvckNvbnRhaW5lciA9ICQoJyNtZW50b3InKTtcclxuICAgIGNvbnN0IE1lbnRvckRhdGF0YWJsZSA9ICQoJyNtZW50b3ItdGFibGUnLCBNZW50b3JDb250YWluZXIpO1xyXG5cclxuICAgIGxldCB0ID0gTWVudG9yRGF0YXRhYmxlLkRhdGFUYWJsZSh7XHJcbiAgICAgICAgcHJvY2Vzc2luZzogdHJ1ZSxcclxuICAgICAgICBzZXJ2ZXJTaWRlOiB0cnVlLFxyXG4gICAgICAgIGRlZmVyUmVuZGVyOiB0cnVlLFxyXG4gICAgICAgIGFqYXg6IHtcclxuICAgICAgICAgICAgdXJsOiBNZW50b3JEYXRhdGFibGUuZGF0YSgncm91dGUnKSxcclxuICAgICAgICB9LFxyXG4gICAgICAgIGNvbHVtbnM6IFtcclxuICAgICAgICAgICAge2RhdGE6ICdEVF9Sb3dJbmRleCcsIG5hbWU6ICdEVF9Sb3dJbmRleCcsIGNsYXNzTmFtZTogJ3RleHQtY2VudGVyJywgd2lkdGg6IFwiMzBweFwifSxcclxuICAgICAgICAgICAge2RhdGE6ICdpbWcnLCBuYW1lOiAnaW1nJ30sXHJcbiAgICAgICAgICAgIHtkYXRhOiAnbmFtZV9lbicsIG5hbWU6ICduYW1lX2VuJ30sXHJcbiAgICAgICAgICAgIHtkYXRhOiAncG9zaXRpb25fZW4nLCBuYW1lOiAncG9zaXRpb25fZW4nfSxcclxuICAgICAgICAgICAge2RhdGE6ICd0ZXh0X2VuJywgbmFtZTogJ3RleHRfZW4nfSxcclxuICAgICAgICAgICAge2RhdGE6ICdhY3Rpb24nLCBuYW1lOiAnYWN0aW9uJyxjbGFzc05hbWU6ICd3LTEyJywgc2VhcmNoYWJsZTogZmFsc2UsIG9yZGVyYWJsZTogZmFsc2V9LFxyXG4gICAgICAgIF0sXHJcbiAgICB9KTtcclxufSk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/admins/pages/mentor.js\n");

/***/ }),

/***/ 8:
/*!***************************************************!*\
  !*** multi ./resources/js/admins/pages/mentor.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\camsolution\tech-for-kid\resources\js\admins\pages\mentor.js */"./resources/js/admins/pages/mentor.js");


/***/ })

/******/ });