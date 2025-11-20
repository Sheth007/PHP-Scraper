<script>
    function hul() {

        fetch('https://priceapi.moneycontrol.com/pricefeed/notapplicable/inidicesindia/in%3Bnbx')
            .then(response => response.json())  // Parse the response as JSON
            .then(data => {
                // fetching the 'lastTradedPrice' is directly in the response object
                const price = data.data.pricecurrent;

                if (price) {
                    document.getElementById('bn-current-price').innerText = price;
                    // console.log('Price updated:', price, 'at', new Date().toLocaleTimeString());
                } else {
                    console.log('Price data not found!');
                }
            })
            .catch(error => {
                console.error('Error fetching price:', error);
                // document.getElementById('current-price').innerText = 'Error loading data';
            });
    }

    function nifty50() {
        fetch('https://priceapi.moneycontrol.com/pricefeed/notapplicable/inidicesindia/in%3BNSX')
            .then(response => response.json())  // Parse the response as JSON
            .then(data => {
                // fetching the 'lastTradedPrice' is directly in the response object
                const price = data.data.pricecurrent;

                if (price) {
                    console.log('Price data not found!');
                }
            })
            .catch(error => {
                console.error('Error fetching price:', error);
                // document.getElementById('current-price').innerText = 'Error loading data';
            });
    }

    hul();
    nifty50();
</script>

<body>
    <h4>Index</h4>
    <div>Bank Nifty : <span id="bn-current-price">Loading...</span></div><br>
    <div>Nifty 50 : <span id="n5-current-price">Loading...</span></div><br>
</body>

</html>
<?php
// require "market_update.php";
?>