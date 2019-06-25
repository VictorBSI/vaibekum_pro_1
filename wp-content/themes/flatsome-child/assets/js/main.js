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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./js/main.js":
/*!********************!*\
  !*** ./js/main.js ***!
  \********************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\js\\main.js: Unexpected token (1:0)\n\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 1 | \u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<<\u001b[39m\u001b[33m<\u001b[39m \u001b[33mHEAD\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m   | \u001b[39m\u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 2 | \u001b[39m\u001b[33m===\u001b[39m\u001b[33m===\u001b[39m\u001b[33m=\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 3 | \u001b[39m$(document)\u001b[33m.\u001b[39mready(\u001b[36mfunction\u001b[39m($) {\u001b[0m\n\u001b[0m \u001b[90m 4 | \u001b[39m  $(\u001b[32m\"body\"\u001b[39m)\u001b[33m.\u001b[39maddClass(\u001b[32m\"preloader-site\"\u001b[39m)\u001b[33m;\u001b[39m\u001b[0m\n    at Parser.raise (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\parser\\lib\\index.js:6344:17)\n    at Parser.unexpected (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\parser\\lib\\index.js:7659:16)\n    at Parser.parseExprAtom (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\parser\\lib\\index.js:8828:20)\n    at Parser.parseExprSubscripts (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\parser\\lib\\index.js:8413:23)\n    at Parser.parseMaybeUnary (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\parser\\lib\\index.js:8393:21)\n    at Parser.parseExprOps (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\parser\\lib\\index.js:8280:23)\n    at Parser.parseMaybeConditional (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\parser\\lib\\index.js:8253:23)\n    at Parser.parseMaybeAssign (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\parser\\lib\\index.js:8200:21)\n    at Parser.parseExpression (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\parser\\lib\\index.js:8148:23)\n    at Parser.parseStatementContent (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\parser\\lib\\index.js:9917:23)\n    at Parser.parseStatement (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\parser\\lib\\index.js:9788:17)\n    at Parser.parseBlockOrModuleBlockBody (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\parser\\lib\\index.js:10364:25)\n    at Parser.parseBlockBody (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\parser\\lib\\index.js:10351:10)\n    at Parser.parseTopLevel (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\parser\\lib\\index.js:9717:10)\n    at Parser.parse (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\parser\\lib\\index.js:11233:17)\n    at parse (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\parser\\lib\\index.js:11269:38)\n    at parser (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:170:34)\n    at normalizeFile (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:138:11)\n    at runSync (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\core\\lib\\transformation\\index.js:44:43)\n    at runAsync (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\core\\lib\\transformation\\index.js:35:14)\n    at process.nextTick (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\@babel\\core\\lib\\transform.js:34:34)\n    at process._tickCallback (internal/process/next_tick.js:61:11)");

/***/ }),

/***/ "./source/app.scss":
/*!*************************!*\
  !*** ./source/app.scss ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/lib/loader.js):\n\r\n@import \"./footer\";\r\n                 ^\r\n      Expected \"{\".\n    ╷\n304 │ @import \"./footer\";\r\n    │                   ^\n    ╵\n  source\\medium\\general.scss 304:19  root stylesheet\n  source\\medium.scss 1:9             @import\n  stdin 2:9                          root stylesheet\r\n      in c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\source\\medium\\general.scss (line 304, column 19)\n    at runLoaders (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\webpack\\lib\\NormalModule.js:302:20)\n    at c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\loader-runner\\lib\\LoaderRunner.js:367:11\n    at c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\loader-runner\\lib\\LoaderRunner.js:233:18\n    at context.callback (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\loader-runner\\lib\\LoaderRunner.js:111:13)\n    at render (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass-loader\\lib\\loader.js:52:13)\n    at Function.$2 (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:24300:48)\n    at yb.$2 (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:15220:15)\n    at wf.lI (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:9168:42)\n    at wf.lH (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:9170:32)\n    at iQ.w2 (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:8439:46)\n    at vC.$0 (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:8575:7)\n    at Object.eU (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:1461:80)\n    at al.bc (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:8492:3)\n    at j3.bc (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:8434:25)\n    at j3.cA (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:8421:12)\n    at pV.cA (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:8203:35)\n    at Object.m (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:1351:19)\n    at c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:5080:51\n    at yG.a (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:1359:71)\n    at yG.$2 (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:8222:23)\n    at xd.$2 (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:8217:25)\n    at wf.lI (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:9168:42)\n    at wf.lH (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:9170:32)\n    at iQ.w2 (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:8439:46)\n    at vC.$0 (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:8575:7)\n    at Object.eU (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:1461:80)\n    at al.bc (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:8492:3)\n    at j3.bc (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:8434:25)\n    at j3.cA (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:8421:12)\n    at Object.eval (eval at Eg (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:628:8), <anonymous>:3:37)\n    at wf.lI (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:9168:42)\n    at wf.lH (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:9170:32)\n    at iQ.w2 (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:8439:46)\n    at vC.$0 (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:8575:7)\n    at Object.eU (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:1461:80)\n    at al.bc (c:\\xampp\\htdocs\\vaibekum\\wp-content\\themes\\flatsome-child\\node_modules\\sass\\sass.dart.js:8492:3)");

/***/ }),

/***/ 0:
/*!********************************************!*\
  !*** multi ./js/main.js ./source/app.scss ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! c:\xampp\htdocs\vaibekum\wp-content\themes\flatsome-child\js\main.js */"./js/main.js");
module.exports = __webpack_require__(/*! c:\xampp\htdocs\vaibekum\wp-content\themes\flatsome-child\source\app.scss */"./source/app.scss");


/***/ })

/******/ });
//# sourceMappingURL=main.js.map