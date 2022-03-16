/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/Custom/scanQr.js":
/*!***************************************!*\
  !*** ./resources/js/Custom/scanQr.js ***!
  \***************************************/
/***/ (() => {

eval("var cam;\n$(document).ready(function () {\n  $('.selectCam').hide();\n  $('.submitManual').hide();\n  $('.formInput').hide();\n  $('.switchToScan').hide();\n});\n$('.inputManual').click(function () {\n  $('.inputManual').hide();\n  $('#reader').hide();\n  $('.qrcode-code').hide();\n  $('.scanStop').hide();\n  $('.scanStart').hide();\n  $('.formInput').show();\n  $('.switchToScan').show();\n  $('.submitManual').show();\n\n  if (cam.length > 0) {\n    if (cam.length > 1) {\n      $('.selectCam').hide();\n    }\n\n    scanner.start(cam[0]);\n    $(this).hide();\n  } else {\n    alert('No cameras found.');\n  }\n\n  ;\n});\n$('.switchToScan').click(function () {\n  $('.qrcode-code').show();\n  $('.scanStart').show();\n  $('.formInput').hide();\n  $('.switchToScan').hide();\n  $('.submitManual').hide();\n  $('.inputManual').show();\n  $(this).hide();\n});\n$('.submitManual').click(function () {\n  var $code = $('#code').val();\n\n  if ($code === '') {\n    alert('Code Tidak Boleh Kosong');\n    return false;\n  } else {\n    // $(this).html('<i class=\"fas fa-spinner fa-pulse\"></i>');\n    $.ajax({\n      type: \"POST\",\n      url: ajaxUrlAdmin + \"peminjaman\",\n      data: {\n        _token: $('meta[name=\"csrf-token\"]').attr('content'),\n        code: $code\n      },\n      dataType: \"JSON\",\n      success: function success(e) {\n        if (e.success) {\n          location.href = e.url;\n        } else {\n          alert(e.message);\n          $('.submitManual').html('Submit');\n        }\n      }\n    });\n  }\n});\nvar scanner = new Instascan.Scanner({\n  video: document.getElementById('reader')\n});\nscanner.addListener('scan', function (content) {\n  window.location.href = content; // alert(content);\n});\nInstascan.Camera.getCameras().then(function (cameras) {\n  cam = cameras;\n})[\"catch\"](function (e) {\n  console.error(e);\n});\n$(\"body\").on(\"change\", \".selectCam\", function () {\n  var $val = $(this).val();\n  scanner.start(cam[$val]);\n});\n$('.scanStop').click(function () {\n  scanner.stop();\n  $('#reader').hide();\n  $('.qrcode-code').show();\n  $('.scanStart').show();\n  $(this).hide();\n});\n$('.scanStart').click(function () {\n  $('#reader').show();\n  $('.qrcode-code').hide();\n\n  if (cam.length > 0) {\n    if (cam.length > 1) {\n      $('.selectCam').show();\n      $('.selectCam option').remove();\n      var $camSelector = $('.selectCam');\n      $.each(cam, function (index, value) {\n        console.log(index);\n        var $data = '<option value=\"' + index + '\">' + value.name + '</option>';\n        $camSelector.append($data);\n      });\n      $camSelector.append('<option value=\"1\">Kedua</option>');\n    }\n\n    scanner.start(cam[0]);\n    $(this).hide();\n    $('.scanStop').show();\n  } else {\n    alert('No cameras found.');\n  }\n\n  ;\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvQ3VzdG9tL3NjYW5Rci5qcz9iZGNlIl0sIm5hbWVzIjpbImNhbSIsIiQiLCJkb2N1bWVudCIsInJlYWR5IiwiaGlkZSIsImNsaWNrIiwic2hvdyIsImxlbmd0aCIsInNjYW5uZXIiLCJzdGFydCIsImFsZXJ0IiwiJGNvZGUiLCJ2YWwiLCJhamF4IiwidHlwZSIsInVybCIsImFqYXhVcmxBZG1pbiIsImRhdGEiLCJfdG9rZW4iLCJhdHRyIiwiY29kZSIsImRhdGFUeXBlIiwic3VjY2VzcyIsImUiLCJsb2NhdGlvbiIsImhyZWYiLCJtZXNzYWdlIiwiaHRtbCIsIkluc3Rhc2NhbiIsIlNjYW5uZXIiLCJ2aWRlbyIsImdldEVsZW1lbnRCeUlkIiwiYWRkTGlzdGVuZXIiLCJjb250ZW50Iiwid2luZG93IiwiQ2FtZXJhIiwiZ2V0Q2FtZXJhcyIsInRoZW4iLCJjYW1lcmFzIiwiY29uc29sZSIsImVycm9yIiwib24iLCIkdmFsIiwic3RvcCIsInJlbW92ZSIsIiRjYW1TZWxlY3RvciIsImVhY2giLCJpbmRleCIsInZhbHVlIiwibG9nIiwiJGRhdGEiLCJuYW1lIiwiYXBwZW5kIl0sIm1hcHBpbmdzIjoiQUFBQSxJQUFJQSxHQUFKO0FBRUFDLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBWTtBQUMxQkYsRUFBQUEsQ0FBQyxDQUFDLFlBQUQsQ0FBRCxDQUFnQkcsSUFBaEI7QUFDQUgsRUFBQUEsQ0FBQyxDQUFDLGVBQUQsQ0FBRCxDQUFtQkcsSUFBbkI7QUFDQUgsRUFBQUEsQ0FBQyxDQUFDLFlBQUQsQ0FBRCxDQUFnQkcsSUFBaEI7QUFDQUgsRUFBQUEsQ0FBQyxDQUFDLGVBQUQsQ0FBRCxDQUFtQkcsSUFBbkI7QUFDSCxDQUxEO0FBT0FILENBQUMsQ0FBQyxjQUFELENBQUQsQ0FBa0JJLEtBQWxCLENBQXdCLFlBQVk7QUFDaENKLEVBQUFBLENBQUMsQ0FBQyxjQUFELENBQUQsQ0FBa0JH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ICAgJCgnLnNlbGVjdENhbScpLmhpZGUoKTtcbiAgICAkKCcuc3VibWl0TWFudWFsJykuaGlkZSgpO1xuICAgICQoJy5mb3JtSW5wdXQnKS5oaWRlKCk7XG4gICAgJCgnLnN3aXRjaFRvU2NhbicpLmhpZGUoKTtcbn0pO1xuXG4kKCcuaW5wdXRNYW51YWwnKS5jbGljayhmdW5jdGlvbiAoKSB7XG4gICAgJCgnLmlucHV0TWFudWFsJykuaGlkZSgpO1xuICAgICQoJyNyZWFkZXInKS5oaWRlKCk7XG4gICAgJCgnLnFyY29kZS1jb2RlJykuaGlkZSgpO1xuICAgICQoJy5zY2FuU3RvcCcpLmhpZGUoKTtcbiAgICAkKCcuc2NhblN0YXJ0JykuaGlkZSgpO1xuICAgICQoJy5mb3JtSW5wdXQnKS5zaG93KCk7XG4gICAgJCgnLnN3aXRjaFRvU2NhbicpLnNob3coKTtcbiAgICAkKCcuc3VibWl0TWFudWFsJykuc2hvdygpO1xuICAgIGlmIChjYW0ubGVuZ3RoID4gMCkge1xuICAgICAgICBpZiAoY2FtLmxlbmd0aCA+IDEpIHtcbiAgICAgICAgICAgICQoJy5zZWxlY3RDYW0nKS5oaWRlKCk7XG4gICAgICAgIH1cbiAgICAgICAgc2Nhbm5lci5zdGFydChjYW1bMF0pO1xuICAgICAgICAkKHRoaXMpLmhpZGUoKTtcbiAgICB9IGVsc2Uge1xuICAgICAgICBhbGVydCgnTm8gY2FtZXJhcyBmb3VuZC4nKTtcbiAgICB9O1xufSk7XG4kKCcuc3dpdGNoVG9TY2FuJykuY2xpY2soZnVuY3Rpb24gKCkge1xuICAgICQoJy5xcmNvZGUtY29kZScpLnNob3coKTtcbiAgICAkKCcuc2NhblN0YXJ0Jykuc2hvdygpO1xuICAgICQoJy5mb3JtSW5wdXQnKS5oaWRlKCk7XG4gICAgJCgnLnN3aXRjaFRvU2NhbicpLmhpZGUoKTtcbiAgICAkKCcuc3VibWl0TWFudWFsJykuaGlkZSgpO1xuICAgICQoJy5pbnB1dE1hbnVhbCcpLnNob3coKTtcbiAgICAkKHRoaXMpLmhpZGUoKTtcbn0pO1xuXG4kKCcuc3VibWl0TWFudWFsJykuY2xpY2soZnVuY3Rpb24gKCkge1xuICAgIHZhciAkY29kZSA9ICQoJyNjb2RlJykudmFsKCk7XG4gICAgaWYgKCRjb2RlID09PSAnJykge1xuICAgICAgICBhbGVydCgnQ29kZSBUaWRhayBCb2xlaCBLb3NvbmcnKTtcbiAgICAgICAgcmV0dXJuIGZhbHNlO1xuICAgIH0gZWxzZSB7XG4gICAgICAgIC8vICQodGhpcykuaHRtbCgnPGkgY2xhc3M9XCJmYXMgZmEtc3Bpbm5lciBmYS1wdWxzZVwiPjwvaT4nKTtcbiAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgIHR5cGU6IFwiUE9TVFwiLFxuICAgICAgICAgICAgdXJsOiBhamF4VXJsQWRtaW4gKyBcInBlbWluamFtYW5cIixcbiAgICAgICAgICAgIGRhdGE6IHtcbiAgICAgICAgICAgICAgICBfdG9rZW46ICQoJ21ldGFbbmFtZT1cImNzcmYtdG9rZW5cIl0nKS5hdHRyKCdjb250ZW50JyksXG4gICAgICAgICAgICAgICAgY29kZTogJGNvZGVcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICBkYXRhVHlwZTogXCJKU09OXCIsXG4gICAgICAgICAgICBzdWNjZXNzOiBmdW5jdGlvbiAoZSkge1xuICAgICAgICAgICAgICAgIGlmIChlLnN1Y2Nlc3MpIHtcbiAgICAgICAgICAgICAgICAgICAgbG9jYXRpb24uaHJlZiA9IGUudXJsO1xuICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgIGFsZXJ0KGUubWVzc2FnZSk7XG4gICAgICAgICAgICAgICAgICAgICQoJy5zdWJtaXRNYW51YWwnKS5odG1sKCdTdWJtaXQnKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgIH1cbn0pO1xuXG5sZXQgc2Nhbm5lciA9IG5ldyBJbnN0YXNjYW4uU2Nhbm5lcih7IHZpZGVvOiBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgncmVhZGVyJykgfSk7XG5zY2FubmVyLmFkZExpc3RlbmVyKCdzY2FuJywgZnVuY3Rpb24gKGNvbnRlbnQpIHtcbiAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9IGNvbnRlbnQ7XG4gICAgLy8gYWxlcnQoY29udGVudCk7XG59KTtcblxuSW5zdGFzY2FuLkNhbWVyYS5nZXRDYW1lcmFzKCkudGhlbihmdW5jdGlvbiAoY2FtZXJhcykge1xuICAgIGNhbSA9IGNhbWVyYXM7XG59KS5jYXRjaChmdW5jdGlvbiAoZSkge1xuICAgIGNvbnNvbGUuZXJyb3IoZSk7XG59KTtcblxuJChcImJvZHlcIikub24oXCJjaGFuZ2VcIiwgXCIuc2VsZWN0Q2FtXCIsIGZ1bmN0aW9uICgpIHtcbiAgICB2YXIgJHZhbCA9ICQodGhpcykudmFsKCk7XG4gICAgc2Nhbm5lci5zdGFydChjYW1bJHZhbF0pO1xufSk7XG5cbiQoJy5zY2FuU3RvcCcpLmNsaWNrKGZ1bmN0aW9uICgpIHtcbiAgICBzY2FubmVyLnN0b3AoKTtcbiAgICAkKCcjcmVhZGVyJykuaGlkZSgpO1xuICAgICQoJy5xcmNvZGUtY29kZScpLnNob3coKTtcbiAgICAkKCcuc2NhblN0YXJ0Jykuc2hvdygpO1xuICAgICQodGhpcykuaGlkZSgpO1xufSlcblxuJCgnLnNjYW5TdGFydCcpLmNsaWNrKGZ1bmN0aW9uICgpIHtcbiAgICAkKCcjcmVhZGVyJykuc2hvdygpO1xuICAgICQoJy5xcmNvZGUtY29kZScpLmhpZGUoKTtcbiAgICBpZiAoY2FtLmxlbmd0aCA+IDApIHtcbiAgICAgICAgaWYgKGNhbS5sZW5ndGggPiAxKSB7XG5cbiAgICAgICAgICAgICQoJy5zZWxlY3RDYW0nKS5zaG93KCk7XG4gICAgICAgICAgICAkKCcuc2VsZWN0Q2FtIG9wdGlvbicpLnJlbW92ZSgpO1xuICAgICAgICAgICAgdmFyICRjYW1TZWxlY3RvciA9ICQoJy5zZWxlY3RDYW0nKTtcbiAgICAgICAgICAgICQuZWFjaChjYW0sIGZ1bmN0aW9uIChpbmRleCwgdmFsdWUpIHtcbiAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhpbmRleCk7XG4gICAgICAgICAgICAgICAgdmFyICRkYXRhID0gJzxvcHRpb24gdmFsdWU9XCInICsgaW5kZXggKyAnXCI+JyArIHZhbHVlLm5hbWUgKyAnPC9vcHRpb24+J1xuICAgICAgICAgICAgICAgICRjYW1TZWxlY3Rvci5hcHBlbmQoJGRhdGEpO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAkY2FtU2VsZWN0b3IuYXBwZW5kKCc8b3B0aW9uIHZhbHVlPVwiMVwiPktlZHVhPC9vcHRpb24+Jyk7XG4gICAgICAgIH1cbiAgICAgICAgc2Nhbm5lci5zdGFydChjYW1bMF0pO1xuICAgICAgICAkKHRoaXMpLmhpZGUoKTtcbiAgICAgICAgJCgnLnNjYW5TdG9wJykuc2hvdygpO1xuICAgIH0gZWxzZSB7XG4gICAgICAgIGFsZXJ0KCdObyBjYW1lcmFzIGZvdW5kLicpO1xuICAgIH07XG59KTtcbiJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvQ3VzdG9tL3NjYW5Rci5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/Custom/scanQr.js\n");

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

eval("// require('./bootstrap');\n__webpack_require__(/*! ./Custom/scanQr */ \"./resources/js/Custom/scanQr.js\");//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYXBwLmpzLmpzIiwibWFwcGluZ3MiOiJBQUFBO0FBQ0FBLG1CQUFPLENBQUMsd0RBQUQsQ0FBUCIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9hcHAuanM/Y2VkNiJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyByZXF1aXJlKCcuL2Jvb3RzdHJhcCcpO1xyXG5yZXF1aXJlKCcuL0N1c3RvbS9zY2FuUXInKTtcclxuIl0sIm5hbWVzIjpbInJlcXVpcmUiXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc2Fzcy9hcHAuc2Nzcy5qcyIsIm1hcHBpbmdzIjoiO0FBQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9hcHAuc2Nzcz9hODBiIl0sInNvdXJjZXNDb250ZW50IjpbIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6W10sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/sass/app.scss\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/sass/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;