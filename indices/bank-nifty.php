<script>
    function fetchPrice() {

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

    fetchPrice();

    // uncommnent this below line to fetch the price live
    // setInterval(fetchPrice, 500);

</script>


<body>
    <div>Bank Nifty : <span id="bn-current-price">Loading...</span></div>
</body>

</html>
<?php
// include "market_update.php";
?>