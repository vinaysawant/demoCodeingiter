/**
 * Created by vinay on 8/3/15.
 */
$(document).ready(function(){
    $( "#datepicker" ).datepicker({
        dateFormat: 'd-m-yy'
    });

    $("#addOwnerBtn").click(function(){

        var name = $('#name').val();
        var address = $('#address').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var state;
        if(name.trim() != '' && address.trim() != '' && email.trim() != '' && phone.trim != ''){
            state = true;
        }else{
            state = false;
        }
        console.log("hi 1");
        return state;
    });

    $("#addPetBtn").click(function(){

        var name = $('#name').val();
        var sex = $('#sex').val();
        var age = $('#age').val();
        var species = $('#species').val();
        var state;
        if(name.trim() != '' && sex.trim() != '' && age.trim() != '' && species.trim() != ''){
            state = true;
        }else{
            state = false;
        }
        console.log("hi 2");
        return state;
    });

    $("#addTreatmentBtn").click(function(){

        var sign = $('#sign').val();
        var treatment = $('#treatment').val();
        var state;
        if(sign.trim() != '' && treatment.trim() != ''){
            state = true;
        }else{
            state = false;
        }
        console.log("hi 3");
        return state;
    });

    $("#addMedicineBtn").click(function(){

        var name = $('#name').val();
        var quantity = $('#quantity').val();
        var state;
        if(name.trim() != '' && quantity.trim() != ''){
            state = true;
        }else{
            state = false;
        }

        console.log("hi 4");
        return state;
    });


    $("#addFoodBtn").click(function(){

        var brand = $('#brand').val();
        var name = $('#name').val();
        var quantity = $('#quantity').val();
        var state;
        if(brand.trim() != '' && name.trim() != ''&& quantity.trim() != ''){
            state = true;
        }else{
            state = false;
        }

        console.log("hi 4");
        return state;
    });
    
    $("#sellFoodbtn").click(function(){

        var quantity = $('#quantity').val();
        var state;
        if(quantity.trim() != ''){
            state = true;
        }else{
            state = false;
        }

        console.log("hi 4");
        return state;
    });


});
