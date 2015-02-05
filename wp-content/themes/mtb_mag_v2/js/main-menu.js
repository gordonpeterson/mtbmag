var selected_parent = -1;


var mm = function( item ) {
	item_id = item.ID;
	title = item.title;
	url = item.url;
	type = item.object;
	url =item.url;
	post_status = item.post_status;
	url_obj = parse_url(url);
	url_base = basename(url_obj["path"]);
	articleCount = 0;
	menu_index = item.menu_order;
	url_target = item.TARGET;
	parent = item.menu_item_parent;
	menu_index = item.menu_order-1;

	previous_item = menuItems[ menu_index-1 ];
	next_item = menuItems[ menu_index+1 ];


	if ( !previous_item ) {
		debugger;
		console.log( '-----------the first-------------');
	} else if ( selected_parent != -1 && item.menu_item_parent != selected_parent ) {

		console.log('		>>>>end the container<<<<');
		selected_parent = -1;
	}

	console.log( menu_index + ". " + title );


	if ( !next_item ) {
		console.log( '-----------the last-------------');
		
	} else if( next_item.menu_item_parent == item_id ){
		selected_parent = item_id;
		console.log('		>>>>start the container<<<<');

	}



};

console.log( '<ul MAIN>');
menuItems.forEach( mm );
console.log( '</ul MAIN>');


function parse_url (url) {
	return {"path": url };
}

function basename (url) {
	return url;
}