

function dubTest(){
   
      var count = $('.invoiceline').length;
      var item = $('.invoiceline:first').clone();
      // Beskrivelse kan ikke vælges med 'input' så 'textarea' bliver brugt her. -->
      item.find('textarea').eq(0).attr('name', 'Fakturadata[' + count +  '][Varenavn]');
      item.find('textarea').eq(0).attr('value','');
      item.find('input').eq(0).attr('name', 'Fakturadata[' + count +  '][Varenummer]');
      item.find('input').eq(1).attr('name', 'Fakturadata[' + count +  '][antal]');
      item.find('input').eq(1).attr('value','0');
      item.find('input').eq(1).attr('id','antal_'+count);
      item.find('input').eq(1).attr('Onblur','calc('+count+')');
      item.find('input').eq(2).attr('name', 'Fakturadata[' + count +  '][Pris]');
      item.find('input').eq(2).attr('value','');
      item.find('input').eq(3).attr('name', 'Fakturadata[' + count +  '][Kontering]');
      item.find('input').eq(3).attr('value','');
      item.find('input').eq(4).attr('name', 'Fakturadata[' + count +  '][dimaccont]');
      item.find('input').eq(4).attr('value','0');
      item.find('select').eq(0).attr('name', 'Fakturadata[' + count +  '][ehf_vat]');
      item.find('select').eq(0).attr('value','');
      item.find('select').eq(0).attr('id','vat_'+count);
      item.find('input').eq(5).attr('name', 'Fakturadata[' + count +  '][Varebeloeb]');
      item.find('input').eq(5).attr('value','');
      item.find('input').eq(5).attr('id','varebeloeb_'+count);
      item.find('input').eq(5).attr('Onblur','calc('+count+')');
      item.find('input').eq(6).attr('name', 'Fakturadata[' + count + '][Skaffevare]');
      item.find('input').eq(7).attr('value','');
      item.find('input').eq(7).attr('name', 'Fakturadata[' + count +  '][Ordrefradrag]');
      item.find('input').eq(7).attr('value','');
      item.find('input').eq(8).attr('name', 'Fakturadata[' + count + '][Momsfri]');
      item.find('input').eq(8).attr('value','');
      item.find('input').eq(5).attr('id','linie_total_'+count);
      item.find('.remove').attr('id',count);
      item.find('.remove').attr('onClick','deleterow('+count+')');    
      item.appendTo('.invoicelines');
      $('.invoiceline:last').attr('id','row'+count);
}

function deleterow(id){ 
        var count = $('.invoiceline').length;
        if(count > 1 ){
         var t = '#row_'+id
         $(t).remove(); 
         resequence();
        }
        else{alert("Der skal mindst være en vare linie.");}
}

function calc(id){
        var vat = parseFloat($('#vat_'+id).val());
        var antal = parseFloat($('#antal_'+id).val());
        var varebeloeb = parseFloat($('#varebeloeb_'+id).val());
        var subtotal = (varebeloeb +(vat/100* varebeloeb)) * antal;
        $('#linie_total_'+id).val(subtotal);
        calcTotal();
}   

function calcTotal(){
    var total = 0;
    $('.subtotal').each(function(){
        total += parseFloat($(this).val()); 
    });
     $('#VareTotal').val(total);
    return total;
}

