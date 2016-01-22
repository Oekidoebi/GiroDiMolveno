/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$('.SeeMore2').click(function(){
		var $this = $(this);
		$this.toggleClass('SeeMore2');
		if($this.hasClass('SeeMore2')){
			$this.text('Meer');			
		} else {
			$this.text('Minder');
		}
	});

$('.SeeMore3').click(function(){
		var $this = $(this);
		$this.toggleClass('SeeMore3');
		if($this.hasClass('SeeMore3')){
			$this.text('Voorwaarden');			
		} else {
			$this.text('Sluit voorwaarden');
		}
	});
