function CostOfCareManager(){
	var self = this;
	self._map_manager_ = {};

	this.init = function() {
		self._map_manager_ = new MapOfCostsManager();
		self._map_manager_.init();
	};
}

var _CCM_ = new CostOfCareManager();
$(document).ready(_CCM_.init);