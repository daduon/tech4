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
/******/ 	return __webpack_require__(__webpack_require__.s = 22);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/websites/pages/home.js":
/*!*********************************************!*\
  !*** ./resources/js/websites/pages/home.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var swiper = new Swiper('.swiper-container', {\n    slidesPerView: 3,\n    spaceBetween: 60,\n    direction: getDirection(),\n    navigation: {\n      nextEl: '.swiper-button-next',\n      prevEl: '.swiper-button-prev'\n    },\n    on: {\n      resize: function resize() {\n        swiper.changeDirection(getDirection());\n      }\n    }\n  });\n\n  function getDirection() {\n    var windowWidth = window.innerWidth;\n    var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';\n    return direction;\n  }\n\n  var list = new Swiper('.list-cus-say', {\n    slidesPerView: 3,\n    spaceBetween: 30,\n    direction: getDirection(),\n    navigation: {\n      nextEl: '.swiper-button-next',\n      prevEl: '.swiper-button-prev'\n    },\n    on: {\n      resize: function resize() {\n        list.changeDirection(getDirection());\n      }\n    }\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvd2Vic2l0ZXMvcGFnZXMvaG9tZS5qcz84NzAyIl0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5Iiwic3dpcGVyIiwiU3dpcGVyIiwic2xpZGVzUGVyVmlldyIsInNwYWNlQmV0d2VlbiIsImRpcmVjdGlvbiIsImdldERpcmVjdGlvbiIsIm5hdmlnYXRpb24iLCJuZXh0RWwiLCJwcmV2RWwiLCJvbiIsInJlc2l6ZSIsImNoYW5nZURpcmVjdGlvbiIsIndpbmRvd1dpZHRoIiwid2luZG93IiwiaW5uZXJXaWR0aCIsImxpc3QiXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVc7QUFDekIsTUFBSUMsTUFBTSxHQUFHLElBQUlDLE1BQUosQ0FBVyxtQkFBWCxFQUFnQztBQUN6Q0MsaUJBQWEsRUFBRSxDQUQwQjtBQUV6Q0MsZ0JBQVksRUFBRSxFQUYyQjtBQUd6Q0MsYUFBUyxFQUFFQyxZQUFZLEVBSGtCO0FBSXpDQyxjQUFVLEVBQUU7QUFDUkMsWUFBTSxFQUFFLHFCQURBO0FBRVJDLFlBQU0sRUFBRTtBQUZBLEtBSjZCO0FBUXpDQyxNQUFFLEVBQUU7QUFDQUMsWUFBTSxFQUFFLGtCQUFXO0FBQ2ZWLGNBQU0sQ0FBQ1csZUFBUCxDQUF1Qk4sWUFBWSxFQUFuQztBQUNIO0FBSEQ7QUFScUMsR0FBaEMsQ0FBYjs7QUFlQSxXQUFTQSxZQUFULEdBQXdCO0FBQ3BCLFFBQUlPLFdBQVcsR0FBR0MsTUFBTSxDQUFDQyxVQUF6QjtBQUNBLFFBQUlWLFNBQVMsR0FBR1MsTUFBTSxDQUFDQyxVQUFQLElBQXFCLEdBQXJCLEdBQTJCLFVBQTNCLEdBQXdDLFlBQXhEO0FBRUEsV0FBT1YsU0FBUDtBQUNIOztBQUVELE1BQUlXLElBQUksR0FBRyxJQUFJZCxNQUFKLENBQVcsZUFBWCxFQUE0QjtBQUNuQ0MsaUJBQWEsRUFBRSxDQURvQjtBQUVuQ0MsZ0JBQVksRUFBRSxFQUZxQjtBQUduQ0MsYUFBUyxFQUFFQyxZQUFZLEVBSFk7QUFJbkNDLGNBQVUsRUFBRTtBQUNSQyxZQUFNLEVBQUUscUJBREE7QUFFUkMsWUFBTSxFQUFFO0FBRkEsS0FKdUI7QUFRbkNDLE1BQUUsRUFBRTtBQUNBQyxZQUFNLEVBQUUsa0JBQVc7QUFDZkssWUFBSSxDQUFDSixlQUFMLENBQXFCTixZQUFZLEVBQWpDO0FBQ0g7QUFIRDtBQVIrQixHQUE1QixDQUFYO0FBZ0JILENBdkNEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL3dlYnNpdGVzL3BhZ2VzL2hvbWUuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcclxuICAgIHZhciBzd2lwZXIgPSBuZXcgU3dpcGVyKCcuc3dpcGVyLWNvbnRhaW5lcicsIHtcclxuICAgICAgICBzbGlkZXNQZXJWaWV3OiAzLFxyXG4gICAgICAgIHNwYWNlQmV0d2VlbjogNjAsXHJcbiAgICAgICAgZGlyZWN0aW9uOiBnZXREaXJlY3Rpb24oKSxcclxuICAgICAgICBuYXZpZ2F0aW9uOiB7XHJcbiAgICAgICAgICAgIG5leHRFbDogJy5zd2lwZXItYnV0dG9uLW5leHQnLFxyXG4gICAgICAgICAgICBwcmV2RWw6ICcuc3dpcGVyLWJ1dHRvbi1wcmV2JyxcclxuICAgICAgICB9LFxyXG4gICAgICAgIG9uOiB7XHJcbiAgICAgICAgICAgIHJlc2l6ZTogZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgICAgICBzd2lwZXIuY2hhbmdlRGlyZWN0aW9uKGdldERpcmVjdGlvbigpKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH1cclxuICAgIH0pO1xyXG5cclxuICAgIGZ1bmN0aW9uIGdldERpcmVjdGlvbigpIHtcclxuICAgICAgICB2YXIgd2luZG93V2lkdGggPSB3aW5kb3cuaW5uZXJXaWR0aDtcclxuICAgICAgICB2YXIgZGlyZWN0aW9uID0gd2luZG93LmlubmVyV2lkdGggPD0gNzYwID8gJ3ZlcnRpY2FsJyA6ICdob3Jpem9udGFsJztcclxuXHJcbiAgICAgICAgcmV0dXJuIGRpcmVjdGlvbjtcclxuICAgIH1cclxuXHJcbiAgICB2YXIgbGlzdCA9IG5ldyBTd2lwZXIoJy5saXN0LWN1cy1zYXknLCB7XHJcbiAgICAgICAgc2xpZGVzUGVyVmlldzogMyxcclxuICAgICAgICBzcGFjZUJldHdlZW46IDMwLFxyXG4gICAgICAgIGRpcmVjdGlvbjogZ2V0RGlyZWN0aW9uKCksXHJcbiAgICAgICAgbmF2aWdhdGlvbjoge1xyXG4gICAgICAgICAgICBuZXh0RWw6ICcuc3dpcGVyLWJ1dHRvbi1uZXh0JyxcclxuICAgICAgICAgICAgcHJldkVsOiAnLnN3aXBlci1idXR0b24tcHJldicsXHJcbiAgICAgICAgfSxcclxuICAgICAgICBvbjoge1xyXG4gICAgICAgICAgICByZXNpemU6IGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICAgICAgbGlzdC5jaGFuZ2VEaXJlY3Rpb24oZ2V0RGlyZWN0aW9uKCkpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfVxyXG4gICAgfSk7XHJcblxyXG5cclxufSk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/websites/pages/home.js\n");

/***/ }),

/***/ 22:
/*!***************************************************!*\
  !*** multi ./resources/js/websites/pages/home.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\camsolution\tech-for-kid\resources\js\websites\pages\home.js */"./resources/js/websites/pages/home.js");


/***/ })

/******/ });