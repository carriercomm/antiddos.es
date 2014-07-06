	jQuery(function($) {
  ArraySum={
    1:0,
    2:2,
    3:4,
    4:6,
    5:8,
    6:10,
    7:12,
    8:14,
    9:16,
    10:18,
    11:20,
    12:22
	};

	ArrayMonth={
    1:1,
    2:2,
    3:3,
    4:4,
    5:5,
    6:6,
    7:7,
    8:8,
    9:9,
    10:10,
    11:11,
    12:12
	};

	$( "#billing-slider" ).slider(
                    {
                        value:6,
                        min:1,
                        max:12,
                        step:1,
                        orientation:"horizontal",
                        range:"min",
                        animate:true,
                        slide:function (event, ui) {
				$("#mail_number_order").val(ArraySum[ui.value]);
				$(".sum #mail_number_order").text(ArraySum[ui.value]);
				$(".monthinner #month_number_order").text(ArrayMonth[ui.value]);
				$("#discount-vallue").val(ArraySum[ui.value]);
				$("#discount-vallue").val(ArraySum[ui.value]);
				$("#month-vallue").val(ArrayMonth[ui.value]);
				$("li.e-item-designation-of-mailboxes").removeClass('active');
				$("li.e-item-designation_"+ArrayMonth[ui.value]).addClass('active');
                        }
                    });

				$("#mail_number_order").val($("#b-amount-mail-order-slider").slider("value"));
				$("#mail_number_order").keyup(function () {
						var numberMails = $(this).val()
						
						$("#b-amount-mail-order-slider").slider("value", numberMails);
						console.log ($("#mail_number_order").val());
				});


				$("#mail_number_order").change(function () {

						var v = $("#mail_number_order").val();
						if (v >= 13) {
								alert('РњР°РєСЃРёРјСѓРј 12');
								$("#mail_number_order").val('12');
						}
				});

	});			