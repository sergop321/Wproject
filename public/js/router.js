// Generated by CoffeeScript 1.6.3
var extractFragmentData, get_parm_from_query, pairs;

pairs = {};

extractFragmentData = function(queryString) {
  var key, pair, value, variables;
  variables = queryString.split('&');
  return this.pairs = (function() {
    var _i, _len, _ref, _results;
    _results = [];
    for (_i = 0, _len = variables.length; _i < _len; _i++) {
      pair = variables[_i];
      _results.push((_ref = pair.split('='), key = _ref[0], value = _ref[1], _ref));
    }
    return _results;
  })();
};

get_parm_from_query = function(name) {
  var key, value, _i, _len, _ref, _ref1;
  _ref = this.pairs;
  for (_i = 0, _len = _ref.length; _i < _len; _i++) {
    _ref1 = _ref[_i], key = _ref1[0], value = _ref1[1];
    if (key === name) {
      return value;
    }
  }
};

window.router = function() {
  var _ref;
  if (window.document.location.search !== "" && window.document.location.search !== void 0 && window.document.location.search !== null) {
    return extractFragmentData((_ref = window.document.location.search) != null ? _ref.substr(1) : void 0);
  }
};
