<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>CamTheGeek's XMR Profit Calculator</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script type="text/javascript" src="crypt.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="css/1.css" rel="stylesheet">
  </head>
<body class="body">
<div class="headnav">
  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href=""><img src="https://camthegeek.net/images/ctg.png" alt="CamTheGeek's XMR Profitability Calculator"><span class="monero-orange logo-text">CamTheGeek's Monero Profit Calculator</span>
        </a>
      </div>
    </div>
  </nav>
</div>
    <div class="container">
    <p><span id="errors" class="error">&nbsp;</span></p>
      <div class="row">
        <div class="col-md-6 col-dark">
          <div class="col-md-12">
          <h2 class="page-title">Enter data below</h2>       
          </div>
<!-- form begins here -->
<form method="post" action="#" id="hashit">
<!-- begin table -->
              <div class="divTable">
                <div class="divTableBody">
                   <div class="divTableRow">
                      <div class="divTableCell"><p class="text-label">Mining Hashrate</p></div>
                      <div class="divTableCell"> 
                        <a class="tooltips">
                          <input type="text" id="hashrate" name="hashrate" size="5" autocomplete="off"/>
                          <select id="hash" name="hashtype">
                            <option value="normal">H/sec</option>
                            <option value="kilo">KH/sec</option>
                          </select>
                          <span>Total hashrate from your active miners</span>
                        </a>
                      </div>
                    </div>
<div class="divTableRow">
<div class="divTableCell"><p class="text-label">Mining Duration</p></div>
<div class="divTableCell"><a class="tooltips"><input type="text" id="hoursperDay" name="hoursDAY" autocomplete="off"/><span>Average hours per day of mining</span></a></div>
</div>
<div class="divTableRow">
<div class="divTableCell"><p class="text-label">Last Block Difficulty</p></div>
<div class="divTableCell"><a class="tooltips"><input type="text" id="diff" name="difficulty" value="13600344462" readonly><span>Data from ChainRadar.com</span></a><br/><span class="refresh">Refreshes every 5 minutes</span></div>
</div>
<div class="divTableRow">
<div class="divTableCell"><p class="text-label">Last Block Reward</p></div>
<div class="divTableCell"><a class="tooltips"><input type="text" id="breward" name="reward" value="7.4700" readonly /><span>Data from ChainRadar.com</span></a><br/><span class="refresh">Refreshes every 5 minutes</span></div>
</div>
<div class="divTableRow">
<div class="divTableCell"><h4 class="page-title">Fees</h4></div>
<div class="divTableCell">&nbsp;</div>
</div>
<div class="divTableRow">
<div class="divTableCell"><p class="text-label">Pool Total Fee</p></div>
<div class="divTableCell"><a class="tooltips"><input type="text" id="poolFEE" name="poolFEE" value="0" autocomplete="off"/><span>Enter your pools <b>total</b> fees as a %</span></a> <p class="text-label">%</p></div>
</div>
<div class="divTableRow">
<div class="divTableCell"><p class="text-label">Mining Software Fee</p></div>
<div class="divTableCell"><a class="tooltips"><input type="text" id="minerFEE" name="minerFEE" value="0" autocomplete="off"/><span>Total % of fees from mining software</span></a> <p class="text-label">%</p></div>
</div>
<div class="divTableRow">
<div class="divTableCell"><h4 class="page-title">Currency Rates</div>
<div class="divTableCell">&nbsp;</div>
</div>
<div class="divTableRow">
<div class="divTableCell"><p class="text-label">Current XMR Worth</p></div>
<div class="divTableCell"><a class="tooltips"><input type="text" id="dollars" name="dollars" readonly><span>Data from Cryptonator.com</span></a> $<br/><span class="refresh">Refreshes every 5 minutes</span></div>
</div>
<div class="divTableRow">
<div class="divTableCell"><p class="text-label">Current XMR BTC Value</p></div>
<div class="divTableCell"><a class="tooltips"><input type="text" id="btc-value" name="btcvalue" readonly><span>Data from Cryptonator.com</span></a><br/><span class="refresh">Refreshes every 5 minutes</span></div>
</div>
<div class="divTableRow">
<div class="divTableCell"><p class="text-label">Current BTC Worth</p></div>
<div class="divTableCell"><a class="tooltips"><input type="text" id="btc-worth" name="btcworth" readonly><span>Data from Cryptonator.com</span></a> $<br/><span class="refresh">Refreshes every 5 minutes</span></div>
</div>
<div class="divTableRow">
<div class="divTableCell"><h4 class="page-title">Electricity costs</h4></div>
<div class="divTableCell">&nbsp;</div>
</div>
<div class="divTableRow">
<div class="divTableCell"><p class="text-label">Power</p></div>
<div class="divTableCell"><a class="tooltips"><input type="text" id="watts" name="watts" autocomplete="off"/><span>Estimated wattage between all miners</span></a> W</div>
</div>
<div class="divTableRow">
<div class="divTableCell"><p class="text-label">Cost</p></div>
<div class="divTableCell"><a class="tooltips"><input type="text" id="kWhrate" name="kWhrate" value=".12" autocomplete="off"/><span>kWh rate in USD</span></a> $</div>
</div>
</div>
</div>

