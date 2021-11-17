function add_to_total(el){
    var parent = $(el).closest('tr');
    var price = parent.find('.price').val() == "" ? 1 : parent.find('.price').val();
    var qty = parent.find('.qty').val() == "" ? 1 : parent.find('.qty').val();
    var total = price * qty;
    parent.find('.total_price').val(total);
  }