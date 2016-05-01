/**
 * Created by Josh on 4/30/2016.
 */

function getUsers()
{
    //state = $("state").value; // also works
    //or document.getElement...
    //Or param
    //parameters: name, value
    //TODO 1: create your Ajax request here using Prototype's Ajax request model
    new Ajax.Request( "get_zips.php",
        {
            method: "get",
            parameters: {type:state},
            onSuccess: ajaxSuccess,
            onFailure: ajaxFailure
        } );
}
//function to execute when ajax request is successful
function ajaxSuccess(ajax){

    var res = ajax.responseText.split('<br />');


    //TODO 2: split the ajax.responseText content at the <br /> character and store the
    //result in the 'res' variable (see the popcorn example to
    //understand how split can be used)


    var str;

    str="<select id=\"zip\" name=\"zip\">";
    //We want to create a select box like this in JavaScript
    //and make it the value of the 'str' variable. The code below does this.
    //<select id="zip" name="zip>
    //<option value="21044">21044</option>
    //<option value="21045">21045</option>
    for (var i =0; i < res.length; i++){
        if(res[i] != "")
        {
            str=str + "<option value=\""+res[i]+"\">"+res[i]+"</option>";
        }
    }
    str = str + "</select>";


    //TODO 4: change the content of the ziparea div element to contain the 'str' variable above
    document.getElementById('zip').innerHTML = str;

}
//function to execute when ajax request is unsuccessful
function ajaxFailure(){
    alert("Ajax request failed");
}