<!-- end tablle --> 

            <div class="col-md-12 center">
                <input class="submit" type="Submit" name="submit" id="submit" value="Calculate">
            </div>
        </form>
<!-- form ends here -->
        </div>


        <div class="col-md-6 col-dark">
          <div class="col-md-12">
          <h2 class="page-title">Results</h2>       
          </div>


<div class="divTable">
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell"><h4 class="page-title">XMR Mined</h4></div>
<div class="divTableCell"></div>
<div class="divTableCell"><h4 class="page-title">XMR to USD</h4></div>
</div>

<div class="divTableRow dark-row">
<div class="divTableCell"><p class="text-label bold">Hourly</p></div>
<div class="divTableCell"><p class="text-label"><span id="hourly"></span></p></div>
<div class="divTableCell center"><p><span id="earnedUSDh"> </span></p></div>
</div>
<div class="divTableRow light-row">
<div class="divTableCell"><p class="text-label bold">Daily</p></div>
<div class="divTableCell"><p><span id="daily"></span></p></div>
<div class="divTableCell center"><p><span id="earnedUSDd"> </span></p></div>

</div>
<div class="divTableRow dark-row">
<div class="divTableCell"><p class="text-label bold">Weekly</p></div>
<div class="divTableCell"><p><span id="weekly"></span></p></div>
<div class="divTableCell center"><p><span id="earnedUSDw"> </span></p></div>

</div>
<div class="divTableRow light-row">
<div class="divTableCell"><p class="text-label bold">Monthly</p></div>
<div class="divTableCell"><p><span id="monthly"></span></p></div>
<div class="divTableCell center"><p><span id="earnedUSDm"> </span></p></div>

</div>
<div class="divTableRow dark-row">
<div class="divTableCell"><p class="text-label bold">Yearly</p></div>
<div class="divTableCell"><p><span id="fullyr"></span></p></div>
<div class="divTableCell center"><p><span id="fullyrUSDm"></span></p></div>
</div>

<div class="divTableRow">
<div class="divTableCell"><h4 class="page-title">Cost of Mining</h4></div>
<div class="divTableCell"></div>
<div class="divTableCell"><h4 class="page-title">Profits</h4></div>
</div>

<div class="divTableRow dark-row">
<div class="divTableCell"><p class="text-label bold">Hourly</p></div>
<div class="divTableCell"><p><span id="hourlykwh"> </span></p></div>
<div class="divTableCell center"><p><span id="hourlyprofits"> </span></p></div>
</div>

<div class="divTableRow light-row">
<div class="divTableCell"><p class="text-label bold">Daily</p></div>
<div class="divTableCell"><p><span id="dailykwh"> </span></p></div>
<div class="divTableCell center"><p><span id="dailyprofits"> </span></p></div>
</div>