function newdiv(){
    var count = $('.invoiceline').length;
    var row = $('<div class="invoiceline row" id=row_'+count+'></div>');
   
    //Beskrivelse 
    var beskrivelse = $('<div style="width: 120px; height: 45px; margin:3px;float:left;clear:left;"></div>'); 
    var beskrivelse_lable = $('<label id="Beskrivelse_label'+count+'" style="width:100px;">Beskrivelse</label>');
    var beskrivelse_text = $('<textarea class="beskrivelse" width="100" maxlength="100" style="height:1.5em; width:100px;" name="Fakturadata['+count+'][varenavn]"></textarea>');
    row.appendTo(".invoicelines");
    beskrivelse.appendTo(row);
    beskrivelse_lable.appendTo(beskrivelse);
    beskrivelse_text.appendTo(beskrivelse);
    //Varenummer
    var vn = $('<div style="width: 90px; height: 45px; margin:3px;float:left;"></div>');
    var vn_label = $('<label style="width:80px;">Varenummer</label>');
    var vn_text = $('<input name="Fakturadata['+ count  +'][Varenummer]" class="varenummer" style="width:80px;" maxlenght="16"></input>')    
    vn.appendTo(row);
    vn_label.appendTo(vn);
    vn_text.appendTo(vn);
    //Antal 
    var antal_div = $('<div style="width: 90px; height: 45px; margin:3px;float:left;"></div>'); 
    var antal_label = $('<label style="width:80px;">Antal</label>');
    var antal_field = $('<input class="antal" value="0" name="Fakturadata['+ count +'][antal]" id="antal_'+count+'" style="width:80px; maxlength="16" onblur="calc('+count+')"></input>');
    antal_div.appendTo(row);
    antal_label.appendTo(antal_div);
    antal_field.appendTo(antal_div);
    //Kontering
    var kont_div = $('<div style="width: 80px; height: 45px; margin:3px;float:left;"></div>');
    var kont_label = $('<label style="width:70px;">Kontering</label>');
    var kont_field = $('<input class="kontering" id="Kontering" style="width:45px;" maxlength="100" type="text" value="" name="Fakturadata['+count+'][Kontering]"></input>');
    kont_div.appendTo(row);
    kont_label.appendTo(kont_div);
    kont_field.appendTo(kont_div);
    //MVA
    var mva_div = $('<div style="width: 60px; height: 45px; margin:3px;float:left;"></div>'); 
    var mva_label = $('<label id="ehf_vat_label" for="">MVA</label>');
    var mva_select = $('<select class="vat" id="vat_'+count+'" name="Fakturadata[' + count + '][ehf_vat]" "onChange"="calc('+count+ ')"><option value="25">25%</option><option value="0">0%</option><option value="8">8%</option><option value="10">10%</option></select>');
    mva_div.appendTo(row);
    mva_label.appendTo(mva_div);
    mva_select.appendTo(mva_div);
    // varebeloeb
    var vbl_div = $('<div style="width: 90px; height: 45px; margin:3px;float:left;"></div>');
    var vbl_label = $('<label id="Varebeloeb_label" style="width:75px;" for="">Varebeloeb</label>');
    var vbl_field = $('<input class="varebeloeb" id="varebeloeb_' +count+'" style="width:75px;" onblur="calc(' +count+ ')" type="text" value="0" name="Fakturadata[' +count+ '][Varebeloeb]">');    
    vbl_div.appendTo(row);
    vbl_label.appendTo(vbl_div);
    vbl_field.appendTo(vbl_div);
    //ialt subtotal
    var subt_div = $('<div style="width:55px; height: 45px; margin:3px;float:left;"></div>');
    var subt_label = $('<label id="total_label" style="width:45px;" for="">I alt</label>');
    var subt_field = $('<input class="subtotal" style="width:45px;" class="testadd" id="linie_total_' +count+ '" readonly="readonly" type="text" value="" name="Fakturadata[' +count+ '][linie_total]" "onChange"="calcTotal()">');
    subt_div.appendTo(row);
    subt_label.appendTo(subt_div);
    subt_field.appendTo(subt_div);
    //buttons
    var but_div = $('<div style="width: 50px;  height: 45px; margin:3px; float:left; padding:15px 0 0 0;"></div>');
    var but_del = $('<input onclick="deleterow(' +count+ ')" class="fancybutton remove" type="button" value="-"> ');
    var but_add = $('<input onclick="newdiv()" class="fancybutton add" type="button" value="+">');
    but_div.appendTo(row);
    but_del.appendTo(but_div);
    but_add.appendTo(but_div);
    resequence();
}
function resequence(){
   var i = 0;
   $('.invoiceline').each(function(){
       $(this).attr('id', 'row_'+i);
       i++;
   });
   i=0;
   $('textarea[class="beskrivelse"]').each(function() {
       $(this).attr('name', 'Fakturadata['+i+'][varenavn]');
       i++;
   });
   i = 0;
   $('input[class="varenummer"]').each(function(){
              $(this).attr('name','Fakturadata['+i+'][Varenummer]');
              i++;
   });
   i = 0;
   $('input[class="antal"]').each(function() {
       $(this).attr('name', 'Fakturadata['+i+'][antal]');
       $(this).attr('id', 'antal_'+i);
       $(this).attr('onBlur','calc('+i+')');
       i++;
   });
   i = 0;
   $('input[class="kontering"]').each(function(){
       $(this).attr('name','Fakturadata[' +i+ '][Kontering]');
       i++;
   });
   i = 0;
   $('select[class="vat"]').each(function(){
       $(this).attr('name','Fakturadata[' +i+ '][ehf_vat]');
       $(this).attr('id','vat_'+i);
       $(this).attr('onChange','calc('+i+')');
       i++;
   });
   i = 0;
   $('input[class="varebeloeb"]').each(function(){
       $(this).attr('name','Fakturadata[' +i+ '][varebeloeb]');
       $(this).attr('id','varebeloeb_'+i);
       $(this).attr('onBlur','calc('+i+')');
       i++;
   });
   i = 0; 
   $('input[class="subtotal"]').each(function(){
       $(this).attr('name','Fakturadata[' +i+ '][linie_total]');
       $(this).attr('id','linie_total_'+i);
       i++;
   });
   i = 0; 
   $('input[class$="remove"]').each(function(){
       $(this).attr('onclick',  'deleterow(' +i+ ')');
       i++
   });
}

//          <div style="width: 55px; height: 45px; margin:3px;float:left;">
//             <?php echo CHtml::label('Pris','',array('id'=>'pris_label', 'style'=> 'width:45px;')); ?>
//             <?php echo CHtml::textField('Fakturadata[0][Pris]','',array('id'=>'antal', 'style'=> 'width:45px;','maxlength'=>16)); ?>
//            </div>