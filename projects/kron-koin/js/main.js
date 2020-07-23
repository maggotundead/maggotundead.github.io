// 'use strict';
function get_timer(string_was, string_sec) {
	var date_new_was = new Date(string_was);
	var date_new_sec = string_sec;
	var date = new Date();
	var razn, left, left_n, vraz, ost;
	razn = date - date_new_was;
	left = date_new_sec - razn;
	if (left > 0) {
		left_n = left;
	} else {
		if (Math.abs(left) > date_new_sec) {
			vraz = (Math.abs(left)) / date_new_sec;
			vraz = vraz.toString().split(".");
			left_n = Math.abs(left) - (vraz[0]) * date_new_sec;
			left_n = date_new_sec - left_n;
		} else {
			left_n = date_new_sec - Math.abs(left);
		}
	}
	ost = left_n;
	var day = parseInt(ost / (60 * 60 * 1000 * 24));
	if (day < 10) {
		day = "0" + day;
	}
	day = day.toString();
	var hour = parseInt(ost / (60 * 60 * 1000)) % 24;
	if (hour < 10) {
		hour = "0" + hour;
	}
	hour = hour.toString();
	var min = parseInt(ost / (1000 * 60)) % 60;
	if (min < 10) {
		min = "0" + min;
	}
	min = min.toString();
	var sec = parseInt(ost / 1000) % 60;
	if (sec < 10) {
		sec = "0" + sec;
	}
	sec = sec.toString();
	timethis = day + " : " + hour + " : " + min + " : " + sec;
	$(".counter-value .result-day").text(day);
	$(".counter-value .result-hour").text(hour);
	$(".counter-value .result-minute").text(min);
	$(".counter-value .result-second").text(sec);
}

function getfrominputs() {
	string_was = "Thu Apr 18 2019 23:59:59 GMT+0300 (Восточная Европа, летнее время)";
	string_sec = "86400900";
	get_timer(string_was, string_sec);
	setInterval(function() {
		get_timer(string_was, string_sec);
	}, 1000);
};

function formatDate(date) {
  var monthNames = [
    "января", "февраля", "марта",
    "апреля", "мая", "июня", "июля",
    "августа", "сентября", "октября",
    "ноября", "декабря"
  ];

  var day = date.getDate();
  var monthIndex = date.getMonth();

  return day + ' ' + monthNames[monthIndex];
};

$(document).ready(function() {

	
	getfrominputs();

	$('.modal-overlay').click(function() {
		$('.modal').removeClass('open');
		$('body').removeClass('modal-open');
	});
	$('.modal-close').click(function() {
		$('.modal').removeClass('open');
		$('body').removeClass('modal-open');
	});

	$('.info-modal-button').click(function(e) {
		e.preventDefault();
		$('body').addClass('modal-open');
		$('.consult-modal').addClass('open');
	});
	$('.gift-modal-button').click(function(e) {
		e.preventDefault();
		$('body').addClass('modal-open');
		$('.gift-modal').addClass('open');
	});

	$('.current-day').text(formatDate(new Date()));


});