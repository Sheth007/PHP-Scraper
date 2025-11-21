<script>
    let hpprice = null;
    function hul() {
        fetch('https://priceapi.moneycontrol.com/pricefeed/nse/equitycash/HL')
            .then(response => response.json())
            .then(data => {
                const price = data.data.pricecurrent;
                const pbox = document.getElementById('hul');
                if (price) {
                    pbox.innerText = price;
                    pbox.style.background = hpprice === null ? "transparent" : price > hpprice ? "green" : price < hpprice ? "red" : "transparent";

                    // console.log('Price updated:', price, 'at', new Date().toLocaleTimeString());

                    hpprice = price;
                } else {
                    console.log('Price data not found!');
                }
            })
            .catch(error => {
                console.error('Error fetching price:', error);
                // document.getElementById('current-price').innerText = 'Error loading data';
            });
    }

    let gpprice = null;
    function bgv() {
        fetch('https://priceapi.moneycontrol.com/pricefeed/nse/equitycash/BGV')
            .then(response => response.json())
            .then(data => {
                const price = data.data.pricecurrent;
                const pbox = document.getElementById('bgv');
                if (price) {
                    pbox.innerText = price;
                    pbox.style.background = gpprice === null ? "transparent" : price > gpprice ? "green" : price < gpprice ? "red" : "transparent";

                    // console.log('Price updated:', price, 'at', new Date().toLocaleTimeString());

                    gpprice = price;
                } else {
                    console.log('Price data not found!');
                }
            })
            .catch(error => {
                console.error('Error fetching price:', error);
                // document.getElementById('current-price').innerText = 'Error loading data';
            });
    }

    let iipprice = null;
    function iil() {
        fetch('https://priceapi.moneycontrol.com/pricefeed/nse/equitycash/IIL04')
            .then(response => response.json())
            .then(data => {
                const price = data.data.pricecurrent;
                const pbox = document.getElementById('iil');
                if (price) {
                    pbox.innerText = price;
                    pbox.style.background = iipprice === null ? "transparent" : price > iipprice ? "green" : price < iipprice ? "red" : "transparent";

                    // console.log('Price updated:', price, 'at', new Date().toLocaleTimeString());

                    iipprice = price;
                } else {
                    console.log('Price data not found!');
                }
            })
            .catch(error => {
                console.error('Error fetching price:', error);
                // document.getElementById('current-price').innerText = 'Error loading data';
            });
    }

    let igpprice = null;
    function ig() {
        fetch('https://priceapi.moneycontrol.com/pricefeed/nse/equitycash/IGE02')
            .then(response => response.json())
            .then(data => {
                const price = data.data.pricecurrent;
                const pbox = document.getElementById('ige');
                if (price) {
                    pbox.innerText = price;
                    pbox.style.background = igpprice === null ? "transparent" : price > igpprice ? "green" : price < igpprice ? "red" : "transparent";

                    // console.log('Price updated:', price, 'at', new Date().toLocaleTimeString());

                    igpprice = price;
                } else {
                    console.log('Price data not found!');
                }
            })
            .catch(error => {
                console.error('Error fetching price:', error);
                // document.getElementById('current-price').innerText = 'Error loading data';
            });
    }

    hul();
    bgv();
    iil();
    ig();
</script>

<body>
    <h4>Equity</h4>
    <div>Hindustan Uniliver : <span id="hul">Loading...</span></div><br>
    <div>Groww : <span id="bgv">Loading...</span></div><br>
    <div>Inox India : <span id="iil">Loading...</span></div><br>
    <div>Inox Green : <span id="ige">Loading...</span></div><br>
</body>

</html>
<?php
require "e_market_update.php";
?>