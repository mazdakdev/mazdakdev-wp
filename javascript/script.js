/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

document.addEventListener( 'DOMContentLoaded', function() {
	const burgerBtn = document.getElementById( 'burgerBtn' );

	if ( burgerBtn ) {
		burgerBtn.addEventListener( 'click', function() {
			const status = document.getElementById( 'mobile' );
			const navStatus = document.getElementById( 'nav' );
			const body = document.getElementById( 'body' );

			if ( ! status.classList.contains( 'navigation' ) && navStatus.classList.contains( 'hidden' ) ) {
				status.classList.add( 'navigation' );
				navStatus.classList.remove( 'hidden' );
				body.classList.add( 'overflow-hidden' );
			} else {
				status.classList.remove( 'navigation' );
				navStatus.classList.add( 'hidden' );
				body.classList.remove( 'overflow-hidden' );
			}
		} );
	}
} );
