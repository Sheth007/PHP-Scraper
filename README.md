# Stock Market Dashboard

A real-time stock market monitoring dashboard that displays live prices for equity stocks and market indices with 1-second refresh intervals(which you can customize) when the market is open.

## Features

- 📈 Real-time stock price updates (1-second refresh when market is open)
- 📊 Support for both equity stocks and market indices
- ➕ Easy stock addition through a simple interface
- 🔄 Auto-updating market status
- 🌐 Data sourced from MoneyControl API

## Installation

1. **Clone the repository**
```bash
   git clone <repository-url>
   cd <repository-name>
```

2. **Verify folder structure**
   - `equity/` - Contains equity stock files
   - `indices/` - Contains market indices files
   - `index.php` - Main dashboard file

## Usage

### Running the Dashboard

1. **Start the application**
   - Open `index.php` in your browser with an active internet connection
   - The dashboard will display:
     - Current market status
     - Index stocks
     - Equity stocks
   - Prices update every 1 second when the market is open

### Adding New Stocks

1. **Open the add stock interface**
   - Click the "Add New Stock" button on the main dashboard
   - A new window will load with a form

2. **Fill in stock details**
   - Enter the required stock information
   - Click the "Generate" button

3. **Integrate the generated code**
   - After clicking "Generate", you'll be redirected to `index.php`
   - The code will be automatically copied to your clipboard
   
4. **Paste the code in appropriate file**
   - Open the respective folder (`equity/` or `indices/`)
   - Open `equity.php` or `indices.php`
   - Paste the code at the bottom, **before the closing `</script>` tag**

5. **Add the setInterval function**
   - Open the other PHP file in the respective folder
   - Add a `setInterval` function to call your new stock function
   - Or copy-paste an existing line and change the function name

6. **Save and refresh**
   - Save all modified files
   - Refresh or reopen `index.php`
   - Your new stock will appear in the respective section (Index or Equity)

## Finding API Endpoints

To add a new stock, you need to find its MoneyControl API endpoint:

### Step-by-Step Guide

1. **Search the stock on MoneyControl**
   - Go to [MoneyControl](https://www.moneycontrol.com)
   - Search for your desired stock (e.g., "HUL")

2. **Open Developer Tools**
   - After the page loads, press `F12` or right-click and select "Inspect"
   - Navigate to the **Network** tab

3. **Find the API endpoint**
   - The stock page URL will look like:
```
     https://www.moneycontrol.com/india/stockpricequote/personal-care/hindustanunilever/HU
```
   - In the Network tab, search for the last parameter (e.g., "HU")
   - Filter the results to find the API call
   - Look for a file named `hu` or `hl`

4. **Copy the API URL**
   - Right-click on the API call
   - Copy the full request URL
   - Use this URL in the API field when adding the stock

### Example

For Hindustan Unilever (HUL):
- **Stock URL**: `https://www.moneycontrol.com/india/stockpricequote/personal-care/hindustanunilever/HU`
- **Search in Network tab**: "HU"
- **Find**: API file `hu` or similar
- **Copy**: The complete API URL from the request

## Requirements

- PHP server (Apache/Nginx)
- Active internet connection
- Modern web browser with JavaScript enabled

## File Structure
```
project-root/
│
├── index.php              # Main dashboard file
├── equity/
│   ├── equity.php         # Equity stocks handler
│   └── [other files]
├── indices/
│   ├── indices.php        # Indices handler
│   └── [other files]
└── README.md
```

## Notes

- Ensure you have an active internet connection for real-time data
- The dashboard updates every 1 second when the market is open
- All new stock code should be added before the closing `</script>` tag
- API endpoints are sourced from MoneyControl

## License

[Add your license information here]

## Contributing

[Add contribution guidelines here]
