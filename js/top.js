	$(function() {
	  var h = $(window).height();
	 
	  $('#wrap').css('visibility','hidden');
	  $('#loader-bg ,#loader').height(h).css('display','block');
	});

	jQuery.event.add(window,"load",function() { //全ての読み込みが完了したら実行
	  $('#loader-bg').delay(900).fadeOut(800);
	  $('#loader').delay(600).fadeOut(300);
	  $('#wrap').css('visibility', 'visible');
	});	

	$(window).load(function () {
			$('#massage01').delay(1500).animate({
					'opacity':'1',
					'top':'0'
			},{ duration: 600, easing: 'swing', });
			$('#arrow').delay(1500).animate({
					'opacity':'1',
					'bottom':'2%'
			},{ duration: 600, easing: 'swing', });
	});
$(function(){
	//offset().topはdisplayをnoneにすると、0しか取得しないので、visibilityにする
	var headTop = $('#pagetop').offset().top;


    //スクロールするたびに実行
    $(window).scroll(function () {

	var windowScrolltop = $(window).scrollTop();
	    if (headTop <= windowScrolltop) {
	    	$('#pagetop').addClass('fixed')
	    }else if (headTop > windowScrolltop){
			$('#pagetop').removeClass('fixed')
	    };

    });
});

// $(function(){
//     $(window).scroll(function () {


//  		var windowHeight = $(window).height();
//         var windowScrolltop = $(window).scrollTop();
//         var scrollBottom = windowHeight + windowScrolltop;
//         var offsetTop01 = $('#titleTxt01').offset().top;
//         var offsetTop02 = $('#titleTxt02').offset().top;
//         var offsetTop03 = $('#titleTxt03').offset().top;
//         var offsetTop04 = $('#titleTxt04').offset().top;
//         var offsetTop05 = $('#titleTxt05').offset().top;
//         console.log(windowScrolltop,windowHeight,scrollBottom,offsetTop01,offsetTop02);


//         if(scrollBottom-100 > offsetTop01){
//         	$('#titleTxt01').delay(200).animate({
//         		opacity:1
//         	},'slow');
//         }
//         if(scrollBottom-100 > offsetTop02){
//         	$('#titleTxt02').delay(200).animate({
//         		opacity:1
//         	},'slow');
//         }
//         if(scrollBottom-100 > offsetTop03){
//         	$('#titleTxt03').delay(200).animate({
//         		opacity:1,
//         		top:0
//         	},'slow');

// 	        if(scrollBottom-100 > offsetTop04){
// 	        	$('#titleTxt04').delay(300).animate({
//         			opacity:1,
//         			top:0
// 	        	},'slow');
	
// 		        if(scrollBottom-100 > offsetTop05){
// 		        	$('#titleTxt05').delay(400).animate({
//         				opacity:1,
//         				top:0
// 		        	},'slow');
// 		        }

// 	        }
//         }

//     });
// });

	// $(function() {
 //    	var offsetTop01 = $('#titleTxt').offset().top;
 //    	var ingFlag01 = false;
	//     var	scrollValue = $(window).scrollTop();
	// 	console.log(offsetTop01,scrollValue,ingFlag01);
 //        var floatMenu = function() {
 //        	if (scrollValue > offsetTop01+500 && ingFlag01==false) {
	// 			ingFlag01=true;
 //            	$('#titleTxt').animate({
	// 				opacity:1
 //            	},'slow');
 //        	}
 //    	}
 //        $(window).scroll(floatMenu);
 //    });


	// $(window).load(function () { //全ての読み込みが完了したら実行
	//   $('#loader-bg').delay(900).fadeOut(800);
	//   $('#loader').delay(600).fadeOut(300);
	//   $('#wrap').css('display', 'block');
	//   $('#massage').delay(900).animate({
	// 	'opacity':'0.5'
	// 	},'slow');;
	// });
	 
	//10秒たったら強制的にロード画面を非表示
	$(function(){
	  setTimeout('stopload()',10000);
	});
	 
	function stopload(){
	  $('#wrap').css('display','block');
	  $('#loader-bg').delay(900).fadeOut(800);
	  $('#loader').delay(600).fadeOut(300);
	}