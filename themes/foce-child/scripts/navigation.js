/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	const siteNavigation = document.getElementById( 'navigationSite' );
	// Return early if the navigation doesn't exist.
	if ( ! siteNavigation ) {
		return;
	}
	const menuBurger = document.querySelector( '.toggleMenu .menuBurger' );
	const toggleMenu = document.querySelector( '.toggleMenu' );
	const menuPage = document.querySelector( '.menuPage' );
	const menuText=document.querySelector( '.menuPage ul' );
	const lines = document.querySelectorAll('.menuBurger .line');
    //event listner sur le menu burger 
	menuBurger.addEventListener( 'click', function() {
		menuPage.classList.toggle( 'menuOuvert' );
		// Transforme les lignes du hamburger en croix
		lines[0].classList.toggle('rotate-down');  // première ligne
		lines[1].classList.toggle('hide');         // ligne du milieu
		lines[2].classList.toggle('rotate-up');    // troisième ligne

		if ( toggleMenu.getAttribute( 'aria-expanded' ) === 'true' ) {
			toggleMenu.setAttribute( 'aria-expanded', 'false' );
		} else {
			toggleMenu.setAttribute( 'aria-expanded', 'true' );
		}
	} );

	// supprime la classe menuOuvert et change aria-expanded to false when the user clicks outside the navigation.
	document.addEventListener( 'click', function( event ) {
		const isClickInside = siteNavigation.contains( event.target );

		if ( ! isClickInside ) {
			menuPage.classList.remove( 'menuOuvert' );
			toggleMenu.setAttribute( 'aria-expanded', 'false' );
		}
	} );

	// Get all the link elements within the menu.
	const menuLinks = document.querySelectorAll( '#menuText a' );
// event listner liens
//transforme le menu burguer au click sur les liens du menu
menuLinks.forEach(link => {
		link.addEventListener('click', function(event) {
			menuPage.classList.remove( 'menuOuvert' );
			lines[0].classList.toggle('rotate-down');  // première ligne
			lines[1].classList.toggle('hide');         // ligne du milieu
			lines[2].classList.toggle('rotate-up');    // troisième ligne
		if ( toggleMenu.getAttribute( 'aria-expanded' ) === 'true' ) {
			toggleMenu.setAttribute( 'aria-expanded', 'false' );
		} else {
			toggleMenu.setAttribute( 'aria-expanded', 'true' );
		}

		});
	});


	// Get all the link elements with children within the menu.
	const linksWithChildren = menuText.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

	// Toggle focus each time a menu link is focused or blurred.
	for ( const link of menuLinks ) {
		link.addEventListener( 'focus', toggleFocus, true );
		link.addEventListener( 'blur', toggleFocus, true );
	}

	// Toggle focus each time a menu link with children receive a touch event.
	for ( const link of linksWithChildren ) {
		link.addEventListener( 'touchstart', toggleFocus, false );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		if ( event.type === 'focus' || event.type === 'blur' ) {
			let self = this;
			// Move up through the ancestors of the current link until we hit .nav-menu.
			while ( ! self.classList.contains( 'navigationMain' ) ) {
				// On li elements toggle the class .focus.
				if ( 'li' === self.tagName.toLowerCase() ) {
					self.classList.toggle( 'focus' );
				}
				self = self.parentNode;
			}
		}

		if ( event.type === 'touchstart' ) {
			const menuItem = this.parentNode;
			event.preventDefault();
			for ( const link of menuItem.parentNode.children ) {
				if ( menuItem !== link ) {
					link.classList.remove( 'focus' );
				}
			}
			menuItem.classList.toggle( 'focus' );
		}
	}
}() );
