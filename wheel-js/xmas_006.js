$(window).scroll(function(){
	if($(this).scrollTop() == 0){
		$('.ega-header').removeClass('fixed');
	} else {
		$('.ega-header').addClass('fixed');
	}
})

$('.ega-section-featured__slider').owlCarousel({
	items:4,
	loop:true,
	nav: true,
	navText: [`<svg class="ega-ic-angle-left">
  <use xlink:href="#ega-ic-angle-left"></use>
</svg>`,`<svg class="ega-ic-angle-right">
  <use xlink:href="#ega-ic-angle-right"></use>
</svg>`],
	dots:false,
	responsive:{
		0:{
			items: 2
		},
		768:{
			items: 3
		},
		992:{
			items: 4
		}
	}
});

$('#partners-slider').owlCarousel({
	items:5,
	lazyLoad:true,
	loop:true,
	nav: true,
	navText: [`<svg class="ega-ic-angle-left">
  <use xlink:href="#ega-ic-angle-left"></use>
</svg>`,`<svg class="ega-ic-angle-right">
  <use xlink:href="#ega-ic-angle-right"></use>
</svg>`],
	dots:false,
	responsive:{
		0:{
			items: 2
		},
		768:{
			items: 5
		}
	}
});

// scroll to block
const scrollTo = document.getElementsByClassName('scroll-to');
const fixedHeader = document.querySelector('header.fixed_header');

if (scrollTo) {
	for (let i = 0; i < scrollTo.length; i += 1) {
		scrollTo[i].addEventListener('click', function(e) {
			e.preventDefault();
			let href = scrollTo[i].getAttribute('href');
			if (href.indexOf('#') === 0) {
				let padding = 25;
		
				if (document.querySelector(href)) {
					let location = document.querySelector(href).offsetTop - padding;

					window.scrollTo({
						top: location,
						behavior: 'smooth'
					});
				}
				return false;
			}
		})
	}
}




//EGA Modal
	if ((typeof EGA) === 'undefined') {
		EGA = {};
	}

	EGA.moneyFormat = '';

	EGA.modal = {
			body: document.getElementsByTagName('body')[0],
			bodyShowClass: 'ega-modal-showed',
			modalClass: 'ega-modal-cart',
			modalShowClass: 'show',
			openBtnClass: 'ega-modal-cart__open',
			closeBtnClass: 'ega-modal-cart__close',

			/**
			 * Open modal by id
			 * @param {String} id
			 */
			openModalById: (id) => {
				const modal = document.getElementById(id);
				if (modal) {
					modal.classList.add(EGA.modal.modalShowClass);
					EGA.modal.body.classList.add(EGA.modal.bodyShowClass);
				}
			},

			/**
			 * Close modal by click on close button
			 */
			close: () => {
				const modals = document.querySelectorAll('.' + EGA.modal.modalClass);
				const closeBtns = document.querySelectorAll('.' + EGA.modal.closeBtnClass);

				const closeModal = (modal) => {
					modal.classList.remove(EGA.modal.modalShowClass);
					EGA.modal.body.classList.remove(EGA.modal.bodyShowClass);
				}

				modals.forEach(modal => {
					modal.addEventListener('click', function(e) {
						//e.preventDefault();
						if (e.target.classList.contains(EGA.modal.modalClass)) {
							closeModal(modal);
						}
					})
				})

				if (closeBtns) {
					closeBtns.forEach(btn => {
						btn.addEventListener('click', function(e) {
							e.preventDefault();
							const closeBtn = e.target;
							const modal = closeBtn.closest('.' + EGA.modal.modalClass);
							closeModal(modal);
						})
					})
				}
			}
	}	

	window.onload = function() {
		EGA.modal.close();
	}

	$('[data-ega-role="btn_action"]').click(function(e) {
		var action = 0;
		
			action = 2;
		

    var checkout = function() { window.location = '/checkout'; },
        addtocart = function() {
            Haravan.getCart(function(cart) {
                var total_price = Haravan.formatMoney(cart.total_price, EGA.moneyFormat);
                $('.ega-top-cart__qty').text(cart.item_count);
                $('.ega-top-cart__checkout-price').text(total_price);
            });

            EGA.modal.openModalById('cart-popup-desktop');
        }

    if (action != 0) {
        e.preventDefault();
        var variant_id = $(this).siblings('input[name="id"]').val(),
            callback = (action == 1) ? checkout : addtocart;
        Haravan.addItem(variant_id, 1, callback);
    }
})




