var music = document.getElementById( 'music' );
var sound = document.getElementById( 'sound' );
var soundtrack = document.getElementById( 'soundtrack' );
var musicIsOn = false;
music.addEventListener( 'click', soundtrackTurn );
// soundtrack.play()
soundtrack.volume = 1
// sound.addEventListener( 'click' );
function soundtrackTurn () {
	this.classList.toggle( 'is-on' );
	if ( musicIsOn == false ) {
		soundtrack.play();
		musicIsOn = true;
	} else {
		soundtrack.pause();
		musicIsOn = false;
	}
}

var cipher = document.getElementById( 'cipher' );
cipher.addEventListener( 'click', () => {
	cipher.classList.add( 'animation' );
	animation = setTimeout( () => {
		cipher.classList.remove( 'animation' );
	}, 6000 );
} );

var homeIsMain = true;
var backHome1 = document.getElementById( 'backHome1' ).addEventListener( 'click', appearScreens );
var backHome2 = document.getElementById( 'backHome2' ).addEventListener( 'click', appearScreens );
var backHome3 = document.getElementById( 'backHome3' ).addEventListener( 'click', appearScreens );
var backHome4 = document.getElementById( 'backHome4' ).addEventListener( 'click', appearScreens );
var home = document.getElementById( 'home' );
var buttonSettings = document.getElementById( 'buttonSettings' ).addEventListener( 'click', appearScreens );
var buttonCredits = document.getElementById( 'buttonCredits' ).addEventListener( 'click', appearScreens );
var buttonFeedBack = document.getElementById( 'buttonFeedBack' ).addEventListener( 'click', appearScreens );
var buttonExtra = document.getElementById( 'buttonExtra' ).addEventListener( 'dblclick', appearScreens );
function turnButtonInSection ( id ) {
	id = id.replace( 'button', '' );
	fistLetterOriginal = id.charAt( 0 );
	fistLetterAuterated = id.charAt( 0 ).toLowerCase();
	id = id.replace( fistLetterOriginal, fistLetterAuterated );
	return id;
}
function appearScreens () {
	if ( homeIsMain ) {
		homeIsMain = false;
		id = turnButtonInSection( this.getAttribute( 'id' ) );
		screen = document.getElementById( id );
		screen.style.animation = 'goCenter 1s ease-out forwards';
		home.style.animation = 'goBottom 1s ease-out forwards';
		console.log( screen );

	} else {
		homeIsMain = true;
		console.log( screen.getAttribute( 'id' ) );
		if ( screen == settings ) {
			screen.style.animation = 'goTop 1s ease-out';
		} if ( screen == credits ) {
			screen.style.animation = 'goLeft 1s ease-out';
		} if ( screen == feedBack ) {
			screen.style.animation = 'goRigth 1s ease-out';
		} if ( screen == extra ) {
			screen.style.animation = 'goBottom 1s ease-out';
		}
		setTimeout( () => {
			home.style.animation = 'opacityChange 0.5s ease-in-out'
			// alert('nao vai funcionar')
		}, 300
		)
}
}

var start = document.getElementById( 'start' ).addEventListener( 'click', () => {
	console.log('ariel')
	goGame()
} );
function goGame() {
	window.location.href = 'components/scripts/php/client/public/login.php';

}
