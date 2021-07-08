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
/******/ 	return __webpack_require__(__webpack_require__.s = 7);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admins/pages/why-us.js":
/*!*********************************************!*\
  !*** ./resources/js/admins/pages/why-us.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var WhyUsContainer = $('#why-us');\n  var WhyUsDatatable = $('#why-us-table', WhyUsContainer);\n  var t = WhyUsDatatable.DataTable({\n    processing: true,\n    serverSide: true,\n    deferRender: true,\n    ajax: {\n      url: WhyUsDatatable.data('route')\n    },\n    columns: [{\n      data: 'DT_RowIndex',\n      name: 'DT_RowIndex',\n      className: 'text-center',\n      width: \"30px\"\n    }, {\n      data: 'icon_img',\n      name: 'icon_img'\n    }, {\n      data: 'title_en',\n      name: 'title_en'\n    }, {\n      data: 'short_text_en',\n      name: 'short_text_en'\n    }, {\n      data: 'action',\n      name: 'action',\n      className: 'w-12',\n      searchable: false,\n      orderable: false\n    }]\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYWRtaW5zL3BhZ2VzL3doeS11cy5qcz9mZGRjIl0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5IiwiV2h5VXNDb250YWluZXIiLCJXaHlVc0RhdGF0YWJsZSIsInQiLCJEYXRhVGFibGUiLCJwcm9jZXNzaW5nIiwic2VydmVyU2lkZSIsImRlZmVyUmVuZGVyIiwiYWpheCIsInVybCIsImRhdGEiLCJjb2x1bW5zIiwibmFtZSIsImNsYXNzTmFtZSIsIndpZHRoIiwic2VhcmNoYWJsZSIsIm9yZGVyYWJsZSJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBWTtBQUMxQixNQUFNQyxjQUFjLEdBQUdILENBQUMsQ0FBQyxTQUFELENBQXhCO0FBQ0EsTUFBTUksY0FBYyxHQUFHSixDQUFDLENBQUMsZUFBRCxFQUFrQkcsY0FBbEIsQ0FBeEI7QUFFQSxNQUFJRSxDQUFDLEdBQUdELGNBQWMsQ0FBQ0UsU0FBZixDQUF5QjtBQUM3QkMsY0FBVSxFQUFFLElBRGlCO0FBRTdCQyxjQUFVLEVBQUUsSUFGaUI7QUFHN0JDLGVBQVcsRUFBRSxJQUhnQjtBQUk3QkMsUUFBSSxFQUFFO0FBQ0ZDLFNBQUcsRUFBRVAsY0FBYyxDQUFDUSxJQUFmLENBQW9CLE9BQXBCO0FBREgsS0FKdUI7QUFPN0JDLFdBQU8sRUFBRSxDQUNMO0FBQUNELFVBQUksRUFBRSxhQUFQO0FBQXNCRSxVQUFJLEVBQUUsYUFBNUI7QUFBMkNDLGVBQVMsRUFBRSxhQUF0RDtBQUFxRUMsV0FBSyxFQUFFO0FBQTVFLEtBREssRUFFTDtBQUFDSixVQUFJLEVBQUUsVUFBUDtBQUFtQkUsVUFBSSxFQUFFO0FBQXpCLEtBRkssRUFHTDtBQUFDRixVQUFJLEVBQUUsVUFBUDtBQUFtQkUsVUFBSSxFQUFFO0FBQXpCLEtBSEssRUFJTDtBQUFDRixVQUFJLEVBQUUsZUFBUDtBQUF3QkUsVUFBSSxFQUFFO0FBQTlCLEtBSkssRUFLTDtBQUFDRixVQUFJLEVBQUUsUUFBUDtBQUFpQkUsVUFBSSxFQUFFLFFBQXZCO0FBQWdDQyxlQUFTLEVBQUUsTUFBM0M7QUFBbURFLGdCQUFVLEVBQUUsS0FBL0Q7QUFBc0VDLGVBQVMsRUFBRTtBQUFqRixLQUxLO0FBUG9CLEdBQXpCLENBQVI7QUFlSCxDQW5CRCIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9hZG1pbnMvcGFnZXMvd2h5LXVzLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xyXG4gICAgY29uc3QgV2h5VXNDb250YWluZXIgPSAkKCcjd2h5LXVzJyk7XHJcbiAgICBjb25zdCBXaHlVc0RhdGF0YWJsZSA9ICQoJyN3aHktdXMtdGFibGUnLCBXaHlVc0NvbnRhaW5lcik7XHJcblxyXG4gICAgbGV0IHQgPSBXaHlVc0RhdGF0YWJsZS5EYXRhVGFibGUoe1xyXG4gICAgICAgIHByb2Nlc3Npbmc6IHRydWUsXHJcbiAgICAgICAgc2VydmVyU2lkZTogdHJ1ZSxcclxuICAgICAgICBkZWZlclJlbmRlcjogdHJ1ZSxcclxuICAgICAgICBhamF4OiB7XHJcbiAgICAgICAgICAgIHVybDogV2h5VXNEYXRhdGFibGUuZGF0YSgncm91dGUnKSxcclxuICAgICAgICB9LFxyXG4gICAgICAgIGNvbHVtbnM6IFtcclxuICAgICAgICAgICAge2RhdGE6ICdEVF9Sb3dJbmRleCcsIG5hbWU6ICdEVF9Sb3dJbmRleCcsIGNsYXNzTmFtZTogJ3RleHQtY2VudGVyJywgd2lkdGg6IFwiMzBweFwifSxcclxuICAgICAgICAgICAge2RhdGE6ICdpY29uX2ltZycsIG5hbWU6ICdpY29uX2ltZyd9LFxyXG4gICAgICAgICAgICB7ZGF0YTogJ3RpdGxlX2VuJywgbmFtZTogJ3RpdGxlX2VuJ30sXHJcbiAgICAgICAgICAgIHtkYXRhOiAnc2hvcnRfdGV4dF9lbicsIG5hbWU6ICdzaG9ydF90ZXh0X2VuJ30sXHJcbiAgICAgICAgICAgIHtkYXRhOiAnYWN0aW9uJywgbmFtZTogJ2FjdGlvbicsY2xhc3NOYW1lOiAndy0xMicsIHNlYXJjaGFibGU6IGZhbHNlLCBvcmRlcmFibGU6IGZhbHNlfSxcclxuICAgICAgICBdLFxyXG4gICAgfSk7XHJcbn0pOyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/admins/pages/why-us.js\n");

/***/ }),

/***/ 7:
/*!***************************************************!*\
  !*** multi ./resources/js/admins/pages/why-us.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\camsolution\tech-for-kid\resources\js\admins\pages\why-us.js */"./resources/js/admins/pages/why-us.js");


/***/ })

/******/ });