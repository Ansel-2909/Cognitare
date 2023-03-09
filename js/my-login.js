'use strict';

$(function() {

	$("input[type='password']").each(function(i) {
		var $this = $(this),
			id = 'eye-password-' + i;

		$this.wrap($("<div/>", {
			style: 'position:relative',
			id: id
		}));

		$this.css({
			paddingRight: 140
		});
		$this.after($("<div/>", {
			html: 'Show',
			class: 'btn btn-primary btn-sm',
			id: 'passeye-toggle-'+i,
		}).css({
				position: 'absolute',
				right: 10,
				top: ($this.outerHeight() / 2) - 12,
				padding: '2px 7px',
				fontSize: 12,
				cursor: 'pointer',
		}));

		$this.after($("<input/>", {
			type: 'hidden',
			id: 'passeye-' + i
		}));

		var invalid_feedback = $this.parent().parent().find('.invalid-feedback');

		if(invalid_feedback.length) {
			$this.after(invalid_feedback.clone());
		}

		$this.attr('type', 'password');  // password is hidden by default

		$this.on("keyup paste", function() {
			$("#passeye-"+i).val($(this).val());
		});
		$("#passeye-toggle-"+i).on("click", function() {
			if($this.hasClass("hide")) {
				$this.attr('type', 'password');
				$this.removeClass("hide");
				$(this).removeClass("btn-outline-primary");
			} else {
				$this.attr('type', 'text');
				$this.val($("#passeye-"+i).val());				
				$this.addClass("hide");
				$(this).addClass("btn-outline-primary");
			}
		});
	});
});


	
	$(function() {


		$("input[type='cpassword']").each(function(i) {
			var $this = $(this),
				id = 'eye-cpassword-' + i;
	
			$this.wrap($("<div/>", {
				style: 'position:relative',
				id: id
			}));
	
			$this.css({
				paddingRight: 60
			});
			$this.after($("<div/>", {
				html: 'Hide',
				class: 'btn btn-primary btn-sm',
				id: 'cpasseye-toggle-'+i,
			}).css({
					position: 'absolute',
					right: 10,
					top: ($this.outerHeight() / 2) - 12,
					padding: '2px 7px',
					fontSize: 12,
					cursor: 'pointer',
			}));
	
			$this.after($("<input/>", {
				type: 'hidden',
				id: 'cpasseye-' + i
			}));
	
			var invalid_feedback = $this.parent().parent().find('.invalid-feedback');
	
			if(invalid_feedback.length) {
				$this.after(invalid_feedback.clone());
			}
	
			$this.on("keyup paste", function() {
				$("#cpasseye-"+i).val($(this).val());
			});
			
			$this.attr('type', 'password');
			
			$("#cpasseye-toggle-"+i).on("click", function() {
				if($this.hasClass("hide")) {
					$this.attr('type', 'password');
					$this.removeClass("hide");
					$(this).removeClass("btn-outline-primary");
					$(this).html('Show');
				}else{
					$this.attr('type', 'text');
					$this.val($("#cpasseye-"+i).val());				
					$this.addClass("hide");
					$(this).addClass("btn-outline-primary");
					$(this).html('Hide');
				}
			});
		});
});

	
		$(".my-login-validation").submit(function() {
		var form = $(this);
        if (form[0].checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
		form.addClass('was-validated');
	});