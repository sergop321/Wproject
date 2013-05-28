String.prototype.toCapitalize = function() {
	return this.toLowerCase().replace(/^.|\s\S/g, function(a) {return a.toUpperCase();});
};

String.prototype.toLargeNumberReadableFormat = function() {
	return this.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
};

String.prototype.makeLink = function(link_name) {
	return link_name === undefined ?  "<a target='_blank' href='" + this + "'>" + this + "</a>": "<a target='_blank' href='" + this + "'>" + link_name + "</a>";
};

String.prototype.stripHtmlTags = function() {
	return this.replace(/<\/?[^>]+(>|$)/g, "");
};

String.prototype.removeWhiteSpaceFromBeginAndEnd = function() {
	return this.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
};

String.prototype.fromSpacesToUnderscores = function() {
	return this.replace(/ /g,"_");
};

String.prototype.friendlyUri = function() {
	return this.replace(/[^a-zA-Z0-9-_]/g, '');
};


String.prototype.cutAt = function(n) {
	if(this.length > n){
        for (; " .,".indexOf(this[n]) !== 0; n--){
        }
        return this.substr(0, n) + '...';
    }
    return this;
};

