<script>
    let snprice = null;
    function sensex() {

        fetch('https://priceapi.moneycontrol.com/pricefeed/notapplicable/inidicesindia/in%3BSEN')
            .then(response => response.json())  // Parse the response as JSON
            .then(data => {
                // fetching the 'lastTradedPrice' is directly in the response object
                const sxprice = data.data.pricecurrent;
                bnpbox = document.getElementById('sn-current-price');
                // document.getElementById('bn-current-price') = price;

                if (sxprice) {
                    bnpbox.innerText = sxprice;
                    bnpbox.style.background = snprice === null ? "transparent" : sxprice > snprice ? "green" : sxprice < snprice ? "red" : "transparent";
                    // console.log('Price updated:', price, 'at', new Date().toLocaleTimeString());

                    snprice = sxprice
                } else {
                    console.log('Price data not found!');
                }
            })
            .catch(error => {
                console.error('Error fetching price:', error);
                // document.getElementById('current-price').innerText = 'Error loading data';
            });
    }

    let bnprice = null;
    function banknifty() {

        fetch('https://priceapi.moneycontrol.com/pricefeed/notapplicable/inidicesindia/in%3Bnbx')
            .then(response => response.json())  // Parse the response as JSON
            .then(data => {
                // fetching the 'lastTradedPrice' is directly in the response object
                const bprice = data.data.pricecurrent;
                bnpbox = document.getElementById('bn-current-price');
                // document.getElementById('bn-current-price') = price;

                if (bprice) {
                    bnpbox.innerText = bprice;
                    bnpbox.style.background = bnprice === null ? "transparent" : bprice > bnprice ? "green" : bprice < bnprice ? "red" : "transparent";
                    // console.log('Price updated:', price, 'at', new Date().toLocaleTimeString());

                    bnprice = bprice
                } else {
                    console.log('Price data not found!');
                }
            })
            .catch(error => {
                console.error('Error fetching price:', error);
                // document.getElementById('current-price').innerText = 'Error loading data';
            });
    }

    let n5price = null;
    function nifty50() {
        fetch('https://priceapi.moneycontrol.com/pricefeed/notapplicable/inidicesindia/in%3BNSX')
            .then(response => response.json())  // Parse the response as JSON
            .then(data => {
                // fetching the 'lastTradedPrice' is directly in the response object
                const nprice = data.data.pricecurrent;
                n5pbox = document.getElementById('n5-current-price');

                if (nprice) {
                    n5pbox.innerText = nprice;
                    n5pbox.style.background = n5price === null ? "transparent" : nprice > n5price ? "green" : nprice < n5price ? "red" : "transparent";
                    // console.log('Price updated:', price, 'at', new Date().toLocaleTimeString());
                    n5price = nprice
                } else {
                    console.log('Price data not found!');
                }
            })
            .catch(error => {
                console.error('Error fetching price:', error);
                // document.getElementById('current-price').innerText = 'Error loading data';
            });
    }

    banknifty();
    nifty50();
    sensex();
</script>

<body>
    <h4>Index</h4>
    <div>Sensex : <span id="sn-current-price">Loading...</span></div><br>
    <div>Bank Nifty : <span id="bn-current-price">Loading...</span></div><br>
    <div>Nifty 50 : <span id="n5-current-price">Loading...</span></div><br>
</body>

</html>
<?php
require "i_market_update.php";
?>