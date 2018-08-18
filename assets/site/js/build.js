(function(){function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s}return e})()({1:[function(require,module,exports){
// plugins de jquery
// require('owl.carousel');
// require('slick-carousel');
// modulos do Vue

// Vue Resource
// var VueResource = require('vue-resource');
// window.VueResource = VueResource;

// vue 3d
// var Carousel3d = require('vue-carousel-3d');
// window.Carousel3d = Carousel3d;

// vue 3d
// var VueScrollTo = require('vue-scrollto');
// window.VueScrollTo = VueScrollTo;


// var VueAwesomeSwiper = require('vue-awesome-swiper');
// window.VueAwesomeSwiper = VueAwesomeSwiper;

// var VueTheMask  = require('vue-the-mask');
// window.VueTheMask  = VueTheMask ;
},{}]},{},[1]);


'use strict';

var pad = function pad(n, width, z) {
	z = z || '0';
	n = n + '';
	return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
};
var printTimer = function printTimer(date, language, place) {
	var translate = [];
	if (language === 'pt') {
		translate = ['dias', 'horas', 'minutos', 'segundos'];
	} else {
		translate = ['days', 'hours', 'minutes', 'seconds'];
	}

	let dt = date.replace(/-/g, "/")
	var time = Math.trunc(new Date(dt).getTime() / 1000);
	window.setInterval(function () {
		var now = Math.trunc(new Date().getTime() / 1000);

		var seconds = function seconds() {
			return (time - now) % 60;
		};
		var minutes = function minutes() {
			return Math.trunc((time - now) / 60) % 60;
		};
		var hours = function hours() {
			return Math.trunc((time - now) / 60 / 60) % 24;
		};
		var days = function days() {
			return Math.trunc((time - now) / 60 / 60 / 24);
		};
		var timerHtml = "<span class=\"time\"><span class=\"num\">" + days() + "</span><br />" + translate[0] + "</span><span class=\"time\"><span class=\"num\">" + pad(hours(), 2) + "</span><br />" + translate[1] + "</span><span class=\"time\"><span class=\"num\">" + pad(minutes(), 2) + "</span><br />" + translate[2] + "</span>><span class=\"time\"><span class=\"num\">" + pad(seconds(), 2) + "</span><br />" + translate[3] + "</span>";
		$(place).html(timerHtml);
	}, 1000);
};

// helper para pegar a sombra certinha
var getShadowFromPSD = function getShadowFromPSD(hex, opacity, ang, distance, spread, size) {
	var angle = (180 - ang) * Math.PI / 180;
	var color = "rgba(" + convertHexToRGB(hex) + ", " + opacity / 100 + ")";
	var offsetX = Math.round(Math.cos(angle) * distance) + "px";
	var offsetY = Math.round(Math.sin(angle) * distance) + "px";
	var spreadRadius = size * spread / 100 + "px";
	var blurRadius = size - parseInt(spreadRadius, 10) + "px";

	return "box-shadow " + offsetX + " " + offsetY + " " + blurRadius + " " + spreadRadius + " " + color;
};
var convertHexToRGB = function convertHexToRGB(hexadecimal) {
	var hex = hexadecimal.replace('#', '');
	var r = parseInt(hex.substring(0, 2), 16);
	var g = parseInt(hex.substring(2, 4), 16);
	var b = parseInt(hex.substring(4, 6), 16);
	return r + ',' + g + ',' + b;
};

var videoHTML = function videoHTML(youtubeID) {
	var iframe = "<iframe src=\"" + "https://www.youtube.com/embed/" + youtubeID + "?autoplay=1&rel=0&showinfo=0" + "\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\" mozallowfullscreen=\"mozallowfullscreen\" msallowfullscreen=\"msallowfullscreen\" oallowfullscreen=\"oallowfullscreen\" webkitallowfullscreen=\"webkitallowfullscreen\"></iframe>";
	$('#play').remove();
	$('#video').find('.video-content').html(iframe);
};

$(document).ready(function () {
	//code
	var timerEl = $('#timer');
	var date = timerEl.data('timer');
	var lang = timerEl.data('language');
	printTimer(date, lang, '#timer');

	$(document).on('click', '#play', function (event) {
		event.preventDefault();
		var videoID = $(this).data('youtube');
		videoHTML(videoID);
	});

	$(document).on('click', '#openLanguage', function (event) {
		event.preventDefault();
		$('#language-choose').toggleClass('active');
	});

	$(document).on('click', '#openMenu', function (event) {
		event.preventDefault();
		$(this).toggleClass('is-active');
		$('#navigation').toggleClass('active');
	});

	$(document).on('click', '.questions-item-header', function (event) {
		event.preventDefault();
		$(this).toggleClass('active');
		$(this).next().toggleClass('active');
	});

	$(document).on('click', '#navigation a', function (event) {
		event.preventDefault();
		var hre = $(this).attr('href');
		var off = $(hre).offset().top - 68;
		$('html, body').animate({
			scrollTop: off + "px"
		}, 888);
		$('#navigation').removeClass('active');
	});

	// pegar valor da sombra
	// parametros : hex, opacity, angle, distance, spread, size
	console.log(getShadowFromPSD('#59ffab', 20, 0, 0, 0, 46));

	console.log(convertHexToRGB('#959595'));
});