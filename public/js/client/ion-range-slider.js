//== Class definition

var IONRangeSlider = function () {
    
    //== Private functions
    var demos = function () {
        // basic demo
        $('#m_slider_1').ionRangeSlider();

        // min & max values
        $('#m_slider_2').ionRangeSlider({
            min: 100,
            max: 1000,
            from: 550
        });

        // Budget
        $('#m_slider_3').ionRangeSlider({
            type: "double",
            min: 0,
            max: 500,
            from: 0,
            to: 200,
            prefix: "€",
            step: 5,
			prettify_enabled: true,
			postfix: "k",
			max_postfix: "+",
			min_postfix: "-"
        });
		
		 // Location
        $('#distance').ionRangeSlider({
            type: "double",
            min: 0,
            max: 200,
            from: 60,
            to: 100,
            step: 20,
            postfix: "km",
			prettify_enabled: true,
			max_postfix: "+"
        });

        // range & step
        $('#m_slider_4').ionRangeSlider({
            type: "double",
            grid: true,
            min: -1000,
            max: 1000,
            from: -500,
            to: 500
        });

        // fractional step
        $('#m_slider_5').ionRangeSlider({
            type: "double",
            grid: true,
            min: -12.8,
            max: 12.8,
            from: -3.2,
            to: 3.2,
            step: 0.1
        });

        // using postfixes
        $('#m_slider_6').ionRangeSlider({
            type: "single",
            grid: true,
            min: -90,
            max: 90,
            from: 0,
            postfix: "°"
        });

        // using text
        $('#m_slider_7').ionRangeSlider({
            type: "double",
            min: 100,
            max: 200,
            from: 145,
            to: 155,
            prefix: "Weight: ",
            postfix: " million pounds",
            decorate_both: true
        });
		
		$('#growth').ionRangeSlider({
            min: 1,
            max: 5,
            from: 3,
            step: 1,
			hide_min_max: true,
			hide_from_to: true
        });
		
		$('#market').ionRangeSlider({
            min: 1,
            max: 5,
            from: 3,
            step: 1,
			hide_min_max: true,
			hide_from_to: true
        });
		
		$('#investment').ionRangeSlider({
            min: 1,
            max: 5,
            from: 3,
            step: 1,
			hide_min_max: true,
			hide_from_to: true
        });
		
		$('#competition').ionRangeSlider({
            min: 1,
            max: 5,
            from: 3,
            step: 1,
			hide_min_max: true,
			hide_from_to: true
        });

    }

    return {
        // public functions
        init: function() {
            demos(); 
        }
    };
}();

jQuery(document).ready(function() {    
    IONRangeSlider.init();
});