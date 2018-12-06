function $_GET(item) {
	var vars = {};
	window.location.href.replace( location.hash, '' ).replace( 
		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
		function( m, key, value ) { // callback
			vars[key] = value !== undefined ? value : '';
		}
	);

	if ( item ) {
		return vars[item] ? vars[item] : null;	
	}
	return vars;
}
var extractedItem = decodeURI( $_GET("item"));
var { item, price } = JSON.parse( extractedItem );


