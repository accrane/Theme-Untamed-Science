/**
 *	Untamed Science
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
				
			// Highlight some nav things. Add an "active" class
				
			$("[href]").each(function() {
    			if (this.href == window.location.href) {
        	$(this).addClass("active");
        	}
    		});
			
			
			/*$("[href]").each(function() {
    			if (this.href == "http://www.o-liveandco.com/es") {
        	$(this).addClass("active");
        	}
    		});*/

//Isotope with images loaded ...
  var $container = $('#container').imagesLoaded( function() {
    $container.isotope({
    // options
   itemSelector: '.item',
      masonry: {
      gutter: 30
      }
     });
  });



// #####################################     GEt rid of classification if on a higher one.	

		$(function() {
    if ( document.location.href.indexOf('kingdom') > -1 ) {
        $('#phylum').remove();
		$('#class').remove();
		$('#order').remove();
		$('#family').remove();
		$('#genus').remove();
		$('#species').remove();
    }
});

		$(function() {
    if ( document.location.href.indexOf('phylum') > -1 ) {
        $('#class').remove();
		$('#order').remove();
		$('#family').remove();
		$('#genus').remove();
		$('#species').remove();
    }
});		
			
			$(function() {
    if ( document.location.href.indexOf('class') > -1 ) {
        $('#order').remove();
		$('#family').remove();
		$('#genus').remove();
		$('#species').remove();
    }
});

		$(function() {
    if ( document.location.href.indexOf('order') > -1 ) {
		$('#family').remove();
		$('#genus').remove();
		$('#species').remove();
    }
});


	$(function() {
    if ( document.location.href.indexOf('family') > -1 ) {
		$('#genus').remove();
		$('#species').remove();
    }
});


