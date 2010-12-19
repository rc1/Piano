(function($){
    $(document).keydown(function(e) {
     	// Save
        if(e.keyCode == 83 && e.metaKey || e.keyCode == 83 && e.ctrlKey) { 
            jQuery('input:[name="action[save]"]').click();
            return false;	   
      	}
      	
      	// New
      	if(e.keyCode == 78 && e.metaKey || e.keyCode == 78 && e.ctrlKey) { 
            var $newPageLink = jQuery('p#notice a:[href$="new/"]');
            
            if ($newPageLink.length > 0) { 
            	window.location.href = $newPageLink.attr('href');
            	return false;
            }
            
            $newPageLink = jQuery('h2 a:[href$="new/"]');
            if ($newPageLink.length > 0) { 
            	window.location.href = $newPageLink.attr('href');
            	return false;	
            } 
      	}
    });
})(jQuery);