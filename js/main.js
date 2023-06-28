(() => {
	const cursor = document.querySelector('.cursor');
	document.addEventListener('mousemove', e => {
		cursor.setAttribute('style', `top:  ${e.pageY - 25}px; left: ${e.pageX - 25}px;`);
	});
	document.addEventListener('click', () => {
		console.log("%c Click...!!!", "font-size: 20px; color:mediumspringgreen;");
		cursor.classList.add('cursor--expand');
		console.log(cursor.classList);
		setTimeout(() => {
			cursor.classList.remove('cursor--expand');
		}, 500);
	});
})();
$(document).ready(function() {
	$('.owl-2').owlCarousel({
		loop: true,
		margin: 10,
		animateOut: 'fadeOut',
		autoHeight: true,
		nav: true,
		autoplay: false,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 1
			}
		}
	})
	$('.owl-1').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		autoplay: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 4
			}
		}
	})
	$('.owl-3').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		autoplay: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 4
			}
		}
	})
	$('.owl-4').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		autoplay: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 1
			}
		}
	});
});
const sectionOne = document.querySelector('.counter-1');
const options = {};
const observer = new IntersectionObserver(function(entries, observer) {
	entries.forEach(entry => {
		console.log(entry);
		VanillaCounter();
	});
}, options);
observer.observe(sectionOne);
$(function() { // wait for document ready
	var fired = 0
	var firedout = 0;
	// build scene
	var con = false;
	var tween = new TimelineMax().add(TweenMax.to(".home-p", 1, {
		scale: 19,
		display: "none",
		ease: Linear.easeNone
	}), 0).add(TweenMax.to("#containerSection", 1, {
		opacity: 1,
		display: "block",
		ease: Linear.easeNone
	}), 1).add(TweenMax.to("#containerSection", 1, {
		position: "fixed",
		display: "block",
		ease: Linear.easeNone
	}), 0);
	var scene = new ScrollMagic.Scene({
		triggerElement: "#trigger1",
		duration: 1000,
		triggerHook: 0.1
	}).setPin("#pin1").on("progress", function(e) {
		if(e.progress.toFixed(3) > 0.01) {
			// $(".home-p").removeClass("backredcolor");
			//$("#containerSection").addClass("animate-fix-bg");
		}
		if(e.progress.toFixed(3) < 0.01) {
			// $(".home-p").addClass("backredcolor");
			// $("#containerSection").removeClass("animate-fix-bg");
		}
		if(e.progress.toFixed(3) < 0.53) {
			$("#mainTextCon").fadeOut();
		}
		if(e.progress.toFixed(3) > 0.53) {
			$("#mainTextCon").fadeIn();
		}
		if(e.progress.toFixed(3) < 0.9) {
			// $("#containerSection").css("position" , "");
			// $("#pin1").css("z-index","11");
			$("#containerSection").css("position", "fixed");
		}
		if(e.progress.toFixed(3) > 0.400) {
			// divOut();
		}
		if(e.progress.toFixed(3) < 0.400) {
			//divIn();
		}
		console.log("myprogress" + e.progress.toFixed(3))
	}).on("end", function(e) {
		$("#containerSection").css("position", "relative");
	}).setTween(tween).addTo(controller);
	// var tween2 = TweenMax.to(".mainTextCon", 1, {scale: 4, opacity:0 ,ease: Linear.easeNone});
	// var scene2 = new ScrollMagic.Scene({triggerElement:"#trigger2", duration:1000, triggerHook:0.1})
	// .setPin("#pin2")
	// .on("progress", function(e){
	//     if(e.progress.toFixed(3) > 0.01){
	//         $("#mainTextCon").fadeIn();
	//     }
	// })
	// .addTo(controller);
	function divOut() {
		setTimeout(function() {
			if($(".home-p:visible")) {
				$(".home-p").fadeOut();
			};
		}, 1000)
	}

	function divIn() {
		setTimeout(function() {
			if(!$(".home-p:visible")) {
				$(".home-p").fadeIn();
			};
		}, 1000)
	}
});
var controller = new ScrollMagic.Controller();

let counters = document.querySelectorAll('.counter');
    let maxEndNumber = 0;
    let currentNumbers = [];

    counters.forEach((counter) => {
        let endNumber = parseInt(counter.getAttribute('data-end-number'));
        currentNumbers.push(0);
        if (endNumber > maxEndNumber) {
            maxEndNumber = endNumber;
        }
    });

    let interval = setInterval(() => {
        let allCountersFinished = true;
        let incrementAmount = Math.ceil(maxEndNumber / 2000);

        counters.forEach((counter, index) => {
            let currentNumber = currentNumbers[index];
            let endNumber = parseInt(counter.getAttribute('data-end-number'));

            if (currentNumber < endNumber) {
                currentNumbers[index] += incrementAmount;
                if (currentNumbers[index] > endNumber) {
                    currentNumbers[index] = endNumber;
                }
                counter.innerHTML = currentNumbers[index];
                allCountersFinished = false;
            }
        });

        if (allCountersFinished) {
            clearInterval(interval);
        }
    });