$(function() {
    if ( document.location.href.indexOf('genus') > -1 ) {
		$('#species').remove();
    }
}); // END  #####################################     GEt rid of classification if on a higher one.	
			
		
		// #####################################     Make nav highlight if on url.	
			
			// If is Biodiversity
			if(window.location.href.indexOf("biodiversity") > -1) {
       $('#main-nav .tree-of-life a').addClass("active");
	        }
			
			if(window.location.href.indexOf("kingdom") > -1) {
       $('#main-nav .tree-of-life a').addClass("active");
	        }
			
			if(window.location.href.indexOf("phylum") > -1) {
       $('#main-nav .tree-of-life a').addClass("active");
	        }
			
			if(window.location.href.indexOf("class") > -1) {
       $('#main-nav .tree-of-life a').addClass("active");
	        }
			
			if(window.location.href.indexOf("order") > -1) {
       $('#main-nav .tree-of-life a').addClass("active");
	   		}	
	   
	   if(window.location.href.indexOf("family") > -1) {
       $('#main-nav .tree-of-life a').addClass("active");
	        }
			
			if(window.location.href.indexOf("genus") > -1) {
       $('#main-nav .tree-of-life a').addClass("active");
	        }
			
			if(window.location.href.indexOf("species") > -1) {
       $('#main-nav .tree-of-life a').addClass("active");
	        }
	       
			// if url classification
			if(window.location.href.indexOf("classification") > -1) {
       // highlight the Biodiversity nav
	   $('#main-nav .tree-of-life a').addClass("active");
	   //remove contents in all these divs "all-classifications 
	   $('#kingdom, #phylum, #class, #order, #family, #genus, #species').remove();
	        }
			
			if(window.location.href.indexOf("biology") > -1) {
       $('#main-nav .biology a').addClass("active");
	        }
			
			if(window.location.href.indexOf("blog") > -1) {
       $('#main-nav .our-blog a').addClass("active");
	        }
			
			if(window.location.href.indexOf("filmmaking") > -1) {
       $('#main-nav .how-to-filmmaking a').addClass("active");
	        }

	//  END  #####################################     Make nav highlight if on url.	
			
			
	// Big Banner Scroller div Title Popup
	
	
	// $('.homepage-thumb').mouseenter(function(){
 //    $(this).find('.homepage-thumb-title-slider').animate({bottom:'0px'},"fast");
	// });
	
	// $('.homepage-thumb').mouseleave(function(){
 //    $(this).find('.homepage-thumb-title-slider').animate({bottom:'-80px'},"fast");
	// });
	



	
			
	// These are all the Sub Nav Hovers we need.
	
	
			$('li.fungi').mouseenter(function() {
			$(this).append( "<div class='nav-message mess-fungi'>Fungi</div>" );
			});
			$('li.fungi').mouseleave(function() {
			$('.nav-message').remove();
			});
			
			
			$('li.microbes').mouseenter(function() {
			$(this).append( "<div class='nav-message mess-microbes'>Microbes</div>" );
			});
			$('li.microbes').mouseleave(function() {
			$('.nav-message').remove();
			});
			
			$('li.plants').mouseenter(function() {
			$(this).append( "<div class='nav-message mess-plants'>Plants</div>" );
			});
			$('li.plants').mouseleave(function() {
			$('.nav-message').remove();
			});
			
			$('li.plantbio').mouseenter(function() {
			$(this).append( "<div class='nav-message mess-plantbio'>Plants</div>" );
			});
			$('li.plantbio').mouseleave(function() {
			$('.nav-message').remove();
			});
			
			$('li.invertebrates').mouseenter(function() {
			$(this).append( "<div class='nav-message mess-invertebrates'>Invertebrates</div>" );
			});
			$('li.invertebrates').mouseleave(function() {
			$('.nav-message').remove();
			});
			
			$('li.fish').mouseenter(function() {
			$(this).append( "<div class='nav-message mess-fish'>Fish</div>" );
			});
			$('li.fish').mouseleave(function() {
			$('.nav-message').remove();
			});
			
			$('li.reptiles').mouseenter(function() {
			$(this).append( "<div class='nav-message mess-reptiles'>Reptiles</div>" );
			});
			$('li.reptiles').mouseleave(function() {
			$('.nav-message').remove();
			});
			
			$('li.mammals').mouseenter(function() {
			$(this).append( "<div class='nav-message mess-mammals'>Mammals</div>" );
			});
			$('li.mammals').mouseleave(function() {
			$('.nav-message').remove();
			});
			
			$('li.birds').mouseenter(function() {
			$(this).append( "<div class='nav-message mess-birds'>Birds</div>" );
			});
			$('li.birds').mouseleave(function() {
			$('.nav-message').remove();
			});
			
			
			$('li.amphibians').mouseenter(function() {
			$(this).append( "<div class='nav-message mess-amphibians'>Amphibians</div>" );
			});
			$('li.amphibians').mouseleave(function() {
			$('.nav-message').remove();
			});
			
			$('li.arthropods').mouseenter(function() {
			$(this).append( "<div class='nav-message mess-arthropods'>Arthropods</div>" );
			});
			$('li.arthropods').mouseleave(function() {
			$('.nav-message').remove();
			});
			
			$('li.human').mouseenter(function() {
			$(this).append( "<div class='nav-message mess-humans'>Humans</div>" );
			});
			$('li.human').mouseleave(function() {
			$('.nav-message').remove();
			});
			
			$('li.evolution').mouseenter(function() {
			$(this).append( "<div class='nav-message mess-evolution'>Evolution</div>" );
			});
			$('li.evolution').mouseleave(function() {
			$('.nav-message').remove();
			});
			
			$('li.ecology').mouseenter(function() {
			$(this).append( "<div class='nav-message mess-ecology'>Ecology</div>" );
			});
			$('li.ecology').mouseleave(function() {
			$('.nav-message').remove();
			});
			
			$('li.cells').mouseenter(function() {
			$(this).append( "<div class='nav-message mess-cells'>Cells</div>" );
			});
			$('li.cells').mouseleave(function() {
			$('.nav-message').remove();
			});
			
			$('li.biomes').mouseenter(function() {
			$(this).append( "<div class='nav-message mess-biomes'>Biomes</div>" );
			});
			$('li.biomes').mouseleave(function() {
			$('.nav-message').remove();
			});
			
			$('li.genetics').mouseenter(function() {
			$(this).append( "<div class='nav-message mess-genetics'>Genetics</div>" );
			});
			$('li.genetics').mouseleave(function() {
			$('.nav-message').remove();
			});
			
			
			// Let's do some blog rollovers...
			
			$('.blog-square').mouseenter(function() {
			/*$('.blog-featured-image').animate({opacity: .5});*/
				$(this).animate({marginTop: -5}, "fast");
			});
			$('.blog-square').mouseleave(function() {
				$(this).animate({marginTop: 0}, "fast");
			});
			
			
			// Let's change some breadcrumb url's...
			
			$("a[href='http://www.untamedscience.com/blog/']").attr('href', 'http://www.untamedscience.com/our-blog');
			$("a[href='http://www.untamedscience.com/filmmaking/']").attr('href', 'http://www.untamedscience.com/how-to-filmmaking/');
			$("a[href='http://www.untamedscience.com/biology/']").attr('href', 'http://www.untamedscience.com/world-biology/');
			$("a[href='http://www.untamedscience.com/biodiversity/']").attr('href', 'http://www.untamedscience.com/tree-of-life/');
			
			
			
			
		
		
				
		


		
});// END #####################################    END