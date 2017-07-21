$(document).ready(function() {  
        $('#hashit').submit(function(e){
        e.preventDefault();
        $.post('proc.php', $(this).serialize() )
            .done(function(data){
            // errors
                $("#errors").html($(data).filter('#errorHOURS').html());
                $("#errors").html($(data).filter('#errorHASH').html());
                $("#errors").html($(data).filter('#errorWATTS').html());
                $("#errors").html($(data).filter('#noERRORS').html());
            // mined XMR
                $("#hourly").html($(data).filter('#hourly').html());
	            $("#daily").html($(data).filter('#daily').html());
                $("#weekly").html($(data).filter('#weekly').html());
                $("#monthly").html($(data).filter('#monthly').html());
                $("#qtryr").html($(data).filter('#qtr1').html());
                $("#halfyr").html($(data).filter('#qtrH').html());
                $("#3qtryr").html($(data).filter('#qtr3').html());
                $("#fullyr").html($(data).filter('#4qtr').html());
            // costs
                $("#dailykwh").html($(data).filter('#costperday').html());
                $("#weeklykwh").html($(data).filter('#costperweek').html());
                $("#hourlykwh").html($(data).filter('#costperhour').html());
                $("#monthlykwh").html($(data).filter('#costpermonth').html());
                $("#qtryrkwh").html($(data).filter('#costperquarter').html());
                $("#halfyrkwh").html($(data).filter('#costperhalfyear').html());
                $("#3qtryrkwh").html($(data).filter('#costper3qtr').html());
                $("#fullyrkwh").html($(data).filter('#costperyear').html());
            // earnings
                $("#earnedUSDh").html($(data).filter('#earnedperhour').html());
                $("#earnedUSDd").html($(data).filter('#earnedperday').html());
                $("#earnedUSDw").html($(data).filter('#earnedperweek').html());
                $("#earnedUSDm").html($(data).filter('#earnedpermonth').html());
                $("#qtryrUSDm").html($(data).filter('#earnedperquater').html()); 
                $("#halfyrUSDm").html($(data).filter('#earnedperhalfyear').html()); 
                $("#3qtryrUSDm").html($(data).filter('#earnedper3quarters').html()); 
                $("#fullyrUSDm").html($(data).filter('#earnedperyear').html()); 
            // profits
                $("#hourlyprofits").html($(data).filter('#profitshour').html());
                $("#dailyprofits").html($(data).filter('#profitsday').html());
                $("#weeklyprofits").html($(data).filter('#profitsweek').html());
                $("#monthlyprofits").html($(data).filter('#profitsmonth').html());
                $("#qtryrprofits").html($(data).filter('#profitsquarter').html()); 
                $("#halfyrprofits").html($(data).filter('#profitshalfyear').html());  
                $("#3qtryrprofits").html($(data).filter('#profits3quarter').html()); 
                $("#fullyrprofits").html($(data).filter('#profitsfullyear').html()); 
            // bitcoin trade-in current value
                $("#btc-daily").html($(data).filter('#btcDaily').html());
                $("#btc-hourly").html($(data).filter('#btcHourly').html());
                $("#btc-monthly").html($(data).filter('#btcMonthly').html());
                $("#btc-weekly").html($(data).filter('#btcWeekly').html());
                $("#qtryrbtc").html($(data).filter('#btcqtr').html());
                $("#halfyrbtc").html($(data).filter('#btchy').html());
                $("#3qtryrbtc").html($(data).filter('#btch3qtr').html());
                $("#fullyrbtc").html($(data).filter('#btchfy').html());
            // bitcoin to USD current value
                $("#btcusdhourly").html($(data).filter('#btcusdHourly').html());
                $("#btcusddaily").html($(data).filter('#btcusdDaily').html());
                $("#btcusdweekly").html($(data).filter('#btcusdWeekly').html());
                $("#btcusdmonthly").html($(data).filter('#btcusdMonthly').html());
                $("#qtryrbtcusd").html($(data).filter('#btcusdqtr').html());
                $("#halfyrbtcusd").html($(data).filter('#btcusdhy').html());
                $("#3qtryrbtcusd").html($(data).filter('#btcusdh3qtr').html());
                $("#fullyrbtcusd").html($(data).filter('#btcusdhfy').html());
            })
            .fail(function(){
                alert('Submit Failed');
        });
    });
});

$(document).ready(function() { 
    $("#hashrate").on("change keyup paste click", function(){
        $('#hashit').submit();
    });
});
$(document).ready(function() { 
    $("#hoursperDay").on("change keyup paste click", function(){
        $('#hashit').submit();
    });
});
$(document).ready(function() { 
    $("#poolFEE").on("change keyup paste click", function(){
        $('#hashit').submit();
    });
});
$(document).ready(function() { 
    $("#minerFEE").on("change keyup paste click", function(){
        $('#hashit').submit();
    });
});
$(document).ready(function() { 
    $("#watts").on("change keyup paste click", function(){
        $('#hashit').submit();
    });
});
$(document).ready(function() { 
    $("#kWhrate").on("change keyup paste click", function(){
        $('#hashit').submit();
    });
});