<div class="divTableRow dark-row">
<div class="divTableCell"><p class="text-label bold">Weekly</p></div>
<div class="divTableCell"><p><span id="weeklykwh"> </span></p></div>
<div class="divTableCell center"><p><span id="weeklyprofits"> </span></p></div>
</div>

<div class="divTableRow light-row">
<div class="divTableCell"><p class="text-label bold">Monthly</p></div>
<div class="divTableCell"><p><span id="monthlykwh"> </span></p></div>
<div class="divTableCell center"><p><span id="monthlyprofits"> </span></p></div>
</div>

<div class="divTableRow dark-row">
<div class="divTableCell"><p class="text-label bold">Yearly</p></div>
<div class="divTableCell"><p><span id="fullyrkwh"></span></p></div>
<div class="divTableCell center"><p><span id="fullyrprofits"></span></p></div>
</div>
<!-- btc stats -->
<div class="divTableRow">
<div class="divTableCell"><h4 class="page-title">XMR to BTC</h4></div>
<div class="divTableCell"></div>
<div class="divTableCell"><h4 class="page-title">BTC to USD</h4></div>
</div>

<div class="divTableRow dark-row">
<div class="divTableCell"><p class="text-label bold">Hourly</p></div>
<div class="divTableCell"><p><span id="btc-hourly"></span></p></div>
<div class="divTableCell center"><p><span id="btcusdhourly"></span></p></div>
</div>

<div class="divTableRow light-row">
<div class="divTableCell"><p class="text-label bold">Daily</p></div>
<div class="divTableCell"><p><span id="btc-daily"></span></p></div>
<div class="divTableCell center"><p><span id="btcusddaily"></span></p></div>
</div>

<div class="divTableRow dark-row">
<div class="divTableCell"><p class="text-label bold">Weekly</p></div>
<div class="divTableCell"><p><span id="btc-weekly"></span></p></div>
<div class="divTableCell center"><p><span id="btcusdweekly"></span></p></div>
</div>

<div class="divTableRow light-row">
<div class="divTableCell"><p class="text-label bold">Monthly</p></div>
<div class="divTableCell"><p><span id="btc-monthly"></span></p></div>
<div class="divTableCell center"><p><span id="btcusdmonthly"></span></p></div>
</div>

<div class="divTableRow dark-row">
<div class="divTableCell"><p class="text-label bold">Yearly</p></div>
<div class="divTableCell"><p><span id="fullyrbtc"></span></p></div>
<div class="divTableCell center"><p><span id="fullyrbtcusd"></span></p></div>
</div>
</div>
</div>
<!-- end of table -->

        </div>
      </div>
<hr>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
  <div class="col-md-12"><h4 class="page-title">To Do</h4></div>
  <div class="col-md-12"><p class="strikeit todo">To do: Update rates when manually entered values change above without clicking submit.</p>
                <p class="todo">Option to chose currency</p>
                <p class="strikeit todo">BTC to XMR / XMR to BTC value</p>
                <p class="strikeit todo">Miner software developer fee's</p>
                <p class="strikeit todo">Quarter, Half Year, 3 Quarters and Full Year stats at current rates</p>
                <p class="strikeit todo">Transaction fees going from pool/wallet/wallet/exchange/usd -- CANCELED</p>
                </div>
<div class="col-md-3"></div>
</div>

    </div> <!-- /container -->
<hr>
<div class="row">
<div class="col-md-12 col-light navbar-inverse ">
          <p class="donations">Donations: Not required but appreciated as it took time to make this from scratch!</p>
          <p class="donations">Send Monero to: 4Ah6e5exEWfNC9fGZV2zga6PGX79M7yX3jYytigs4XHubWfqnoLurHrNwtUp9tVWpdfQ2iZqnEyNA2ckq5iXJthLFvgBcxc</p>
</div>
</div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
