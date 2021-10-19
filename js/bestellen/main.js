function toggle() {
        //getting data and assigning it to the modal before opening
        getData();
        //opening modal
        $(".modal").toggle();
    }

    function toggleUpdate() {
        location.reload();
    }

    function afrekenen() {
        $(".modal-body").empty()
        $(".modal-body").append('<div class="row"><div class="col-md-6"><small>First name</small><input type="text" class="form-control"></div><div class="col-md-6"><small>Last name</small><input type="text" class="form-control"></div><div class="col-md-6"><small>Phone number</small><input type="text" class="form-control"></div><div class="col-md-6"><small>Email</small><input type="text" class="form-control"></div><div class="col-md-6"><small>Street name</small><input type="text" class="form-control"></div><div class="col-md-6"><small>Postal code</small><input type="text" class="form-control"></div><div class="col-md-6"><small>Betaalmethode</small><select name="" id="" class="form-control" style="font-family: Baskervville"><optgroup style="font-family: Baskervville" label="Methods"><option value="ideal">Ideal</option><option value="paypal">Paypal</option><option value="paysafecard">PaySafeCard</option></optgroup></select></div><div class="col-md-6" id="service"><small>Service</small><select name="" id="" class="form-control" style="font-family: Baskervville"><optgroup style="font-family: Baskervville" label="Services"><option value="Ing">Ing</option><option value="Rabobank">Rabobank</option><option value="Bunq">Bunq</option></optgroup></select></div><div class="col-md-12"><small>Time</small><select class="form-control time"></select></div></div>')
        makeTimeTable()    
    }

    function add(val1, val2, val3) {
        let amountNumber = $(`#${val3}`).val()
        console.log(amountNumber)
       // api request to add to shopping basket
        $.post('./api/bestel.php', {
            name: val1,
            currency: val2,
            amount: amountNumber
        }, function (response) { //amount toevoegen
            // see what response is
            console.log(response)
            // reloading page to update total price
            location.reload();
        })
    }

    function getData() {
        // api call to get the data
        $.post('./api/getOrderData.php', {
            name: "data"
        }, function (response) {
            // assigning data to the repsonse we got
            let data = response;
            // transfor the data in a usable array
            const obj = JSON.parse(data);
            console.log(obj)
            // to get the total we set it to 0 and later add all prices
            let total = 0;

            // first empty old table of data before adding new data
            $(".modal-body").empty();

            // loop over all the data and append it
            for (index of obj) {
                // add the price to total price + replacing the dollar sign with nothing
                total += parseFloat(index.currency.replace("€", "") * index.amount);
                $(".modal-body").append('<div class="row"><div class="col-md-8 line-height"><small>' + index.name + '(' + index.amount + ')</small></div><div class="col-md-2 line-height"><small>' + index.currency +
                    '</small></div><div class="col-md-2 line-height"><i class="fas fa-times pointer" style="color: red;" onclick="removeFromBasket(' +
                    obj.indexOf(index) + ')"></i></div></div><hr>')
            }
            // add the total price to the end
            $(".modal-body").append('<div class="col-md-3 offset-md-9"><small>Total: €' + total.toFixed(2) + '</small></div>')
        })
    }

    // removes a dish from the basket
    function removeFromBasket(val) {
        // make post call to delete item from shopping basket
        $.post('./api/deleteProductFrombasket.php', {
            index: val
        }, function (response) {
            // see what response is
            console.log(response)
            // reloading data
            getData();

        })
    }