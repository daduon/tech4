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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admins/ckeditor.js":
/*!*****************************************!*\
  !*** ./resources/js/admins/ckeditor.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(document).ready(function () {\n  var toolbarGroups = [{\n    name: 'document',\n    groups: ['mode', 'document', 'doctools']\n  }, {\n    name: 'clipboard',\n    groups: ['undo', 'clipboard']\n  }, {\n    name: 'editing',\n    groups: ['find', 'selection', 'spellchecker', 'editing']\n  }, {\n    name: 'forms',\n    groups: ['forms']\n  }, {\n    name: 'basicstyles',\n    groups: ['basicstyles', 'cleanup']\n  }, {\n    name: 'paragraph',\n    groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']\n  }, {\n    name: 'links',\n    groups: ['links']\n  }, {\n    name: 'insert',\n    groups: ['insert']\n  }, {\n    name: 'styles',\n    groups: ['styles']\n  }, {\n    name: 'colors',\n    groups: ['colors']\n  }, {\n    name: 'tools',\n    groups: ['tools']\n  }, {\n    name: 'others',\n    groups: ['others']\n  }, {\n    name: 'about',\n    groups: ['about']\n  }];\n  var removeButtons = 'Source,Save,NewPage,ExportPdf,Preview,Print,Templates,PasteText,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Italic,Underline,Strike,Subscript,Superscript,CopyFormatting,RemoveFormat,Outdent,Indent,Blockquote,CreateDiv,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Flash,Image,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Styles,Format,Font,BGColor,ShowBlocks,About,PasteFromWord';\n  $('textarea.editor').ckeditor({\n    toolbar: 'Basic',\n    toolbarGroups: toolbarGroups,\n    removeButtons: removeButtons\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYWRtaW5zL2NrZWRpdG9yLmpzPzU2NDciXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJ0b29sYmFyR3JvdXBzIiwibmFtZSIsImdyb3VwcyIsInJlbW92ZUJ1dHRvbnMiLCJja2VkaXRvciIsInRvb2xiYXIiXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVc7QUFDekIsTUFBSUMsYUFBYSxHQUFHLENBQ2hCO0FBQUVDLFFBQUksRUFBRSxVQUFSO0FBQW9CQyxVQUFNLEVBQUUsQ0FBQyxNQUFELEVBQVMsVUFBVCxFQUFxQixVQUFyQjtBQUE1QixHQURnQixFQUVoQjtBQUFFRCxRQUFJLEVBQUUsV0FBUjtBQUFxQkMsVUFBTSxFQUFFLENBQUMsTUFBRCxFQUFTLFdBQVQ7QUFBN0IsR0FGZ0IsRUFHaEI7QUFBRUQsUUFBSSxFQUFFLFNBQVI7QUFBbUJDLFVBQU0sRUFBRSxDQUFDLE1BQUQsRUFBUyxXQUFULEVBQXNCLGNBQXRCLEVBQXNDLFNBQXRDO0FBQTNCLEdBSGdCLEVBSWhCO0FBQUVELFFBQUksRUFBRSxPQUFSO0FBQWlCQyxVQUFNLEVBQUUsQ0FBQyxPQUFEO0FBQXpCLEdBSmdCLEVBS2hCO0FBQUVELFFBQUksRUFBRSxhQUFSO0FBQXVCQyxVQUFNLEVBQUUsQ0FBQyxhQUFELEVBQWdCLFNBQWhCO0FBQS9CLEdBTGdCLEVBTWhCO0FBQUVELFFBQUksRUFBRSxXQUFSO0FBQXFCQyxVQUFNLEVBQUUsQ0FBQyxNQUFELEVBQVMsUUFBVCxFQUFtQixRQUFuQixFQUE2QixPQUE3QixFQUFzQyxNQUF0QyxFQUE4QyxXQUE5QztBQUE3QixHQU5nQixFQU9oQjtBQUFFRCxRQUFJLEVBQUUsT0FBUjtBQUFpQkMsVUFBTSxFQUFFLENBQUMsT0FBRDtBQUF6QixHQVBnQixFQVFoQjtBQUFFRCxRQUFJLEVBQUUsUUFBUjtBQUFrQkMsVUFBTSxFQUFFLENBQUMsUUFBRDtBQUExQixHQVJnQixFQVNoQjtBQUFFRCxRQUFJLEVBQUUsUUFBUjtBQUFrQkMsVUFBTSxFQUFFLENBQUMsUUFBRDtBQUExQixHQVRnQixFQVVoQjtBQUFFRCxRQUFJLEVBQUUsUUFBUjtBQUFrQkMsVUFBTSxFQUFFLENBQUMsUUFBRDtBQUExQixHQVZnQixFQVdoQjtBQUFFRCxRQUFJLEVBQUUsT0FBUjtBQUFpQkMsVUFBTSxFQUFFLENBQUMsT0FBRDtBQUF6QixHQVhnQixFQVloQjtBQUFFRCxRQUFJLEVBQUUsUUFBUjtBQUFrQkMsVUFBTSxFQUFFLENBQUMsUUFBRDtBQUExQixHQVpnQixFQWFoQjtBQUFFRCxRQUFJLEVBQUUsT0FBUjtBQUFpQkMsVUFBTSxFQUFFLENBQUMsT0FBRDtBQUF6QixHQWJnQixDQUFwQjtBQWdCQSxNQUFJQyxhQUFhLEdBQUcsb2NBQXBCO0FBRUFOLEdBQUMsQ0FBQyxpQkFBRCxDQUFELENBQXFCTyxRQUFyQixDQUE4QjtBQUMxQkMsV0FBTyxFQUFFLE9BRGlCO0FBRTFCTCxpQkFBYSxFQUFiQSxhQUYwQjtBQUcxQkcsaUJBQWEsRUFBYkE7QUFIMEIsR0FBOUI7QUFLSCxDQXhCRCIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9hZG1pbnMvY2tlZGl0b3IuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpIHtcclxuICAgIHZhciB0b29sYmFyR3JvdXBzID0gW1xyXG4gICAgICAgIHsgbmFtZTogJ2RvY3VtZW50JywgZ3JvdXBzOiBbJ21vZGUnLCAnZG9jdW1lbnQnLCAnZG9jdG9vbHMnXSB9LFxyXG4gICAgICAgIHsgbmFtZTogJ2NsaXBib2FyZCcsIGdyb3VwczogWyd1bmRvJywgJ2NsaXBib2FyZCddIH0sXHJcbiAgICAgICAgeyBuYW1lOiAnZWRpdGluZycsIGdyb3VwczogWydmaW5kJywgJ3NlbGVjdGlvbicsICdzcGVsbGNoZWNrZXInLCAnZWRpdGluZyddIH0sXHJcbiAgICAgICAgeyBuYW1lOiAnZm9ybXMnLCBncm91cHM6IFsnZm9ybXMnXSB9LFxyXG4gICAgICAgIHsgbmFtZTogJ2Jhc2ljc3R5bGVzJywgZ3JvdXBzOiBbJ2Jhc2ljc3R5bGVzJywgJ2NsZWFudXAnXSB9LFxyXG4gICAgICAgIHsgbmFtZTogJ3BhcmFncmFwaCcsIGdyb3VwczogWydsaXN0JywgJ2luZGVudCcsICdibG9ja3MnLCAnYWxpZ24nLCAnYmlkaScsICdwYXJhZ3JhcGgnXSB9LFxyXG4gICAgICAgIHsgbmFtZTogJ2xpbmtzJywgZ3JvdXBzOiBbJ2xpbmtzJ10gfSxcclxuICAgICAgICB7IG5hbWU6ICdpbnNlcnQnLCBncm91cHM6IFsnaW5zZXJ0J10gfSxcclxuICAgICAgICB7IG5hbWU6ICdzdHlsZXMnLCBncm91cHM6IFsnc3R5bGVzJ10gfSxcclxuICAgICAgICB7IG5hbWU6ICdjb2xvcnMnLCBncm91cHM6IFsnY29sb3JzJ10gfSxcclxuICAgICAgICB7IG5hbWU6ICd0b29scycsIGdyb3VwczogWyd0b29scyddIH0sXHJcbiAgICAgICAgeyBuYW1lOiAnb3RoZXJzJywgZ3JvdXBzOiBbJ290aGVycyddIH0sXHJcbiAgICAgICAgeyBuYW1lOiAnYWJvdXQnLCBncm91cHM6IFsnYWJvdXQnXSB9XHJcbiAgICBdO1xyXG5cclxuICAgIHZhciByZW1vdmVCdXR0b25zID0gJ1NvdXJjZSxTYXZlLE5ld1BhZ2UsRXhwb3J0UGRmLFByZXZpZXcsUHJpbnQsVGVtcGxhdGVzLFBhc3RlVGV4dCxGaW5kLFJlcGxhY2UsU2VsZWN0QWxsLFNjYXl0LEZvcm0sQ2hlY2tib3gsUmFkaW8sVGV4dEZpZWxkLFRleHRhcmVhLFNlbGVjdCxCdXR0b24sSW1hZ2VCdXR0b24sSGlkZGVuRmllbGQsSXRhbGljLFVuZGVybGluZSxTdHJpa2UsU3Vic2NyaXB0LFN1cGVyc2NyaXB0LENvcHlGb3JtYXR0aW5nLFJlbW92ZUZvcm1hdCxPdXRkZW50LEluZGVudCxCbG9ja3F1b3RlLENyZWF0ZURpdixCaWRpTHRyLEJpZGlSdGwsTGFuZ3VhZ2UsTGluayxVbmxpbmssQW5jaG9yLEZsYXNoLEltYWdlLFRhYmxlLEhvcml6b250YWxSdWxlLFNtaWxleSxTcGVjaWFsQ2hhcixQYWdlQnJlYWssSWZyYW1lLFN0eWxlcyxGb3JtYXQsRm9udCxCR0NvbG9yLFNob3dCbG9ja3MsQWJvdXQsUGFzdGVGcm9tV29yZCc7XHJcblxyXG4gICAgJCgndGV4dGFyZWEuZWRpdG9yJykuY2tlZGl0b3Ioe1xyXG4gICAgICAgIHRvb2xiYXI6ICdCYXNpYycsXHJcbiAgICAgICAgdG9vbGJhckdyb3VwcyxcclxuICAgICAgICByZW1vdmVCdXR0b25zXHJcbiAgICB9KTtcclxufSk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/admins/ckeditor.js\n");

/***/ }),

/***/ 2:
/*!***********************************************!*\
  !*** multi ./resources/js/admins/ckeditor.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\camsolution\tech-for-kid\resources\js\admins\ckeditor.js */"./resources/js/admins/ckeditor.js");


/***/ })

/******/ });