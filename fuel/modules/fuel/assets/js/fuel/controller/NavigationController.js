fuel.controller.NavigationController = jqx.createController(fuel.controller.BaseFuelController, {
	
	init: function(initObj){
		this._super(initObj);
	},

	items : function(){
		// call parent
		fuel.controller.BaseFuelController.prototype.items.call(this);
		//fuel.controller.BaseFuelController.prototype.items();
		var _this = this;
		$('#group_id').change(function(e){
			$('#form_table').submit();
		});
	},
	
	add_edit : function(){
		// call parent
		fuel.controller.BaseFuelController.prototype.add_edit.call(this);


		$('#group_id').change(function(e){
			var path = jqx.config.fuelPath + '/navigation/parents/' + $('#group_id').val() + '/' + $('#parent_id').val();
			$('#parent_id').parent().load(path, {}, function(){
				$.changeChecksaveValue('parent_id', $('#parent_id').val());
			});
		});

		
		$('#group_id').change();
		
		
	},
	
	upload : function(){
		this._notifications();
		this._initAddEditInline($('#form'));
	}
	
	
});