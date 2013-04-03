function dubTest(){
   
      var count = $('.invoiceline').length;
      var item = $('.invoiceline:first').clone();
      // Beskrivelse kan ikke vælges med 'input' så 'textarea' bliver brugt her. -->
      item.find('textarea').eq(0).attr('name', 'Fakturadata[' + count +  '][Varenavn]');
      item.find('textarea').eq(0).attr('value','');
      item.find('input').eq(0).attr('name', 'Fakturadata[' + count +  '][Varenummer]');
      item.find('input').eq(0).attr('value','0');
      item.find('input').eq(1).attr('name', 'Fakturadata[' + count +  '][antal]');
      item.find('input').eq(1).attr('value','0');
      item.find('input').eq(1).attr('Onblur','calc('+count+')');
      item.find('input').eq(2).attr('name', 'Fakturadata[' + count +  '][Pris]');
      item.find('input').eq(2).attr('value','');
      item.find('input').eq(2).attr('Onblur','calc('+count+')');
      item.find('input').eq(3).attr('name', 'Fakturadata[' + count +  '][Kontering]');
      item.find('input').eq(3).attr('value','');
      item.find('input').eq(4).attr('name', 'Fakturadata[' + count +  '][dimaccont]');
      item.find('input').eq(4).attr('value','0');
      item.find('select').eq(0).attr('name', 'Fakturadata[' + count +  '][ehf_vat]');
      item.find('select').eq(0).attr('value','');
      item.find('input').eq(5).attr('name', 'Fakturadata[' + count +  '][Varebeloeb]');
      item.find('input').eq(5).attr('value','');
      item.find('input').eq(5).attr('Onblur','calc('+count+')');
      item.find('input').eq(6).attr('name', 'Fakturadata[' + count + '][Skaffevare]');
      item.find('input').eq(7).attr('value','');
      item.find('input').eq(7).attr('name', 'Fakturadata[' + count +  '][Ordrefradrag]');
      item.find('input').eq(7).attr('value','');
      item.find('input').eq(8).attr('name', 'Fakturadata[' + count + '][Momsfri]');
      item.find('input').eq(8).attr('value','');
      item.find('input').eq(8).attr('id','linie_total_'+count);
      item.find('.remove').attr('id',count);
      item.find('.remove').attr('onClick','deleterow('+count+')');
      
      linie_total_0
      item.appendTo('.invoicelines');
      $('.invoiceline:last').attr('id','row'+count);
}

function deleterow(id){ 
        var count = $('.invoiceline').length;
        if(count > 1 ){
         var t = '#row'+id
         $(t).remove(); 
        }
        else{alert("Der skal mindst være en vare linie.");}
}

function calc(id){
    
        var vat = Number($('#vat_'+id).val());
        var antal = Number($('#antal_'+id).val());
        var varebeloeb = Number($('#varebeloeb_'+id).val());
        var subtotal = (varebeloeb +(vat/100* varebeloeb)) * antal;
        
        $('#linie_total_'+id).val(subtotal);
          alert('antal ' + antal +'\n\nbeløb '+varebeloeb+'\n\nvat '+ vat );
}   
//          <div style="width: 55px; height: 45px; margin:3px;float:left;">
//             <?php echo CHtml::label('Pris','',array('id'=>'pris_label', 'style'=> 'width:45px;')); ?>
//             <?php echo CHtml::textField('Fakturadata[0][Pris]','',array('id'=>'antal', 'style'=> 'width:45px;','maxlength'=>16)); ?>
//            </div>