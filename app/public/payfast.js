function callPayFast(){

    if($('input[type=checkbox]').prop('checked')){
        $.ajax({
            url: 'payfast.php', 
            type: "POST",
            data: { 
                merchant_id: document.getElementById("merchant_id").value,  
                merchant_key: document.getElementById("merchant_key").value,
                return_url: document.getElementById("return_url").value,
                cancel_url: document.getElementById("cancel_url").value,
                notify_url: document.getElementById("notify_url").value,
    
                name_first: document.getElementById("name_first").value,
                name_last: document.getElementById("name_last").value,
                email_address: document.getElementById("email_address").value,
                cell_number: document.getElementById("cell_number").value,
    
                m_payment_id: document.getElementById("m_payment_id").value,
                amount: document.getElementById("amount").value,
                item_name: document.getElementById("item_name").value,
                item_description: document.getElementById("item_description").value
            },
            success: function(result){
                data = JSON.parse(result);
    
                return data;
            }
        });
    }else{
        alert('The checkbox is not check. Cannot proceed with the transaction until the terms and conditions are agreed upon!');
    }
}