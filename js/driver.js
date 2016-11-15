
var url = "http://localhost/lab8/php/driver.php";
window.onload = init;

function init()
{   
    $("#submitselect").click(submitQuery);
}

function submitQuery(event)
{
    var country = $('#countryselect').val();
    var city = $('#cityselect').val();
    var population = $('#popselect').val();
    
    var self = this;
    
    $.ajax({
        type: "POST",
        url: url,
        data: "country="+country+"&city="+city+"&population="+population,
        success: function(response)
        {   
            self.output = response;
        }
    });
    
    $("#result").text("before");
            
    alert(self.output);
    
    $("#result").text(self.output);
    alert("3");
}

